<?php

use App\Http\Controllers\aboutadmincontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\bookcontroller;
use App\Http\Controllers\bookfrontendcontroller;
use App\Http\Controllers\booksdetailscontroller;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\clothecontroller;
use App\Http\Controllers\clothefrontendcontroller;
use App\Http\Controllers\clothesdetailscontroller;
use App\Http\Controllers\ContectController;
use App\Http\Controllers\mainfrontendcontroller;
use App\Http\Controllers\mainpagecontroller;
use App\Http\Controllers\mobilescontroller;
use App\Http\Controllers\mobilesdetailscontroller;
use App\Http\Controllers\mobilesfrontendcontroller;
use App\Http\Controllers\ourproductscontroller;
use App\Http\Controllers\productsdetailscontroller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
 
//  Main Route Frontend ka

Route::get('/',[mainfrontendcontroller::class,'main'])->name('/');
Route::get('our-products',[ourproductscontroller::class,'our_products'])->name('our-products');
Route::get('/products/mobiles',[mobilesfrontendcontroller::class,'index'])->name('products-mobile');
Route::get('/products/books',[bookfrontendcontroller::class,'index'])->name('products-book');
Route::get('/products/clothes',[clothefrontendcontroller::class,'index'])->name('products-clothes');
Route::get('/products-details/{id}', [productsdetailscontroller::class, 'index'])->name('products-details');
Route::get('/products-details/mobile/{id}', [mobilesdetailscontroller::class, 'index'])->name('products-details-mobiles');
Route::get('/produocts-details/bok/{id}', [booksdetailscontroller::class, 'index'])->name('products-details-books');
Route::get('/products-details/clothe/{id}', [clothesdetailscontroller::class, 'index'])->name('products-details-clothes');
Route::get('about-us', [aboutcontroller::class,'index'])->name('about');
Route::get('content-us', [ContectController::class,'index'])->name('content');











Route::prefix('admin')->group(function(){
   Route::get('/main-products-form', [mainpagecontroller::class,'main_products_form'])->name('main-products-form');
   Route::post('/submit-form', [mainpagecontroller::class,'store'])->name('submit-form');
   Route::get('/main-products-data', [mainpagecontroller::class,'data_show'])->name('main-products-data');
   Route::get('/main-products-edit/{id}', [mainpagecontroller::class,'edit_data'])->name('main-products-edit');
   Route::post('/main-products-update/{id}', [mainpagecontroller::class,'update_data'])->name('main-submit-form');
  Route::delete('delete/{id}', [mainpagecontroller::class,'delete'])->name('delete');
    // Mobile 

   Route::get('/mobile-form', [mobilescontroller::class,'mobile'])->name('mobile');
   Route::post('/submit-form', [mobilescontroller::class,'store'])->name('submit-form');
   Route::get('/mobile-data', [mobilescontroller::class,'data_show'])->name('mobile-data');
   Route::get('/mobile-edit/{id}', [mobilescontroller::class,'edit_data'])->name('mobile-edit');
   Route::post('/mobile--update/{id}', [mobilescontroller::class,'update_data'])->name('mobile-submit-form');
  Route::post('delete/{id}', [mobilescontroller::class,'delete'])->name('delete');
  //  Book ? 
     Route::get('/book-form',[bookcontroller::class,'form'])->name('book-form');
   Route::post('/submit-form', [bookcontroller::class,'store'])->name('submit-form');
   Route::get('/book-data', [bookcontroller::class,'data_show'])->name('book-data');
   Route::get('/book-edit/{id}', [bookcontroller::class,'edit_data'])->name('book-edit');
   Route::post('/book-update/{id}', [bookcontroller::class,'update_data'])->name('book-submit-form');
  Route::post('delete/{id}', [bookcontroller::class,'delete'])->name('delete');

  // Clothes ? 
  Route::get('/clothes-form',[clothecontroller::class,'form'])->name('clothes-form');
  Route::post('/submit-form', [clothecontroller::class,'store'])->name('submit-form');
  Route::get('/clothes-data', [clothecontroller::class,'data_show'])->name('clothes-data');
  Route::get('/clothe-edit/{id}', [clothecontroller::class,'edit_data'])->name('clothes-edit');
  Route::post('/book-update/{id}', [clothecontroller::class,'update_data'])->name('clothes-submit-form');
 Route::post('delete/{id}', [clothecontroller::class,'delete'])->name('delete');

  // about ??
  Route::get('/about-form',[aboutadmincontroller::class,'form'])->name('about-form');
  Route::post('/submit-form', [aboutadmincontroller::class,'store'])->name('submit-form');
  Route::get('/about-data', [aboutadmincontroller::class,'data_show'])->name('about-data');
  Route::get('/about-edit/{id}', [aboutadmincontroller::class,'edit_data'])->name('about-edit');
  Route::post('/about-update/{id}', [aboutadmincontroller::class,'update_data'])->name('about-submit-form');
 Route::post('delete/{id}', [aboutadmincontroller::class,'delete'])->name('delete');

  // Student ? 

  Route::get('student',[StudentController::class,'index'])->name('student');
  Route::post('submit-form',[StudentController::class,'store'])->name('submit-form');
  Route::get('student-data',[StudentController::class,'show_data'])->name('student-data');
  Route::get('/student-edit/{id}', [StudentController::class,'edit'])->name('student-edit');
  Route::put('student-update/{id}',[StudentController::class,'update'])->name('student-update');
  Route::post('delete/{id}', [StudentController::class,'delete'])->name('delete');
});
