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

    $sql = "SELECT * FROM jobstatus where CompanyId = ".$_SESSION['CompanyID'];
    $result = $conn->query($sql);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's application | Placement Zone</title>
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
        <p class="index4-edit-wrapper">Student's applications</p>
    </section>

    <?php
        while($JobStatus = $result->fetch_assoc())
        {

            $sql = "SELECT * FROM job where JobId = ".$JobStatus['JobId'];
            $rp = $conn->query($sql);
            $JobDetails = $rp->fetch_assoc();

            $sql = "SELECT * FROM students where StudentId = ".$JobStatus['StudentId'];
            $rp1 = $conn->query($sql);
            $StudentDetails = $rp1->fetch_assoc();

            $sql = "SELECT * FROM collage where CollageCode = ".$StudentDetails['CollageCode'];
            $rp2 = $conn->query($sql);
            $CollageDetails = $rp2->fetch_assoc();
    ?>

    <section class="emp5-main">
        <div class="emp5-box">
            <div class="index5-name">
                <p class="index5-name-wrapper">Job Details</p> 
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($JobDetails['JobDetails']) ?></p>
            </div>
            <div class="index5-name">
                <p class="index5-name-wrapper">Name</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['Fname']." ".$StudentDetails['Mname']." ".$StudentDetails['Lname']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Enrollment number</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['Enrollment_number']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">College name</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($CollageDetails['CollageName'])?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Skills</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['Skills']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Achievements</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['Achievements']) ?></p>
            </div>

            <div class="index5-name">
                <p class="index5-name-wrapper">Intrested fields</p>
                <p class="index5-colon-wrapper">:</p>
                <p class="index5-yash-wrapper"><?php echo($StudentDetails['IntrestedFields']) ?></p>
            </div>

            <div class="index5-marks">
                <div class="index5-name">
                    <p class="index5-name-wrapper">CPI</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($StudentDetails['CPI']) ?></p>
                </div>

                <div class="index5-name">
                    <p class="index5-name-wrapper">CGPI</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($StudentDetails['CGPI']) ?></p>
                </div>
            </div>

            <div class="index5-marks">
                <div class="index5-name">
                    <p class="index5-name-wrapper">Total backlogs</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($StudentDetails['Total_Backlogs']) ?></p>
                </div>

                <div class="index5-name">
                    <p class="index5-name-wrapper">Current backlogs</p>
                    <p class="index5-colon-wrapper">:</p>
                    <p class="index5-yash-wrapper"><?php echo($StudentDetails['Current_Backlogs']) ?></p>
                </div>
            </div>

            <div class="emp5-ans">
                <?php
                    if($JobStatus['JobStatus'] =="0")
                    {

                ?>
                <div class="emp5-accept">
                    <a style="color: black;" href="./PHP/Accept_Reject_Job.php?value=accept&id=<?php echo($JobStatus['JobId']);?>"><p class="emp5-accept-wrapper">Accept</p></a>
                </div>

                <div class="emp5-reject">
                <a style="color: black;" href="./PHP/Accept_Reject_Job.php?value=reject&id=<?php echo($JobStatus['JobId']);?>"><p class="emp5-reject-wrapper">Reject</p></a>
                </div>
                <?php
                    }else if($JobStatus['JobStatus'] =="1")
                    {
                ?>


                <div class="emp5-reject">
                    <p class="emp5-reject-wrapper">Rejected</p>
                </div>
                <?php
                    }else if($JobStatus['JobStatus'] =="2")
                    {
                ?>
                <div class="emp5-accept">
                    <p class="emp5-accept-wrapper">Accepted</p>
                </div>

                <?php
                    }
                ?>
            </div>
        </div>
    </section>

    <?php } ?>
</body>
</html>