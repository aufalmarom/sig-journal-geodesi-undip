<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Journals;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ReadDataTable()
    {
        $datas = Journals::get();
        return view('/datatable', compact('datas'));
    }

    public function ReadDataGrafik()
    {
        return view('/datagrafik');
    }

    public function ReadDataMaps()
    {
        return view('/datamaps');
    }
}
