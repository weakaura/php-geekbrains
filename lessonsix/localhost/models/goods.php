<?php
define('GOODS', '/goods_img/');

function getGoods() {
    $sql = "SELECT * FROM catalog";
    return getAssocResult($sql);
}

function getOneGood($id) {
    return getOneResult("SELECT * FROM catalog WHERE id = {$id}");
}

