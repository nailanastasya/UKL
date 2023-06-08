<?php include_once "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="style4.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<title>Landing Page</title>
    <style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	</style>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fa-solid fa-bars" id="btn"></i>
        <i class="fa-solid fa-xmark" id="cancel"></i>
    </label>
    <div class="sidebar">
        <header>NayFarm</header>
        <ul>
            <li><a href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
 <?php           if( isset($_SESSION['username'])==False) { ?>
            <li><a href="login.html"><i class="fa-solid fa-right-to-bracket"></i>Masuk</a></li>
 <?php } ?>
            <li><a href="#"><i class="fa-solid fa-circle-info"></i>Info</a></li>
<?php if( isset($_SESSION['username'])) { ?>
            <li><a href="hasilpanen.php"><i class="fa-solid fa-square-poll-vertical"></i>Hasil Panen</a></li>
 <?php } ?>           
            <li><a href="shop.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i>Shop</a></li>
 <?php     if( isset($_SESSION['username'])) {?>
            <li><a href="logout.php"><i class="fa-solid fa-outdent"></i>LogOut</a></li>
 <?php } ?>       
        </ul>
    </div>
