<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los Pollos Hermanos food delivery</title>

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--css link -->
    <link rel="stylesheet" href="CSS/stajl.css">

    <!-- bootstrap include section -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<!--header start-->

<header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>resto.</a>
    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#dishes">dishes</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#order">order</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a><!--fas fa-bars selektuje ikonicu za srce iz font-awesome drugi isto rade -->
        <a href="#" class="fas fa-shopping-cart"></a>


    </div>
</header>
<!-- header kraj -->

<!-- home section start-->
<section class="home" id="home">
    <div class="home-slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- indicators --->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="slide">
                        <div class="content">
                            <span> Our special dishes</span>
                            <h3>Spicy noodles</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
                                cumque cupiditate fuga iste iusto mollitia non numquam obcaecati odit quaerat? Beatae eveniet</p>
                            <a href="#" class="btn">order now</a>
                        </div>
                        <div class="image">
                            <img src="img/nicke.jpg" alt="">
                        </div>

                    </div>
                </div>

                <div class="item">
                    <div class="slide">
                        <div class="content">
                            <span> Our special dishes</span>
                            <h3>Fried chicken</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
                                cumque cupiditate fuga iste iusto mollitia non numquam obcaecati odit quaerat? Beatae eveniet</p>
                            <a href="#" class="btn">order now</a>
                        </div>
                        <div class="image">
                            <img src="img/micke.jpg" alt="MIHAJLO">
                        </div>

                    </div>
                </div>

                <div class="item">
                    <div class="slide">
                        <div class="content">
                            <span> Our special dishes</span>
                            <h3>Hot pizza</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum
                                cumque cupiditate fuga iste iusto mollitia non numquam obcaecati odit quaerat? Beatae eveniet</p>
                            <a href="#" class="btn">order now</a>
                        </div>
                        <div class="image">
                            <img src="img/vico.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>

        </div>
        </div>


</section>
<!-- home sekcija kraj -->

<!-- dishes sekcija pocetak -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading">our dishes</h3>
    <h1 class="heading">popular dishes</h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a><!--vrv cu izbrisati ovo -->
            <a href="#" class="fas fa-eye"></a>
            <img src="img/kafa.jpg" alt="KAFA">
            <h3>tasty food</h3>
            <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            </div>
        <span>$15.99</span>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="img/kafa.jpg" alt="KAFA">
        <h3>tasty food</h3>
        <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        </div>
    <span>$15.99</span>
    <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="img/kafa.jpg" alt="KAFA">
        <h3>tasty food</h3>
        <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        </div>
        <span>$15.99</span>
        <a href="#" class="btn">add to cart</a>
    </div>

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="img/kafa.jpg" alt="KAFA">
        <h3>tasty food</h3>
        <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        </div>
    <span>$15.99</span>
    <a href="#" class="btn">add to cart</a>
    </div>
<!--predzadnji box -->

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="img/kafa.jpg" alt="KAFA">
        <h3>tasty food</h3>
        <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        </div>
    <span>$15.99</span>
    <a href="#" class="btn">add to cart</a>
    </div>

<!--zadnji box-->
        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="img/kafa.jpg" alt="KAFA">
            <h3>tasty food</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>$15.99</span>
            <a href="#" class="btn">add to cart</a>
        </div>


</section>
<!-- dishes sekcija kraj -->

<!-- about sekcija start-->


<!-- about sekcija kraj-->





<!--js file link -->
<script src="js/script.js"></script>

</body>
</html>