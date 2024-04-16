<?php

include 'app/connect.php';
if (isset($_POST['submit'])) {
  $Name = $_POST['name'];
  $Phone = $_POST['phno'];
  $Email = $_POST['mail'];
  $City = $_POST['city'];
  $Model = $_POST['model'];
  $Pickup_Date = date("m-d-Y", strtotime($_POST['pickdate']));
  $Days = $_POST['days'];
  $Message = $_POST['message'];

  $email_check = "SELECT * FROM booking WHERE email=?";
  $email_stmt = $conn->prepare($email_check);
  $email_stmt->bind_param("s", $Email);
  $email_stmt->execute();
  $email_stmt->store_result();
  $sql = "INSERT INTO booking(cname,phno,email,city,model,pickdate,days,message)VALUES(?,?,?,?,?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sissssis", $Name, $Phone, $Email, $City, $Model, $Pickup_Date, $Days, $Message);
  $result = $stmt->execute();
  if ($result) {
    header("location:home.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Rentals-Booking</title> 
  <link rel="stylesheet" href="assets/index.css" />
  <link rel="stylesheet" href="assets/book.css" />
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

  <section id="booking">
    <div class="row tabs">
      <div class="col">
        <ul>
          <li>Book Tour Package</li>
        </ul>
      </div>
      <fieldset class="book">
        <form action="book.php" method="post">
          <div class="label">
            <label for="cname">Customer Name :</label>
            <input type="text" class="formm" name="name" />
          </div>
          <div class="label">
            <label for="phno">Phone Number :</label>
            <input type="tel" class="formm" name="phno" /><br />
          </div>
          <div class="label">
            <label for="mail">Email :</label>
            <input type="email" class="formm" name="mail" />
          </div>
          <div class="label">
            <label for="city">Your City :</label>
            <input type="text" class="formm" name="city" /><br />
          </div>
          <div class="label">
            <label for="model">Vehicle Model :</label>
            <select name="model" id="model" class="formm" required>
             
              <option  value="">Select...</option>
              <option  value disabled>Select Bikes</option>
              <option  value="enfield classic 350">Royal Enfield Classic 350</option>
              <option  value="honda 6G">Honda Activa 6G</option>
              <option  value="raider 125">TVS Raider 125</option>
              <option  value="enfield meteor 350">Royal Enfield Meteor 350</option>
              <option  value="pulsar N160">Bajaj Pulsar N160</option>
              <option  value="honda SP">Honda SP 125</option>
              <option  value="ducati monster">Ducati Monster BS6</option>
              <option  value="bmw G 310 R">BMW G 310 R</option>

              <option  value disabled>Select Economic Cars</option>
              <option  value="volkswagen">Volkswagen</option>
              <option  value="octavia">Skoda Octavia</option>
              <option  value="yaris">Toyota Yaris</option>
              <option  value="ford ST">Ford Focus ST</option>
              <option  value="Mazda">Mazda 2 1.5</option>
              <option  value="ignis">Suzuki Ignis K12D</option>
              <option  value="jazz">Honda Jazz 1.5</option>

              <option  value disabled>Select Luxury Cars</option>
              <option  value="BMW 5">BMW 5 Series</option>
              <option  value="skoda superb">Skoda Superb</option>
              <option  value="land rover">Land Rover</option>
              <option  value="Jeep">Jeep Compass</option>
              <option  value="XUV500">Mahindra XUV500</option>
              <option  value="A8">Audi A8</option>
              <option  value="Cont GT">Bentley Continental GT</option>
              <option  value="Duster">Renault Duster</option>
             
              <option  value disabled>Select Buses/Coaches</option>
              <option  value="10 seat">10 Seater Economy class</option>
              <option  value="11 seat">11 Seater Economy class</option>
              <option  value="12 seat">12 Seater Economy class</option>
              <option  value="14 seat">14 Seater Economy class</option>
              <option  value="16 seat">16 Seater Economy class</option>
              <option  value="18 seat">18 Seater Economy class</option>
              <option  value="24 seat">24 Seater Economy class</option>
              <option  value="34 seat">34 Seater Economy class</option>

            </select>
          </div>
          <div class="label">
            <label for="pickdate"> Pick Up Date :</label>
            <input type="date" name="pickdate" class="formm" required /><br />
          </div>
          <div class="label">
            <label for="days"> Number of Days :</label>
            <input type="number" class="formm" name="days" /><br />
          </div>
          <div class="label">
            <label for="message">Message :</label><br />
            <textarea name="message" maxlength="500" placeholder="Message" class="tell" cols="60" rows="6"></textarea><br /><br />
          </div>
          <button class="btn" type="submit" name="submit">SUBMIT</button><br />
        </form>
      </fieldset>
    </div>
  </section>

</body>

</html>