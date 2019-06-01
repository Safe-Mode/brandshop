<h1>
  Каталог товаров
</h1>

<div>
  <?php foreach ($goods as $product) : ?>
    <div class="shopUnit">
      <img src="<?=$product['image']?>" />

      <div class="shopUnitName">
        <?=$product['title']?>
      </div>
      <div class="shopUnitShortDesc">
        <?=$product['desc']?>
      </div>
      <div class="shopUnitPrice">
        Цена: <?=$product['price']?>
      </div>
      <a href="index.php?page=product&id=<?=$product['id']?>" class="shopUnitMore">
        Подробнее
      </a>
    </div>
  <?php endforeach; ?>
</div>