<!DOCTYPE HTML>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Театр "Рапсодия"</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="header__inner">
                    <div class="logo">
                        <a href="index.php"><img class="logo__img" src="img/logo.png" alt="home"></a>
                    </div>
                    <nav class="nav">
                        <a class="nav__link" href="index.php">Главная</a>
                        <a class="nav__link" href="afisha.php">Афиша</a>
                        <a class="nav__link" href="coop.php">Коллектив</a>
                        <!--<a class="nav__link" href="#">Поддержка</a>-->
                        <a class="nav__link" href="event.php">События</a>
                        <?php 
                            include "./config/login.php"; 
                            getLogin();
                        ?>
                    </nav>
                </div>
            </div>
        </header>

        <div class="intro">
            <div class="container">
                <div class="intro_inner">
                    <h1 class="intro__title">Театр &#171;Рапсодия&#187; приветствует вас!</h1>
                    <h2 class="intro__subtitle">&#171;Искусство всегда современно.&#187;</h2>
                    <h4 class="intro__author">Федор Достоевский</h4>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="container">
                <div class="section__inner">
                    <div class="section__header">
                        <h2 class="section__title">О театре</h2>
                    </div>
                    <div class="section__items">
                        <p class="section__item">Театр “Рапсодия” достаточно молодой театр, построенный в 2000-2010 гг. в неоклассическом стиле. Молодой театр обрёл популярность благодаря постановкам Герасимова Дмитрия Викторовича и Леонова Григория Андреевича. Помимо классических произведений по типу “Горя от ума” или “Шинели” ставятся постановки и мюзиклы собственного сочинительства, любимые взрослыми и детьми и по сей день. </p>
                        <img class="about__item" src="img/theatre.jpg" alt="О театре">
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="section__inner">
                    <div class="section__header">
                        <h2 class="section__title">События</h2>
                    </div>
                    <div class="section__items__event">
                        <img class="event__item" src="img/renessans.jpg" alt="Эпоха ренессанса">
                        <p class="section__text__event">Эпоха Возрождения сияет в ореоле величия и блеска. Долгие века человечество испытывает признательность и благодарность к событиям и свершениям времени перехода от Средних веков к Новому времени. Окунитесь в увлекательный мир великих деятелей искусства!</p>
                    </div>
                    <div class="section__btn">
                        <a class="btn" href="event.php">Подробнее о событиях</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section__inner">
                    <div class="section__header">
                        <h2 class="section__title">Афиша</h2>
                    </div>
                    <div class="program__items">
                        <a class="img__link" href="#"><img class="program__item" src="img/content/floversforprincessfishl2.jpg" alt="Цветы для принцессы Фишль"></a>
                        <a class="img__link" href="#"><img class="program__item" class="img__link" src="img/content/alittleprince.jpg" alt="Маленький принц"></a>
                        <a class="img__link" href="#"><img class="program__item" src="img/content/masterryu.jpg" alt="Господин Рю"></a>
                    </div>
                    <div class="section__btn">
                        <a class="btn" href="afisha.php">Афиша</a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="footer__firstitems">
                        <a href="index.php"><img class="logo__img" src="img/logo.png" alt="home"></a>
                        <p class="footer__adress">г. Москва, ул. 1905 г., д. 56, стр. 1</p>
                    </div>
                    <div class="footer__seconditems">
                        <p class="footer__info">Билетная касса:   +7(499)781-35-40</p>
                        <p class="footer__info">Отдел продаж:     +7(499)770-30-81</p>
                        <p class="footer__info">Администрация: +7(499)700-21-10</p>
                        <p class="footer__info">rapsody.info@theater.ru</p>
                    </div>
                    
                </div>
                <div class="footer__lastitem">
                    <p class="footer_rights">Все права защищены, 2022 г.</p>
                </div>
            </div>
        </footer>
    </body>
</html>
