<?php

use App\Http\Controllers\productController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get( "/page", [productController::class, 'demo1']);

Route::get("/demo", [productController::class, 'demo2'] );




Route::get("/hudai", [productController::class, 'rafi']);


Route::get("/math", [productController::class, 'sum']);

Route::get("/img", [productController::class,'pic']);

Route::get("/ostad", [productController::class, 'ostad']);


Route::get("/ostad1", [productController::class, 'ostad1']);
