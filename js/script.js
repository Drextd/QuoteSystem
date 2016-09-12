
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
    
}