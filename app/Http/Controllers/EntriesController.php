<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Http\Request;

class EntriesController extends Controller
{
    //
    public function index(){
        $entries = Entry::all();
// 下のindexは<index.blade.phpを呼び出すための構文
        return view('entries.index', ['entries'=>$entries]);
    }

    public function view($id){
        // 特定のデータを取得するfindとfindOrFail
        $entry = Entry::findOrFail($id);

        return view('entries.view', ['entry'=>$entry]);
    }
}
