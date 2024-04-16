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
            <p id="vehicle">Royal Enfield Classic 350</p>
            <p class="smalltext">
                Royal Enfield Classic 350 is a cruiser bike available at a starting price of Rs.70 per hour It is available in 6 variants and 15 colours with top variant price starting from Rs. 100 per hour. The Royal Enfield Classic 350 is powered by 349cc BS6 engine which develops a power of 20.2 bhp and a torque of 27 Nm. With both front and rear disc brakes, Royal Enfield Classic 350 comes up with anti-locking braking system. This Classic 350 bike weighs 195 kg and has a fuel tank capacity of 13 liters.<br>
                The mechanical specifications include a 349cc, air/oil-cooled engine that is based on the company’s J-platform. Linked to a five-speed gearbox, the engine is tuned to deliver 20.2bhp of power and 27Nm of peak torque. <br>
                The updated cluster includes an analogue speedometer along with an LCD screen that shows an odometer, trip meters, clock, and fuel gauge. The updated switchgear includes Meteor 350-style rotary buttons. The 2021 model also gets the Royal Enfield Tripper navigation system although that is currently available on the Chrome variants only.
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://cloudfront-us-east-1.images.arcpublishing.com/octane/GHDTS35WUVAYHMUSGPQBVL777A.jpg" alt="Classic 350">
            
        </div>
    </section>

</body>

</html>