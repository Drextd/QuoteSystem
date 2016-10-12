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
                    <label class="label_style">Search:</label><input class="input_style" type="text" id="quoteSearchInput" name="quoteSearchInput" placeholder="Search quote here"><button class="search_button_style" type="button" name="quoteSearchSubmit" onclick="searchQuoteAjax()">Search</button>
                </div>
            </form>
            <form class="form_style" id="viewQuoteFirst" name="viewQuoteFirst" method="post" action="">
                <div>
                    <label class="label_style">Quote ID:</label><input class="input_style" type="text" id="quoteID" name="quoteID" placeholder="Quote ID">
                </div>
                <div>
                    <label class="label_style">Customer ID:</label><input class="input_style" type="text" id="customerID" name="customerID" placeholder="Customer ID">
                </div>

                <button class="button_style" type="button" name="view_quote" onclick="openQuoteManage()">View Quote</button>
                <button class="button_style" type="reset" name="reset_quote_search">Reset Form</button>

            </form>
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