//For get data products
async function callDataProducts () {
    try {
        const response = await fetch("./datas/products.json");
        return await response.json();
    }
    catch (e) {
        console.error('Impossible de charger les données : ' + e);
    }
}
callDataProducts()
.then(displayProductsByClass)
callDataProducts()
.then(addProductInOrder)


// for insert all products in page
function displayProductsByClass(products) {
    let productByClass = products.filter((product => product.class.includes('new')))
    document.getElementById('gp-products-new').append(...productByClass.map(createProduct));

    productByClass = products.filter((product => product.class.includes('classic')))
    document.getElementById('gp-products-classic').append(...productByClass.map(createProduct));

    productByClass = products.filter((product => product.class.includes('floral')))
    document.getElementById('gp-products-floral').append(...productByClass.map(createProduct));

    productByClass = products.filter((product => product.class.includes('fruit')))
    document.getElementById('gp-products-fruit').append(...productByClass.map(createProduct));
}


// For create element product
function createProduct(product) {
    const blocProduct = document.importNode(document.getElementById('productTemplate').content, true);
    blocProduct.querySelector('.js-img-product').src = product.img;
    blocProduct.querySelector('.js-name-product').textContent = product.name;
    blocProduct.querySelector('.js-descrip-product').textContent = product.composition;
    blocProduct.querySelector('.js-size-product-1').textContent = product.sizes[0] + ' cl';
    blocProduct.querySelector('.js-size-product-2').textContent = product.sizes[1] + ' cl';
    blocProduct.querySelector('.js-price-product-1').textContent = getNumInEuros(product.prices[0]);
    blocProduct.querySelector('.js-price-product-2').textContent = getNumInEuros(product.prices[1]);

    return blocProduct;
}

// For create table to order in session storage
function addProductInOrder (products) {
    
    document.querySelectorAll('.js-product-card').forEach(card => {
        card.addEventListener('click', function (event)  {
            let tabOrderCustomer = window.localStorage.getItem("tabOrderCustomer") ? JSON.parse(window.localStorage.getItem("tabOrderCustomer")) : {};
            if (!event.target.classList.contains('js-add-product')) return;

            let dataProduct = products.filter(product => product.name === this.querySelector('.js-name-product').innerText)[0]

            let price = this.querySelector('.size-product.active').innerText === '33 cl' ? dataProduct.prices[0] : dataProduct.prices[1];

            animateAddProduct(this)

            if (!tabOrderCustomer[dataProduct.name +' '+ this.querySelector('.size-product.active').innerText]){
                 tabOrderCustomer[dataProduct.name +' '+ this.querySelector('.size-product.active').innerText] = {"qty": 1, "priceProduct": price, "totalPrice": price};
                } 
            else {
               tabOrderCustomer[dataProduct.name +' '+ this.querySelector('.size-product.active').innerText].qty += 1;
               tabOrderCustomer[dataProduct.name +' '+ this.querySelector('.size-product.active').innerText].totalPrice = tabOrderCustomer[dataProduct.name +' '+ this.querySelector('.size-product.active').innerText].qty * price;
            }
            window.localStorage.setItem("tabOrderCustomer", JSON.stringify(tabOrderCustomer));
            displayOrderCustomer()
        })
    })
}

//for change opt size select 
    document.querySelector('.section-boutique').addEventListener('click', function (event) {
        if (!event.target.classList.contains('js-opt-product')) return
        if (event.target.classList.contains('active')) return;
        
        for (let element of event.target.closest('.btns-opt-product').children){
            element.classList.toggle('active')
            for (let child of element.children) {
                child.classList.toggle('active')
            }
        }
})

//For créate Animate when customer click on btn add product
function animateAddProduct (object) {
    let nbPrc = 30;
    object.querySelector('.tx-animate-add-product').classList.add('tx-animate-add-product-active')
    document.querySelector(`.tx-animate-add-product-active`).style.cssText = `bottom: ${nbPrc}%`
    object.querySelector('.info-product').classList.add('animate')
    object.querySelector('.bloc-img-product').classList.add('animate')

setTimeout(function run() {
  nbPrc+= 4;
  document.querySelector(`.tx-animate-add-product-active`).style.cssText = `bottom: ${nbPrc}%`; 
   if (nbPrc < 80 ) setTimeout(run, 50);
   else {
    object.querySelector('.tx-animate-add-product').classList.remove('tx-animate-add-product-active')
    object.querySelector('.info-product').classList.remove('animate')
    object.querySelector('.bloc-img-product').classList.remove('animate')
   }
}, 50);
}