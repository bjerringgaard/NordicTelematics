<!DOCTYPE html>
<html lang="en">
<head>
	<title>Diagnose Løsninger | Nordic Telematics</title>
	<?php include '../includes/head.php'?>
	<link rel="stylesheet" href="../style/css/solutions_sub.css">
</head>
<body>
	<header>
		<?php include '../includes/nav.php'?>
  </header> 
  <section id="topbanner_solution" class="bgimg diagnose">
    <div id="container">
      
    </div>
  </section>

  <section id="main">
    <h1>Diagnoser</h1>
    <p>
    Jaltest Optimal Driving Fleet is the first solution in the market that allows to perform remote multibrand diagnosis.
    <br>
    <br>
    <b>Vehicle state</b>
    <br>
    At a glance, we can verify the diagnosis state of all vehicles belonging to our fleet, identifying the vehicles where a diagnosis error has been found. In case a diagnosis error is found, the appropriate actions can be carried out depending on its severity.
    <br>
    The diagnosis procedures are launched automatically when the driver turns on the ignition key. In addition, the fleet manager can program a time interval to send a diagnosis request to the vehicle. The information gathered during these procedures is used to check the vechicle state, thus guaranteeing that, at each start-up, the vehicle has no errors and is ready to tackle a working day in optimal conditions.
    <br>
    <br>
    <b>Advanced diagnosis </b>
    <br>
    Through this submenu, any expert user can launch a diagnosis procedure for the reading of error codes, values measurements and ECU data in real time in order to know the state of one or multiple systems in each vehicle.
    </p>

    <div class="buttons">
      <a href="messages" class="back_button">
      <div>
        <i class="fas fa-angle-left"></i>
        <p>Beskeder</p>
        <img src="../assets/solutions/messages.png" alt="">
      </div>
      </a>

      <a href="reports" class="forward_button">
      <div>
        <img src="../assets/solutions/reports.png" alt="">
        <p>Rapport</p>
        <i class="fas fa-angle-right"></i>
      </div>
      </a>
    </div>
    

  </section>
  <?php include '../includes/footer.php'?>
  </body>
</html>