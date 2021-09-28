<?php

include "../config/config.php";



$page = 'index';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params['layout'] = 'main';

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
        break;
    case 'gallery':
        $params['title'] = 'Галерея';
        $params['files'] = getGallery();
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

