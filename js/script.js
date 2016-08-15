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

    jQuery("#popupbox").load("view/registrationPage.php");

}

function close_Popup(){
    
    document.getElementById('grey_background').style.display = "none";
    document.getElementById('popupbox').style.display = "none";
    
}