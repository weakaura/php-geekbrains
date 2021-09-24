<?php

$messages = [
    'ok' => 'Файл загружен',
    'error' => 'Ошибка загрузки',
];
$path = dirname(__DIR__) . "/public/gallery/small/" . $_FILES['myfile']['name'];


if (!empty($_FILES)) {

    //Проверка на тип файла
    $imageinfo = getimagesize($_FILES['myfile']['tmp_name']);
    if ($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg' && $imageinfo['mime'] != 'image/jpg') {
        echo "Можно загружать только jpg-файлы, неверное содержание файла, не изображение.";
        exit;
    }
    //Проверка на размер файла
    if ($_FILES["myfile"]["size"] > 1024 * 5 * 1024) {
        echo("Размер файла не больше 5 мб");
        exit;
    }

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $path)) {
        copy('gallery/small/' . $_FILES['myfile']['name'], 'gallery/big/' .$_FILES['myfile']['name']);
        $message = "ok";
    } else {
        $message = "error";
    }
    header("Location: ?page=gallery&status=" . $message);
    die();

}
$message = $messages[$_GET['status']];
?>
<?= $message ?> <br>
<h1 style="text-align: center">Галерея</h1> <br>
<div class="content">
    <div class="gallery">
        <?php foreach ($files as $file): ?>
            <a href="/gallery/big/<?= $file ?>" target="_blank">
                <img src="gallery/small/<?= $file ?>" alt="img" class="smallPic">
            </a>
        <?php endforeach; ?>
    </div>
</div>
<br>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <input type="submit" value="Загрузить">
</form>


