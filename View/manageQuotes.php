<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

$adminUsername = $_SESSION['username'];

?>

<body>

<div id="container">

    <header>
        <div id="home_header_image">
            <div id="header_image">Header Image</div>
        </div>

        <div id="homeLogin">
            <div>
                <label class="home_login_label" >Logged in as:</label><div id="logged_in_style"><?php echo "$adminUsername" ?></div>
            </div>

            <div>
                <div class="home_submit_style"></div>
                <a id="logout_style" href="../Controller/logoutProcess.php">LogOut</a>
                <div class="home_submit_style"></div>
            </div>
        </div>
        <div class="clearAll"></div>
    </header>

    <nav>
        <ul>
            <li><a href="admin_CP.php">Home</a></li>
            <li><a href="accountManagement.php">Account Management</a></li>
            <li><a href="#">Manage Quotes</a></li>
            <li><a href="manageServices.php">Manage Services</a></li>
        </ul>
    </nav>

    <section>
        <div class="form_container">
            <form class="form_style" name="manageQuoteForm" method="post" action="">
                <div>
                    <label class="label_style">Search:</label><input class="input_style" type="text" name="" placeholder="Search quote here"><button class="search_button_style" type="submit" name="searchQuoteSubmit">Search</button>
                </div>
                <div>
                    <label class="label_style">Quote ID:</label><input class="input_style" type="text" name="quote_ID" placeholder="Quote ID">
                </div>
                <div>
                    <label class="label_style">Customer ID:</label><input class="input_style" type="text" name="customer_ID" placeholder="Customer ID">
                </div>

                <button class="button_style" type="button" name="view_quote" onclick="openQuoteManage()">View Quote</button>
                <button class="button_style" type="button" name="reset_quote_search">Reset Search</button>

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