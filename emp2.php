<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a job | Placement Zone</title>
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
        <p class="index4-edit-wrapper">Post a job</p>
    </section>

    <section class="index4-detail">
        <div class="index4-detail-wrapper">
            <form action="./PHP/AddJob.php" method="POST">
                <div class="index4-first">
                    <p class="index4-first-wrapper">Company name</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Company name" value="<?php echo($_SESSION['CompanyName']) ?>" name="CompanyName" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Job details</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Job details" name="JobDetails" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Industry area</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Industry area" name="IndustryArea" required>
                </div>

                

                <div class="index4-first">
                    <p class="index4-first-wrapper">Monthly Salary</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Monthly Salary" name="MonthlySalary" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Training period</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Training period" name="TrainingPeriod" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Location</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Location" name="Location" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Employment status</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Employment status" name="Emp_status" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Employment type</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Employment type" name="Emp_Type" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Experience</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Experience" name="Exprience" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Number of vacancies</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Number of vacancies" name="NumberOfVacancies" required>
                </div>

                <div class="index4-submit">
                    <input type="submit" class="index4-submit-wrapper" value="Post a job" required>
                </div>
            </form>
        </div>
    </section>