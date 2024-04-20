<?php include 'config.php'; ?>
<?php
    if (!empty($_POST['search'])) {
        $searchValue = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "SELECT * FROM names WHERE 
        name LIKE '%$searchValue%' OR
        text LIKE '%$searchValue%' OR
        age LIKE '%$searchValue%'";
        $query = mysqli_query($conn, $sql);

        if (!$query) 
        {
            die(mysqli_error($conn));
        } else {
            while ($row = mysqli_fetch_assoc($query)) 
            {
                echo '<div class="container">
                <ul>
                    <li>'.$row['name'].'</li>
                    <li>'.$row['text'].'</li>
                    <li>'.$row['age'].'</li>
                </ul>
                </div>
                <br>';
            }
        }
    } else {
        header('Location: search.php?error=Not%20Found.');
    }
?>