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
        <li><a class="hvr-fade" href="accountManagement.php">Account Management</a></li>
        <li><a class="hvr-fade" href="manageQuotes.php">Manage Quotes</a></li>
        <li><a class="hvr-fade, activeTab" href="#">Manage Services</a></li>
    </ul>

</nav>

<div id="container">

    <header>
        <div id="headerImage">Header Image</div>
    </header>

    <section>
        <div class="form_container">
                <form class="form_style" id="searchServiceForm" name="searchServiceForm" method="post" action="#">
                    <div>
                        <label class="label_style">Search:</label><input class="input_style" type="text" id="searchServiceInput" name="searchServiceInput" placeholder="Search service here"><button class="search_button_style" type="button" name="searchServiceSubmit" onclick="searchServiceAjax()">Search</button>
                    </div>
                </form>
            <form class="form_style" id="manageServiceForm" name="manageServiceForm" method="post" action="#">
                <div>
                    <label class="label_style">Service ID:</label><input class="input_style" type="text" id="serviceID" name="serviceID" placeholder="Service ID">
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

                <button class="button_style" type="button" name="save_changes_services">Save Changes</button>
                <button class="button_style" type="reset" name="reset_changes_services">Reset Form</button>
                <button class="button_style" type="button" name="open_add_service" onclick="openAddService()">Add Service</button>


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