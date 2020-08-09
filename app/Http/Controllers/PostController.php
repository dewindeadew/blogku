<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $query =  DB::table('posts')->insert([
            "title" => $request["title"],
            "body" => $request["body"]
        ]);
        return redirect('/posts/create');
    }
    public function index()
    {
        $posts = DB::table('posts')->get(); //select*from posts
        //dd($posts);
        return view('posts.index', compact('posts'));
    }
}
