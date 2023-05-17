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






}
