<?php include 'templates/header.php'; 
include 'backend/getproducts.php';
    if(isset($_SESSION['username'])){
        $username=$_SESSION['username'];
        $id = $_SESSION['id'];
        $cart=getcart($id);
      }else{
        $username='user';
      }
      
?>
<div class="container">
<h1 class="text-center">Your Cart</h1>
<?php foreach($cart as $element){ 
    $productid=$element['productid'];
    $product= getsingleproduct($productid);
    ?>
<ul class="list-unstyled">
  <li class="media my-5">
    <img class="mr-3"  style="width:200px;" src="<?=$product['img']?>" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><?=$product['name']?> - Rs.<?=$product['price']?></h5>
      <p><?=$product['description']?></p>
      <button class="btn btn-success btn-block">place order</button>
    </div>
  </li>
<?php } ?>
</ul>

</div>


<?php include 'templates/footer.php' ; ?>