'use strict';
window.addEventListener('DOMContentLoaded',()=>{
    document.querySelector('.theme-toggler__switch').addEventListener('click',(e)=>{
        e.stopPropagation();
        console.log('click');
        document.body.classList.toggle("dark-mode")
    })
});