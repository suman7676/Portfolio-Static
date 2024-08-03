<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    function contact(Request $request)
    {

        return view("pages.contact_page",);

    }
    //api






}
