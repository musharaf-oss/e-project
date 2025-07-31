<?php 
include("connection.php");
include("header.php");

$sel = "SELECT * FROM role";
$q = mysqli_query($conn, $sel);
?>


<body>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Role Id</th>
            <th>Role Name</th>
            <th>Action</th>
        </tr>
<?php
        while($fetch = mysqli_fetch_assoc($q)){
?>
        <tr>
            <td> <?php echo $fetch["role_id"] ?> </td>
            <td> <?php echo $fetch["role_name"] ?> </td>
            <td>
                <a class="btn btn-warning" href="updateRole.php?id=<?php echo $fetch["role_id"] ?>">Edit</a>
                <a class="btn btn-danger" href="deleteRole.php?id=<?php echo $fetch["role_id"] ?>">Delete</a>
            </td>
        </tr>
      <?php  } ?>
    </table>

<?php 
include("footer.php");
?>