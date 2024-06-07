<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class Postcontroller extends Controller
{
    public function index() {
        $posts =DB::table('posts')->get();
        return view('posts.index',compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);

        return view('posts.show',compact('post'));
    }
}
