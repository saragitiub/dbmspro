<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $course = $_POST['course'];
    $section = $_POST['section'];
    $grade = $_POST['grade'];

    $sql = "insert into `data` (id, year, semester, course, section, grade) values ('$id', '$year', '$semester', '$course', '$section', '$grade')";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPMS v4</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="addForm.css">
</head>
<body>
    <div class="registration-form">
        <form method="post">
            <div>
                <img class="logo" src="logo.png" alt="">
            </div>
            <div>
                <p class="spms">SPMS 4.0</p>
                <p class='spms-p'>Student Performance Monitoring System</p>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Student ID" name="id">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="password" placeholder="Educational Year" name="year">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Educational Semester" name="semester">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" placeholder="Enrolled Course" name="course">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="birth-date" placeholder="Enrolled Section" name="section">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="birth-date" placeholder="Obtained Grade" name="grade">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account" name="submit">Submit</button>
            </div>
            <div style="text-align:center;">
                <button style="background-color:#5891ff; border-radius:50px; border-color:white;"><a href="login.php" style="color:white;">Login</a></button>
                <button style="background-color:#5891ff; border-radius:50px; border-color:white;"><a href="signup.php" style="color:white;"> Signup</a></button>
            </div>
        </form>
    </div>
    <div style="text-align:center;">
        <p>Made with <span>❤</span> by <a href="https://github.cosirat1931291/DBMS_COURSE_PROJECT_MAKING.git" target="blank">@DATABASERROR</a>.</p>
    </div>
</body>
</html>