<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    function company(Request $request)
    {

        return view("pages.company_page",);
    }
}
