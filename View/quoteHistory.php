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
        <div id="quoteHistoryMainContainer">
            <div class="quoteHistoryContainer">
                <h3>Quote awaiting processing</h3>
    
                <?php
    
                $customerID = $_SESSION['userID'];

                $showCustomerQuotes = showCustomerQuotesPending($customerID);
                
                foreach($showCustomerQuotes as $row):
                    echo '<span class="spacingCustomer">' . $row['quoteID'] . '<span class="widthSpacing"></span>' . $row['status'] . '<button id="clickView" class="buttonStyleFour" type="submit" onclick="viewClick('.$row['quoteID'].')" >View</button></span>';
                endforeach;

                ?>
            </div>
            <div class="quoteHistoryContainer">
                <h3>Approved Quotes</h3>
    
                <?php
    
                $customerID = $_SESSION['userID'];
    
                $showCustomerQuotes = showCustomerQuotesApproved($customerID);

                foreach($showCustomerQuotes as $row):
                    echo '<span class="spacingCustomer">' . $row['quoteID'] . '<span class="widthSpacing"></span>' . $row['status'] . '<button id="clickView" class="buttonStyleFour" type="submit" onclick="viewClick('.$row['quoteID'].')" >View</button></span>';
                endforeach;


                ?>
            </div>
            <div class="quoteHistoryContainer">
                <h3>Declined Quotes</h3>
    
                <?php
    
                $customerID = $_SESSION['userID'];
    
                $showCustomerQuotes = showCustomerQuotesDeclined($customerID);

                foreach($showCustomerQuotes as $row):
                    echo '<span class="spacingCustomer">' . $row['quoteID'] . '<span class="widthSpacing"></span>' . $row['status'] . '<button id="clickView" class="buttonStyleFour" type="submit" onclick="viewClick('.$row['quoteID'].')" >View</button></span>';
                endforeach;

                ?>
            </div>
            <div class="quoteHistoryContainer">
                <div id="viewQuote" class="showHideSlideRight">
                    <form class="form_style" id="viewQuote" name="viewQuote">
                        <div>
                            <label class="label_style">Quote ID:</label><input class="input_style" type="text" id="quoteID" name="quoteID" placeholder="Quote ID" readonly>
                        </div>
                        <div>
                            <input class="input_style" id="customerID" name="customerID" type="hidden"  readonly>
                        </div>
                        <div>
                            <label class="label_style">Job Category:</label><input class="input_style" type="text" id="jobCategory" name="jobCategory" placeholder="Job Category" readonly>
                        </div>
                        <div>
                            <label class="label_style">Service Type:</label><input class="input_style" type="text" id="serviceType" name="serviceType" placeholder="Service Type" readonly>
                        </div>
                        <div>
                            <label class="label_style">Service Time:</label><input class="input_style" type="text" id="serviceTime" name="serviceTime" placeholder="Service Time" readonly>
                        </div>
                        <div>
                            <label class="label_style">Service Price:</label><input class="input_style" type="text" id="servicePrice" name="servicePrice" placeholder="Service Price" readonly>
                        </div>

                        <a href="../Controller/genPDF.php" class="buttonStyleFour">View as PDF</a>
                        <button class="buttonStyleFour" type="button" onclick="closeViewQuote()">Close</button>

                    </form>
                </div>

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