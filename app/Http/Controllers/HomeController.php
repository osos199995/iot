<?php

namespace App\Http\Controllers;

use App\Meassuerments;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $meassuerments = Meassuerments::all();
        return view('admin.index', compact('meassuerments'));
    }
}