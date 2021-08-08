<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SliderCompetition;

class SliderCompetitionController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slidercompetitions = SliderCompetition::latest()->paginate(5);
        return view('Backend.slider-competition.index', compact('slidercompetitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.slider-competition.create');
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
            'body' => 'required',

        ]);
        
        $slider = new SliderCompetition;
        $image = $request->image;


        if ($image) {

            $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $upload_path = 'public/media/slidercompetition/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image')->move($upload_path, $image_full_name);
            $slider->image = $image_url;

      
        $slider->title = $request->title;
        $slider->slug = $request->slug;
        $slider->alt = $request->alt;
        $slider->body = $request->body;
        $slider->status = $request->status;
        $slider->save();

        return redirect(route('slider-competition.index'))->with('message', 'پست با موفقیت انجام شد');
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
        // if (Auth::user()->can('posts.update')) {
        $slider = SliderCompetition::where('id', $id)->first();
        return view('Backend.slider-competition.edit', compact('slider'));
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
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',

        ]);
    
        $slider = SliderCompetition::find($id);
        $image = $request->image;
        

        if ($image) {
            $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $upload_path = 'public/media/slidercompetition/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image')->move($upload_path, $image_full_name);
            $slider->image = $image_url;

        $slider->title = $request->title;
        $slider->slug = $request->slug;
        $slider->alt = $request->alt;
        $slider->body = $request->body;
        $slider->status = $request->status;
        $slider->save();

        return redirect(route('slider-competition.index'))->with('message', 'پست با موفقیت انجام شد');
    }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderCompetition $slider_competition)
    {

        $data = SliderCompetition::where('id', $slider_competition->id)->first();
        $image = $data->image;
        
        unlink($image);
        
        SliderCompetition::where('id', $slider_competition->id)->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
