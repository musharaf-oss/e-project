<?php 
include("connection.php");
include("header.php");

$getId = $_GET["id"];

$sel = "SELECT * FROM role WHERE role_id = '$getId'";
$q = mysqli_query($conn, $sel);

$fetch = mysqli_fetch_assoc($q);
//print_r($fetch);
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Update Role</h6>

                <form method="post">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Role Name</label>
                        <input type="text" name="role_name" value="<?php echo $fetch["role_name"] ?>" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <button name="submitBtn" type="submit" class="btn btn-primary">Update Role</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 
if(isset($_POST["submitBtn"])){
   $rn = $_POST["role_name"];

       $upd = "UPDATE role SET role_name = '$rn' WHERE role_id = '$getId'";
       $done = mysqli_query($conn, $upd);

       if($done){
        echo "<script>
        alert('Record Updated');
        window.location.href='viewRole.php';
        </script>";
     }
}

?>