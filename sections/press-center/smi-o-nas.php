<?php
$categories = ["Все публикации", "Статьи", "Репортажи", "Новостные заметки", "Интервью", "Комментарии", "Подкасты"];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>СМИ о нас | Консорциум робототехники и систем интеллектуального управления</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/footer.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/header.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/smi-o-nas.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/styles/main.css">


</head>

<?php
include __DIR__ . '/../../templates/header.php';
?>

<main>
    <section class="smi-hero">
        <div class="container smi-hero-inner">
            <h1 class="h1-white">СМИ о нас</h1>
            <p class="hero-subheading">Публикации, интервью и аналитика в ведущих отраслевых и федеральных СМИ</p>
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
    
        <form class="smi__search d-flex fex-row align-items-center">
            <button class="search__button" type="submit" aria-label="Найти">
                <img src="<?= BASE_URL ?>assets/images/news/news-icon__search.svg" alt="Иконка поиска | Консорциум робототехники и систем интеллектуального управления">
            </button>
            <input type="search" class="search__input hv-regular" placeholder="Поиск по постам" aria-label="Поиск по постам">
        </form>
    </section>

    <section class="smi-o-nas__posts__wrapper">
        <div class="container">
            <div class="smi-o-nas__posts">
                <div class="smi-card">
                    <p class="smi-card__category mrrt-normal">Отчёты о мероприятиях</p>
                    <a href="#" class="smi-card__inner">
                        <div class="smi-card__content">
                            <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="smi-card__img">
                            <h3 class="smi-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                            <p class="smi-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                        </div>
                        <p class="smi-card__date hv-light turquose-dark">10.10.2025</p>
                    </a>
                </div>

                <div class="smi-card">
                    <p class="smi-card__category mrrt-normal">Отчёты о мероприятиях</p>
                    <a href="#" class="smi-card__inner">
                        <div class="smi-card__content">
                            <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="smi-card__img">
                            <h3 class="smi-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                            <p class="smi-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                        </div>
                        <p class="smi-card__date hv-light turquose-dark">10.10.2025</p>
                    </a>
                </div>

                <div class="smi-card">
                    <p class="smi-card__category mrrt-normal">Отчёты о мероприятиях</p>
                    <a href="#" class="smi-card__inner">
                        <div class="smi-card__content">
                            <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="smi-card__img">
                            <h3 class="smi-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                            <p class="smi-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                        </div>
                        <p class="smi-card__date hv-light turquose-dark">10.10.2025</p>
                    </a>
                </div>

                <div class="smi-card">
                    <p class="smi-card__category mrrt-normal">Отчёты о мероприятиях</p>
                    <a href="#" class="smi-card__inner">
                        <div class="smi-card__content">
                            <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="smi-card__img">
                            <h3 class="smi-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                            <p class="smi-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                        </div>
                        <p class="smi-card__date hv-light turquose-dark">10.10.2025</p>
                    </a>
                </div>

                <div class="smi-card">
                    <p class="smi-card__category mrrt-normal">Отчёты о мероприятиях</p>
                    <a href="#" class="smi-card__inner">
                        <div class="smi-card__content">
                            <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="smi-card__img">
                            <h3 class="smi-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                            <p class="smi-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                        </div>
                        <p class="smi-card__date hv-light turquose-dark">10.10.2025</p>
                    </a>
                </div>

                <div class="smi-card">
                    <p class="smi-card__category mrrt-normal">Отчёты о мероприятиях</p>
                    <a href="#" class="smi-card__inner">
                        <div class="smi-card__content">
                            <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="smi-card__img">
                            <h3 class="smi-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                            <p class="smi-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                        </div>
                        <p class="smi-card__date hv-light turquose-dark">10.10.2025</p>
                    </a>
                </div>

                <div class="smi-card">
                    <p class="smi-card__category mrrt-normal">Отчёты о мероприятиях</p>
                    <a href="#" class="smi-card__inner">
                        <div class="smi-card__content">
                            <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="smi-card__img">
                            <h3 class="smi-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                            <p class="smi-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                        </div>
                        <p class="smi-card__date hv-light turquose-dark">10.10.2025</p>
                    </a>
                </div>

                <div class="smi-card">
                    <p class="smi-card__category mrrt-normal">Отчёты о мероприятиях</p>
                    <a href="#" class="smi-card__inner">
                        <div class="smi-card__content">
                            <img src="<?= BASE_URL ?>assets/images/news/temp-img.png" class="smi-card__img">
                            <h3 class="smi-card__h3 mrrt-bold turquose-dark">Роботизация как драйвер развития нефтегазовой отрасли: итоги круглого стола на ПМГФ-2025</h3>
                            <p class="smi-card__description hv-light turquose-dark">В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы». В рамках 24-й Международной выставки сварочных материалов, оборудования и технологий Weldex 2025 состоялась тренд-сессия «Путь сварки к роботам — реальность и перспективы».</p>
                        </div>
                        <p class="smi-card__date hv-light turquose-dark">10.10.2025</p>
                    </a>
                </div>  
            </div>

            <button class="smi-load-more link" type="button">
                Показать ещё
            </button>

            <div class="smi__cooperation">
                <h2 class="h2">Сотрудничество</h2>
                <p class="quote-alike">Вы представитель медиа и хотите освещать темы робототехники, ИИ и технологического суверенитета?</p>
                <p>Мы открыты к сотрудничеству: предоставим экспертные комментарии, организуем интервью с руководством и участниками, подготовим пресс-материалы и фото/видеоконтент.</p>
                <a class="btn l-green-button green-button" href="<?= BASE_URL ?>contacts">Связаться с нами</a>

                <h3 class="custom-smi-h3">Ваше СМИ освещало деятельность консорциума?</h3>
                <p>Присылайте ссылку на публикацию — мы добавим её в этот раздел.</p>

                <a class="btn l-green-button green-button" href="mailto:press@roboticsworld.ru">Поделиться публикацией</a>
            </div>
        </div>
        
    </section>
</main>

<?php
include __DIR__ . '/../../templates/footer.php';
?>