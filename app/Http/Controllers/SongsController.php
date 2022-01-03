<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\singers;
use App\Models\songs;

class SongsController extends Controller
{
    public function add_songs(){
        $songs=new songs();
        $songs->title="Har Zulam Tera Yaad Haay";
        $songs->save();
    }
    public function show_songs($id){
        $songs=singers::find($id)->songs;
        return $songs;
    }
}
