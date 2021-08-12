<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TellAbout;

class TellAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tellabouts = TellAbout::all();
        return view('Backend.tellabout.index', compact('tellabouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.tellabout.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, []);

        $image = $request->image;
        $tellabout = new TellAbout();
        if ($image) {
            $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $upload_path = 'public/media/tellabouts/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image')->move($upload_path, $image_full_name);
            $tellabout->image = $image_url;
            $tellabout->role = $request->role;
            $tellabout->name = $request->name;
            $tellabout->body = $request->body;
            $tellabout->status = $request->status;
            $tellabout->save();

            return redirect(route('tellabout.index'))->with('message', 'پست با موفقیت انجام شد');
        }
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
        $tellabout = TellAbout::where('id', $id)->first();
        return view('Backend.tellabout.edit', compact('tellabout'));
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

        $this->validate($request, []);

        $image = $request->image;
        $tellabout = TellAbout::find($id);

        if ($image) {
            $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $upload_path = 'public/media/tellabouts/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image')->move($upload_path, $image_full_name);
            $tellabout->image = $image_url;
            $tellabout->role = $request->role;
            $tellabout->name = $request->name;
            $tellabout->body = $request->body;
            $tellabout->status = $request->status;
            $tellabout->save();
            return redirect(route('tellabout.index'))->with('message', 'پست با موفقیت انجام شد');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(TellAbout $tellabout)
    {
        $data = TellAbout::where('id', $tellabout->id)->first();
        $image = $data->image;
        unlink($image);
        TellAbout::where('id', $tellabout->id)->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
