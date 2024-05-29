<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $posts = Post::orderBy('waktu_upload', 'desc')->paginate(10);
        return view('berita', compact('posts'));
    }

    public function show(Post $post)
    {
        // dd($post->gambar);
        return view('berita_', compact('post'));
    }


}
