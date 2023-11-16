<nav class="nav-bar bg-green-dark">
    <input type="hidden" id="tokenField" value="<?=$_SESSION['token']?>">
    <img id="icon-menu-mobile" class="icon-menu-mobile link-menu-icon" src="./asset/img/Icons/menu.png">
    <div class="logo text-green-light">Scoby.com</div>

    <ul class="menu-desktop" id="menu-desktop">
        <li class="btn-menu-desktop active"><a class="link-menu text-green-light <?=addClassActive($url['index'])?> " href="<?=$url['index']?>">Accueil</a></li>
        <li class="btn-menu-desktop"><a class="link-menu text-green-light <?=addClassActive($url['shop'])?> " href="<?=$url['shop']?>">Boutique</a></li>
        <li class="btn-menu-desktop"><a class="link-menu text-green-light <?=addClassActive($url['manufacturing'])?> " href="<?=$url['manufacturing']?>">Fabrication</a></li>
        <li class="btn-menu-desktop"><a class="link-menu text-green-light <?=addClassActive($url['about'])?> " href="<?=$url['about']?>">A popos /Nous contacter</a></li>
        <li class="btn-menu-desktop"><a class="link-menu text-green-light <?=addClassActive($url['account'])?> " href="<?=$url['account']?>">Mon compte</a></li>
    </ul>
    <div class="icons-nav-bar">
        <a class="icon-disconnect" href="#"><img class="img-icon-disconnect" src="asset/img/Icons/connect.png" alt="picto to connect"></a>
        <div class="icon-order link-menu-icon" id="icon-order">
            <img class="img-icon-order js-img-icon-order" src="./asset/img/Icons/drink-light.png" alt="pictogramme pannier">
            <p class="count-order js-count-order bg-green-light text-green-dark ">0</p>
        </div>
    </div>
    <ul class="menu-order bg-green-light bx-shadow hidden" id="menu-order">

        <img id="close-order" class="img-close-order" src="./asset/img/Icons/close-page.png" alt="boutton fermer">

        <li class="title-order">
            <p class="title-order-name text-green-dark font-bold">Article</p>
            <p class="title-order-qty text-green-dark font-bold">Nb</p>
            <p class="title-order-total text-green-dark font-bold">Total</p>
        </li>

        <ul class="contained-order">
        </ul>

        <li class="total-order">
            <p class="total-order-tx-total text-green-dark font-bold">Total commande :</p>
            <p class="total-order-price js-total-order-price text-green-dark font-bold">0,00€</p>
        </li>
        <li><a class="btn-order bg-green-dark text-green-light font-bold bx-shadow btn-hover" href="./order.html">Commander</a></li>
    </ul>

    <ul class="menu-mobile bg-green-dark  bx-shadow hidden" id="menu-mobile">
        <li class="btn-menu-mobile <?=addClassActive($url['index'])?>"><a class="link-menu text-green-light" href="<?=$url['index']?>">Accueil</a></li>
        <li class="btn-menu-mobile <?=addClassActive($url['shop'])?>"><a class="link-menu text-green-light" href="<?=$url['shop']?>">Boutique</a></li>
        <li class="btn-menu-mobile <?=addClassActive($url['manufacturing'])?>"><a class="link-menu text-green-light" href="<?=$url['manufacturing']?>">Fabrication</a></li>
        <li class="btn-menu-mobile <?=addClassActive($url['about'])?>"><a class="link-menu text-green-light" href="<?=$url['about']?>">A popos / Nous contacter</a></li>
        <li class="btn-menu-mobile <?=addClassActive($url['account'])?>"><a class="link-menu text-green-light" href="<?=$url['account']?>">Mon compte</a></li>
        <li class="btn-menu-mobile "><a class="link-menu text-green-light" href="#">Déconnexion</a></li>
    </ul>
</nav>