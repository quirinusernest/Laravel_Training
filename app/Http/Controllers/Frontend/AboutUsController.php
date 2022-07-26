<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    public function index(){
        // $about_us = DB::table('teams')->orderBy('id','desc')->get();
        $about_us = Teams::all();
        
        return view('frontend.about-us.index', [
            'list_team'=> $about_us
        ]);
    }

    public function detail(Request $request, $id){
        $team = Teams::find($id);
        return view('frontend.about-us.detail', [
            'data'=> $team
        ]);
    }
}
