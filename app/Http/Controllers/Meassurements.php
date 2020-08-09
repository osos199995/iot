<?php

namespace App\Http\Controllers;

use App\Meassuerments;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Meassurements extends Controller
{
    public function store(Request $request){
try{
    $measure= Meassuerments::insert([
        'temprature'=>$request->temprature,
        'humudity'=>$request->humudity,
        'water_content'=>$request->water,
        'soil_moisture1'=>$request->soil_moisture1,
        'soil_moisture2'=>$request->soil_moisture2,
        'created_at'=>Carbon::now()->format('Y-m-d H:i:s')
    ]);
    return response()->json([
        'status'=>'success',

    ]);
}catch (\Throwable $e){
    return response()->json([
        'status'=>'failed',
        'error'=>$e
    ]);

}

    }

    public function show(){
       $meassuerments= Meassuerments::all();
       return view('admin.index',compact('meassuerments'));
    }


public function getData(){
    $meassuerments= Meassuerments::all();
    return response()->json(['data'=>$meassuerments]);
}





}
