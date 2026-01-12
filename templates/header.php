<body>
    <header class="header">
        <nav class="container header__container">
            <a href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>assets/images/header/crb_logo_header.svg" alt="Логотип | Консорциум робототехники" class="header__img"></a>

            <ul class="header__text-buttons">
                <li class="dropdown">
                    <a class="hv-bold header__text-button dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Консорциум</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/about-consortium">О Консорциуме</a></li>
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/participants">Участники</a></li>
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/partners">Партнеры</a></li>
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/etp">ЕТП Робототехника</a></li>
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>consortium/tk">ТК 131 ПК 3</a></li>
                    </ul>
                
                </li>
                <li class="dropdown">
                    <a class="hv-bold header__text-button dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Экосистема</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="hv-bold dropdown-item rimm-dropdown" href="<?= BASE_URL ?>ecosystem/RIMM">РИММ-2026</a></li>
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>ecosystem/mir-robototekhniki">МИР Робототехники</a></li>
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>ecosystem/atlas">АТЛАС Робототехники</a></li>
                        <li><a class="hv-bold dropdown-item" href="#">RUbot</a></li>
                        <li><a class="hv-bold dropdown-item" href="#">Российский инженерный класс</a></li>
                    </ul>
                </li>
                <li><a class="hv-bold header__text-button" href="<?= BASE_URL ?>calendar">Календарь мероприятий</a></li>
                <li class="dropdown">
                    <a class="hv-bold header__text-button dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Пресс-центр</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>press-center/news">Новости</a></li>
                        <li><a class="hv-bold dropdown-item" href="<?= BASE_URL ?>press-center/smi-o-nas">СМИ о нас</a></li>
                    </ul>
                </li>
                <li><a class="hv-bold header__text-button" href="<?= BASE_URL ?>contacts">Контакты</a></li>
            </ul>

            <ul class="header__text-buttons">
                <li><a href="https://t.me/consortium_of_robotics" target="_blank"><img src="<?= BASE_URL ?>assets/images/header/telegram_logo_header.svg"></a></li>
                <li><a href="https://vk.com/robotcontrol" target="_blank"><img src="<?= BASE_URL ?>assets/images/header/vk_logo_header.svg"></a></li>
                <li><a class="hv-bold green-button s-green-button">Вступить</a></li>
            </ul>
        </nav>
    </header>
