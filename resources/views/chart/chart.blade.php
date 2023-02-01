@extends('template.cover')

@section('title', 'Grafik')

@section('content')

<div class="card">
    <div class="card-body">
        <!-- Line Chart -->
        <div id="reportsChart"></div> 

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                        name: 'Jumlah Juz',
                        data: <?php echo json_encode($data); ?>,
                    }],
                    chart: {
                        height: 350,
                        type: 'area',
                        toolbar: {
                            show: false
                        },
                    },
                    markers: {
                        size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                        type: "gradient",
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 30]
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'smooth',
                        width: 2
                    },
                    xaxis: {
                        type: 'Nama',
                        categories: <?php echo json_encode($categories); ?>,
                    },
                    tooltip: {
                        x: {
                            format: 'dd/MM/yy HH:mm'
                        },
                    }
                }).render();
            });
        </script>
        // <!-- End Line Chart -->

    </div>
</div>
    
// line chart

@endsection