<?php include 'config.php'; ?>

<?php
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    }

    if(isset($_GET['success']))
    {
        $success = $_GET['success'];
    }

    $minPrice = isset($_GET['minPrice']) ? $_GET['minPrice'] : 1;
    $maxPrice = isset($_GET['maxPrice']) ? $_GET['maxPrice'] : 1000;

    $sql = "SELECT * FROM products WHERE price BETWEEN $minPrice AND $maxPrice";
    $query = mysqli_query($conn, $sql);
    $sql2 = "SELECT * FROM products WHERE sale = 1";
    $query2 = mysqli_query($conn, $sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form id="priceFilter" class="priceFilter" action="priceProcess.php" method="POST">
            <input type="number" name="minPrice" min="1" max="1000" value="<?php echo $minPrice; ?>" placeholder="$ {Min}">
            <div class="divider"> ~ </div>
            <input type="number" name="maxPrice" min="1" max="1000" value="<?php echo $maxPrice; ?>" placeholder="$ {Max}">
            <input type="submit" value="Submit">
        </form>
        <h1 class="productsTitle">Products: </h1>
            <div class="products">
                <?php while($row = mysqli_fetch_assoc($query)): ?>
                    <div class="product">

                        <h3><?php echo $row['productName']; ?></h3>
                        <img src="<?php echo $row['img']; ?>" alt="productImage" width="100%" height="auto">
                        <h5><?php echo $row['description']; ?></h5>
                        <h6>$ <?php echo $row['price']; ?></h6>
                        <button class="addToCart button">Add to cart</button>
                        <button class="buyNow button">Buy now</button>
                    </div>
                <?php endwhile; ?>
            </div>
            <?php if(mysqli_num_rows($query) == 0): ?>
                <p class="noProducts">No Products in this price range.</p>
            <?php endif; ?>
    </div>
</body>
</html>