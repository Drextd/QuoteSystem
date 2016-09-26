<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

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
            <li><a href="#">Home</a></li>
            <li><a href="startQuote.php">Start a Quote</a></li>
            <li><a href="quoteHistory.php">Quote History</a></li>
            <li><a href="customerDetails.php">Customer Details</a></li>
        </ul>
    </nav>

    <section>
        <div class="content_example3">display contact us info</div>
        <div class="content_example3">display most recent quote, Quote ID, Job Category</div><button type="button" name="open_quote_recent" onclick="openQuoteRecent()">Click to confirm</button>
    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>

<div id="grey_background"></div>
<div id="popupbox"></div>

</body>
</html>