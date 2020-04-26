<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="Courtney Jacobs">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAQ</title>
    <!-- <link rel="stylesheet" href="reset.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php
require('connect-db.php');
session_start();
setcookie('redirect', 'faq.php', time()+3600);  
?>

<!--Source: Bootstrap Nav Bar from https://getbootstrap.com/docs/4.4/components/navbar/ -->   
<header>
    <nav class="navbar navbar-default navbar-expand-md">
        <a class="navbar-brand" href="index.php">HoosThrifting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fas fa-bars"></i>        
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">   
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
                <li class="nav-item"><a href="sell.php" class="nav-link">Sell</a></li>
                <li class="nav-item"><a href="fundraise.php" class="nav-link">Fundraise</a></li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href='<?php if(isset($_SESSION['user'])) echo "logout.php"; else echo "login.php"; ?>' class="nav-link"><?php if(isset($_SESSION['user'])) echo "Log-out"; else echo "Log-in or sign up"; ?></a></li>
                <li class="nav-item"><a href="cart.php" class="nav-link"><i class="fas fa-shopping-cart"></i></a></li>
                <li class="nav-item"><a href="profile.php" class="nav-link"><i class="fas fa-user"></i></a></li>
            </ul>        
        </div>  
    </nav>
</header> 

<div class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4"><a href="faq.php">FAQ</a></h1>
    </div>
    <div class="page-content">
        <div class="collapsible-set">
            <!-- Collapsible from https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_collapsible_accordion&stacked=h -->
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <a class="btn-block panel-heading panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                        Question 1
                    </a>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a class="btn-block panel-heading panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                        Question 2
                    </a>
                    <div id="collapse2" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <a class="btn-block panel-heading panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                        Question 3
                    </a>
                    <div id="collapse3" class="panel-collapse collapse">
                        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<!--Footer-->
<footer class="page-footer">
    <div class="row">
        <div class="col-4">
            <ul style="text-align: right;">
                <li><a href="index.php">Home</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="profile.php">Profile</a></li>
            </ul>
        </div>
        <div class="col-4">
            <ul style="text-align: center;">
                <li><a href="shop.php">Shop</a></li>
                <li><a href="sell.php">Sell</a></li>
                <li><a href="fundraise.php">Fundraise</a></li>
            </ul>
        </div>
        <div class="col-4" style="text-align: left">
            <ul>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright text-center">
        <small>&copy; 2020 AV/CJ</small>
    </div>
</footer>


</body>
</html>