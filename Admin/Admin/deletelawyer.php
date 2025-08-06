<?php 
include("connection.php");

$getId = $_GET["id"];

$del = "DELETE FROM products WHERE product_id = '$getId'";
$done = mysqli_query($conn, $del);

if($done){
    echo "<script>
    alert('Record Deleted');
    window.location.href='viewProduct.php';
    </script>";
 }
?>