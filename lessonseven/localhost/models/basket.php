<?php
$db = mysqli_connect("localhost", "root", "", "gb1");
$session = session_id();

function getBasket() {
    global $session;
    $sql = "SELECT basket.id as basket_id, goods.id as goods_id, goods.name as name, goods.price as price, goods.img as img FROM basket, goods WHERE basket.goods_id=goods.id AND session_id='{$session}'";
    return getAssocResult($sql);
}
//SELECT * FROM basket, goods WHERE basket.goods_id = goods.id AND session_id = '{$session}'

$result = mysqli_query($db, "SELECT count(id) as count FROM `basket` WHERE `session_id` = '{$session}'");
$count = mysqli_fetch_assoc($result)['count'];

$result2 = mysqli_query($db, "SELECT SUM(goods.price) as summ FROM basket, goods WHERE basket.goods_id=goods.id AND session_id = '{$session}'");
$summ = mysqli_fetch_assoc($result2)['summ'];


if ($_GET['action'] == 'delete') {
    global $session;
    $id = (int)$_GET['id'];
    getOneResult("DELETE from basket WHERE `id` ={$id}");
    header("Location: /basket");
    die();
}

