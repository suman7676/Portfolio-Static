<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aboutController extends Controller
{
    function about (){

        return view("pages.about_page");
    }

    function aboutData(){
        return DB::table('abouts')->first();
    }

}
