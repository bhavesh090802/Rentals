<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rentals-Bikes</title>
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
            <p id="vehicle">BMW G 310 R</p>
            <p class="smalltext">
                BMW G 310 R is a street bike available at a starting price of Rs. 250 per hour. It is available in only 1 variant and 3 colours. The BMW G 310 R is powered by 313cc BS6 engine which develops a power of 33.52 bhp and a torque of 28 Nm. With both front and rear disc brakes, BMW G 310 R comes up with anti-locking braking system. This G 310 R bike weighs 164 kg and has a fuel tank capacity of 11 liters.
                <br>
                As for features, the G 310 R now gets adjustable clutch and brake levers along with a ride-by-wire throttle. The 312cc, single-cylinder engine is now BS6-compliant and churns out 34bhp at 9,500rpm and 28Nm at 7,000rpm- the same figures as the outgoing model. However, the engine which is paired to a six-speed gearbox now gets an assist and slipper clutch as standard. On the other hand, the cycle parts on the G 310 R remain unaltered.
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://ridermagazine.com/wp-content/uploads/2020/11/2021-BMW-G-310-R-Announced-23.jpg" alt="BMW">
        </div>
    </section>

</body>

</html>