<?php
$x = 0;
do {
    if ($x == 0) {
        echo "{$x} - ноль <br>";
    } elseif ($x % 2 == 0) {
        echo "{$x} - четное число <br>";
    } else {
        echo "{$x} - нечетное число <br>";
    }
    $x++;
} while ($x <= 10);
echo "<br>";
?>
Вернуться назад:
<a href="/?page=menu_template">Задания</a><br>
