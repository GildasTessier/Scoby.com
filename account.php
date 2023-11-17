<?php
session_start();
require_once './_includes/functions.php';
require_once './_includes/url.php';
require_once './_includes/_dbCo.php';
generateToken()
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scoby.com - Mon compte</title>
  <link rel="stylesheet" href="./asset/css/reset.css">
  <link rel="stylesheet" href="./asset/css/style.css">
</head>

<body>
  <header>
    <!------------------------------>
    <!------------ NAV ------------->
    <?php include './_includes/_nav.php' ?>
  </header>
  <main>

    <h1 class="title-section text-green-dark">Mon compte</h1>

  </main>
  <!--------------------------------->
  <!------------ FOOTER ------------->
  <?php include './_includes/_footer.php' ?>

  <template id="product-order-template" class="product-order-template">
    <li class="line-product-order bg-green-dark">
      <p class="name-product-order js-name-product-order text-green-light">name</p>
      <button class="btn-qty btn-decrease js-btn-decrease bg-green-light text-green-dark bx-shadow">-</button>
      <p class="nb-product js-nb-product-order text-green-light">0</p>
      <button class="btn-qty btn-increase js-btn-increase bg-green-light text-green-dark bx-shadow">+</button>
      <p class="total-price-product js-total-price-product-order text-green-light">0,00€</p>
    </li>
  </template>
  <script src="./asset/js/script-general.js"></script>
</body>

</html>