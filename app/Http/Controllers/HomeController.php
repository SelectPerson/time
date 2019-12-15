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
        $getJoinCategory = DB::table('category')->join('markbook',function($join) {
            $join->on('category_name','=','name')->where(
                [
                    'category_mark'=> 1,
                    'category.user_id' => \Auth::user()->id
                ]);
        })->OrderBy('markbook.id','DESC')->get();
//        dd($getJoinCategory);
//        ->OrderBy('id','DESC')
        $getDay = DB::table('day_record')->where('user_id', $user->id)->OrderBy('id','DESC')->get();
//        dd($getDay);
        // getCategory
        $getCategoryAll = DB::table('category')->where(
            ['user_id' => $user->id]
        )->orderBy('id', 'asc')->get();

        $getCategoryMark = DB::table('category')->where(
            ['user_id' => $user->id])
            ->whereIn('category_mark', [0,1])->get();
//        dd($getCategoryMark);
        $getCategoryPlanning = DB::table('category')->where(['user_id' => $user->id, 'category_planning' => 1])->get();

        $getCategoryRecord = DB::table('category')->where(['user_id' => $user->id, 'category_record' => 1])->get();
//        dd($getCategoryRecord);
        $getCountMark = DB::table('category')->where(['user_id' => $user->id, 'category_mark' => 1])->count();
        //
//        $getListMark = DB::table('markbook')->where(['user_id' => $user->id])->get();


        return view($request->route()->getName() ,[
            'getDay' => $getDay,
            'getCategoryAll' => $getCategoryAll,
            'getCategoryMark' => $getCategoryMark,
            'getCategoryPlanning' => $getCategoryPlanning,
            'getCategoryRecord' => $getCategoryRecord,
            // Count
            'getCountMark' => $getCountMark,
            // GetListMark
            'getJoinCategory' => $getJoinCategory

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
        $data = $request->input('data');
        $fromTime = $request->input('fromTime');
        $toTime = $request->input('toTime');
        $effective = $request->input('effective');
        $user = \Auth::user();
        DB::table('day_record')->insert([
            'about' => $about,
            'data' => $data,
            'from_time' => $fromTime,
            'to_time' => $toTime,
            'effective_time' =>  $effective,
            'user_id' => $user->id
        ]);
    }
    public function ajaxAddCategory(Request $request) {
        $nameCategory = $request->input('nameCategory');
        $user = \Auth::user();
        $boolCategory = DB::table('category')->where(['name' => $nameCategory, 'user_id' => $user->id])->first();
        if(!$boolCategory) {
            DB::table('category')->insert([
                'name' => $nameCategory,
                'user_id' => $user->id,
                'category_mark' => 1
            ]);
            return 'Категорія успішно додана';
        }
        else {
            return 'Категорія вже присутня';
        }


//        DB::table('category')->insert([
//           'name' => $nameCategory,
//            'user_id' => $user->id,
//            'category_mark' => 1
//        ]);
    }

}
