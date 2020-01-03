<?php 
  include("config.php");

  $conn = mysqli_connect($hostname, $username, $password, $database);

  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $query = "SELECT `Money` FROM `Users` WHERE `Username` = '".$_SESSION["sessionUsername"]."'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 1) {

    while($row = mysqli_fetch_assoc($result)) {

        $currentMoney = $row["Money"];
    }
  }
  else $currentMoney = 0;

  mysqli_close($conn);
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/all.css">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="main.php">Home</a></li>
        <li><a href="vehicles.php">Vehicles</a></li>
        <li><a href="skins.php">Skins</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a>Name: <?php echo $_SESSION["sessionUsername"];?></a></li>
        <li><a><span class="fas fa-coins"> <?php echo "".number_format($currentMoney)."";?></span></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>
      </ul>
    </div>
  </div>
</nav>