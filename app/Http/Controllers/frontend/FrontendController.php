<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\About;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home.index', [
            'slider' => Slider::where('status', 1)->first(),
            'about' => About::first(),
        ]);
    }

    public function about(){
        return view('frontend.about.index', [
            'about' => About::first(),
        ]);
    }

    




}
