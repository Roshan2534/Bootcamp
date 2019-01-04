<?php include 'templates/header.php';?>
<div class="container">
    <h1>Add a Product</h1>
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" id="price" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">descriptiion</label>
    <input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">image link</label>
    <input type="text" class="form-control" id="img" placeholder="image link">
    <label for="exampleInputPassword1">category</label>
    <select  class="form-control" id="category">
    <option value="Mobiles">Mobiles</option>
    <option value="Tvs">Tvs</option>
    <option value="Laptops">Laptops</option>
    </select>
  </div>
  <button  onclick="addproduct()" class="btn btn-success">submit</button>
</div>


<?php include 'templates/footer.php';?>