<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>АТЛАС Робототехники | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/atlas.css">



</head>

<?php
include __DIR__ . '/../../templates/header.php';
?>

<main>
        <section class="atlas-section">
            <div class="container atlas-content">
                <h1 class="h1-white mrrt-bold atlas-h1">АТЛАС Робототехники</h1>
                <p class="white hv-light">Атлас - это комплексный инструмент для анализа рынка робототехники стран ЕАЭС. </p>
                <p class="white hv-light">Атлас робототехники включает в себя данные о ключевых игроках, технологиях, поддержке и доступных ресурсах в отрасли на территории стран ЕАЭС.</p>
                <p class="white hv-light">Его цель — упростить доступ к важной информации для разработчиков, интеграторов и потребителей робототехники, а также стимулировать рост российской робототехники.</p>
                <div class="atlas-buttons">
                    <a class="btn-light l-btn flex-grow-1 atlas__btn" href="https://disk.360.yandex.ru/i/d-F2OFwaFl6zdg" target="_blank">Скачать презентацию</a>
                    <a class="l-btn btn-light flex-grow-1" href="https://vk.com/video-227546802_456239037" target="_blank">Видео с презентации на РЭФ</a>
                </div>

                <img src="<?= BASE_URL ?>assets/images/atlas/atlas-logo.svg" alt="АТЛАС Робототехники | Консорциум Робототехники" class="atlas-logo">

                <h2 class="h2 white">ПРИГЛАШАЕМ К СОТРУДНИЧЕСТВУ ПРЕДПРИЯТИЯ ОТРАСЛИ!</h2>
                <p class="white">Для сотрудничества заполните анкету и направьте ее на <a class="link link_white" href="mailto:info@roboticsatlas.ru">info@roboticsatlas.ru</a>.</p>
                <a class="l-btn btn-light" href="https://disk.360.yandex.ru/d/wuEY_BnTNE-iIw" target="_blank">Анкета для сотрудничества</a>

            </div>
        </section>        
    </main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>