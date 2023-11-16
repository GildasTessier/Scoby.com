
// FOR DISPLAY PRODUCTS ON FUNC ASY
let token = document.getElementById('tokenField').value
fetch('api.php'+'?token='+token)
    .then(response => response.json())
    .then(data => {
        if (data.products) {
            console.log(data);
                data.class.forEach(classProduct => {
                    document.querySelector('.section-boutique').innerHTML += 
                    `<h2 class="title-section-boutique text-green-light bg-green-dark bx-shadow">${classProduct.className}</h2><ul class="gp-products " id="gp-products-${classProduct.className}">`
      
                    
                });
                data.products.forEach(product => {
              
                    // console.log(data.possess.filter(ligne => ligne.idClass === classProduct.id && ligne.idProduct === product.id));
                    const blocProduct = document.importNode(document.getElementById('productTemplate1').content, true);
                    blocProduct.querySelector('.js-product-card').id = 'product-'+ product.id;
                    blocProduct.querySelector('.js-img-product').src = product.img;
                    blocProduct.querySelector('.js-name-product').textContent = product.name;
                    blocProduct.querySelector('.js-descrip-product').textContent = product.composition;
                    blocProduct.querySelector('.btns-opt-product').id = 'btns-opt-product-' + product.id;
                    document.querySelector('#gp-products-fruit').append(blocProduct);
                });
                data.options.forEach(option => {
                    nbBtn = document.getElementById(`btns-opt-product-${option.id}`).childElementCount + 1;
                    let classActive =  nbBtn === 1 ? "active" : "";
                    document.getElementById(`btns-opt-product-${option.id}`).innerHTML += 
                    `<button class="opt-product js-opt-product-${nbBtn} js-opt-product ${classActive} btn-hover">
                    <p class="size-product js-size-product-${nbBtn} js-opt-product ${classActive}">${option.size} cl</p>
                    <p class="price-product js-price-product-${nbBtn} js-opt-product ${classActive}">${getNumInEuros(option.price)}</p>
                  </button>`;
                });
                addProductInOrder(data)
            }
        }
        )
        

// For create table to order in session storage
function addProductInOrder (data) {
    
    document.querySelectorAll('.js-product-card').forEach(card => {
        card.addEventListener('click', function (event)  {


            let tabOrderCustomer = window.localStorage.getItem("tabOrderCustomer") ? JSON.parse(window.localStorage.getItem("tabOrderCustomer")) : {};
            if (!event.target.classList.contains('js-add-product')) return;

            let nameProductWithSize = this.querySelector('.js-name-product').innerText + ' '+ this.querySelector('.size-product.active').innerText;
            let price = data.options.filter(option => (('product-'+option.id) === this.id) && option.size + ' cl' === this.querySelector('.size-product.active').innerText)[0].price

            if(!tabOrderCustomer[nameProductWithSize]) tabOrderCustomer[nameProductWithSize] = {"qty": 1, "priceProduct": price, "totalPrice": ""}
            else tabOrderCustomer[nameProductWithSize].qty += 1
            tabOrderCustomer[nameProductWithSize].totalPrice = tabOrderCustomer[nameProductWithSize].qty * tabOrderCustomer[nameProductWithSize].priceProduct
            
            animateAddProduct(this)

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
    object.querySelector('.js-tx-animate-add-product').classList.add('tx-animate-add-product-active')
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





        