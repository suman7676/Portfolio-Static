<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    function resume(Request $request)
    {

        return view("pages.resume_page");
    }
}
