<?php

require ('../View/header.php');

$viewQuote = $_POST['quoteID'];

/* Get quote details */
$result = viewQuote($viewQuote);

?>
<body>

<div class="form_container">
    <form class="form_style" name="manageQuoteFormChanges" method="post" action="">
        <div>
            <label class="label_style">Quote ID:</label><input class="input_style" type="text" id="quoteID" name="quoteID" placeholder="Quote ID">
        </div>
        <div>
            <label class="label_style">Customer ID:</label><input class="input_style" type="text" id="customerID" name="customerID" placeholder="Customer ID">
        </div
        <div>
            <label class="label_style">Job Category:</label><input class="input_style" type="text" id="jobCategory" name="jobCategory" placeholder="Job Category">
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
        <div>
            <button class="popup_button_style" type="submit" name="confirmQuoteToCustomer">Confirm Changes</button>
        </div>
        <div>
            <button class="popup_button_style" type="reset" name="reset_changes">Reset Form</button>
        </div>
        <div>
            <button class="popup_button_style" onclick="close_Popup()" type="button" name="closePopup">Close</button>
        </div>
    </form>
</div>

</body>
</html>