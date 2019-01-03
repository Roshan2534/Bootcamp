<?php
function getallproducts(){
    include 'conn.php';
    $data=array();
    $sql="select * from products";
    $result = $conn->query($sql);

    while($row = $result-> fetch_assoc())
{
    array_push($data,$row);
}       
  return $data;  
}
function getsingleproduct($id){
    include 'conn.php';
    $sql = "select * from products where id = '$id'";
    $result = $conn->query($sql);
    $row = $result -> fetch_assoc();
    return $row;


}
function getcart($userid){
    include 'conn.php';
    $data=array();
    $sql="select * from cart where userid='$userid'";
    $result = $conn->query($sql);

    while($row = $result-> fetch_assoc())
{
    array_push($data,$row);
}       
  return $data;  


}


function getproductsbycategory($category){
    include 'conn.php';
    $data=array();
    $sql="select * from products where category='$category'";
    $result = $conn->query($sql);

    while($row = $result-> fetch_assoc())
{
    array_push($data,$row);
}       
  return $data;  
}


?>