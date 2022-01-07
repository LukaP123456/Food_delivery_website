let menu_button = document.querySelector('#menu-bars')
let menu_list = document.querySelector('.navbar')

menu_button.onclick = () =>{
    menu_list.classList.toggle("opened");
}

function loader(){
    document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut(){
    setInterval(loader,3000);
}

window.onload = fadeOut;