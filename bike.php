<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rentals-Bikes</title>
    <link rel="stylesheet" href="assets/index.css" />
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox" />
        <div class="logo"><strong>Rentals</strong></div>
        <ul class="links">
            <li><a href="home.php">Home</a></li>
            <li><a href="bike.php">Bikes</a></li>
            <li><a href="car.php">Cars</a></li>
            <li><a href="bus.php">Buses</a></li>
            <li><a href="book.php">Booking</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="logout.php"><?php session_start();
                                echo $_SESSION['NAME'] ?></a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>

    <!-- Bikes -->
    <section class="bike">
        <div class="border-heading">
            <h1 class="h1tag">
                <img src="images/bike.png" alt="" />
                Bikes Rentals
            </h1>
        </div>
        <div class="bus-container">
            <div class="box">
                <div class="box-img">
                    <a href="classic.php"><img src="https://img.onmanorama.com/content/dam/mm/en/news/business/images/2021/11/24/royal-enfield-classic-350-13.jpg" alt="" />
                </div></a>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="classic.php">Royal Enfield Classic 350</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="classic.php">More</a>
                                    <a class="lab-1" href="book.php">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="honda6g.php"><img src="https://bd.gaadicdn.com/processedimages/honda/activa-6g/640X309/activa-6g6247e3d7b7777.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="honda6g.php">Honda Activa 6G</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="honda6g.php">More</a>
                                    <a class="lab-1" href="book.php">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="raider.php"><img src="https://gaadiwaadi.com/wp-content/uploads/2021/09/TVS-Raider-125-317-2-1068x706.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="raider.php">TVS Raider 125</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="raider.php">More</a>
                                    <a class="lab-1" href="book.php">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="meteor.php"><img src="https://bd.gaadicdn.com/processedimages/royal-enfield/meteor/640X309/meteor5fa51cc2291aa.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="meteor.php">Royal Enfield Meteor 350</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="meteor.php">More</a>
                                    <a class="lab-1" href="book.php">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="box-img">
                    <a href="pulsar.php"><img src="https://classyprice.com.bd/images/Bajaj-Pulsar-NS-160.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="pulsar.php">Bajaj Pulsar N160</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="pulsar.php">More</a>
                                    <a class="lab-1" href="book.php">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="box">
                <div class="box-img">
                    <a href="hondasp.php"><img src="https://i.cdn.newsbytesapp.com/images/l200_28461645263679.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="hondasp.php">Honda SP 125</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="hondasp.php">More</a>
                                    <a class="lab-1" href="book.php">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="box">
                <div class="box-img">
                    <a href="monster.php"><img src="https://media.zigcdn.com/media/model/2021/Oct/front-right-view-683814395_930x620.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="monster.php">Ducati Monster BS6</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="monster.php">More</a>
                                    <a class="lab-1" href="book.php">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="box">
                <div class="box-img">
                    <a href="bmw.php"><img src="https://ridermagazine.com/wp-content/uploads/2020/11/2021-BMW-G-310-R-Announced-23.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="bmw.php">BMW G 310 R</a>
                        </h5>
                        <div class="row">
                            <div class="row-1">
                                <div class="action">
                                    <a class="lab" href="bmw.php">More</a>
                                    <a class="lab-1" href="book.php">Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>