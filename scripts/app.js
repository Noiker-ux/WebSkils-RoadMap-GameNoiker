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
  // ====================== Замут  с блоком say hi =========================================================




  const sayhi=`
  <div class="sayHi__block" style="display: none; width: 700px;">
    <div class="say_wrapper">
        <div class="social__item">
            <a class="social__item-link" href="http://noiker.ru/">
                <img src="./images/copy (1).svg" alt="Copy" class="social__item-img">
                <p class="social__item-title">Copy</p>
            </a>
        </div>
        <div class="social__item">
            <a class="social__item-link" href="https://github.com/Noiker-ux">
                <img src="./images/github-hi.png" alt="Copy" class="social__item-img">
                <p class="social__item-title">Github</p>
            </a>
        </div>
        <div class="social__item">
            <a class="social__item-link" href="https://vk.com/noiker">
                <img src="./images/vk.svg" alt="Copy" class="social__item-img">
                <p class="social__item-title">ВКонтакте</p>
            </a>
        </div>
        <div class="social__item">
            <a class="social__item-link" href="https://t.me/+79965224284">
                <img src="./images/telegram.png" alt="Copy" class="social__item-img">
                <p class="social__item-title">Telegram</p>
            </a>
        </div>
        <div class="social__item">
            <a class="social__item-link" href="mailto:noiker01@mail.ru">
                <img src="./images/email.svg" alt="Copy" class="social__item-img">
                <p class="social__item-title">Email</p>
            </a>
        </div>
    </div>
</div>
  `;




  document.getElementById('sayHi__btn').addEventListener('click',()=>{
    $.fancybox.open({
        src: sayhi,
        type: 'inline',
    });
})


function Copy() {
    var Url = document.getElementById("url");
    Url.innerHTML = window.location.href;
    console.log(Url.innerHTML)
    Url.select();
    document.execCommand("copy");
  }

 // ====================== Конец замута с блоком say hi =========================================================    
});