'use strict';
const RoadMapGaming = 'NoikerRoadMapThemes.js'
window.addEventListener('DOMContentLoaded',()=>{
    const theme = localStorage.getItem(RoadMapGaming)
    if (theme=='true'){
        document.body.classList.add("dark-mode")
    }

    document.querySelector('.theme-toggler__switch').addEventListener('click',()=>{
        document.body.classList.toggle("dark-mode")
        if (document.body.classList.contains('dark-mode')){
            localStorage.setItem(RoadMapGaming,false);
        } else {
            localStorage.setItem(RoadMapGaming,true);
        }
    });
});