<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rentals-Cars</title>
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

    <!-- Economical Cars -->
    <section class="cars">
        <div class="border-heading">
            <h1 class="h1tag">
                <img src="images/car.png" alt="" />
                Economical Cars Rental
            </h1>
        </div>
        <div class="bus-container">
            <div class="box">
                <div class="box-img">
                    <a href="volkswagen.php"><img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Volkswagen/Virtus/6120/1646726714226/front-left-side-47.jpg?impolicy=resize&imwidth=480" alt="" />
                </div></a>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="volkswagen.php">Volkswagen</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="volkswagen.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="sko.php"><img src="https://cdn.motor1.com/images/mgl/1xB1K/s3/2021-skoda-octavia-rs.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="sko.php">Skoda Octavia</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="sko.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="toyota.php"><img src="https://images.carandbike.com/car-images/big/toyota/yaris/toyota-yaris.jpg?v=18" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="toyota.php">Toyota Yaris</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">6+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="toyota.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="ford.php"><img src="https://www.just-auto.com/wp-content/uploads/sites/30/2022/01/Focus_ST_Edition_002.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="ford.php">Ford Focus ST</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="ford.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="mazda.php"><img src="https://car-images.bauersecure.com/wp-images/14134/mazda2_01.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="mazda.php">Mazda 2 1.5</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="mazda.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="box-img">
                    <a href="suzuki.php"><img src="https://media.suzuki.co.uk/assets/images/hero/5174-IGNIS01.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="suzuki.php">Suzuki Ignis K12D </a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="suzuki.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="box-img">
                    <a href="honda.php"><img src="https://5.imimg.com/data5/NK/MA/MY-11082818/honda-jazz-1-5-vx-i-dtec-car-500x500.png" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="honda.php">Honda Jazz 1.5</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="honda.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Luxury Cars -->
    <section class="cars">
        <div class="border-heading">
            <h1 class="h1tag">
                <img src="images/car.png" alt="" />
                Luxury Cars Rental
            </h1>
        </div>
        <div class="bus-container">
            <div class="box">
                <div class="box-img">
                    <a href="bmw5.php"><img src="https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/05/19154247/2023-BMW-3-Series-white.jpg" alt="" />
                </div></a>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="bmw.php">BMW 5 Series</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="bmw.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="sk.php"><img src="https://cdni.autocarindia.com/Utils/ImageResizer.ashx?n=https://cdni.autocarindia.com/ExtraImages/20200721112554_Skoda-Superb-FL-front-action.jpg&w=726&h=482&q=75&c=1" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="sk.php">Skoda Superb</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="sk.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="rover.php"><img src="https://media.jlrms.com/2020-11/New_Discovery_V2.jpg?VersionId=oj71Byxt.PsZ.gCJiDf84TOVijDr.pYq" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="rover.php">Land Rover</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">6+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="rover.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="jeep.php"><img src="https://cdn.jdpower.com/JDPA_2020%20Jeep%20Compass%20Limited%20Red%20Front%20View.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="jeep.php">Jeep Compass</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="jeep.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="box-img">
                    <a href="mahindra.php"><img src="https://stimg.cardekho.com/images/carexteriorimages/930x620/Mahindra/XUV500/7799/1615375182591/front-left-side-47.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="mahindra.php">Mahindra XUV500</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="mahindra.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="box-img">
                    <a href="audi.php"><img src="https://cdn.motor1.com/images/mgl/VkzRG/s1/2020-audi-a8-l.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="audi.php">Audi A8</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="audi.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="box-img">
                    <a href="bentley.php"><img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Bentley/Continental/7775/1587039057669/front-left-side-47.jpg" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="bentley.php">Bentley Continental GT</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="bentley.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="box">
                <div class="box-img">
                    <a href="duster.php"><img src="https://cdn.motor1.com/images/mgl/OkONM/s1/2022-dacia-duster-facelift.webp" alt="" /></a>
                </div>
                <div class="promo">
                    <div class="coaches text-center">
                        <h5>
                            <a href="duster.php">Renault Duster</a>
                        </h5>
                        <div class="uses text-center">
                            <ul>
                                <li><img src="images/wheel.png" alt="">4+1</li>
                                <li><img src="images/desktop.png" alt="">YES</li>
                                <li><img src="images/AC.png" alt="">AC</li>
                                <li><img src="images/vol.png" alt="">YES</li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="row1">
                                <div class="action">
                                    <a class="lab" href="duster.php">MORE</a>
                                </div>
                            </div>
                            <div class="row2">
                                <div class="action">
                                    <a class="lab-1" href="book.php">BOOK</a>
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