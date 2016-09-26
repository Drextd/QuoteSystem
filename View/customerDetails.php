<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

$customerUsername = $_SESSION['username'];

?>

<body>

<div id="container">

    <header>
        <div id="home_header_image">
            <div id="header_image">Header Image</div>
        </div>

        <div id="homeLogin">
            <div>
                <label class="home_login_label" >Logged in as:</label><div id="logged_in_style"><?php echo "$customerUsername" ?></div>
            </div>

            <div>
                <div class="home_submit_style"></div>
                <a id="logout_style" href="../Controller/logoutProcess.php">LogOut</a>
                <div class="home_submit_style"></div>
            </div>
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
        <div class="form_container">
            <form class="form_style" name="accountManagementForm" method="post" action="">

                <div>
                    <label class="label_style">Customer ID:</label><input class="input_style" type="text" name="customer_ID" placeholder="Customer ID">
                </div>
                <div>
                    <label class="label_style">Username:</label><input class="input_style" type="text" name="customer_Username" placeholder="Username">
                </div>
                <div>
                    <label class="label_style">Password:</label><input class="input_style" type="text" name="customer_Password" placeholder="Password">
                </div>
                <div>
                    <label class="label_style">First Name:</label><input class="input_style" type="text" name="customer_First_Name" placeholder="First Name">
                </div>
                <div>
                    <label class="label_style">Last Name:</label><input class="input_style" type="text" name="customer_Last_Name" placeholder="Last Name">
                </div>
                <div>
                    <label class="label_style">Email:</label><input class="input_style" type="email" name="customer_Email" placeholder="Email">
                </div>
                <div>
                    <label class="label_style">Phone:</label><input class="input_style" type="text" name="customer_Phone" placeholder="Phone">
                </div>

                <div class="content_example2">Please contact us if you would require to make changes to your details<a href="contactUS.php">Click here</a></div>

            </form>
        </div>

    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>

</body>
</html>