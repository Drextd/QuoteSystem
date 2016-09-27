
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

function do_ajax(){
    $.ajax({
        url: '../Controller/searchCustomerProcess.php',
        method: 'POST',
        data: $('#searchCustomerForm').serialize(),
        dataType: 'json'
    })
        .done(function (searchCustomer) {
            for (var i in searchCustomer){
                $('input[name="'+i+'"]').val(searchCustomer[i]);
            }
            // console.log(JSON.stringify(searchCustomer));
        })
        .fail(function(error){
           console.log(error);
        });
}

function openQuoteConfirm(){

    document.getElementById('grey_background').style.display = "block";
    document.getElementById('popupbox').style.display = "block";

    jQuery("#popupbox").load("quoteConfirmPage.php");

}

function openQuoteRecent(){

    document.getElementById('grey_background').style.display = "block";
    document.getElementById('popupbox').style.display = "block";

    jQuery("#popupbox").load("quoteRecentPage.php");

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
    document.getElementById('error_div_regi').style.display = "none";

}