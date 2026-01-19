<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/404.css">

</head>

<?php
include __DIR__ . '/../templates/header.php';
?>

<main>
    <section class="last-section container-404 container">
        <div class="main-404__wrapper">
            <h1 class="h1-404 mrrt-bold white">404</h1>
            <div class="main-404">
                <h2 class="h2-404 white">Упс! Кажется, что-то пошло не так!</h2>
                <p class="white">Страницы, которую вы запрашиваете, не существует. Возможно, она устарела, была удалена, или был введён неверный адрес в адресной строкею</p>
                <a class="btn btn-light l-btn custom-small-btn" href="/">Вернуться на главную</a>
            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/../templates/footer.php';
?>