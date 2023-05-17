<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HatBazar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HatBazarController extends Controller
{
    public function হাটবাজার()
    {
        if (Auth::check()) {

            if (Auth::user()->role_as == '1') {
                $hatBazar = HatBazar::all();
                return view('frontend.জেলা_সম্পর্কিত.হাটবাজার.index', compact('hatBazar'));
            } else {
                $hatBazar = HatBazar::where('status', '1')->get();
                return view('frontend.জেলা_সম্পর্কিত.হাটবাজার.index', compact('hatBazar'));
            }
        } else {
            $hatBazar = HatBazar::where('status', '1')->get();
            return view('frontend.জেলা_সম্পর্কিত.হাটবাজার.index', compact('hatBazar'));
        }
    }

    public function singelView($name, $id)
    {
        $hatBazar = HatBazar::find($id);
        return view('frontend.জেলা_সম্পর্কিত.হাটবাজার.singleView', compact('hatBazar'));
    }

    public function add()
    {
        $this->authorize('add');
        return view('frontend.জেলা_সম্পর্কিত.হাটবাজার.add');
    }

    public function insert(Request $request)
    {
        $hatBazar = new HatBazar();
        $hatBazar->name = $request->input('name');
        $hatBazar->ayoton = $request->input('ayoton');
        $hatBazar->chandinaViti = $request->input('chandinaViti');
        $hatBazar->ijara = $request->input('ijara');
        $hatBazar->address = $request->input('address');
        $hatBazar->biboron = $request->input('biboron');
        $hatBazar->save();
        return redirect('/জেলা-সম্পর্কিত/হাটবাজার')->with('status', "Hat Bazar Added Successfully!    It will show after Admin Approved");
    }


    public function edit($name, $id)
    {
        $this->authorize('edit', 'status');
        $hatBazar = HatBazar::find($id);
        return view('frontend.জেলা_সম্পর্কিত.হাটবাজার.edit', compact('hatBazar'));
    }

    public function update(Request $request, $id)
    {

        if(Auth::user()->role_as == 1){
            $hatBazar = HatBazar::find($id);
            $hatBazar->name = $request->input('name');
            $hatBazar->ayoton = $request->input('ayoton');
            $hatBazar->chandinaViti = $request->input('chandinaViti');
            $hatBazar->ijara = $request->input('ijara');
            $hatBazar->address = $request->input('address');
            $hatBazar->biboron = $request->input('biboron');
            $hatBazar->status = $request->input('status');
            $hatBazar->update();
            return redirect('/জেলা-সম্পর্কিত/হাটবাজার')->with('status', "Hat Bazar Updated Successfully!");

        }else{
            $hatBazar = HatBazar::find($id);
            $hatBazar->name = $request->input('name');
            $hatBazar->ayoton = $request->input('ayoton');
            $hatBazar->chandinaViti = $request->input('chandinaViti');
            $hatBazar->ijara = $request->input('ijara');
            $hatBazar->address = $request->input('address');
            $hatBazar->biboron = $request->input('biboron');
            $hatBazar->update();
            return redirect('/জেলা-সম্পর্কিত/হাটবাজার')->with('status', "Hat Bazar Updated Successfully!");

        }
    }

    public function destroy($id)
    {
        $this->authorize('delete');
        $hatBazar = HatBazar::find($id);
        $hatBazar->delete();
        return redirect('/জেলা-সম্পর্কিত/হাটবাজার')->with('status', "Hat Bazar Deleted Successfully!");
    }





}
