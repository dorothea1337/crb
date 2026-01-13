<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Журнал МИР Робототехники | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/mr.css">

</head>

<?php
include __DIR__ . '/../../templates/header.php';
?>

<main>
        <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/cover.png" class="mr-hero__bg-img">
        <div class="container">
            <h1 class="h1-white mrrt-bold mr-h1">Журнал МИР Робототехники</h1>
        </div>
        
        <section class="about-mr container">           
            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-logo.svg" alt="Логотип Мир Робототехники | Консорциум Робототехники" class="mr-logo">
            <p><a href="https://roboticsworld.ru/subscribe/" target="_blank" class="link black-link">Журнал «Мир робототехники»</a> — это альманах аналитики, экспертных мнений и новостей о самых важных событиях отрасли в России и мире.</p>
            <p>За 2 года Консорциум выпустил уже 15 печатных номеров, тиражом 10 тыс. экземпляров каждый. Более 360 статей, созданных в сотрудничестве с ключевыми участниками отрасли, рассказывают о беспилотниках, чипах и компонентах, промышленных, сервисных и других видах роботов.</p>
            <a class="btn btn-dark l-btn mrgn-btn" href="https://promo.roboticsworld.ru/mediakit" target="_blank">Медиа-кит</a>
            <p><a href="https://www.ozon.ru/seller/zhurnal-mir-robototehniki-1097857/" target="_blank" class="link black-link">На печатных страницах журнала</a>, в <a href="https://vk.com/world_of_robotics" target="_blank" class="link black-link">VK</a>, а также в каналах мессенджеров <a href="https://max.ru/world_of_robotics" target="_blank" class="link black-link">Max</a> и <a href="https://t.me/world_of_robotics" target="_blank" class="link black-link">Telegram</a> у всех желающих есть возможность рассказать о своих идеях, планах и новых образцах робототехники отраслевому сообществу, участникам профильных выставок и форумов, потенциальным заказчикам и инвесторам.</p>
            <a class="btn btn-dark l-btn mrgn-btn" href="https://roboticsworld.ru/subscribe/" target="_blank">Подписаться на журнал</a>

            <div class="d-flex flex-row justify-content-between">
                <div class="d-flex flex-row mr-sm-icons">
                    <a href="https://t.me/world_of_robotics" target="_blank"><img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/tg-logo.png" alt="Telegram логтип | Консорциум робототехники и систем интеллектуального управления"></a>
                    <a href="https://vk.com/world_of_robotics" target="_blank"><img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/vk-logo.svg" alt="VK логтип | Консорциум робототехники и систем интеллектуального управления"></a>
                    <a href="https://max.ru/world_of_robotics" target="_blank"><img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/max-logo.svg" alt="MAX логтип | Консорциум робототехники и систем интеллектуального управления"></a>
                </div>

                <a href="https://www.ozon.ru/seller/zhurnal-mir-robototehniki-1097857/" target="_blank"><img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/ozon-logo.svg" alt="Ozon логтип | Консорциум робототехники и систем интеллектуального управления"></a>
            </div>

        </section>

        <section class="slider container">
            <div id="mr-magazines-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <div class="row">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-16.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 16 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-15.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 15 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-14.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 14 обложка | Консорциум робототехники и систем интеллектуального управления">
                        </div>
                    </div>

                     <div class="carousel-item">
                        <div class="row">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-13.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 13 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-12.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 12 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-11.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 11 обложка | Консорциум робототехники и систем интеллектуального управления">
                        </div>
                    </div>

                     <div class="carousel-item">
                        <div class="row">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-10.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 10 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-9.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 9 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-8.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 8 обложка | Консорциум робототехники и систем интеллектуального управления">
                        </div>
                    </div>

                     <div class="carousel-item">
                        <div class="row">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-7.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 7 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-6.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 6 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-5.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 5 обложка | Консорциум робототехники и систем интеллектуального управления">
                        </div>
                    </div>

                     <div class="carousel-item">
                        <div class="row">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-4.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 4 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-3.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 3 обложка | Консорциум робототехники и систем интеллектуального управления">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-2.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 2 обложка | Консорциум робототехники и систем интеллектуального управления">
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <img src="<?= BASE_URL ?>assets/images/mir-robototekhniki/mr-magazine-1.png" class="col-md-4" alt="Журнал МИР Робототехники выпуск 1 обложка | Консорциум робототехники и систем интеллектуального управления">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#mr-magazines-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mr-magazines-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <a class="btn btn-dark l-btn" href="https://roboticsworld.ru" target="_blank">Сайт журнала</a>

        </section>
    </main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>