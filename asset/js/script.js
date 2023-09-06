//For show items burger menu
document.querySelector("#button-menu-burger").addEventListener("click", () => {
    document.querySelector("#menu-mobile").classList.toggle("hidden");
});

//For Increase/Decrease nb products to add
let count = 0
document.querySelector('#btnMoreLessProtucts').addEventListener('click', (event) => {
    event.target.classList.contains('js-increase') ? count += 1 : count -= 1;
    if (count < 0 ) count = 0;
    document.querySelector('.js-nb-products').innerText = count;
})