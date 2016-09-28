<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

$adminUsername = $_SESSION['username'];

?>

<body>

<nav>

    <div id="loginContainer">
        <div>
            <label class="loggedInStyle">Logged in as:</label>
        </div>

        <div>
            <div class="loggedInStyle"><?php echo "$adminUsername" ?></div>
        </div>

        <div>
            <button class="buttonStyle" onclick="runLogout()">Logout</button>
        </div>
    </div>

    <ul>
        <li><a class="hvr-fade" href="admin_CP.php">Home</a></li>
        <li><a class="hvr-fade" href="accountManagement.php">Account Management</a></li>
        <li><a class="hvr-fade" href="manageQuotes.php">Manage Quotes</a></li>
        <li><a class="hvr-fade" href="#">Manage Services</a></li>
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
                    <label class="label_style">Search:</label><input class="input_style" type="text" name="" placeholder="Search service here"><button class="search_button_style" type="submit" name="searchServiceSubmit">Search</button>
                </div>
                <div>
                    <label class="label_style">Service ID:</label><input class="input_style" type="text" name="service_ID" placeholder="Service ID">
                </div>
                <div>
                    <label class="label_style">Job Category:</label><input class="input_style" type="text" name="jobCategory" placeholder="Job Category">
                </div>
                <div>
                    <label class="label_style">Job Type:</label><input class="input_style" type="text" name="jobType" placeholder="Job Type">
                </div>
                <div>
                    <label class="label_style">Job Time:</label><input class="input_style" type="text" name="jobTime" placeholder="Job Time">
                </div>
                <div>
                    <label class="label_style">Job Price:</label><input class="input_style" type="text" name="jobPrice" placeholder="Job Price">
                </div>

                <button class="button_style" type="button" name="save_changes_services">Save Changes</button>
                <button class="button_style" type="button" name="reset_changes_services">Reset Changes</button>
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