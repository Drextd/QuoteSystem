<?php

require ('../View/header.php');

?>
<body>

<div class="form_container">
    <form class="form_style" name="manageServiceForm" method="post" action="">
        <div>
            <label class="label_style">Job Category:</label><input class="input_style" type="text" name="jobCategory" placeholder="Job Category">
        </div>
        <div>
            <label class="label_style">Job Type:</label><input class="input_style" type="text" name="jobType" placeholder="Job Type">
        </div>
        <div>
            <label class="label_style">Job Time:</label><input class="input_style" type="text" name="jobTime" placeholder="Job Time">
        </div>
        <div>
            <label class="label_style">Job Price:</label><input class="input_style" type="text" name="jobPrice" placeholder="Job Price">
        </div>

        <button class="button_style" type="button" name="add_services">Add Service</button>
        <button class="button_style" type="button" name="reset_changes_services">Reset Changes</button>
        <button class="popup_button_style" onclick="close_Popup()" type="button" name="closePopup">Close</button>
    </form>
</div>

</body>
</html>