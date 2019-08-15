<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title;?></title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div>
                    <a href="/"><img src="/img/logo.png" alt="by-Vision" class="logo"></a>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="/">ГЛАВНАЯ</a>
                        </li>
                        <li>
                            <a href="/#service">УСЛУГИ</a>
                        </li>
                        <li>
                            <a href="/#contacts">КОНТАКТЫ</a>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <?php if ($auth):?>
                    <ul>
                        <li>
                            <a href="/account/">ЛИЧНЫЙ КАБИНЕТ</a>
                        </li>
                        <li>
                            <a href="/account/logout">ВЫЙТИ</a>
                        </li>
                    </ul>
                    <?php else: ?>
                    <form method="post" action="/account/auth">
                        <input name="email" type="email" placeholder="e-mail">
                        <input name="password" type="password" placeholder="Пароль">
                        <button type="submit">ВОЙТИ</button>
                    </form>
                    <ul>
                        <li>
                            <a href="/account/registration">РЕГИСТРАЦИЯ</a>
                        </li>
                    </ul>
                    <?php  endif;?>
                </div>
            </nav>          
        </div>
    </header>

    <div>
    <?php include_once $content;?>
    </div>
<script src="/js/script.js"></script>
</body>
</html>
<!-- <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<nav>
    <ul>
        <li>
            <a href="/">Главная</a>
        </li>
        <li>
            <a href="/page/pageone">Страница 1</a>
        </li>
        <li>
            <a href="/page/pagetwo">Страница 2</a>
        </li>
        <div>
            <?php if ($auth):?>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="/account/">ЛК</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/account/logout">Выйти</a>
                </li>
            </ul>
        <?php else: ?>
            <form method="post" action="/account/auth" class="form-inline my-2 my-lg-0">
                <input name="email" class="form-control mr-sm-2" type="email" placeholder="e-mail">
                <input name="password" class="form-control mr-sm-2" type="password" placeholder="password">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Войти</button>
            </form>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="/account/registration">Регистрация</a>
                </li>
            </ul>
        <?php  endif;?>
        </div>
    </ul>
</nav>


<div class="margin-50 container-fluid">
    <?php include_once $content;?>
</div>

</body>
</html> -->