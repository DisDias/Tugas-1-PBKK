<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post', [
            "title" => "All Posts",
            //"name" => "Dias Kurniasari",
            //"email" => "diaskurniasari2@gmail.com",
            //"posts" => Post::all()
            "posts" => Post::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function content(Post $post){
        return view('konten', [
            "post" => $post
        ]);
    }
}
