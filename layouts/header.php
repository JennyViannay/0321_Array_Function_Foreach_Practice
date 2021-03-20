<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Développement</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Link 1</a></li>
                <li><a href="">Link 2</a></li>
                <li><a href="">Link 3</a></li>
                <li><button onclick="darkModeFunction()">Dark Mode</button></li>
            </ul>
        </nav>
    </header>
    <div class="mobile-container">
        <div class="topnav">
            <a href="#home" class="active">Logo</a>
            <div id="myLinks">
                <a href="">Link 1</a>
                <a href="">Link 2</a>
                <a href="">Link 3</a>
                <button onclick="darkModeFunction()">Dark Mode</button>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="burgerMenuFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>