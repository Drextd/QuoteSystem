<?php

require ('../View/header.php');

?>
<body>

<div class="form_container">
    <form class="form_style" name="manageServiceForm" method="post" action="../Controller/addServiceProcess.php">
        <div>
            <label class="label_style">Job Category:</label><input class="input_style" type="text" id="jobCategory" name="jobCategory" placeholder="Job Category">
        </div>
        <div>
            <label class="label_style">Job Type:</label><input class="input_style" type="text" id="jobType" name="jobType" placeholder="Job Type">
        </div>
        <div>
            <label class="label_style">Job Time:</label><input class="input_style" type="text" id="jobTime" name="jobTime" placeholder="Job Time">
        </div>
        <div>
            <label class="label_style">Job Price:</label><input class="input_style" type="text" id="jobPrice" name="jobPrice" placeholder="Job Price">
        </div>

        <button class="button_style" type="submit" name="add_services">Add Service</button>
        <button class="button_style" type="reset" name="reset_changes_services">Reset Form</button>
        <button class="popup_button_style" onclick="close_Popup()" type="button" name="closePopup">Close</button>
    </form>
</div>

</body>
</html>