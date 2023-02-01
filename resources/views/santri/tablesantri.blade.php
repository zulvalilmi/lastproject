@extends('template.cover')

@section('title', 'Data Santri')

@section('content')

<div class="pagetitle">
    <h1>Data Santri</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Santri</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-dark">Data Santri</h6>

        <!-- Button tambah ustadzah -->
        <a href="{{ route('santri.create') }}" class="btn btn-primary">
            + Nama Santri
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
                        <th width=20%>Nama</th>
                        <th width=20%>Edit / Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($santri as $s)
                    <tr>
                        <td>{{ $s->name }}</td>
                        <td>
                            <a href="#delete{{ $s->id }}" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $s->id }}">
                                <i class="bi bi-trash"></i>
                                delete
                            </a>
                            @include('santri.deletesantri') 
                            @endforeach
                        </td>

                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection