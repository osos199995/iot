<?php

namespace App\Http\Controllers;

use App\pump;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index(){
        $pump=pump::first();
        return view('admin.settings.index',compact('pump'));
    }


public function updatefirstpump($id,$status ){

$pump =pump::first();
$pump['pump1'] =$status;
$pump->save();

    }


    public function updatesecoundpump($id,$status){
        $pump =pump::first();
        $pump['pump2'] =$status;
        $pump->save();

    }

    public function pumpControl(){
        $pump =pump::first();
        return response()->json(['data'=>$pump]);
    }
}
