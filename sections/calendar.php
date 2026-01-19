<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Календарь мероприятий | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/calendar.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
</head>

<?php
include __DIR__ . '/../templates/header.php';
?>

<main class="calendar-main">
    <section class="container calendar-heading">
        <h1 class="h1-white">Календарь мероприятий</h1>
        <p class="white">От микроэлектроники и роототехники до логистики и газовой промышленности - в этом разделе мы собрали ближайшие события, которые нельзя пропустить.</p>
    </section>

    <section class="container">
        <h2 class="h2 white">Февраль</h2>
        <div class="month-events">
            <div class="event">
                <h3 class="event-h3 mrrt-bold">Международный научно-технологический форум Робототехника, интеллект машин и механизмов</h3>
                <div class="event-description">
                    <p class="mrrt-medium">05.02 - 06.02</p>
                    <p class="mrrt-medium">Москва</p>
                    <a class="mrrt-medium link black-link">https://forum-rimm.ru</a>
                </div>
                <a class="btn btn-dark l-btn custom-small-btn" href="#">Добавить в календарь</a>
            </div>

            <div class="event">
                <h3 class="event-h3 mrrt-bold">Международный научно-технологический форум Робототехника, интеллект машин и механизмов</h3>
                <div class="event-description">
                    <p class="mrrt-medium">05.02 - 06.02</p>
                </div>
                <a class="btn btn-dark l-btn custom-small-btn" href="#">Добавить в календарь</a>
            </div>

            <div class="event">
                <h3 class="event-h3 mrrt-bold">Международный научно-технологический форум Робототехника, интеллект машин и механизмов</h3>
                <div class="event-description">
                    <p class="mrrt-medium">05.02 - 06.02</p>
                    <p class="mrrt-medium">Москва</p>
                    <a class="mrrt-medium link black-link">https://forum-rimm.ru</a>
                </div>
                <a class="btn btn-dark l-btn custom-small-btn" href="#">Добавить в календарь</a>
            </div>
        </div>
    </section>

    <section class="container last-section">
        <h2 class="h2 white">Март</h2>
        <div class="month-events">
            <div class="event">
                <h3 class="event-h3 mrrt-bold">Международный научно-технологический форум Робототехника, интеллект машин и механизмов</h3>
                <div class="event-description">
                    <p class="mrrt-medium">05.02 - 06.02</p>
                    <p class="mrrt-medium">Москва</p>
                    <a class="mrrt-medium link black-link">https://forum-rimm.ru</a>
                </div>
                <a class="btn btn-dark l-btn custom-small-btn" href="#">Добавить в календарь</a>
            </div>

            <div class="event">
                <h3 class="event-h3 mrrt-bold">Международный научно-технологический форум Робототехника, интеллект машин и механизмов</h3>
                <div class="event-description">
                    <p class="mrrt-medium">05.02 - 06.02</p>
                </div>
                <a class="btn btn-dark l-btn custom-small-btn" href="#">Добавить в календарь</a>
            </div>

            <div class="event">
                <h3 class="event-h3 mrrt-bold">Международный научно-технологический форум Робототехника, интеллект машин и механизмов</h3>
                <div class="event-description">
                    <p class="mrrt-medium">05.02 - 06.02</p>
                    <p class="mrrt-medium">Москва</p>
                    <a class="mrrt-medium link black-link">https://forum-rimm.ru</a>
                </div>
                <a class="btn btn-dark l-btn custom-small-btn" href="#">Добавить в календарь</a>
            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/../templates/footer.php';
?>