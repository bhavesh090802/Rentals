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
            <p id="vehicle">Royal Enfield Meteor 350</p>
            <p class="smalltext">
            Royal Enfield Meteor 350 is a cruiser bike available at a starting price of Rs.120 per hour. It is available in 3 variants and 10 colours with top variant price starting from Rs. 200 per hour. The Royal Enfield Meteor 350 is powered by 349cc BS6 engine which develops a power of 20.2 bhp and a torque of 27 Nm. With both front and rear disc brakes, Royal Enfield Meteor 350 comes up with anti-locking braking system. This Meteor 350 bike weighs 191 kg and has a fuel tank capacity of 15 liters.<br>
            The Meteor 350 gets its power from a BS6-compliant 349 cc, single-cylinder, air-cooled, long-stroke motor. Linked to a new five-speed gearbox, the engine makes 20.2 bhp of power and 27 Nm of peak torque.The torque delivery is almost flat making it super easy to ride on the highway and city. <br>
            The Meteor 350 gets a modern semi-digital instrument cluster. There’s also a navigation system tha
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://bd.gaadicdn.com/processedimages/royal-enfield/meteor/640X309/meteor5fa51cc2291aa.jpg" alt="Meteor 350">
            
        </div>
    </section>

</body>

</html>