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
    
    $JobIdAll = $_SESSION['JobId'];
  
    // $try = "1,2,3,5";

    // if(strpos($try, "5") !== false){
    //     echo "Word Found!";
    // } else{
    //     echo "Word Not Found!";
    // }
   



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacancy | Placement Zone</title>
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
        <p class="index6-vacancy-wrapper">Vacancy</p>
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

            <div class="index6-apply">
                <?php 
                    if(!(str_contains($JobIdAll,  $AllDetails['JobId']))){
                        
                ?>
                <a href="./PHP/AddVacancyStudent.php?JobId=<?php echo($AllDetails['JobId']); ?>&StudentId=<?php echo($_SESSION['StudentId']); ?>&CompanyId=<?php echo($AllDetails['CompanyId']); ?>"><p class="index6-apply-wrapper">Apply now</p></a>

                <?php
                    }
                    else
                    {

                ?>
                   <p class="index6-apply-wrapper">Applied</p>
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