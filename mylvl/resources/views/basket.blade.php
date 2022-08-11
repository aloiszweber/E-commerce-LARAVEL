@extends('layouts.app')
@section('content')
    <section id="header-section">
        <div class="container">
            <header class="navbar">
                <div class="navbar1">
                    <div class="logo">
                        <figure>
                            <img id="burger_button" src="/assets/ooo.png" alt="New style logo">
                            <figcaption> New style </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="navbar2">
                    <div class="box_search">
                        <form action="">
                            <input id="search" type="search" value="" placeholder="search" name="search">
                            <button id="make_search" type="submit"> <i class="fa fa-search"> </i></button>
                        </form>
                    </div>
                    <nav>
                        <a href="/basket"> <img id="basket" src="/assets/cart.png" alt="Cart icon" width="26px"> </a>
                    </nav>
                </div>
            </header>
        </div>
    </section>
    <!-- beginning content basket -->
    <section id="basket" class="basket part">
        <div id="blockTitleBasket" class="blockTitleBasket part">
            <h2 id="basketTitle">
                PLEASE ADD PRODUCTS TO CART <br>
                NO PRODUCTS
            </h2>
        </div>
        <div id="basketCard" class="basketCard part">
            <div class="injectJS">
                <div id="basketProduct" class="basketProduct part">
                    <div id="blockImage">
                        <img id="laurier" src="/assets/laurier.png" alt="image by default">
                    </div>
                    <div id="blockProduct" class="blockProduct part">
                        <h2 id="productName"> Product </h2>
                        <p id="price"> 0E </p>
                        <p id="reference"> Ref:0000000 </p>
                        <p id="disponibility"> In Stock </p>
                    </div>
                    <div id="changeProduct" class="changeProduct part">
                        <div class="center">
                            <button id="minusButton"> - </button>
                            <span id="quantityProduct"> 0 </span>
                            <button id="plusButton"> + </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End content basket -->
    <footer>
        <ul id="footer-row1">
            <li> <a href=""> Blog Tech | </a> </li>
            <li> <a href=""> General conditions | </a> </li>
            <li> <a href=""> Legal information | </a> </li>
            <li> <a href=""> Data protection | </a> </li>
            <li> <a href=""> Data parameters | </a> </li>
        </ul>

        <ul id="footer-row2">
            <div>
                <li>
                    <h5> Applications New Style </h5>
                </li>
            </div>
            <div class="inline_links">
                <li> <a href=""> <img src="/assets/app-store.png" width="100px" alt=""> </a> </li>
                <li> <a href=""> <img src="/assets/google-play.png" width="100px" alt=""> </a> </li>
            </div>
        </ul>

        <ul id="footer-row3">
            <div>
                <li>
                    <h5> More inspiration </h5>
                </li>
            </div>
            <div class="inline_links">
                <li> <a href="https://www.facebook.com"> <img src="/assets/facebook.png" alt=""> </a> </li>
                <li> <a href="https://www.youtube.com"> <img src="/assets/youtube.png" alt=""> </a> </li>
                <li> <a href="https://www.instagram.com"> <img src="/assets/instagramme.png" alt=""> </a> </li>
            </div>
        </ul>
    </footer>
@endsection
    <script type="module" src="./javascript/index.js">
    </script>
    <script src="./javascript/basket.js">

    </script>
</body>


</html>