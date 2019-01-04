<?php include 'templates/header.php'; ?>
<?php include 'backend/getproducts.php'; ?>
<?php $products = getallproducts(); ?>
<div class="container">
<h1 class="text-center">all products</h1>
  <div class="row">
  <?php foreach($products as $product){ ?>
    <div class="col-sm-4">
      <div class="card" style="width: 18rem; margin-top:20px">
      <h5 class="text-right" style="margin:5px;colorz;gray">X</h5>
        <img class="card-img-top" src="<?=$product['img']?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title"><?=$product['name']?> Rs.<?=$product['price']?> </h5>
          <p class="card-text"><?=$product['description']?></p>
          

        </div>
      </div>
    </div>
  <?php } ?>
    
    </div>
  </div>
</div>

<?php include 'templates/footer.php'; ?>
