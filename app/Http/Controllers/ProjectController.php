<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class ProjectController extends Controller
{
    function project(Request $request)
    {

        return view("pages.hero_page");
    }

    function projectData(Request $request)
    {
        DB::table('projects')->get();
    }














}
