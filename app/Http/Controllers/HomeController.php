<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
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
    public function index(Request $request)
    {
        $user = \Auth::user();

        $getDay = DB::table('day_record')->where('user_id', $user->id)->get();

        $getCategoryMark = DB::table('category')->where(['user_id' => $user->id, 'category_mark' => 1])->get();
        $getCategoryPlanning = DB::table('category')->where(['user_id' => $user->id, 'category_planning' => 1])->get();
        $getCategoryRecord = DB::table('category')->where(['user_id' => $user->id, 'category_record' => 1])->get();

        return view($request->route()->getName() ,[
            'getDay' => $getDay,
            'getCategoryMark' => $getCategoryMark,
            'getCategoryPlanning' => $getCategoryPlanning,
            'getCategoryRecord' => $getCategoryRecord
        ]);
    }
    public function ajaxRequest() {
        $test = 1;
        return view('ajaxRequest', [
            'test' => $test,
        ]);
    }
    /**

     * Create a new controller instance.

     *

     * @return void

     */
    public function ajaxRequestPost(Request $request)
    {
        $about = $request->input('about');
        $link = $request->input('link');
        $data = $request->input('data');
        $fromTime = $request->input('fromTime');
        $toTime = $request->input('toTime');
        $effective = $request->input('effective');
        $user = \Auth::user();
        DB::table('day_record')->insert([
            'about' => $about,
            'link' => $link,
            'data' => $data,
            'from_time' => $fromTime,
            'to_time' => $toTime,
            'effective_time' =>  $effective,
            'user_id' => $user->id
        ]);
    }
    public function ajaxAddCategory(Request $request) {

    }
}
