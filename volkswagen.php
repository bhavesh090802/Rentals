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
            <p id="vehicle">Volkswagen</p>
            <p class="smalltext">
                Volkswagen car price starts at Rs. 100 per hour and goes upto Rs. 300 per hour. The prices for the top 5 popular Volkswagen Cars are: Volkswagen Virtus Price is Rs. 150 per hour, Volkswagen Taigun Price is Rs. 145 per hour, Volkswagen Polo Price is Rs. 100 per hour, Volkswagen Tiguan Price is Rs.300 per hour and Volkswagen Vento Price is Rs. 125 per hour.
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://stimg.cardekho.com/images/carexteriorimages/630x420/Volkswagen/Virtus/6120/1646726714226/front-left-side-47.jpg?impolicy=resize&imwidth=480" alt="Volkswagen">
        </div>
    </section>

</body>

</html>