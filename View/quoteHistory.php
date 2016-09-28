<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

$customerUsername = $_SESSION['username'];

?>

<body>

<nav>

    <div id="loginContainer">
        <div>
            <label class="loggedInStyle">Logged in as:</label>
        </div>

        <div>
            <div class="loggedInStyle"><?php echo "$customerUsername" ?></div>
        </div>

        <div>
            <button class="buttonStyle" onclick="runLogout()">Logout</button>
        </div>
    </div>

    <ul>
        <li><a class="hvr-fade" href="admin_CP.php">Home</a></li>
        <li><a class="hvr-fade" href="#">Account Management</a></li>
        <li><a class="hvr-fade" href="manageQuotes.php">Manage Quotes</a></li>
        <li><a class="hvr-fade" href="manageServices.php">Manage Services</a></li>
    </ul>

</nav>

<div id="container">

    <header>
        <div id="headerImage">Header Image</div>
    </header>



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