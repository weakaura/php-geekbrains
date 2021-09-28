<div>
    <img src="<?=IMG_BIG . $gallery['name']?>" alt="picture">
    <?php getOneResult("UPDATE `gallery` SET `likes` = `likes` + 1 WHERE `id` = {$gallery['id']}") ?>
</div>
