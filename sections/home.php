<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/styles/main.css">
    <link rel="stylesheet" href="assets/styles/header.css">
    <link rel="stylesheet" href="assets/styles/footer.css">
    <link rel="stylesheet" href="assets/styles/home.css">
    <link rel="stylesheet" href="assets/styles/rimm.css">

</head>

<?php
include __DIR__ . '/../templates/header.php';
?>

<section class="banners">

    <div id="carouselBanners" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="1" class="active" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselBanners" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
    
        <div class="carousel-inner">
            <div class="carousel-item">
                <div class="banner-1 banner d-flex">
                    <div class="container d-flex justify-content-end p-0">
                        <div class="d-flex flex-column align-items-start m-0">
                            <h1 class="banner-h1">Консорциум робототехники и систем интеллектуального управления</h1>
                            <p class="banner-1-subheading hv-bold white">Обеспечим технологический суверенитет вместе!</p>
                        </div>  
                    </div>
                </div>
            </div>

            <div class="carousel-item active">
                <div class="banner-2 banner d-flex">
                    <div class="container d-flex flex-row justify-content-between">
                        <img src="<?= BASE_URL ?>assets/images/rimm/logo-rimm-white.svg" alt="Логотип РИММ белый | Консорциум Робототехники" class="col-3">
                        <div class="col-1"></div>
                        <div class="rimm-hero__texts col d-flex justify-content-between flex-column">
                            <p class="subheading-rimm">МЕЖДУНАРОДНЫЙ НАУЧНО-ТЕХНОЛОГИЧЕСКИЙ ФОРУМ</p>
                            <h2 class="rimm-h1">РОБОТОТЕХНИКА, ИНТЕЛЛЕКТ МАШИН И МЕХАНИЗМОВ</h1>
                            <p class="white">5-6 февраля 2026, МИК “Ломоносов”</p>
                        </div>  
                    </div>
                    <a class="btn btn-light l-btn container" href="https://reg.forum-rimm.ru/login.php?idExh=2" target="_blank">Регистрация на форум</a>
                </div>
            </div>

            <div class="carousel-item">
                <div class="banner-3 banner d-flex">
                    <div class="container">
                        <a href="https://disk.yandex.ru/d/9nLzIFiDRPlj6w" target="_blank" class="btn btn-dark m-btn home-custom-btn">Презентация Консорциума</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="banner-4 banner d-flex">
                    <div class="container d-flex justify-content-between align-items-center">
                        <img src="<?= BASE_URL ?>assets/images/home/magazines.png" alt="Журналы АТЛАС Робототехники | Консорциум робототехники и систем интеллектуального управления" class="m-0">
                        <a href="https://disk.360.yandex.ru/i/d-F2OFwaFl6zdg" target="_blank" class="btn btn-secondary m-btn">Презентация Атласа</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="home__introduction container">
    <p class="home__intro hv-bold">Добро пожаловать в Консорциум робототехники, где будущее становится настоящим. Наша экосистема позволяет отечественным производителям развивать собственный продукты и отрасль в целом.</p>
    <p>Если у вас есть предложения по развитию отрасли, можете поделиться ими нажав на кнопку ниже:</p>
    <a href="#" class="btn btn-dark m-btn home-custom-btn">Направить предложение</a>
</section>

<!-- сверстала, чтобы иметь разметку и при переносе потратить меньше времени -->

<section class="home__next-events container">
    <h2 class="h2">Ближайшие события</h2>

    <div class="home__turquose-container d-flex flex-row align-items-between">
        <div class="home__event d-flex flex-column">
            <h2 class="home__event__h2">ROSUPACK</h2>
            <div class="home__event__date-place">
                <p>Санкт-Петербург</p>
                <p>17 – 20 июня 2025</p>
            </div>
            <a class="btn btn-dark l-btn custom-small-btn">Добавить в календарь</a>
        </div>

        <div class="home__event d-flex flex-column">
            <h2 class="home__event__h2">ROSUPACK</h2>
            <div class="home__event__date-place">
                <p>Санкт-Петербург</p>
                <p>17 – 20 июня 2025</p>
            </div>
            <a class="btn btn-dark l-btn custom-small-btn">Добавить в календарь</a>
        </div>

        <div class="home__event d-flex flex-column">
            <h2 class="home__event__h2">ROSUPACK</h2>
            <div class="home__event__date-place">
                <p>Санкт-Петербург</p>
                <p>17 – 20 июня 2025</p>
            </div>
            <a class="btn btn-dark l-btn custom-small-btn">Добавить в календарь</a>
        </div>
    </div>

    <a href="<?= BASE_URL ?>calendar" class="btn btn-dark m-btn">Все события</a>
</section>

<section class="home__last-news container">
    <h2 class="h2">Новости</h2>

    <a href="<?= BASE_URL ?>press-center/news" class="btn btn-dark m-btn">Ко всем новостям</a>

</section>

<section class="home__magazine container">
    <h2 class="h2">Журналы Мир Робототехники</h2>
    <div class="d-flex flex-row justify-content-between">
        <div class="d-flex flex-row mr-sm-icons">
            <a href="https://t.me/world_of_robotics" target="_blank"><img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/tg-logo.png" alt="Telegram логтип | Консорциум робототехники и систем интеллектуального управления"></a>
            <a href="https://vk.com/world_of_robotics" target="_blank"><img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/vk-logo.svg" alt="VK логтип | Консорциум робототехники и систем интеллектуального управления"></a>
            <a href="https://max.ru/world_of_robotics" target="_blank"><img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/max-logo.svg" alt="MAX логтип | Консорциум робототехники и систем интеллектуального управления"></a>
        </div>

        <a href="https://www.ozon.ru/seller/zhurnal-mir-robototehniki-1097857/" target="_blank"><img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/ozon-logo.svg" alt="Ozon логтип | Консорциум робототехники и систем интеллектуального управления"></a>
    </div>

    <div class="home__turquose-container">
        
    </div>

    </div>
</section>

<?php
include __DIR__ . '/../templates/footer.php';
?>