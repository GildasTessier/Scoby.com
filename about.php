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
    <title>Scoby.com - A propos / Nous contacter</title>
    <link rel="stylesheet" href="./asset/css/reset.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/style-about.css">
</head>
<body>
<header>
      <!------------------------------>
      <!------------ NAV ------------->
      <?php include './_includes/_nav.php' ?>
</header>
    <main>
      <section>
        <h1 class="title-section text-green-dark">A propos</h1>
        <article>
          <div class="top-article">
          <img class="img-a-propos-mobile" src="./asset/img/imh-a-propos/img-mobile/img-a-propo-mobile.png" alt="photo d'equipe">
          <img class="img-a-propos-desktop" src="./asset/img/imh-a-propos/img-desktop/img-a-propos-desktop.webp" alt="photo d'equipe">
          <div class="containt-paragraph">
          <p class="paragraph">Notre passion pour le kombucha et notre amour pour cette région pittoresque 
            nous ont poussé à créer Scoby.com. Nous avons établi notre brasserie dans ce cadre enchanteur 
            afin de puiser dans la beauté naturelle qui nous entoure et de l'infuser dans chaque bouteille 
            de notre délicieux kombucha artisanal.</p>
            <p class="paragraph">Chez Scoby.com, nous célébrons la magie de la fermentation et les bienfaits 
              de cette boisson millénaire. Dans notre atelier, vous trouverez un environnement à la fois 
              moderne et respectueux de la tradition, où notre équipe dévouée veille à chaque étape du 
              processus de fabrication.</p>
              <p class="paragraph">Nous nous approvisionnons localement en ingrédients biologiques de 
                première qualité pour créer nos recettes uniques. Du thé soigneusement sélectionné aux arômes 
                naturels des fruits de la région, chaque gorgée de notre kombucha raconte l'histoire des 
                terroirs normands.</p>
              </div>
            </div>
              <p class="paragraph">Nous sommes fiers de contribuer à la préservation de l'environnement en 
                optant pour des pratiques durables et en minimisant notre empreinte carbone. Notre brasserie 
                est un lieu où la nature est chérie et respectée, car nous croyons qu'une boisson saine et 
                délicieuse peut aussi être respectueuse de la planète.</p>
              <p class="paragraph">Venez nous rendre visite à Scoby.com, dégustez nos différentes variétés 
                de kombucha et plongez dans une expérience gustative unique, inspirée par la beauté naturelle 
                de la Suisse Normande. Nous sommes impatients de partager notre passion avec vous et de vous 
                faire découvrir les délices de notre kombucha artisanal, créé avec amour dans notre coin de 
                paradis normand. Santé !</p>
        </article>
      </section>
      <section>
        <h2 class="title-section text-green-dark">Nous contacter</h1>
        <div class="contain-contact">
          <form class="form-contact bg-green-dark">
                <div class="label-form">
                <label for="formName">
                  <i class="icon" data-feather="user"></i>
                </label>
                <input type="text" id="formName" class="form-control bg-green-light font-bold" placeholder="Nom">
                </div>
        
                <div class="label-form">
                <label for="formEmail">
                  <i class="icon" data-feather="mail"></i>
                </label>
                <input type="email" id="formEmail" class="form-control bg-green-light font-bold" placeholder="E-mail">
              </div>
                <textarea id="formMessage" rows="7" class="bg-green-light font-bold" placeholder="Votre message"></textarea>
                <button type="submit" class="btn-form bg-green-light bx-shadow btn-hover font-bold text-green-dark">Envoyer</button>
          </form>
          <div class="bg-green-dark contact">
            <div class="sec-contact">
              <img class="icon-contact" src="./asset/img/Icons/tel.png" alt="icon téléphone">
              <p class="text-green-light">02 58 34 57 20</p>
            </div>
            <div class="sec-contact">
              <img class="icon-contact" src="./asset/img/Icons/email.png" alt="icon email">
              <p class="text-green-light">scoby.com@gmail.com</p>
            </div>
            <div class="sec-contact">
              <img class="icon-contact" src="./asset/img/Icons/adresse.png" alt="icon adresse">
              <p class="text-green-light">58 route de Caen 14220 - Thury Harcourt</p>
            </div>
          </div>
        </div>
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