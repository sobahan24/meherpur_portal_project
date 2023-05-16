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
}
