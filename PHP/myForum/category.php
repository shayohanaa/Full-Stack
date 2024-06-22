<?php include 'Assets/config.php'; ?>
<?php
    if(isset($_GET['category_id']))
    {
        $category_id = $_GET['category_id'];
    }
    if(isset($_GET['category_name']))
    {
        $categoryName = $_GET['category_name'];
    }


    $query = "SELECT * FROM categories WHERE id = '$category_id'";
    $result = mysqli_query($conn, $query);
    $categoryRow = mysqli_fetch_assoc($result);
    print_r($categoryRow);

    $query1 = "SELECT * FROM subcategories WHERE category_id = '$category_id'";
    $result1 = mysqli_query($conn, $query1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/categories.css">
    <title><?php echo $categoryName; ?></title>
</head>
<body>
<div class="container">
    <?php include 'header.php'; ?>
    <div class="category">
        <h2 class="text-center"><?php echo $categoryRow['category_name']; ?></h2>
        <div class="subcategories">
            <?php while($subcategoryRow = mysqli_fetch_assoc($result1)): ?>
                <div class="innersubcategory">
                    <!-- <a href="<?php echo $subcategoryRow['subcategory_url']; ?>"> -->
                    <a href="subcategory.php?categoryName=<?php echo $subcategoryRow['subcategory_name']; ?>&categoryId=<?php echo $subcategoryRow['id']; ?>">
                        <h4><?php echo $subcategoryRow['subcategory_name']; ?></h4>
                        <img src="<?php echo $subcategoryRow['subcategory_imgUrl']; ?>" alt="<?php echo $subcategoryRow['subcategory_imgAlt']; ?>" width="100%" height="100px">
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <br>
    <?php include 'footer.php'; ?>
</div>
</body>
</html>