<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
# mengimport controller News 
use App\Http\Controllers\NewsController;
# mengimport controller Auth
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

# Route News
#bungkus route dengan middleware sanctum
Route::middleware('auth:sanctum')->group(function () {
# Method GET untuk memanggil Data
Route::get('/news', [NewsController::class, 'index']);

#Method Get Category untuk mencari berita berdasarkan category
Route::get('/news/category/{category}', [NewsController::class, 'category']);

#Method Get Search untuk mencari berita berdasarkkan judul
Route::get('/news/search/{title}', [NewsController::class, 'search']);

# Method POST untuk membuat data
Route::post('/news', [NewsController::class, 'store']);

#Method Put untuk mengupdate Data
Route::put('/news/{id}', [NewsController::class, 'update']);

# Delete student untuk menghapus data
Route::delete('/news/{id}', [NewsController::class, 'destroy']);

});

# untuk register dan login pake auth
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);