const form= document.querySelector('#form');
const email= document.querySelector('#email');
const password= document.querySelector('#password');

form.addEventListener('submit',(event)=>{

    event.preventDefault();
    if(validateForm()===true){
        document.querySelector('#form').submit();
    }

})

function validateForm(){
    emailValidation(email);
   passwordValidation(password);

   if(emailValidation(email)===true && passwordValidation(password)===true){
    return true;
   }
}

function setError(element,message){
    const parent=element.parentElement;
    if(parent.classList.contains('success')){
        parent.classList.remove('success');
    }
    parent.classList.add('error');

    const paragraph = parent.querySelector('small');
    paragraph.textContent=message;

}

function setSuccess(element){
    const parent=element.parentElement;
    if(parent.classList.contains('error')){
        parent.classList.remove('error');
    }
    parent.classList.add('success');
}

function emailVaild(email){
    const reg= /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return reg.test(email);
}

function passwordValid(password){
    const reg=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    return reg.test(password);
}

function emailValidation(email){
    if(email.value.trim()===''){
        setError(email,'Can not be empty');
    }else if(emailVaild(email.value)){
        setSuccess(email);
        return true;
    }else{
        setError(email,'Provide valide email address');
    }
}

function passwordValidation(password){
    if(password.value.trim()===''){
        setError(password,'Can not be empty');
    }else if(passwordValid(password.value)){
        setSuccess(password);
        return true;

    
    }else{
        setError(password,'Password must contain at least 6 characters, one numeric digit, one uppercase and one lowercase');
    }
}