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



}
