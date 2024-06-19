<?php
include 'assets/config.php'; 
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
    <title>Add job</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Create job listing: </h2>
        <?php if(isset($error)): ?>
            <div class="alert text-center bg-red white"><?php echo $error; ?></div>
        <?php elseif(isset($success)): ?>
            <div class="alert text-center"><?php echo $success; ?></div>
        <?php endif; ?>
        <form action="createJob.php" id="createJob" class="createJob" method="POST">
            <div class="form-group">
                </label for="company">Company name: </label>
                <input type="text" name="company">
            </div>
            <div class="form-group">
                </label for="category">Category: </label>
                <select name="category" id="category" required>
                    <option value="1">Choose a category</option>
                    <option value="2">Information Technology</option>
                    <option value="3">Finance</option>
                    <option value="4">Engineering</option>
                    <option value="5">Education</option>
                    <option value="6">Sales and Marketing</option>
                    <option value="7">Customer Service</option>
                </select>
            </div>
            <div class="form-group">
                </label for="title">Job title: </label>
                <input type="text" name="title">
            </div>
            <div class="form-group">
                </label for="description">Job description: </label>
                <input type="text" name="description">
            </div>
            <div class="form-group">
                </label for="location">Location: </label>
                <input type="text" name="location">
            </div>
            <div class="form-group">
                </label for="salary">Salary: </label>
                <input type="text" name="salary">
            </div>
            <div class="form-group">
                </label for="user">Contact user: </label>
                <input type="text" name="user">
            </div>
            <div class="form-group">
                </label for="email">Contact email: </label>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>