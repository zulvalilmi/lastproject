@extends('template.cover')

@section('title', 'Kelas Tahfidz')

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
        <a href="{{ route('tahfidz.create') }}" class="btn btn-primary">
            + Kelas Tahfidz
        </a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            {{-- @if(Session::get('Ok'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('Ok') }}
            </div>
            @endif --}}
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width=30%>Kelas Tahfidz</th>
                        <th width=30%>Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tahfidz as $t)
                    <tr>
                        <td>
                            {{ $t->nama_tahfidz }}
                            <br>
                            Ustadzah : {{ $t->ustadzah->name }}
                            <br>
                            Kelas : {{ $t->kelasandorid->nama_kelas }}
                        </td>
                        <td>
                            <a href="#delete{{ $t->id }}" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $t->id }}">
                                <i class="bi bi-trash"></i>
                                delete
                            </a>
                            @include('Tahfidz.mdl.delete')
                        </td>
                        @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection