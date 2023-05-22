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
            type: 'pie',
            data: {
                labels: <?php echo json_encode($countries); ?>,
                datasets: [{
                    label: 'Grafik Total Cases',
                    data: <?php echo json_encode($totalCases); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>
</html>
