<?php include 'config.php'; ?>

<?php
if (!empty($_POST['minPrice']) && !empty($_POST['maxPrice'])) {
    $minPrice = mysqli_real_escape_string($conn, $_POST['minPrice']);
    $maxPrice = mysqli_real_escape_string($conn, $_POST['maxPrice']);

    $sql = "SELECT * FROM products WHERE price BETWEEN $minPrice AND $maxPrice";
    $query = mysqli_query($conn, $sql);

    if (!$query) {
        die(mysqli_error($conn));
    } else {
        header("Location: index.php?minPrice=$minPrice&maxPrice=$maxPrice");
        exit;
    }
} else {
    header('Location: index.php?error=ERROR');
    exit;
}
?>