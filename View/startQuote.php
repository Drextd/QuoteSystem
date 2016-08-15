<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>startQuote</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <script src="../js/script.js" type="text/javascript"></script>
    <script src="../js/jquery-3.1.0.min.js" type="text/javascript"></script>
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
            <li><a href="customer_CP.php">Home</a></li>
            <li><a href="#">Start a Quote</a></li>
            <li><a href="quoteHistory.php">Quote History</a></li>
            <li><a href="customerDetails.php">Customer Details</a></li>
        </ul>
    </nav>

    <section>

<<<<<<< HEAD
        <div class="form_container">
            <form class="form_style" name="manageServiceForm" method="post" action="">
                <div>
                    <label class="label_style">Job Category:</label><select class="input_style" name="jobCategory"><option>Dropdown to show categories</option></select>
                </div>
                <div>
                    <label class="label_style">Job Type:</label><select class="input_style"  name="jobType"><option>Dropdown to show job types</option></select>
                </div>
                <div>
                    <label class="label_style">Job Time:</label><input class="input_style" type="text" name="jobTime" placeholder="Job Time">
                </div>
                <div>
                    <label class="label_style">Job Price:</label><input class="input_style" type="text" name="jobPrice" placeholder="Job Price">
                </div>

                <button class="button_style" type="button" name="add__services">Request Quote</button>
                <button class="button_style" type="button" name="reset_changes_services">Reset Quote</button>
=======
        <div id="manageServices">
            <form id="manage_service_form_style" name="manageServiceForm" method="post" action="">
                <div>
                    <label class="manage_service_form_label">Job Category:</label><select class="manage_service_form_input" name="jobCategory"><option>Dropdown to show categories</option></select>
                </div>
                <div>
                    <label class="manage_service_form_label">Job Type:</label><select class="manage_service_form_input"  name="jobType"><option>Dropdown to show job types</option></select>
                </div>
                <div>
                    <label class="manage_service_form_label">Job Time:</label><input class="manage_service_form_input" type="text" name="jobTime" placeholder="Job Time">
                </div>
                <div>
                    <label class="manage_service_form_label">Job Price:</label><input class="manage_service_form_input" type="text" name="jobPrice" placeholder="Job Price">
                </div>

                <button id="save_changes_button" type="button" name="add__services">Request Quote</button>
                <button id="reset_changes_button" type="button" name="reset_changes_services">Reset Quote</button>
>>>>>>> origin/master
            </form>
        </div>




    </section>

    <footer>
    </footer>

</div>

</body>
</html>