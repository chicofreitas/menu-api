<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeCompanyController;
use App\Http\Controllers\CompanyProductsController;
use App\Http\Controllers\ProductSectionsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('catalogo')->group(function(){

    Route::get('/{slug}', HomeCompanyController::class); // home com dados da empresa. (invokable)

    Route::resources([
        'menu' => CompanyProductsController::class,
        'product' => ProductSectionsController::class
    ]);
});