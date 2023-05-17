<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UpSashib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SashibController extends Controller
{
    public function ইউপি_সচিবগণের_নামের_তালিকা()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $UpSashib = UpSashib::all();
                return view('frontend.জেলা_সম্পর্কিত.ইউপি_সচিবগণের_নামের_তালিকা.index', compact('UpSashib'));
            } else {
                $UpSashib = UpSashib::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.ইউপি_সচিবগণের_নামের_তালিকা.index', compact('UpSashib'));
            }

        } else {
            $UpSashib = UpSashib::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.ইউপি_সচিবগণের_নামের_তালিকা.index', compact('UpSashib'));
        }
    }

    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.ইউপি_সচিবগণের_নামের_তালিকা.add');
    }

    public function insert(Request $request)
    {
        $UpSashib = new UpSashib();
        $UpSashib->name = $request->input('name');
        $UpSashib->padobi = $request->input('padobi');
        $UpSashib->union = $request->input('union');
        $UpSashib->upzila = $request->input('upzila');
        $UpSashib->phone = $request->input('phone');
        $UpSashib->save();
        return redirect('/জেলা-সম্পর্কিত/ইউপি-সচিবগণের-নামের-তালিকা')->with('status', "UP Sashib Added Successfully!    It will show after Admin Approved");
    }

    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $UpSashib = UpSashib::find($id);
        return view('frontend.জেলা_সম্পর্কিত.ইউপি_সচিবগণের_নামের_তালিকা.edit', compact('UpSashib'));
    }

    public function update(Request $request, $id)
    {

        if(Auth::user()->role_as == 1){
            $UpSashib = UpSashib::find($id);
            $UpSashib->name = $request->input('name');
            $UpSashib->padobi = $request->input('padobi');
            $UpSashib->union = $request->input('union');
            $UpSashib->upzila = $request->input('upzila');
            $UpSashib->phone = $request->input('phone');
            $UpSashib->status = $request->input('status');
            $UpSashib->update();
            return redirect('/জেলা-সম্পর্কিত/ইউপি-সচিবগণের-নামের-তালিকা')->with('status', "UP Sashib Updated Successfully!");

        }else{
            $UpSashib = UpSashib::find($id);
            $UpSashib->name = $request->input('name');
            $UpSashib->padobi = $request->input('padobi');
            $UpSashib->union = $request->input('union');
            $UpSashib->upzila = $request->input('upzila');
            $UpSashib->phone = $request->input('phone');
            $UpSashib->update();
            return redirect('/জেলা-সম্পর্কিত/ইউপি-সচিবগণের-নামের-তালিকা')->with('status', "UP Sashib Updated Successfully!");

        }
    }

    public function destroy($id)
    {
        $this->authorize('delete');
        $UpSashib = UpSashib::find($id);
        $UpSashib->delete();
        return redirect('/জেলা-সম্পর্কিত/ইউপি-সচিবগণের-নামের-তালিকা')->with('status', "UP Sashib Deleted Successfully!");
    }
}
