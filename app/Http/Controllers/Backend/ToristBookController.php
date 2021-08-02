<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ToristBook;
use Illuminate\Support\Facades\Storage;

class ToristBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toristbooks = ToristBook::all();
        return view('Backend.torist_book.index', compact('toristbooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.torist_book.create');
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
            Storage::disk('local')->putFileAs('toristbook/', $image, $filename);
        } else {
            return 'No';
        }

        $toristbook = new ToristBook();
        $toristbook->image = $filename;
        $toristbook->title = $request->title;
        $toristbook->subtitle = $request->subtitle;
        $toristbook->slug = $request->slug;
        $toristbook->body = $request->body;
        $toristbook->status = $request->status;
        $toristbook->save();

        return redirect(route('torist_book.index'))->with('message', 'پست با موفقیت انجام شد');
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
        $torist_book = ToristBook::where('id', $id)->first();

        return view('Backend.torist_book.edit', compact('torist_book'));
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
            Storage::disk('local')->putFileAs('toristbook/', $image, $filename);
        } else {
            return 'No';
        }

        $toristbook = ToristBook::find($id);
        $toristbook->image = $filename;
        $toristbook->title = $request->title;
        $toristbook->subtitle = $request->subtitle;
        $toristbook->slug = $request->slug;
        $toristbook->body = $request->body;
        $toristbook->status = $request->status;
        $toristbook->save();

        return redirect(route('torist_book.index'))->with('message', 'پست با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toristImage = ToristBook::find($id);
        Storage::disk('local')->delete('toristbook/'.$toristImage['image']);
        $toristImage->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
