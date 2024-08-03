<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShowcaseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


 // page route
Route::get("/",[HomeController::class,"home"]);

Route::get("/About",[aboutController::class,"about"]);
Route::get("/My Project",[ProjectController::class,"project"]);
Route::get("/Contact",[ContactController::class,"contact"]);
Route::get("/MyCompany",[CompanyController::class,"company"]);
Route::get("/Resume",[ResumeController::class,"resume"]);
Route::get("/MyShowcase",[ShowcaseController::class,"MyShowcase"]);
Route::get("/Download",[DownloadController::class,"download"]);


