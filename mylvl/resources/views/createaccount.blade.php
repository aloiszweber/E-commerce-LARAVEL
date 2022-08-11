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
    <section class="body-section">
        <h1 style="text-align: center; margin-top: 7vh; margin-bottom: 1vh;"> Create an account, and join us ! </h1>
        <form id="inscription_form">
        @csrf
            <div class="inputs">
                <label for="firstname"> Firstname </label>
                <input type="text" name="firstname">
            </div>
            <div class="inputs">
                <label for="lastname"> Lastname </label>
                <input type="text" name="lastname">
            </div>
            <div>
            <label for="password"> Password </label>
            <input type="text" name="password">
            </div>
            <div class="inputs" id="mail_input">
                <label for="mail"> Mail </label>
                <input type="email" name="mail">
            </div>
            <div class="gender" class="inputs">
                <label for="men"> Men </label>
                <input type="checkbox" name="men">
                <label for="women"> Women </label>
                <input type="checkbox" name="women">
                <label for="non-binary"> X </label>
                <input type="checkbox" name="non-binary">
            </div>
            <button> Create an account </button>
        </form>

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