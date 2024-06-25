<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit | Placement Zone</title>
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

    <section class="index4-edit">
        <p class="index4-edit-wrapper">Edit Profile</p>
    </section>

    <?php
        session_start();
    ?>

    <section class="index4-detail">
        <div class="index4-detail-wrapper">
            <form action="./PHP/DataUpdate.php" method="POST">
                <div class="index4-first">
                    <p class="index4-first-wrapper">First name</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="First name" value="<?php echo($_SESSION['Fname']); ?>" name="Fname" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Middle name</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Middle name" value="<?php echo($_SESSION['Mname']); ?>" name="Mname" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Last Name</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Last name" value="<?php echo($_SESSION['Lname']); ?>" name="Lname" required>
                </div>

                <div class="index4-radio">
                    <p class="index4-radio-wrapper">Gender</p>
                    <p class="index4-radio-colon">:</p>
                    <input type="radio" class="index4-radio-edit"  <?php if($_SESSION['Gender'] == "Male") {echo("checked");} ?> name="Gender" value="Male" required>
                    <label for="index4-radio-edit" class="index4-radio-edit-wrapper">Male</label>
                    <input type="radio" class="index4-radio-edit"  <?php if($_SESSION['Gender'] == "Female") {echo("checked");} ?> name="Gender" value="Female" required>
                    <label for="index4-radio-edit" class="index4-radio-edit-wrapper">Female</label>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Enrollment number</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Enrollment number" value="<?php echo($_SESSION['Enrollment_number']); ?>" name="Enrollment_number" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">College Code</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="College name" value="<?php echo($_SESSION['CollageCode']); ?>" name="CollageCode" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Email Id</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Email Id" value="<?php echo($_SESSION['EmailId']); ?>" name="EmailId" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Phone number</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Phone number" value="<?php echo($_SESSION['PhoneNumber']); ?>" name="PhoneNumber" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Skills</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Your skills" value="<?php echo($_SESSION['Skills']); ?>" name="Skills" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Achievements</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Achievements" value="<?php echo($_SESSION['Achievements']); ?>" name="Achievements"  required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Intrested fields</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Intrested fields" value="<?php echo($_SESSION['IntrestedFields']); ?>" name="IntrestedFields" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">CPI</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="CPI" value="<?php echo($_SESSION['CPI']); ?>" name="CPI" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">CGPI</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="CGPI" value="<?php echo($_SESSION['CGPI']); ?>" name="CGPI" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Total backlogs</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Total backlogs" value="<?php echo($_SESSION['Total_Backlogs']); ?>" name="Total_Backlogs" required>
                </div>

                <div class="index4-first">
                    <p class="index4-first-wrapper">Current backlogs</p>
                    <p class="index4-first-colon">:</p>
                    <input type="text" class="index4-first-edit" placeholder="Current backlogs" value="<?php echo($_SESSION['Current_Backlogs']); ?>" name="Current_Backlogs" required>
                </div>

                <div class="index4-submit">
                    <input type="submit" class="index4-submit-wrapper" value="Save" required>
                </div>
            </form>
        </div>
    </section>
</body>
</html>