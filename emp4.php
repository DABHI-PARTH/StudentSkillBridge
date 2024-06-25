
<?php
    session_start();

    // Connectiong to Database
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "careerhub";
    try
    {
        $conn = new mysqli($servername,$username,$dbpassword,$dbname);
    }
    catch(Exception)
    {
        header("Location: ../index.php?DbConnectionError");
    }

    $sql = "SELECT count(StatusId) as reg from jobstatus where CompanyId=".$_SESSION['CompanyID'];
    $result = $conn->query($sql);
    $regStu = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Placement Zone</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body style="background-color:#edf1f5;">
    <section class="index3-navigation">
        <div class="index3-logo">
            <img class="index3-logo-wrapper" src="Images/logo1.png">
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="emp.html">Home</a></p>
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="about.html">About us</a></p>
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="contact.html">Contact us</a></p>
        </div>
    </section>   

    <section class="index4-edit">
        <p class="index4-edit-wrapper">Dashboard</p>
    </section>

    <section class="index5-detail">
        <div class="emp4-detail-wrapper">
            <div class="index5-name">
                <p class="index5-name-wrapper">Company name</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['CompanyName']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Job details</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['JobDetails']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Industry area</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['IndustryArea']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Monthly Salary</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['MonthlySalary']) ?>/-</p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Training period</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['TrainingPeriod']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Location</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['Location']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Employment status</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['Emp_status']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Registered students</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($regStu['reg'])?></p>
            </div>

            <div class="emp4-link">
                <p class="emp4-p"><a href="emp5.html">Details of students</a></p>
            </div>

</body>
</html>