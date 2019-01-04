<?php
    include 'conn.php';
    $data = $_POST;
    $productid = $data['productid'];
    $userid = $data['userid'];
    $sql = "INSERT INTO orders(productid,userid)values('$productid','$userid')";
    $sql2 = "DELETE FROM cart WHERE userid='$userid' AND productid='$productid'";
    $result = $conn -> query($sql);
    $result2 = $conn -> query($sql2);
    if($result && $result2){
        echo 'success';
    }
   

   ?>