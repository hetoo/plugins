<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

use Illuminate\Support\Facades\Route;
use Plugins\SsoClient\Http\Controllers as WebController;

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

Route::prefix('sso-client')->group(function() {
    // Route::get('/', [WebController\SsoClientController::class, 'index']);
    Route::name('sso-client.setting')->get('setting', [WebController\SettingController::class, 'showSettingPage']);
    Route::post('setting', [WebController\SettingController::class, 'save']);
    Route::redirect('', route('sso-client.setting'));
});

// without VerifyCsrfToken
// Route::prefix('sso-client')->group(function() {
//     Route::get('/', [WebController\SsoClientController::class, 'index']);
// })->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
