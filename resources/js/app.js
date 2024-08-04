import './bootstrap';
import 'bootstrap';


let links = document.querySelectorAll('.nav-link')
let nav = document.querySelector('.navbar')
let drop = document.querySelector('.dropstartCustom')





window.onscroll=()=>{
    if(window.scrollY > 0)
    {
        links.forEach((link) => {
            
            link.classList.remove('navColor1')
            link.classList.add('navColor2')
            nav.style.backgroundColor="rgb(24, 122, 241, 0.977)"
            drop.style.backgroundColor="rgba(24, 122, 241)"
        });

    }
    else{
        links.forEach((link) => {
            
            link.classList.remove('navColor2')
            link.classList.add('navColor1')
            nav.style.backgroundColor="rgb(22, 162, 255, 0.31)"
            drop.style.backgroundColor="rgb(202, 240, 248)"
            
        });

    }
}