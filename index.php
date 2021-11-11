<?php
require("controller/includer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forside | Nordic Telematics</title>
    <?php include 'includes/head.php'?>
    <link rel="stylesheet" href="style/css/index.css">
</head>
<body>
    <header>
        <?php include 'includes/nav.php'?>
    </header>
    <section id="banner">
        <div id="container">
            <h1>Importør af Telematics udstyr <br> fra Spanske Jaltest by Cojali</h1>
            <h3>
                Vi har specialiseret os i at råde, vejlede og uddanne vores kunder indenfor de produkter vi levere. <br>
                Så udbyttet af telematik værktøjet altid er størst mulig.
            </h3>
            <div id="button">
                <a href="demo.php">BESTIL DEMO</a>
                <a id="kontaktbtn" href="/kontakt">KONTAKT OS</a>
            </div>
        </div>
    </section>

    <section id="entry">
        <!-- <div class="wrapper">
            <?php
            $sql = "SELECT * FROM news ORDER BY newsid DESC LIMIT 1";
            $result = mysqli_query($conn, $sql); 

            while($news = mysqli_fetch_assoc($result)){?>
            <a class="news" href="/nyheder#<?php echo $news['newsid']?>">
                <div>
                    <img src="/uploads/news/<?php echo $news['newsimage']?>" alt="">
                </div>
            </a> <?php } ?>
            <a class="one" href="/produkter/cv"><div><img src="assets/branches/cv/CVNegative.png" alt=""></div></a>
            <a class="two" href="/produkter/agv"><div><img src="assets/branches/agv/AGVNegative.png" alt=""></div></a>
            <a class="three" href="/produkter/ohw"><div><img src="assets/branches/ohw/OHWNegative.png" alt=""></div></a>
            <a class="four" href="/produkter/marine"><div><img src="assets/branches/marine/MarineNegative.png" alt=""></div></a>
            <a class="five" href="/produkter/jaltest"><div><img src="assets/branches/jaltestTools/JaltestToolsWhite.png" alt=""></div></a>
            <a class="six" href="/produkter/telematics"><div><img src="assets/branches/JaltestTelematics/JaltestTelematicsWhite.png" alt=""></div></a> 
        </div> -->
    </section>

    <section id="info_container">
        <div id="info">
            <h2>FLEET MANAGEMENT <br> AND REMOTE DIAGNOSIS SOLUTION</h2>
            <h3>Jaltest Telematics. The definitive solution <br> for the management of industrial vehicle fleets.</h3>
            <p>The main benefits are the following:</p>
            <ul>
                <li>Cost control</li>
                <li>Increase of the efficiency and efficacy of your fleet</li>
                <li>Less fuel comsumption</li>
                <li>Driving optimization</li>
                <li>Reduction of maintenance times</li>
                <li>Perfectioning of the order management</li>
                <li>Support tools for the decission taking</li>
            </ul>
            <p>All of this contributes to the increase of the benefits, <br> thus providing a better service for your customers.</p>
        </div>
    </section>

    <section id="main">
        <section class="grid">
            <div class="wrapper">
                <div class="photo"><img src="/assets/img/kit.png" alt=""></div>
                <div class="text">
                    <h2>TELEMATICS + REMOTE DIAGNOSIS</h2>
                    <h3>Know the vehicle state in real time during the route.</h3>
                    <p>
                      Jaltest Telematics introduces in an exclusive way the concept of remote diagnosis in real time, thus contributing to the correct maintenance and the prevention of problems through error reading in the electronic systems installed in each vehicle. 
                      <br>
                      The concept of remote diagnosis is based on the previous experience of Jaltest, reference tool in the world of multibrand diagnosis.
                    </p>
                </div>
            <div>
        </section>

        <section class="grid">
            <div class="wrapper">
              <div class="text">
                <h2>CONTINUOUS AND FLUENT COMMUNICATION</h2>
                <h3>With Jaltest Telematics it is possible to recognize three roles of the application: the fleet manager, the workshop and the driver.</h3>
                <p>With Jaltest Telematics you will have a continuous and fluent communication between the fleet manager, the workshop manager and the vehicle driver. Each of them will have a role inside the system.</p>
              </div>
              <div class="photo"><img src="/assets/img/kit.png" alt=""></div>
            <div>
        </section>

        <section class="grid">
            <div class="wrapper">
                <div class="photo"><img src="/assets/img/kit.png" alt=""></div>
                <div class="text">
                    <h2>ODF, OUR WEB PORTAL</h2>
                    <h3>Through our web portal, you will be able to access all information in real time from any place in the world.</h3>
                    <p>Platform accesible from any device (PC, tablet, Smartphone…) with an Internet connection and multi language. The following are among the most significant available functionalities:</p>
                    <ul>
                      <li>Vehicle location in real time</li>
                      <li>Creation of alarms depending on the needs of the driver</li>
                      <li>Communication between driver, fleet manager and workshop</li>
                      <li>Generation of different reports</li>
                      <li>Fleet management (vehicles and drivers)</li>
                      <li>Remote download of the tacograph data</li>
                      <li>Management of notices to the workshop</li>
                      <li>Management of orders and maintenances</li>
                    </ul>
                </div>
                
            <div>
        </section>
    </section>
    <?php include 'includes/footer.php'?>
</body>
</html>