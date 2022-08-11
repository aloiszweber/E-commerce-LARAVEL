const getHomeProducts2 = async () => {

    let response = await fetch("products.json");
    let data = await response.json();

    //console.log(data);

    var product = document.querySelector('.productIndexLastProducts');
    //console.log(product);

    data.forEach(element => {
        if (element.id > 4) {

            let cloneproduct = document.importNode(product, true);

            let imageproduct = cloneproduct.querySelector('.image_product');
            let nameproduct = cloneproduct.querySelector('.nameProduct');
            let priceproduct = cloneproduct.querySelector('.price');

            imageproduct.src = `${element.image}`
            nameproduct.innerHTML = element.name;
            priceproduct.innerHTML = element.price;

            cloneproduct.addEventListener('click', () => {
                console.log('added to cart!')
            })

            let target = document.querySelector('.rowIndexLastProducts');
            target.appendChild(cloneproduct);
        }
    });

    product.style.display = "none";

}

getHomeProducts2();