<?php
session_start();

if($_SESSION['userType'] == "customer"){
    header("Location: ../View/customer_CP.php");
}

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');
require ('../Model/dbConnect.php');
require ('../Model/database_functions.php');

$adminUsernameLogginIn = $_SESSION['username'];

?>

<body>

<nav>

    <div id="loginContainer">
        <div>
            <label class="loggedInStyle">Logged in as:</label>
        </div>

        <div>
            <div class="loggedInStyle"><?php echo "$adminUsernameLogginIn" ?></div>
        </div>

        <div>
            <button class="buttonStyle" onclick="runLogout()">Logout</button>
        </div>
    </div>

    <ul>
        <li><a class="hvr-fade" href="admin_CP.php">Admin Home</a></li>
        <li><a class="hvr-fade" href="accountManagement.php">Account Management</a></li>
        <li><a class="hvr-fade, activeTab" href="#">Manage Quotes</a></li>
        <li><a class="hvr-fade" href="manageServices.php">Manage Services</a></li>
    </ul>

</nav>

<div id="container">

    <header>
        <h1>QuoteSystem - TAFE Project</h1>
    </header>

    <section>

        <div class="form_container">
            <form class="form_style" id="searchQuoteForm" name="searchQuoteForm" method="post" action="#">
                <div>
                    <label class="label_style">Search:</label><input class="input_style" type="text" id="quoteSearchInput" name="quoteSearchInput" placeholder="Search quote here">
                    <button class="buttonStyleTwo" type="button" id="quoteSearchSubmit" name="quoteSearchSubmit" onclick="searchQuoteAjax()">Click to display</button>
                    <div id="quoteToBeProcessed"><b>Quotes to be processed:</b><br>
                        <?php

                        $showQuotesPending = showQuotesPending();

                        foreach($showQuotesPending as $row):
                            echo "<span class='spacingAll'>" . $row['quoteID'] . "</span>";
                        endforeach;

                        ?>
                    </div>
                </div>
            </form>
            <div id="searchQuote" class="showHideSlideRight">
                <form class="form_style" id="viewQuote" name="viewQuote">
                    <div>
                        <label class="label_style">Quote ID:</label><input class="input_style" type="text" id="quoteID" name="quoteID" placeholder="Quote ID">
                    </div>
                    <div>
                        <label class="label_style">Customer ID:</label><input class="input_style" type="text" id="customerID" name="customerID" placeholder="Customer ID">
                    </div>
                    <div>
                         <label class="label_style">Job Category:</label><input class="input_style" type="text" id="jobCategory" name="jobCategory" placeholder="Job Category">
                    </div>
                    <div>
                        <label class="label_style">Service Type:</label><input class="input_style" type="text" id="serviceType" name="serviceType" placeholder="Service Type">
                    </div>
                    <div>
                        <label class="label_style">Service Time:</label><input class="input_style" type="text" id="serviceTime" name="serviceTime" placeholder="Service Time">
                    </div>
                    <div>
                        <label class="label_style">Service Price:</label><input class="input_style" type="text" id="servicePrice" name="servicePrice" placeholder="Service Price">
                    </div>

                    <button class="buttonStyleThree" type="button" id="confirmQuote" name="confirmQuote" onclick="changeStatusA(document.getElementById('quoteID').value)">Confirm Quote</button>
                    <button class="buttonStyleThree" type="button" id="declineQuote" name="declineQuote" onclick="changeStatusD(document.getElementById('quoteID').value)">Decline Quote</button>

                </form>
            </div>
        </div>
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