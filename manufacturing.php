<?php
require_once './functions.php';
require_once './url.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scoby.com - Fabrication</title>
  <link rel="stylesheet" href="./asset/css/reset.css">
  <link rel="stylesheet" href="./asset/css/style.css">
  <link rel="stylesheet" href="./asset/css/style-manufacturing.css">
</head>

<body>
  <header>
      <!------------------------------>
      <!------------ NAV ------------->
    <?php include './_includes/_nav.php' ?>
  </header>

  <main>
    <section>
      <h1 class="title-section text-green-dark">Le Kombucha</h1>
      <article class="article-1">
        <img class="img-fabrication-mobile" src="./asset/img/img-fabrication/img-mobile/img-page-komboucha-mobile.png" alt="image pot kombucha">
        <img class="img-fabrication-tablet" src="./asset/img/img-fabrication/img-tablet/img-page-komboucha-tablet.png" alt="image pot kombucha">

        <div>
          <p class="paragraph">Le kombucha est une boisson fermentée naturelle qui séduit de plus en plus de
            personnes par son goût unique et ses bienfaits pour la santé. Originaire
            d'Extrême-Orient, cette boisson millénaire est le résultat d'un processus de
            fermentation à base de thé sucré et d'une symbiose de bactéries et de levures.

          <p class="paragraph">Comment ça marche ? Tout commence par la préparation d'un thé sucré, généralement
            à base de thé noir ou vert. On y ajoute ensuite une culture de kombucha, également
            appelée "SCOBY" (pour symbiotic culture of bacteria and yeast), qui transforme le
            sucre en acides organiques et en gaz carbonique. Ce processus peut prendre quelques
            jours à quelques semaines, selon les préférences de fermentation.
          <p>

          <p class="paragraph">Le résultat est une boisson rafraîchissante, légèrement pétillante, avec une touche
            acidulée et des notes subtiles de thé. De plus, le kombucha est souvent apprécié pour
            ses propriétés probiotiques, ses antioxydants et sa faible teneur en calories, ce
            qui en fait une alternative plus saine aux sodas traditionnels.</p>
        </div>
      </article>
    </section>
    <section>
      <h2 class="title-section text-green-dark">La fabrication</h2>
      <article class="article-2">
        <div class="top-article">
          <img class="img-fabrication-mobile" src="./asset/img/img-fabrication/img-mobile/img-page-fabrication-mobile.png" alt="image remplisage boutille de kombucha">
          <img class="img-fabrication-tablet" src="./asset/img/img-fabrication/img-tablet/img-page-fabrication-tablet.png" alt="image remplisage boutille de kombucha">

          <div class="contain-paragraphs">
            <p class="paragraph">Chez Scoby.com, nous croyons en l'harmonie
              entre tradition et innovation. C'est pourquoi nous fabriquons
              notre kombucha de manière artisanale, en utilisant des produits
              biologiques et locaux de la région normande. Notre engagement
              envers la qualité commence dès la sélection de nos ingrédients
              : du thé biologique cultivé avec soin, du sucre de canne issu
              de l'agriculture biologique, et des arômes naturels pour des
              saveurs uniques.</p>

            <p class="paragraph">Notre processus de fermentation suit les
              principes ancestraux du kombucha, en laissant nos cultures de
              SCOBY (Symbiotic Culture Of Bacteria and Yeast) travailler leur
              magie pendant des semaines. Le résultat ? Une boisson
              pétillante, légèrement acidulée, et pleine de bienfaits pour
              votre corps.
            <p>

            <p class="paragraph">En optant pour notre kombucha bio et local,
              vous soutenez également une production écoresponsable et une
              économie circulaire. Nous collaborons étroitement avec des
              producteurs locaux pour réduire notre empreinte carbone,
              favoriser l'économie régionale et promouvoir une consommation
              durable.</p>
          </div>
        </div>
        <p class="paragraph">Venez découvrir nos différentes saveurs, inspirées par les richesses de notre belle Normandie, des notes délicates de pommes cueillies à maturité aux arômes subtils de fruits rouges des vergers environnants.
          Savourez l'essence de la Normandie dans chaque gorgée de notre
          kombucha biologique, et embarquez avec nous pour un voyage
          gustatif et respectueux de l'environnement. Merci de soutenir
          notre démarche locale et partager notre passion pour le
          kombucha de qualité !</p>
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