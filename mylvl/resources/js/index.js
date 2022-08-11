// code for the burger menu

const burgerBox = document.getElementById('burger_box');
const burger = document.getElementById('burger_button');

const continueButton = document.getElementById("continueButton");
const cancelButton = document.getElementById("cancelButton");

const message = document.getElementsByClassName("popup");
const header = document.querySelector("#header-section");

const plusButton = document.getElementById('plusButton');
const minusButton = document.getElementById('minusButton');
let containerQuantityProduct = document.getElementById('quantityProduct');
let quantityProduct = parseInt(document.getElementById('quantityProduct').innerHTML);

plusButton.addEventListener('click', (e) => {
    quantityProduct = ++quantityProduct;
    containerQuantityProduct.innerHTML = quantityProduct;
})

minusButton.addEventListener('click', (e) => {

    if (quantityProduct >= 1) {
        quantityProduct = --quantityProduct;
        containerQuantityProduct.innerHTML = quantityProduct;
    }
})

burger.addEventListener('click', (e) => {

    if (e.target.classList.contains("active")) {
        e.target.classList = '';
        burgerBox.style.display = "none";
    }

    else {
        burger.classList = 'active';
        burgerBox.style.display = "block";
    }
})

/*

document.body.addEventListener('click', () => {

    if (e.target.classList.contains("active")) {
        e.target.classList = '';
        burgerBox.style.display = "none";
    }

    else {
        e.target.classList = 'active';
        burgerBox.style.display = "block";
    }

})

*/

function popup() {

    continueButton.addEventListener('click', () => {
        message[0].style.display = "none";
    })

    cancelButton.addEventListener('click', () => {
        window.close();
    })
}

popup();












