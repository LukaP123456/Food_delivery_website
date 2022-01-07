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
<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us?</h1>
    
    <div class="row">
        <div class="image">
            <img src="img/ljubav.jpg" alt="">
        </div>

        <div class="content">
            <h3> best food in the country</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid architecto autem cum doloribus earum eligendi
                xercitationem expedita ipsa ipsum, iure magni natus nesciunt obcaecati, placeat provident rerum, ullam vero voluptas!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem cum esse et harum id minus molestias nemo nobis odio odit officia
                omnis praesentium quasi repudiandae tempora, temporibus tenetur vitae voluptatibus.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>
    </div>



</section>

<!-- about sekcija kraj-->



<!-- menu sekcija start-->

<section class="menu" id="menu">

    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading"> today's speciality</h1>

    <div class="box-container">
        
        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="img/oprasan.jpg" alt="OPRASNO">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>delicious food</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, molestiae!</p>
                <a href="#" class="btn">add to cart</a>
                <span class="price">$12.99</span>
            </div>
        </div>

    </div>

</section>
<!-- menu sekcija kraj-->



<!-- review sekcija pocetak-->

<section class="review" id="review">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="review-slider">

        <div class="wrapper">
            <div class="slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/nicke.jpg" alt="NIKLA">
                    <div class="user-info">
                        <h3>john doe</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab beatae dignissimos earum fuga fugiat harum, id minima modi
                    molestiae molestias natus neque officia omnis,
                    qui quidem quis, repudiandae vel veritatis!</p>
            </div>

            <div class="slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/nicke.jpg" alt="NIKLA">
                    <div class="user-info">
                        <h3>john doe</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ab beatae dignissimos earum fuga fugiat harum, id minima modi
                    molestiae molestias natus neque officia omnis,
                    qui quidem quis, repudiandae vel veritatis!</p>
            </div>
        </div>

        <div class="slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="img/nicke.jpg" alt="NIKLA">
                <div class="user-info">
                    <h3>john doe</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ab beatae dignissimos earum fuga fugiat harum, id minima modi
                molestiae molestias natus neque officia omnis,
                qui quidem quis, repudiandae vel veritatis!</p>
        </div>
    </div>

    <div class="slide">
        <i class="fas fa-quote-right"></i>
        <div class="user">
            <img src="img/nicke.jpg" alt="NIKLA">
            <div class="user-info">
                <h3>john doe</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ab beatae dignissimos earum fuga fugiat harum, id minima modi
            molestiae molestias natus neque officia omnis,
            qui quidem quis, repudiandae vel veritatis!</p>
    </div>


</section>

<!--review sekcija kraj-->


<!--order sekcija start-->

<section id="order" class="order">

    <h3 class="sub-heading"> order now</h3>
    <h1 class="heading"> free and fast </h1>

    <form action="">

        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" placeholder="enter your name">
            </div>
            <div class="input">
                <span>your number</span>
                <input type="number" placeholder="enter your number">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input type="text" placeholder="enter food name">
            </div>
            <div class="input">
                <span>additional food</span>
                <input type="text" placeholder="extra with food">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>how much</span>
                <input type="number" placeholder="how many orders">
            </div>
            <div class="input">
                <span>date and time</span>
                <input type="datetime-local" >
            </div>
        </div>

        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" value="order now" class="btn">



    </form>


</section>


<!--order sekcija kraj-->

<!--footer sekcija pocetak-->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>locations</h3>
            <a href="#">india</a>
            <a href="#">japan</a>
            <a href="#">russia</a>
            <a href="#">USA</a>
            <a href="#">france</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">dishes</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">review</a>
            <a href="#">order</a>
        </div>


        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-789</a>
            <a href="#">+111-222-333</a>
            <a href="#">mejl@mejl.com</a>
            <a href="#">drugi_mejl@mejl.com</a>
            <a href="#">Subotica, Srbija - 24000</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">;inkedin</a>
        </div>



    </div>

    <div class="credit">copyright @ 2021 by <span>place holder ime </span></div>



</section>














<!--footer sekcija kraj-->












<!--js file link -->
<script src="js/script.js"></script>

</body>
</html>