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
