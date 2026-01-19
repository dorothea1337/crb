<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Название поста | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/news.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">


</head>

<?php
include __DIR__ . '/../../templates/header.php';
?>

<main>
    <section class="container post-content">
        <h1 class="post-h1">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h1>
        <img class="w-100" src="<?= BASE_URL ?>assets/images/news/temp-img.png">
        <p class="news-p">8 октября в рамках XIV Петербургского международного газового форума прошёл круглый стол «Роботизация нефтегазовой отрасли: актуальные вызовы и перспективы развития, практика внедрения РТК»</p>
        <p class="news-p">Модератором выступил Максим Гурбашков — член правления Консорциума робототехники, генеральный директор ООО «ИнноДрайв».</p>
        <p class="news-p">В заключение дискуссии Максим Гурбашков подвёл итог, резюмировав сказанное участниками: нефтегазовый сектор, являясь критической инфраструктурой, сталкивается с проблемой высоких затрат при внедрении новых технологий. Это связано с рисками повреждения оборудования и страховыми затратами. В результате, несмотря на высокий доход компаний, внедрение инноваций существенно увеличивает расходы. Поэтому для ускорения перехода на новые технологии необходима поддержка компаний, внедряющих эти технологии.</p>

        <div class="post__info">
            <p class="post__date">08.10.2025</p>
            <p class="post__category">Отчёт о мероприятии</p>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>