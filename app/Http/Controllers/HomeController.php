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

        $datas_kk = DB::table('journals')
            ->select(DB::raw('count(*) as jumlah_kk, jenis_kk'))
            ->groupBy('jenis_kk')
            ->get();
        return view('home', compact('datas_location', 'datas_kk'));
    }
}
