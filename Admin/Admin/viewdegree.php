<?php 
include("connection.php");
include("header.php");

$sel = "SELECT * FROM degree";
$q = mysqli_query($conn, $sel);
?>


<body>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>degree Id</th>
            <th>degree Name</th>
            <th>Action</th>
        </tr>
<?php
        while($fetch = mysqli_fetch_assoc($q)){
?>
        <tr>
            <td> <?php echo $fetch["degree_id"] ?> </td>
            <td> <?php echo $fetch["degree_name"] ?> </td>
            <td>
                <a class="btn btn-warning" href="updatedegree.php?id=<?php echo $fetch["degree_id"] ?>">Edit</a>
                <a class="btn btn-danger" href="deletedegree.php?id=<?php echo $fetch["degree_id"] ?>">Delete</a>
            </td>
        </tr>
      <?php  } ?>
    </table>

<?php 
include("footer.php");
?>