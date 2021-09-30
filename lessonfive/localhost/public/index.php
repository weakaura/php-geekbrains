<?php

include "../config/config.php";

$url_array = explode('/', $_SERVER['REQUEST_URI']);



if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}

$params['layout'] = 'main';

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
        break;

    case 'gallery':
        $params['title'] = 'Галерея';
        $params['gallery'] = getGallery();
        break;

    case 'photo':
        $params['title'] = 'Фото';
        $id = (int)$_GET['id'];
        $params['gallery'] = getOnePhoto($id);
        break;

    case 'news':
        $params['news'] = getNews();
        break;

    case 'onenews':
        $id = (int)$_GET['id'];
        $params['news'] = getOneNews($id);
        break;

    case 'bux':
        $params['layout'] = 'bux';
/*        if (!empty($_FILES)) {
            upload();
            header();
        }*/

        $params['message'] = 'Файл загружен';
        $params['title'] = 'Бухи';
        $params['files'] = getFiles();
        break;

    case 'catalogssr':
        $params['title'] = 'Каталог';

        $params['catalog'] = getCatalog()['catalog'];
        break;

    case 'catalogspa':
        $params['title'] = 'Каталог spa';
        break;

    case 'about':
        $params['title'] = 'about';
        $params['phone'] = 444333;
        break;

    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();
}
//_log($params, 'params');
echo render($page, $params);

