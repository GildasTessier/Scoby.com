//For show items burger menu
document.querySelector("#button-menu-burger").addEventListener("click", () => {
    document.querySelector("#menu-mobile").classList.toggle("hidden");
});
document.querySelector("#picto-panier").addEventListener("click", () => {
    document.querySelector("#tab-order").classList.toggle("hidden");
    
    
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
.then(addProductInOrder)
.then(displayOrderCustomer ())


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
    object.addEventListener('click', function(event) {
        let count =  parseInt(event.target.closest('.article').querySelector('.js-nb-products').innerText)
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

// For create table to order
function addProductInOrder () {
    let tabOrderCustomer = window.sessionStorage.getItem("tabOrderCustomer") ? JSON.parse(window.sessionStorage.getItem("tabOrderCustomer")) : {};
    document.querySelectorAll('.article').forEach(btn => {
        btn.addEventListener('click', function (event)  {
             if (!event.target.classList.contains('article-add-article')) return;

             if (!tabOrderCustomer[this.querySelector('.article-name').innerText +' '+ this.querySelector('.article-choice-content').options[this.querySelector('.article-choice-content').selectedIndex].innerText]){
                 tabOrderCustomer[this.querySelector('.article-name').innerText +' '+ this.querySelector('.article-choice-content').options[this.querySelector('.article-choice-content').selectedIndex].innerText] = {"size": 0, "qty": 0, "priceProduct": 0, "totalPrice": 0};
                } 
            let nameProduct = tabOrderCustomer[this.querySelector('.article-name').innerText +' '+ this.querySelector('.article-choice-content').options[this.querySelector('.article-choice-content').selectedIndex].innerText]

            nameProduct.qty += parseInt(this.querySelector('.nb-increase').innerText);
            nameProduct.size = this.querySelector('.article-choice-content').options[this.querySelector('.article-choice-content').selectedIndex].innerText;

            if (this.querySelector('.article-choice-content').options[this.querySelector('.article-choice-content').selectedIndex].value === '1') {
               nameProduct.priceProduct = this.querySelector('.article-price-opt1').innerText
            }
            else {
               nameProduct.priceProduct = this.querySelector('.article-price-opt2').innerText
            }
           nameProduct.totalPrice = nameProduct.qty * parseInt(nameProduct.priceProduct) + '€'
            console.table(tabOrderCustomer);

            window.sessionStorage.setItem("tabOrderCustomer", JSON.stringify(tabOrderCustomer));

            event.target.closest('.article').querySelector('.js-nb-products').innerText = '1'
            displayOrderCustomer()
        })
    })
}
//For display order list in menu order
// function displayOrderCustomer () {
//     let tab = JSON.parse(window.sessionStorage.getItem("tabOrderCustomer"))
//     let values = ''
//     for (let i in tab) {
//         values += `<div class"text-green-dark"> ${i} x ${tab[i].qty} = ${tab[i].totalPrice}</div>`
//     }
//     document.querySelector('#tab-order').innerHTML = values
// }
function displayOrderCustomer () {
    document.querySelector('.tab-order-for-template').innerHTML = ''
    let tab = JSON.parse(window.sessionStorage.getItem("tabOrderCustomer"))
    let totalPrice = 0
    let nbProducts = 0
    for (let i in tab) {
const blocOrderCustomer = document.importNode(document.getElementById('product-order-template').content, true);
blocOrderCustomer.querySelector('.name-product').textContent = i;
blocOrderCustomer.querySelector('.nb-product').textContent = tab[i].qty;
blocOrderCustomer.querySelector('.total-price-product').textContent = tab[i].totalPrice;
document.querySelector('.tab-order-for-template').append(blocOrderCustomer)
totalPrice += parseInt(tab[i].totalPrice)
nbProducts += parseInt(tab[i].qty)
document.querySelector('.total-price').textContent = totalPrice + `€`
document.querySelector('.count-order').textContent = nbProducts 
}
}

