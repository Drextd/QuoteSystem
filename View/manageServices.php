<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>manageServices</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<div id="container">

    <header>
        <div id="home_header_image">
            <div id="header_image">Header Image</div>
        </div>

        <div id="homeLogin">
            <form id="home_login_style" name="homeLoginForm" method="post" action="">
                <div>
                    <label class="home_login_label" >Username:</label><input class="home_login_input" type="text" name="home_username" placeholder="Username">
                </div>

                <div>
                    <label class="home_login_label" >Password:</label><input class="home_login_input" type="password" name="home_password" placeholder="Password">
                </div>

                <div>
                    <div class="home_submit_style"></div>
                    <input id="home_submit" type="submit" name="submit" value="Login">
                    <div class="home_submit_style"></div>
                </div>
            </form>
        </div>
        <div class="clearAll"></div>
    </header>

    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="accountManagement.php">Account Management</a></li>
            <li><a href="manageQuotes.php">Manage Quotes</a></li>
            <li><a href="#">Manage Services</a></li>
        </ul>
    </nav>

    <section>
        <div id="manageServices">
            <form id="manage_service_form_style" name="manageServiceForm" method="post" action="">
                <div>
                    <label id="manage_service_search_label">Search:</label><input id="manage_service_search_input" type="text" name="" placeholder="Search service here"><button id="search_service_submit" type="submit" name="searchServiceSubmit">Search</button>
                </div>
                <div>
                    <label class="manage_service_form_label">Service ID:</label><input class="manage_service_form_input" type="text" name="service_ID" placeholder="Service ID">
                </div>
                <div>
                    <label class="manage_service_form_label">Job Category:</label><input class="manage_service_form_input" type="text" name="jobCategory" placeholder="Job Category">
                </div>
                <div>
                    <label class="manage_service_form_label">Job Type:</label><input class="manage_service_form_input" type="text" name="jobType" placeholder="Job Type">
                </div>
                <div>
                    <label class="manage_service_form_label">Job Time:</label><input class="manage_service_form_input" type="text" name="jobTime" placeholder="Job Time">
                </div>
                <div>
                    <label class="manage_service_form_label">Job Price:</label><input class="manage_service_form_input" type="text" name="jobPrice" placeholder="Job Price">
                </div>

                <button id="save_changes_button" type="button" name="save_changes_services">Save Changes</button>
                <button id="reset_changes_button" type="button" name="reset_changes_services">Reset Changes</button>

            </form>
        </div>
    </section>

    <footer>
    </footer>

</div>


</body>
</html>