<?php
// tetntukan zona wilayah sendiri!!
date_default_timezone_set('Asia/Jakarta');

// tentukan bulan sebelum dan sesudah
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // bulan ini
    $ym = date('Y-m');
}

// Check format
$timestamp = strtotime($ym . '-01');  // hari pertama bulan pertama
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// Today (Format:2020-11-11)
$today = date('Y-m-j');

// Title (Format:November, 2020)
$title = date('F, Y', $timestamp);

// Buat link bulan sebelum dan sesudah ini
$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

// Jumlah hari bulan ini
$day_count = date('t', $timestamp);

// 1:Mon 2:Tue 3: Wed ... 7:Sun
$str = date('N', $timestamp);

// Array untuk kalender
$weeks = [];
$week = '';

// tambahkan colom kosong(s)
$week .= str_repeat('<td></td>', $str - 1);

for ($day = 1; $day <= $day_count; $day++, $str++) {

    $date = $ym . '-' . $day;

    if ($today == $date) {
        $week .= '<td class="today">';
    } else {
        $week .= '<td>';
    }
    $week .= $day . '</td>';

    // hari minggu atau hari terakhir dalam bulan
    if ($str % 7 == 0 || $day == $day_count) {

        // hari terakhir dalam bulan
        if ($day == $day_count && $str % 7 != 0) {
            // Tambah colo, kosong(s)
            $week .= str_repeat('<td></td>', 7 - $str % 7);
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        $week = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Calendar</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        .container {
            font-family: 'Montserrat', sans-serif;
            margin: 60px auto;
        }
        .list-inline {
            text-align: center;
            margin-bottom: 30px;
        }
        .title {
            font-weight: bold;
            font-size: 26px;
        }
        th {
            text-align: center;
        }
        td {
            height: 100px;
        }
        th:nth-of-type(6), td:nth-of-type(6) {
            color: blue;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: red;
        }
        .today {
            background-color: ghostwhite;
        }
    </style>
</head>
<body>
    <div class="container">
        <ul class="list-inline">
            <li class="list-inline-item"><a href="?ym=<?= $prev; ?>" class="btn btn-link">&lt; prev</a></li>
            <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
            <li class="list-inline-item"><a href="?ym=<?= $next; ?>" class="btn btn-link">next &gt;</a></li>
        </ul>
        <p class="text-right"><a href="calendar.php">Full</a></p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>M</th>
                    <th>T</th>
                    <th>W</th>
                    <th>T</th>
                    <th>F</th>
                    <th>S</th>
                    <th>S</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($weeks as $week) {
                        echo $week;
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>