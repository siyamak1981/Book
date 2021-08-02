<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Supporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supporters =  Supporter::all();
        return view('Backend.supporter.index', compact('supporters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.supporter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $supporter = new Supporter();
        $image = $request->image;
        $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $upload_path = 'public/media/supporter/';
        $image_url = $upload_path . $image_full_name;
        $success = $request->file('image')->move($upload_path, $image_full_name);
        $supporter->image = $image_url;

        $supporter->alt = $request->alt;
        $supporter->link = $request->link;
        $supporter->status = $request->status;
        $supporter->save();

        return redirect(route('supporter.index'))->with('message', 'پست با موفقیت انجام شد');
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
        $supporter = Supporter::where('id', $id)->first();

        return view('Backend.supporter.edit', compact('supporter'));
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
       

        $supporter = Supporter::find($id);
        $image = $request->image;
        $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $upload_path = 'public/media/supporter/';
        $image_url = $upload_path . $image_full_name;
        $success = $request->file('image')->move($upload_path, $image_full_name);
        $supporter->image = $image_url;

        $supporter->alt = $request->alt;
        $supporter->link = $request->link;
        $supporter->status = $request->status;
        $supporter->save();
      

        return redirect(route('supporter.index'))->with('message', 'پست با موفقیت انجام شد');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supporter $supporter)
    {
        

        $data = Supporter::where('id', $supporter->id)->first();
        $image = $data->image;
        unlink($image);
        Supporter::where('id', $supporter->id)->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
