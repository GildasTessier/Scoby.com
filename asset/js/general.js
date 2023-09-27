
//For show tab order on click
document.getElementById('icon-order').addEventListener('click', function (event) {
    addRemoveHiddenClass(document.getElementById('menu-order'))
})

//For show buger menu on click
document.getElementById('icon-menu-mobile').addEventListener('click', function (event) {
    addRemoveHiddenClass(document.getElementById('menu-mobile'))
    //For change icon menu mobile when is open
    event.target.getAttribute('src') === './asset/img/Icons/menu.png' ?  event.target.src = './asset/img/Icons/close.png' : event.target.src = './asset/img/Icons/menu.png'
})








// For add and remove hidden class
function addRemoveHiddenClass (element) {
    element.classList.toggle("hidden");
}