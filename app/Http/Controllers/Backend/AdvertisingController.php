<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertising;
use Illuminate\Support\Facades\Storage;

class AdvertisingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advs = Advertising::latest()->paginate(5);
        return view('Backend.advertising.index', compact('advs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Backend.advertising.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . $image->getClientOriginalName();
            Storage::disk('local')->putFileAs('advertising/', $image, $filename);
        } else {
            return 'No';
        }

        $adv = new Advertising;
        $adv->image = $filename;
        $adv->alt = $request->alt;
        $adv->status = $request->status;
        $adv->save();

        return redirect(route('advertising.index'))->with('message', 'پست با موفقیت انجام شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Advertising $advertising)
    {
        // if (Auth::user()->can('posts.update')) {
        $adv = Advertising::where('id', $advertising->id)->first();
        return view('Backend.advertising.edit', compact('adv'));
    }
    // return redirect(route('admin.home'));
    // }
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Advertising $advertising)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . $image->getClientOriginalName();
            Storage::disk('local')->putFileAs('advertising/', $image, $filename);
        } else {
            return 'No';
        }
        $adv = Advertising::find($advertising->id);
        $adv->image = $filename;
        $adv->alt = $request->alt;
        $adv->status = $request->status;
        $adv->save();
        return redirect(route('advertising.index'))->with('message', 'پست با موفقیت ویرایش شد');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Advertising $advertising)
    {
        $adverImage = Advertising::find($advertising->id);
        Storage::disk('local')->delete('advertising/' . $adverImage['image']);
        $adverImage->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
