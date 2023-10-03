//for display prices with tax 
let delivery = 10
let vat = 5.5
let totalPrice = parseInt(document.querySelector('.js-total-order-price').textContent)
let totalPriceVat = totalPrice * (vat / 100)
totalPrice += delivery

document.querySelector('.js-total-order-delivery').textContent = getNumInEuros(delivery)
document.querySelector('.js-total-order-price').textContent = getNumInEuros(totalPrice)
document.querySelector('.js-total-order-vat').textContent = getNumInEuros(totalPriceVat)

