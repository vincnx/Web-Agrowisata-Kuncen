<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all()->sortBy('waktu_upload', SORT_REGULAR, true);
        return view('admin.posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $waktu_upload = Carbon::now();
        $image = 'public/posts/RemoveBGLogo.png';
        if ($request->gambar){
            $image = $request->file('gambar')->store('public/posts');
        }
        Post::create([
            'judul' => $request->judul,
            'gambar' => $image,
            'isi' => $request->isi,
            'waktu_upload' => $waktu_upload,
        ]);

        return to_route('admin.berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        return 0;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return 0;
    }
}
