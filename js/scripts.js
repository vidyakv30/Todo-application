
function validateAndRegister(){
    emailFlag = isValidEmail(signupform.email.value);
    if(emailFlag) {
        document.getElementById('signupform').submit();
    }
    else{
        document.getElementById('message').innerHTML="Invalid Email";
        document.getElementById('signupalert').style.display="block";
    }
}

function isValidEmail(email){
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        return true;
    }
    return (false)
}

function resetSignUpError(){

    document.getElementById('signupalert').style.display="none";
    document.getElementById('message').innerHTML="";
}

function validateBeforeSignin(){
    emailFlag = isValidEmail(loginform.email.value);

    if(emailFlag) {
        document.getElementById('loginform').submit();
    }
    else{
        document.getElementById('signInErrorMessage').innerHTML="Invalid Email";
        document.getElementById('loginalert').style.display="block";
    }
}


function resetSignInError(){
    if(document.getElementById('serverValidationErrors')!=null) {
        document.getElementById('serverValidationErrors').style.display = "none";
        document.getElementById('signInInvalidMessage').innerHTML = "";
    }
    if(document.getElementById('loginalert')!=null) {
        document.getElementById('loginalert').style.display = "none";
        document.getElementById('signInErrorMessage').innerHTML = "";
    }
}

function clearPwdErrorSuccessMessages(){
    if(document.getElementById('changePwdSuccess')!=null) {
        document.getElementById('changePwdSuccess').style.display = "none";
        document.getElementById('changePwdSuccessMessage').innerHTML = "";
    }
    if(document.getElementById('changePwdError')!=null) {
        document.getElementById('changePwdError').style.display = "none";
        document.getElementById('changePwdInvalidMessage').innerHTML = "";
    }
}