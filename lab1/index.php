<!DOCTYPE html>
<html lang="uk">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Лабораторна робота №1</title>
</head>
<body>

<?php
echo "Завдання №2\n";
?>
<?php
$spaces_4 = str_repeat("&nbsp;", 4);
$spaces_11 = str_repeat("&nbsp;", 11);
$spaces_17 = str_repeat("&nbsp;", 17);
$spaces_22 = str_repeat("&nbsp;", 22);
?>
<p>Полину в мріях в купель океану,<br>
Відчую <b>шовковистість</b> глибини,<br>
&nbsp;Чарівні мушлі з дна собі дістану,<br>
<?php echo $spaces_4; ?>Щоб <i><b>взимку</b></i><br> 
<?php echo $spaces_11; ?><u>тішили</u><br>
<?php echo $spaces_17; ?>мене <br>
<?php echo $spaces_22; ?>вони…</p>

<?php
echo "Завдання №3\n";
?>
<?php
$amount_in_uah = 3467;

$exchange_rate = 38.09;

$amount_in_usd = $amount_in_uah / $exchange_rate;

echo "<br><br> $amount_in_uah грн. можна обміняти на " . round($amount_in_usd, 2) . " доларів";
?>

<?php
echo "<br><br>Завдання №4\n";
?>
<?php
$month_number = 3;

if ($month_number >= 3 && $month_number <= 5) {
    $season = "весна";
} elseif ($month_number >= 6 && $month_number <= 8) {
    $season = "літо";
} elseif ($month_number >= 9 && $month_number <= 11) {
    $season = "осінь";
} else {
    $season = "зима";
}

echo "<br><br>Місяць номер $month_number належить до пори року: $season";
?>

<?php
echo "<br><br>Завдання №5\n";
?>
<?php

$character = 'с';

switch (mb_strtolower($character, 'UTF-8')) {
    case 'а':
    case 'е':
    case 'є':
    case 'и':
    case 'і':
    case 'ї':
    case 'о':
    case 'у':
    case 'ю':
    case 'я':
        $result = "голосною";
        break;
    default:
        $result = "приголосною";
}

echo "<br><br>Символ \"$character\" є $result літерою";
?>

<?php
echo "<br><br>Завдання №6\n";
?>
<?php

$random_number = mt_rand(100, 999);


$digit_sum = array_sum(str_split($random_number));


$reversed_number = strrev($random_number);


$sorted_digits = str_split($random_number);
rsort($sorted_digits);
$max_possible_number = implode($sorted_digits);


echo "<br><br>Випадкове тризначне число: $random_number <br>";
echo "<br>1. Сума його цифр: $digit_sum <br>";
echo "<br>2. Число, отримане виписуванням в зворотному порядку цифр: $reversed_number <br>";
echo "<br>3. Найбільше число, що можна утворити: $max_possible_number";
?>

<?php
echo "<br><br>Завдання №7.1\n";
?>
<?php
function printColorTable($rows, $columns) {
    echo "<table border='1'>";
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columns; $j++) {
            $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
            echo "<td style='background-color: $color; width: 30px; height: 30px;'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


printColorTable(10, 10);
?>

<?php
echo "<br><br>Завдання №7.2\n";
?>
<?php
function printRandomSquares($n) {
    echo "<div style='background-color: black; position: relative; width: 400px; height: 400px;'>";
    for ($i = 0; $i < $n; $i++) {
        $size = mt_rand(20, 100);
        $left = mt_rand(0, 300);
        $top = mt_rand(0, 300);
        echo "<div style='position: absolute; left: {$left}px; top: {$top}px; width: {$size}px; height: {$size}px; background-color: red;'></div>";
    }
    echo "</div>";
}


printRandomSquares(5);
?>


</body>
</html>
