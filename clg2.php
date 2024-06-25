<?php

    session_start();


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

    $sql = "SELECT count(studentid) as RegStu FROM students where CollageCode = '".$_SESSION['CollageCode']."'";
    $Result = $conn->query($sql);
    $CollageDetails = $Result->fetch_assoc();

    $sql = "SELECT count(StatusId) as SelRow from jobstatus where JobStatus = '2' & StudentId in (select StudentId from students where CollageCode = '".$_SESSION['CollageCode']."' )";
    $Result = $conn->query($sql);
    $JobDetails = $Result->fetch_assoc();

    $sql = "SELECT count(CompanyId) as ComRow from company";
    $Result = $conn->query($sql);
    $ComDetails = $Result->fetch_assoc();


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
<body>
    <section class="index3-navigation">
        <div class="index3-logo">
            <img class="index3-logo-wrapper" src="Images/logo1.png">
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="clg.html">Home</a></p>
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="about.html">About us</a></p>
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="contact.html">Contact us</a></p>
        </div>
    </section>

    <section class="index6-vacancy">
        <p class="index6-vacancy-wrapper">Dashboard</p>
    </section>

    <section class="clg2-main">
        <div class="clg2-box">
            <div class="clg2-students">
                <p class="clg2-no">Registered students</p>
                <p class="clg2-no-wrapper"><?php echo($CollageDetails['RegStu']); ?></p>
            </div>

            <div class="clg2-students">
                <p class="clg2-no">Selected students</p>
                <p class="clg2-no-wrapper"><?php echo($JobDetails['SelRow']); ?></p>
            </div>

            <div class="clg2-students">
                <p class="clg2-no">Numbers of companies</p>
                <p class="clg2-no-wrapper"><?php echo($ComDetails['ComRow']) ?></p>
            </div>
        </div>
    </section>
</body>
</html>