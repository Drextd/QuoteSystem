<?php

require ('../View/header.php');

?>
<body>

<div class="form_container">
    <form class="form_style" name="manageQuoteFormChanges" method="post" action="">
        <div>
            <label class="label_style">Quote ID:</label><input class="input_style" type="text" name="quote_ID" placeholder="Quote ID">
        </div>
        <div>
            <label class="label_style">Customer ID:</label><input class="input_style" type="text" name="customer_ID" placeholder="Customer ID">
        </div>
        <div>
            <label class="label_style">Service ID:</label><input class="input_style" type="text" name="service_ID" placeholder="Service ID">
        </div>
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
        <div>
            <button class="popup_button_style" type="button" name="confirmQuoteToCustomer">Confirm Changes</button>
        </div>
        <div>
            <button class="popup_button_style" type="button" name="reset_changes">Reset Changes</button>
        </div>
        <div>
            <button class="popup_button_style" onclick="close_Popup()" type="button" name="closePopup">Close</button>
        </div>
    </form>
</div>

</body>
</html>