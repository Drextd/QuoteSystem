<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

$adminUsername = $_SESSION['username'];

?>

<body>

<div id="container">

    <header>
        <div id="home_header_image">
            <div id="header_image">Header Image</div>
        </div>

        <div id="homeLogin">
                <div>
                    <label class="home_login_label" >Logged in as:</label><div id="logged_in_style"><?php echo "$adminUsername" ?></div>
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
            <li><a href="accountManagement.php">Account Management</a></li>
            <li><a href="manageQuotes.php">Manage Quotes</a></li>
            <li><a href="manageServices.php">Manage Services</a></li>
        </ul>
    </nav>

    <section>
        <div class="content_example3">List of quotes that need confirmation - printed from PHP in table form<button type="button" name="open_quote_confirm" onclick="openQuoteConfirm()">Click to confirm</button></div>
    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>

<div id="grey_background"></div>
<div id="popupbox"></div>


<div id="grey_background"></div>
<div id="popupbox"></div>

</body>
</html>