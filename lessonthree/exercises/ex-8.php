<?php
$arr = [
    "Московская область" => ["Москва", "Зеленоград", "Клин",],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт",],
    "Рязанская область" => ["Рязань", "Искра", "Рыбное", "Поляны",],
];
$str = "";
foreach ($arr as $key => $value) {
    $str .= $key . ": <br>";
    foreach ($value as $keys => $item) {
        if (mb_substr($item, 0, 1) == "К") {
            $last = array_key_last($value);
            if ($keys == $last) {
                $str .= $item . ". <br>";
            } else {
                $str .= $item . ", ";
            }
        }
    }
}
echo $str;
echo "<br>";
?>
Вернуться назад:
<a href="/?page=menu_template">Задания</a><br>
