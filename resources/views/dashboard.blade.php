@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-4">
            <div class="card card-chart">
                <div class="card-header ">

                        <div class="text-left">
                            <h5 class="card-category">Filtros</h5>
                            <h2 class="card-title"></h2></div>

                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-8">
            <div class="card card-chart">
                <div class="card-header ">

                    <div class="text-left">
                        <h5 class="card-category">200 Resultados encontrados</h5>
                        <h2 class="card-title">Performance</h2></div>

                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
