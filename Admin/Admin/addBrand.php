<?php
include("connection.php");
include("header.php");
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add the court name of lawyer </h6>

                <form method="post">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">court Name</label>
                        <input type="text" name="court_name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <button name="submitBtn" type="submit" class="btn btn-primary">Add     </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 
if(isset($_POST["submitBtn"])){
   $bn = $_POST["court_name"];

    $ins = "INSERT INTO court(court_name) VALUES ('$bn')";
    $done = mysqli_query($conn, $ins);

       if($done){
      echo "<script>
      alert('Record Inserted');
      window.location.href='viewcourt.php';
      </script>";
   }
}



include("footer.php");
?>