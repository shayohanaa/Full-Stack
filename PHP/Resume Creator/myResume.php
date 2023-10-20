<?php
session_start();
?>
<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

        <?php
        if(isset($_SESSION['name']) && 
        $_SESSION['phone'] && 
        $_SESSION['email'] &&
        $_SESSION['linkedin'] && 
        $_SESSION['github'] && 
        $_SESSION['role'] && 
        $_SESSION['summary'] &&
        $_SESSION['certifications'] &&
        $_SESSION['certificationsD'] && 
        $_SESSION['experience'] &&
        $_SESSION['skills'] && 
        $_SESSION['skill1'] && 
        $_SESSION['skill2'] &&
        $_SESSION['skill3'] && 
        $_SESSION['skill4'] &&
        $_SESSION['skill5'] &&
        $_SESSION['selectSkill1'] && 
        $_SESSION['selectSkill2'] &&
        $_SESSION['selectSkill3'] && 
        $_SESSION['selectSkill4'] &&
        $_SESSION['selectSkill5'] &&
        $_SESSION['education1'] && 
        $_SESSION['education2'] && 
        $_SESSION['education3'] &&
        $_SESSION['education4'] && 
        $_SESSION['education5'] && 
        $_SESSION['selectEducation1'] &&
        $_SESSION['selectEducation2'] &&
        $_SESSION['selectEducation3'] &&
        $_SESSION['selectEducation4'] &&
        $_SESSION['selectEducation5'] &&
        $_SESSION['language1'] &&
        $_SESSION['language2'] && 
        $_SESSION['language3'] && 
        $_SESSION['language4'] &&
        $_SESSION['language5'] &&
        $_SESSION['selectLanguage1'] && 
        $_SESSION['selectLanguage2'] &&
        $_SESSION['selectLanguage3'] && 
        $_SESSION['selectLanguage4'] &&
        $_SESSION['selectLanguage5']) {
            echo "    <div class='container'>
            <h1>My Resume:</h1>
            <div class='myResume'>
                <div class='form-group header'>
                    <div class='left'>
                        <span>". $_SESSION['name'] ."</span>
                        <p>". $_SESSION['role'] ."</p>
                    </div>
                    <div class='right'>
                        <ul>
                            <li>". $_SESSION['phone'] ."</li>
                            <li>". $_SESSION['email'] ."</li>
                            <li>". $_SESSION['linkedin'] ."</li>
                            <li>". $_SESSION['github'] ."</li>
                        </ul>
                    </div>
                </div>
                <div class='form-group summary'>
                    <h2>summary</h2>
                    <p>". $_SESSION['summary'] ."</p>
                </div>
                <div class='form-group certifications'>
                    <h2>certifications</h2>
                    <p><strong>". $_SESSION['certifications'] .": <br></strong>
                    ". $_SESSION['certificationsD'] ."
                    </p>
                </div>
                <div class='form-group experience'>
                    <h2>experience</h2>
                    <p>". $_SESSION['experience'] ."</p>
                </div>
                <div class='form-group skills'>
                    <h2>skills</h2>
                    <h3>". $_SESSION['skills'] ."</h3>
                    <ul>
                        <li>1. ". $_SESSION['skill1'] ." - ". $_SESSION['selectSkill1'] ."</li>
                        <li>2. ". $_SESSION['skill2'] ." - ". $_SESSION['selectSkill2'] ."</li>
                        <li>3. ". $_SESSION['skill3'] ." - ". $_SESSION['selectSkill3'] ."</li>
                        <li>4. ". $_SESSION['skill4'] ." - ". $_SESSION['selectSkill4'] ."</li>
                        <li>5. ". $_SESSION['skill5'] ." - ". $_SESSION['selectSkill5'] ."</li>
                    </ul>
                </div>
                <div class='form-group education'>
                    <h2>education</h2>
                    <ul>
                        <li><p>**". $_SESSION['education1'] ." - ". $_SESSION['selectEducation1'] ."**</p></li>
                        <li><p>**". $_SESSION['education2'] ." - ". $_SESSION['selectEducation2'] ."**</p></li>
                        <li><p>**". $_SESSION['education3'] ." - ". $_SESSION['selectEducation3'] ."**</p></li>
                        <li><p>**". $_SESSION['education4'] ." - ". $_SESSION['selectEducation4'] ."**</p></li>
                        <li><p>**". $_SESSION['education5'] ." - ". $_SESSION['selectEducation5'] ."**</p></li>
                    </ul>
                </div>
                <div class='form-group language'>
                    <h2>language</h2>
                    <p><strong>". $_SESSION['language1'] ."</strong> - ". $_SESSION['selectLanguage1'] ." |</p>
                    <p><strong>". $_SESSION['language2'] ."</strong> - ". $_SESSION['selectLanguage2'] ." |</p>
                    <p><strong>". $_SESSION['language3'] ."</strong> - ". $_SESSION['selectLanguage3'] ." |</p>
                    <p><strong>". $_SESSION['language4'] ."</strong> - ". $_SESSION['selectLanguage4'] ." |</p>
                    <p><strong>". $_SESSION['language5'] ."</strong> - ". $_SESSION['selectLanguage5'] ." |</p>
                </div>
            </div>
            <p>Copyright &copy; 2023</p>
        </div>";
        } else {
            echo "<div class='container'><h1>Something went wrong.</h1></div>";
        }
        ?>
</body>
</html>