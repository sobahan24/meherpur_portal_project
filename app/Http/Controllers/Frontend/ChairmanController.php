<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chairman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChairmanController extends Controller
{
    public function ইউপি_চেয়ারম্যানগণের_নামের_তালিকা()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $chairman = Chairman::all();
                return view('frontend.জেলা_সম্পর্কিত.ইউপি_চেয়ারম্যানগণের_নামের_তালিকা.index', compact('chairman'));
            } else {
                $chairman = Chairman::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.ইউপি_চেয়ারম্যানগণের_নামের_তালিকা.index', compact('chairman'));
            }

        } else {
            $chairman = Chairman::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.ইউপি_চেয়ারম্যানগণের_নামের_তালিকা.index', compact('chairman'));
        }
    }

    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.ইউপি_চেয়ারম্যানগণের_নামের_তালিকা.add');
    }

    public function insert(Request $request)
    {
        $chairman = new Chairman();
        $chairman->name = $request->input('name');
        $chairman->padobi = $request->input('padobi');
        $chairman->union = $request->input('union');
        $chairman->upzila = $request->input('upzila');
        $chairman->phone = $request->input('phone');
        $chairman->save();
        return redirect('/জেলা-সম্পর্কিত/ইউপি-চেয়ারম্যানগণের-নামের-তালিকা')->with('status', "Chairman Added Successfully!    It will show after Admin Approved");
    }

    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $chairman = Chairman::find($id);
        return view('frontend.জেলা_সম্পর্কিত.ইউপি_চেয়ারম্যানগণের_নামের_তালিকা.edit', compact('chairman'));
    }

    public function update(Request $request, $id)
    {

        if(Auth::user()->role_as == 1){
            $chairman = Chairman::find($id);
            $chairman->name = $request->input('name');
            $chairman->padobi = $request->input('padobi');
            $chairman->union = $request->input('union');
            $chairman->upzila = $request->input('upzila');
            $chairman->phone = $request->input('phone');
            $chairman->status = $request->input('status');
            $chairman->update();
            return redirect('/জেলা-সম্পর্কিত/ইউপি-চেয়ারম্যানগণের-নামের-তালিকা')->with('status', "Chairman Updated Successfully!");

        }else{
            $chairman = Chairman::find($id);
            $chairman->name = $request->input('name');
            $chairman->padobi = $request->input('padobi');
            $chairman->union = $request->input('union');
            $chairman->upzila = $request->input('upzila');
            $chairman->phone = $request->input('phone');
            $chairman->update();
            return redirect('/জেলা-সম্পর্কিত/ইউপি-চেয়ারম্যানগণের-নামের-তালিকা')->with('status', "Chairman Updated Successfully!");

        }
    }

    public function destroy($id)
    {
        $this->authorize('delete');
        $chairman = Chairman::find($id);
        $chairman->delete();
        return redirect('/জেলা-সম্পর্কিত/ইউপি-চেয়ারম্যানগণের-নামের-তালিকা')->with('status', "Chairman Deleted Successfully!");
    }
}
