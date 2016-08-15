<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>customer_CP</title>
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
            <li><a href="#">Home</a></li>
            <li><a href="startQuote.php">Start a Quote</a></li>
            <li><a href="quoteHistory.php">Quote History</a></li>
            <li><a href="customerDetails.php">Customer Details</a></li>
        </ul>
    </nav>

    <section>
        <div class="content_example3">display contact us info</div>
        <div class="content_example3">display most recent quote, Quote ID, Job Category</div><button type="button" name="open_quote_recent" onclick="openQuoteRecent()">Click to confirm</button>
    </section>

    <footer>
    </footer>

</div>

<div id="grey_background"></div>
<div id="popupbox"></div>

</body>
</html>