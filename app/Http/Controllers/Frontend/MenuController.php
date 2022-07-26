<?php

namespace App\Http\Controllers\FrontEnd;

use App\Helpers\DateHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    function getAdmin(Request $request){
        $dateFormat = DateHelper::dateFormat('d-m-Y');
        return 'Hello Admin';
    }
    function getUser(Request $request){
        return 'Hello User';
    }
}
