<?php

function prepareVariables($page, $action = "")
{

    $params['layout'] = 'main';

    switch ($page) {
        case 'index':
            $params['title'] = 'Главная';
            break;

        case 'news':
            $params['news'] = getNews();
            break;

        case 'onenews':
            $id = (int)$_GET['id'];
            $params['news'] = getOneNews($id);
            break;


        case 'feedback':
            $params['feedback'] = getAllFeedback();
            doFeedbackAction($action);
            $params['buttonText'] = "Добавить";
            $params['action'] = "add";
            $params['row'] = [];


            break;

        case 'bux':
            $params['layout'] = 'bux';
            /*        if (!empty($_FILES)) {
                        $message = upload();
                        header($message);
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

        case 'goods':
            $params['goods'] = getGoods();
            break;

        case 'onegood':
            $id = (int)$_GET['id'];
            $params['goods'] = getOneGood($id);
            break;

        case 'basket':
            $params['basket'] = getBasket();
            $params['title'] = 'Корзина';
            break;
    }
    return $params;
}