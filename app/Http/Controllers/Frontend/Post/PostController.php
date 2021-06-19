<?php

namespace App\Http\Controllers\Frontend\Post;

use App\Model\User\Product;
use App\Http\Controllers\Controller;
use App\Model\User\Post;

class PostController extends Controller
{
    public function post($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $posts=Post::where('status', 1)->orderBy('created_at', 'DESC')->paginate(5);
        $products =Product::where('status', 1)->orderBy('created_at', 'DESC')->paginate(4);
        return view('public.post.detail', compact('post', 'products', 'posts'));
    }
    public function getAllPosts()
    {
        return $posts = post::where('status', 1)->orderBy('created_at', 'DESC')->paginate(5);
    }
}
