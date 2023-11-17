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
  <title>Scoby.com - Boutique</title>
  <link rel="stylesheet" href="./asset/css/reset.css">
  <link rel="stylesheet" href="./asset/css/style.css">
  <link rel="stylesheet" href="./asset/css/style-shop.css">
</head>

<body>
  <header>
      <!------------------------------>
      <!------------ NAV ------------->
    <?php include './_includes/_nav.php' ?>
  </header>
  <main>

    <h1 class="title-section text-green-dark">Nos Produits</h1>

    <section class="section-boutique">


      <h2 class="title-section-boutique text-green-light bg-green-dark bx-shadow">Nouveautés</h2>
      <ul class="gp-products " id="gp-products-new">
      </ul>

      <h2 class="title-section-boutique text-green-light bg-green-dark bx-shadow">Clasique</h2>
      <ul class="gp-products " id="gp-products-classic">
      </ul>

      <h2 class="title-section-boutique text-green-light bg-green-dark bx-shadow">Florales</h2>
      <ul class="gp-products " id="gp-products-floral">
      </ul>

      <h2 class="title-section-boutique text-green-light bg-green-dark bx-shadow">Fruités</h2>
      <ul class="gp-products " id="gp-products-fruit">
      </ul>




    </section>




  </main>



  <!--------------------------------->
  <!------------ FOOTER ------------->
  <?php include './_includes/_footer.php'?>

  <template id="productTemplate">
    <li class="card-product js-product-card bx-shadow">

      <div class="bloc-img-product bg-whithe">
        <img class="img-product js-img-product" src="#" alt="image produit">
      </div>

      <div class="info-product bg-green-light">
        <h3 class="name-product js-name-product text-black">name product</h3>
        <p class="descrip-product js-descrip-product text-withe">infos product</p>

        <div class="btns-product">

          <div class="btns-opt-product">

            <button class="opt-product js-opt-product-1 js-opt-product active btn-hover">
              <p class="size-product js-size-product-1 js-opt-product active">size option 1</p>
              <p class="price-product js-price-product-1 js-opt-product active">price option 1</p>
            </button>

            <button class="opt-product js-opt-product-2 js-opt-product btn-hover">
              <p class="size-product js-size-product-2 js-opt-product ">size option 2</p>
              <p class="price-product js-price-product-2 js-opt-product ">price option 2</p>
            </button>

          </div>
          <button class="add-product bg-green-dark text-withe bx-shadow btn-hover"><img class="img-btn-add js-add-product" src="./asset/img/Icons/plus.png"></button>
        </div>
      </div>
      <p class="tx-animate-add-product js-tx-animate-add-product font-bold">Ajouté au panier 👍</p>
    </li>
  </template>

  <template id="product-order-template" class="product-order-template">
    <li class="line-product-order bg-green-dark">
      <p class="name-product-order js-name-product-order text-green-light">name</p>
      <button class="btn-qty btn-decrease js-btn-decrease bg-green-light text-green-dark bx-shadow">-</button>
      <p class="nb-product js-nb-product-order text-green-light">0</p>
      <button class="btn-qty btn-increase js-btn-increase bg-green-light text-green-dark bx-shadow">+</button>
      <p class="total-price-product js-total-price-product-order text-green-light">0,00€</p>
    </li>
  </template>









  <template id="productTemplate1">
    <li class="card-product js-product-card bx-shadow">

      <div class="bloc-img-product bg-whithe">
        <img class="img-product js-img-product" src="#" alt="image produit">
      </div>

      <div class="info-product bg-green-light">
        <h3 class="name-product js-name-product text-black">name product</h3>
        <p class="descrip-product js-descrip-product text-withe">infos product</p>

        <div class="btns-product">

          <div class="btns-opt-product">

            <!-- <button class="opt-product js-opt-product-1 js-opt-product active btn-hover">
              <p class="size-product js-size-product-1 js-opt-product active">size option 1</p>
              <p class="price-product js-price-product-1 js-opt-product active">price option 1</p>
            </button>

            <button class="opt-product js-opt-product-2 js-opt-product btn-hover">
              <p class="size-product js-size-product-2 js-opt-product ">size option 2</p>
              <p class="price-product js-price-product-2 js-opt-product ">price option 2</p>
            </button> -->

          </div>
          <button class="add-product bg-green-dark text-withe bx-shadow btn-hover"><img class="img-btn-add js-add-product" src="./asset/img/Icons/plus.png"></button>
        </div>
      </div>
      <p class="tx-animate-add-product js-tx-animate-add-product font-bold">Ajouté au panier 👍</p>
    </li>
  </template>










  <script src="./asset/js/script-general.js"></script>
  <script src="./asset/js/script-shop.js"></script>
</body>

</html>