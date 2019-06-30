<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function ReadDataTable()
    {
        return view('/datatable');
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
