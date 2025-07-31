<?php
include("connection.php");
include("header.php");

$selCat = "SELECT * FROM category";
$catq = mysqli_query($conn, $selCat);

$selBrand = "SELECT * FROM brand";
$brandq = mysqli_query($conn, $selBrand);

?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add Product</h6>

                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Price</label>
                        <input type="number" name="product_price" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Description</label>
                        <input type="text" name="product_desc" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Image</label>
                        <input type="file" name="product_image" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <select name="c_id" class="form-select mb-3" aria-label="Default select example">
                        <option disabled selected>Select Category</option>
                        <?php while($fetCat = mysqli_fetch_assoc($catq)){ ?>
                        <option value="<?php echo $fetCat["category_id"] ?>"><?php echo $fetCat["category_name"] ?></option>
                        <?php } ?>
                    </select>

                    <select name="b_id" class="form-select mb-3" aria-label="Default select example">
                        <option disabled selected>Select Brand</option>
                        <?php while($fetBrand = mysqli_fetch_assoc($brandq)){ ?>
                        <option value="1"><?php echo $fetBrand["brand_name"] ?></option>
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