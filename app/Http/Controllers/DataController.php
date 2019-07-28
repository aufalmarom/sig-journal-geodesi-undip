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

    public function DetailDataTable($id)
    {
        $data = Journals::find($id);
        return view('/detaildatatable', compact('data'));
    }

    public function PostDataTable(Request $request)
    {
        $data = new Journals();
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->title = $request->title;
        $data->dosbing_1 = $request->dosbing_1;
        $data->dosbing_2 = $request->dosbing_2;
        $data->location = $request->location;
        $data->kode_nasional = $request->kode_nasional;
        $data->jenis_kk = $request->jenis_kk;
        $data->tahun = $request->tahun;
        $data->data = $request->data;
        $data->metode = $request->metode;
        $data->hasil = $request->hasil;
        $data->kesimpulan = $request->kesimpulan;
        $data->saran = $request->saran;
        $data->download = $request->download;
        $data->save();

        return back()->with('success', 'oks');
    }

    public function EditDataTable($id)
    {
        $data = Journals::find($id);

        return view('/editdatatable', compact('data'));
    }

    public function PostEditDataTable(Request $request)
    {
        $data = Journals::where('nama', $request->nama)->first();
        $data->nama = $request->nama;
        $data->nim = $request->nim;
        $data->title = $request->title;
        $data->dosbing_1 = $request->dosbing_1;
        $data->dosbing_2 = $request->dosbing_2;
        $data->location = $request->location;
        $data->kode_nasional = $request->kode_nasional;
        $data->jenis_kk = $request->jenis_kk;
        $data->tahun = $request->tahun;
        $data->data = $request->data;
        $data->metode = $request->metode;
        $data->hasil = $request->hasil;
        $data->kesimpulan = $request->kesimpulan;
        $data->saran = $request->saran;
        $data->download = $request->download;
        $data->save();

        return back()->with('success', 'oks');
    }

    public function DeleteDataTable(Request $request)
    {
        $data = Journals::find($request->id);
        $data->delete();

        return back()->with('danger', 'oks');
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
