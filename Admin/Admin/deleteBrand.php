<?php 
include("connection.php");

$getId = $_GET["id"];

$del = "DELETE FROM brand WHERE brand_id = '$getId'";
$done = mysqli_query($conn, $del);

if($done){
    echo "<script>
    alert('Record Deleted');
    window.location.href='viewBrand.php';
    </script>";
 }
?>