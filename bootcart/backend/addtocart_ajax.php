<?php
    include 'conn.php';
    $data = $_POST;
    $productid = $data['productid'];
    $userid = $data['userid'];
    $sql = "INSERT INTO cart(productid,userid)values('$productid','$userid')";
    $result = $conn -> query($sql);
    if($result){
        echo 'success';
    }
   

   ?>