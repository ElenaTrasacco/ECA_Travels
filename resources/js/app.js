import './bootstrap';
import 'bootstrap';


let links = document.querySelectorAll('.nav-link')




window.onscroll=()=>{
    if(window.scrollY>20)
    {
        links.forEach((link) => {
            
            link.classList.remove('navColor1')
            link.classList.add('navColor2')
        });

    }
    else{
        links.forEach((link) => {
            
            link.classList.remove('navColor2')
            link.classList.add('navColor1')
            
        });

    }
}