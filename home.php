<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rentals-Home</title>
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
    </div>
  </section>
  
  <!-- Cars -->
  <section class="cars">
    <div class="border-heading">
      <h1 class="h1tag">
        <img src="images/car.png" alt="" />
        Luxury Car Rental
      </h1>
    </div>
    <div class="bus-container">
      <div class="box">
        <div class="box-img">
          <a href="bmw.php"><img src="https://images.lifestyleasia.com/wp-content/uploads/sites/7/2022/05/19154247/2023-BMW-3-Series-white.jpg" alt="" />
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
    </div>
  </section>

  <!-- Buses -->
  <section class="buses">
    <div class="border-heading">
      <h1 class="h1tag">
        <img src="images/bus.png" alt="" />
        Bus Rentals
      </h1>
    </div>
    <div class="bus-container">
      <div class="box">
        <div class="box-img">
          <a href="10.php"><img src="http://www.busorvanbooking.com/images/commuter-3.jpg" alt="" /></a>
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
          <a href="11.php"><img src="https://www.onlinebusbookingindia.com/uploads/40987_Mercedes-Sprinter-interior-1-low-res.jpg" alt="" /><a>
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
            <img src="https://4.imimg.com/data4/YY/YY/GLADMIN-/img-tempo1-500x500.jpg" alt="" />
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
          <a href="14.php"><img src="https://3.imimg.com/data3/HB/DP/MY-2903875/14-seater-mazda-500x500.jpg" alt="" /></a>
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
    </div>
  </section>

</body>

</html>