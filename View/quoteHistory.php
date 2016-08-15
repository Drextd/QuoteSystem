<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>quoteHistory</title>
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
            <li><a href="#">Quote History</a></li>
            <li><a href="customerDetails.php">Customer Details</a></li>
        </ul>
    </nav>

    <section>
        <div class="content_example3">display quote 1 - will have pagination for more than 5</div>
        <div class="content_example3">display quote 2</div>
        <div class="content_example3">display quote 3</div>
        <div class="content_example3">display quote 4</div>
        <div class="content_example3">display quote 5</div>
    </section>

    <footer>
    </footer>

</div>

</body>
</html>