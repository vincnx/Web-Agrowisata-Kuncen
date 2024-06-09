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
        $post = Post::orderBy('waktu_upload', 'desc')->first();
        $posts = Post::orderBy('waktu_upload', 'desc')->where('id', '<>', $post->id)->Paginate(3);
        return view('berita', compact('post', 'posts'));
    }

    public function show(Post $post)
    {
        // dd($post->gambar);
        $posts = Post::orderBy('waktu_upload', 'desc')->paginate(10);
        return view('berita_', compact('post', 'posts'));
    }


}
