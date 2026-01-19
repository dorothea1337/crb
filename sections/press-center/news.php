<?php
$categories = ["Все новости", "Новые участники", "Партнеры", "Анонсы мероприятий", "Отчёты о мероприятиях", "Новости участников", "Меры поддержки", "Новости отрасли"];
?>

<!DOCTYPE html>
<html lang="ru">
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

    <section class="search-instruments container">
        <div class="categories__dropdown">
            <button class="btn btn-categories dropdown-toggle hv-light turquose-dark" type="button" id="dropdownCategoriesButton" data-bs-toggle="dropdown" aria-expanded="false">
                Категории
            </button>
            <ul class="dropdown-menu dropdown-menu-categories" aria-labelledby="dropdownCategoriesButton">
                <?php foreach ($categories as $category): ?>
                    <li><button class="dropdown-item categories__dropdown-item hv-light"><?= htmlspecialchars($category) ?></button></li>
                <?php endforeach; ?>
            </ul>
        </div>
    
        <form class="news__search d-flex fex-row align-items-center">
            <button class="search__button" type="submit" aria-label="Найти">
                <img src="<?= BASE_URL ?>assets/images/news/news-icon__search.svg" alt="Иконка поиска | Консорциум робототехники и систем интеллектуального управления">
            </button>
            <input type="search" class="search__input hv-regular" placeholder="Поиск по новостям" aria-label="Поиск по новостям">
        </form>
    </section>

    <section class="container">
        <div class="news">
            <div class="news-card">
                <p class="news-card__category mrrt-normal">Отчёты о мероприятиях</p>
                <a href="<?= BASE_URL ?>press-center/post-page" class="news-card__inner">
                    <div class="news-card__content">
                        <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="news-card__img">
                        <h3 class="news-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                        <p class="news-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                    </div>
                    <p class="news-card__date hv-light turquose-dark">10.10.2025</p>
                </a>
            </div>

            <div class="news-card">
                <p class="news-card__category mrrt-normal">Отчёты о мероприятиях</p>
                <a href="#" class="news-card__inner">
                    <div class="news-card__content">
                        <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="news-card__img">
                        <h3 class="news-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                        <p class="news-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                    </div>
                    <p class="news-card__date hv-light turquose-dark">10.10.2025</p>
                </a>
            </div>

            <div class="news-card">
                <p class="news-card__category mrrt-normal">Отчёты о мероприятиях</p>
                <a href="#" class="news-card__inner">
                    <div class="news-card__content">
                        <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="news-card__img">
                        <h3 class="news-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                        <p class="news-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                    </div>
                    <p class="news-card__date hv-light turquose-dark">10.10.2025</p>
                </a>
            </div>

            <div class="news-card">
                <p class="news-card__category mrrt-normal">Отчёты о мероприятиях</p>
                <a href="#" class="news-card__inner">
                    <div class="news-card__content">
                        <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="news-card__img">
                        <h3 class="news-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                        <p class="news-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                    </div>
                    <p class="news-card__date hv-light turquose-dark">10.10.2025</p>
                </a>
            </div>

            <div class="news-card">
                <p class="news-card__category mrrt-normal">Отчёты о мероприятиях</p>
                <a href="#" class="news-card__inner">
                    <div class="news-card__content">
                        <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="news-card__img">
                        <h3 class="news-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                        <p class="news-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                    </div>
                    <p class="news-card__date hv-light turquose-dark">10.10.2025</p>
                </a>
            </div>

            <div class="news-card">
                <p class="news-card__category mrrt-normal">Отчёты о мероприятиях</p>
                <a href="#" class="news-card__inner">
                    <div class="news-card__content">
                        <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="news-card__img">
                        <h3 class="news-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                        <p class="news-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                    </div>
                    <p class="news-card__date hv-light turquose-dark">10.10.2025</p>
                </a>
            </div>

            <div class="news-card">
                <p class="news-card__category mrrt-normal">Отчёты о мероприятиях</p>
                <a href="#" class="news-card__inner">
                    <div class="news-card__content">
                        <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="news-card__img">
                        <h3 class="news-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                        <p class="news-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                    </div>
                    <p class="news-card__date hv-light turquose-dark">10.10.2025</p>
                </a>
            </div>

            <div class="news-card">
                <p class="news-card__category mrrt-normal">Отчёты о мероприятиях</p>
                <a href="#" class="news-card__inner">
                    <div class="news-card__content">
                        <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="news-card__img">
                        <h3 class="news-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                        <p class="news-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                    </div>
                    <p class="news-card__date hv-light turquose-dark">10.10.2025</p>
                </a>
            </div>
            
        </div>

        <button class="news-load-more link" type="button">
            Показать ещё
        </button>
    </section>
</main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>