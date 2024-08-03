<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowcaseController extends Controller
{
    function MyShowcase(Request $request)
    {

        return view("pages.showcase_page");
    }
     function projectData (Request $request){
        return DB::table('projects')->get();
     }





}
