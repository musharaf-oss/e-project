<?php 
include("connection.php");
include("header.php");

$sel = "SELECT * FROM court";
$q = mysqli_query($conn, $sel);
?>


<body>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>court Id</th>
            <th>court Name</th>
            <th>Action</th>
        </tr>
<?php
        while($fetch = mysqli_fetch_assoc($q)){
?>
        <tr>
            <td> <?php echo $fetch["court_id"] ?> </td>
            <td> <?php echo $fetch["court_name"] ?> </td>
            <td>
                <a class="btn btn-warning" href="updatecourt.php?id=<?php echo $fetch["court_id"] ?>">Edit</a>
                <a class="btn btn-danger" href="deletecourt.php?id=<?php echo $fetch["court_id"] ?>">Delete</a>
            </td>
        </tr>
      <?php  } ?>
    </table>

<?php 
include("footer.php");
?>