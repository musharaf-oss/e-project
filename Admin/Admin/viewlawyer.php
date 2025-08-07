<?php 
include("connection.php");
include("header.php");

// Query with all inner joins
$query = "SELECT lawyers.*, category.category_name, court.court_name, degree.degree_name FROM lawyers
INNER JOIN category ON lawyers.category_id = category.category_id
INNER JOIN court ON lawyers.court_id = court.court_id
INNER JOIN degree ON lawyers.degree_id = degree.degree_id";

$result = mysqli_query($conn, $query);
?>

<div class="container py-5">
    <h2 class="mb-4 text-center">Registered Lawyers</h2>
    <div class="row g-4">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-6 col-lg-4">
            <div class="card shadow h-100">
                <img src="image/<?php echo $row['profile_image']; ?>" class="card-img-top" alt="Lawyer Image" style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['full_Name']; ?></h5>
                    <p class="card-text"><strong>lawyers_id:</strong> <?php echo $row['lawyers_id']; ?></p>
                    <p class="card-text"><strong>Father's Name:</strong> <?php echo $row['father_name']; ?></p>
                    <p class="card-text"><strong>Email:</strong> <?php echo $row['email']; ?></p>
                    <p class="card-text"><strong>Phone:</strong> <?php echo $row['phone']; ?></p>
                    <p class="card-text"><strong>Whatsapp:</strong> <?php echo $row['Whatsapp']; ?></p>
                    <p class="card-text"><strong>Gender:</strong> <?php echo $row['Gender']; ?></p>
                    <p class="card-text"><strong>Degree:</strong> <?php echo $row['degree_name']; ?></p>
                    <p class="card-text"><strong>University:</strong> <?php echo $row['University']; ?></p>
                    <p class="card-text"><strong>Completion Date:</strong> <?php echo $row['Completion']; ?></p>
                    <p class="card-text"><strong>Court:</strong> <?php echo $row['court_name']; ?></p>
                    <p class="card-text"><strong>Category:</strong> <?php echo $row['category_name']; ?></p>
                    <p class="card-text"><strong>City:</strong> <?php echo $row['City']; ?></p>
                    <p class="card-text"><strong>License No:</strong> <?php echo $row['License']; ?></p>
                    <p class="card-text"><strong>Office Address:</strong> <?php echo $row['Office']; ?></p>
                    <p class="card-text"><strong>CNIC:</strong> <?php echo $row['CNIC']; ?></p>
                    <p class="card-text"><strong>Date of Birth:</strong> <?php echo $row['dob']; ?></p>
                    <a href="image/<?php echo $row['licence_image']; ?>" target="_self" class="btn btn-sm btn-outline-primary">View Bar License</a>
                    
                <a class="btn btn-warning" href="updatelawyer.php?id=<?php echo $row["lawyers_id"]; ?>">Edit</a>
<a class="btn btn-danger" href="deletelawyer.php?id=<?php echo $row["lawyers_id"]; ?>" onclick="return confirm('Are you sure you want to delete this lawyer?')">Delete</a>

             
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php include("footer.php"); ?>
