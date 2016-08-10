<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>accountManagement</title>
    <link href="../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<div id="manageServices">
    <form id="manage_service_form_style" name="manageServiceForm" method="post" action="">
        <div>
            <label class="manage_service_form_label">Job Category:</label><input class="manage_service_form_input" type="text" name="jobCategory" placeholder="Job Category">
        </div>
        <div>
            <label class="manage_service_form_label">Job Type:</label><input class="manage_service_form_input" type="text" name="jobType" placeholder="Job Type">
        </div>
        <div>
            <label class="manage_service_form_label">Job Time:</label><input class="manage_service_form_input" type="text" name="jobTime" placeholder="Job Time">
        </div>
        <div>
            <label class="manage_service_form_label">Job Price:</label><input class="manage_service_form_input" type="text" name="jobPrice" placeholder="Job Price">
        </div>

        <button id="save_changes_button" type="button" name="add__services">Add Service</button>
        <button id="reset_changes_button" type="button" name="reset_changes_services">Reset Changes</button>
        <button class="popup_button_style" onclick="close_Popup()" type="button" name="closePopup">Close</button>
    </form>
</div>

</body>
</html>