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
                        <button class="sayHi__btn header__option-btn">
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

<?php
function get_favicon($url){
    $url = str_replace("http://","",$url);
    return "http://www.google.com/s2/favicons?domain=".$url;
}

      
        $adress='localhost';
        $nameUser='root';
        $password='';
        $NameBD='NoikerSkills';
        // коннект с БД
        $connection = mysqli_connect($adress, $nameUser, $password, $NameBD);
        // Проверка на подключение
        if ($connection == false){
            echo "<script>console.log('Connection Error " . mysqli_connect_error() . "' );</script>";
        }
        else {
            mysqli_set_charset($connection, "utf8");
            $Sections = 'SELECT * FROM NoikerSkills.Areas;';
            $SectionQuery = mysqli_query($connection, $Sections);
            $NumberSection = 1;
            while ($Section = mysqli_fetch_array($SectionQuery)) {
                echo"<section class='collection'>
                        <h1 class='collection__title'>".$NumberSection++.". ".$Section['Title_area']."</h1>
                        <div class='areas'>";
                        $Roads = 'SELECT *FROM RoadEducation JOIN Areas ON RoadEducation.id_area=Areas.id_area WHERE RoadEducation.id_area='.$Section[0];
                        $RoadsQuery = mysqli_query($connection, $Roads);
                        while ($Road = mysqli_fetch_array($RoadsQuery)) {
                            echo "<div class='area'>
                                    <strong class='area__title'>".$Road['Name_road']."</strong>
                                    <div class='skills'>";
                                    $Skills = 'SELECT * FROM Skills JOIN RoadEducation ON Skills.id_road=RoadEducation.id_road WHERE RoadEducation.id_road='.$Road[0];
                                    $SkillsQuery = mysqli_query($connection, $Skills);
                                    while ($Skill = mysqli_fetch_array($SkillsQuery)) {
                                        echo "<div class='skill tooltip-wrap'>
                                                <img id='demo-tooltip-mouse' class='hover skill__img tooltip' src='".$Skill['Ico_skill']."' alt='".$Skill['Name_skill']."'>
                                                <div class='tooltip-content'>
                                                    <div class='tooltip-header'>
                                                        <h4 class='tooltip-title'>".$Skill['Name_skill']."</h4>
                                                        <div class='tooltip-header-links'>
                                                            <a class='tooltip-href' href='https://www.google.ru/search?q=".$Road['Name_road']." ".$Skill['Name_skill']."'>
                                                                <img class='tooltip-img' src='".get_favicon('https://www.google.ru/')."'>
                                                            </a>
                                                            <a class='tooltip-href tooltip-href-youtube' href='https://www.youtube.com/results?search_query=".$Road['Name_road']." ".$Skill['Name_skill']."'>
                                                                <img class='tooltip-img' src='".get_favicon('https://www.youtube.com/')."'>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <p class='tooltip-description'>".$Skill['Description_skill']."</p>
                                                    <div class='helpfull-links'>";
                                                    $HelpfullLinks = 'SELECT * FROM Helpful_links JOIN Skills ON Helpful_links.id_skill =Skills.id_skill  WHERE Helpful_links.id_skill ='.$Skill[0];
                                                    $HelpfullLinksQuery = mysqli_query($connection, $HelpfullLinks);
                                                    while ($HelpfullLink = mysqli_fetch_array($HelpfullLinksQuery)){
                                                        echo "<p class='helpfull-link'>
                                                                <img src='".get_favicon($HelpfullLink['Href_link'])."'>
                                                                <a href='".$HelpfullLink['Href_link']."'>".$HelpfullLink['Title_link']."</a>
                                                            </p>";
                                                    }
                                              echo "</div>
                                                </div> 
                                                <p class='skill__subtitle'>".$Skill['Name_skill']."</p>
                                            </div>"; 
                                    }
                            echo    "</div>
                                </div>";
                        }
                echo    "</div>
                    </section>";
            }
        }
    ?>

            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <script src="./scripts/app.js"></script>
</body>
</html>