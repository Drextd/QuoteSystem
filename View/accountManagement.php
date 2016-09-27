<?php
session_start();

require ('../Controller/userSecurityCheck.php');
require ('../View/header.php');

$adminUsername = $_SESSION['username'];

?>

<body>

<div id="container">

    <header>
        <div id="home_header_image">
            <div id="header_image">Header Image</div>
        </div>

        <div id="homeLogin">
            <div>
                <label class="home_login_label" >Logged in as:</label><div id="logged_in_style"><?php echo "$adminUsername" ?></div>
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
            <li><a href="admin_CP.php">Home</a></li>
            <li><a href="#">Account Management</a></li>
            <li><a href="manageQuotes.php">Manage Quotes</a></li>
            <li><a href="manageServices.php">Manage Services</a></li>
        </ul>
    </nav>

    <section>
        <div class="form_container">
            <form class="form_style" id="searchCustomerForm" action="#">
                <div>
                    <label class="label_style">Search:</label><input class="input_style" type="text" id="searchCustomerInput" name="searchCustomerInput" placeholder="Search customer here"><button class="search_button_style" type="button" id="searchSubmit" name="searchSubmit" onclick="do_ajax()" >Search</button>
                </div>
            </form>
            <form class="form_style" id="CustomerForm" method="post" action="#">
                <div>
                    <label class="label_style">Customer ID:</label><input class="input_style" type="text" id="customerID" name="customer_ID" placeholder="Customer ID">
                </div>
                <div>
                    <label class="label_style">Username:</label><input class="input_style" type="text" id="customerUsername" name="customer_Username" placeholder="Username">
                </div>
                <div>
                    <label class="label_style">Password:</label><input class="input_style" type="text" id="customerPassword" name="customer_Password" placeholder="Password">
                </div>
                <div>
                    <label class="label_style">First Name:</label><input class="input_style" type="text" id="customerFirstName" name="customer_First_Name" placeholder="First Name">
                </div>
                <div>
                    <label class="label_style">Last Name:</label><input class="input_style" type="text" id="customerLastName" name="customer_Last_Name" placeholder="Last Name">
                </div>
                <div>
                    <label class="label_style">Email:</label><input class="input_style" type="email" id="customerEmail" name="customer_Email" placeholder="Email">
                </div>
                <div>
                    <label class="label_style">Phone:</label><input class="input_style" type="text" id="customerPhone" name="customer_Phone" placeholder="Phone">
                </div>

                <button class="button_style" type="button" name="save_changes">Save Changes</button>
                <button class="button_style" type="button" name="reset_changes">Reset Changes</button>
            </form>
        </div>
    </section>

    <footer>
        <div id="json"></div>
        <?php 

        include 'footer.php';
        
        ?>

    </footer>

</div>


</body>
</html>