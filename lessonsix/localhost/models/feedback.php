<?php
$buttonText = "Добавить";
$action = "add";
$row = [];

function getAllFeedback() {
    $sql = "SELECT * FROM feedback ORDER BY id DESC";
    return getAssocResult($sql);
}


function addFeedBack() {
    var_dump($_POST);
    $name = $_POST['name'];
    $message = $_POST['message'];
    getOneResult("INSERT into feedback (id, name, feedback) VALUES (id, '{$name}', '{$message}')");
    header('Location: /feedback');
    die();

}

function deleteFeedBack() {
    var_dump($_GET);
    $id = (int)$_GET['id'];
    getOneResult("DELETE from feedback WHERE `id` ={$id}");
    header('Location: /feedback');
    die();

}

function editFeedback() {

    $id = (int)$_GET['id'];
    $row = getOneResult("SELECT * FROM feedback WHERE id = {$id}");
    var_dump($row);
    $buttonText = "Править";
    $action = "save";

}

function doFeedbackAction($action) {
    if ($action == "add") {
        addFeedBack();
        //header();
    }
    if ($action == "edit") {
        editFeedBack();
        //header();
    }
    if ($action == "delete") {
        deleteFeedBack();
    }
    if ($action == "save") {
        // saveFeedBack();
        //header();
    }
}
