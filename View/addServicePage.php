<?php

require ('../View/header.php');
require ('../Model/dbConnect.php');
require ('../Model/database_functions.php');

?>
<body>

<div class="form_container">
    <form class="form_style" name="manageServiceForm" method="post" action="../Controller/addServiceProcess.php">
        <div>
            <label class="label_style">Job Category:</label><select class="input_style" id="jobCategory" name="jobCategory">
                <option>Please select a Category</option>
                <?php

                $jobCatDropDown = getJobCategoryDropDown();

                foreach($jobCatDropDown as $row):
                    echo "<option value=" . $row['categoryID'] . ">" . $row['jobCategory'] . "</option>";
                endforeach;

                ?>
            </select>
        </div>
        <div>
            <label class="label_style">Service Type:</label><input class="input_style" type="text" id="serviceType" name="serviceType" placeholder="Service Type">
        </div>
        <div>
            <label class="label_style">Service Time:</label><input class="input_style" type="text" id="serviceTime" name="serviceTime" placeholder="Service Time">
        </div>
        <div>
            <label class="label_style">Service Price:</label><input class="input_style" type="text" id="servicePrice" name="servicePrice" placeholder="Service Price">
        </div>

        <button class="button_style" type="submit" name="add_services">Add Service</button>
        <button class="button_style" type="reset" name="reset_changes_services">Reset Form</button>
        <button class="popup_button_style" onclick="close_Popup()" type="button" name="closePopup">Close</button>
    </form>
</div>

</body>
</html>