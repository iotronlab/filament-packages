<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\VendorLogin;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('vendor', function () {
    return redirect()->route('vendor.login');
});
Route::get('vendor/login', VendorLogin::class)->name('vendor.login');

Route::post('vendor/logout', function (Request $request) {
    Auth::guard('vendor')->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('vendor.login');
})->name('vendor.logout');
