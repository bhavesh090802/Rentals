<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rentals-Cars</title>
    <link rel="stylesheet" href="assets/index.css" />
    <link rel="stylesheet" href="assets/vehicle.css" />
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

    <section class="Section ">
        <div class="firsthalf">
            <p id="vehicle">Ford Focus ST</p>
            <p class="smalltext">
            Ford Focus ST price starts at Rs. 900 per day and goes upto Rs. 1000 per day .
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://www.just-auto.com/wp-content/uploads/sites/30/2022/01/Focus_ST_Edition_002.jpg" alt="BMW">
        </div>
    </section>

</body>

</html>