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
    </section>
    <section>
        <div class="container">
            <h1 style="text-align: center;"> Need help? Customer service available 24/7 </h1>
            <div id="contact_box">
                <div id="block-image">
                    <img src="/assets/contact2.png" width="100px" alt="contact client">
                </div>
                <div id="block-information">
                    <br>
                    <p style="font-size: large; font-weight: 700; padding-bottom: 1vh; color: white"> Contact us </p>
                    <p style="color: white"> Our customer service will answer all your questions </p>
                    <p style="padding-top: 1vh; padding-bottom: 3vh; color: white"> To contact our customer service,
                        please contact
                        us at <i id="mail-adress">
                            newstyle@hotmail.com </i> </p>
                </div>
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
    <script type="module" src="./javascript/index.js">
    </script>
    <script src="./javascript/basket.js">
    </script>
@endsection
</body>

</html>