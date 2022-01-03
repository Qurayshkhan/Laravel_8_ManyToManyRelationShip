<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\singers;
use App\Models\songs;
class SingersController extends Controller
{
    public function add_singer(){
        $singers=new singers();
        $singers->name="Odit Narien";
        $singers->save();
        $songsids=[1,2];
        $singers->songs()->attach($songsids);
    }
}
