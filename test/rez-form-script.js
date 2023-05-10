const form= document.querySelector('#rez-form');

form.addEventListener('submit',(event)=>{

    this.style['display']=none;
    event.preventDefault();
    document.querySelector('#rez-form').submit();
}

)