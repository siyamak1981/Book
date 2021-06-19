<?php

namespace App\Http\Controllers\Front\About;

use App\Http\Controllers\Controller;
use App\Model\User\About;
use App\Model\Admin\Admin;
use Illuminate\Http\Request;

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
        return view('public.about.about', compact('abouts', 'users'));
    }
}
