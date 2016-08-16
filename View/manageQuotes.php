<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>manageQuotes</title>
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

<<<<<<< HEAD
                <button class="button_style" type="button" name="view_quote" onclick="openQuoteManage()">View Quote</button>
                <button class="button_style" type="button" name="reset_quote_search">Reset Search</button>
=======
                <button id="view_quote_button" type="button" name="view_quote" onclick="openQuoteManage()">View Quote</button>
                <button id="reset_quote_search_button" type="button" name="reset_quote_search">Reset Search</button>
>>>>>>> origin/master

            </form>
        </div>
    </section>

    <footer>
    </footer>

</div>

<div id="grey_background"></div>
<div id="popupbox"></div>


</body>
</html>