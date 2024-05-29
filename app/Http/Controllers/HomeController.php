<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        Carbon::setLocale('id');
        $posts = Post::orderBy('waktu_upload', 'desc')->paginate(3);
        return view('index', compact('posts'));
    }
}
