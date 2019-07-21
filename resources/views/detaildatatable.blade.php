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
                        <h4 class="card-title">Detail Data</h4>
                    </div>
                </div>
                <div class="card-body">
                    <h5>Nama</h5>
                    <p class="small">{{$data->nama}}</p>
                    <br>

                    <h5>NIM</h5>
                    <p class="small">{{$data->nim}}</p>
                    <br>

                    <h5>Judul Tugas Akhir</h5>
                    <p class="small">{{$data->title}}</p>
                    <br>

                    <h5>Dosen Pembimbing 1</h5>
                    <p class="small">{{$data->dosbing_1}}</p>
                    <br>

                    <h5>Dosen Pembimbing 2</h5>
                    <p class="small">{{$data->dosbing_2}}</p>
                    <br>

                    <h5>Lokasi Penelitian</h5>
                    <p class="small">{{$data->location}}</p>
                    <br>

                    <h5>Kode Nasional</h5>
                    <p class="small">{{$data->kode_nasional}}</p>
                    <br>

                    <h5>Jenis Kompetensi Keahlian</h5>
                    <p class="small">{{$data->jenis_kk}}</p>
                    <br>

                    <h5>Tahun</h5>
                    <p class="small">{{$data->tahun}}</p>
                    <br>

                    <h5>Download File</h5><a href="{{$data->download}}" target="_blank"><button type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-sm" data-original-title="Download">
                            <i class="fa fa-download"></i>
                    </button></a>

                </div>
            </div>
        </div>

    </div>
</div>




@endsection
