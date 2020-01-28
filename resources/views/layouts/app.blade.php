<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">

    <title>Spiritual Evolution</title>
    <meta name="description" content="">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m, e, t, r, i, k, a) {
            m[i] = m[i] || function() {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(55691857, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/55691857" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <div class="bg"></div>

    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('img/svg/whale-logo.svg') }}" alt="logo">
                </a>
            </div>
            <!-- Hamburger -->
            <div class="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div class="main-menu">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/aphorisms">Афоризмы</a></li>
                    <li><a href="/affirmation">Аффирмации</a></li>
                    <li><a href="/materials">Материалы</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>
            </div>

            <div class="thanks-for-subscription">
                <p>Вы подписаны на новости</p>
                <input type="button" value="Ок" class="success-subscribe-button">
            </div>
        </div>

        @section('header')
        <h1>
            <!-- TODO: insert from db -->
            Личностная трансформация
        </h1>

        <div class="header-text">
            <!-- TODO: insert from db -->
            <p>
                Если ты жаждешь глубинной трансформации, этот ресурс поможет тебе. Раз ты здесь, значит,
                готов к переменам и
                открыт для нового.
                Рост счастья и состояние наполненности от простого бытия меняет даже мрачную реальность. Сама возможность Быть
                уже является большим чудом и счастьем. Постигшему эту истину раскрывается мир неограниченных возможностей.
                Хоть на секунду притормози и пристально посмотри на того, кто задыхается в серой реальности, кто не находит
                себя
                в этом мире. Может, это вовсе не ты? Давай вместе попробуем заглянуть внутрь измученной оболочки, стать ближе
                к
                лучшей версии тебя.
                В каждом разделе мы собираем то, что способно изменить любого, кто к этому стремится. Дать ответ на нужный
                вопрос, заставить задуматься или просто вдохновить на новый день.
                Читай, размышляй и используй то, что тебе подойдет. Удачи!
            </p>
        </div>
        @show

    </div>

    @yield('content')

    <footer class="footer">
        <div class="wrapper">
            <div class="contacts">
                <a href="https://vk.com/medonomator">
                    <i class="fa fa-vk" aria-hidden="true"></i>
                </a>
                <a href="tg://medonomator">
                    <i class="fa fa-telegram" aria-hidden="true"></i>
                </a>
            </div>

            <div class="subscribe">
                <p>Подписаться на новости</p>
                <p class="error-element"></p>
                <input class="subscribe-input" type="text" placeholder="Ваш email">
                <input class="subscribe-button" type="button" value="Подписаться">
            </div>

            <div class="footer-end-block">
                <a href="/development-plan">План развития проекта</a>
                <a class="support-project" href="/contacts">Поддержать проект</a>
            </div>

        </div>
    </footer>

    <script src="{{ asset('js/scripts.min.js') }}"></script>
</body>

</html>
