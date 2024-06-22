<?php include 'Assets/config.php'; ?>

<?php
$query = 'SELECT * FROM categories';
$category = mysqli_query($conn, $query);

$category_query = "SELECT * FROM categories ORDER BY id ASC";
$category_result = mysqli_query($conn, $category_query);

$categories = [];
if ($category_result) {
    while ($row = mysqli_fetch_assoc($category_result)) {
        $categories[] = $row;
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_free_result($category_result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>myForum</title>
</head>
<body>
    <div class="container">
        <?php include 'header.php'; ?>
        <div class="scroll-container">
            <div class="scroll-content">
                <?php while($categoryRow = mysqli_fetch_assoc($category)): ?>
                    <div class="item">
                        <a href="category.php?category_id=<?php echo $categoryRow['id']; ?>&category_name=<?php echo $categoryRow['category_name']; ?>">
                            <button class="scroll-button <?php echo $categoryRow['category_class']; ?>">
                                <img src="<?php echo $categoryRow['category_imgUrl']; ?>" alt="<?php echo $categoryRow['category_imgAlt']; ?>" width="100px" height="100px">
                            </button>
                            <span><strong><?php echo $categoryRow['category_name']; ?></strong></span>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="topcategories">
            <h3>Top categories:</h3>
            <div class="top-items">
                <div class="top-item">
                    <a href="#">
                        <img src="Assets/media/PC-Gaming.jpg" alt="PC & Gaming">
                        <span><strong>PC & Gaming</strong></span>
                    </a>
                </div>
                <div class="top-item">
                    <a href="#">
                        <img src="Assets/media/Finance.jpg" alt="Finance">
                        <span><strong>Finance</strong></span>
                    </a>
                </div>
                <div class="top-item">
                    <a href="#">
                        <img src="Assets/media/Sports.jpg" alt="Sports">
                        <span><strong>Sports</strong></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="topposts">
            <H3>Top posts: </H3>
            <div class="top-items">
                <div class="top-item">
                    <a href="#">
                        <img src="Assets/media/post.jpg" alt="post">
                        <span><strong>Post</strong></span>
                    </a>
                </div>
                <div class="top-item">
                    <a href="#">
                        <img src="Assets/media/post.jpg" alt="post">
                        <span><strong>Post</strong></span>
                    </a>
                </div>
                <div class="top-item">
                    <a href="#">
                        <img src="Assets/media/post.jpg" alt="post">
                        <span><strong>Post</strong></span>
                    </a>
                </div>
                <div class="top-item">
                    <a href="#">
                        <img src="Assets/media/post.jpg" alt="post">
                        <span><strong>Post</strong></span>
                    </a>
                </div>
                <div class="top-item">
                    <a href="#">
                        <img src="Assets/media/post.jpg" alt="post">
                        <span><strong>Post</strong></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="all">
            <h3>All Categories: </h3>
            <div class="allCategories">
                <?php if(!$categories): ?>
                    <p class="text-center b-8">No categories found.</p>
                    <?php endif; ?>
                <?php
                $chunked_categories = array_chunk($categories, 4);
                foreach ($chunked_categories as $row_index => $category_group) {
                    echo '<div class="row row-' . ($row_index + 1) . '">';
                    foreach ($category_group as $col_index => $category) {
                        echo '<div class="column column-' . ($col_index + 1) . '">';
                        echo '<h4 style="color:#ff6600;" class="text-center">' . $category['category_name'] . '</h4>';
                        echo '<ul class="text-center categories">';
                        $subcategory_query = "SELECT * FROM subcategories WHERE category_id = " . $category['id'];
                        $subcategory_result = mysqli_query($conn, $subcategory_query);
                        if ($subcategory_result) {
                            while ($subcategory = mysqli_fetch_assoc($subcategory_result)) {
                                echo '<a href="subcategory.php?categoryName=' . $subcategory['subcategory_name'] . '&categoryId='. $subcategory['id'] .'">';
                                echo '<li class="item subcategory ' . $subcategory['subcategory_class'] . '">';
                                echo '<img src="' . $subcategory['subcategory_imgUrl'] . '" alt="' . $subcategory['subcategory_imgAlt'] . '" width="40" height="40">';
                                echo  $subcategory['subcategory_name'];
                                echo '</li>';
                                echo '</a>';
                            }
                            mysqli_free_result($subcategory_result); // Free subcategory result set
                        } else {
                            echo "Error: " . mysqli_error($conn);
                        }
                        echo '</ul>';
                        echo '</div>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>