@extends('backend/layout')
@section('content')
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Doanh thu tháng này</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ number_format($thisMonthTotal, 0, ',', '.') }} VND</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Tổng doanh thu</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ number_format($total, 0, ',', '.') }} VND</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Số đơn hàng
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sumOrder }}</div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Số tài khoản</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $sumUser }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br class="mb-10">
    <hr>
    <br class="mb-10">

    <!-- Content Row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div id="pieChart" style="height: 360px; width: 100%;">
                </div>
            </div>
            {{-- <div class="col-md-6">
                <div id="columnChart" style="height: 360px; width: 100%;">
                </div>
            </div> --}}
        </div>
    </div>
    @php
        $sumOrder_json = json_encode($sumOrder);
        $sumOrderOfUser_json = json_encode($sumOrderOfUser);
    @endphp

    <script>
        window.onload = function() {
            var sumOrder = JSON.parse('<?php echo $sumOrder_json; ?>');
            var sumOrderOfUser = JSON.parse('<?php echo $sumOrderOfUser_json; ?>');
            var pieChartValues = [{
                y: sumOrderOfUser,
                exploded: true,
                indexLabel: "Có tài khoản",
                color: "#1f77b4"
            }, {
                y: sumOrder - sumOrderOfUser,
                indexLabel: "Không có tài khoản",
                color: "#d62728"
            }];
            renderPieChart(pieChartValues);

            function renderPieChart(values) {

                var chart = new CanvasJS.Chart("pieChart", {
                    backgroundColor: "white",
                    colorSet: "colorSet2",

                    title: {
                        text: "Đơn hàng",
                        fontFamily: "Verdana",
                        fontSize: 25,
                        fontWeight: "normal",
                    },
                    animationEnabled: true,
                    data: [{
                        indexLabelFontSize: 15,
                        indexLabelFontFamily: "Monospace",
                        indexLabelFontColor: "darkgrey",
                        indexLabelLineColor: "darkgrey",
                        indexLabelPlacement: "outside",
                        type: "pie",
                        showInLegend: false,
                        toolTipContent: "<strong>#percent%</strong>",
                        dataPoints: values
                    }]
                });
                chart.render();
            }
            //     var columnChartValues = [{
            //         y: 686.04,
            //         label: "one",
            //         color: "#1f77b4"
            //     }, {
            //         y: 381.84,
            //         label: "two",
            //         color: "#ff7f0e"
            //     }, {
            //         y: 375.76,
            //         label: "three",
            //         color: " #ffbb78"
            //     }, {
            //         y: 97.48,
            //         label: "four",
            //         color: "#d62728"
            //     }, {
            //         y: 94.2,
            //         label: "five",
            //         color: "#98df8a"
            //     }, {
            //         y: 65.28,
            //         label: "Hi",
            //         color: "#bcbd22"
            //     }, {
            //         y: 51.2,
            //         label: "Hello",
            //         color: "#f7b6d2"
            //     }];
            //     renderColumnChart(columnChartValues);

            //     function renderColumnChart(values) {

            //         var chart = new CanvasJS.Chart("columnChart", {
            //             backgroundColor: "white",
            //             colorSet: "colorSet3",
            //             title: {
            //                 text: "Doanh thu 6 tháng gần nhất",
            //                 fontFamily: "Verdana",
            //                 fontSize: 25,
            //                 fontWeight: "normal",
            //             },
            //             animationEnabled: true,
            //             legend: {
            //                 verticalAlign: "bottom",
            //                 horizontalAlign: "center"
            //             },
            //             theme: "theme2",
            //             data: [

            //                 {
            //                     indexLabelFontSize: 15,
            //                     indexLabelFontFamily: "Monospace",
            //                     indexLabelFontColor: "darkgrey",
            //                     indexLabelLineColor: "darkgrey",
            //                     indexLabelPlacement: "outside",
            //                     type: "column",
            //                     showInLegend: false,
            //                     legendMarkerColor: "grey",
            //                     dataPoints: values
            //                 }
            //             ]
            //         });

            //         chart.render();
            //     }
        }
    </script>
@endsection
