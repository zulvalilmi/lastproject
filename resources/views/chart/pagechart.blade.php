@extends('template.cover')

@section('title', 'Halaman Grafik')

@section('content')

<div class="pagetitle">
    <h1>Grafik per kelas tahfidz</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ ('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Grafik</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  
  <section class="section dashboard">
    <div class="row">
  
      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

            <!-- Reports Hafalan -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body"> 
                        <h5 class="card-title">Rote Chart <span>/Kelas Tahfidz</span></h5>
                        <section class="container mt-6">
                            <div class="row mt-2">
                                @foreach($tahfidz as $t)
                                <div class="col mt-3">
                                    <button type="button" class="btn btn-outline-primary"> <a href="{{route('grafik', $t->id)}}" style="color:blue; text-align:left">{{$t->nama_tahfidz}}</a></button>
                                </div>
                                @endforeach
                            </div>
                        </section>
                    </div>

        </div>
      </div>
        </div>
    </section>

@endsection