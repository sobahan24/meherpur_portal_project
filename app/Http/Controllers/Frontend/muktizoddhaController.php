<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Muktizoddha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class muktizoddhaController extends Controller
{
    public function মুক্তিযোদ্ধাদের_তালিকা()
    {
        if (Auth::check()) {

            if (Auth::user()->id == '1') {
                $muktizoddha = Muktizoddha::all();
                return view('frontend.জেলা_সম্পর্কিত.মুক্তিযোদ্ধাদের_তালিকা.index', compact('muktizoddha'));
            } else {
                $muktizoddha = Muktizoddha::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.মুক্তিযোদ্ধাদের_তালিকা.index', compact('muktizoddha'));
            }
        } else {
            $muktizoddha = Muktizoddha::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.মুক্তিযোদ্ধাদের_তালিকা.index', compact('muktizoddha'));
        }
    }

    public function singelView($name, $id)
    {
        $muktizoddha = Muktizoddha::find($id);
        return view('frontend.জেলা_সম্পর্কিত.মুক্তিযোদ্ধাদের_তালিকা.singleView', compact('muktizoddha'));
    }

    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.মুক্তিযোদ্ধাদের_তালিকা.add');

    }

    public function insert(Request $request)
    {
        $muktizoddha = new Muktizoddha();
        $muktizoddha->name = $request->input('name');
        $muktizoddha->fatherName = $request->input('fatherName');
        $muktizoddha->motherName = $request->input('motherName');
        $muktizoddha->gram = $request->input('gram');
        $muktizoddha->upozila = $request->input('upozila');
        $muktizoddha->zila = $request->input('zila');
        $muktizoddha->biboron = $request->input('biboron');
        $muktizoddha->save();
        return redirect('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা')->with('status', "Muktizoddha Added Successfully!    It will show after Admin Approved");
    }

    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $muktizoddha = Muktizoddha::find($id);
        return view('frontend.জেলা_সম্পর্কিত.মুক্তিযোদ্ধাদের_তালিকা.edit', compact('muktizoddha'));
    }


    public function update(Request $request, $id)
    {

        if(Auth::user()->role_as == 1){
            $muktizoddha = Muktizoddha::find($id);;
            $muktizoddha->name = $request->input('name');
            $muktizoddha->fatherName = $request->input('fatherName');
            $muktizoddha->motherName = $request->input('motherName');
            $muktizoddha->gram = $request->input('gram');
            $muktizoddha->upozila = $request->input('upozila');
            $muktizoddha->zila = $request->input('zila');
            $muktizoddha->biboron = $request->input('biboron');
            $muktizoddha->status = $request->input('status');
            $muktizoddha->update();
            return redirect('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা')->with('status', "Muktizoddha Updated Successfully!");
        }else{
            $muktizoddha = Muktizoddha::find($id);;
            $muktizoddha->name = $request->input('name');
            $muktizoddha->fatherName = $request->input('fatherName');
            $muktizoddha->motherName = $request->input('motherName');
            $muktizoddha->gram = $request->input('gram');
            $muktizoddha->upozila = $request->input('upozila');
            $muktizoddha->zila = $request->input('zila');
            $muktizoddha->biboron = $request->input('biboron');
            $muktizoddha->update();
            return redirect('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা')->with('status', "Muktizoddha Updated Successfully!");
        }
    }

    public function destroy($id)
    {
        $this->authorize('delete');
        $muktizoddha = Muktizoddha::find($id);
        $muktizoddha->delete();
        return redirect('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা')->with('status', "Muktizoddha Deleted Successfully!");

    }

}
