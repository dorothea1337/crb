<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light container header__container">
            <a href="<?= BASE_URL ?>" class="navbar-brand"><img src="<?= BASE_URL ?>assets/images/header/crb_logo_header.svg" alt="Логотип | Консорциум робототехники" class="header__img"></a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav header__text-buttons">
                    <li class="nav-item dropdown">
                        <a class="hv-bold header__text-button nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Консорциум</a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/about-consortium">О Консорциуме</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/participants">Участники</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/partners">Партнеры</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/etp">ЕТП Робототехника</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/tk">ТК 131 ПК 3</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="hv-bold header__text-button nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Экосистема</a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="hv-bold dropdown-item rimm-dropdown" href="<?= BASE_URL ?>ecosystem/RIMM">РИММ-2026</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>ecosystem/mir-robototekhniki">МИР Робототехники</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>ecosystem/atlas">АТЛАС Робототехники</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>ecosystem/rubot">RUbot</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>ecosystem/rik">Российский инженерный класс</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link hv-bold header__text-button" href="<?= BASE_URL ?>calendar">Календарь мероприятий</a></li>

                    <li class="nav-item dropdown">
                        <a class="hv-bold header__text-button nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Пресс-центр</a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>press-center/news">Новости</a></li>
                            <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>press-center/smi-o-nas">СМИ о нас</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link hv-bold header__text-button" href="<?= BASE_URL ?>contacts">Контакты</a></li>
                </ul>

                <ul class="navbar-nav header__text-buttons">
                    <li class="nav-item"><a href="https://t.me/consortium_of_robotics" target="_blank"><img src="<?= BASE_URL ?>assets/images/header/telegram_logo_header.svg" class="header__icon"></a></li>

                    <li class="nav-item"><a href="https://vk.com/robotcontrol" target="_blank"><img src="<?= BASE_URL ?>assets/images/header/vk_logo_header.svg" class="header__icon"></a></li>

                    <li class="nav-item"><a class="hv-bold green-button s-green-button" href="<?= BASE_URL ?>join-consortium">Вступить</a></li>
                </ul>
            </div>

        </nav>
    </header>
