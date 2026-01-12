<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЕТП Робототехника | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/etp.css">


</head>

<?php
include __DIR__ . '/../../templates/header.php';
?>

<main>
        <section class="etp-hero">
            <img src="<?= BASE_URL ?>assets/images/etp/etp-bg.png" class="etp-bg">
            <div class="etp-content container">
                <h1 class="h1-white etp-h1">ЕТП Робототехника</h1>
                <div class="etp-hero__logos">
                    <a href="https://eec.eaeunion.org" target="_blank"><img src="<?= BASE_URL ?>assets/images/etp/eek-logo.png"></a>
                    <p class="white">При поддержке Евразийской экономической комиссии <a class="link_white" href="https://eec.eaeunion.org" target="_blank">eec.eaeunion.org</a></p>
                </div>
            </div>
        </section>

        <section class="container about-etp">
            <h2 class="h2">Евразийская технологическая платформа «Робототехника»</h2>
            <p class="quote-alike">ЕТП «Робототехника» — Евразийская технологическая платформа, созданная при поддержке Евразийской экономической комиссии.</p>
            <p>Цель платформы — обеспечить эффективное взаимодействие заинтересованных сторон (представителей бизнес-сообществ, государственных органов, научных и общественных организаций) на основе использования экономического потенциала государств — членов Евразийского экономического союза.</p>
            <a class="link" href="https://disk.yandex.ru/i/v9rQj_n129L7Iw" target="_blank">Соглашение ЕТП «Робототехника»</a><br>
            <a class="link" href="https://disk.yandex.ru/i/iWwAOTxdfz0HmQ" target="_blank">Распоряжение Коллегии</a><br>
            <a class="link" href="https://disk.yandex.ru/i/NLoz_cTdJnwNsw" target="_blank">Распоряжение Совета Евразийской экономической комиссии №20 от 08.07.25</a>
        </section>

        <section class="container etp-tasks">
            <h2 class="h2">Задачи ЕТП</h2>
            <div class="row">
                <div class="col">
                    <img src="<?= BASE_URL ?>assets/images/etp/card-1.png" alt="Рукопожатие - изображение сгенерировано нейросетью | Консорциум Робототехники">
                    <h3 class="etp-h3">межгосударственная программа</h3>
                    <p>Разработка и реализация межгосударственной программы по развитию робототехники, производства и внедрения промышленных роботов в государствах-членах ЕАЭС.</p>
                    <p>Разработка предложений по наднациональному регулированию промышленной робототехники.</p>
                    <p>Взаимодействие с национальными ассоциациями ЕАЭС в сфере промышленной робототехники.</p>
                </div>
                <div class="col">
                    <img src="<?= BASE_URL ?>assets/images/etp/card-2.png" alt="Аналитика - изображение сгенерировано нейросетью | Консорциум Робототехники">
                    <h3 class="etp-h3">Аналитика</h3>
                    <p>Подготовка совместных аналитических материалов о состоянии и направлений развития промышленной робототехники в странах ЕАЭС.</p>
                    <p>Определение потребностей экономики государств в промышленных роботах.</p>
                </div>
                <div class="col">
                    <img src="<?= BASE_URL ?>assets/images/etp/card-3.png" alt="Робо-рука - изображение сгенерировано нейросетью | Консорциум Робототехники">
                    <h3 class="etp-h3">Разработка и внедрение</h3>
                    <p>Содействие в создании совместных промышленных роботов, робототехнических систем и автоматизированных систем интеллектуального управления роботами.</p>
                    <p>Содействие в создании совместных центров и производств промышленной робототехники.</p>
                    <p>Внедрение промышленных роботов в различные отрасли экономики.</p>
                </div>
            </div>
        </section>

        <section class="container etp-participants">
            <h2 class="h2">Участники ЕТП</h2>

            <div class="etp-participants__card row">
                <img src="<?= BASE_URL ?>assets/images/header/crb_logo_header.svg" alt="Консорциум робототехники и систем интеллектуального управления логотип | Консорциум Робототехники" class="col-3">
                <div class="col-1"></div>
                <div class="col etp-participants__card__texts">
                    <h3 class="etp-participants__card__h3">Консорциум робототехники и систем интеллектуального управления – секретариат</h3>
                    <p class="subheding">г. Санкт-Петербург, Российская Федерация</p>
                    <a class="link etp-participants__link" href="https://robot-control.ru" target="_blank">robot-control.ru</a>
                </div>
            </div>

            <div class="etp-participants__card row">
                <img src="<?= BASE_URL ?>assets/images/etp/ara-logo.png" alt="Общественная организация «Ассоциация робототехники Армении» логотип | Консорциум Робототехники" class="col-3">
                <div class="col-1"></div>
                <div class="col etp-participants__card__texts">
                    <h3 class="etp-participants__card__h3">Общественная организация «Ассоциация робототехники Армении»</h3>
                    <p class="subheding">г. Ереван, Республика Армения</p>
                    <a class="link" href="https://raarm.am/en" target="_blank">https://raarm.am/en</a>
                </div>
            </div>

            <div class="etp-participants__card row">
                <img src="<?= BASE_URL ?>assets/images/etp/rai-logo.png" alt="Ассоциация «Робототехника и искусственный интеллект» логотип | Консорциум Робототехники" class="col-3">
                <div class="col-1"></div>
                <div class="col etp-participants__card__texts">
                    <h3 class="etp-participants__card__h3">Ассоциация «Робототехника и искусственный интеллект»</h3>
                    <p class="subheding">г. Минск, Республика Беларусь</p>
                    <a class="link" href="www.robocom.by" target="_blank">www.robocom.by</a>
                </div>
            </div>

            <div class="etp-participants__card row">
                <img src="<?= BASE_URL ?>assets/images/etp/kaar-logo.png" alt="Объединение юридических лиц «Казахстанская ассоциация автоматизации и робототехники» логотип | Консорциум Робототехники" class="col-3">
                <div class="col-1"></div>
                <div class="col etp-participants__card__texts">
                    <h3 class="etp-participants__card__h3">Объединение юридических лиц «Казахстанская ассоциация автоматизации и робототехники»</h3>
                    <p class="subheding">г. Астана, Республика Казахстан</p>
                    <a class="link" href="https://www.kaar.kz/" target="_blank">https://www.kaar.kz/</a>
                </div>
            </div>

            <div class="etp-participants__card row">
                <img src="<?= BASE_URL ?>assets/images/etp/kgtu-logo.png" alt="Кыргызский государственный технический университет им. И. Раззакова логотип | Консорциум Робототехники" class="col-3">
                <div class="col-1"></div>
                <div class="col etp-participants__card__texts">
                    <h3 class="etp-participants__card__h3">Кыргызский государственный технический университет им. И. Раззакова</h3>
                    <p class="subheding">г. Бишкек, Республика Кыргызстан</p>
                    <a class="link" href="https://kstu.kg/" target="_blank">https://kstu.kg/</a>
                </div>
            </div>

            <div class="etp-participants__card row">
                <img src="<?= BASE_URL ?>assets/images/etp/krsu-logo.png" alt="Кыргызско-Российский Славянский университет имени первого Президента Российской Федерации Б.Н. Ельцина логотип | Консорциум Робототехники" class="col-3">
                <div class="col-1"></div>
                <div class="col etp-participants__card__texts">
                    <h3 class="etp-participants__card__h3">Кыргызско-Российский Славянский университет имени первого Президента Российской Федерации Б.Н. Ельцина</h3>
                    <p class="subheding">г. Бишкек, Республика Кыргызстан</p>
                    <a class="link" href="https://kstu.kg/" target="_blank">https://kstu.kg/</a>
                </div>
            </div>

        </section>
    </main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>