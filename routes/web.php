<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [ListingController::class, 'index']);
// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);
//Store Listing Data
Route::post('/listings', [ListingController::class, 'store']);
//Show edit Form 
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);
//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);
