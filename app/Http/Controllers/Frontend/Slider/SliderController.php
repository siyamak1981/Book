<?php

namespace App\Http\Controllers\Frontend\Slider;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Post;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::where('status', 1)->orderBy('created_at', 'DESC')->paginate(5);
        $posts = Post::where('status', 1)->with('categories', 'tags')->orderBy('created_at', 'DESC')->paginate(3);
        return view('Frontend.landing.index', compact('sliders', 'posts'));
    }

    // public function getLastPost(){

    //     $posts = Post::where('status', 1)->with('categories', 'tags')->orderBy('created_at', 'DESC')->paginate(3);
    //     return view('Frontend.landing.index', compact('posts'));
    // }
}
