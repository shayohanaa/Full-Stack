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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="searchdiv" action="searchProcess.php" method="POST">
        <input type="text" name="search" placeholder="Search ...">
        <div></div>
        <input type="submit" value="Submit..">
    </form>
</body>
</html>