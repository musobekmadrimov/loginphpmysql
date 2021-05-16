let username = document.querySelector('#username');
let password = document.querySelector('#password');

username.addEventListener('focus', ()=>{
    username.setAttribute('class', 'focus');
})

password.addEventListener('focus', ()=>{
    password.setAttribute('class', 'focus');
})

username.addEventListener('blur', ()=>{
    if(username.value == "")
    username.removeAttribute('class', 'focus');
})

password.addEventListener('blur', ()=>{
    if(password.value == "")
    password.removeAttribute('class', 'focus');
})


function showHidePassword(){
    if(password.type == 'password'){
        password.type = 'text';
    } else {
        password.type = 'password';
    }
}
