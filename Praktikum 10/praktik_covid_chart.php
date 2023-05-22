<?php
include('koneksi.php');

$countries = [];
$totalCases = [];

$query = mysqli_query($koneksi, "SELECT country, total_cases FROM tb_covidData");
while ($row = mysqli_fetch_array($query)) {
    $countries[] = $row['country'];
    $totalCases[] = $row['total_cases'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Membuat Grafik Menggunakan Chart JS</title>
    <script type="text/javascript" src="Chart.js"></script>
</head>
<body>
    <div style="width: 800px;height: 800px">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($countries); ?>,
                datasets: [{
                    label: 'Grafik Total Cases',
                    data: <?php echo json_encode($totalCases); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
