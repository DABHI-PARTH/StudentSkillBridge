<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement Zone</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <section class="login-page">

        <div class="login-page-wrapper">
            <div class="logo">
                <img class="logo-wrapper" src="Images/logo1.png">
            </div>

            <div class="login-details">

                <div class="banner-box">
                    <div class="banner">
                        <p class="banner-wrapper">Find you dream placement now</p>
                    </div>

                    <div class="login-form">
                        <form class="submit-form" method="POST" action="PHP/DataValidation.php">
                            <div class="role">
                                <select class="role-text" id="student-role" name="SelectRole"  required>
                                    <option value="Select">Select Role :</option>
                                    <option value="Student">Student</option>
                                    <option value="College">College</option>
                                    <option value="Employer">Company</option>
                                </select>
                            </div>

                            <div class="email">
                                <label for="username">Username :</label>
                                <input type="email" class="email-wrapper" placeholder="Email address" name="username" required>
                            </div>

                            <div class="email">
                                <label for="CollageCode">College Code :</label>
                                <input type="text" class="email-wrapper" placeholder="Clg code (Student&Collage)" name="CollageCode">
                            </div>

                            <div class="password">
                                <label for="Password">Password :</label>
                                <input type="password" class="password-wrapper" placeholder="Password" name="password" required>
                            </div>

                            <div class="submit">
                                <input type="submit" class="submit-wrapper" value="Log in" required>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="sign-up">
                    <p class="sign-up-wrapper">Don't have an account? <a href="index2.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- <script src="index.js"></script> -->
</body>
</html>