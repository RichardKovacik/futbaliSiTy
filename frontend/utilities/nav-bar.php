<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NavBar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../homePage/home-styles.css">
    <script src="nav-bar-js.js"></script>
</head>
<nav class="top-navbar">
    <a class="logo">FutbalSiTy</a>
    <ul class="menu" id="menu">
        <li><a href="javascript:void(0);" class="icon" onclick="burgerFun()">
                <i class="fa fa-bars"></i>
            </a></li>
        <li><a href="../homePage/index.php">Home</a></li>
        <li>
            <div class="drop">
                <button class="drpbtn">Ligy</button>
                <div class="dropdown-content">
                    <a href="#">BundesLiga</a>
                    <a href="#">Fortuna liga</a>
                    <a href="#">Premier League</a>
                </div>
            </div>
        </li>
        <li><a href="#d">Moje Timy</a></li>
        <li><a href="#d">Prihlasenie</a></li>
        <li><a href="#d">Registracia</a></li>
    </ul>
</nav>
</html>
