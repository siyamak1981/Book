<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
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
        $abouts = About::all();
        return view('Backend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.about.create');
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
        $this->validate($request, [
          

        ]);

        $image_one = $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;
        $image_four = $request->image_four;
        $about = new about();
        if ($image_one && $image_two && $image_three) {

            $image_full_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            $upload_path = 'public/media/about/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_one')->move($upload_path, $image_full_name);
            $about->image_one = $image_url;



            $image_full_name = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            $upload_path = 'public/media/about/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_two')->move($upload_path, $image_full_name);
            $about->image_two = $image_url;
            
            
            
            $image_full_name = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            $upload_path = 'public/media/about/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_three')->move($upload_path, $image_full_name);
            $about->image_three = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $image_four->getClientOriginalExtension();
            $upload_path = 'public/media/about/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_four')->move($upload_path, $image_full_name);
            $about->image_four = $image_url;
    
            $about->title1 = $request->title1;
            $about->summary1 = $request->summary1;

            $about->title2 = $request->title2;
            $about->summary2 = $request->summary2;

            $about->title3 = $request->title3;
            $about->summary3 = $request->summary3;

            $about->title4 = $request->title4;
            $about->summary4 = $request->summary4;
            
            $about->title5 = $request->title5;
            $about->body = $request->body;



            $about->status = $request->status;
            $about->save();

            return redirect(route('about.index'))->with('message', 'پست با موفقیت انجام شد');
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
        $about = about::where('id', $id)->first();

        return view('Backend.about.edit', compact('about'));
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
           

        ]);
        $image_one = $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;
        $image_four = $request->image_four;
        $about =About::find($id);
        if ($image_one && $image_two && $image_three) {

            $image_full_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            $upload_path = 'public/media/about/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_one')->move($upload_path, $image_full_name);
            $about->image_one = $image_url;



            $image_full_name = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            $upload_path = 'public/media/about/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_two')->move($upload_path, $image_full_name);
            $about->image_two = $image_url;
            
            
            
            $image_full_name = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            $upload_path = 'public/media/about/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_three')->move($upload_path, $image_full_name);
            $about->image_three = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $image_four->getClientOriginalExtension();
            $upload_path = 'public/media/about/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_four')->move($upload_path, $image_full_name);
            $about->image_four = $image_url;
  
            $about->title1 = $request->title1;
      
            $about->summary1 = $request->summary1;

            $about->title2 = $request->title2;
            $about->summary2 = $request->summary2;

            $about->title3 = $request->title3;
            $about->summary3 = $request->summary3;

            $about->title4 = $request->title4;
            $about->summary4 = $request->summary4;
            
            $about->title5 = $request->title5;
            $about->body = $request->body;

            $about->status = $request->status;
            $about->save();

            return redirect(route('about.index'))->with('message', 'پست با موفقیت انجام شد');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(about $competition_page)
    {
        $data = about::where('id', $competition_page->id)->first();
    
        $image_one = $data->image_one;
        $image_two = $data->image_two;
        $image_three = $data->image_three;
        $image_four = $data->image_four;
        unlink($image_one);
        unlink($image_two);
        unlink($image_three);
        unlink($image_four);
        about::where('id', $competition_page->id)->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
      
    }
}
