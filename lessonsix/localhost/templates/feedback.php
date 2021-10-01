<h2>Отзывы</h2>

<form action="/feedback/<?=$action?>" method="post">
    Оставьте отзыв: <br>
    <input type="text" name="name" placeholder="<?=$row['name']?>"><br>
    <input type="text" name="message" placeholder="<?=$row['feedback']?>"><br>
    <input type="submit" value="<?=$buttonText?>">
</form>

<?php foreach ($feedback as $value): ?>
    <div>
        <strong><?=$value['name']?></strong>: <?=$value['feedback']?>
        <a href="/feedback/edit/?id=<?=$value['id']?>">[edit]</a>
        <a href="/feedback/delete/?id=<?=$value['id']?>">[x]</a>
    </div>
<?php endforeach;?>