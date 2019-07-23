<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journals;
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

        $datas_location = DB::table('journals')
            ->select(DB::raw('count(*) as jumlah_data, location'))
            ->groupBy('location')
            ->get();
        return view('home', compact('datas_location'));
    }
}
