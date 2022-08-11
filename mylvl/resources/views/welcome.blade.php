<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> New Style - Homepage </title>
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/app.css', 'resources/js/app.js']);
</head>

<body style="margin-top: -150px;">
    <div class="popup" id="active">
        <h3> New Style </h3>
        <div class="contentPopup">
            <p> This site needs a lot of resources to facilitate the purchase of consumers. This work is based on the
                complementary income
                from advertising cookies and subscriptions. You can therefore :</p>
            <br />
            <p style="font-weight: 700;"> Free access by accepting the use of cookies. </p>

            <p> Free access to the site (excluding exclusive subscriber content) is subject to your consent to the use
                of cookies, especially for advertising personalization, or similar technologies by New Style and third
                party partners. You may withdraw your consent at any time. </p>
            <br />
            <p style="font-weight: 700;"> What is a cookie ? </p>
            <br />
            <p> Subscribe to New Style to enjoy all the content. Access to the site with a subscription allows you to
                access to all New Style content and archives from our website and mobile applications. By clicking on
                the
                button " Cancel ", you will be able to refuse the cookies (except operating and audience measurement
                cookies). </p>
            <button id="continueButton" style="margin-top: 30px; background-color: #00d0e5;"> Accept and continue
            </button>
            <button id="cancelButton" style="background-color: rgb(255, 88, 88); opacity: 0.55"> Cancel
            </button>
        </div>
    </div>
    <div id="burger_box">
        <ul>
            <li> <a href="/"> Home </a> </li>
            <li> <a href="/products"> Products </a> </li>
            <li> <a href="/about"> About </a> </li>
            <li> <a href="/contact"> Contact </a> </li>
            <li> <a href="/products"> Account </a> </li>
        </ul>
    </div>
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
                            <button id="make_search" type="submit"> <i class="fa fa-search"> </i> </button>
                        </form>
                    </div>
                    <nav>
                        <a href="/basket"> <img id="basket" src="/assets/cart.png" alt="Cart icon" width="26px"> </a>
                    </nav>
                </div>
            </header>
            <div class="rowIndexIntro">
                <div class="col-2">
                    <h1> Give at your training <br> a new style ! </h1>
                    <p> Success is not always about greatness.
                        <br> It's a matter of consistency.
                        Hard and consistent work earns success.
                        Greatness will come.
                    </p>
                    <a href=""> Explore now &#8594; </a>
                </div>
                <div class="col-2">
                    <img src="/assets/unnamed.jpg" alt="landing image">
                </div>
            </div>
        </div>
    </section>

    <section class="categories">
        <div class="container">
            <h2> Featured categories </h2>
            <div class="rowIndex2">
                <div class="col-3">
                    <img src="/assets/category-1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="/assets/category-2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="/assets/category-3.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="featured-products">
        <div class="container">
            <h2> Best products </h2>
            <div class="rowIndexBestProducts">
                @foreach($eshops as $product)
                @if($product['id'] < 5)
                <div class="productIndexBestProducts">
                    <img class="image_product" id="product1" src="{{$product['path']}}" alt="">
                    <h3 class="nameProduct"> {{$product['name']}} </h3>
                    <p class="price"> {{$product['price']}},00€ </p>
                </div>
                @endif    
                @endforeach
            </div>
        </div>
    </section>

    <section class="featured-products">
        <div class="container">
            <h2> Our last products </h2>
            <div class="rowIndexLastProducts">
                @foreach($eshops as $product)
                @if($product['id'] > 4)
                <div class="productIndexLastProducts">
                    <img class="image_product" id="product1" src="{{$product['path']}}" alt="">
                    <h3 class="nameProduct"> {{$product['name']}} </h3>
                    <p class="price"> {{$product['price']}},00€ </p>
                    </div>

                    @endif    
                @endforeach

            </div>
        </div>
    </section>

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
    <script type="module" src="./javascript/index.js"> </script>
    <script src="./javascript/basket.js"> </script>
    <script data-main="./javascript" src="./javascript/RequireJS.nuspec"> </script>
    <script src="./javascript/getHomeProducts1.js"> </script>
    <script src="./javascript/getHomeProducts2.js"> </script>
</body>

</html>

<!-- I have to keep the first 4 for the best products block and delete the first 4 for the last products block -->