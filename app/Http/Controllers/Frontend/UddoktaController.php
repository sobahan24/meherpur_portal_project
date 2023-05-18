<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Uddokta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UddoktaController extends Controller
{
    public function ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $Uddokta = Uddokta::all();
                return view('frontend.জেলা_সম্পর্কিত.ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা.index', compact('Uddokta'));
            } else {
                $Uddokta = Uddokta::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা.index', compact('Uddokta'));
            }

        } else {
            $Uddokta = Uddokta::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা.index', compact('Uddokta'));
        }
    }

    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা.add');
    }

    public function insert(Request $request)
    {
        $Uddokta = new Uddokta();
        $Uddokta->name = $request->input('name');
        $Uddokta->padobi = $request->input('padobi');
        $Uddokta->union = $request->input('union');
        $Uddokta->upzila = $request->input('upzila');
        $Uddokta->phone = $request->input('phone');
        $Uddokta->save();
        return redirect('/জেলা-সম্পর্কিত/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা')->with('status', "Uddokta Added Successfully!    It will show after Admin Approved");
    }

    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $Uddokta = Uddokta::find($id);
        return view('frontend.জেলা_সম্পর্কিত.ইউনিয়ন_ডিজিটাল_সেন্টারের_উদ্যোক্তাদের_তালিকা.edit', compact('Uddokta'));
    }

    public function update(Request $request, $id)
    {

        if(Auth::user()->role_as == 1){
            $Uddokta = Uddokta::find($id);
            $Uddokta->name = $request->input('name');
            $Uddokta->padobi = $request->input('padobi');
            $Uddokta->union = $request->input('union');
            $Uddokta->upzila = $request->input('upzila');
            $Uddokta->phone = $request->input('phone');
            $Uddokta->status = $request->input('status');
            $Uddokta->update();
            return redirect('/জেলা-সম্পর্কিত/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা')->with('status', "Uddokta Updated Successfully!");

        }else{
            $Uddokta = Uddokta::find($id);
            $Uddokta->name = $request->input('name');
            $Uddokta->padobi = $request->input('padobi');
            $Uddokta->union = $request->input('union');
            $Uddokta->upzila = $request->input('upzila');
            $Uddokta->phone = $request->input('phone');
            $Uddokta->update();
            return redirect('/জেলা-সম্পর্কিত/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা')->with('status', "Uddokta Updated Successfully!");

        }
    }

    public function destroy($id)
    {
        $this->authorize('delete');
        $Uddokta = Uddokta::find($id);
        $Uddokta->delete();
        return redirect('/জেলা-সম্পর্কিত/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা')->with('status', "Uddokta Deleted Successfully!");
    }
}
