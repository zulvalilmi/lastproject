@extends('template.cover')

@section('title', 'Kelas - Tahfidzku')

@section('content')

<div class="pagetitle">
    <h1>Kelas IT</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Kelas IT</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Data Kelas IT</h6>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            + Data Kelas
        </button>

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
                        <th width=30%>Kelas</th>
                        <th width=30%>Slug</th>
                        <th width=30%>Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelas as $k)
                    <tr>
                        <td>{{ $k->nama_kelas }}</td>
                        <td>{{ $k->slug }}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#edit{{ $k->id }}">
                                <i class="bi bi-pencil-square"></i>
                                edit
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{ $k->id }}">
                                <i class="bi bi-trash"></i>
                                delete
                            </button>
                        </td>
                        @include('kelasandroid.modalkelas.editkelas')
                        @include('kelasandroid.modalkelas.deletekelas')
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- modal Tambah data --}}
@include('kelasandroid.modalkelas.tambahkelas')


@endsection