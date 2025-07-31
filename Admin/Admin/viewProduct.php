<?php 
include("connection.php");
include("header.php");

$sel = "SELECT products.*, category.category_name, brand.brand_name FROM products
INNER JOIN category
ON products.category_id = category.category_id
INNER JOIN brand
ON products.brand_id = brand.brand_id";
$q = mysqli_query($conn, $sel);
?>


<body>
    <table class="table table-striped">
        <tr class="table-dark">
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Description</th>
            <th>Category Name</th>
            <th>Brand Name</th>
            <th>Product Image</th>
            <th>Action</th>
        </tr>
<?php
        while($fetch = mysqli_fetch_assoc($q)){
?>
        <tr>
            <td> <?php echo $fetch["product_id"] ?> </td>
            <td> <?php echo $fetch["product_name"] ?> </td>
            <td> <?php echo $fetch["product_price"] ?> </td>
            <td> <?php echo $fetch["product_description"] ?> </td>
            <td> <?php echo $fetch["category_name"] ?> </td>
            <td> <?php echo $fetch["brand_name"] ?> </td>
            <td> <img src="image/<?php echo $fetch["product_image"] ?>" alt="" width="100px"> </td>
            <td>
                <a class="btn btn-warning" href="updateProduct.php?id=<?php echo $fetch["product_id"] ?>">Edit</a>
                <a class="btn btn-danger" href="deleteProduct.php?id=<?php echo $fetch["product_id"] ?>">Delete</a>
            </td>
        </tr>
      <?php  } ?>
    </table>

<?php 
include("footer.php");
?>