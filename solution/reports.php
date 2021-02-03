<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rapport Løsninger | Nordic Telematics</title>
	<?php include '../includes/head.php'?>
	<link rel="stylesheet" href="../style/css/solutions_sub.css">
</head>
<body>
	<header>
		<?php include '../includes/nav.php'?>
  </header> 
  <section id="topbanner_solution" class="bgimg rapport">
    <div id="container">
      
    </div>
  </section>

  <section id="main">
    <h1>Rapport</h1>
    <p>
    A vital part of the Jaltest ODF solution. They offer a detailed analysis tool to get to know the behaviour of the vehicles and the drivers, and give the option to know data as important as the time management of the drivers, efficient driving, fuel consumption, use of the brake, evaluation of the drivers, etc. thus supporting the decision taking in the context of fleet management and control.
  <br>
  <br>
    The following conclusions, for example, can be drawn by consulting the reports:
<br>
      <ul>
        <li>The fuel comsumption caused by an excessive use of engine idle time or by driving above the recommended revolutions.</li>
        <li>Comparison between the real comsumption and the amount of litres refuelled.</li>
        <li>Inertia usage, which means a lower fuel consumption and less use of the brake pedal.</li>
      </ul>
      <br>
    The following reports can be extracted:
    <br><br>

    <b>Times</b>
      <br>
    The travel, ignition, driving and idle times, and the idle times with power take-off are displayed in a certain time frame. With this report it is possible to see which driver has lower idle and ignition times and therefore a greater fuel saving.
      <br><br>
    <b>Speeds</b>
      <br>
    Percentages of speed intervals are displayed during a certain time period, in order to know which speed ranges are the most frequent and are among the ones that correspond to the current use of the fleet.
      <br><br>
    <b>Revolutions</b>
      <br>
    Percentages of revolutions intervals are displayed during a certain time period, in order to know which revolutions ranges are the most frequent. The speeds and revolutions reports provide the necessary information to determine if the vehicles are being used according to what is expected in accordance with the usage profile of the fleet (large/medium distance, delivery…)
      <br><br>
    <b>Travel table</b>
      <br>
    It is a summary of all the travels made by a vehicle, providing the most important information. Display of starting place and route ending, covered distance, and duration during a certain time period. It is also possible to display summaries for times, brakings, consumption, inertia use, speeds, revolutions and drivers in the covered section.
      <br><br>
    <b>Travel diagram</b>
      <br>
    Graph with the travel times per day, with the option to access the details of each route.
      <br><br>
    <b>Fuel consumption</b>
      <br>
    Display of the covered distance, the fuel consumption and the average weight (depending on the model) during a certain time period.
    <br><br>
    <b>Brakings</b>
      <br>
    It allows the analysis of the driver’s brake usage, using the percentage of covered distance while activating the brake in relation to the total covered distance. With this it is possible to display which driver uses the brake pedal too much and which one uses (as far as possible) the engine brake, practicing therefore a more efficient driving (it avoids the wear of the brake pads and disks).
      <br><br>
    <b>Drivers</b>
      <br>
    Classification of drivers according to the driving efficiency. This way, the assigned mark depends on the times and the inertia use.
      <br><br>
    <b>J-TDO Analysis</b>
      <br>
    Data obtained from the J-TDO during a certain time period.
      <br><br>
    <b>Reading of J-TDO data</b>
      <br>
    Data of the last reading carried out by the J-TDO. It usually corresponds with the data provided by the EBS module the last time it was connected.
      <br><br>
    <b>Inertia use</b>
      <br>
    The inertia use consists in analyzing the position of the accelerator pedal, the brake pedal, the cruise control activation, the speed, the motor revolutions and the covered distance. Taking into account all these measurements, a calculation is performed to determine if the driving style takes advantage of the vehicle intertia or not. The report connects driving times and covered distance, and the times and distances covered while taking advantage of inertia. It shows which driver takes better advantage of the inertia and therefore saves in the fuel consumption.
      <br><br>
    <b>Inputs installed</b>
      <br>
    It obtains detailed information about the external sensors monitored by J-TCU, for example: temperature sensors, presssure sensors…
      <br><br>
    <b>Overview</b>
      <br>
    It generates an Excel file with all the information gathered during the selected time period.
    </p>

    <div class="buttons">
      <a href="disgnostics" class="back_button">
      <div>
        <i class="fas fa-angle-left"></i>
        <p>Diagnose</p>
        <img src="../assets/solutions/diagnosis.png" alt="">
      </div>
      </a>

      <a href="fleet" class="forward_button">
      <div>
        <img src="../assets/solutions/fleet.png" alt="">
        <p>Fleet</p>
        <i class="fas fa-angle-right"></i>
      </div>
      </a>
    </div>
    

  </section>
  <?php include '../includes/footer.php'?>
  </body>
</html>