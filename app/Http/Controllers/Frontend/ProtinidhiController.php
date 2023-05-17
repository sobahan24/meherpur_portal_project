<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Protinidhi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProtinidhiController extends Controller
{
    public function জন_প্রতিনিধি()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $protinidhi = Protinidhi::all();
                return view('frontend.জেলা_সম্পর্কিত.জন_প্রতিনিধি.index', compact('protinidhi'));
            } else {
                $protinidhi = Protinidhi::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.জন_প্রতিনিধি.index', compact('protinidhi'));
            }

        } else {
            $protinidhi = Protinidhi::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.জন_প্রতিনিধি.index', compact('protinidhi'));
        }
    }

    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.জন_প্রতিনিধি.add');
    }

    public function insert(Request $request)
    {
        $protinidhi = new Protinidhi();
        $protinidhi->name = $request->input('name');
        $protinidhi->padobi = $request->input('padobi');
        $protinidhi->phone = $request->input('phone');
        $protinidhi->email = $request->input('email');
        $protinidhi->save();
        return redirect('/জেলা-সম্পর্কিত/জন-প্রতিনিধি')->with('status', "Protinidhi Added Successfully!    It will show after Admin Approved");
    }

    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $protinidhi = Protinidhi::find($id);
        return view('frontend.জেলা_সম্পর্কিত.জন_প্রতিনিধি.edit', compact('protinidhi'));
    }

    public function update(Request $request, $id)
    {

        if(Auth::user()->role_as == 1){
            $protinidhi = Protinidhi::find($id);
            $protinidhi->name = $request->input('name');
            $protinidhi->padobi = $request->input('padobi');
            $protinidhi->phone = $request->input('phone');
            $protinidhi->email = $request->input('email');
            $protinidhi->status = $request->input('status');
            $protinidhi->update();
            return redirect('/জেলা-সম্পর্কিত/জন-প্রতিনিধি')->with('status', "Protinidhi Updated Successfully!");

        }else{
            $protinidhi = Protinidhi::find($id);
            $protinidhi->name = $request->input('name');
            $protinidhi->padobi = $request->input('padobi');
            $protinidhi->phone = $request->input('phone');
            $protinidhi->email = $request->input('email');
            $protinidhi->update();
            return redirect('/জেলা-সম্পর্কিত/জন-প্রতিনিধি')->with('status', "Protinidhi Updated Successfully!");

        }
    }

    public function destroy($id)
    {
        $this->authorize('delete');
        $protinidhi = Protinidhi::find($id);
        $protinidhi->delete();
        return redirect('/জেলা-সম্পর্কিত/জন-প্রতিনিধি')->with('status', "Protinidhi Deleted Successfully!");
    }
}
