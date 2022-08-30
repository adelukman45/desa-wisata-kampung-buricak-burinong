<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Wst;
use Illuminate\Http\Request;

class WstController extends Controller
{
    public function index()
    {
        $title = '';

        return view('home', [
            'title' => 'Semua Wisata' . $title,
            'posts' => Wst::all()
        ]);
    }

    public function show($id)
    {
        $wst= Wst::where('slug', $id)->first();
        $photo= Photo::where('slug', $id)->get();
        return view('detail', [
            'title' => 'Single Post',
            'post' => $wst,
            'photo' => $photo,
        ]);
    }
}
