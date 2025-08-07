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
                <h6 class="mb-4">SIGN UP AS LAWYER</h6>

                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_Name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Father Name</label>
                        <input type="text" name="father_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="user_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input class="form-control" type="file" name="profile_image">
                    </div>

                    <h6 class="mb-4">Enter Your Full Address</h6>

                    <div class="mb-3">
                        <label class="form-label">House/Building/Street</label>
                        <input type="text" name="House" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CNIC No</label>
                        <input type="number" name="CNIC" class="form-control" placeholder="xxxxx-xxxxxxx-x">
                    </div>

                    <label class="form-label">Date Of Birth</label>
                    <div class="input-wrapper">
                        <input type="date" name="dob" required class="form-control">
                    </div><br>

                    <label class="form-label">Select Your Gender *</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Male" checked>
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="Female">
                        <label class="form-check-label">Female</label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="gender" value="Transgender">
                        <label class="form-check-label">Transgender</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="phone" class="form-control" maxlength="11" pattern="\d{11}" required oninput="this.value = this.value.replace(/\D/g, '')">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Whatsapp Number</label>
                        <input type="text" name="Whatsapp" class="form-control" maxlength="11" pattern="\d{11}" required oninput="this.value = this.value.replace(/\D/g, '')">
                    </div>

                    <h6 class="mb-4">Qualifications</h6>
                    <label class="form-label">Select Degrees You Hold</label>
                    <select name="degree" class="form-select mb-3">
                        <option disabled selected>Select degree</option>
                        <?php while($fetdeg = mysqli_fetch_assoc($degreeq)){ ?>
                        <option value="<?php echo $fetdeg["degree_id"] ?>"><?php echo $fetdeg["degree_name"] ?></option>
                        <?php } ?>
                    </select>

                    <div class="mb-3">
                        <label class="form-label">University/College</label>
                        <input type="text" name="University" class="form-control">
                    </div>

                    <label class="form-label">Your LLB Degree Completion Date</label>
                    <div class="input-wrapper">
                        <input type="date" name="doc" required class="form-control">
                    </div><br>

                    <div class="mb-3">
                        <label class="form-label">City of Legal Practice</label>
                        <input type="text" name="City" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Enrolment Year</label>
                        <input type="text" name="Enrolment" class="form-control" maxlength="4" pattern="\d{4}" required oninput="this.value = this.value.replace(/\D/g, '').slice(0,4);">
                    </div>

                    <label class="form-label">Enrolment Type (Court)</label>
                    <select name="c_id" class="form-select mb-3">
                        <option disabled selected>Select court</option>
                        <?php while($fetcourt = mysqli_fetch_assoc($courtq)){ ?>
                        <option value="<?php echo $fetcourt["court_id"] ?>"><?php echo $fetcourt["court_name"] ?></option>
                        <?php } ?>
                    </select>

                    <div class="mb-3">
                        <label class="form-label">Bar License Number</label>
                        <input type="text" name="License" class="form-control" maxlength="7" pattern="\d{7}" required oninput="this.value = this.value.replace(/\D/g, '').slice(0,7);">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Upload Front Picture of Bar License</label>
                        <input class="form-control" type="file" name="licence_image">
                    </div>

                    <label class="form-label">Select Expertise (Category)</label>
                    <select name="e_id" class="form-select mb-3">
                        <option disabled selected>Select Category</option>
                        <?php while($fetCat = mysqli_fetch_assoc($catq)){ ?>
                        <option value="<?php echo $fetCat["category_id"] ?>"><?php echo $fetCat["category_name"] ?></option>
                        <?php } ?>
                    </select>

                    <div class="mb-3">
                        <label class="form-label">Address of Your Office</label>
                        <input type="text" name="Address" class="form-control">
                    </div>

                    <button name="submitBtn" type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["submitBtn"])) {
    $fn = $_POST["full_Name"];
    $ftn = $_POST["father_name"];
    $un = $_POST["user_name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $house = $_POST["House"];
    $cn = $_POST["CNIC"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $Whatsapp = $_POST["Whatsapp"];
    $degree = $_POST["degree"];
    $University = $_POST["University"];
    $doc = $_POST["doc"];
    $City = $_POST["City"];
    $Enrolment = $_POST["Enrolment"];
    $cid = $_POST["c_id"];
    $license = $_POST["License"];
    $address = $_POST["Address"];
    $eid = $_POST["e_id"];

    // Profile image
    $pi = $_FILES["profile_image"];
    $pi_name = $pi["name"];
    $pi_tmp = $pi["tmp_name"];
    $pi_path = "image/" . $pi_name;
    move_uploaded_file($pi_tmp, $pi_path);

    // License image
    $li = $_FILES["licence_image"];
    $li_name = $li["name"];
    $li_tmp = $li["tmp_name"];
    $li_path = "image/" . $li_name;
    move_uploaded_file($li_tmp, $li_path);

    // Insert query
    $ins = "INSERT INTO lawyers (
        full_Name, father_name, user_name, email, `password`, profile_image,
        House_address, CNIC, dob, Gender, phone, Whatsapp, degree_id,
        University, Completion, City, Enrolment_Year, court_id, License,
        licence_image, category_id, Office
    ) VALUES (
        '$fn', '$ftn', '$un', '$email', '$pass', '$pi_name',
        '$house', '$cn', '$dob', '$gender', '$phone', '$Whatsapp', '$degree',
        '$University', '$doc', '$City', '$Enrolment', '$cid', '$license',
        '$li_name', '$eid', '$address'
    )";

    $done = mysqli_query($conn, $ins);

    if ($done) {
        echo "<script>
            alert('Record Inserted');
            window.location.href='viewlawyercopy.php';
        </script>";
    } else {
        echo "<script>alert('Error inserting record');</script>";
    }
}

include("footer.php");
?>
