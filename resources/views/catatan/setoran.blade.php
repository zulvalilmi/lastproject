@extends('template.cover')

@section('title', 'Setoran santri')

@section('content')

<div class="pagetitle">
    <h1>Catatan Setoran </h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Catatan Setoran</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Catatan Setoran Santri</h6>

        <!-- Button tambah ustadzah -->
        <a href="{{ route('setoran.create') }}" class="btn btn-primary">
            + Catatan Setoran
        </a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(Session::get('Ok'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Ok') }}
            </div>
            @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>tanggal</th>
                        <th>Nama Santri</th>
                        <th>Kelas Tahfidz</th>
                        <th>Surat Ziyadah</th>
                        <th>Ayat Ziyadah</th>
                        <th>Surat Murojaah</th>
                        <th>Ayat Murojaah</th>
                        <th>Total Hafalan</th>
                        <th>Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($setoran as $s)
                    <tr>
                        <td>{{ $s->santri->created_at }}</td>
                        <td>{{ $s->santri->name }}</td>
                        <td>
                            {{ $s->tahfidz->nama_tahfidz }}
                            <br>
                            {{ $s->tahfidz->ustadzah->name }}
                        </td>
                        <td>{{ $s->surat_ziyadah }}</td>
                        <td>{{ $s->ayat_ziyadah }}</td>
                        <td>{{ $s->surat_murojaah }}</td>
                        <td>{{ $s->ayat_murojaah }}</td>
                        <td>{{ $s->total_hafalan }}</td>
                        <td>
                            <a href="#delete{{ $s->id }}" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $s->id }}">
                                <i class="bi bi-trash"></i>
                                delete
                            </a>
                            @include('catatan.deletesetoran')
                        </td>
                       
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>





    



@endsection