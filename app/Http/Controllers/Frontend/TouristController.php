<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TouristSpot;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    public function দর্শনীয়_স্থান()
    {
        $touristSpot = TouristSpot::where('status', '1')->get();
        return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.index', compact('touristSpot'));
    }
    public function viewSpot($name, $id)
    {
        $touristSpot = TouristSpot::find($id);
        return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.view', compact('touristSpot'));
    }

    public function addNewSpot()
    {
        return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.add');
    }

    public function insertNewSpot(Request $request)
    {
        $touristSpot = new TouristSpot();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/touristSpot/',$filename);
            $touristSpot->image = $filename;
        }
        $touristSpot->name = $request->input('name');
        $touristSpot->biboron = $request->input('biboron');
        $touristSpot->abashan = $request->input('abashan');
        $touristSpot->thikana = $request->input('thikana');
        $touristSpot->save();
        return redirect('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান')->with('status', "Tourist Spot Added Successfully!      It will show after Admin Approved");
    }



    // public function মুজিবনগর_মুক্তিযুদ্ধ_স্মৃতি_কমপ্লেক্স_এবং_আম্রকানন()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.মুজিবনগর_মুক্তিযুদ্ধ_স্মৃতি_কমপ্লেক্স_এবং_আম্রকানন');
    // }
    // public function মেহেরপুর_শহীদ_স্মৃতিসৌধ()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.মেহেরপুর_শহীদ_স্মৃতিসৌধ');
    // }
    // public function আমদহ_গ্রামের_স্থাপত্য_নিদর্শন()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.আমদহ_গ্রামের_স্থাপত্য_নিদর্শন');
    // }
    // public function সিদ্ধেশ্বরী_কালী_মন্দির()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.সিদ্ধেশ্বরী_কালী_মন্দির');
    // }
    // public function আমঝুপি_নীলকুঠি()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.আমঝুপি_নীলকুঠি');
    // }
    // public function ডিসি_ইকোপার্ক()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.ডিসি_ইকোপার্ক');
    // }
    // public function ভবানন্দপুর_মন্দির()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.ভবানন্দপুর_মন্দির');
    // }
    // public function মেহেরপুর_পৌর_কবর_স্থান()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.মেহেরপুর_পৌর_কবর_স্থান');
    // }
    // public function পৌর_ঈদগাহ()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.পৌর_ঈদগাহ');
    // }
    // public function পৌর_হল()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.পৌর_হল');
    // }
    // public function বল্লভপুর_চার্চ()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.বল্লভপুর_চার্চ');
    // }
    // public function স্বামী_নিগমানন্দ_আশ্রম()
    // {
    //     return view('frontend.জেলা_সম্পর্কিত.স্বামী_নিগমানন্দ_আশ্রম');
    // }
}
