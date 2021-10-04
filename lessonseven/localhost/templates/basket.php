<?php global $summ;?>
<h2>Корзина</h2>
<?php foreach ($basket as $value): ?>
    <div>
        <?=$value['name']?><br>
        price: <?=$value['price']?><br>
        <img src="<?=GOODS . $value['img']?>" alt="img" width="150px">
        <a href="/?action=delete&id=<?=$value['basket_id'] ?>">Удалить</a>
    </div><hr>
<p>Сумма: <?=$summ?></p>

<?php endforeach;?>


