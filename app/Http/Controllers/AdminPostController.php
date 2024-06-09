<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('waktu_upload', 'desc')->paginate(6);
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
        $waktu_upload = Carbon::now();
        $validated = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $image = $post->gambar;
        if($request->gambar){
            if(!($post->gambar == 'public/posts/RemoveBGLogo.png')){
                Storage::delete($post->gambar);
            }
            $image = $request->file('gambar')->store('public/posts');
        }
        $validated['gambar'] = $image;
        $validated['waktu_upload'] = $waktu_upload;
        $post->update($validated);
        
        return to_route('admin.berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if(!($post->gambar == 'public/posts/RemoveBGLogo.png')){
            Storage::delete($post->gambar);
        }
        $post->delete();
        return to_route('admin.berita.index');
    }
}
