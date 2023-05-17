<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HotelAbashan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelAbashanController extends Controller
{
    public function হোটেল_ও_আবাসন()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $hotelAbashan = HotelAbashan::all();
                return view('frontend.জেলা_সম্পর্কিত.হোটেল_ও_আবাসন.index', compact('hotelAbashan'));
            } else {
                $hotelAbashan = HotelAbashan::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.হোটেল_ও_আবাসন.index', compact('hotelAbashan'));
            }
        } else {
            $hotelAbashan = HotelAbashan::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.হোটেল_ও_আবাসন.index', compact('hotelAbashan'));
        }
    }

    public function singelView($name, $id)
    {
        $hotelAbashan = HotelAbashan::find($id);
        return view('frontend.জেলা_সম্পর্কিত.হোটেল_ও_আবাসন.singleView', compact('hotelAbashan'));
    }

    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.হোটেল_ও_আবাসন.add');
    }

    public function insert(Request $request)
    {
        $hotelAbashan = new HotelAbashan();
        $hotelAbashan->name = $request->input('name');
        $hotelAbashan->ownerName = $request->input('ownerName');
        $hotelAbashan->address = $request->input('address');
        $hotelAbashan->mobile = $request->input('mobile');
        $hotelAbashan->abashanDharon = $request->input('abashanDharon');
        $hotelAbashan->biboron = $request->input('biboron');
        $hotelAbashan->save();
        return redirect('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন')->with('status', "Hotel and Abashan Added Successfully!    It will show after Admin Approved");
    }

    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $hotelAbashan = HotelAbashan::find($id);
        return view('frontend.জেলা_সম্পর্কিত.হোটেল_ও_আবাসন.edit', compact('hotelAbashan'));
    }

    public function update(Request $request, $id)
    {

        if (Auth::user()->role_as == 1) {
            $hotelAbashan = HotelAbashan::find($id);
            $hotelAbashan->name = $request->input('name');
            $hotelAbashan->ownerName = $request->input('ownerName');
            $hotelAbashan->address = $request->input('address');
            $hotelAbashan->mobile = $request->input('mobile');
            $hotelAbashan->abashanDharon = $request->input('abashanDharon');
            $hotelAbashan->biboron = $request->input('biboron');
            $hotelAbashan->status = $request->input('status');
            $hotelAbashan->update();
            return redirect('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন')->with('status', "Hotel and Abashan Updated Successfully!");
        } else {
            $hotelAbashan = HotelAbashan::find($id);
            $hotelAbashan->name = $request->input('name');
            $hotelAbashan->ownerName = $request->input('ownerName');
            $hotelAbashan->address = $request->input('address');
            $hotelAbashan->mobile = $request->input('mobile');
            $hotelAbashan->abashanDharon = $request->input('abashanDharon');
            $hotelAbashan->biboron = $request->input('biboron');
            $hotelAbashan->update();
            return redirect('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন')->with('status', "Hotel and Abashan Updated Successfully!");
        }
    }


    public function destroy($id)
    {
        $this->authorize('delete');
        $hotelAbashan = HotelAbashan::find($id);
        $hotelAbashan->delete();
        return redirect('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন')->with('status', "Hotel and Abashan Deleted Successfully!");
    }




}
