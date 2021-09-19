<?php

$about = renderTemplate('about', 777333);
$menu = renderTemplate('menu', "мы хорошие");


echo renderTemplate('layout', $menu, $about);

function renderTemplate($page, $content = '', $about = '') {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}