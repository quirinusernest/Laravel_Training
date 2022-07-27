<?php

namespace App\Http\Controllers;

use App\Models\Author;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class ApiAuthorController extends Controller
{
    function getListAuthor(Request $request){
        $data = Author::all();
        return response()->json([
            'status' => 200,
            'message' => 'Success',
            'data' => $data
        ]);
    }
}
