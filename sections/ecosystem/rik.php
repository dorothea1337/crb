<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Российский инженерный класс | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/rik.css">



</head>

<?php
include __DIR__ . '/../../templates/header.php';
?>

<main>
    <section class="rik__hero">
        <div class="container">
            <img src="<?= BASE_URL ?>assets/images/rik/rik-logo-white.png" alt="Российский инженерный класс логотип | Консорциум робототехники и систем интеллектуального управления">
            <p class="hv-bold white rik-subheading">Региональная система инженерного образования</p>
        </div>
    </section>

    <section class="container d-flex flex-column rik-text">
        <div>
            <p>РИК - это система инженерного образования, направленная на формирование кадрового потенциала отрасли.</p>
            <p>Российский Инженерный класс использует новый подход к организации непрерывного процесса подготовки и предпрофильной инженерно-технической подготовки инженерных кадров, благодаря чему воспитываются ценности технических профессий и происходит адаптация учебного процесса под потребности региона и индустриального заказчика.</p>
            <p>РИК ориентирован на достижение целевых показателей национальных проектов «Демография», «Кадры», «Молодежь и дети».</p>
        </div>
        <div class="rik__contnent">
            <div class="rik__image-wrap">
                <img src="<?= BASE_URL ?>assets/images/rik/child-studying.jpg" class="rik__image">

            </div>
            <div class="d-flex flex-column rik__text-w-logo">
                <img src="<?= BASE_URL ?>assets/images/rik/rik-logo.png" class="rik__logo">
                <h2 class="h2 m-0">Программы обучения</h2>
                <p>Развитие компетенций будущих инженеров</p>
                <p>Разработка и внедрение новых программ и методик обучения</p>
                <p>Создание современной инженерной экосистемы</p>
            </div>
        </div>

        <a class="btn btn-dark l-btn" href="https://engineerclass.ru" target="_blank">Сайт РИК</a>
    </section>


</main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>