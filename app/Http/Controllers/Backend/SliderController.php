<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;


class SliderController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->paginate(5);
        return view('Backend.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.slider.create');
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
            'subtitle' => 'required',
            'body' => 'required',

        ]);
        
        $slider = new Slider;
        $image = $request->image;
        $shape1 = $request->shape1;
        $shape2 = $request->shape2;
        $shape3 = $request->shape3;
        $shape4 = $request->shape4;
        $shape5 = $request->shape5;
        $shape6 = $request->shape6;


        if ($image && $shape1 && $shape2 && $shape3 && $shape4 && $shape5 && $shape6) {

            $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image')->move($upload_path, $image_full_name);
            $slider->image = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape1->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape1')->move($upload_path, $image_full_name);
            $slider->shape1 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape2->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape2')->move($upload_path, $image_full_name);
            $slider->shape2 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape3->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape3')->move($upload_path, $image_full_name);
            $slider->shape3 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape4->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape4')->move($upload_path, $image_full_name);
            $slider->shape4 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape5->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape5')->move($upload_path, $image_full_name);
            $slider->shape5 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape6->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape6')->move($upload_path, $image_full_name);
            $slider->shape6 = $image_url;

        $slider->subtitle = $request->subtitle;
        $slider->slug = $request->slug;
        $slider->alt1 = $request->alt1;
        $slider->alt2 = $request->alt2;
        $slider->alt3 = $request->alt3;
        $slider->alt4 = $request->alt4;
        $slider->alt5 = $request->alt5;
        $slider->alt6 = $request->alt6;
        $slider->body = $request->body;
        $slider->status = $request->status;
        $slider->save();

        return redirect(route('slider.index'))->with('message', 'پست با موفقیت انجام شد');
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
        $slider = Slider::where('id', $id)->first();
        return view('Backend.slider.edit', compact('slider'));
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
            'subtitle' => 'required',
            'body' => 'required',

        ]);
    
        $slider = Slider::find($id);
        $image = $request->image;
        $shape1 = $request->shape1;
        $shape2 = $request->shape2;
        $shape3 = $request->shape3;
        $shape4 = $request->shape4;
        $shape5 = $request->shape5;
        $shape6 = $request->shape6;

        if ($image && $shape1 && $shape2 && $shape3 && $shape4 && $shape5 && $shape6) {
            $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image')->move($upload_path, $image_full_name);
            $slider->image = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape1->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape1')->move($upload_path, $image_full_name);
            $slider->shape1 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape2->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape2')->move($upload_path, $image_full_name);
            $slider->shape2 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape3->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape3')->move($upload_path, $image_full_name);
            $slider->shape3 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape4->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape4')->move($upload_path, $image_full_name);
            $slider->shape4 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape5->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape5')->move($upload_path, $image_full_name);
            $slider->shape5 = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $shape6->getClientOriginalExtension();
            $upload_path = 'public/media/slider/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('shape6')->move($upload_path, $image_full_name);
            $slider->shape6 = $image_url;

        $slider->subtitle = $request->subtitle;
        $slider->slug = $request->slug;
        $slider->alt1 = $request->alt1;
        $slider->alt2 = $request->alt2;
        $slider->alt3 = $request->alt3;
        $slider->alt4 = $request->alt4;
        $slider->alt5 = $request->alt5;
        $slider->alt6 = $request->alt6;
        $slider->body = $request->body;
        $slider->status = $request->status;
        $slider->save();

        return redirect(route('slider.index'))->with('message', 'پست با موفقیت انجام شد');
    }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {

        $data = Slider::where('id', $slider->id)->first();
        $image = $data->image;
        $shape1 = $data->shape1;
        $shape2 = $data->shape2;
        $shape3 = $data->shape3;
        $shape4 = $data->shape4;
        $shape5 = $data->shape5;
        $shape6 = $data->shape6;
        unlink($image);
        unlink($shape1);
        unlink($shape2);
        unlink($shape3);
        unlink($shape4);
        unlink($shape5);
        unlink($shape6);
        Slider::where('id', $slider->id)->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
