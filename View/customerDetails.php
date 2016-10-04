<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../Model/database_functions.php');
require ('../Model/dbConnect.php');
require ('../View/header.php');

$customerUsernameLoggedIn = $_SESSION['username'];

/* Get customer details */
$result = getCustomerDetails();

?>

<body xmlns="http://www.w3.org/1999/html">

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
        <li><a class="hvr-fade" href="startQuote.php">Start a Quote</a></li>
        <li><a class="hvr-fade" href="quoteHistory.php">Quote History</a></li>
        <li><a class="hvr-fade, activeTab" href="#">Customer Details</a></li>
    </ul>

</nav>

<div id="container">

    <header>
        <div id="headerImage">Header Image</div>
    </header>



    <section>
        <?php foreach($result as $row): ?>
        <div class="form_container">
            <form class="form_style" name="customerDetailsForm"  action="#" >
                <div>
                    <label class="label_style">Customer ID:</label><input class="input_style" type="hidden" id="customerID" name="customerID">
                </div>
                <div>
                    <label class="label_style">Username:</label><input class="input_style" type="text" id="customerUsername" name="customerUsername" value="<?php echo $row['customerUsername'] ?>">
                </div>
                <div>
                    <label class="label_style">Password:</label><input class="input_style" type="password" id="customerPassword" name="customerPassword" value="<?php echo $row['customerPassword'] ?>">
                </div>
                <div>
                    <label class="label_style">First Name:</label><input class="input_style" type="text" id="customerFirstName" name="customerFirstName" value="<?php echo $row['customerFirstName'] ?>">
                </div>
                <div>
                    <label class="label_style">Last Name:</label><input class="input_style" type="text" id="customerLastName" name="customerLastName" value="<?php echo $row['customerLastName'] ?>">
                </div>
                <div>
                    <label class="label_style">Email:</label><input class="input_style" type="email" id="customerEmail" name="customerEmail" value="<?php echo $row['customerEmail'] ?>">
                </div>
                <div>
                    <label class="label_style">Phone:</label><input class="input_style" type="text" id="customerPhone" name="customerPhone" value="<?php echo $row['customerPhone'] ?>">
                </div>

                <div class="content_example2">Please contact us if you would require to make changes to your details.</br>Show contact Us details</div>

            </form <?php endforeach; ?>>
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