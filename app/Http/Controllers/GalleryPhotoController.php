<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryPhoto;

class GalleryPhotoController extends Controller
{
    public function index(){
        $photos = GalleryPhoto::getRoutes();
        return view('/gallery/index', compact('photos'));
    }

    public function admin(){
        $photos = GalleryPhoto::getRoutes();
        return view('gallery/admin', compact('photos'));
    }
}
