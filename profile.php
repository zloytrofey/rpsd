<?php
    include "./config/connect.php";
?>
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
                            ReturnToAuth();
                        ?>
                    </nav>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="profile__inner">
                    <p class="profile__text">Добро пожаловать, <?= getFio() ?> !</p>
                    <?php
                        global $pdo;
                        $array = $pdo->query("SELECT * FROM users WHERE cookie_token = '".$_COOKIE["token"]."'")->fetch(PDO::FETCH_ASSOC);
                        $id = $array['order_name'];
                        if (!empty($array['order_name']) && $array['order_name']!='') {
                            $show = $pdo->query("SELECT * FROM theater_shows WHERE id_show = $id")->fetch(PDO::FETCH_ASSOC);
                            $total = $show['price']*$array['order_amount'];
                            echo '
                            <div class="profile__flex">
                                <div class="profile__right">
                                    <img class="content__item" src="'.$show['imgfilename'].'">
                                </div>
                                <div class="profile__left">
                                    <div>
                                        Количество билетов: '.$array['order_amount'].' шт.
                                    </div>
                                    <div>
                                        Спектакль:  "'.$show['name'].'"
                                    </div>
                                    <div>
                                        Дата спектакля: '.$array['order_date'].'
                                    </div>
                                    <div>
                                        <b>Итоговая сумма: '.$total.' руб.</b>
                                    </div>
                                </div>
                                
                            </div>
                            ';
                        }
                        else{
                            echo '<br><div>Вы еще ничего не забронировали!</div>';
                        }
                    ?>
                    <form method="POST">
                        <input class="button__profile" type="submit" name="del" value="Отменить бронь">
                        <input class="button__profile" type="submit" name="exit" value="Выйти">
                    </form>
                    <?php
                        if (isset($_POST['exit'])) {
                            deleteCookie();
                        }
                        if (isset($_POST['del'])) {
                            $pdo->query("UPDATE users SET order_name = NULL, order_date = NULL, order_amount = NULL WHERE cookie_token = '".$_COOKIE["token"]."'");
                            header("Location: ./profile.php");
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