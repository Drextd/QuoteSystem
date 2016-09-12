<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>accountManagement</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>


<div class="form_container">
    <form class="form_style" name="registerForm" method="post" action="./Controller/registerCustomerProcess.php">
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

        <button class="button_style" type="submit" name="register">Register!</button>
        <button class="button_style" type="button" name="reset_changes">Reset Form</button>
        <button class="popup_button_style" onclick="close_Popup()" type="button" name="closePopup">Close</button>

    </form>
</div>
</body>
</html>