@extends('template.cover')

@section('title', 'Tahfidzku')

@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Data Santri</h6>


    </div>
    <div class="card-body">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th width=20%>Tanggal</th>
                    <th width=20%>Nama</th>
                    <th width=30%>Kelas Tahfidz</th>
                    <th width=10%>Surat Ziyadah</th>
                    <th width=10%>Ayat Ziyadah</th>
                    <th width=10%>Surat Murojaah</th>
                    <th width=10%>Ayat Murojaah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($santri as $s)
                <tr>
                    <td>{{ $s->created_at }}</td>
                    <td>{{ $s->santri->name }}</td>
                    <td>
                        {{ $s->tahfidz->nama_tahfidz }}
                        <br>
                        Ustadzah : {{ $s->tahfidz->ustadzah->name }}
                    </td>
                    <td>{{ $s->surat_ziyadah }}</td>
                    <td>{{ $s->ayat_ziyadah }}</td>
                    <td>{{ $s->surat_murojaah }}</td>
                    <td>{{ $s->ayat_murojaah }}</td>

            </tbody>
            @endforeach
        </table>
    </div>
</div>
</div>


@endsection