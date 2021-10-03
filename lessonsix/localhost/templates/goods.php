Товары:
<div style="display: flex; ">
<?php foreach ($goods as $item): ?>
    <a href="/onegood/?id=<?=$item['id']?>" style="color: #000 !important; text-decoration: none">
        <div>
            <h2><?=$item['name']?></h2>
            <p>Цена:<?=$item['price']?></p>
            <img src=<?=GOODS . $item['img']?> alt="pic" width="150">
        </div>
    </a>
<?php endforeach;?>
</div>