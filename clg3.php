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

    $sql = "SELECT * FROM job";
    $StudentDetails = $conn->query($sql);




?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vacancy | Placement Zone</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body style="background-color:#edf1f5;">
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
        <p class="index6-vacancy-wrapper">Vacancies</p>
    </section>

    <section class="index6-vacancy-main">
        
    <?php
        while($AllDetails = $StudentDetails->fetch_assoc())
        {
    ?>

        <div class="index6-vacancy1">
            <div class="index6-vacancy1-details">
                <p class="index6-post"><?php echo($AllDetails['JobDetails']); ?></p>
                <p class="index6-company"><?php echo($AllDetails['CompanyName']); ?></p>
                <p class="index6-number">No. of vacancies :</p>
                <p class="index6-total"><?php echo($AllDetails['NumberOfVacancies']); ?></p>
                <p class="index6-description">Description :</p>
                <p class="index6-xyz"><?php echo($AllDetails['Emp_status']); ?></p>
            </div>
            <!-- <div class="index6-apply">
                <a href="./PHP/DeleteJob.php?ID=<?php echo($AllDetails['JobId']); ?>"><p class="index6-apply-wrapper">Delete</p></a>
            </div> -->
        </div>

    
        <?php
            }
        ?>
<!-- 
        <div class="index6-vacancy1">
            <div class="index6-vacancy1-details">
                <p class="index6-post">Junior developer</p>
                <p class="index6-company">TCS</p>
                <p class="index6-number">No. of vacancies :</p>
                <p class="index6-total">10</p>
                <p class="index6-number">Description :</p>
                <p class="index6-total">xyz</p>
                <p class="index6-description">Registered students :</p>
                <p class="index6-xyz">111</p>
            </div>

            <div class="index6-apply">
                <p class="index6-apply-wrapper">Delete</p>
            </div>
        </div> -->

        <!-- <div class="index6-vacancy2">
            <div class="index6-vacancy1-details">
                <p class="index6-post">Web developer</p>
                <p class="index6-company">S&P Global</p>
                <p class="index6-number">No. of vacancies :</p>
                <p class="index6-total">04</p>
                <p class="index6-number">Description :</p>
                <p class="index6-total">xyz</p>
                <p class="index6-description">Registered students :</p>
                <p class="index6-xyz">111</p>
            </div>

            <div class="index6-apply">
                <p class="index6-apply-wrapper">Delete</p>
            </div>
        </div> -->
    </section>
</body>
</html>