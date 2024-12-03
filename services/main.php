<?php
date_default_timezone_set('Europe/Warsaw');
$currentTime = date("H:i");
$subject = [
    "t" => "TAI",
    "z" => "ZAI",
    "tida" => "TiDA",
    "ad" => "AD",
    "am" => "AMiD",
    "w" => "WI",
    "p" => "PG",
    "ai" => "AI",
    "zw" => "ZAW",
    "pl" => "PLSKI",
    "c" => "CMS",
    "wl" => "wolne",
    "k" => "konsultacje"
];
$groups = [
    "OneTd" => "1td",
    "TwoTd" => "2td",
    "ThreeTd" => "3td",
    "OneTf" => "1tf",
    "TwoTf" => "2tf",
    "ThreeTf" => "3tf",
    "OneTt" => "1pt",
    "TwoPt" => "2pt",
    "ThreePt" => "3pt",
    "FourPt" => "4pt",
];
$times = [
    1 => ["start" => "08:00", "end" => "09:30"],
    2 => ["start" => "10:00", "end" => "11:30"],
    3 => ["start" => "12:00", "end" => "13:30"],
    4 => ["start" => "14:00", "end" => "15:30"],
    5 => ["start" => "16:00", "end" => "17:30"],
    6 => ["start" => "18:00", "end" => "18:30"],
    7 => ["start" => "19:00", "end" => "19:30"],
];
function mark_current_lesson($currentTime, $times, $i)
{
    echo $currentTime >= $times[$i]['start'] && $currentTime <= $times[$i]['end'] ? '<th style="background-color: #aac5cf">' : '<th>';
}
function tableData($currentTime, $times, $subject, $groups)
{
    for($i = 1; $i < 8; $i++){
        mark_current_lesson($currentTime, $times, $i);
        echo $subject[array_rand($subject)], ' ', $groups[array_rand($groups)];
        echo '</th>';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="/templates/libs/NivoSlider/nivo-slider.css">
    <script src="/templates/libs/NivoSlider/jquery.nivo.slider.js"></script>
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'Custom';
            src: url('/templates/fonts/pc-senior/pcsenior.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        .login-form{
            display: flex;
            justify-content: center;
            color: grey;
        }
        .main-text{
            font-size: 500%;
            color: #869ca1;
            text-align: center;
        }
        body{
            font-family: 'Custom';
            background-color: black;
            color: white;
        }
        .hidden{
            display: none;
        }
        table{
            margin: auto;
        }
        .center-button{
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
<header>
    <div class="navbar">
        <nav>
            <ul>
                <a href="">Main</a>
                <a href="">Toggle</a>
                <a href="">Span</a>
                <a href="">Quit</a>
            </ul>
        </nav>
    </div>
</header>
<div class="container">
    <table border="1" cellpadding="5" id="table1">
        <thead>
        <tr>
            <th colspan="9" class="pz">Plan zajec</th>
        </tr>
        <tr class="zg">
            <th>Lekcja</th>
            <?php
            for($i = 1; $i < 8; $i++){
                mark_current_lesson($currentTime, $times, $i);
                echo $i;
                echo '</th>';
            }
            ?>
        </tr>
        <tr>
            <th>Godziny</th>
            <?php
            for($i = 1; $i < 8; $i++){
                mark_current_lesson($currentTime, $times, $i);
                echo $times[$i]['start'] . ' - ' . $times[$i]['end'];
                echo '</th>';
            }
            ?>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th>Pn</th>
            <?php
            tableData($currentTime, $times, $subject, $groups)
            ?>
        </tr>
        <tr>
            <th>Wt</th>
            <?php
            tableData($currentTime, $times, $subject, $groups)
            ?>
        </tr>
        <tr>
            <th>Śr</th>
            <?php
            tableData($currentTime, $times, $subject, $groups)
            ?>
        </tr>
        <tr>
            <th>Ćw</th>
            <?php
            tableData($currentTime, $times, $subject, $groups)
            ?>
        </tr>
        <tr>
            <th>Pt</th>
            <?php
            tableData($currentTime, $times, $subject, $groups)
            ?>
        </tr>

        </tbody>
    </table>
</div>
<div class="container2">
    <table border="1" cellpadding="5" id="table2" class="hidden">
        <thead>
        <tr>
            <th colspan="9" class="pz">Plan zajec</th>
        </tr>
        <tr>
            <th>Godziny</th>
            <th>Lekcja</th>
            <th>Pn</th>
            <th>Wt</th>
            <th>Śr</th>
            <th>Ćw</th>
            <th>Pt</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 1; $i < 8; $i++) {
            echo '<tr>';
            for ($j = $i; $j <= $i; $j++) {
                mark_current_lesson($currentTime, $times, $i);
                echo $times[$i]['start'] . "-" . $times[$i]['end'];
                echo '</td>';
            }
            for ($j = $i; $j <= $i; $j++) {
                mark_current_lesson($currentTime, $times, $i);
                echo $i;
                echo '</td>';
            }
            for ($k = 0; $k < 5; $k++) {
                mark_current_lesson($currentTime, $times, $i);
                echo $subject[array_rand($subject)], ' ', $groups[array_rand($groups)];
                echo '</td>';
            }
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>
<button onclick="toggleTables()" class="center-button">Переключить таблицы</button>
<script>
    // Функция для переключения видимости таблиц
    function toggleTables() {
        const table1 = document.getElementById("table1");
        const table2 = document.getElementById("table2");

        // Переключаем классы для видимости таблиц
        table1.classList.toggle("hidden");
        table2.classList.toggle("hidden");
    }
</script>
</body>
</html>
