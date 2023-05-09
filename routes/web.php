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
Route::get('/site/এক-নজরে', [App\Http\Controllers\Frontend\FrontendController::class, 'এক_নজরে']);
Route::get('/site/পটভুমি', [App\Http\Controllers\Frontend\FrontendController::class, 'পটভুমি']);
Route::get('/site/ভৌগলিক-পরিচিতি', [App\Http\Controllers\Frontend\FrontendController::class, 'ভৌগলিক_পরিচিতি']);
Route::get('/site/মানচিত্রে-জেলা', [App\Http\Controllers\Frontend\FrontendController::class, 'মানচিত্রে_জেলা']);
Route::get('/site/উপজেলা-ও-ইউনিয়ন', [App\Http\Controllers\Frontend\FrontendController::class, 'উপজেলা_ও_ইউনিয়ন']);

// ইতিহাস ও ঐতিহ্য
Route::get('/site/খেলাধুলা-ও-বিনোদন', [App\Http\Controllers\Frontend\FrontendController::class, 'খেলাধুলা_ও_বিনোদন']);
Route::get('/site/জেলার-ঐতিহ্য', [App\Http\Controllers\Frontend\FrontendController::class, 'জেলার_ঐতিহ্য']);
Route::get('/site/দর্শনীয়-স্থান', [App\Http\Controllers\Frontend\FrontendController::class, 'দর্শনীয়_স্থান']);
Route::get('/site/প্রখ্যাত-ব্যক্তিত্ব', [App\Http\Controllers\Frontend\FrontendController::class, 'প্রখ্যাত_ব্যক্তিত্ব']);
Route::get('/site/ভাষা-ও-সংস্কৃতি', [App\Http\Controllers\Frontend\FrontendController::class, 'ভাষা_ও_সংস্কৃতি']);
Route::get('/site/মুক্তিযুদ্ধ-ও-মুক্তিযোদ্ধাদের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'মুক্তিযুদ্ধ_ও_মুক্তিযোদ্ধাদের_তালিকা']);

// ভৌগোলিক ও অর্থনৈতিক
Route::get('/site/হোটেল-ও-আবাসন', [App\Http\Controllers\Frontend\FrontendController::class, 'হোটেল_ও_আবাসন']);
Route::get('/site/অবস্থান-গঠন-ও-আয়তন', [App\Http\Controllers\Frontend\FrontendController::class, 'অবস্থান_গঠন_ও_আয়তন']);
Route::get('/site/শিল্প-ও-বাণিজ্য', [App\Http\Controllers\Frontend\FrontendController::class, 'শিল্প_ও_বাণিজ্য']);
Route::get('/site/নদ-নদী', [App\Http\Controllers\Frontend\FrontendController::class, 'নদ_নদী']);
Route::get('/site/হাটবাজার', [App\Http\Controllers\Frontend\FrontendController::class, 'হাটবাজার']);
Route::get('/site/যোগাযোগ-ব্যবস্থা', [App\Http\Controllers\Frontend\FrontendController::class, 'যোগাযোগ_ব্যবস্থা']);

// অন্যান্য
Route::get('/site/জন-প্রতিনিধি', [App\Http\Controllers\Frontend\FrontendController::class, 'জন_প্রতিনিধি']);
Route::get('/site/ইউপি-চেয়ারম্যান-ও-সচিবগণের-নামের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'ইউপি_চেয়ারম্যান_ও_সচিবগণের_নামের_তালিকা']);
Route::get('/site/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা']);
Route::get('/site/পত্রপত্রিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'পত্রপত্রিকা']);
Route::get('/site/ICT-তে-বর্ষসেরা-পুরস্কার-প্রাপ্তদের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'ICT_তে_বর্ষসেরা_পুরস্কার_প্রাপ্তদের_তালিকা']);




// section 2
// জেলা প্রশাসকের বার্তা
Route::get('/site/officer_list/জেলা-প্রশাসকের-বার্তা', [App\Http\Controllers\Frontend\FrontendController::class, 'জেলা_প্রশাসকের_বার্তা']);
Route::get('/site/officer_list/প্রোফাইল', [App\Http\Controllers\Frontend\FrontendController::class, 'প্রোফাইল']);
Route::get('/site/officer_list/মাসিক-কর্মসূচী', [App\Http\Controllers\Frontend\FrontendController::class, 'মাসিক_কর্মসূচী']);
Route::get('/site/officer_list/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা', [App\Http\Controllers\Frontend\FrontendController::class, 'পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা']);
Route::get('/site/officer_list/জেলা-প্রশাসনের-পটভূমি', [App\Http\Controllers\Frontend\FrontendController::class, 'জেলা_প্রশাসনের_পটভূমি']);
Route::get('/site/officer_list/সার্কিট-হাউজ', [App\Http\Controllers\Frontend\FrontendController::class, 'সার্কিট_হাউজ']);
Route::get('/site/officer_list/যোগাযোগ', [App\Http\Controllers\Frontend\FrontendController::class, 'যোগাযোগ']);
Route::get('/site/officer_list/সাংগনিক-কাঠামো', [App\Http\Controllers\Frontend\FrontendController::class, 'সাংগনিক_কাঠামো']);
Route::get('/site/officer_list/সম্পদ-ও-লজিস্টিকস', [App\Http\Controllers\Frontend\FrontendController::class, 'সম্পদ_ও_লজিস্টিকস']);


// section 3
// উপপরিচালক, স্থানীয় সরকার
Route::get('/site/officer_list/উপ-পরিচালক-স্থানীয়-সরকার', [App\Http\Controllers\Frontend\FrontendController::class, 'উপ_পরিচালক_স্থানীয়_সরকার']);
Route::get('/site/officer_list/অতিরিক্ত-জেলা-প্রশাসক-রাজস্ব', [App\Http\Controllers\Frontend\FrontendController::class, 'অতিরিক্ত_জেলা_প্রশাসক']);
Route::get('/site/officer_list/অতিরিক্ত-জেলা-প্রশাসক-সার্বিক', [App\Http\Controllers\Frontend\FrontendController::class, 'অতিরিক্ত_জেলা_প্রশাসক_সার্বিক']);
Route::get('/site/officer_list/অতিরিক্ত-জেলা-ম্যাজিস্ট্রেট', [App\Http\Controllers\Frontend\FrontendController::class, 'অতিরিক্ত_জেলা_ম্যাজিস্ট্রেট']);
Route::get('/site/officer_list/অতিরিক্ত-জেলা-প্রশাসক-আইসিটি', [App\Http\Controllers\Frontend\FrontendController::class, 'অতিরিক্ত_জেলা_প্রশাসক_আইসিটি']);








// backend start
Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return "This is Admin Panel";
     });
});
