<?php
session_start();

require ('../Controller/userSecurityCheck.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>quoteHistory</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
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
            <li><a href="startQuote.php">Start a Quote</a></li>
            <li><a href="#">Quote History</a></li>
            <li><a href="customerDetails.php">Customer Details</a></li>
        </ul>
    </nav>

    <section>
        <div class="content_example3">display quote 1 - will have pagination for more than 5</div>
        <div class="content_example3">display quote 2</div>
        <div class="content_example3">display quote 3</div>
        <div class="content_example3">display quote 4</div>
        <div class="content_example3">display quote 5</div>
    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>

</body>
</html>