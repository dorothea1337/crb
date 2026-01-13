<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Маркетплейс RUbot | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/rubot.css">


</head>

<?php
include __DIR__ . '/../../templates/header.php';
?>

<main>
    <section class="rubot__hero">
        <div class="container">
            <h1 class="h1-white">Маркетплейс RUbot</h1>
        </div>
    </section>

    <section class="container">
        <img class="w-25" src="<?= BASE_URL ?>assets/images/rubot/rubot_logo.svg">
        <p>Маркетплейс RUBOT – это специализированный агрегатор решений российских производителей в области робототехники.</p>
        <p>Он представляет собой экосистему ресурсов взаимодействия в части продажи или покупки готовых изделий, систем и компонентов, программного обеспечения разнообразных производителей и поставщиков.</p>
        
    </section>

    <section class="container d-flex flex-column rubot__content">
        <h2 class="h2 m-0">Функционал RUbot</h2>
        <p>RUBOT способствует развитию технологической независимости и микроэлектронных компонентов и программного обеспечения.</p>
        <p>Rubot выполняет функции агрегатора широкого спектра решений российских производителей робототехники, систем интеллектуального управления, компонентов, ЭКБ и программного обеспечения, а также является площадкой для формирования и развития кооперационных проектов.</p>
        <img src="<?= BASE_URL ?>assets/images/rubot/interface.png" class="img-fluid">
        <a href="https://rubot.pro" target="_blank" class="btn btn-dark l-btn">Сайт RUbot</a>
    </section>
</main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>