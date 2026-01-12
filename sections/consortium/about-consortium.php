<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О Консорциуме | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/about-consortium.css">


</head>

<?php
include __DIR__ . '/../../templates/header.php';
?>

<main>
    <section class="container aboutCRB-hero d-flex flex-row align-items-start justify-content-between">
        <div class="decor-block">
            <h1 class="custom-about-h1">О Консорциуме</h1>
            <img src="<?= BASE_URL ?>assets/images/about-crb/about-crb__hero-robot.png" alt="Робот, изображение сгенерировано искусственным интеллектом | Консорциум робототехники и систем интеллектуального управления" class="about-hero__img">
        </div>
        <div class="about">
            <div class="about__card d-flex flex-row align-items-center justify-content-between">
                <p class="about__card__number">1</p>
                <div class="about__card__content">
                    <h3 class="hv-bold turquose-dark about__card__h3">Объединение организаций</h3>
                    <p>Создание инновационной и технологической среды за счёт объединения научных, образовательных и промышленных организаций</p>
                </div>
            </div>

            <div class="about__card d-flex flex-row align-items-center justify-content-between">
                <p class="about__card__number">2</p>
                <div class="about__card__content">
                    <h3 class="hv-bold turquose-dark about__card__h3">Концентрация передовых разработок</h3>
                    <p>Фокус на робототехнике и искусственном интеллекте — от фундаментальных исследований до промышленного внедрения</p>
                </div>
            </div>

            <div class="about__card d-flex flex-row align-items-center justify-content-between">
                <p class="about__card__number">3</p>
                <div class="about__card__content">
                    <h3 class="hv-bold turquose-dark about__card__h3">Комплекс ключевых компетенций</h3>
                    <p>Обеспечивающих интеграцию производственных технологий и бизнес- моделей для их распространения в качестве «Фабрик Будущего»</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container aboutCRB-goals">
        <h2 class="h2">цели</h2>
        <div class="aboutCRB-goals__container">
            <div class="aboutCRB-goals__goal-card">
                <h3 class="goal-card__h3">Содействие в повышении</h3>
                <p class="goal-card__text">квалификации работников робототехнической сферы</p>
                <img src="<?= BASE_URL ?>assets/images/about-crb/goals__card-1.png" class="goal-card__img">
            </div>
            <div class="aboutCRB-goals__goal-card">
                <h3 class="goal-card__h3">Содействие в формировании</h3>
                <p class="goal-card__text">производственных и кооперационных цепочек</p>
                <img src="<?= BASE_URL ?>assets/images/about-crb/goals__card-2.png" class="goal-card__img">
            </div>
            <div class="aboutCRB-goals__goal-card">
                <h3 class="goal-card__h3">Содействие участникам</h3>
                <p class="goal-card__text">в осуществлении деятельности направленной на создание инновационной и технологической среды для обеспечения высокого качества жизни и отработки новой модели экономического роста</p>
                <img src="<?= BASE_URL ?>assets/images/about-crb/goals__card-3.png" class="goal-card__img">
            </div>
            <div class="aboutCRB-goals__goal-card">
                <h3 class="goal-card__h3">Участие в разработке</h3>
                <p class="goal-card__text">правовых нормативных актов по вопросам направлений деятельности Партнерства, участие в разработке и реализации программ различных уровней по профилю деятельности Консорциума</p>
                <img src="<?= BASE_URL ?>assets/images/about-crb/goals__card-4.png" class="goal-card__img">
            </div>
        </div>
    </section>

    <section class="container aboutCRB-tasks">
        <h2 class="h2">задачи</h2>

        <div class="aboutCRB-tasks__task d-flex align-items-center">
            <img src="<?= BASE_URL ?>assets/images/about-crb/icon-gear.svg" class="task-icon">
            <p class="task-text">Разработка концепций, технических решений и подходов</p>
        </div>
        <div class="aboutCRB-tasks__task d-flex align-items-center">
            <img src="<?= BASE_URL ?>assets/images/about-crb/icon-handshake.svg" class="task-icon">
            <p class="task-text">Реализация совместных проектов</p>
        </div>
        <div class="aboutCRB-tasks__task d-flex align-items-center">
            <img src="<?= BASE_URL ?>assets/images/about-crb/icon-lamp.svg" class="task-icon">
            <p class="task-text">Развитие технологической инфраструктуры</p>
        </div>
        <div class="aboutCRB-tasks__task d-flex align-items-center">
            <img src="<?= BASE_URL ?>assets/images/about-crb/icon-robotic-arm.svg" class="task-icon">
            <p class="task-text">Разработка и производство собственных роботов</p>
        </div>
        <div class="aboutCRB-tasks__task d-flex align-items-center">
            <img src="<?= BASE_URL ?>assets/images/about-crb/icon-lightning.svg" class="task-icon">
            <p class="task-text">Разработка новых технических требований</p>
        </div>
        <div class="aboutCRB-tasks__task d-flex align-items-center">
            <img src="<?= BASE_URL ?>assets/images/about-crb/icon-people.svg" class="task-icon">
            <p class="task-text">Содействие участникам в получении мер государственной поддержки</p>
        </div>
    </section>

    <section class="container aboutCRB-commetees">
        <h2 class="h2">комитеты</h2>
        <p>В составе Консорциума робототехники работают профильные комитеты — рабочие группы экспертов от промышленности, науки и образования. Они решают стратегические задачи: от разработки стандартов и законопроектов до внедрения роботов в производство и подготовки кадров.</p>
        <p>Именно в комитетах рождаются идеи, которые становятся реальными проектами, продуктами и решениями, меняющими промышленность, образование и повседневную жизнь.</p>
        <div class="commetees__container">
            <div class="commetee__card d-flex flex-row align-items-center">
                <img src="<?= BASE_URL ?>assets/images/about-crb/commetee-1.png">
                <div class="commetee__card__texts">
                    <h3 class="hv-bold turquose-dark commetee-h3">Промышленная и сервисная робототехника</h3>
                    <p>Работа комитета направлена на ускорение внедрения отечественных роботизированных систем в промышленность и быт.</p>
                </div>
            </div>
            <div class="commetee__card d-flex flex-row align-items-center">
                <img src="<?= BASE_URL ?>assets/images/about-crb/commetee-2.png">
                <div class="commetee__card__texts">
                    <h3 class="hv-bold turquose-dark commetee-h3">Компоненты и технологии</h3>
                    <p>Комитет развивает элементную базу робототехники — датчики, приводы, контроллеры и другие компоненты. </p>
                </div>
            </div>
            <div class="commetee__card d-flex flex-row align-items-center">
                <img src="<?= BASE_URL ?>assets/images/about-crb/commetee-3.png">
                <div class="commetee__card__texts">
                    <h3 class="hv-bold turquose-dark commetee-h3">Интеллектуальные системы и микроэлектроника</h3>
                    <p>Занимается разработкой систем управления на основе ИИ и отечественной микроэлектроники.</p>
                </div>
            </div>
            <div class="commetee__card d-flex flex-row align-items-center">
                <img src="<?= BASE_URL ?>assets/images/about-crb/commetee-4.png">
                <div class="commetee__card__texts">
                    <h3 class="hv-bold turquose-dark commetee-h3">Образовательная робототехника и подготовка кадров</h3>
                    <p>Реализует концепцию непрерывного инженерного образования — от детского сада до профессиональной переподготовки.</p>
                </div>
            </div>
            <div class="commetee__card d-flex flex-row align-items-center">
                <img src="<?= BASE_URL ?>assets/images/about-crb/commetee-5.png">
                <div class="commetee__card__texts">
                    <h3 class="hv-bold turquose-dark commetee-h3">Стандартизация и регулирование</h3>
                    <p>Формирует единые требования к безопасности и качеству автономных машин, разрабатывает стандарты на основе международных практик и сотрудничает с зарубежными организациями.</p>
                </div>
            </div>
            
        </div>
    </section>

    <section class="container aboutCRB-CTA last-section">
        <p>Комитеты — это невидимая опора будущего робототехники в России. Здесь, за закрытыми дверями совещаний, рождаются решения, которые потом меняют промышленность, транспорт, образование и быт.</p>
        <p class="quote-alike">Мы верим: движение вперёд начинается с понимания того, как устроены механизмы, которые его обеспечивают</p>
        <div class="d-flex flex-row align-items-center aboutCRB-CTA__decor">
            <p class="aboutCRB-CTA__text">Хотите узнать больше? Скачайте презентацию Консорциума — всё о миссии, структуре и планах в одном документе.</p>
            <img src="<?= BASE_URL ?>assets/images/about-crb/robotic-hand-decor.png" class="aboutCRB-CTA__img">
        </div>
        <a class="btn btn-dark l-btn" href="https://disk.yandex.ru/d/9nLzIFiDRPlj6w" target="_blank">Скачать презентацию</a>
    </section>
</main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>