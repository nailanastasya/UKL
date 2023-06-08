<?php
// Data statistik yang akan ditampilkan
$data = [10, 15, 20, 25, 30];

// Menghitung jumlah data
$count = count($data);

// Menghitung total data
$total = array_sum($data);

// Menghitung rata-rata data
$average = $total / $count;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Statistik Data</title>
    <style>
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .statistic {
            margin-bottom: 10px;
        }

        .statistic label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Statistik Data</h1>

        <div class="statistic">
            <label>Jumlah Data:</label>
            <span><?php echo $count; ?></span>
        </div>

        <div class="statistic">
            <label>Total:</label>
            <span><?php echo $total; ?></span>
        </div>

        <div class="statistic">
            <label>Rata-rata:</label>
            <span><?php echo $average; ?></span>
        </div>
    </div>
</body>
</html>
