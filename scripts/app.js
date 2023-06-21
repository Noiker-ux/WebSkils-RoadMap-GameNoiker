'use strict';


window.addEventListener('DOMContentLoaded',()=>{
// Переменная LS для темы
const RoadMapGamingTheme = 'NoikerRoadMapThemes.js'
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
</div>`;

    document.getElementById('faq__btn-id').addEventListener('click',()=>{
        document.querySelector('.main').insertAdjacentHTML('beforeend',str);
            $.fancybox.open({
                src: '#FAQhidden',
                type: 'inline'
            });
    })

    // переключение темы светлая темная
    document.querySelector('.theme-toggler__switch').addEventListener('click',()=>{
        document.body.classList.toggle("dark-mode")
    });


});