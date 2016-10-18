<?php

require ('../View/header.php');

?>
<body>

<nav>

    <div id="loginContainer">
        <form id="loginStyle" name="homeLoginForm" method="post" action="../Controller/processUser.php" onSubmit="return loginValidation();" novalidate>
            <div>
                <label class="loginLabelStyle" >Username:</label><input class="loginInputStyle" type="text" id="home_username" name="home_username" placeholder="Username" pattern="^[A-Za-z]+$">
            </div>

            <div>
                <label class="loginLabelStyle" >Password:</label><input class="loginInputStyle" type="password" id="home_password" name="home_password" placeholder="Password" pattern="^[A-Za-z]+$">
            </div>
            <div>
                <button class="buttonStyle" type="submit" name="home_login_submit">Login</button>
            </div>
        </form>
    </div>

    <ul>
        <li><a class="hvr-fade" href="../index.php">Home</a></li>
        <li><a class="hvr-fade, activeTab" href="#">Services</a></li>
        <li><a class="hvr-fade" href="contactUS.php">Contact Us</a></li>
    </ul>

</nav>


<div id="error_div"></div>
<div id="container">


    <header>
        <h1>QuoteSystem - TAFE Project</h1>
    </header>

    <section>
        <div class="content_example3">Service Listing</div>
        <div class="content_example3">Service Listing</div>
    </section>

    <footer>

        <?php

        include 'footer.php';

        ?>

    </footer>

</div>


</body>
</html>