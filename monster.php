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
            <p id="vehicle">Ducati Monster BS6</p>
            <p class="smalltext">
                Ducati Monster BS6 is a sports bike available at a starting price of Rs. 500 per hour. It is available in 2 variants and 6 colours with top variant price starting from Rs. 600 per hour. The Ducati Monster BS6 is powered by 937cc BS6 engine which develops a power of 109.96 bhp and a torque of 93 Nm. With both front and rear disc brakes, Ducati Monster BS6 comes up with anti-locking braking system. This Monster BS6 bike weighs 188 kg and has a fuel tank capacity of 14 liters.
                <br>
                The mechanical specifications on the Monster BS6 comprise a 937cc, Testastretta L-twin, liquid-cooled engine that makes 111bhp of power at 9,250rpm and 93Nm of peak torque at 6,500rpm. The motor is mated to a six-speed gearbox that benefits from an anti-slip clutch and quickshifter as standard.
                <br>
                The feature list on the new Monster BS6 includes full-LED lighting and a Bluetooth-ready 4.3-inch TFT display. The Bluetooth module is available as an optional extra. The electronic aids include three riding modes (Sport, Urban, and Touring), wheelie control, traction control, cornering ABS, and launch control.
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://media.zigcdn.com/media/model/2021/Oct/front-right-view-683814395_930x620.jpg" alt="Monster">
        </div>
    </section>

</body>

</html>