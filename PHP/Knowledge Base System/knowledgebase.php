<?php
session_start();
include 'Assets/config.php';

if(!isset($_SESSION['username']))
{
    header('Location: login.php');
    exit;
}

if(isset($_GET['error']))
{
    $error = $_GET['error'];
}

if(isset($_GET['searchKey']))
{
    $searchKey = $_GET['searchKey'];
    if($searchKey == 'all')
    {
        $query = "SELECT * FROM articles";
        $results = mysqli_query($conn, $query);
    } else {
        $query = "SELECT * FROM articles WHERE title LIKE '%$searchKey%' OR arttext LIKE '%$searchKey%'";
        $results = mysqli_query($conn, $query);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container white">
        <?php include 'header.php'; ?>
        <div class="knowledge-Base">
            <h1>Knowledge base</h1>
            <p>Welcome to our Knowledge Base. 
            Search for answers, browse articles, 
            or get in touch with support.</p>
            <form action="klsearchProcess.php" class="searchForm" method="POST">
                <input type="text" name="knowledge-search" placeholder="Search here everything">
                <input type="submit" value="Search...">
            </form>
            <?php if(isset($error)): ?>
                <?php echo $error; ?>
            <?php endif; ?>
        </div>
        <a href="knowledgebase.php?searchKey=all" class="klbtns showall">Show all articles.</a>
        <br>
        <a href="createArticle.php" class="klbtns createartBtn">Create article</a>
        <br>
        <div class="black"> ~~~ </div>
        <?php if(isset($searchKey)): ?>
        <div class="results" style="margin:85px 0;">
            <h3 style="color:#000;">Showing search results for "<?php echo $searchKey; ?>"</h3>
            <?php if($results && mysqli_num_rows($results) > 0): ?>
                <?php while($row = mysqli_fetch_assoc($results)): ?>
                <a href="article.php?artId=<?php echo $row['id']; ?>" class="knowledge-link">
                    <div class="result">
                        <div class="title">
                            <i class="fa fa-file-text" style="font-size:30px;" aria-hidden="true"></i>
                            <label for="title">Article <?php echo $row['title']; ?></label>
                        </div>
                        <div class="search">
                            <i class="fa fa-chevron-right" style="font-size:30px; font-weight:bold; float:right;" aria-hidden="true"></i>
                        </div>
                    </div>
                </a>
                <?php endwhile; ?>
            <?php else: ?>
                <h3 class="black" style="font-family: 'Times New Roman', Times, serif;">No articles found.</h3>
            <?php endif; ?>
        <?php endif; ?>
        </div>
    </div>
</body>
</html>