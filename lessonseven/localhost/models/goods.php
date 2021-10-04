<?php
define('GOODS', '/goods_img/');
$db = mysqli_connect("localhost", "root", "", "gb1");
function getGoods() {
    $sql = "SELECT * FROM goods";
    return getAssocResult($sql);
}

function getOneGood($id) {
    return getOneResult("SELECT * FROM goods WHERE id = {$id}");
}

if ($_GET['action'] == 'buy') {
    global $session;
    $id = (int)$_GET['id'];
    mysqli_query($db, "INSERT INTO `basket`(`session_id`, `goods_id`) VALUES ('{$session}','{$id}')");
    header("Location: /goods");
    die();
}



