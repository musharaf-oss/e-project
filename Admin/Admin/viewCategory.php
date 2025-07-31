<?php 
include("connection.php");
include("header.php");

$sel = "SELECT * FROM category";
$q = mysqli_query($conn, $sel);
?>


<body>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Category Id</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>
<?php
        while($fetch = mysqli_fetch_assoc($q)){
?>
        <tr>
            <td> <?php echo $fetch["category_id"] ?> </td>
            <td> <?php echo $fetch["category_name"] ?> </td>
            <td>
                <a class="btn btn-warning" href="updateCategory.php?id=<?php echo $fetch["category_id"] ?>">Edit</a>
                <a class="btn btn-danger" href="deleteCategory.php?id=<?php echo $fetch["category_id"] ?>">Delete</a>
            </td>
        </tr>
      <?php  } ?>
    </table>

<?php 
include("footer.php");
?>