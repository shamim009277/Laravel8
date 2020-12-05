<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MailController;
use App\PaymentGateway\Payment;

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
Route::get('/post',[PostController::class,'showpost'])->name('post.showpost');
Route::get('/payment',function(){
     return Payment::process();
});
Route::get('/send_mail',[MailController::class,'MailSend'])->name('mail.MailSend');

Route::get('/upload',[PostController::class,'showForm'])->name('upload.showForm');
Route::post('/upload',[PostController::class,'uploadFile'])->name('upload.uploadFile');