'use strict';
window.addEventListener('DOMContentLoaded',()=>{
    document.querySelector('.theme-toggler__switch').addEventListener('click',(e)=>{
        document.body.classList.toggle("dark-mode")
    })
});