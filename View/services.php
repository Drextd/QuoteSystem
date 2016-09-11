<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Services</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <script src="../js/script.js" type="text/javascript"></script>
    <script src="../js/jquery-3.1.0.min.js" type="text/javascript"></script>
</head>
<body>
<div id="error_div"></div>
<div id="container">

    <header>
        <div id="home_header_image">
            <div id="header_image">Header Image</div>
        </div>

        <div id="homeLogin">
            <form id="home_login_style" name="homeLoginForm" method="post" action="../Controller/processUser.php" onSubmit="return loginValidation();" novalidate>
                <div>
                    <label class="home_login_label" >Username:</label><input class="home_login_input" type="text" id="home_username" name="home_username" placeholder="Username" pattern="^[A-Za-z]+$">
                </div>

                <div>
                    <label class="home_login_label" >Password:</label><input class="home_login_input" type="password" id="home_password" name="home_password" placeholder="Password" pattern="^[A-Za-z]+$">
                </div>

                <div>
                    <div class="home_submit_style"></div>
                    <button id="home_submit" type="submit" name="home_login_submit">Login</button>
                    <div class="home_submit_style"></div>
                </div>
            </form>
        </div>
        <div class="clearAll"></div>
    </header>

    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="./contactUS.php">Contact Us</a></li>
        </ul>
    </nav>

    <section>
        <div class="content_example3">Service Listing</div>
        <div class="content_example3">Service Listing</div>
    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>


</body>
</html>