<?php
define('BASE_URL', '/');

$uri = $_SERVER['REQUEST_URI']; 
$segments = explode('/', trim($uri, '/'));

$section = $segments[0] ?? 'home';
$page    = $segments[1] ?? null;

if ($_SERVER['REQUEST_URI'] === '/') {
    include __DIR__ . '/../sections/home.php';
    exit;
}


if ($page === null && file_exists(__DIR__ . "/../sections/$section.php")) {
    include __DIR__ . "/../sections/$section.php";

} elseif ($page !== null && file_exists(__DIR__ . "/../sections/$section/$page.php")) {
    include __DIR__ . "/../sections/$section/$page.php";

} else {
    include __DIR__ . '/../sections/404.php';
}

