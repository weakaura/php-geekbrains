<?php
define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');


$page = 'index';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params = [];

switch ($page) {
    case 'index':
        $params['title'] = 'Главная';
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

    case 'menu_template':
        $params['menu2'] = getMenu();
}

echo render($page, $params);



function getMenu() {
    ob_start();
    $newMenu = [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        ];
    foreach ($newMenu as $value) {
    echo "<li><a href='/exercises/ex-{$value}.php'>ex-{$value}</a></li>";
}
    return ob_get_clean();
}

function getCatalog()
{
    return [
        'catalog' => [
            [
                'name' => 'Пицца',
                'price' => 24
            ],
            [
                'name' => 'Чай',
                'price' => 1
            ],
            [
                'name' => 'Яблоко',
                'price' => 12
            ],
        ]
    ];

}


function render($page, $params = [])
{
    return renderTemplate(LAYOUTS_DIR . 'main', [
            'title' => $params['title'],
            'menu' => renderTemplate('menu', $params),
            'content' => renderTemplate($page, $params)
        ]
    );
}


//$params = ['menu' => 'код меню', 'catalog' => ['чай'], 'content' => 'Код подшаблона']
function renderTemplate($page, $params = [])
{
    /*    foreach ($params as $key => $value) {
            $$key = $value;
        }*/

    extract($params);

    ob_start();
    include TEMPLATES_DIR . $page . ".php";
    return ob_get_clean();
}

