<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = \Auth::user();

        $getDay = DB::table('day_record')->where('user_id', $user->id)->get();
        $test = 5;
        return view('home',[
            'test' => $test,
            'test1' => $test,
            'getDay' => $getDay
        ]);
    }
}
