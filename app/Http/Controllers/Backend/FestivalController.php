<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Festival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $festivals = Festival::all();
        return view('Backend.festival.index', compact('festivals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.festival.create');
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
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',


        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . $image->getClientOriginalName();
            Storage::disk('local')->putFileAs('festival/', $image, $filename);
        } else {
            return 'No';
        }

        $festival = new Festival();
        $festival->image = $filename;
        $festival->title = $request->title;
        $festival->subtitle = $request->subtitle;
        $festival->slug = $request->slug;
        $festival->body = $request->body;
        $festival->status = $request->status;
        $festival->save();

        return redirect(route('festival.index'))->with('message', 'پست با موفقیت انجام شد');
    
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
    public function edit($id)
    {
        $festival = Festival::where('id', $id)->first();

        return view('Backend.festival.edit', compact('festival'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',


        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . $image->getClientOriginalName();
            Storage::disk('local')->putFileAs('festival/', $image, $filename);
        } else {
            return 'No';
        }

        $festival = Festival::find($id);
        $festival->image = $filename;
        $festival->title = $request->title;
        $festival->subtitle = $request->subtitle;
        $festival->slug = $request->slug;
        $festival->body = $request->body;
        $festival->status = $request->status;
        $festival->save();

        return redirect(route('festival.index'))->with('message', 'پست با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $festivalImage = Festival::find($id);
        Storage::disk('local')->delete('toristbook/'.$festivalImage['image']);
        $festivalImage->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
