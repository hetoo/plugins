<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

use Illuminate\Support\Facades\Route;
use Plugins\WuKongAuthCode\Http\Controllers as WebController;

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

// Route::prefix('wu-kong-auth-code')->group(function() {
//     Route::get('/', [WebController\WuKongAuthCodeController::class, 'index']);
// });

// without VerifyCsrfToken
// Route::prefix('wu-kong-auth-code')->group(function() {
//     Route::get('/', [WebController\WuKongAuthCodeController::class, 'index']);
// })->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
