<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getPost(Request $request){
        //$request->judul
        //dd($request->all());
        return view('post.index',[
            'nama' => 'ernest'
        ]);
    }
}
