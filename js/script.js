let menu_button = document.querySelector('#menu-bars')
let menu_list = document.querySelector('.navbar')

menu_button.onclick = () =>{
    menu_list.classList.toggle("opened");
}