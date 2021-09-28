<h2>Галерея</h2>
<?php foreach ($gallery as $item):?>

    <a href="/photo/?id=<?=$item['id']?>"><img src="<?=IMG_SMALL . $item['name']?>" width='150'/>

    </a>
    Просмотров: <?=$item['likes'];?>

<?php endforeach;?>
