@extends('template.cover')

@section('title', 'Dashboard - Tahfidzku')

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

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

        <!-- Sales Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Kelas IT</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-robot"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $kelas_android }}</h6>
                  <span class="text-muted small pt-2 ps-1">Kelas</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Kelas Tahfidz</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-rocket-takeoff"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $tahfidz }}</h6>
                  <span class="text-muted small pt-2 ps-1">Kelas Tahfidz</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Santri</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-person-hearts"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $santri }}</h6>
                  <span class="text-muted small pt-2 ps-1">Santri</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Data Ustadzah</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-person-heart"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $kelastahfidz }}</h6>
                  <span class="text-muted small pt-2 ps-1">Ustadzah</span>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- End Sales Card -->

      </div>
    </div>
    <!-- End Left side columns -->

  </div>

  

</section>



@endsection