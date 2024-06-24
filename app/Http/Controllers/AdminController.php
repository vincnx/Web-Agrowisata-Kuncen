<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Message;
use App\Models\PriceImage;
use App\Models\CampPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        $posts = Post::orderBy('waktu_upload', 'desc')->paginate(5);
        $packages = CampPackage::paginate(5);
        $messages = Message::paginate(4);
        $price_images = PriceImage::first();
        return view('admin.index', compact('posts', 'packages', 'messages', 'price_images'));
    }

    public function edit(Request $request, PriceImage $price_image){

        $validated = $request->validate([
            'makanan'=>'image',
            'peta'=>'image',
            'peralatan'=>'image'
        ]);
        if ($request->type == 'makanan'){
            Storage::delete($price_image->makanan);
            $makanan = $request->file('img_file')->store('public/price-images/makanan');
            $validated['makanan'] = $makanan;
        }
        elseif ($request->type == 'peta'){
            Storage::delete($price_image->peta);
            $peta = $request->file('img_file')->store('public/price-images/peta');
            $validated['peta'] = $peta;
        }
        elseif ($request->type == 'peralatan'){
            Storage::delete($price_image->peralatan);
            $peralatan = $request->file('img_file')->store('public/price-images/peralatan');
            $validated['peralatan'] = $peralatan;
        }
        $price_image->update($validated);

        return to_route('admin.index');
    }
}
