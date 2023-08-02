
const form= document.querySelector('#form');
const firstname= document.querySelector('#firstname');
const lastname= document.querySelector('#lastname');
const email= document.querySelector('#email');
const phone= document.querySelector('#phone');
const password= document.querySelector('#password');

form.addEventListener('submit',(event)=>{

    event.preventDefault();
    if(validateForm()===true){
        document.querySelector('#form').submit();
    }

})


function validateForm(){
   firstnameValidation(firstname);
   lastnameValidation(lastname);
   emailValidation(email);
   phoneValidation(phone);
   passwordValidation(password);
    
    
    
    
    if(firstnameValidation(firstname)===true && lastnameValidation(lastname)===true && emailValidation(email)===true && phoneValidation(phone)===true && passwordValidation(password)===true){
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

function phoneValid(phone){
    const reg=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return reg.test(phone);
}

function passwordValid(password){
    const reg=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    return reg.test(password);
}

function firstnameValidation(fisrtname){
    if(firstname.value.trim()===''){
        setError(firstname,'Can not be empty');
        return false;
    }else{
        setSuccess(firstname);
        return true;
    }
}

function lastnameValidation(lastname){

    if(lastname.value.trim()===''){
        setError(lastname,'Can not be empty');
        return false;
    }else{
        setSuccess(lastname);
        return true;
    }
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

function phoneValidation(phone){
    if(phone.value.trim()===''){
        setError(phone,'Can not be empty');
    }else if(phoneValid(phone.value)){
        setSuccess(phone);
        return true;
    }else{
        setError(phone,'Provide valide phone number');
    }
}

function passwordValidation(password){
    if(password.value.trim()===''){
        setError(password,'Can not be empty');
    }else if(passwordValid(password.value)){
        setSuccess(password);
        return true;

    }else{
        setError(password,'Password need to contain at least 6 characters, one numeric digit, one uppercase and one lowercase');
    }
}
