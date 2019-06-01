<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <link href="styles/site.css" rel="stylesheet">
  <script src="scripts/jquery.js"></script>
  <script src="scripts/site.js"></script>
  <title>Онлайн магазин</title>
</head>

<body>
  <header>
    <div id="headerInside">
      <div id="logo"></div>
      <div id="companyName">Brand</div>
      <div id="navWrap">
        <a href="/">
          Главная
        </a>
        <a href="index.php?page=catalog">
          Каталог
        </a>
      </div>
    </div>
  </header>

  <div id="content">
    <?php
      $goods = [
        [
          'id' => 1,
          'title' => 'iPhone',
          'desc' => 'Уёбищный',
          'image' => '/images/goods/iphone.jpg',
          'price' => '$1000',
        ],
        [
          'id' => 2,
          'title' => 'HTC',
          'desc' => 'Забыл, что это',
          'image' => '/images/goods/htc.jpg',
          'price' => '$500',
        ],
        [
          'id' => 3,
          'title' => 'Samsung',
          'desc' => 'Норм',
          'image' => '/images/goods/samsung.jpg',
          'price' => '$1200',
        ],
      ];

      $goods[] = [
        'id' => 4,
        'title' => 'Explay',
        'desc' => 'Когда совсем нет денег',
        'image' => '/images/goods/explay.jpg',
        'price' => '$100',
        'discount' => '20%',
      ];

      $goods[2]['discount'] = '5%';

      // foreach ($goods as $index => $product) {
      //   echo "Product index: $index <br>";

      //   foreach ($product as $key => $param) {
      //     echo "$key: $param <br>";
      //   }

      //   echo "<hr>";
      // }

      $page = (isset($_GET['page'])) ? $_GET['page'] : '';

      if (!$page) {
        require('templates/main.php');
      } elseif ($page == 'catalog') {
        require('templates/catalog.php');
      } elseif ($page == 'product') {
        $id = $_GET['id'];
        $product = [];

        foreach ($goods as $item) {
          if ($item['id'] == $id) {
            $product = $item;
            break;
          }
        }
        
        require('templates/product.php');
      }
    ?>
  </div>

  <footer>
    <div id="footerInside">

      <div id="contacts">
        <div class="contactWrap">
          <img src="images/envelope.svg" class="contactIcon">
          info@brandshop.ru
        </div>
        <div class="contactWrap">
          <img src="images/phone-call.svg" class="contactIcon">
          8 800 555 00 00
        </div>
        <div class="contactWrap">
          <img src="images/placeholder.svg" class="contactIcon">
          Москва, пр-т Ленина, д. 1 офис 304
        </div>
      </div>

      <div id="footerNav">
        <a href="/">Главная</a>
        <a href="index.php?page=catalog">Магазин</a>
      </div>

      <div id="social">
        <img class="socialItem" src="images/vk-social-logotype.svg">
        <img class="socialItem" src="images/google-plus-social-logotype.svg">
        <img class="socialItem" src="images/facebook-logo.svg">
      </div>

      <div id="copyrights">&copy; Brandshop</div>
    </div>
  </footer>

</body>

</html>