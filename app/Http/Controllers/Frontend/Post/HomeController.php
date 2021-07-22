<?php

namespace App\Http\Controllers\Frontend\Post;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Post;
use App\Models\tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()

    {
        
        $posts = post::where('status', 1)->with('categories', 'tags')->orderBy('created_at', 'DESC')->paginate(8);
        return view('Frontend.post.index', compact('posts'));
    }

    public function tag(tag $tag)

    {
        $posts = $tag->posts();
        return view('Frontend.post.index', compact('posts'));
    }

    public function category(category $category)

    {
        $posts = $category->posts()->unique();
        return view('Frontend.post.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
