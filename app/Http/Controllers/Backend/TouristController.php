<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\TouristSpot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TouristController extends Controller
{
    public function index()
    {
        $touristSpot = TouristSpot::all();
        return view('admin.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.index', compact('touristSpot'));
    }
    public function edit($id)
    {
        $touristSpot = TouristSpot::find($id);
        return view('admin.জেলা_সম্পর্কিত.দর্শনীয়_স্থান.edit', compact('touristSpot'));
    }

    public function update(Request $request, $id)
    {
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
        return redirect('/tourist-spot')->with('status', "Tourist Spot Updated Successfully");
    }

    public function destroy($id)
    {
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
        return redirect('/tourist-spot')->with('status', "Tourist Spot Deleted Successfully");
    }



}
