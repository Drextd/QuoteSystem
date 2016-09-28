<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quote System</title>
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
</head>
<body>

<nav>
    
    <div id="loginContainer">
        <form id="loginStyle" name="homeLoginForm" method="post" action="Controller/processUser.php" onSubmit="return loginValidation();" novalidate>
            <div>
                <label class="loginLabelStyle" >Username:</label><input class="loginInputStyle" type="text" id="home_username" name="home_username" placeholder="Username" pattern="^[A-Za-z]+$">
            </div>

            <div>
                <label class="loginLabelStyle" >Password:</label><input class="loginInputStyle" type="password" id="home_password" name="home_password" placeholder="Password" pattern="^[A-Za-z]+$">
            </div>
            <div>
                    <button class="buttonStyle" type="submit" name="home_login_submit">Login</button>
            </div>
        </form>
    </div>
    
    <ul>
        <li><a class="hvr-fade" href="#">Home</a></li>
        <li><a class="hvr-fade" href="View/services.php">Services</a></li>
        <li><a class="hvr-fade" href="View/contactUS.php">Contact Us</a></li>
    </ul>
    
</nav>


<div id="error_div"></div>
<div id="container">

    
    <header>
            <div id="headerImage">Header Image</div>
    </header>

    <section>
        <div class="content_example1">Picture</div>
        <div class="content_example2">Business Overview</div>
        <div class="content_example1">Picture</div>
        <div class="content_example2">Click here for register form<button type="button" name="open_registration" onclick="openRegistration()">Click to Register</button></div>
    </section>

    <footer>

        <?php

        include 'View/footer.php';

        ?>

    </footer>

</div>

<div id="grey_background"></div>
<div id="popupbox"></div>
<div id="error_div_regi"></div>

</body>
</html>