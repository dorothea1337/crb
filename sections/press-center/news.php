<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новости | Консорциум робототехники и систем интеллектуального управления</title>
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
    <section class="news-hero">
        <div class="container news-hero-inner">
            <h1 class="h1-white">Новости</h1>
            <p class="hero-subheading">Новости, аналитика, выступления экспертов и отчётность — всё, что происходит в экосистеме робототехники и ИИ</p>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>