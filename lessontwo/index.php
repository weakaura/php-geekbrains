<?php
// 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
// Затем написать скрипт, который работает по следующему принципу:
// Если $a и $b положительные, вывести их разность.
// Если $а и $b отрицательные, вывести их произведение.
// Если $а и $b разных знаков, вывести их сумму.
// Ноль можно считать положительным числом.
$a = -4;
$b = -2;
echo "Первое задание: а = {$a}, b = {$b}. На выходе: ";

if ($a >= 0 && $b >= 0) {
    echo ($a - $b);
} else if (($a < 0) && ($b < 0)) {
    echo ($a * $b);
} else {
    echo ($a + $b);
}
echo "<br>";

// 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
// При желании сделайте это задание через рекурсию.
$a = 7;
echo "Второе задание: a = {$a}, на выходе: ";
switch ($a) {
    case 0: echo 0;
    case 1: echo 1;
    case 2: echo 2;
    case 3: echo 3;
    case 4: echo 4;
    case 5: echo 5;
    case 6: echo 6;
    case 7: echo 7;
    case 8: echo 8;
    case 9: echo 9;
    case 10: echo 10;
    case 11: echo 11;
    case 12: echo 12;
    case 13: echo 13;
    case 14: echo 14;
    case 15: echo 15;
    break;
}
echo "<br>";

// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
// Обязательно использовать оператор return. В делении проверьте деление на 0 и верните текст ошибки.
function sum($a, $b) {
    return $a + $b;
}
function minus($a, $b) {
    return $a - $b;
}
function multiply($a, $b) {
    return $a * $b;
}
function divide($a, $b) {
    if ($b === 0) {
        echo "Ошибка! На ноль делить нельзя!";
    } else {
        return $a / $b;
    }
}
echo "<br>";

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
// где $arg1, $arg2 – значения аргументов,
// $operation – строка с названием операции.
// В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3)
// и вернуть полученное значение (использовать switch).
function mathOperation($arg1, $arg2, $operation) {
	switch($operation) {
		case "sum":
		return sum($arg1, $arg2);
		case "minus":
		return minus($arg1, $arg2);
		case "multiply":
		return multiply($arg1, $arg2);
		case "divide":
		return divide($arg1, $arg2);
	}
}
echo "<br>";

// 5. Собрать страницу с меню и контентом, зарендерить как минимум 2 подшаблона через renderTemplate. ВАЖНОЕ
// 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
echo "Шестое задание: ";
function power($val, $pow) {
	if ($val == 0) {
		return 0;
	} else if ($pow == 0) {
		return 1;
	} else if ($pow < 0) {
		return power(1 / $val, -$pow);
	} else {
		return $val * power($val, $pow-1);
	}
}
echo power(5,3);

/*
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
*/