<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Review;
use App\Models\Setting;
use App\Models\Game;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['setting'] = Setting::first();
        $data['games'] = Game::where('status', 2)->get();
        return view('index', $data);
    }

    public function review(){
        $data['setting'] = Setting::first();
        $data['reviews'] = Review::latest()->get();
        return view('review', $data);
    }

    public function oddeven(){
        return view('oddeven');
    }

    

    public function ludo(){
        return view('ludo');
    }

    public function headtail(){
        return view('headtail');
    }

    public function spin(){
        return view('spin');
    }

    public function teenpaty(){
        return view('teenpaty');
    }

    public function tomjare(){
        return view('tomjare');
    }

    public function profile()
    {
        $data['profile'] = User::find(Auth::user()->id)->first();
        return view('profile', $data);
    }


}
