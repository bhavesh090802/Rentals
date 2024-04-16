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
            <p id="vehicle">Honda SP 125</p>
            <p class="smalltext">
                Honda SP 125 is a mileage bike available at a starting price of Rs.30 per hour. It is available in 2 variants and 5 colours with top variant price starting from Rs. 50 per hour. The Honda SP 125 is powered by 124cc BS6 engine which develops a power of 10.72 bhp and a torque of 10.9 Nm. With both front and rear drum brakes, Honda SP 125 comes up with combined braking system of both wheels. This SP 125 bike weighs 117 kg and has a fuel tank capacity of 11 liters.
                <br>
                Coming to the engine, the motorcycle is powered by an updated 125cc unit that is now BS6 compliant with electronic fuel injection. The engine now produces 10.5bhp of max power and 10.3Nm of peak torque. Transmission duties continue to be handled by a five-speed gearbox. For the SP 125, Honda has equipped the motorcycle with an ACG starter for smoother engine cranking.
                <br><br>
                <   a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://i.cdn.newsbytesapp.com/images/l200_28461645263679.jpg" alt="Honda SP">
        </div>
    </section>

</body>

</html>