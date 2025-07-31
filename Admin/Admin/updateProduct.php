<?php 
include("connection.php");
include("header.php");

$getId = $_GET["id"];

$sel1 = "SELECT products.*, category.category_name, brand.brand_name FROM products
INNER JOIN category
ON products.category_id = category.category_id
INNER JOIN brand
ON products.brand_id = brand.brand_id";
$q1 = mysqli_query($conn, $sel1);

$fetPro = mysqli_fetch_assoc($q1);

$sel2 = "SELECT * FROM category";
$catq = mysqli_query($conn, $sel2);

$sel3 = "SELECT * FROM brand";
$brandq = mysqli_query($conn, $sel3);
?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Update Product</h6>

                <form method="post" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" value="<?php echo $fetPro["product_name"] ?>" name="product_name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Price</label>
                        <input type="number" value="<?php echo $fetPro["product_price"] ?>" name="product_price" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Description</label>
                        <input type="text" value="<?php echo $fetPro["product_description"] ?>" name="product_desc" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Image</label>
                        <input type="file" value="<?php echo $fetPro["product_image"] ?>" name="product_image" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <select name="c_id" class="form-select mb-3" aria-label="Default select example">
                        <option disabled selected>Select Category</option>
                        <?php while($fetCat = mysqli_fetch_assoc($catq)){ ?>
                        <option value="<?php echo $fetCat["category_id"] ?>" <?php if($fetCat['category_id'] == $fetPro['category_id']){echo 'selected';} ?>><?php echo $fetCat["category_name"] ?></option>
                        <?php } ?>
                    </select>

                    <select name="b_id" class="form-select mb-3" aria-label="Default select example">
                        <option disabled selected>Select Category</option>
                        <?php while($fetBrand = mysqli_fetch_assoc($brandq)){ ?>
                        <option value="<?php echo $fetBrand["brand_id"] ?>" <?php if($fetPro['brand_id'] == $fetBrand['brand_id']){echo 'selected';} ?>><?php echo $fetBrand["brand_name"] ?></option>
                        <?php } ?>
                    </select>

                    <button name="submitBtn" type="submit" class="btn btn-primary">Update Product</button>
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
   $pi = $_FILES["product_image"]; //Image data comes in form of Array

   $cid = $_POST["c_id"];
   $bid = $_POST["b_id"];

   $img_name = $pi["name"];
   $img_tmp = $pi["tmp_name"];
   //$img_type = $pi["type"];
   //$img_size = $pi["size"];
   
   $img_path = "image/" . $img_name;

   if(is_uploaded_file($img_tmp)){
       
       $moved = move_uploaded_file($img_tmp, $img_path);

       $upd = "UPDATE products SET product_name = '$pn', product_price = '$pp', product_description = '$pd', product_image = '$img_name', category_id = '$cid', brand_id = '$bid' WHERE product_id = '$getId'";
       $done = mysqli_query($conn, $upd);

       if($done){
        echo "<script>
        alert('Record Updated');
        window.location.href='viewProduct.php';
        </script>";
     }
   }

   else{
    $upd = "UPDATE products SET product_name = '$pn', product_price = '$pp', product_description = '$pd', category_id = '$cid', brand_id = '$bid' WHERE product_id = '$getId'";
    $done = mysqli_query($conn, $upd);

    if($done){
     echo "<script>
     alert('Record Updated');
     window.location.href='viewProduct.php';
     </script>";
   }

}
}

?>