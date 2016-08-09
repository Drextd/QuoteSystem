<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>accountManagement</title>
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
            <li><a href="#">Account Management</a></li>
            <li><a href="manageQuotes.php">Manage Quotes</a></li>
            <li><a href="manageServices.php">Manage Services</a></li>
        </ul>
    </nav>

    <section>
        <div id="accountManage">
            <form id="account_manage_form_style" name="accountManagementForm" method="post" action="">
                <div>
                    <label id="account_manage_search_label">Search:</label><input id="account_manage_search_input" type="text" name="" placeholder="Search customer here"><button id="search_submit" type="submit" name="searchSubmit">Search</button>
                </div>
                <div>
                    <label class="account_manage_form_label">Customer ID:</label><input class="account_manage_form_input" type="text" name="customer_ID" placeholder="Customer ID">
                </div>
                <div>
                    <label class="account_manage_form_label">Username:</label><input class="account_manage_form_input" type="text" name="customer_Username" placeholder="Username">
                </div>
                <div>
                    <label class="account_manage_form_label">Password:</label><input class="account_manage_form_input" type="text" name="customer_Password" placeholder="Password">
                </div>
                <div>
                    <label class="account_manage_form_label">First Name:</label><input class="account_manage_form_input" type="text" name="customer_First_Name" placeholder="First Name">
                </div>
                <div>
                    <label class="account_manage_form_label">Last Name:</label><input class="account_manage_form_input" type="text" name="customer_Last_Name" placeholder="Last Name">
                </div>
                <div>
                    <label class="account_manage_form_label">Email:</label><input class="account_manage_form_input" type="email" name="customer_Email" placeholder="Email">
                </div>
                <div>
                    <label class="account_manage_form_label">Phone:</label><input class="account_manage_form_input" type="text" name="customer_Phone" placeholder="Phone">
                </div>

                <button id="save_changes_button" type="button" name="save_changes">Save Changes</button>
                <button id="reset_changes_button" type="button" name="reset_changes">Reset Changes</button>

            </form>
        </div>
    </section>

    <footer>
    </footer>

</div>


</body>
</html>