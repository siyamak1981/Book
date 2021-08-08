<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompetitionPage;

class CompetitionPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitionpages = CompetitionPage::all();
        return view('Backend.competitionpage.index', compact('competitionpages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.competitionpage.create');
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
        $competitionpage = new CompetitionPage();
        if ($image_one && $image_two && $image_three) {

            $image_full_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            $upload_path = 'public/media/competitionpage/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_one')->move($upload_path, $image_full_name);
            $competitionpage->image_one = $image_url;



            $image_full_name = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            $upload_path = 'public/media/competitionpage/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_two')->move($upload_path, $image_full_name);
            $competitionpage->image_two = $image_url;
            
            
            
            $image_full_name = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            $upload_path = 'public/media/competitionpage/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_three')->move($upload_path, $image_full_name);
            $competitionpage->image_three = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $image_four->getClientOriginalExtension();
            $upload_path = 'public/media/competitionpage/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_four')->move($upload_path, $image_full_name);
            $competitionpage->image_four = $image_url;
    
            $competitionpage->title1 = $request->title1;
            $competitionpage->summary1 = $request->summary1;

            $competitionpage->title2 = $request->title2;
            $competitionpage->summary2 = $request->summary2;

            $competitionpage->title3 = $request->title3;
            $competitionpage->summary3 = $request->summary3;

            $competitionpage->title4 = $request->title4;
            $competitionpage->summary4 = $request->summary4;
            
            $competitionpage->title5 = $request->title5;
            $competitionpage->body = $request->body;



            $competitionpage->status = $request->status;
            $competitionpage->save();

            return redirect(route('competition_page.index'))->with('message', 'پست با موفقیت انجام شد');
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
        $competitionpage = CompetitionPage::where('id', $id)->first();

        return view('Backend.competitionpage.edit', compact('competitionpage'));
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
        $competitionpage =CompetitionPage::find($id);
        if ($image_one && $image_two && $image_three) {

            $image_full_name = hexdec(uniqid()) . '.' . $image_one->getClientOriginalExtension();
            $upload_path = 'public/media/competitionpage/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_one')->move($upload_path, $image_full_name);
            $competitionpage->image_one = $image_url;



            $image_full_name = hexdec(uniqid()) . '.' . $image_two->getClientOriginalExtension();
            $upload_path = 'public/media/competitionpage/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_two')->move($upload_path, $image_full_name);
            $competitionpage->image_two = $image_url;
            
            
            
            $image_full_name = hexdec(uniqid()) . '.' . $image_three->getClientOriginalExtension();
            $upload_path = 'public/media/competitionpage/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_three')->move($upload_path, $image_full_name);
            $competitionpage->image_three = $image_url;

            $image_full_name = hexdec(uniqid()) . '.' . $image_four->getClientOriginalExtension();
            $upload_path = 'public/media/competitionpage/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image_four')->move($upload_path, $image_full_name);
            $competitionpage->image_four = $image_url;
  
            $competitionpage->title1 = $request->title1;
            $competitionpage->summary1 = $request->summary1;

            $competitionpage->title2 = $request->title2;
            $competitionpage->summary2 = $request->summary2;

            $competitionpage->title3 = $request->title3;
            $competitionpage->summary3 = $request->summary3;

            $competitionpage->title4 = $request->title4;
            $competitionpage->summary4 = $request->summary4;
            
            $competitionpage->title5 = $request->title5;
            $competitionpage->body = $request->body;

            $competitionpage->status = $request->status;
            $competitionpage->save();

            return redirect(route('competition_page.index'))->with('message', 'پست با موفقیت انجام شد');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompetitionPage $competition_page)
    {
        $data = CompetitionPage::where('id', $competition_page->id)->first();
    
        $image_one = $data->image_one;
        $image_two = $data->image_two;
        $image_three = $data->image_three;
        $image_four = $data->image_four;
        unlink($image_one);
        unlink($image_two);
        unlink($image_three);
        unlink($image_four);
        CompetitionPage::where('id', $competition_page->id)->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
      
    }
}
