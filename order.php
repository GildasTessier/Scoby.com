<?php
session_start();
require_once './_includes/functions.php';
require_once './_includes/url.php';
require_once './_includes/_dbCo.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scoby.com - Pannier</title>
    <link rel="stylesheet" href="./asset/css/reset.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/style-order.css">
</head>
<body>
    
  <header>
          <!------------------------------>
      <!------------ NAV ------------->
      <?php include './_includes/_nav.php' ?>

  </header>
    <main>

      <h1 class="title-section text-green-dark">Votre Commande</h1>
      <section class="order-in-page-order">
        <ul id="tab-order" class="tab-order-in-order bg-green-light">
          <li class="title-order">
            <p class="title-order-name text-green-dark font-bold">Article</p>
            <p class="title-order-qty text-green-dark font-bold">Nb</p>
            <p class="title-order-total text-green-dark font-bold">Total</p>
          </li>
            <div class="contained-order"> 
            </div>

            
            <li class="total-order total-frais">
              <p class="total-order-tx-total text-green-dark font-bold">Frais de livraison :</p>
              <p class="total-order-price js-total-order-delivery text-green-dark font-bold">5,00 €</p>
            </li>
            <li class="total-order ">
              <p class="total-order-tx-total text-green-dark font-bold">Prix total commande :</p>
              <p class="total-order-price js-total-order-price text-green-dark font-bold">0,00€</p>
            </li>
            <li class="total-order total-tva">
              <p class="total-order-tx-total text-green-dark font-bold">Dont TVA :</p>
              <p class="total-order-price js-total-order-vat text-green-dark font-bold">0,00 €</p>
            </li>
        </ul>
        <li class="btns-order">
          <div class=""><a class="btn-hover btn-order bg-green-dark text-green-light font-bold bx-shadow" href="./shop.html">Retour à la boutique</a></div>
          <div class=""><a class="btn-hover btn-order btn-valid-order bg-green-dark text-withe font-bold bx-shadow" href="#">Passer au paiement</a></div>
        </li>
      </section>

    </main>
    <footer class="footer bg-green-dark">
      <p class="logo-footer text-green-light">Scoby.com</p>
      <div class="links-footer">
        <div class="links-pages-footer">
          <a class="link-footer link-footer-page text-green-light" href="./index.html">Accueil</a>
          <a class="link-footer link-footer-page text-green-light" href="./shop.html">Boutique</a>
          <a class="link-footer link-footer-page text-green-light" href="./manufacturing.html">Fabrication</a>
          <a class="link-footer link-footer-page text-green-light" href="./about.html">A propos / Contact</a>
          <a class="link-footer link-footer-page text-green-light" href="./account.html">Mon compte</a>
        </div>
        <div class="links-legales-footer text-green-light">
          <a class="link-footer link-legales-footer text-green-light" href="#">Mentions légales</a>
          <a class="link-footer link-legales-footer text-green-light" href="#">CGU</a>
          <a class="link-footer link-legales-footer text-green-light" href="#">Utilisation des cookies</a>
        </div>
      </div>
    </footer>
    <template id="product-order-template" class="product-order-template">
      <div class="line-product-order bg-green-dark">
        <p class="name-product-order js-name-product-order text-green-light">name</p>
        <p class="nb-product js-nb-product-order text-green-light">0</p>
        <p class="total-price-product js-total-price-product-order text-green-light">0,00€</p>
      </div>
    </template>   
    <script src="./asset/js/script-general.js"></script>    
    <script src="./asset/js/script-order.js"></script>    
    </body>
    </html>