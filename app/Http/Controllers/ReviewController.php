<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewModel;

class ReviewController extends Controller
{
    public function tampilkan()
    {
        $buku = ReviewModel::all();
        return view('Daftar', ['buku'=>$buku]);
    }

    public function TampilReview($id)
    {
        $reviewNovel = ReviewModel::find($id);
        return view('Review', ['reviewNovel'=>$reviewNovel]);
    }
    
}
