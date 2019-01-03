<?php include 'templates/header.php';
include 'backend/getproducts.php';
$id = $_GET['id'];
$product = getsingleproduct($id);
?>
<div class="container text-center">
<h1><?=$product['name']?></h1>
<img src="<?=$product['img']?>" alt="">
<h1>price - Rs. <?=$product['price']?></h1>
<p><?=$product['description']?></p>
<?php if(isset($_SESSION['username'])){ ?>
<button  onclick="addtocart('<?=$product['id']?>','<?=$_SESSION['id']?>')"   class='btn btn-success'>add to cart</button>
<?php } ?>
</div>

<?php include 'templates/footer.php'?>