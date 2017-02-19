@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Lembur Pegawai</center></div>

                <div class="panel-body">
                <table class="table" border="2">
                    <thead>
                    <tr>
                        <th><center>No</th></center>
                        <th><center>Uang Kategori Lembur</th></center>
                        <th><center>Nip Pegawai</th></center>
                        <th><center>Jumlah Jam</th></center>
                    </tr>
                </head>
                @php
                $a=1;
                @endphp
                @foreach ($lembur_pegawai as $data)
                <tbody>
                    <td><center>{{$a++}}</td></center>
                    <td><center>{{$data->kategori_lembur->besaran_uang}}</td></center>
                    <td><center>{{$data->pegawai->nip}}</td></center>
                    <td><center>{{$data->jumlah_jam}}</td></center>
                </tbody>
                @endforeach

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
