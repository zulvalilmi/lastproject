@extends('template.cover')

@section('title', 'Ustadzah Cantik')

@section('content')

<div class="pagetitle">
    <h1>Kelas Tahfidz</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Kelas Tahfidz</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Data Kelas Tahfidz</h6>

        <!-- Button tambah ustadzah -->
        <a href="{{ route('ustadzah.create') }}" class="btn btn-primary">
            + Nama Ustadzah
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
                        <th width=30%>Kelas</th>
                        <th width=30%>Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kelastahfidz as $ustadzah)
                    <tr>
                        <td>{{ $ustadzah->name }}</td>
                        <td>
                            <a href="#delete{{ $ustadzah->id }}" type="button" class="btn btn-danger"
                                data-bs-toggle="modal" data-bs-target="#delete{{ $ustadzah->id }}">
                                <i class="bi bi-trash"></i>
                                delete
                            </a>
                            @include('kelastahfidz.modaltahfidz.deletetahfidz')
                            @endforeach
                        </td>

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection