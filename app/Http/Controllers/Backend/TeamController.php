<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('Backend.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.team.create');
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

        $image = $request->image;
        $team = new Team();
        if ($image) {
            $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $upload_path = 'public/media/team/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image')->move($upload_path, $image_full_name);
            $team->image = $image_url;
            $team->role = $request->role;
            $team->name = $request->name;
            $team->status = $request->status;
            $team->save();

            return redirect(route('team.index'))->with('message', 'پست با موفقیت انجام شد');
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
        $team = Team::where('id', $id)->first();
        return view('Backend.team.edit', compact('team'));
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

        $image = $request->image;
        $team = Team::find($id);   
        
        if ($image) {
            $image_full_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $upload_path = 'public/media/team/';
            $image_url = $upload_path . $image_full_name;
            $success = $request->file('image')->move($upload_path, $image_full_name);
            $team->image = $image_url;
          
    
            $team->role = $request->role;
            $team->name = $request->name;
            $team->status = $request->status;
            $team->save();
            return redirect(route('team.index'))->with('message', 'پست با موفقیت انجام شد');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $data = Team::where('id', $team->id)->first();
        $image = $data->image;
        unlink($image);
        Team::where('id', $team->id)->delete();
        return back()->with('message', "پست با موفقیت پاک شد .");
    }
}
