<?php 
    include "./config/connect.php";
?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Авторизация и регистрация</title>
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
            <div class="auth__flex">
                <div class="auth__left">
                    <div class="auth__header">
                        <h2 class="section__title">Авторизация</h2>
                    </div>
                    <div class="section__form">
                        <form class="form__items" method="POST">
                            <input type="text" name="login" class="form__item" id="login" placeholder="Введите логин">
                            <input type="text" name="password" class="form__item" id="password" placeholder="Введите пароль">
                            <input class="button" name="log" type="submit" value="Войти">
                            <?php
                                
                                IsCookie();
                                if (isset($_POST['log'])) {
                                    if ($_POST['login']!='' && $_POST['password']!='') {
                                        if (!auth($_POST["login"], $_POST["password"])) { //Если логин и пароль введен не правильно
                                        echo "<h2>Логин или пароль введен не правильно!</h2>";
                                        }
                                        else{
                                            setcook($_POST['login'], $_POST['password']);
                                            header('Location: ./profile.php');
                                        }
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
                <div class="auth_right">
                    <div class="reg__header">
                    <h2 class="section__title">Регистрация</h2>
                </div>
                <div class="reg__inner">
                    <form class="form__items" method="POST">
                        <label class="reg__label">Введите имя и фамилию:</label>
                        <input type="text" name="username" class="reg__item"  id="username" placeholder="Имя">
                        <input type="text" name="usersurname" class="reg__item" id="usersurname" placeholder="Фамилия">
                        <label class="reg__label">Введите отчество (при наличии):</label>
                        <input type="text" name="usermiddlename" class="reg__item"  id="usermiddlename" placeholder="Отчество">
                        <label class="reg__label">Введите номер телефона:</label>
                        <input type="text" name="phonenumber" class="reg__item"  id="number" placeholder="Номер телефона">


                        <!-- <script src="js/jquery-3.6.0.js"></script>
                        <script>
                            $(function(){
                            //2. Получить элемент, к которому необходимо добавить маску
                            $("#number").mask("8(999) 999-9999");
                            });
                        </script> -->


                        <label class="reg__label">Введите e-mail (логин):</label>
                        <input type="email" name="email" class="reg__item"  id="email" placeholder="Введите логин">
                        <label class="reg__label">Придумайте пароль:</label>
                        <input type="text" name="password" class="reg__item"  id="password" placeholder="Введите пароль">
                        <label class="reg__label">Повторите пароль:</label>
                        <input type="text" name="password__confirm" class="reg__item"  id="password" placeholder="Повторите пароль">
                        <input class="button" type="submit" name="reg" value="Регистрация">
                    </form>
                    <?php
                        if (isset($_POST['reg'])) {
                          if ($_POST['username'] !='' && 
                              $_POST['usersurname'] !='' &&
                              $_POST['phonenumber'] !='' &&
                              $_POST['email'] !='' &&
                              $_POST['password'] !='' &&
                              $_POST['password__confirm'] !='') 
                              {
                                if ($_POST['password'] == $_POST['password__confirm']) {
                                    global $pdo;
                                    $name = $_POST['username'];
                                    $surname = $_POST['usersurname'];
                                    $middlename = isset($_POST['usermiddlename']) ? $_POST['usermiddlename'] : '';
                                    $phonenumber = $_POST['phonenumber'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $pdo->query("INSERT INTO users (`username`, `usersurname`, `usermiddlename`, `phone_number`, `email`, `userpassword`) VALUES ('$name', '$surname', '$middlename', '$phonenumber', '$email', '".md5($password)."');");
                                    echo '<script>alert("Вы успешно зарегестрировались!")</script>';
                                }
                            }
                            else{
                                echo '<script>alert("Введите пожалуйста данные!")</script>';
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
