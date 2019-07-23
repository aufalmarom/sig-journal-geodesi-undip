@extends('dashboard')
@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                <h5 class="text-white op-7 mb-2">Sistem Informasi Geografis Jurnal Geodesi</h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="{{route('datatable.read')}}" class="btn btn-white btn-border btn-round mr-2">Manage Data</a>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Journal Statistics</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Pie Chart</div>
                </div>
                <div class="card-body">
                    <div class="chart-container">
                        <canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Journal Maps</div>
                    </div>
                </div>
                <div class="card-body">
                    <iframe width="100%" height="500" frameborder="0" src="https://aufalmarom.carto.com/builder/58bedc26-6b98-4113-a009-3d1d09501c65/embed" allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>  
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>    
    var pieChart = document.getElementById('pieChart').getContext('2d');
    var myPieChart = new Chart(pieChart, {
        type: 'pie',
        data: {
            datasets: [{
                data: [<?php 
                    foreach($datas_kk as $data){
                        echo '"'.$data->jumlah_kk.'",';
                    }
                    ?>],
                backgroundColor :['#c62828', '#AD1457', '#6A1B9A', '#4527A0', '#283593', '#1565C0', '#0277BD', '#00838F', '#00695C', '#2E7D32', '#558B2F', '#9E9D24'],
                borderWidth: 0
            }],
            labels: [<?php 
                    foreach($datas_kk as $data){
                        echo '"'.$data->jenis_kk.'",';
                    }
                    ?>] 
        },
        options : {
            responsive: true, 
            maintainAspectRatio: false,
            legend: {
                position : 'bottom',
                labels : {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle : true,
                    padding: 20
                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    })

    //Chart

    var ctx = document.getElementById('statisticsChart').getContext('2d');

    var statisticsChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [<?php foreach($datas_location as $data){
                echo '"'.$data->location.'",';
            } ?>],
            datasets: [ {
                label: "Data Journals",
                borderColor: '#177dff',
                pointBackgroundColor: 'rgba(243, 84, 93, 0.6)',
                pointRadius: 0,
                backgroundColor: 'rgba(243, 84, 93, 0.4)',
                legendColor: '#177dff',
                fill: true,
                borderWidth: 2,
                data: [<?php foreach($datas_location as $data){
                echo '"'.$data->jumlah_data.'",';
            } ?>]
            }]
        },
        options : {
            responsive: true, 
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                bodySpacing: 4,
                mode:"nearest",
                intersect: 0,
                position:"nearest",
                xPadding:10,
                yPadding:10,
                caretPadding:10
            },
            layout:{
                padding:{left:5,right:5,top:15,bottom:15}
            },
            scales: {
                yAxes: [{
                    ticks: {
                        fontStyle: "500",
                        beginAtZero: false,
                        maxTicksLimit: 133,
                        padding: 10
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                        zeroLineColor: "transparent"
                    },
                    ticks: {
                        maxTicksLimit: 133
                    },
                    maxBarThickness: 25,
                }]
            }, 
            legendCallback: function(chart) { 
                var text = []; 
                text.push('<ul class="' + chart.id + '-legend html-legend">'); 
                for (var i = 0; i < chart.data.datasets.length; i++) { 
                    text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>'); 
                    if (chart.data.datasets[i].label) { 
                        text.push(chart.data.datasets[i].label); 
                    } 
                    text.push('</li>'); 
                } 
                text.push('</ul>'); 
                return text.join(''); 
            }  
        }
    });

        var myLegendContainer = document.getElementById("myChartLegend");

        // generate HTML legend
        myLegendContainer.innerHTML = statisticsChart.generateLegend();

        // bind onClick event to all LI-tags of the legend
        var legendItems = myLegendContainer.getElementsByTagName('li');
        for (var i = 0; i < legendItems.length; i += 1) {
        legendItems[i].addEventListener("click", legendClickCallback, false);
        }
    </script>
@endsection
  
@endsection
