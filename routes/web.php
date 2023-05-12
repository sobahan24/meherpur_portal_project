<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('home');

// জেলা পরিচিতি
Route::get('/জেলা-সম্পর্কিত/এক-নজরে', [App\Http\Controllers\Frontend\FrontendController::class, 'এক_নজরে']);
Route::get('/জেলা-সম্পর্কিত/পটভুমি', [App\Http\Controllers\Frontend\FrontendController::class, 'পটভুমি']);
Route::get('/জেলা-সম্পর্কিত/ভৌগলিক-পরিচিতি', [App\Http\Controllers\Frontend\FrontendController::class, 'ভৌগলিক_পরিচিতি']);
Route::get('/জেলা-সম্পর্কিত/মানচিত্রে-জেলা', [App\Http\Controllers\Frontend\FrontendController::class, 'মানচিত্রে_জেলা']);
Route::get('/জেলা-সম্পর্কিত/উপজেলা-ও-ইউনিয়ন', [App\Http\Controllers\Frontend\FrontendController::class, 'উপজেলা_ও_ইউনিয়ন']);

// ইতিহাস ও ঐতিহ্য
Route::get('/জেলা-সম্পর্কিত/খেলাধুলা-ও-বিনোদন', [App\Http\Controllers\Frontend\FrontendController::class, 'খেলাধুলা_ও_বিনোদন']);
Route::get('/জেলা-সম্পর্কিত/জেলার-ঐতিহ্য', [App\Http\Controllers\Frontend\FrontendController::class, 'জেলার_ঐতিহ্য']);

// দর্শনীয়-স্থান
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান', [App\Http\Controllers\Frontend\FrontendController::class, 'দর্শনীয়_স্থান']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/মুজিবনগর-মুক্তিযুদ্ধ-স্মৃতি-কমপ্লেক্স-এবং-আম্রকানন', [App\Http\Controllers\Frontend\FrontendController::class, 'মুজিবনগর_মুক্তিযুদ্ধ_স্মৃতি_কমপ্লেক্স_এবং_আম্রকানন']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/মেহেরপুর-শহীদ-স্মৃতিসৌধ', [App\Http\Controllers\Frontend\FrontendController::class, 'মেহেরপুর_শহীদ_স্মৃতিসৌধ']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/আমদহ-গ্রামের-স্থাপত্য-নিদর্শন', [App\Http\Controllers\Frontend\FrontendController::class, 'আমদহ_গ্রামের_স্থাপত্য_নিদর্শন']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/সিদ্ধেশ্বরী-কালী-মন্দির', [App\Http\Controllers\Frontend\FrontendController::class, 'সিদ্ধেশ্বরী_কালী_মন্দির']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/আমঝুপি-নীলকুঠি', [App\Http\Controllers\Frontend\FrontendController::class, 'আমঝুপি_নীলকুঠি']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/ডিসি-ইকোপার্ক', [App\Http\Controllers\Frontend\FrontendController::class, 'ডিসি_ইকোপার্ক']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/ভবানন্দপুর-মন্দির', [App\Http\Controllers\Frontend\FrontendController::class, 'ভবানন্দপুর_মন্দির']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/মেহেরপুর-পৌর-কবর-স্থান', [App\Http\Controllers\Frontend\FrontendController::class, 'মেহেরপুর_পৌর_কবর_স্থান']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/পৌর-ঈদগাহ', [App\Http\Controllers\Frontend\FrontendController::class, 'পৌর_ঈদগাহ']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/পৌর-হল', [App\Http\Controllers\Frontend\FrontendController::class, 'পৌর_হল']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/বল্লভপুর-চার্চ', [App\Http\Controllers\Frontend\FrontendController::class, 'বল্লভপুর_চার্চ']);
Route::get('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/স্বামী-নিগমানন্দ-আশ্রম', [App\Http\Controllers\Frontend\FrontendController::class, 'স্বামী_নিগমানন্দ_আশ্রম']);


Route::get('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব', [App\Http\Controllers\Frontend\FrontendController::class, 'প্রখ্যাত_ব্যক্তিত্ব']);
Route::get('/জেলা-সম্পর্কিত/ভাষা-ও-সংস্কৃতি', [App\Http\Controllers\Frontend\FrontendController::class, 'ভাষা_ও_সংস্কৃতি']);
Route::get('/জেলা-সম্পর্কিত/মুক্তিযুদ্ধ-ও-মুক্তিযোদ্ধাদের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'মুক্তিযুদ্ধ_ও_মুক্তিযোদ্ধাদের_তালিকা']);

// ভৌগোলিক ও অর্থনৈতিক
Route::get('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন', [App\Http\Controllers\Frontend\FrontendController::class, 'হোটেল_ও_আবাসন']);
Route::get('/জেলা-সম্পর্কিত/অবস্থান-গঠন-ও-আয়তন', [App\Http\Controllers\Frontend\FrontendController::class, 'অবস্থান_গঠন_ও_আয়তন']);
Route::get('/জেলা-সম্পর্কিত/শিল্প-ও-বাণিজ্য', [App\Http\Controllers\Frontend\FrontendController::class, 'শিল্প_ও_বাণিজ্য']);
Route::get('/জেলা-সম্পর্কিত/নদ-নদী', [App\Http\Controllers\Frontend\FrontendController::class, 'নদ_নদী']);
Route::get('/জেলা-সম্পর্কিত/হাটবাজার', [App\Http\Controllers\Frontend\FrontendController::class, 'হাটবাজার']);
Route::get('/জেলা-সম্পর্কিত/যোগাযোগ-ব্যবস্থা', [App\Http\Controllers\Frontend\FrontendController::class, 'যোগাযোগ_ব্যবস্থা']);

// অন্যান্য
Route::get('/জেলা-সম্পর্কিত/জন-প্রতিনিধি', [App\Http\Controllers\Frontend\FrontendController::class, 'জন_প্রতিনিধি']);
Route::get('/জেলা-সম্পর্কিত/ইউপি-চেয়ারম্যান-ও-সচিবগণের-নামের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'ইউপি_চেয়ারম্যান_ও_সচিবগণের_নামের_তালিকা']);
Route::get('/জেলা-সম্পর্কিত/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা']);
Route::get('/জেলা-সম্পর্কিত/পত্রপত্রিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'পত্রপত্রিকা']);
Route::get('/জেলা-সম্পর্কিত/ICT-তে-বর্ষসেরা-পুরস্কার-প্রাপ্তদের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'ICT_তে_বর্ষসেরা_পুরস্কার_প্রাপ্তদের_তালিকা']);




// menu 2
// জেলা প্রশাসক
Route::get('/জেলা-প্রশাসন/জেলা-প্রশাসকের-বার্তা', [App\Http\Controllers\Frontend\FrontendController::class, 'জেলা_প্রশাসকের_বার্তা']);
Route::get('/জেলা-প্রশাসন/প্রোফাইল', [App\Http\Controllers\Frontend\FrontendController::class, 'প্রোফাইল']);
Route::get('/জেলা-প্রশাসন/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা']);

//জেলা প্রশাসকের কার্যালয়
Route::get('/জেলা-প্রশাসন/জেলা-প্রশাসনের-পটভূমি', [App\Http\Controllers\Frontend\FrontendController::class, 'জেলা_প্রশাসনের_পটভূমি']);
Route::get('/জেলা-প্রশাসন/সার্কিট-হাউজ', [App\Http\Controllers\Frontend\FrontendController::class, 'সার্কিট_হাউজ']);
Route::get('/জেলা-প্রশাসন/যোগাযোগ', [App\Http\Controllers\Frontend\FrontendController::class, 'যোগাযোগ']);
Route::get('/জেলা-প্রশাসন/সাংগনিক-কাঠামো', [App\Http\Controllers\Frontend\FrontendController::class, 'সাংগনিক_কাঠামো']);
Route::get('/জেলা-প্রশাসন/সম্পদ-ও-লজিস্টিকস', [App\Http\Controllers\Frontend\FrontendController::class, 'সম্পদ_ও_লজিস্টিকস']);

// উপপরিচালক, স্থানীয় সরকার
Route::get('/জেলা-প্রশাসন/উপ-পরিচালক-স্থানীয়-সরকার', [App\Http\Controllers\Frontend\FrontendController::class, 'উপ_পরিচালক_স্থানীয়_সরকার']);
Route::get('/জেলা-প্রশাসন/অতিরিক্ত-জেলা-প্রশাসক-রাজস্ব', [App\Http\Controllers\Frontend\FrontendController::class, 'অতিরিক্ত_জেলা_প্রশাসক']);
Route::get('/জেলা-প্রশাসন/অতিরিক্ত-জেলা-প্রশাসক-সার্বিক', [App\Http\Controllers\Frontend\FrontendController::class, 'অতিরিক্ত_জেলা_প্রশাসক_সার্বিক']);
Route::get('/জেলা-প্রশাসন/অতিরিক্ত-জেলা-ম্যাজিস্ট্রেট', [App\Http\Controllers\Frontend\FrontendController::class, 'অতিরিক্ত_জেলা_ম্যাজিস্ট্রেট']);
Route::get('/জেলা-প্রশাসন/অতিরিক্ত-জেলা-প্রশাসক-আইসিটি', [App\Http\Controllers\Frontend\FrontendController::class, 'অতিরিক্ত_জেলা_প্রশাসক_আইসিটি']);



// menu 3
//মেহেরপুর পৌরসভা
Route::get('/স্থানীয়-সরকার/পৌরসভা-পরিচিতি', [App\Http\Controllers\Frontend\FrontendController::class, 'পৌরসভা_পরিচিতি']);
Route::get('/স্থানীয়-সরকার/মেয়রের-বাণী', [App\Http\Controllers\Frontend\FrontendController::class, 'মেয়রের_বাণী']);
Route::get('/স্থানীয়-সরকার/প্রাক্তন-মেয়র', [App\Http\Controllers\Frontend\FrontendController::class, 'প্রাক্তন_মেয়র']);
Route::get('/স্থানীয়-সরকার/কাউন্সিলরগন', [App\Http\Controllers\Frontend\FrontendController::class, 'কাউন্সিলরগন']);

//পৌরসভার সংগঠন
Route::get('/স্থানীয়-সরকার/সাংগঠনিক-কাঠামো', [App\Http\Controllers\Frontend\FrontendController::class, 'সাংগঠনিক_কাঠামো']);
Route::get('/স্থানীয়-সরকার/কর্মকর্তাবৃন্দ', [App\Http\Controllers\Frontend\FrontendController::class, 'কর্মকর্তাবৃন্দ']);
Route::get('/স্থানীয়-সরকার/ওয়ার্ডভিত্তিক-এলাকা', [App\Http\Controllers\Frontend\FrontendController::class, 'ওয়ার্ডভিত্তিক_এলাকা']);

//জেলা পরিষদ
Route::get('/স্থানীয়-সরকার/জেলা-পরিষদ-অফিস', [App\Http\Controllers\Frontend\FrontendController::class, 'জেলা_পরিষদ_অফিস']);
Route::get('/স্থানীয়-সরকার/জেলা-পরিষদ-সাংগঠনিক-কাঠামো', [App\Http\Controllers\Frontend\FrontendController::class, 'জেলা_পরিষদ_সাংগঠনিক_কাঠামো']);




// menu 4








// backend start
Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return "This is Admin Panel";
     });
});
