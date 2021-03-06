<?php

namespace App\Http\Controllers\Frontend\Post;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $products =Product::where('status', 1)->orderBy('created_at', 'DESC')->paginate(4);
        $posts=Post::where('status', 1)->orderBy('created_at', 'DESC')->paginate(5);
     
        return view('Frontend.post.detail', compact('post', 'posts', 'products'));
    }
    public function getAllPosts()
    {
        return $posts = post::where('status', 1)->orderBy('created_at', 'DESC')->paginate(5);
    }
}
