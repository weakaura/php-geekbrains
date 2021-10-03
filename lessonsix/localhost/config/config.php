<?php
define('TEMPLATES_DIR', '../templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'test');
define('PASS', '12345');
define('DB', 'gb1');

//TODO попробуйте сделать эти пути абсолютными
include "../engine/render.php";
include "../engine/db.php";
include "../engine/controller.php";
include "../models/feedback.php";
include "../models/news.php";
include "../models/catalog.php";
include "../models/log.php";
include "../models/files.php";
include "../models/goods.php";