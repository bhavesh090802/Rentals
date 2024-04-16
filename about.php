<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rentals-About Us</title>
  <link rel="stylesheet" href="assets/about.css" />
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

  <section class="about">
    <div class="border-heading">
      <h1 class="h1tag">
        <img src="images/about.png" alt="" />
        About Us
      </h1>
    </div>
    <div class="img1">
      <img src="https://www.travelperk.com/wp-content/uploads/car-rental-companies-1-720x480.jpg" alt="">
    </div>
    <p class="para1">
      <strong>Rentals</strong> have more than 7 years of experience in bikes/cars/buses rental service in India. We offer a different variety of cars/buses and offering Budget and Luxury Bundles as per customer requirements. <br>
      We provide cars, buses accordingly to the customer needs and satisfaction also provided with different varieties of cars and buses. We have a specialized and dedicated team, and we are engaged in this field for long years
    </p>
  </section>
</body>

</html>