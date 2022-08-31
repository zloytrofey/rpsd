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

        <section class="section">
            <div class="container">
                <h2 class="section__title">События</h2>
                <div class="event__inner">
                    <div class="event__flex">
                        <a class="" href=#><img class="event__item" src="img/renessans.jpg"></a>
                        <p>
                            Даже те, кто не особо интересуются живописью, знакомы с термином «Ренессанс» 
                            и слышали имена Леонардо да Винчи, Джорджоне, Боттичелли, Рафаэля, Тициана, 
                            Микеланджело… Но это лишь вершина айсберга: десятки их коллег — признанные 
                            величины в истории искусства, их творения включены в золотой фонд знаменитых 
                            музеев мира. Познакомьтесь с удивительным миром искусства вместе с работами 
                            авторов ушедшей эпохи.
                        </p>
                    </div>
                    <div class="event__flex">
                        <a class="" href=#><img class="event__item" src="img/bastille.jpg"></a>
                        <p>
                            Начало Великой Французской революции связывают с датой взятие Бастилии. 
                            Это произошло 14 июля 1789 года. Собственно, Бастилия представляла собой 
                            тюремный замок в Париже. Факт его взятие революционерами стал своеобразным 
                            символом падения королевской власти династии Бурбонов. Экспозиция представляет 
                            собой небольшой экскурс по истории одного из масштабных событий в мировой 
                            истории, в частности – истории Франции.
                        </p>
                    </div>
                    <div class="event__flex">
                        <a class="" href=#><img class="event__item" src="img/games.jpg"></a>
                        <p>
                            Влияние видеоигровой индустрии на культуру общества 21 века - неоспоримо. 
                            Видеоигры уже давно закрепились в умах последних поколений, влияя не только 
                            на наше настроение, но и на наш характер, мировоззрение, интересы и даже 
                            серьёзные решения. Экспозиция посвящена теме игр и их непосредственной 
                            близости с искусством.
                        </p>
                    </div>
                    <div class="event__flex">
                        <a class="" href=#><img class="event__item" src="img/murakami.jpg"></a>
                        <p>
                            Казанская группа «Мураками» во главе с Дилярой Вагаповой приглашает 
                            Вас на презентацию альбома «Без.даты». Незабываемый вечер с любимыми 
                            песнями, новыми хитами!
                        </p>
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