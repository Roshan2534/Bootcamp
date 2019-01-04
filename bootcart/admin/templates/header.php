<?php 
session_start();

?>
<?php include 'backend/onlyadmin.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>bootkart</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">bootcart</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproducts.php">Add Products</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="index.php?category=Tvs">view orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?category=Laptops">Laptops</a>
      </li>
      
    </ul>

    <?php if(isset($_SESSION['username'])){ ?>
       
      <a href="../logout.php"><button class="btn btn-outline-success my-2 my-sm-0">logout</button></a> 
    <?php }else{ ?>
      <a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0">login</button></a> 
    <?php } ?>
  </div>
</nav>