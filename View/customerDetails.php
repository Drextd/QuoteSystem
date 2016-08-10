<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>customerDetails</title>
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
            <li><a href="customer_CP.php">Home</a></li>
            <li><a href="startQuote.php">Start a Quote</a></li>
            <li><a href="quoteHistory.php">Quote History</a></li>
            <li><a href="#">Customer Details</a></li>
        </ul>
    </nav>

    <section>
        <div id="accountManage">
            <form id="account_manage_form_style" name="accountManagementForm" method="post" action="">

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

                <div class="content_example2">Please contact us if you would require to make changes to your details<a href="contactUS.php">Click here</a></div>

            </form>
        </div>

    </section>

    <footer>
    </footer>

</div>

</body>
</html>