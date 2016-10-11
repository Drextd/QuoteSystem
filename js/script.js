
function openDelayAdmin(){

    setTimeout(function (){
        window.location.href = "../View/admin_CP.php";}, 2000);
}

function openDelayCustomer(){

    setTimeout(function (){
        window.location.href = "../View/customer_CP.php";}, 2000);
}

function logoutDelay(){
    setTimeout(function (){
        window.location.href = "../index.php";}, 2000);
}

function registerDelay(){
    setTimeout(function (){
        window.location.href = "../index.php";}, 2000);
}

function updateDelay(){
    setTimeout(function (){
        window.location.href = "./View/accountManagement.php";}, 2000);
}

function serviceLoad(){
    setTimeout(function (){
        window.location.href = "../View/manageServices.php";}, 2000);
}

function runLogout(){
    window.location.href = "../Controller/logoutProcess.php";
}


function loginValidation(){
    
    error = 0;
    error_div.innerHTML = '';
    
    if(!home_username.checkValidity()) {
        error_div.style.display = 'block';
        error_div.innerHTML += 'Please enter a valid username<br/>';
        error++;
    }
    if(home_username.value == ''){
        error_div.style.display = 'block';
        error_div.innerHTML += 'Please enter a username<br/>';
        error++;
    }
    if(!home_password.checkValidity()) {
        error_div.style.display = 'block';
        error_div.innerHTML += 'Please enter a valid password<br/>';
        error++;
    }
    if(home_password.value == ''){
        error_div.style.display = 'block';
        error_div.innerHTML += 'Please enter a password<br/>';
        error++;
    }
    
    if(error == 0) {
        return true;
    } else {
        return false;
    }
}

function registerValidation(){

    error = 0;
    error_div_regi.innerHTML = '';

    if(!customer_Username.checkValidity()) {
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a valid username<br/>';
        error++;
    }
    if(customer_Username.value == ''){
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a username<br/>';
        error++;
    }
    if(!customer_Password.checkValidity()) {
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a valid password<br/>';
        error++;
    }
    if(customer_Password.value == ''){
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a password<br/>';
        error++;
    }
    if(!customer_First_Name.checkValidity()) {
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a valid format (Letters only)<br/>';
        error++;
    }
    if(customer_First_Name.value == ''){
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a first name<br/>';
        error++;
    }
    if(!customer_Last_Name.checkValidity()) {
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a valid format (Letters only)<br/>';
        error++;
    }
    if(customer_Last_Name.value == ''){
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a last name<br/>';
        error++;
    }
    if(!customer_Email.checkValidity()) {
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a valid email (Example: email@email.com)<br/>';
        error++;
    }
    if(customer_Email.value == ''){
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter an email<br/>';
        error++;
    }
    if(!customer_Phone.checkValidity()) {
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a valid phone number (Example: 400000000)<br/>';
        error++;
    }
    if(customer_Phone.value == ''){
        error_div_regi.style.display = 'block';
        error_div_regi.innerHTML += 'Please enter a phone number<br/>';
        error++;
    } 

    if(error == 0) {
        return true;
    } else {
        return false;
    }
}

// --- Ajax functions --- //

function searchCustomerAjax(){
    $.ajax({
        url: '../Controller/searchCustomerProcess.php',
        method: 'POST',
        data: $('#searchCustomerForm').serialize(),
        dataType: 'json',
        success: function searchCustomer(searchData){

        for (var key in searchData) {
            var outdata = '';
            for (var subkey in searchData[key]) {
                document.getElementById(subkey).value = searchData[key][subkey];
                outdata += subkey + ' ' + searchData[key][subkey] + ' ';
            }
        }
    }
    });
}

function searchServiceAjax(){
    $.ajax({
        url: '../Controller/searchServiceProcess.php',
        method: 'POST',
        data: $('#searchServiceForm').serialize(),
        dataType: 'json',
        success: function searchService(searchData){

            for (var key in searchData){
                var outdata = '';
                for (var subkey in searchData[key]){
                    document.getElementById(subkey).value = searchData[key][subkey];
                    outdata += subkey + ' ' + searchData[key][subkey] + ' ';
                }
            }
        }
    });
}

$(document).ready(function () {
    $('#jobCategory').change(function () {

        $('#serviceType').empty();

        var jobCatDropDown = document.getElementById('jobCategory').value;

        $.ajax({
            url: '../Controller/serviceTypeSelectProcess.php',
            dataType: 'json',
            success: function serviceTypeDropDown(sTDropDown) {
                for (var a = 0; a < sTDropDown.length; a++) {
                    if (sTDropDown[a].categoryID == jobCatDropDown) {
                        $('#serviceType').append('<option value="' + sTDropDown[a].serviceType + '">' + sTDropDown[a].serviceType + '</option>');
                    }
                }
            }
        });
    });
});

$(document).ready(function (){
    $('#serviceType').change(function(){

        var startQuotePopulate = document.getElementById('serviceType').value;

            $.ajax({
                url: '../Controller/populateQuoteProcess.php',
                dataType: 'json',
                success: function populateQuote(popQuote) {

                    for (var a = 0; a < popQuote.length; a++) {
                        if (popQuote[a].serviceType == startQuotePopulate) {
                            $('#serviceTime').html('<input value="' + popQuote[a].serviceTime + '">');
                            $('#servicePrice').html('<input value="' + popQuote[a].servicePrice + '">');
                               $('#serviceTime').val('' + popQuote[a].serviceTime + '');
                               $('#servicePrice').val('' + popQuote[a].servicePrice + '');
                        }
                    }
                }
            });

    });
});

function openQuoteConfirm(){

    document.getElementById('grey_background').style.display = "block";
    document.getElementById('popupbox').style.display = "block";

    jQuery("#popupbox").load("quoteConfirmPage.php");

}

function openQuoteManage(){

    document.getElementById('grey_background').style.display = "block";
    document.getElementById('popupbox').style.display = "block";

    jQuery("#popupbox").load("quoteManagePage.php");

}

function openAddService(){

    document.getElementById('grey_background').style.display = "block";
    document.getElementById('popupbox').style.display = "block";

    jQuery("#popupbox").load("addServicePage.php");

}

function openRegistration(){

    document.getElementById('grey_background').style.display = "block";
    document.getElementById('popupbox').style.display = "block";

    jQuery("#popupbox").load("View/registrationPage.php");

}

function close_Popup(){
    
    document.getElementById('grey_background').style.display = "none";
    document.getElementById('popupbox').style.display = "none";

}