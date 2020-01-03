<?php
	session_start();

	if(!isset($_SESSION["sessionUsername"])) {

		header("Location: login.php");
	}

?>
<?php
    include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home - DekT</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
  	<link rel="stylesheet" href="css/sweetalert2.min.css">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
    <div class="container">
        <div class="desc">
        <h1>WELCOME TO DEK TECHNICIAN</h1>
        <P>free to play samp 0.3.dl-r1</P>
        <a href="#">Play Game</a>
        </div>
  </div>
    </header>
<?php
include 'news.php';
?>
<?php
include 'footer.php';
?>
<style>
    header {
    width: 100%;
    height: 500px;
    background: url("img/banner.jpg") center no-repeat;
    background-size: cover;
    overflow: hidden;
}
.desc {
    margin-top: 150px;
    text-align: center;
}
.desc h1 {
    font-size: 75px;
    font-weight: 700px;
    text-shadow: 2px 2px #6487;
    color: #fff;
}

.desc p {
    font-size: 50px;
    font-weight: 400px;
    text-shadow: 2px 2px #6487;
    color: #fff;
}

.desc a {
    display: inline-block;
    margin-top: 10px;
    text-decoration: none;
    background: #00bdbf;
    color: #fff;
    padding: 10px 30px;
    transition: all 0.5s;
    border: 2px solid #00bdbf;
}

.desc a:hover {
    border: 2px solid #ffffff;
    background: transparent;
}

</style>
</body>
</html>