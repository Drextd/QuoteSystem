<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>accountManagement</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<div id="accountManage">
    <form id="account_manage_form_style" name="registerForm" method="post" action="">
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

        <button id="save_changes_button" type="button" name="save_changes">Register!</button>
        <button id="reset_changes_button" type="button" name="reset_changes">Reset Form</button>
        <button class="popup_button_style" onclick="close_Popup()" type="button" name="closePopup">Close</button>

    </form>
</div>
</body>
</html>