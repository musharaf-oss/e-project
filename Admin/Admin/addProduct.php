<?php
include("connection.php");
include("header.php");

$selCat = "SELECT * FROM category";
$catq = mysqli_query($conn, $selCat);

$selcourt = "SELECT * FROM court";
$courtq = mysqli_query($conn, $selcourt);

$seldeg = "SELECT * FROM degree";
$degreeq = mysqli_query($conn, $seldeg);

?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Enter Your Information</h6>

                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">first_Name</label>
                        <input type="text" name="first_name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">last_name</label>
                        <input type="text" name="last_name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">father_name</label>
                        <input type="text" name="father_name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">user_name</label>
                        <input type="text" name="user_name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                      <div class="mb-3">
                                <label for="formFile" class="form-label">profile_image (choose a profile image for your profile)</label>
                                <input class="form-control" type="file" id="formFile" name='profile_image' >
                            </div>

                   

   <h6 class="mb-4"> Enter Your Full Address</h6>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">House/Building/Plot/Street/Road</label>
                        <input type="text" name="House" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                  <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">CNIC No</label>
                        <input type="text" name="CNIC" class="form-control" id="exampleInputEmail1" placeholder='xxxxx-xxxxxxx-x'
                            aria-describedby="emailHelp">
                    </div>
                     <label for="exampleInputEmail1" class="form-label">Date Of Birth</label>
                 <div class="input-wrapper">
                      <i class="fas fa-calendar-alt"></i>
                  <input type="date" id="dob" name="dob" required >
                </div><br>
                 <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Select Your Gender  *</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                               Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Female
                                            </label>
                                            </div>
                              <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Transgender
                                            </label>
                                            </div>
  </div>
<br>
                 <div class="mb-3">
     <label for="exampleInputEmail1" class="form-label">Martial Status  *</label>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                              Single
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Married
                                            </label>
                                            </div>
                              <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Transgender
                                            </label>
                                            </div>

                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Divorced
                                            </label>
                                            </div>


                                                <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Widowed
                                            </label>
                                            </div>
</div><br>
      <div class="mb-3">
  <label for="phone" class="form-label">Phone Number</label>
  <input type="text"  name="phone"  class="form-control"  id="phone"  placeholder="xxxxxxxxxxx"  maxlength="11"  pattern="\d{11}"  required  oninput="this.value = this.value.replace(/\D/g, '')" >
</div>
 
<div class="mb-3">
  <label for="phone" class="form-label">Watsapp Number</label>
  <input type="text"  name="phone"  class="form-control"  id="phone"  placeholder="xxxxxxxxxxx"  maxlength="11"  pattern="\d{11}"  required  oninput="this.value = this.value.replace(/\D/g, '')" >
</div>



  <h6 class="mb-4">Qualifications</h6>
<label for="degree" class="form-label">Select Degrees You Hold</label>
   <select name="d_id" class="form-select mb-3" aria-label="Default select example">
                        <option disabled selected>Select degree</option>
                        <?php while($fetdeg = mysqli_fetch_assoc($degreeq)){ ?>
                        <option value="<?php echo $fetdeg["degree_id"] ?>"><?php echo $fetdeg["degree_name"] ?></option>
                        <?php } ?>
                    </select>


  <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">University/College</label>
                        <input type="text" name="University" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

      <label for="exampleInputEmail1" class="form-label">Your LLB Degree Completion Date</label>
                 <div class="input-wrapper">
                      <i class="fas fa-calendar-alt"></i>
                  <input type="date" id="dob" name="doc" required >
                </div><br>


                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">City of Legal Practice</label>
                        <input type="text" name="City" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

<div class="mb-3">
  <label for="Enrolment" class="form-label">Enrolment Year</label>
  <input  type="text"  name="Enrolment"  class="form-control"  id="Enrolment"  maxlength="4" pattern="\d{4}" required  oninput="this.value = this.value.replace(/\D/g, '').slice(0,4);" />
</div>

<label for="Type" class="form-label">Enrolment Type</label>
                    <select name="b_id" class="form-select mb-3" aria-label="Default select example">
                        <option disabled selected>Select court</option>
                        <?php while($fetcourt = mysqli_fetch_assoc($courtq)){ ?>
                        <option value="1"><?php echo $fetcourt["court_name"] ?></option>
                        <?php } ?>
                    </select>

<label for="Expertise" class="form-label">Select Expertise</label>
                    <select name="c_id" class="form-select mb-3" aria-label="Default select example">
                        <option disabled selected>Select Category</option>
                        <?php while($fetCat = mysqli_fetch_assoc($catq)){ ?>
                        <option value="<?php echo $fetCat["category_id"] ?>"><?php echo $fetCat["category_name"] ?></option>
                        <?php } ?>
                    </select>

                <button name="submitBtn" type="submit" class="btn btn-primary">Add Product</button>
                </form>
            
            </div>
        </div>
    </div>
</div>

<?php 
if(isset($_POST["submitBtn"])){
   $pn = $_POST["product_name"];
   $pp = $_POST["product_price"];
   $pd = $_POST["product_desc"];
   $cid = $_POST["c_id"];
   $bid = $_POST["b_id"];
   $pi = $_FILES["product_image"]; //Image data comes in form of Array

$img_name = $pi["name"];
$img_tmp = $pi["tmp_name"];
$img_type = $pi["type"];
$img_size = $pi["size"];

$img_path = "image/" . $img_name;

$moved = move_uploaded_file($img_tmp, $img_path);

if($moved){
    $ins = "INSERT INTO products(product_name, product_price, product_description, product_image, category_id, brand_id) VALUES ('$pn', '$pp', '$pd', '$img_name', '$cid', '$bid')";
    $done = mysqli_query($conn, $ins);

       if($done){
      echo "<script>
      alert('Record Inserted');
      window.location.href='viewProduct.php';
      </script>";
   }
}
}



include("footer.php");
?>