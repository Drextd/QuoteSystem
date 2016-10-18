<?php
session_start();

if($_SESSION['userType'] == "admin"){
    header("Location: ../View/admin_CP.php");
}

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');
require ('../Model/dbConnect.php');
require ('../Model/database_functions.php');

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
        <li><a class="hvr-fade" href="startQuote.php">Start a Quote</a></li>
        <li><a class="hvr-fade, activeTab" href="#">Quote History</a></li>
        <li><a class="hvr-fade" href="customerDetails.php">Customer Details</a></li>
    </ul>

</nav>

<div id="container">

    <header>
        <h1>QuoteSystem - TAFE Project</h1>
    </header>



    <section>
        <div id="quoteHistoryMainContainer">
            <div class="quoteHistoryContainer">
                <h3>Quote awaiting processing</h3>
    
                <?php
    
                $customerID = $_SESSION['userID'];
    
                $showCustomerQuotes = showCustomerQuotesPending($customerID);
    
                foreach($showCustomerQuotes as $row):
                    echo "<span class='spacingCustomer'>" . $row['quoteID'] . '<span class="widthSpacing"></span>' . $row['status'] . "</span>";
                endforeach;
    
                ?>
            </div>
            <div class="quoteHistoryContainer">
                <h3>Approved Quotes</h3>
    
                <?php
    
                $customerID = $_SESSION['userID'];
    
                $showCustomerQuotes = showCustomerQuotesApproved($customerID);
    
                foreach($showCustomerQuotes as $row):
                    echo "<span class='spacingCustomer'>" . $row['quoteID'] . '<span class="widthSpacing"></span>' . $row['status'] . "</span>";
                endforeach;
    
                ?>
            </div>
            <div class="quoteHistoryContainer">
                <h3>Declined Quotes</h3>
    
                <?php
    
                $customerID = $_SESSION['userID'];
    
                $showCustomerQuotes = showCustomerQuotesDeclined($customerID);
    
                foreach($showCustomerQuotes as $row):
                    echo "<span class='spacingCustomer'>" . $row['quoteID'] . '<span class="widthSpacing"></span>' . $row['status'] . "</span>";
                endforeach;
    
                ?>
            </div>
        </div>

        <fieldset id="legendPosition">
            <legend>Legend</legend>
            <div>P = Pending quotes, A = Approved quotes, D = Declined quotes</div>
        </fieldset>


        
    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>

</body>
</html>