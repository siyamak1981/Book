<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competition;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::all();
        return view('Backend.competition.index', compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.competition.create');
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
            'summary' => 'required',
            'body' => 'required',

        ]);
        $competition = new Competition();
        $image = $request->image;
        $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $upload_path = 'public/media/competition/';
        $image_url = $upload_path . $image_full_name;
        $success = $request->file('image')->move($upload_path, $image_full_name);
        $competition->image = $image_url;
        $competition->alt = $request->alt;
        $competition->slug = $request->slug;
        $competition->title = $request->title;
        $competition->summary = $request->summary;
        $competition->body = $request->body;
        $competition->status = $request->status;
        $competition->save();

        return redirect(route('competition.index'))->with('message', 'پست با موفقیت انجام شد');
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
        $competition = Competition::where('id', $id)->first();

        return view('Backend.competition.edit', compact('competition'));
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
            'summary' => 'required',
            'body' => 'required',

        ]);
        $competition = Competition::find($id);
        $image = $request->image;
        $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $upload_path = 'public/media/competition/';
        $image_url = $upload_path . $image_full_name;
        $success = $request->file('image')->move($upload_path, $image_full_name);
        $competition->image = $image_url;
        $competition->alt = $request->alt;
        $competition->slug = $request->slug;
        $competition->title = $request->title;
        $competition->summary = $request->summary;
        $competition->body = $request->body;
        $competition->status = $request->status;
        $competition->save();

        return redirect(route('competition.index'))->with('message', 'پست با موفقیت انجام شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competition $competition)
    {
        $data = competition::where('id', $competition->id)->first();
        $image = $data->image;
        unlink($image);
        competition::where('id', $competition->id)->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
