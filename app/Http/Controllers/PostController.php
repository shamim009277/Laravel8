<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function showpost(){
        
        $posts = Post::paginate(5);
        return view('posts',compact('posts'));
    }

    public function showForm(){

    	return view('upload');
    }

    public function uploadFile(Request $request){
    	$request->file->store('public');
    	return "File Uploaded Successfully";
    }
}
