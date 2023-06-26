'use strict';


window.addEventListener('DOMContentLoaded',()=>{

    // ==================== Замут с темной и светлой темлой ========================= 
    // переманная LocalStorage для темы
    const RoadMapGamingTheme = 'NoikerRoadMapThemes.js'
    // базавая установка темы
    localStorage.getItem(RoadMapGamingTheme)==null?localStorage.setItem(RoadMapGamingTheme,false):[];
    // проверка какую включить 
    if (localStorage.getItem(RoadMapGamingTheme)!='false'){
        document.body.classList.add("dark-mode")
        document.querySelector('.theme-toggler__checkbox').checked=true;
    }
    // переключение темы по клику чекбокса
    document.querySelector('.theme-toggler__switch').addEventListener('click',()=>{
        document.body.classList.toggle("dark-mode")
        if (document.body.classList.contains("dark-mode")){
            localStorage.setItem(RoadMapGamingTheme,true)
        } else {
            localStorage.setItem(RoadMapGamingTheme,false)
        }
    });
    // ===================== Конец замута с темной и светлой темой ===========================
    //........................................................................................ 
    // ===================== Замут с окном FAQ ===============================================
    // HTML окна
    const str=`
    <div class="faq" style="display: none; width: 500px;" id="FAQhidden">
        <h3 class="faq__title">Web Skills FAQ</h3>
        <div class="faq__qestion">
            <b class="faq__subtitle">What is Web Skills?</b>
            <p class="faq__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aliquam laudantium perferendis eos quo? Harum repudiandae dolor ipsam eligendi? Blanditiis neque ab dolores distinctio delectus aliquam sed ut numquam fugit?
            Mollitia ipsa facere quibusdam, tempora repudiandae optio consequuntur tenetur distinctio iure tempore suscipit ad commodi nisi!</p>
        </div>
        <div class="faq__qestion">
            <b class="faq__subtitle">What is Web Skills?</b>
            <p class="faq__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aliquam laudantium perferendis eos quo? Harum repudiandae dolor ipsam eligendi? Blanditiis neque ab dolores distinctio delectus aliquam sed ut numquam fugit?
            Mollitia ipsa facere quibusdam, tempora repudiandae optio consequuntur tenetur distinctio iure tempore suscipit ad commodi nisi!</p>
        </div>
        <div class="faq__qestion">
            <b class="faq__subtitle">What is Web Skills?</b>
            <p class="faq__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate aliquam laudantium perferendis eos quo? Harum repudiandae dolor ipsam eligendi? Blanditiis neque ab dolores distinctio delectus aliquam sed ut numquam fugit?
            Mollitia ipsa facere quibusdam, tempora repudiandae optio consequuntur tenetur distinctio iure tempore suscipit ad commodi nisi!</p>
        </div>
    </div>
    `;
    // Открытие окна
    document.getElementById('faq__btn-id').addEventListener('click',()=>{
        $.fancybox.open({
            src: str,
            type: 'inline',
        });
    })
    // ===================== Конец замута с окном FAQ ========================================
    // .......................................................................................
    // ==================== Замут с подсказкой при наведении ===============================
    document.querySelectorAll('.skill__img').forEach(el=>{
        el.addEventListener('mouseover',()=>{
            tippy(el, {
                content: el.parentElement.children[1].innerHTML,
                allowHTML: true,
                interactive: true
            });
         
        })
    })
   // ===================== Конец замута с подсказкой при наведении ========================================
});