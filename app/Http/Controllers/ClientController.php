<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ClientController extends Controller
{
    public function ShowAllPost(){
        $posts = Post::all();
        return view('client.showallposts',compact('posts'));
    }

    public function ShowPostByCategory($id){
        $posts = Post::where('category_id',$id)->get();
        return view('client.showpostsbycategory',compact('posts'));
    }
}
