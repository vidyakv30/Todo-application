
function validateToRegister(){
    emailFlag = isValidEmail(signupform.email.value);
    if(!emailFlag) {
        document.getElementById('message').innerHTML="Invalid Email";
        document.getElementById('signupalert').style.display="block";

    }
    else if(document.getElementById('fname').value=='' || document.getElementById('fname').value.length<1){
        document.getElementById('message').innerHTML="Invalid First Name. First Name should be atleast 1 character.";
        document.getElementById('signupalert').style.display="block";
    }
    else if(document.getElementById('lname').value=='' || document.getElementById('lname').value.length<1){
        document.getElementById('message').innerHTML="Invalid Last Name. Last Name should be atleast 1 character.";
        document.getElementById('signupalert').style.display="block";
    }
    else if(document.getElementById('registerPwd').value=='' || document.getElementById('registerPwd').value.length<6){
        document.getElementById('message').innerHTML="Invalid Password. Password should be atleast 6 characters.";
        document.getElementById('signupalert').style.display="block";
    }
    else{
        document.getElementById('signupform').submit();
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
    document.getElementById('serverValidationRegisterErrors').style.display = "none";
    document.getElementById('registerInvalidMessage').innerHTML='';
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

function validateTaskFields(){
    if (document.getElementById('message').value==''||document.getElementById('message').value.length<2){
        document.getElementById('newTaskAlert').style.display = "block";
        document.getElementById('errorMessageInTask').innerHTML="Message should be more that 1 character";
    }
    else{
        document.getElementById('createTaskForm').submit();
    }

}

function hideErrorMessageInTask(){
    document.getElementById('newTaskAlert').style.display = "none";
    document.getElementById('errorMessageInTask').innerHTML="";
}