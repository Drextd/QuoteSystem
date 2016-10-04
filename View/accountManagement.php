<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

$adminUsernameLoggedIn = $_SESSION['username'];

?>

<body>

<nav>

    <div id="loginContainer">
        <div>
            <label class="loggedInStyle">Logged in as:</label>
        </div>

        <div>
            <div class="loggedInStyle"><?php echo "$adminUsernameLoggedIn" ?></div>
        </div>

        <div>
            <button class="buttonStyle" onclick="runLogout()">Logout</button>
        </div>
    </div>

    <ul>
        <li><a class="hvr-fade" href="admin_CP.php">Admin Home</a></li>
        <li><a class="hvr-fade, activeTab" href="#">Account Management</a></li>
        <li><a class="hvr-fade" href="manageQuotes.php">Manage Quotes</a></li>
        <li><a class="hvr-fade" href="manageServices.php">Manage Services</a></li>
    </ul>

</nav>

<div id="container">

    <header>
        <div id="headerImage">Header Image</div>
    </header>

    <section>
        <div class="form_container">
            <form class="form_style" id="searchCustomerForm" action="#">
                <div>
                    <label class="label_style">Search:</label><input class="input_style" type="text" id="searchCustomerInput" name="searchCustomerInput" placeholder="Search customer here"><button class="search_button_style" type="button" id="searchSubmit" name="searchSubmit" onclick="searchCustomerAjax()" >Search</button>
                </div>
            </form>
            <form class="form_style" id="CustomerForm" method="post" action="#">
                <div>
                    <label class="label_style">Customer ID:</label><input class="input_style" type="text" id="customerID" name="customerID" placeholder="Customer ID">
                </div>
                <div>
                    <label class="label_style">Username:</label><input class="input_style" type="text" id="customerUsername" name="customerUsername" placeholder="Username">
                </div>
                <div>
                    <label class="label_style">Password:</label><input class="input_style" type="text" id="customerPass" name="customerPass" placeholder="Password">
                </div>
                <div>
                    <label class="label_style">First Name:</label><input class="input_style" type="text" id="customerFirstName" name="customerFirstName" placeholder="First Name">
                </div>
                <div>
                    <label class="label_style">Last Name:</label><input class="input_style" type="text" id="customerLastName" name="customerLastName" placeholder="Last Name">
                </div>
                <div>
                    <label class="label_style">Email:</label><input class="input_style" type="email" id="customerEmail" name="customerEmail" placeholder="Email">
                </div>
                <div>
                    <label class="label_style">Phone:</label><input class="input_style" type="text" id="customerPhone" name="customerPhone" placeholder="Phone">
                </div>

                <button class="button_style" type="button" name="save_changes">Save Changes</button>
                <button class="button_style" type="reset" name="reset_changes">Reset Form</button>
            </form>
        </div>
    </section>

    <footer>
        <div id="json"></div>
        <?php 

        include 'footer.php';
        
        ?>

    </footer>

</div>


</body>
</html>