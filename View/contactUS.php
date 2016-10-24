<?php

require ('../View/header.php');

?>
<body>

<nav>

    <div id="loginContainer">
        <form id="loginStyle" name="homeLoginForm" method="post" action="../Controller/processUser.php" onSubmit="return loginValidation();" novalidate>
            <div>
                <label class="loginLabelStyle" >Username:</label><input class="loginInputStyle" type="text" id="home_username" name="home_username" placeholder="Username" pattern="^[A-Za-z0-9]+$">
            </div>

            <div>
                <label class="loginLabelStyle" >Password:</label><input class="loginInputStyle" type="password" id="home_password" name="home_password" placeholder="Password" pattern="^[A-Za-z0-9]+$">
            </div>
            <div>
                <button class="buttonStyle" type="submit" name="home_login_submit">Login</button>
            </div>
        </form>
    </div>

    <ul>
        <li><a class="hvr-fade" href="../index.php">Home</a></li>
        <li><a class="hvr-fade" href="services.php">Services</a></li>
        <li><a class="hvr-fade, activeTab" href="#">Contact Us</a></li>
    </ul>

    <ul class="rslides">
        <li><img src="../img/carpentry.jpg" alt=""></li>
        <li><img src="../img/electrician.jpeg" alt=""></li>
        <li><img src="../img/plumbing.jpg" alt=""></li>
    </ul>

</nav>


<div id="error_div"></div>
<div id="container">


    <header>
        <h1>QuoteSystem - TAFE Project</h1>
    </header>


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