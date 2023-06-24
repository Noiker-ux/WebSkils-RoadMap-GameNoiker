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
                                        echo "<div class='skill'>
                                                <img class='skill__img' src='".$Skill['Ico_skill']."' alt='".$Skill['Name_skill']."'>
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