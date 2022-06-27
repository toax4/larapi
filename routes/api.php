<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\QrCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['logEndpoint'])->group(function () {
    Route::get('phpinfo', fn () => phpinfo());

    Route::apiResource('companies', CompanyController::class);

    Route::get('pdf/generate', [PDFController::class, 'generatePDF'])->withoutMiddleware('logEndpoint');

    Route::get('qrcode/data', [QrCodeController::class, 'data']);
    Route::get('qrcode/email', [QrCodeController::class, 'email']);
});
