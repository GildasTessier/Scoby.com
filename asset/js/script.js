//For show items burger menu
document.querySelector("#button-menu-burger").addEventListener("click", () => {
    document.querySelector("#menu-mobile").classList.toggle("hidden");
});


async function waiting () {
    try {
        const response = await fetch("/datas/products.json");
        return await response.json();
    }
    catch (e) {
        console.error('Impossible de charger les données : ' + e);
    }
    
}
waiting()
.then(displayProducts)
.then(getIncreaseDecreaseAtAll)
.then(DisplayPriceByOptionSize)

// for display all products in page
function displayProducts(products) {
    document.getElementById('ProductsClassic').append(...products.map(createProduct));
}
// For create element product
function createProduct(produit) {
    const blocProduct = document.importNode(document.getElementById('productTemplate').content, true);
    blocProduct.querySelector('.article-name').textContent = produit.name;
    blocProduct.querySelector('.article-comp').textContent = produit.composition;
    blocProduct.querySelector('.opt-size-1').textContent = produit.sizes[0] + ' cl';
    blocProduct.querySelector('.opt-size-2').textContent = produit.sizes[1] + ' cl';
    blocProduct.querySelector('.article-price-opt1').textContent = produit.prices[0] + '€';
    blocProduct.querySelector('.article-price-opt2').textContent = produit.prices[1] + '€';

    
    return blocProduct;
}
// For Increase/Decrease nb products to add
function getIncreaseDecrease (object) {
    let count = 0
    object.addEventListener('click', function(event) {
            event.target.classList.contains('js-increase') ? count += 1 : count -= 1;
            if (count < 0 ) count = 0;
            this.querySelector('.js-nb-products').innerText = count;
        }) 
    }

// For play function Increase/Decrease at all 
function getIncreaseDecreaseAtAll () {
    document.querySelectorAll('.js-btnMoreLessProtucts').forEach(element => {
        getIncreaseDecrease(element);
    });
}

// For display price when the size change
function DisplayPriceByOptionSize () {
    document.querySelectorAll('.article').forEach(select => {
        select.addEventListener('input', function (event)  {
            if (event.target.options[event.target.selectedIndex].value === '2') {
                this.querySelector('.article-price-opt1').classList.add('hidden')
                this.querySelector('.article-price-opt2').classList.remove('hidden')
            }
            else {
                this.querySelector('.article-price-opt2').classList.add('hidden')
                this.querySelector('.article-price-opt1').classList.remove('hidden')
            }
        })
    })}