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
            <p id="vehicle">Honda Activa 6G</p>
            <p class="smalltext">
                Honda Activa 6G is a scooter available at a starting price of Rs.30 per hour. It is available in 2 variants and 8 colours with top variant price starting from Rs. 70 per hour. The Honda Activa 6G is powered by 109.51cc BS6 engine which develops a power of 7.68 bhp and a torque of 8.79 Nm. With both front and rear drum brakes, Honda Activa 6G comes up with combined braking system of both wheels. This Activa 6G scooter weighs 107 kg and has a fuel tank capacity of 5.3 liters.
                <br>
                The Activa 6G is known to churn out good mileage. If ridden well, the scooter can easily churn out around 45-50kmpl. So with a fuel tank capacity of 5.3 litres, the Activa 6G can be ridden for almost 250kms before needing to visit a petrol pump. The 109cc BS6 compliant engine is extremely refined and silent. This motor makes 7.6bhp and 8.8Nm as against 8bhp and 9Nm on Activa 5G.
                <br>
                The Activa 6G gets external fuel filler cap, an engine start-stop switch, a silent starter, and a dual-function switch that opens the seat and external fuel lid. The biggest upgrade, however, is the addition of telescopic forks at the front.
                <br><br>
                <a href="book.php">Click Here For Booking.</a>
            </p>
        </div>
        <div class="secondhalf">
            <img src="https://cdni.autocarindia.com/ExtraImages/20200115123100_Honda-Activa-6G.jpg" alt="Activa 6G">
            
        </div>
    </section>

</body>

</html>