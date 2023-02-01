@extends('template.cover')

@section('title', 'Ziyadah')

@section('content')

<div class="pagetitle">
    <h1>Catatan Setoran</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Setoran Ziyadah dan Murojaah</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

{{-- form untuk tambah ustadzah --}}
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Ziyadah dan Murojaah</h6>
    </div>
    <div class="card-body">

<form action="{{ route('setoran.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 

        <div class="row mt-3">
           
        <div class="col-md-6">
            <div class="form-group">
                <label for="santri_id">Nama Santri</label>
                <select class="form-select @error('santri_id') is-invalid @enderror" name="santri_id" id="santri_id">
                    <option value="">Pilih santri</option>
                    @foreach($santri as $row)
                    <option value="{{ $row->id }}" {{ old('santri_id') == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                    @endforeach
                </select>
                @error('santri_id')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="tahfidz_id">Kelas Tahfidz + Guru Halaqoh</label>
                <select class="form-select @error('tahfidz_id') is-invalid @enderror" name="tahfidz_id" id="tahfidz_id">
                    <option value="">Pilih Kelas</option>
                    @foreach($tahfidz as $row)
                    <option value="{{ $row->id }}" {{ old('tahfidz_id') == $row->id ? 'selected' : '' }}>{{ $row->nama_tahfidz }} <br> {{ $row->ustadzah->name }}</option>
                    @endforeach
                </select>
                @error('tahfidz_id')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>
    </div>
        <div class="row mt-3">
            <div class="col-md-6">
            <div class="form-group">
                <label for="surat_ziyadah">Surat Ziyadah</label>
                <input type="text" name="surat_ziyadah" value="{{old('surat_ziyadah')}}" class="form-control @error('surat_ziyadah') is-invalid @enderror" id="surat_ziyadah">
                @error('surat_ziyadah')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ayat_ziyadah">Ayat Ziyadah</label>
                <input type="ayat_ziyadah" name="ayat_ziyadah" value="{{old('ayat_ziyadah')}}" class="form-control @error('ayat_ziyadah') is-invalid @enderror" id="ayat_ziyadah">
                @error('ayat_ziyadah')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>
    </div>
        <div class="row mt-3">
            <div class="col-md-6">
            <div class="form-group">
                <label for="surat_murojaah">Surat Murojaah</label>
                <input type="text" name="surat_murojaah" value="{{old('surat_murojaah')}}" class="form-control @error('surat_murojaah') is-invalid @enderror" id="surat_murojaah">
                @error('surat_murojaah')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="ayat_murojaah">Ayat Murojaah</label>
                <input type="ayat_murojaah" name="ayat_murojaah" value="{{old('ayat_murojaah')}}" class="form-control @error('ayat_murojaah') is-invalid @enderror" id="ayat_murojaah">
                @error('ayat_murojaah')
                <div class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </div>                            
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="total_hafalan">Total Hafalan Santri</label>
                    <input type="total_hafalan" name="total_hafalan" value="{{old('total_hafalan')}}" class="form-control @error('total_hafalan') is-invalid @enderror" id="total_hafalan">
                    @error('total_hafalan')
                    <div class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </div>                            
                    @enderror
                </div>
            </div>
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