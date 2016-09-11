<?php
session_start();

require ('../Controller/userSecurityCheck.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>startQuote</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <script src="../js/script.js" type="text/javascript"></script>
    <script src="../js/jquery-3.1.0.min.js" type="text/javascript"></script>
</head>

<?php

$customerUsername = $_SESSION['username'];

?>

<body>

<div id="container">

    <header>
        <div id="home_header_image">
            <div id="header_image">Header Image</div>
        </div>

        <div id="homeLogin">
            <div>
                <label class="home_login_label" >Logged in as:</label><div id="logged_in_style"><?php echo "$customerUsername" ?></div>
            </div>

            <div>
                <div class="home_submit_style"></div>
                <a id="logout_style" href="../Controller/logoutProcess.php">LogOut</a>
                <div class="home_submit_style"></div>
            </div>
        </div>
        <div class="clearAll"></div>
    </header>

    <nav>
        <ul>
            <li><a href="customer_CP.php">Home</a></li>
            <li><a href="#">Start a Quote</a></li>
            <li><a href="quoteHistory.php">Quote History</a></li>
            <li><a href="customerDetails.php">Customer Details</a></li>
        </ul>
    </nav>

    <section>

        <div class="form_container">
            <form class="form_style" name="manageServiceForm" method="post" action="">
                <div>
                    <label class="label_style">Job Category:</label><select class="input_style" name="jobCategory"><option>Dropdown to show categories</option></select>
                </div>
                <div>
                    <label class="label_style">Job Type:</label><select class="input_style"  name="jobType"><option>Dropdown to show job types</option></select>
                </div>
                <div>
                    <label class="label_style">Job Time:</label><input class="input_style" type="text" name="jobTime" placeholder="Job Time">
                </div>
                <div>
                    <label class="label_style">Job Price:</label><input class="input_style" type="text" name="jobPrice" placeholder="Job Price">
                </div>

                <button class="button_style" type="button" name="add__services">Request Quote</button>
                <button class="button_style" type="button" name="reset_changes_services">Reset Quote</button>
            </form>
        </div>

    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>

</body>
</html>