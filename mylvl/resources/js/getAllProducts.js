

const getAllProducts = async () => {

    let response = await fetch("products.json");
    let data = await response.json();

    //console.log(data);

    var product = document.querySelector('.productPageProducts');
    //console.log(product);
    /*
        function getBasket() {
            let basket = (localStorage.getItem("basket"));
            if (basket == null) {
                return [];
            }
            else {
                return JSON.parse(basket);
            }
        }
    
        var basket = getBasket();
    
    */


    function getBasket() {
        let basket = (localStorage.getItem("cloneproduct"));
        if (basket == null) {
            return [];
        }
        else {
            return [JSON.parse(basket)];
        }
    }

    data.forEach(element => {

        let cloneproduct = document.importNode(product, true);

        let imageproduct = cloneproduct.querySelector('.image_product');
        let nameproduct = cloneproduct.querySelector('.nameProduct');
        let priceproduct = cloneproduct.querySelector('.price');

        imageproduct.src = `${element.image}`
        nameproduct.innerHTML = element.name;
        priceproduct.innerHTML = element.price;

        var basket = getBasket();

        cloneproduct.addEventListener('click', () => {
            console.log('added to cart!');

            localStorage.setItem("cloneproduct", JSON.stringify(element)); // save cloneproduct in the local storage
            let product = (localStorage.getItem("cloneproduct")); // get the cloneproduct from the local storage

            console.log(product);

            let foundProduct = basket.find(p => p.id == product.id);
            if (foundProduct != undefined) {
                foundProduct.quantity++;
            }
            else {
                product.quantity = 1;
                basket.push(JSON.parse(product));
            }

            console.log(basket);

        })

        /*
        cloneproduct.addEventListener('click', () => {
            console.log('added to cart!');
            localStorage.setItem("product", JSON.stringify(element));
            let product = (localStorage.getItem("product"));
            console.log(product);
            console.log(basket);
            basket.push(JSON.parse(product));

            basket.forEach(element => {

                let cloneproduct2 = cloneproduct;
                console.log(cloneproduct2);
                console.log(cloneproduct);

                let target2 = document.querySelector('.BasketProducts');
                console.log(target2);
                target2.appendChild(cloneproduct2);

            })

        })

        */

        let target = document.querySelector('.rowAllProducts');
        target.appendChild(cloneproduct);

    });

    product.style.display = "none";

}

getAllProducts();