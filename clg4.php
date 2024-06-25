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
    
    $sql = "SELECT * FROM STUDENTS where CollageCode = ". $_SESSION['CollageCode'];
    $result = $conn->query($sql);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered students | Placement Zone</title>
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

    <section class="index4-edit">
        <p class="index4-edit-wrapper">Registered students</p>
    </section>

    <?php 
            while($StudentDetails = $result->fetch_assoc())
            {
                
                $sql = "SELECT * FROM collage where CollageCode = ".$StudentDetails['CollageCode'];
                $rp = $conn->query($sql);
                $CollageName = $rp->fetch_assoc();
                ?>
                <section class="emp5-main">
        <div class="emp5-box">
            <div class="index5-name">
                <p class="index5-name-wrapper">Name</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['Fname']." ".$StudentDetails['Mname']." ".$StudentDetails['Lname']); ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Enrollment number</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['Enrollment_number']); ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">College name</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($CollageName['CollageName']); ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Skills</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['Skills']); ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Achievements</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['Achievements']); ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Intrested fields</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['IntrestedFields']); ?></p>
            </div>

            <div class="index5-marks">
                <div class="index5-name">
                    <p class="index5-name-wrapper">CPI</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($StudentDetails['CPI']); ?></p>
                </div>

                <div class="index5-name">
                    <p class="index5-name-wrapper">CGPI</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($StudentDetails['CGPI']); ?></p>
                </div>
            </div>

            <div class="index5-marks">
                <div class="index5-name">
                    <p class="index5-name-wrapper">Total backlogs</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($StudentDetails['Total_Backlogs']); ?></p>
                </div>

                <div class="index5-name">
                    <p class="index5-name-wrapper">Current backlogs</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($StudentDetails['Current_Backlogs']); ?></p>
                </div>
            </div>

            
            <!-- <div class="clg4-delete">
                <a href="./PHP/DeleteStudent.php?id=<?php echo($StudentDetails['studentId']) ?>"><p class="clg4-delete-wrapper">Delete</p></a>
            </div> -->
            
        </div>
        </section>
        <?php
    }
    ?>
</body>
</html>