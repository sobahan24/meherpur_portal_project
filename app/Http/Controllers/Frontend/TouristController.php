<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\TouristSpot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class TouristController extends Controller
{
    public function দর্শনীয়_স্থান()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $touristSpot = TouristSpot::all();
                return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.index', compact('touristSpot'));

            } else {
                $touristSpot = TouristSpot::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.index', compact('touristSpot'));

            }

        } else {
            $touristSpot = TouristSpot::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.index', compact('touristSpot'));

        }
    }


    // Tourist Spot Single Fetch.............................................................................................
    public function singleViewSpot($name, $id)
    {
        $touristSpot = TouristSpot::find($id);
        return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.view', compact('touristSpot'));
    }


    // Tourist Spot Add.............................................................................................
    public function addNewSpot()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.add');
    }

    // Tourist Spot Insert.............................................................................................
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

    // Tourist Spot Edit.............................................................................................
    public function editSpot($name, $id)
    {
        $this->authorize('edit', 'status');
        $touristSpot = TouristSpot::find($id);
        return view('frontend.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.edit', compact('touristSpot'));
    }

    // Tourist Spot Updated .........................................................................................
    public function updateSpot(Request $request, $id)
    {

        if(Auth::user()->role_as == 1){
            $touristSpot = TouristSpot::find($id);
            if($request->hasFile('image'))
            {
                $path = 'assets/uploads/touristSpot/'.$touristSpot->image;
                if(File::exists($path))
                {
                    File::delete($path);
                }
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
            $touristSpot->status = $request->input('status');
            $touristSpot->update();
            return redirect('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান')->with('status', "Tourist Spot Updated Successfully!");

        }else{
            $touristSpot = TouristSpot::find($id);
            if($request->hasFile('image'))
            {
                $path = 'assets/uploads/touristSpot/'.$touristSpot->image;
                if(File::exists($path))
                {
                    File::delete($path);
                }
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
            $touristSpot->update();
            return redirect('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান')->with('status', "Tourist Spot Updated Successfully!");
        }
    }


    // Tourist Spot Deleted...............................................................
    public function destroySpot($id)
    {
        $this->authorize('delete');
        $touristSpot = TouristSpot::find($id);
        if($touristSpot->image)
        {
            $path = 'assets/uploads/touristSpot/'.$touristSpot->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $touristSpot->delete();
        return redirect('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান')->with('status', "Tourist Spot Deleted Successfully");
    }








}
