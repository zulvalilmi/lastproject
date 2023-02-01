@extends('template.cover')

@section('title', 'Data Ustadzah Cantik')

@section('content')

<div class="pagetitle">
    <h1>Kelas Tahfidz</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Data Ustadzah</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

{{-- form untuk tambah ustadzah --}}
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Data Ustadzah</h6>
    </div>
    <div class="card-body">

<form action="{{ route('ustadzah.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Nama Ustadzah</label>
                <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                @error('name')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="text" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email">
                @error('email')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>

        <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" id="password">
                @error('password')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>
    </div>
    
    <div class="text-left mt-3 mb-3">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
    </div>
    
</form>

</div>
</div>


@endsection