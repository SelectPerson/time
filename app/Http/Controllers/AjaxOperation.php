<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class AjaxOperation extends Controller
{
    public function ajaxAddMarkBook(Request $request) {
        $user = \Auth::user();
        $title = $request->input('title');
        $getSpan = $request->input('getSpan');
        $linkMark = $request->input('linkMark');
        $aboutMark = $request->input('aboutMark');
        DB::table('markbook')->insert([
            'title' => $title,
            'user_id' => $user->id,
            'category_name' => $getSpan,
            'link' => $linkMark,
            'about' => $aboutMark
        ]);

//        return $getSpan;
    }
    public function ajaxSelectMarkBook(Request $request) {
        $user = \Auth::user();
        $test = $request->input('test');
        DB::table('category')->update(['category_mark' => false]);
        for($i = 0; $i < count($test); $i++) {
            echo $test[$i];
            DB::table('category')->where('name',$test[$i])->update(['category_mark' => true]);
        }

    }
}
