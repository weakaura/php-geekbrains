<?php
$alphabet = [
    'а' => 'a',   'б' => 'b',   'в' => 'v',
    'г' => 'g',   'д' => 'd',   'е' => 'e',
    'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
    'и' => 'i',   'й' => 'y',   'к' => 'k',
    'л' => 'l',   'м' => 'm',   'н' => 'n',
    'о' => 'o',   'п' => 'p',   'р' => 'r',
    'с' => 's',   'т' => 't',   'у' => 'u',
    'ф' => 'f',   'х' => 'h',   'ц' => 'c',
    'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
    'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
    'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
];

$word = "ПрИвеТ, МиР!щЩ";

function translate($word, $alphabet) {
    $result = '';
    for ($i = 0; $i < strlen($word); $i++) {
        $letter = mb_substr($word, $i, 1);
        $smallLetter = mb_strtolower($letter);
        if (isset($alphabet[$smallLetter])) {
            if ($smallLetter == $letter) {
                $result .= $alphabet[$letter];
            } else {
                $result .= ucfirst($alphabet[$smallLetter]);
            }
        } else {
            $result .= $letter;
        }
    }
    return $result;
}

function replace($str) {
    $newstr = str_replace(" ", "_", $str);
    return $newstr;
}
echo replace("Hello World !");
echo "<br>";

$address = "МойЙ бЛог 1994";
function trURL($address, $alphabet) {
    $neww = replace($address);
    return translate($neww, $alphabet);
}
echo trURL($address, $alphabet);
echo "<br>";
?>
Вернуться назад:
<a href="/?page=menu_template">Задания</a><br>
