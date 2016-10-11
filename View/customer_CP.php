<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

$customerUsernameLoggedIn = $_SESSION['username'];

?>

<body>

<nav>

    <div id="loginContainer">
        <div>
            <label class="loggedInStyle">Logged in as:</label>
        </div>

        <div>
            <div class="loggedInStyle"><?php echo "$customerUsernameLoggedIn" ?></div>
        </div>

        <div>
            <button class="buttonStyle" onclick="runLogout()">Logout</button>
        </div>
    </div>

    <ul>
        <li><a class="hvr-fade, activeTab" href="#">Customer Home</a></li>
        <li><a class="hvr-fade" href="startQuote.php">Start a Quote</a></li>
        <li><a class="hvr-fade" href="quoteHistory.php">Quote History</a></li>
        <li><a class="hvr-fade" href="customerDetails.php">Customer Details</a></li>
    </ul>

</nav>

<div id="container">

    <header>
        <div id="headerImage">Header Image</div>
    </header>



    <section>
        <div class="content_example3">display contact us info</div>
        <div class="content_example3">display most recent quote, Quote ID, Job Category</div>
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