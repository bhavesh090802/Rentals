<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rentals-Buses/coaches</title>
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

       <!-- Buses Rent -->
       <section class="buses">
      <div class="border-heading">
        <h1 class="h1tag">
          <img src="images/bus.png" alt="" />
          Buses Rental
        </h1>
      </div>
      <div class="bus-container">
        <div class="box">
          <div class="box-img">
            <a href="10.php"><img
              src="http://www.busorvanbooking.com/images/commuter-3.jpg"
              alt=""/></a>
          </div>
          <div class="promo">
            <div class="coaches text-center">
                <h5>
                    <a href="10.php">10 Seater Economy class</a>
                </h5>
                <div class="uses text-center">
                    <ul>
                        <li><img src="images/wheel.png" alt="">10+1</li>
                        <li><img src="images/desktop.png" alt="">YES</li>
                        <li><img src="images/AC.png" alt="">AC</li>
                        <li><img src="images/vol.png" alt="">YES</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="row1">
                        <div class="action">
                            <a class="lab" href="10.php">MORE</a>
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
            <a href="11.php"><img
              src="https://www.onlinebusbookingindia.com/uploads/40987_Mercedes-Sprinter-interior-1-low-res.jpg"
              alt=""/><a>
          </div>
          <div class="promo">
            <div class="coaches text-center">
                <h5>
                    <a href="11.php">11 Seater Economy class</a>
                </h5>
                <div class="uses text-center">
                    <ul>
                        <li><img src="images/wheel.png" alt="">11+1</li>
                        <li><img src="images/desktop.png" alt="">YES</li>
                        <li><img src="images/AC.png" alt="">AC</li>
                        <li><img src="images/vol.png" alt="">YES</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="row1">
                        <div class="action">
                            <a class="lab" href="11.php">MORE</a>
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
            <a href="12.php">
                <img
                src="https://4.imimg.com/data4/YY/YY/GLADMIN-/img-tempo1-500x500.jpg"
                alt=""
                />
            </a>
          </div>
          <div class="promo">
            <div class="coaches text-center">
                <h5>
                    <a href="12.php">12 Seater Economy class</a>
                </h5>
                <div class="uses text-center">
                    <ul>
                        <li><img src="images/wheel.png" alt="">12+1</li>
                        <li><img src="images/desktop.png" alt="">YES</li>
                        <li><img src="images/AC.png" alt="">AC</li>
                        <li><img src="images/vol.png" alt="">YES</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="row1">
                        <div class="action">
                            <a class="lab" href="12.php">MORE</a>
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
            <a href="14.php"><img
              src="https://3.imimg.com/data3/HB/DP/MY-2903875/14-seater-mazda-500x500.jpg"
              alt=""
            /></a>
          </div>
          <div class="promo">
            <div class="coaches text-center">
                <h5>
                    <a href="14.php">14 Seater Economy class</a>
                </h5>
                <div class="uses text-center">
                    <ul>
                        <li><img src="images/wheel.png" alt="">14+1</li>
                        <li><img src="images/desktop.png" alt="">YES</li>
                        <li><img src="images/AC.png" alt="">AC</li>
                        <li><img src="images/vol.png" alt="">YES</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="row1">
                        <div class="action">
                            <a class="lab" href="14.php">MORE</a>
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
            <a href="16.php"><img
              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQEpKu_m-y7WrmdLnMV4rQF2WKtMGbx1ZzeZ8IOkbS05iUsJZVCPvmmoneetYeSIYxbN9E&usqp=CAU"
              alt=""
            /></a>
          </div>
          <div class="promo">
            <div class="coaches text-center">
                <h5>
                    <a href="16.php">16 Seater Economy class</a>
                </h5>
                <div class="uses text-center">
                    <ul>
                        <li><img src="images/wheel.png" alt="">16+1</li>
                        <li><img src="images/desktop.png" alt="">YES</li>
                        <li><img src="images/AC.png" alt="">AC</li>
                        <li><img src="images/vol.png" alt="">YES</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="row1">
                        <div class="action">
                            <a class="lab" href="16.php">MORE</a>
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
            <a href="18.php"><img
              src="https://www.patratravels.com/wp-content/uploads/2017/09/18-seater-force-traveller-2.jpg"
              alt=""
            /></a>
          </div>
          <div class="promo">
            <div class="coaches text-center">
                <h5>
                    <a href="18.php">18 Seater Economy class</a>
                </h5>
                <div class="uses text-center">
                    <ul>
                        <li><img src="images/wheel.png" alt="">18+1</li>
                        <li><img src="images/desktop.png" alt="">YES</li>
                        <li><img src="images/AC.png" alt="">AC</li>
                        <li><img src="images/vol.png" alt="">YES</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="row1">
                        <div class="action">
                            <a class="lab" href="18.php">MORE</a>
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
            <a href="24.php"><img
              src="https://i1.wp.com/zubinsroyalfleet.com/wp-content/uploads/2018/03/24-Seater-Sutlej_th.jpg?fit=600%2C343&ssl=1"
              alt=""
            /></a>
          </div>
          <div class="promo">
            <div class="coaches text-center">
                <h5>
                    <a href="24.php">24 Seater Economy class</a>
                </h5>
                <div class="uses text-center">
                    <ul>
                        <li><img src="images/wheel.png" alt="">24+1</li>
                        <li><img src="images/desktop.png" alt="">YES</li>
                        <li><img src="images/AC.png" alt="">AC</li>
                        <li><img src="images/vol.png" alt="">YES</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="row1">
                        <div class="action">
                            <a class="lab" href="24.php">MORE</a>
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
            <a href="34.php"><img
              src="https://beelinetours.com/wp-content/uploads/2018/08/IMG_5211.jpg"
              alt=""
            /></a>
          </div>
          <div class="promo">
            <div class="coaches text-center">
                <h5>
                    <a href="34.php">34 Seater Economy class</a>
                </h5>
                <div class="uses text-center">
                    <ul>
                        <li><img src="images/wheel.png" alt="">34+1</li>
                        <li><img src="images/desktop.png" alt="">YES</li>
                        <li><img src="images/AC.png" alt="">AC</li>
                        <li><img src="images/vol.png" alt="">YES</li>
                    </ul>
                </div>
                <div class="row">
                    <div class="row1">
                        <div class="action">
                            <a class="lab" href="34.php">MORE</a>
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