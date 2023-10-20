<?php include 'db.php'; ?>

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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="myResume">
            <h1>Welcome to resume maker.</h1>
            <form id="resumeForm" method="POST" action="process.php">
                <div class="resumeSection">
                    <h1>My Contact Information:</h1>
                    <div class="form-group">
                        <label>Full Name: </label>
                        <input type="text" name="name" placeholder="Enter your Full Name">
                    </div>
                    <div class="form-group">
                        <label>Phone Number: </label>
                        <input type="phone" name="phone" placeholder="Enter your Phone Number">
                    </div>
                    <div class="form-group">
                        <label>Email Address: </label>
                        <input type="text" name="email" placeholder="Enter your Email Address">
                    </div>
                    <div class="form-group">
                        <label>LinkedIn Profile: </label>
                        <input type="text" name="linkedin" placeholder="Enter your LinkedIn Profile">
                    </div>
                    <div class="form-group">
                        <label>Github Profile: </label>
                        <input type="text" name="github" placeholder="Enter your Github Profile">
                    </div>
                </div>
                <div class="resumeSection">
                    <h1>Desired Role: </h1>
                    <div class="form-group">
                        <label>Enter the role you're interested in. </label>
                        <input type="text" name="role" placeholder="Enter your Desired Role">
                    </div>
                </div>
                <div class="resumeSection">
                    <h1>Summary or Objective:</h1>
                    <div class="form-group">
                        <label>A brief statement summarizing your career goals and what you bring to the table.: </label>
                        <textarea type="text" name="summary"></textarea>
                        <div class="textArea">0 / 150</div>
                    </div>
                </div>
                <div class="resumeSection">
                    <h1>Certifications and Licenses:</h1>
                    <div class="form-group">
                        <label>Include any relevant certifications or licenses you hold. </label>
                        <input type="text" name="certifications" placeholder="Enter your Certifications">
                    </div>
                    <div class="form-group">
                        <label>Description: </label>
                        <textarea type="text" name="certificationsD" placeholder="Describe your certification in few words."></textarea>
                        <div class="textArea">0 / 150</div>
                    </div>
                </div>
                <div class="resumeSection">
                    <h1>Experience:</h1>
                    <div class="form-group">
                        <label>A brief statement summarizing your career goals and what you bring to the table.: </label>
                        <textarea type="text" name="experience"></textarea>
                        <div class="textArea">0 / 150</div>
                    </div>
                </div>
                <div class="resumeSection">
                    <h1>Skills:</h1>
                    <div class="form-group">
                        <label>Mention any specific skills or tools you used in your job, which are relevant to the position you're applying for. </label>
                        <input type="text" name="skills" placeholder="Enter your Certifications">
                    </div>
                    <div class="form-group">
                        <label>List your Skills, also in reverse-chronological order.</label>
                        <div class="selectInput">
                            <input type="text" name="skill1" placeholder="# Skill">
                            <select class="select" name="selectSkill1">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="skill2" placeholder="# Skill">
                            <select class="select" name="selectSkill2">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="skill3" placeholder="# Skill">
                            <select class="select" name="selectSkill3">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="skill4" placeholder="# Skill">
                            <select class="select" name="selectSkill4">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="skill5" placeholder="# Skill">
                            <select class="select" name="selectSkill5">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="resumeSection">
                    <h1>Education:</h1>
                    <div class="form-group">
                        <label>List your educational background, also in reverse-chronological order.</label>
                        <div class="selectInput">
                            <input type="text" name="education1" placeholder="# Education">
                            <select class="select" name="selectEducation1">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="education2" placeholder="# Education">
                            <select class="select" name="selectEducation2">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="education3" placeholder="# Education">
                            <select class="select" name="selectEducation3">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="education4" placeholder="# Education">
                            <select class="select" name="selectEducation4">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="education5" placeholder="# Education">
                            <select class="select" name="selectEducation5">
                                <option value="select">None</option>
                                <option value="begginer">Begginer</option>
                                <option value="advanced">Advanced</option>
                                <option value="expert">Expert</option>
                                <option value="master">Master</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="resumeSection">
                    <h1>Languages:</h1>
                    <div class="form-group">
                        <label>List your Languages, also in reverse-chronological order.</label>
                        <div class="selectInput">
                            <input type="text" name="language1" placeholder="# Language">
                            <select class="select" name="selectLanguage1">
                                <option value="select">None</option>
                                <option value="conversational">Conversational</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                <option value="native/bilingual">Native/Bilingual</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="language2" placeholder="# Language">
                            <select class="select" name="selectLanguage2">
                                <option value="select">None</option>
                                <option value="conversational">Conversational</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                <option value="native/bilingual">Native/Bilingual</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="language3" placeholder="# Language">
                            <select class="select" name="selectLanguage3">
                                <option value="select">None</option>
                                <option value="conversational">Conversational</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                <option value="native/bilingual">Native/Bilingual</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="language4" placeholder="# Language">
                            <select class="select" name="selectLanguage4">
                                <option value="select">None</option>
                                <option value="conversational">Conversational</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                <option value="native/bilingual">Native/Bilingual</option>
                            </select>
                        </div>
                        <div class="selectInput">
                            <input type="text" name="language5" placeholder="# Language">
                            <select class="select" name="selectLanguage5">
                                <option value="select">None</option>
                                <option value="conversational">Conversational</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                                <option value="native/bilingual">Native/Bilingual</option>
                            </select>
                        </div>
                    </div>
                    <?php if(isset($error)) : ?>
                    <div id="alert" class="alert failed"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <?php if(isset($success)) : ?>
                    <div id="alert" class="alert success"><?php echo $success; ?></div>
                    <?php endif; ?>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>