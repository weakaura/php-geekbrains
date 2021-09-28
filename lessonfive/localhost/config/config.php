<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');
define("IMG_SMALL","/pics/small/");
define("IMG_BIG","/pics/big/");

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'test');
define('PASS', '12345');
define('DB', 'gb1');

//TODO попробуйте сделать эти пути абсолютными
include "../engine/functions.php";
include "../engine/db.php";
include "../engine/news.php";
include "../engine/catalog.php";
include "../engine/log.php";
include "../engine/files.php";
include "../engine/setup.php";