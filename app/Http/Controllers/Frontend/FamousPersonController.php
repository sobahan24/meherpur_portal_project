<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FamousPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FamousPersonController extends Controller
{
    public function প্রখ্যাত_ব্যক্তিত্ব()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $famousPerson = FamousPerson::all();
                return view('frontend.জেলা_সম্পর্কিত.প্রখ্যাত_ব্যক্তিত্ব.index', compact('famousPerson'));
            } else {
                $famousPerson = FamousPerson::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.প্রখ্যাত_ব্যক্তিত্ব.index', compact('famousPerson'));
            }

        } else {
            $famousPerson = FamousPerson::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.প্রখ্যাত_ব্যক্তিত্ব.index', compact('famousPerson'));
        }
    }
    public function singelView($name, $id)
    {
        $famousPerson = FamousPerson::find($id);
        return view('frontend.জেলা_সম্পর্কিত.প্রখ্যাত_ব্যক্তিত্ব.singleView', compact('famousPerson'));
    }

    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.প্রখ্যাত_ব্যক্তিত্ব.add');
    }

    public function insert(Request $request)
    {
        $famousPerson = new FamousPerson();
        $famousPerson->name = $request->input('name');
        $famousPerson->birthday = $request->input('birthday');
        $famousPerson->dieDay = $request->input('dieDay');
        $famousPerson->details = $request->input('details');
        $famousPerson->save();
        return redirect('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব')->with('status', "Famous Person Added Successfully!    It will show after Admin Approved");
    }

    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $famousPerson = FamousPerson::find($id);
        return view('frontend.জেলা_সম্পর্কিত.প্রখ্যাত_ব্যক্তিত্ব.edit', compact('famousPerson'));
    }

    public function update(Request $request, $id)
    {

        if(Auth::user()->role_as == 1){
            $famousPerson = FamousPerson::find($id);
            $famousPerson->name = $request->input('name');
            $famousPerson->birthday = $request->input('birthday');
            $famousPerson->dieDay = $request->input('dieDay');
            $famousPerson->details = $request->input('details');
            $famousPerson->status = $request->input('status');
            $famousPerson->update();
            return redirect('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব')->with('status', "Famous Person Updated Successfully!");

        }else{
            $famousPerson = FamousPerson::find($id);
            $famousPerson->name = $request->input('name');
            $famousPerson->birthday = $request->input('birthday');
            $famousPerson->dieDay = $request->input('dieDay');
            $famousPerson->details = $request->input('details');
            $famousPerson->update();
            return redirect('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব')->with('status', "Famous Person Updated Successfully!");

        }
    }

    public function destroy($id)
    {
        $this->authorize('delete');
        $famousPerson = FamousPerson::find($id);
        $famousPerson->delete();
        return redirect('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব')->with('status', "Famous Person Deleted Successfully!");
    }
}
