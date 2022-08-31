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
                        ?>
                    </nav>
                </div>
            </div>
        </header>

        <section class="section">
            <div class="container">
                <div class="program__inner">
                    <div class="program__header">
                        <h2 class="section__title">Афиша</h2>
                    </div>
                    <div class="program__content-flex">
                        <?php
                            global $pdo;
                            $date = date("Y-m-d");
                            foreach ($pdo->query("SELECT * FROM theater_shows") as $x) {
                                echo '
                                <div class="program__content">
                                    
                                    <div class="content__flex">
                                        
                                        <img class="content__item" src="'.$x['imgfilename'].'">
                                        
                                        <div class="content__right">
                                            <p class="content__text">'.$x['name'].'</p>
                                            <div class="content__desc">
                                                '.$x['description'].'
                                            </div>
                                            <div class="button">
                                                <form method="post">
                                                    <input type="text" style="display: none;" name="id" value="'.$x['id_show'].'">
                                                    <div class="inputs">
                                                        <input type="date" name="date" min="'.$date.'">
                                                        <input type="number" min="1" max="10" name="amount" placeholder="Количество">
                                                    </div>
                                                    <input type="submit" class="content__button" name="bron" value="Забронировать за '.$x['price'].' руб.">
                                                </form>
                                            </div>
                                            
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                ';
                            }
                            
                            if (isset($_POST['bron'])) {
                               
                                if (isset($_COOKIE['token'])) {
                                    if ($_POST['date']=='') {
                                        echo '<script>alert("Пожалуйста введите дату")</script>';
                                    }
                                    else{
                                        $id = $_POST['id'];
                                        $amount = $_POST['amount']!='' ? $_POST['amount'] : 1; 
                                        $data=$_POST['date'];
                                        $co = $_COOKIE['token'];
                                        $pdo->query("UPDATE users SET order_name = $id, order_date = '$data', order_amount = $amount WHERE cookie_token = '".$_COOKIE["token"]."'");
                                        echo '<script>alert("Вы забронировали данный спектакль\nДля просмотра брони перейдите в личный кабинет")</script>';  
                                    }
                                    
                                }
                                else{
                                    echo '<script>alert("Для бронирования необходимо зарегестрироваться")</script>';
                                }
                                
                            }
                        ?>
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