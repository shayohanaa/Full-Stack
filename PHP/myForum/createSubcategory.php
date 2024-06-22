<?php include 'Assets/config.php'; ?>
<?php
    $query = "SELECT * FROM categories";
    $categories = mysqli_query($conn, $query);
?>

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
    <h2 class="text-center">Create a New Subcategory</h2>
    <?php if(isset($error)): ?>
        <div class="alert error">
            <h3><?php echo $error; ?></h3>
        </div>
    <?php elseif(isset($success)): ?>
        <div class="alert success">
            <h3><?php echo $success; ?></h3>
        </div>
    <?php endif; ?>
    <form action="create_subcategory.php" class="createForm" method="post">
        <div class="form-group">
            <label for="subcategory_name">Subcategory Name:</label>
            <input type="text" id="subcategory_name" name="subcategory_name"><br><br>
        </div>
        <!-- <div class="form-group">
            <label for="subcategory_url">Subcategory URL:</label>
            <input type="text" id="subcategory_url" name="subcategory_url"><br><br>
        </div> -->
        <div class="form-group">
            <label for="subcategory_class">Subcategory Class:</label>
            <input type="text" id="subcategory_class" name="subcategory_class"><br><br>
        </div>
        <div class="form-group">
            <label for="subcategory_imgUrl">Image URL:</label>
            <input type="text" id="subcategory_imgUrl" name="subcategory_imgUrl"><br><br>
        </div>
        <div class="form-group">
            <label for="subcategory_imgAlt">Image Alt Text:</label>
            <input type="text" id="subcategory_imgAlt" name="subcategory_imgAlt"><br><br>
        </div>
        <div class="form-group">
            <label for="subcategory_imgAlt">Category Parent:</label>
            <select name="category_id" id="categorySelect" class="categorySelect">
                <option value="select" class="text-center">Select a category</option>
            <?php while($row = mysqli_fetch_assoc($categories)): ?>
            <option value="<?php echo $row['id']; ?>" class="text-center">
                <?php echo $row['category_name']; ?>
            </option>
            <?php endwhile; ?>
            </select>
        </div>
        <input type="submit" value="Create Subcategory" class="createSubcategory">
    </form>
    <p class="createP">To create category - <a href="createcategory.php">Click here</a></p>
    <?php include 'footer.php'; ?>
    </div>
</body>
</html>