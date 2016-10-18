<?php
session_start();

if($_SESSION['userType'] == "customer"){
    header("Location: ../View/customer_CP.php");
}

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');
require ('../Model/dbConnect.php');
require ('../Model/database_functions.php');

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
        <h1>QuoteSystem - TAFE Project</h1>
    </header>

    <section>

            <div class="buttonStyleTwo" onclick="slideRightEffect1()">Add Service</div>

        <div id="addService" class="showHideSlideRight">
            <form class="form_style" name="manageServiceForm" method="post" action="../Controller/addServiceProcess.php">
                <div>
                    <label class="label_style">Job Category:</label><select class="input_style" id="jobCategory" name="jobCategory">
                        <option>Please select a Category</option>
                        <?php

                        $jobCatDropDown = getJobCategoryDropDown();

                        foreach($jobCatDropDown as $row):
                            echo "<option value=" . $row['categoryID'] . ">" . $row['jobCategory'] . "</option>";
                        endforeach;

                        ?>
                    </select>
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

                <button class="buttonStyleThree" type="submit" name="add_services">Add Service to System</button>
                <button class="buttonStyleThree" type="reset" name="reset_changes_services">Reset Form</button>
            </form>
        </div>

        <div class="buttonStyleTwo" onclick="slideRightEffect2()">Search Service</div>

        <div id="searchService" class="showHideSlideRight">
                <form class="form_style" id="searchServiceForm" name="searchServiceForm" method="post" action="#">
                    <div>
                        <label class="label_style">Search:</label><input class="input_style" type="text" id="searchServiceInput" name="searchServiceInput" placeholder="Search service here"><button class="buttonStyleTwo" type="button" name="searchServiceSubmit" onclick="searchServiceAjax()">Search</button>
                    </div>
                </form>
            <form class="form_style" id="manageServiceForm" name="manageServiceForm" method="post" action="../Controller/updateServiceProcess.php">
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

                <button class="buttonStyleThree" type="submit" name="save_changes_services">Save Changes</button>
                <button class="buttonStyleThree" type="reset" name="reset_changes_services">Reset Form</button>

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