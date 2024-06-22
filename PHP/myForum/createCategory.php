<?php include 'Assets/config.php'; ?>

<?php
    if(isset($_GET['error']))
    {
        $error = $_GET['error'];
    } 
    elseif(isset($_GET['success']))
    {
        $success = $_GET['success'];
    }
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
    <?php include 'header.php'; ?>
    <h2 class="text-center">Create a New Category</h2>
    <?php if(isset($error)): ?>
        <div class="alert error">
            <h3><?php echo $error; ?></h3>
        </div>
    <?php elseif(isset($success)): ?>
        <div class="alert success">
            <h3><?php echo $success; ?></h3>
        </div>
    <?php endif; ?>
    <form action="create_category.php" class="createForm" method="post">
        <div class="form-group">
            <label for="category_name">Category Name:</label>
            <input type="text" id="category_name" name="category_name"><br><br>
        </div>
        <div class="form-group">
            <label for="category_imgUrl">Image URL:</label>
            <input type="text" id="category_imgUrl" name="category_imgUrl"><br><br>
        </div>
        <div class="form-group">
            <label for="category_class">Category Class:</label>
            <input type="text" id="category_class" name="category_class"><br><br>
        </div>
        <div class="form-group">
            <label for="category_imgAlt">Image Alt Text:</label>
            <input type="text" id="category_imgAlt" name="category_imgAlt"><br><br>
        </div>
        <input type="submit" value="Create Category" class="createCategory">
    </form>
    <p class="createP">To create sub-category - <a href="createSubcategory.php">Click here</a></p>
    <?php include 'footer.php'; ?>
    </div>
</body>
</html>