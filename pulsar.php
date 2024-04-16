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
            <p id="vehicle">Bajaj Pulsar N160</p>
            <p class="smalltext">
                Bajaj Pulsar N160 is a street bike available at a starting price of Rs. 70 per hour. It is available in 2 variants and 4 colours with top variant price starting from Rs. 100 per hour. The Bajaj Pulsar N160 is powered by 164.82cc BS6 engine which develops a power of 15.68 bhp and a torque of 14.65 Nm. With both front and rear disc brakes, Bajaj Pulsar N160 comes up with anti-locking braking system. This Pulsar N160 bike weighs 152 kg and has a fuel tank capacity of 14 liters.
                <br>
                It’s powered by a an oil-cooled 164.82cc single-cylinder engine developing 15.7bhp of power and 14.65Nm of torque. The motor is mated to a 5-speed gearbox. The Bajaj Pulsar N160 uses the same chassis as its 250cc sibling and is equipped with conventional telescopic forks and a monoshock at the rear. <br>
                The braking hardware consists of a single front and rear disc with single and dual-channel ABS as an option. It rides on 17-inch alloy wheels. On the feature front, Bajaj has equipped the Pulsar N160 with a semi-digital instrument cluster and USB charging port.
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://classyprice.com.bd/images/Bajaj-Pulsar-NS-160.jpg" alt="Pulsar">
            
        </div>
    </section>

</body>

</html>