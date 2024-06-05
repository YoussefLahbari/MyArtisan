@extends('admin.layouts.index');
@section('content')
<div class="container_">
    <div class="box_container">
        <div class="box">
            <h3>Users Overview</h3>
            <canvas id="comparisonChart" width="400" height="200"></canvas>
        </div>
        <div class="box">
            <h3>Earnings</h3>
            <canvas id="earningsChart" width="400" height="350px"></canvas>
        </div>
        <div class="box">
        <h3>Visitors</h3>
        <canvas id="visitorsChart" width="400" height="350"></canvas>
    </div>
    </div>
</div>
<script>
    const item1 = 10;
    const item2 = 15;
    const total = item1 + item2;

    const item1Percentage = (item1 / total * 100).toFixed(2);
    const item2Percentage = (item2 / total * 100).toFixed(2);

    const ctx = document.getElementById('comparisonChart').getContext('2d');
    const comparisonPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [`Artisan (${item1Percentage}%)`, `Client(${item2Percentage}%)`],
            datasets: [{
                label: 'Number of Items',
                data: [item1, item2],
                backgroundColor: [
                    '#1B84FF',
                    '#17C653'
                ],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            const dataIndex = tooltipItem.dataIndex;
                            const dataValue = tooltipItem.raw;
                            const percentage = ((dataValue / total) * 100).toFixed(2);
                            return tooltipItem.label + ': ' + dataValue + ' (' + percentage + '%)';
                        }
                    }
                }
            }
        }
    });
    const ctx_ = document.getElementById('earningsChart').getContext('2d');
    const earningsChart = new Chart(ctx_, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Fake Earnings',
                data: [2000, 2500, 2200, 3000, 3200, 2800, 3400, 3600, 4000, 4200, 4500, 4800], // Fake earnings data
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return 'Earnings: $' + tooltipItem.raw;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Earnings Amount ($)'
                    }
                },
                
            }
        }
    });
    const ct = document.getElementById('visitorsChart').getContext('2d');
    const visitorsChart = new Chart(ct, {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            datasets: [{
                label: 'Visitors',
                data: [500, 700, 800, 1200, 1500, 1300, 1600, 1700, 1800, 1900, 2100, 2300],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                fill: true
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return 'Visitors: ' + tooltipItem.raw;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Visitors'
                    }
                },
            }
        }
    });
</script>
@endsection('content')