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
            <p id="vehicle">TVS Raider 125</p>
            <p class="smalltext">
                TVS Raider 125 is a bike available at a starting price of Rs.50 per hour. It is available in 2 variants and 4 colours with top variant price starting from Rs. 120 per hour. The TVS Raider 125 is powered by 124.8cc BS6 engine which develops a power of 11.2 bhp and a torque of 11.2 Nm. With both front and rear drum brakes, TVS Raider 125 comes up with combined braking system of both wheels. This Raider 125 bike weighs 123 kg and has a fuel tank capacity of 10 liters.<br>
                It uses a 124.8cc, single-cylinder, air-cooled, three-valve engine that produces 11.2bhp of power at 7,500rpm and 11.2Nm of peak torque at 6,000rpm. The motor is linked to a five-speed transmission. The company claims that the 0-60kmph acceleration takes 5.9 seconds while the top speed has been rated at 99kmph.
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://financialexpresswpcontent.s3.amazonaws.com/uploads/2021/09/2-16.jpg" alt="Raider">
            
        </div>
    </section>

</body>

</html>