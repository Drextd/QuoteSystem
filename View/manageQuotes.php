<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

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
        <div id="headerImage">Header Image</div>
    </header>

    <section>
        <div class="form_container">
            <form class="form_style" id="searchQuoteForm" name="searchQuoteForm" method="post" action="#">
                <div>
                    <label class="label_style">Search:</label><input class="input_style" type="text" id="quoteSearchInput" name="quoteSearchInput" placeholder="Search quote here"><button class="search_button_style" type="button" name="quoteSearchSubmit" onclick="searchQuoteAjax()">Click to display</button>
                </div>
            </form>
            <div id=showHide>
                <form class="form_style" id="viewQuote" name="viewQuote" method="post" action="#">
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

                    <button class="popup_button_style" type="submit" id="confirmQuoteChanges" name="confirmQuoteChanges">Confirm Quote</button>
                    <button class="popup_button_style" type="reset" name="reset_changes">Reset Form</button>

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