const form= document.getElementById('form');
const firstname= document.getElementById('firstname');
const lastname= document.getElementById('lastname');
const email= document.getElementById('email');
const phone= document.getElementById('phone');
const password= document.getElementById('password');


function validateForm(){
    if(firstname.value.trim()==''){
        setError(firstname,'Can not be empty');
    }else{
        setSuccess(firstname);
    }
    if(lastname.value.trim()==''){
        setError(lastname,'Can not be empty');
    }else{
        setSuccess(lastname);
    }
    if(email.value.trim()==''){
        setError(email,'Can not be empty');
    }else if(emailVaild(email.value)){
        setSuccess(email);
    }else{
        setError(email,'Provide valide email address');
    }
    if(phone.value.trim()==''){
        setError(phone,'Can not be empty');
    }else if(phoneValid(phone.value)){
        setSuccess(phone);
    }else{
        setError(phone,'Provide valide phone number');
    }
    if(password.value.trim()==''){
        setError(password,'Can not be empty');
    }else if(passwordValid(password.value)){
        setSuccess(password);

    }else{
        setError(password,'Password need to contain at least 6 characters, one numeric digit, one uppercase and one lowercase');
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

