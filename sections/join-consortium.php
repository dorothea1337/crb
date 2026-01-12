<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вступить в Консорциум | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/join-consortium.css">


</head>

<?php
include __DIR__ . '/../templates/header.php';
?>

<main class="join-consortium">
    <section class="container join-consortium-section">
        <div class="join__text-content">
            <h1 class="join-h1">Вступить в Консорциум</h1>
            <p>Для вступления в консорциум отправить сканы следующих документов на <a href="mailto:info@robot-contol.ru" class="link">info@robot-contol.ru</a>:</p>
            <ul>
                <li><p>заявление на бланке организации;</p></li>
                <li><p>копия учредительных документов;</p></li>
                <li><p>зрешение высшего органа управления организации о вступлении.</p></li>
            </ul>
            <p>Решение об одобрении заявки осуществляется Правлением Консорциума в течение 30 дней.</p>
            <p>Вопросы по вступлению можете адресовать по телефону <a class="link" href="tel:+79602322676">+7 (960) 232-26-76</a> или на почту <a class="link" href="mailto:info@robot-control.ru">info@robot-control.ru</a> с темой письма "Вопросы по вступлению в Консорциум".</p>
            <p class="quote-alike-black">Или заполнить форму</p>
        </div>
        <div class="form-container">
            <h2 class="form-h2">Подать заявку на вступление</h2>
            <form class="application-form" method="post" enctype="multipart/form-data">
                <label>
                    Контактный e-mail
                    <input type="email" name="email" required>
                </label>
                <label>
                    ФИО
                    <input type="text" name="name" required>
                </label>
                <label>
                    Название компании
                    <input type="text" name="company" required>
                </label>

                <label>
                    Заявление
                    <input type="file" name="doc_charter" accept=".pdf,.doc,.docx" required>
                </label>

                <label>
                    Копия учредительных документов
                    <input type="file" name="doc_egrul" accept=".pdf,.doc,.docx" required>
                </label>

                <label>
                    Решение о вступлении
                    <input type="file" name="doc_presentation" accept=".pdf,.ppt,.pptx" required>
                </label>

                <label class="checkbox">
                    <input type="checkbox" name="agreement" required>
                    Я согласен с <a class="link" href="https://disk.360.yandex.ru/i/UnZLabnNyhQzEA" target="_blank">условиями обработки персональных данных</a> и <a class="link" href="https://disk.360.yandex.ru/i/mjGgSVDquECw8A" target="_blank">политикой конфиденциальности</a>
                </label>

                <button type="submit">Отправить</button>

            </form>

        </div>
    </section>
</main>

<?php
include __DIR__ . '/../templates/footer.php';
?>