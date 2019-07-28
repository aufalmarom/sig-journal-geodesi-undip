@extends('dashboard')
@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Data</h2>
                <h5 class="text-white op-7 mb-2">Sistem Informasi Geografis Jurnal Geodesi</h5>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Edit Data</h4>
                    </div>
                </div>
                <div class="card-body">
                        <form action="{{route('datatable.edit.post')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group form-group-default">
                                        <label>Name</label>
                                        <input name="nama" type="text" class="form-control" placeholder="fill name" value="{{$data->nama}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>NIM</label>
                                        <input name="nim" type="text" class="form-control" placeholder="fill NIM" value="{{$data->nim}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Title</label>
                                        <textarea name="title" rows="3" class="form-control" placeholder="fill title">{{$data->title}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Dosen Pembimbing 1</label>
                                        <input name="dosbing_1" type="text" class="form-control" placeholder="fill dosen pembimbing 1" value="{{$data->dosbing_1}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Dosen Pembimbing 2</label>
                                        <input name="dosbing_2" type="text" class="form-control" placeholder="fill dosen pembimbing 2" value="{{$data->dosbing_2}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Lokasi Penelitian</label>
                                        <input name="location" type="text" class="form-control" placeholder="fill location" value="{{$data->location}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Kode Nasional</label>
                                        <input name="kode_nasional" type="text" class="form-control" placeholder="fill kode nasional" value="{{$data->kode_nasional}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Jenis Kompetensi Keahlian</label>
                                        <input name="jenis_kk" type="text" class="form-control" placeholder="fill kompetensi keahlian" value="{{$data->jenis_kk}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Tahun</label>
                                        <input name="tahun" type="number" class="form-control" placeholder="fill number" value="{{$data->tahun}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Data</label>
                                        <textarea name="data" rows="4" class="form-control" placeholder="fill data">{{$data->data}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Metode</label>
                                        <input name="metode" type="text" class="form-control" placeholder="fill metode" value="{{$data->metode}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Hasil</label>
                                        <input name="hasil" type="text" class="form-control" placeholder="fill hasil" value="{{$data->hasil}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Kesimpulan</label>
                                        <textarea name="kesimpulan" rows="4" class="form-control" placeholder="fill kesimpulan">{{$data->kesimpulan}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Saran</label>
                                        <textarea name="saran" rows="4" class="form-control" placeholder="fill saran">{{$data->saran}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-group-default">
                                        <label>Link Download</label>
                                        <input name="download" type="text" class="form-control" placeholder="fill link download" value="{{$data->download}}">
                                    </div>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>




@endsection
