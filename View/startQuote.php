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
        <li><a class="hvr-fade" href="customer_CP.php">Customer Home</a></li>
        <li><a class="hvr-fade, activeTab" href="#">Start a Quote</a></li>
        <li><a class="hvr-fade" href="quoteHistory.php">Quote History</a></li>
        <li><a class="hvr-fade" href="customerDetails.php">Customer Details</a></li>
    </ul>

</nav>

<div id="container">

    <header>
        <div id="headerImage">Header Image</div>
    </header>



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
                <button class="button_style" type="reset" name="reset_changes_services">Reset Quote Form</button>
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