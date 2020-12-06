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

/* 
Install Maatwebsite Excell then add providers and alices then publish 
php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" 

*/

Route::get('/employee',[PostController::class,'addEmployee']);

Route::get('/export_excel',[PostController::class,'exportIntoExcel'])->name('export.excel');
Route::get('/export_csv',[PostController::class,'exportIntoCsv'])->name('export.csv');

Route::get('/employee-list',[PostController::class,'showEmployee']);
Route::get('/pdf',[PostController::class,'generatePDF']);

Route::get('/inport-form',[PostController::class,'inportForm']);
Route::post('/import',[PostController::class,'importIntoExcel'])->name('import.excel');

Route::get('/image',[PostController::class,'imageForm']);
Route::post('/resize_image',[PostController::class,'imageResize'])->name('image.resize');

Route::get('/dropzone',[PostController::class,'dropzone']);
Route::post('/image_dropzone',[PostController::class,'dropzoneStore'])->name('store.dropzone');