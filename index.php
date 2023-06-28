<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./styles/main.css">
    <title>Noiker Road Map</title>

</head>
<body data-theme="normal">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__avatar">
                    <img class="header__avatar-img" src="./images/logo.jpg" >
                    <p class="header__avatar-nickname">Alex Vyugin</p>
                </div>
                <div class="header__options">
                    <div class="header__option-theme">
                        <label class="theme-toggler settings-option" for="toggle"  id="theme-toggler">
                            <input class="theme-toggler__checkbox" type="checkbox" id="toggle" />
                            <span class="theme-toggler__switch" aria-hidden="true" ></span>
                        </label>
                    </div>
                    <div class="header__option-faq header__option">
                        <button class="faq__btn header__option-btn"  href="#faq-hidden" id="faq__btn-id">
                            <img class="faq__btn-img header__option-img" src="./images/FAQ.png" alt="FAQ">
                        </button>
                    </div>
                    <div class="header__option-achivment header__option">
                        <button class="achivment__btn header__option-btn">
                            <img class="achivment__btn-img header__option-img" src="./images/Achivment.png" alt="Achivment">
                        </button>
                    </div>
                    <div class="header__option-sayHi header__option">
                        <button class="sayHi__btn header__option-btn" id="sayHi__btn">
                            <img class="sayHi__btn-img header__option-img" src="./images/Follower.png" alt="Follower">
                        </button>
                    </div>
                    <div class="header__option-donate header__option">
                        <a class="donate__btn header__option-btn" href="https://www.donationalerts.com/r/noiker">
                            <img class="donate__btn-img header__option-img" src="./images/Donate.png" alt="Donate">
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="main_inner">
                <hr/>

            


            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script> 

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <script src="./scripts/app.js"></script>
</body>
</html>