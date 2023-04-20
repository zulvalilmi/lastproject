@extends('template.cover')

@section('title', 'Tahfidz')

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

{{-- form untuk tambah ustadzah --}}
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Kelas Tahfidz</h6>
    </div>
    <div class="card-body">

<form action="{{ route('tahfidz.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 

    <div class="row mt-3">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama_tahfidz">Nama Kelas Tahfidz</label>
                <input type="text" value="{{old('nama_tahfidz')}}" name="nama_tahfidz" class="form-control @error('nama_tahfidz') is-invalid @enderror" id="nama_tahfidz">
                @error('nama_tahfidz')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ustadzah_id">Guru Halaqoh</label>
                <select class="form-select @error('ustadzah_id') is-invalid @enderror" name="ustadzah_id" id="ustadzah_id">
                    <option value="">Pilih Ustadzah</option>
                    @foreach($ustadzah as $row)
                    <option value="{{ $row->id }}" {{ old('ustadzah_id') == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                    @endforeach
                </select>
                @error('ustadzah_id')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="kelasandorid_id">Kelas</label>
                <select class="form-select @error('kelasandorid_id') is-invalid @enderror" name="kelasandorid_id" id="kelasandorid_id">
                    <option value="">Pilih Kelas</option>
                    @foreach($kelasandorid as $row)
                    <option value="{{ $row->id }}" {{ old('kelasandorid_id') == $row->id ? 'selected' : '' }}>{{ $row->nama_kelas }}</option>
                    @endforeach
                </select>
                @error('kelasandorid_id')
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