<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function এক_নজরে()
    {
        return view('frontend.জেলা_সম্পর্কিত.এক_নজরে');
    }
    public function পটভুমি()
    {
        return view('frontend.জেলা_সম্পর্কিত.পটভুমি');
    }
    public function ভৌগলিক_পরিচিতি()
    {
        return view('frontend.জেলা_সম্পর্কিত.ভৌগলিক_পরিচিতি');
    }
    public function মানচিত্রে_জেলা()
    {
        return view('frontend.জেলা_সম্পর্কিত.মানচিত্রে_জেলা');
    }
    public function উপজেলা_ও_ইউনিয়ন()
    {
        return view('frontend.জেলা_সম্পর্কিত.উপজেলা_ও_ইউনিয়ন');
    }
    public function খেলাধুলা_ও_বিনোদন()
    {
        return view('frontend.জেলা_সম্পর্কিত.খেলাধুলা_ও_বিনোদন');
    }
    public function জেলার_ঐতিহ্য()
    {
        return view('frontend.জেলা_সম্পর্কিত.জেলার_ঐতিহ্য');
    }
    public function দর্শনীয়_স্থান()
    {
        return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান');
    }
    public function প্রখ্যাত_ব্যক্তিত্ব()
    {
        return view('frontend.জেলা_সম্পর্কিত.প্রখ্যাত_ব্যক্তিত্ব');
    }
    public function ভাষা_ও_সংস্কৃতি()
    {
        return view('frontend.জেলা_সম্পর্কিত.ভাষা_ও_সংস্কৃতি');
    }
    public function মুক্তিযুদ্ধ_ও_মুক্তিযোদ্ধাদের_তালিকা()
    {
        return view('frontend.জেলা_সম্পর্কিত.মুক্তিযুদ্ধ_ও_মুক্তিযোদ্ধাদের_তালিকা');
    }
    public function হোটেল_ও_আবাসন()
    {
        return view('frontend.জেলা_সম্পর্কিত.হোটেল_ও_আবাসন');
    }
    public function অবস্থান_গঠন_ও_আয়তন()
    {
        return view('frontend.জেলা_সম্পর্কিত.অবস্থান_গঠন_ও_আয়তন');
    }
    public function শিল্প_ও_বাণিজ্য()
    {
        return view('frontend.জেলা_সম্পর্কিত.শিল্প_ও_বাণিজ্য');
    }
    public function নদ_নদী()
    {
        return view('frontend.জেলা_সম্পর্কিত.নদ_নদী');
    }
    public function হাটবাজার()
    {
        return view('frontend.জেলা_সম্পর্কিত.হাটবাজার');
    }
    public function যোগাযোগ_ব্যবস্থা()
    {
        return view('frontend.জেলা_সম্পর্কিত.যোগাযোগ_ব্যবস্থা');
    }
    public function জন_প্রতিনিধি()
    {
        return view('frontend.জেলা_সম্পর্কিত.জন_প্রতিনিধি');
    }
    public function ইউপি_চেয়ারম্যান_ও_সচিবগণের_নামের_তালিকা()
    {
        return view('frontend.জেলা_সম্পর্কিত.ইউপি_চেয়ারম্যান_ও_সচিবগণের_নামের_তালিকা');
    }
    public function ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা()
    {
        return view('frontend.জেলা_সম্পর্কিত.ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা');
    }
    public function পত্রপত্রিকা()
    {
        return view('frontend.জেলা_সম্পর্কিত.পত্রপত্রিকা');
    }
    public function ICT_তে_বর্ষসেরা_পুরস্কার_প্রাপ্তদের_তালিকা()
    {
        return view('frontend.জেলা_সম্পর্কিত.ICT_তে_বর্ষসেরা_পুরস্কার_প্রাপ্তদের_তালিকা');
    }
    public function জেলা_প্রশাসকের_বার্তা()
    {
        return view('frontend.জেলা_প্রশাসন.জেলা_প্রশাসকের_বার্তা');
    }
    public function প্রোফাইল()
    {
        return view('frontend.জেলা_প্রশাসন.প্রোফাইল');
    }
    public function মাসিক_কর্মসূচী()
    {
        return view('frontend.জেলা_প্রশাসন.মাসিক_কর্মসূচী');
    }
    public function পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা()
    {
        return view('frontend.জেলা_প্রশাসন.পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা');
    }
    public function জেলা_প্রশাসনের_পটভূমি()
    {
        return view('frontend.জেলা_প্রশাসন.জেলা_প্রশাসনের_পটভূমি');
    }
    public function সার্কিট_হাউজ()
    {
        return view('frontend.জেলা_প্রশাসন.সার্কিট_হাউজ');
    }
    public function যোগাযোগ()
    {
        return view('frontend.জেলা_প্রশাসন.যোগাযোগ');
    }
    public function সাংগনিক_কাঠামো()
    {
        return view('frontend.জেলা_প্রশাসন.সাংগনিক_কাঠামো');
    }
    public function সম্পদ_ও_লজিস্টিকস()
    {
        return view('frontend.জেলা_প্রশাসন.সম্পদ_ও_লজিস্টিকস');
    }
    public function উপ_পরিচালক_স্থানীয়_সরকার()
    {
        return view('frontend.উপ_পরিচালক_অতিরিক্ত_জেলা_প্রশাসক.উপ_পরিচালক_স্থানীয়_সরকার');
    }
    public function অতিরিক্ত_জেলা_প্রশাসক()
    {
        return view('frontend.উপ_পরিচালক_অতিরিক্ত_জেলা_প্রশাসক.অতিরিক্ত_জেলা_প্রশাসক');
    }
    public function অতিরিক্ত_জেলা_প্রশাসক_সার্বিক()
    {
        return view('frontend.উপ_পরিচালক_অতিরিক্ত_জেলা_প্রশাসক.অতিরিক্ত_জেলা_প্রশাসক_সার্বিক');
    }
    public function অতিরিক্ত_জেলা_ম্যাজিস্ট্রেট()
    {
        return view('frontend.উপ_পরিচালক_অতিরিক্ত_জেলা_প্রশাসক.অতিরিক্ত_জেলা_ম্যাজিস্ট্রেট');
    }
    public function অতিরিক্ত_জেলা_প্রশাসক_আইসিটি()
    {
        return view('frontend.উপ_পরিচালক_অতিরিক্ত_জেলা_প্রশাসক.অতিরিক্ত_জেলা_প্রশাসক_আইসিটি');
    }
    
}
