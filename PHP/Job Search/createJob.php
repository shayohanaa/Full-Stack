<?php include 'assets/config.php'; ?>
<?php
if (
    !empty($_POST['company']) &&
    !empty($_POST['category']) &&
    !empty($_POST['title']) &&
    !empty($_POST['description']) &&
    !empty($_POST['location']) &&
    !empty($_POST['salary']) &&
    !empty($_POST['user']) &&
    !empty($_POST['email'])
) {
    if (!ctype_digit($_POST['salary'])) {
        header('Location: addJob.php?error=Salary%20field%20should%20contain%20only%20numbers.');
        exit;
    }

    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $query = "INSERT INTO jobs (category_id, company, job_title, description, salary, location, contact_user, contact_email) VALUES('$category', '$company', '$title', '$description', $salary, '$location', '$user', '$email')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die(mysqli_error($conn));
    } else {
        header('Location: index.php?success');
        exit;
    }
} else {
    header('Location: addJob.php?error=Please%20fill%20out%20all%20fields.');
    exit;
}
?>