
//For show tab order on click
document.querySelector('#icon-order').addEventListener('click', function (event) {
    addRemoveHiddenClass(document.getElementById('menu-order'))
})
document.querySelector('#close-order').addEventListener('click', function (event) {
    addRemoveHiddenClass(document.getElementById('menu-order'))
})
//For show buger menu on click
document.getElementById('icon-menu-mobile').addEventListener('click', function (event) {
    addRemoveHiddenClass(document.getElementById('menu-mobile'))
    //For change icon menu mobile when is open
    event.target.getAttribute('src') === './asset/img/Icons/menu.png' ?  event.target.src = './asset/img/Icons/close.png' : event.target.src = './asset/img/Icons/menu.png'
})
//For display number in format 00,00€
function getNumInEuros (number) {
    return (new Intl.NumberFormat('fr-FR', { style: 'currency', currency: 'EUR' }).format(number))
}

// For display order customer
function displayOrderCustomer () {
    document.querySelector('.contained-order').innerHTML = ''
    let tab = JSON.parse(window.localStorage.getItem("tabOrderCustomer"))
    let totalPrice = 0
    let nbProducts = 0
    for (let i in tab) {

    let blocOrderCustomer = document.importNode(document.getElementById('product-order-template').content, true);
    blocOrderCustomer.querySelector('.js-name-product-order').textContent = i;
    blocOrderCustomer.querySelector('.js-nb-product-order').textContent = tab[i].qty;
    blocOrderCustomer.querySelector('.js-total-price-product-order').textContent = getNumInEuros(tab[i].totalPrice);
    document.querySelector('.contained-order').append(blocOrderCustomer)
    nbProducts += parseInt(tab[i].qty)
    totalPrice += parseInt(tab[i].totalPrice)
    document.querySelector('.js-total-order-price').textContent = getNumInEuros(totalPrice)
    document.querySelector('.js-count-order').textContent = nbProducts


}
}
displayOrderCustomer()


//For increaseDecrease products in order
document.querySelector('#menu-order').addEventListener('click', function (event) {
    
    let tabOrderCustomer = JSON.parse(window.localStorage.getItem("tabOrderCustomer"))
    if (event.target.classList.contains('js-btn-decrease') || event.target.classList.contains('js-btn-increase')){
        let nameProduct = event.target.closest('.line-product-order').querySelector('.js-name-product-order').innerText;
        event.target.classList.contains('js-btn-increase') ? tabOrderCustomer[nameProduct].qty += 1 : tabOrderCustomer[nameProduct].qty -= 1;
        tabOrderCustomer[nameProduct].totalPrice = tabOrderCustomer[nameProduct].qty * tabOrderCustomer[nameProduct].priceProduct
        if (tabOrderCustomer[nameProduct].qty < 1 ) delete tabOrderCustomer[nameProduct];
        window.localStorage.setItem("tabOrderCustomer", JSON.stringify(tabOrderCustomer));
        displayOrderCustomer() 
    }
})






// For add and remove hidden class
function addRemoveHiddenClass (element) {
    element.classList.toggle("hidden");
}