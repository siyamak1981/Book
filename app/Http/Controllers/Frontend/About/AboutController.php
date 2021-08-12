<?php

namespace App\Http\Controllers\Frontend\About;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Team;
use App\Models\TellAbout;
use App\Models\Access\Admin;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = Admin::latest()->paginate(5);
        $abouts = About::where('status', 1)->get();
        $teams = Team::where('status', 1)->get();
        $tellabouts = TellAbout::where('status', 1)->get();
        return view('Frontend.about.index', compact('abouts', 'users', 'teams', 'tellabouts'));
    }
}
