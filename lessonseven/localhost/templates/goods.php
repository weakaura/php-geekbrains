Товары:
<div style="display: flex; ">
<?php foreach ($goods as $item): ?>
<div>
    <a href="/onegood/?id=<?=$item['id']?>" style="color: #000 !important; text-decoration: none">
        <h2><?=$item['name']?></h2>
        <p>Цена:<?=$item['price']?></p>
        <img src=<?=GOODS . $item['img']?> alt="pic" width="150">
    </a><br>
    <a href="/?action=buy&id=<?= $item['id'] ?>">
        <button>Купить</button>
    </a>
</div>

<?php endforeach;?>
</div>