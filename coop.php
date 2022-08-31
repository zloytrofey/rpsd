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
                <h2 class="section__title">Наш коллевтив</h2>
                <div class="coop__inner">
                    <?php
                        
                        include "./config/connect.php";
                        foreach ($pdo->query("SELECT * FROM coop") as $x) {
                            echo '
                            <div class="coop__container">
                                <div class="coop__img">
                                    <img src="'.$x['img_name'].'">
                                </div>
                                <div class="coop__fio coop_padding">
                                    '.$x['fio_em'].'
                                </div>
                                <div class="coop__bday coop_padding">
                                    Дата рождения: '.$x['bday'].'
                                </div>
                                <div class="coop__post coop_padding">
                                    Должность: '.$x['post'].'
                                </div>
                                <div class="coop__biog coop_padding">
                                    '.$x['biography'].'
                                </div>
                            </div>
                            ';
                        }
                    ?>
                    
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