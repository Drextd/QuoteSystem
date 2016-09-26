<?php

require ('../View/header.php');

?>
<body>
<div id="error_div"></div>
<div id="container">

    <header>
        <div id="home_header_image">
            <div id="header_image">Header Image</div>
        </div>

        <div id="homeLogin">
            <form id="home_login_style" name="homeLoginForm" method="post" action="../Controller/processUser.php" onSubmit="return loginValidation();" novalidate>
                <div>
                    <label class="home_login_label" >Username:</label><input class="home_login_input" type="text" id="home_username" name="home_username" placeholder="Username" pattern="^[A-Za-z]+$">
                </div>

                <div>
                    <label class="home_login_label" >Password:</label><input class="home_login_input" type="password" id="home_password" name="home_password" placeholder="Password" pattern="^[A-Za-z]+$">
                </div>

                <div>
                    <div class="home_submit_style"></div>
                    <button id="home_submit" type="submit" name="home_login_submit">Login</button>
                    <div class="home_submit_style"></div>
                </div>
            </form>
        </div>
        <div class="clearAll"></div>
    </header>

    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>

    <section>
        <div class="content_example3">Business Contact Details</div>
    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>


</body>
</html>