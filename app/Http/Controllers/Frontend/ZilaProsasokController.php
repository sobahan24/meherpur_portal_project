<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ZilaProsasok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ZilaProsasokController extends Controller

{

    public function বর্তমান_জেলা_প্রশাসকের_বার্তা()
    {
        $ZilaProsasok = ZilaProsasok::orderBy('id', 'DESC')->first();
        return view('frontend.জেলা_প্রশাসন.বর্তমান_জেলা_প্রশাসকের_বার্তা', compact('ZilaProsasok'));
    }

    public function বর্তমান_জেলা_প্রশাসকের_প্রোফাইল()
    {
        $ZilaProsasok = ZilaProsasok::orderBy('id', 'DESC')->first();
        return view('frontend.জেলা_প্রশাসন.বর্তমান_জেলা_প্রশাসকের_প্রোফাইল', compact('ZilaProsasok'));
    }

    public function পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $ZilaProsasok = ZilaProsasok::all();
                return view('frontend.জেলা_প্রশাসন.পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা.index', compact('ZilaProsasok'));
            } else {
                $ZilaProsasok = ZilaProsasok::where('status', '1')->get();
                return view('frontend.জেলা_প্রশাসন.পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা.index', compact('ZilaProsasok'));
            }
        } else {
            $ZilaProsasok = ZilaProsasok::where('status', '1')->get();
            return view('frontend.জেলা_প্রশাসন.পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা.index', compact('ZilaProsasok'));
        }
    }
    
    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_প্রশাসন.পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা.add');
    }

    public function insert(Request $request)
    {
        $ZilaProsasok = new ZilaProsasok();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('assets/uploads/ZilaProsasok/', $filename);
            $ZilaProsasok->image = $filename;
        }
        $ZilaProsasok->name = $request->input('name');
        $ZilaProsasok->padobi = $request->input('padobi');
        $ZilaProsasok->mobile = $request->input('mobile');
        $ZilaProsasok->phone = $request->input('phone');
        $ZilaProsasok->email = $request->input('email');
        $ZilaProsasok->faxOffice = $request->input('faxOffice');
        $ZilaProsasok->faxHome = $request->input('faxHome');
        $ZilaProsasok->batch = $request->input('batch');
        $ZilaProsasok->kormokal = $request->input('kormokal');
        $ZilaProsasok->barta = $request->input('barta');
        $ZilaProsasok->save();
        return redirect('/জেলা-প্রশাসন/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা')->with('status', "Zila Prosasok Added Successfully!    It will show after Admin Approved");
    }

    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $ZilaProsasok = ZilaProsasok::find($id);
        return view('frontend.জেলা_প্রশাসন.পুর্বতন_জেলা_প্রশাসক_ও_মহুকুমা_প্রশাসকগণের_তালিকা.edit', compact('ZilaProsasok'));
    }

    public function update(Request $request, $id)
    {

        if (Auth::user()->role_as == 1) {
            $ZilaProsasok = ZilaProsasok::find($id);
            if($request->hasFile('image'))
            {
                $path = 'assets/uploads/ZilaProsasok/'.$ZilaProsasok->image;
                if(File::exists($path))
                {
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/uploads/ZilaProsasok/',$filename);
                $ZilaProsasok->image = $filename;
            }
            $ZilaProsasok->name = $request->input('name');
            $ZilaProsasok->padobi = $request->input('padobi');
            $ZilaProsasok->mobile = $request->input('mobile');
            $ZilaProsasok->phone = $request->input('phone');
            $ZilaProsasok->email = $request->input('email');
            $ZilaProsasok->faxOffice = $request->input('faxOffice');
            $ZilaProsasok->faxHome = $request->input('faxHome');
            $ZilaProsasok->batch = $request->input('batch');
            $ZilaProsasok->kormokal = $request->input('kormokal');
            $ZilaProsasok->barta = $request->input('barta');
            $ZilaProsasok->status = $request->input('status');
            $ZilaProsasok->update();
            return redirect('/জেলা-প্রশাসন/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা')->with('status', "Zila Prosasok Updated Successfully!");
        } else {
            $ZilaProsasok = ZilaProsasok::find($id);
            if($request->hasFile('image'))
            {
                $path = 'assets/uploads/ZilaProsasok/'.$ZilaProsasok->image;
                if(File::exists($path))
                {
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('assets/uploads/ZilaProsasok/',$filename);
                $ZilaProsasok->image = $filename;
            }
            $ZilaProsasok->name = $request->input('name');
            $ZilaProsasok->padobi = $request->input('padobi');
            $ZilaProsasok->mobile = $request->input('mobile');
            $ZilaProsasok->phone = $request->input('phone');
            $ZilaProsasok->email = $request->input('email');
            $ZilaProsasok->faxOffice = $request->input('faxOffice');
            $ZilaProsasok->faxHome = $request->input('faxHome');
            $ZilaProsasok->batch = $request->input('batch');
            $ZilaProsasok->kormokal = $request->input('kormokal');
            $ZilaProsasok->barta = $request->input('barta');
            $ZilaProsasok->update();
            return redirect('/জেলা-প্রশাসন/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা')->with('status', "Zila Prosasok Updated Successfully!");
        }
    }

    public function destroy($id)
    {
        $this->authorize('delete');
        $ZilaProsasok = ZilaProsasok::find($id);
        if($ZilaProsasok->image)
        {
            $path = 'assets/uploads/ZilaProsasok/'.$ZilaProsasok->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $ZilaProsasok->delete();
        return redirect('/জেলা-প্রশাসন/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা')->with('status', "Zila Prosasok Deleted Successfully!");
    }
}
