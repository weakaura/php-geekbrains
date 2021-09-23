<?php
define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');

$menu = [
    [
        'url' => '/',
        'name' => 'Главная',
    ],
    [
        'url' => '/?page=catalogspa',
        'name' => 'Каталог spa',
    ],
    [
        'url' => '/?page=catalogssr',
        'name' => 'Каталог ssr',
    ],
    [
        'url' => '/?page=about',
        'name' => 'О нас',
    ],
    [
        'url' => '',
        'name' => 'Задания',
        'submenu' => [
            [
                'url' => '/?page=exercises/ex-1',
                'name' => 'ex-1',
            ],
            [
                'url' => '/?page=exercises/ex-2',
                'name' => 'ex-2',
            ],
            [
                'url' => '/?page=exercises/ex-3',
                'name' => 'ex-3',
            ],
            [
                'url' => '/?page=exercises/ex-4',
                'name' => 'ex-4',
            ],
            [
                'url' => '/?page=exercises/ex-5',
                'name' => 'ex-5',
            ],
            [
                'url' => '/?page=exercises/ex-6',
                'name' => 'ex-6',
            ],
            [
                'url' => '/?page=exercises/ex-7',
                'name' => 'ex-7',
            ],
            [
                'url' => '/?page=exercises/ex-8',
                'name' => 'ex-8',
            ],
            [
                'url' => '/?page=exercises/ex-9',
                'name' => 'ex-9',
            ],
        ]
    ],
];


function renderMenu($menu)
{
    $out = "<ul>";
    foreach ($menu as $value) {
        $out .= "<li><a href='{$value['url']}'>{$value['name']}</a>";
        if (isset($value['submenu'])) {
            $out .= renderMenu($value['submenu']);
        }
        $out .= "</li>";
    }
    $out .= "</ul>";
    return $out;
}

$page = 'index';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

$params = [
    'menu' => $menu
];

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

}

echo render($page, $params);


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
            'menu' => renderMenu($params['menu']),
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

