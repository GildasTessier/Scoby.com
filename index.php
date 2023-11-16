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
  <title>Scoby.com - Accueil</title>
  <link rel="stylesheet" href="./asset/css/reset.css">
  <link rel="stylesheet" href="./asset/css/style.css">
  <link rel="stylesheet" href="./asset/css/style-home-page.css">
</head>

<body>
  <header>
      <!------------------------------>
      <!------------ NAV ------------->
    <?php include './_includes/_nav.php' ?>
  </header>
  <main>
    <h1 class="title-section text-green-dark">Bienvenue</h1>
    <section class="section-home-page">
      <article class="bloc-home-page bloc-1">
        <img class="img-bloc-home-page img-mobile" src="./asset/img/img-home-page/img-mobile/img-Touslesgouts.jpeg">
        <img class="img-bloc-home-page img-tablet" src="./asset/img/img-home-page/img-tablet/img-Touslesgouts.jpeg">
        <img class="img-bloc-home-page img-desktop" src="./asset/img/img-home-page/img-desktop/img-Touslesgouts.jpeg">
        <div class="goup-text-home-page bg-green-dark text-green-light btn-hover">
          <h2 class="text-gray">Du kombucha pour tous les goûts</h2>
          <p class="text-for-desktop">Venez découvrir nos différentes saveurs, inspirées par les richesses de notre belle Normandie, des notes délicates de pommes cueillies à maturité aux arômes subtils de fruits </p>
          <a class="text-gray cta" href="./shop.html">Venez decouvrir notre gamme</a>
        </div>
      </article>
      <article class="bloc-home-page bloc-2">
        <img class="img-bloc-home-page img-mobile" src="./asset/img/img-home-page/img-mobile/img-new.jpeg">
        <img class="img-bloc-home-page img-tablet" src="./asset/img/img-home-page/img-tablet/img-new.jpeg">
        <img class="img-bloc-home-page img-desktop" src="./asset/img/img-home-page/img-desktop/img-new.jpeg">
        <div class="goup-text-home-page bg-green-dark text-green-light btn-hover">
          <h2 class="text-gray">En ce moment</h2>
          <p class="text-for-desktop"> Découvrez notre nouveau kombucha à la pomme. Les pommes bio, cultivées avec amour, apportent une douceur naturelle à cette boisson pétillante, tandis que les cultures probiotiques contribuent à soutenir votre bien-être digestif.</p>
          <a class="text-gray cta" href="./shop.html">En savoir plus</a>
        </div>
      </article>
      <article class="bloc-home-page bloc-3">
        <img class="img-bloc-home-page img-mobile" src="./asset/img/img-home-page/img-mobile/img-bio.jpg">
        <img class="img-bloc-home-page img-tablet" src="./asset/img/img-home-page/img-tablet/img-bio.jpg">
        <img class="img-bloc-home-page img-desktop" src="./asset/img/img-home-page/img-desktop/img-bio.jpg">
        <div class="goup-text-home-page bg-green-dark text-green-light btn-hover">
          <h2 class="text-gray">Du bio, du local</h2>
          <p class="text-for-desktop">Chez Scoby.com, nous croyons en l'harmonie entre tradition et innovation. C'est pourquoi nous fabriquons notre kombucha de manière artisanale, en utilisant des produits biologiques et locaux de la région normande.</p>
          <a class="text-gray cta" href="./manufacturing.html">En savoir plus</a>
        </div>
      </article>
      <article class="bloc-home-page bloc-4">
        <img class="img-bloc-home-page img-mobile" src="./asset/img/img-home-page/img-mobile/img-apropos.jpg">
        <img class="img-bloc-home-page img-tablet" src="./asset/img/img-home-page/img-tablet/img-apropos.jpg">
        <img class="img-bloc-home-page img-desktop" src="./asset/img/img-home-page/img-desktop/img-apropos.jpg">
        <div class="goup-text-home-page bg-green-dark text-green-light btn-hover">
          <h2 class="text-gray">A propos de nous</h2>
          <p class="text-for-desktop">Notre passion pour le kombucha et notre amour pour cette région pittoresque nous ont poussé à créer Scoby.com. Nous avons établi notre brasserie dans ce cadre enchanteur afin de puiser dans la beauté naturelle qui nous entoure.</p>
          <a class="text-gray cta" href="./about.html">Découvrir notre histoire !</a>
        </div>
      </article>
    </section>
  </main>

  <!--------------------------------->
  <!------------ FOOTER ------------->
  <?php include './_includes/_footer.php'?>

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