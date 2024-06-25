
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

    $sql = "SELECT * FROM jobstatus where StudentId = ".$_SESSION['StudentId'];
    $JobStatusDetails = $conn->query($sql);
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My application | Placement Zone</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body style="background-color:#edf1f5;">
    <section class="index3-navigation">
        <div class="index3-logo">
            <img class="index3-logo-wrapper" src="Images/logo1.png">
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="index3.php">Home</a></p>
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="about.html">About us</a></p>
        </div>

        <div class="index3-home">
            <p class="index3-home-wrapper"><a href="contact.html">Contact us</a></p>
        </div>
    </section>

    <section class="index6-vacancy">
        <p class="index6-vacancy-wrapper">My applications</p>
    </section>

    <section class="index6-vacancy-main">

    <?php

    while($AllDetails = $JobStatusDetails->fetch_assoc())
    {

        $sql = "SELECT * FROM job where jobid = ".$AllDetails['JobId'];
        $Details = $conn->query($sql);
        $JobDetails = $Details->fetch_assoc()

    ?>

        <div class="index6-vacancy1">
            <div class="index6-vacancy1-details">
                <p class="index6-post"><?php echo($JobDetails['Emp_status']) ?></p>
                <p class="index6-company"><?php echo($JobDetails['CompanyName']) ?></p>
                <p class="index6-number">No. of vacancies :</p>
                <p class="index6-total"><?php echo($JobDetails['NumberOfVacancies']) ?></p>
                <p class="index6-description">Description :</p>
                <p class="index6-xyz"><?php echo($JobDetails['JobDetails']) ?></p>
            </div>

            <div class="index6-apply">
                <?php
                    if($AllDetails['JobStatus'] == 0)
                    {
                ?>
                <p class="index6-apply-wrapper">Pending</p>
                <?php
                    }
                    else if($AllDetails['JobStatus'] == 1)
                    {
                ?>
                <p class="index6-apply-wrapper">Rejected</p>
                <?php
                    }
                    else if($AllDetails['JobStatus'] == 2)
                    {
                ?>
              
                <p class="index6-apply-wrapper" style="color:green">Scheduled</p>


                <?php
                    }
                ?>
            </div>
        </div>
    <?php
    }
    ?>
       
    </section>
</body>
</html>