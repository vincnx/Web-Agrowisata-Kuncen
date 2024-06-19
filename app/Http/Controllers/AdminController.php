<?php

namespace App\Http\Controllers;

use App\Models\CampPackage;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::orderBy('waktu_upload', 'desc')->paginate(5);
        $packages = CampPackage::paginate(4);
        $messages = Message::paginate(4);
        return view('admin.index', compact('posts', 'packages', 'messages'));
    }
}
