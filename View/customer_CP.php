<?php
session_start();

if($_SESSION['userType'] == "admin"){
    header("Location: ../View/admin_CP.php");
}

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

    <ul class="rslides">
        <li><img src="../img/carpentry.jpg" alt=""></li>
        <li><img src="../img/electrician.jpeg" alt=""></li>
        <li><img src="../img/plumbing.jpg" alt=""></li>
    </ul>

</nav>

<div id="container">

    <header>
        <h1>QuoteSystem - TAFE Project</h1>
    </header>



    <section>
        <div class="content_example3">display contact us info</div>
        <div class="content_example3"></div>
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