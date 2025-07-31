<?php 
include("connection.php");
include("header.php");

$sel = "SELECT * FROM brand";
$q = mysqli_query($conn, $sel);
?>


<body>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Brand Id</th>
            <th>Brand Name</th>
            <th>Action</th>
        </tr>
<?php
        while($fetch = mysqli_fetch_assoc($q)){
?>
        <tr>
            <td> <?php echo $fetch["brand_id"] ?> </td>
            <td> <?php echo $fetch["brand_name"] ?> </td>
            <td>
                <a class="btn btn-warning" href="updateBrand.php?id=<?php echo $fetch["brand_id"] ?>">Edit</a>
                <a class="btn btn-danger" href="deleteBrand.php?id=<?php echo $fetch["brand_id"] ?>">Delete</a>
            </td>
        </tr>
      <?php  } ?>
    </table>

<?php 
include("footer.php");
?>