<?php 
$admin =0;
if(isset($_SESSION['isAdmin'])){
    $admin = $_SESSION['isAdmin'];
}
if($admin){
    header("location: admin/home.php");

}

?>