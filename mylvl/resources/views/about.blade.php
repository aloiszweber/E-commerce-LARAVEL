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
    <section id="section1_about">
        <div class="col1">
            <img id="unnamed" src="/assets/unnamed.jpg" alt="image new style">
            <h1 class="half-screen" id="title1_about"> New style : an enterprise to sell local clothes </h1>
            <br>
            <p class="half-screen">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus officiis, unde excepturi vitae nisi
                facere
                hic velit molestiae dolor recusandae soluta corrupti eos aliquid facilis aperiam explicabo voluptates
                accusantium harum?
            </p>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
        </div>
        <div class="col2">
            <h1 class="half-screen" id="title2_about"> Our mission </h1>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
            <br>
            <p class="half-screen">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, soluta sequi officiis quaerat dolore
                ullam
                et,
                amet fugit veritatis adipisci fugiat! Excepturi animi ipsam cumque expedita distinctio placeat, at
                blanditiis?
            </p>
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