<?php 
include("connection.php");
include("header.php");

$getId = $_GET["id"];

// Fetch existing lawyer record
$sel1 = "SELECT lawyers.*, category.category_name, court.court_name, degree.degree_name 
        FROM lawyers
        INNER JOIN category ON lawyers.category_id = category.category_id
        INNER JOIN court ON lawyers.court_id = court.court_id
        INNER JOIN degree ON lawyers.degree_id = degree.degree_id
        WHERE lawyers.lawyers_id = $getId";
$q1 = mysqli_query($conn, $sel1);
$fetPro = mysqli_fetch_assoc($q1);

// Fetch select dropdown values
$catq = mysqli_query($conn, "SELECT * FROM category");
$courtq = mysqli_query($conn, "SELECT * FROM court");
$degreeq = mysqli_query($conn, "SELECT * FROM degree");

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
    $pi_name = $fetPro["profile_image"];
    if ($_FILES["profile_image"]["name"]) {
        $pi = $_FILES["profile_image"];
        $pi_name = $pi["name"];
        $pi_tmp = $pi["tmp_name"];
        move_uploaded_file($pi_tmp, "image/" . $pi_name);
    }

    // License image
    $li_name = $fetPro["licence_image"];
    if ($_FILES["licence_image"]["name"]) {
        $li = $_FILES["licence_image"];
        $li_name = $li["name"];
        $li_tmp = $li["tmp_name"];
        move_uploaded_file($li_tmp, "image/" . $li_name);
    }

    $update = "UPDATE lawyers SET 
        full_Name='$fn',
        father_name='$ftn',
        user_name='$un',
        email='$email',
        `password`='$pass',
        profile_image='$pi_name',
        House_address='$house',
        CNIC='$cn',
        dob='$dob',
        Gender='$gender',
        phone='$phone',
        Whatsapp='$Whatsapp',
        degree_id='$degree',
        University='$University',
        Completion='$doc',
        City='$City',
        Enrolment_Year='$Enrolment',
        court_id='$cid',
        License='$license',
        licence_image='$li_name',
        category_id='$eid',
        Office='$address'
        WHERE lawyers_id=$getId";

    $done = mysqli_query($conn, $update);

    if ($done) {
        echo "<script>
            alert('Record Updated');
            window.location.href='viewlawyercopy.php';
        </script>";
    } else {
        echo "<script>alert('Update Failed');</script>";
    }
}
?>

<!-- FORM DISPLAY -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Update Lawyer Info</h6>
                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_Name" class="form-control" value="<?= $fetPro['full_Name'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Father Name</label>
                        <input type="text" name="father_name" class="form-control" value="<?= $fetPro['father_name'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="user_name" class="form-control" value="<?= $fetPro['user_name'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?= $fetPro['email'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" value="<?= $fetPro['password'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input class="form-control" type="file" name="profile_image">
                        <img src="image/<?= $fetPro['profile_image'] ?>" width="100" class="mt-2">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input type="text" name="House" class="form-control" value="<?= $fetPro['House_address'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">CNIC</label>
                        <input type="text" name="CNIC" class="form-control" value="<?= $fetPro['CNIC'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">DOB</label>
                        <input type="date" name="dob" class="form-control" value="<?= $fetPro['dob'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Gender</label><br>
                        <label><input type="radio" name="gender" value="Male" <?= $fetPro['Gender'] == 'Male' ? 'checked' : '' ?>> Male</label>
                        <label><input type="radio" name="gender" value="Female" <?= $fetPro['Gender'] == 'Female' ? 'checked' : '' ?>> Female</label>
                        <label><input type="radio" name="gender" value="Transgender" <?= $fetPro['Gender'] == 'Transgender' ? 'checked' : '' ?>> Transgender</label>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" value="<?= $fetPro['phone'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Whatsapp</label>
                        <input type="text" name="Whatsapp" class="form-control" value="<?= $fetPro['Whatsapp'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Degree</label>
                        <select name="degree" class="form-select">
                            <option disabled>Select degree</option>
                            <?php while($deg = mysqli_fetch_assoc($degreeq)) { ?>
                            <option value="<?= $deg['degree_id'] ?>" <?= $deg['degree_id'] == $fetPro['degree_id'] ? 'selected' : '' ?>>
                                <?= $deg['degree_name'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">University</label>
                        <input type="text" name="University" class="form-control" value="<?= $fetPro['University'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">LLB Completion Date</label>
                        <input type="date" name="doc" class="form-control" value="<?= $fetPro['Completion'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="City" class="form-control" value="<?= $fetPro['City'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Enrolment Year</label>
                        <input type="text" name="Enrolment" class="form-control" value="<?= $fetPro['Enrolment_Year'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Court</label>
                        <select name="c_id" class="form-select">
                            <option disabled>Select court</option>
                            <?php while($c = mysqli_fetch_assoc($courtq)) { ?>
                            <option value="<?= $c['court_id'] ?>" <?= $c['court_id'] == $fetPro['court_id'] ? 'selected' : '' ?>>
                                <?= $c['court_name'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bar License Number</label>
                        <input type="text" name="License" class="form-control" value="<?= $fetPro['License'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">License Image</label>
                        <input class="form-control" type="file" name="licence_image">
                        <img src="image/<?= $fetPro['licence_image'] ?>" width="100" class="mt-2">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="e_id" class="form-select">
                            <option disabled>Select Category</option>
                            <?php while($cat = mysqli_fetch_assoc($catq)) { ?>
                            <option value="<?= $cat['category_id'] ?>" <?= $cat['category_id'] == $fetPro['category_id'] ? 'selected' : '' ?>>
                                <?= $cat['category_name'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Office Address</label>
                        <input type="text" name="Address" class="form-control" value="<?= $fetPro['Office'] ?>">
                    </div>

                    <button name="submitBtn" type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
