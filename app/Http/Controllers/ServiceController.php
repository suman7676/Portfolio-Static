<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    function myShowcase(Request $request)
    {

        return view("pages.hero_page");
    }
}
