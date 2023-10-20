<?php
session_start();
?>
<?php include 'db.php'; ?>
<?php
    if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email'])
    && !empty($_POST['linkedin']) && !empty($_POST['github']) && !empty($_POST['role'] && !empty($_POST['summary'])
    && !empty($_POST['certifications']) && !empty($_POST['certificationsD']) && !empty($_POST['experience'])
    && !empty($_POST['skills']) && !empty($_POST['skill1']) && !empty($_POST['skill2'])
    && !empty($_POST['skill3']) && !empty($_POST['skill4']) && !empty($_POST['skill5']) && !empty($_POST['selectSkill1']) && !empty($_POST['selectSkill2']) && !empty($_POST['selectSkill3']) && !empty($_POST['selectSkill4']) && !empty($_POST['selectSkill5'])
    && !empty($_POST['education1']) && !empty($_POST['education2']) && !empty($_POST['education3'])
    && !empty($_POST['education4']) && !empty($_POST['education5']) && !empty($_POST['selectEducation1']) && !empty($_POST['selectEducation2']) && !empty($_POST['selectEducation3']) && !empty($_POST['selectEducation4']) && !empty($_POST['selectEducation5']) && !empty($_POST['language1'])
    && !empty($_POST['language2']) && !empty($_POST['language3']) && !empty($_POST['language4'])
    && !empty($_POST['language5']) && !empty($_POST['selectLanguage1']) && !empty($_POST['selectLanguage2']) && !empty($_POST['selectLanguage3']) && !empty($_POST['selectLanguage4']) && !empty($_POST['selectLanguage5'])))
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
        $github = mysqli_real_escape_string($conn, $_POST['github']);
        $summary = mysqli_real_escape_string($conn, $_POST['summary']);
        $certifications = mysqli_real_escape_string($conn, $_POST['certifications']);
        $certificationsD = mysqli_real_escape_string($conn, $_POST['certificationsD']);
        $experience = mysqli_real_escape_string($conn, $_POST['experience']);
        $skills = mysqli_real_escape_string($conn, $_POST['skills']);
        $skill1 = mysqli_real_escape_string($conn, $_POST['skill1']);
        $skill2 = mysqli_real_escape_string($conn, $_POST['skill2']);
        $skill3 = mysqli_real_escape_string($conn, $_POST['skill3']);
        $skill4 = mysqli_real_escape_string($conn, $_POST['skill4']);
        $skill5 = mysqli_real_escape_string($conn, $_POST['skill5']);
        $selectSkill1 = mysqli_real_escape_string($conn, $_POST['selectSkill1']);
        $selectSkill2 = mysqli_real_escape_string($conn, $_POST['selectSkill2']);
        $selectSkill3 = mysqli_real_escape_string($conn, $_POST['selectSkill3']);
        $selectSkill4 = mysqli_real_escape_string($conn, $_POST['selectSkill4']);
        $selectSkill5 = mysqli_real_escape_string($conn, $_POST['selectSkill5']);
        $education1 = mysqli_real_escape_string($conn, $_POST['education1']);
        $education2 = mysqli_real_escape_string($conn, $_POST['education2']);
        $education3 = mysqli_real_escape_string($conn, $_POST['education3']);
        $education4 = mysqli_real_escape_string($conn, $_POST['education4']);
        $education5 = mysqli_real_escape_string($conn, $_POST['education5']);
        $selectEducation1 = mysqli_real_escape_string($conn, $_POST['selectEducation1']);
        $selectEducation2 = mysqli_real_escape_string($conn, $_POST['selectEducation2']);
        $selectEducation3 = mysqli_real_escape_string($conn, $_POST['selectEducation3']);
        $selectEducation4 = mysqli_real_escape_string($conn, $_POST['selectEducation4']);
        $selectEducation5 = mysqli_real_escape_string($conn, $_POST['selectEducation5']);
        $language1 = mysqli_real_escape_string($conn, $_POST['language1']);
        $language2 = mysqli_real_escape_string($conn, $_POST['language2']);
        $language3 = mysqli_real_escape_string($conn, $_POST['language3']);
        $language4 = mysqli_real_escape_string($conn, $_POST['language4']);
        $language5 = mysqli_real_escape_string($conn, $_POST['language5']);
        $selectLanguage1 = mysqli_real_escape_string($conn, $_POST['selectLanguage1']);
        $selectLanguage2 = mysqli_real_escape_string($conn, $_POST['selectLanguage2']);
        $selectLanguage3 = mysqli_real_escape_string($conn, $_POST['selectLanguage3']);
        $selectLanguage4 = mysqli_real_escape_string($conn, $_POST['selectLanguage4']);
        $selectLanguage5 = mysqli_real_escape_string($conn, $_POST['selectLanguage5']);

        $query = "INSERT INTO myresume (name, phone, email,	linkedin, github, role, summary, certifications, certificationsD, experience, skills, skill1, skill2, skill3, skill4, skill5, selectSkill1, selectSkill2, selectSkill3, selectSkill4, selectSkill5, education1, education2, education3, education4, education5, selectEducation1, selectEducation2, selectEducation3, selectEducation4, selectEducation5, language1, language2, language3, language4,	language5, selectLanguage1, selectLanguage2, selectLanguage3, selectLanguage4, selectLanguage5) VALUES('$name', '$phone', '$email', '$linkedin', '$github', '$role', '$summary', '$certifications', '$certificationsD', '$experience', '$skills', '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$selectSkill1', '$selectSkill2', '$selectSkill3', '$selectSkill4', '$selectSkill5',  '$education1', '$education2', '$education3', '$education4', '$education5', '$selectEducation1', '$selectEducation2', '$selectEducation3', '$selectEducation4', '$selectEducation5', '$language1', '$language2', '$language3', '$language4', '$language5', '$selectLanguage1', '$selectLanguage2', '$selectLanguage3', '$selectLanguage4', '$selectLanguage5')";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['phone'] = $_POST['phone'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['linkedin'] = $_POST['linkedin'];
            $_SESSION['github'] = $_POST['github'];
            $_SESSION['role'] = $_POST['role'];
            $_SESSION['summary'] = $_POST['summary'];
            $_SESSION['certifications'] = $_POST['certifications'];
            $_SESSION['certificationsD'] = $_POST['certificationsD'];
            $_SESSION['experience'] = $_POST['experience'];
            $_SESSION['skills'] = $_POST['skills'];
            $_SESSION['skill1'] = $_POST['skill1'];
            $_SESSION['skill2'] = $_POST['skill2'];
            $_SESSION['skill3'] = $_POST['skill3'];
            $_SESSION['skill4'] = $_POST['skill4'];
            $_SESSION['skill5'] = $_POST['skill5'];
            $_SESSION['selectSkill1'] = $_POST['selectSkill1'];
            $_SESSION['selectSkill2'] = $_POST['selectSkill2'];
            $_SESSION['selectSkill3'] = $_POST['selectSkill3'];
            $_SESSION['selectSkill4'] = $_POST['selectSkill4'];
            $_SESSION['selectSkill5'] = $_POST['selectSkill5'];
            $_SESSION['education1'] = $_POST['education1'];
            $_SESSION['education2'] = $_POST['education2'];
            $_SESSION['education3'] = $_POST['education3'];
            $_SESSION['education4'] = $_POST['education4'];
            $_SESSION['education5'] = $_POST['education5'];
            $_SESSION['selectEducation1'] = $_POST['selectEducation1'];
            $_SESSION['selectEducation2'] = $_POST['selectEducation2'];
            $_SESSION['selectEducation3'] = $_POST['selectEducation3'];
            $_SESSION['selectEducation4'] = $_POST['selectEducation4'];
            $_SESSION['selectEducation5'] = $_POST['selectEducation5'];
            $_SESSION['language1'] = $_POST['language1'];
            $_SESSION['language2'] = $_POST['language2'];
            $_SESSION['language3'] = $_POST['language3'];
            $_SESSION['language4'] = $_POST['language4'];
            $_SESSION['language5'] = $_POST['language5'];
            $_SESSION['selectLanguage1'] = $_POST['selectLanguage1'];
            $_SESSION['selectLanguage2'] = $_POST['selectLanguage2'];
            $_SESSION['selectLanguage3'] = $_POST['selectLanguage3'];
            $_SESSION['selectLanguage4'] = $_POST['selectLanguage4'];
            $_SESSION['selectLanguage5'] = $_POST['selectLanguage5'];
        }
        if(!mysqli_query($conn, $query)){
            die(mysqli_error($conn));
        } else {
            header("Location: myResume.php?resume=" . urlencode($_POST['name']) . "&message=Form%20Submitted");
        }

    } else {
        header("Location: index.php?error=Please%20fill%20all%20fields");
    }
?>