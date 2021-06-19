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
        // $users = Admin::latest()->paginate(5);

        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
        'title'=>'required|max:50',
        'subtitle'=>'required|max:150',
        'slug'=>'required',
        'body'=>'required',
        'image'=>'required',
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().$image->getClientOriginalName();
            Storage::disk('local')->putFileAs('about/', $image, $filename);
        }
        $about = new About;
        // dd($about);
        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->slug = $request->slug;
        $about->body = $request->body;
        $about->image = $filename;
        $about->save();

        return redirect(route('about.index'))->with('message', 'Information was Created Successfully');
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
        $about = About::where('id', $id)->first();
        return view('admin.about.edit', compact('about'));
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
            'title'=>'required|max:50',
            'subtitle'=>'required|max:150',
            'slug'=>'required|max:30',
            'body'=>'required',
            'image'=>'required',
            ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time().$image->getClientOriginalName();
            Storage::disk('local')->putFileAs('about/', $image, $filename);
        }
        $about = About::find($id);
        $about->title = $request->title;
        $about->subtitle = $request->subtitle;
        $about->slug = $request->slug;
        $about->body = $request->body;
        $about->status = $request->status;
        $about->image = $filename;
        $about->save();

        return redirect(route('about.index'))->with('message', 'Information was Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        About::find($id)->delete();
        return back()->with('message', 'Information was Deleted Successfully');
    }
}
