<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> New Style - Products </title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite(['resources/css/app.css', 'resources/js/app.js']);
</head>

<body style="margin-top: -150px;">
    <div id="burger_box">
        <ul>
            <li> <a href="/"> Home </a> </li>
            <li> <a href="/products"> Products </a> </li>
            <li> <a href="/about"> About </a> </li>
            <li> <a href="/contact"> Contact </a> </li>
            <li> <a href="/products"> Account </a> </li>
        </ul>
    </div>
    <div>
    @yield('content')
</div>
</body>
</html>