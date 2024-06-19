<?php
include 'assets/config.php';

$error = '';
$success = '';
$result = false;

if (isset($_GET['error'])) {
    $error = $_GET['error'];
} elseif (isset($_GET['success'])) {
    $success = $_GET['success'];
}

if (isset($_GET['categoryid'])) {
    $category_id = mysqli_real_escape_string($conn, $_GET['categoryid']);
    $query = "SELECT * FROM jobs WHERE category_id = '$category_id'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Query failed: ' . mysqli_error($conn));
    }
}

$query1 = "SELECT * FROM categories";
$result1 = mysqli_query($conn, $query1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jobs</title>
</head>
<body>
    <div class="container">
        <a href="addJob.php" style="font-size:1.3rem;">Add job</a>
        <div class="jobConnect">
            <h1 class="text-center">Search jobs:</h1>
            <?php if (!empty($error)): ?>
                <div class="alert text-center bg-red white"><?php echo htmlspecialchars($error); ?></div>
            <?php elseif (!empty($success)): ?>
                <div class="alert text-center"><?php echo htmlspecialchars($success); ?></div>
            <?php endif; ?>
            <form class="jobs text-center" action="searchCategory.php" method="POST">
                <label for="category" style="color:#313131; font-size:1.5rem;">Find a job: </label>
                <select name="category" id="category" required>
                <?php while ($row1 = mysqli_fetch_assoc($result1)): ?>
                    <option value="<?php echo htmlspecialchars($row1['id']); ?>" name="<?php echo htmlspecialchars($row1['id']); ?>"><?php echo htmlspecialchars($row1['category']); ?></option>
                <?php endwhile; ?>
                </select>
                <input type="submit" value="Submit">
            </form>
            <div class="allPos">
                <h2>Latest jobs: </h2>
                <ul>
                    <?php if ($result && mysqli_num_rows($result) > 0): ?>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <li class="job">
                                <div class="jobInfo">
                                    <h3><?php echo htmlspecialchars($row['job_title']); ?></h3>
                                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                                    <span><?php echo htmlspecialchars($row['company']); ?></span>
                                </div>
                                <div class="jobBtn">
                                    <a href="#">Show more details</a>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <li>No jobs found for the selected category.</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>