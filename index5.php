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
                <p class="index3-home-wrapper"><a href="index3.php">Home</a></p>
            </div>

            <div class="index3-home">
                <p class="index3-home-wrapper"><a href="about.html">About us</a></p>
            </div>

            <div class="index3-home">
                <p class="index3-home-wrapper"><a href="contact.html">Contact us</a></p>
            </div>
        </section>

        <section class="index5-dashboard">
            <p class="index5-dashboard-wrapper">Dashboard</p>
        </section>

    <?php

        session_start();
        if(isset($_SESSION['Password']))
        {

    ?>

    <section class="index5-detail">
        <div class="index5-detail-wrapper">
            <div class="index5-name">
                <p class="index5-name-wrapper">Name</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['Fname'] ." ". $_SESSION['Mname'] ." ". $_SESSION['Lname']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Enrollment number</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['Enrollment_number'])?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">College name</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['CollageName'])?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Skills</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['Skills'])?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Achievements</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['Achievements'])?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Intrested fields</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($_SESSION['IntrestedFields'])?></p>
            </div>

            <div class="index5-marks">
                <div class="index5-name">
                    <p class="index5-name-wrapper">CPI</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($_SESSION['CPI'])?></p>
                </div>

                <div class="index5-name">
                    <p class="index5-name-wrapper">CGPI</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($_SESSION['CGPI'])?></p>
                </div>
            </div>

            <div class="index5-marks">
                <div class="index5-name">
                    <p class="index5-name-wrapper">Total backlogs</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($_SESSION['Total_Backlogs'])?></p>
                </div>

                <div class="index5-name">
                    <p class="index5-name-wrapper">Current backlogs</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($_SESSION['Current_Backlogs'])?></p>
                </div>
            </div>
        </div>
    </section>
    <?php
        }
        else
        {
            header("Location: index3.php?SomeErrorOcurFromIndex5");
            die();
        }
    ?>
</body>
</html>