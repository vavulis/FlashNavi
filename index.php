<?php
header('Content-Type: text/html; charset=utf-8');
define('ROOT', __DIR__);

use \vavulis\Template as Template;
use \vavulis\Card as Card;
use \vavulis\Cards as Cards;

require_once ROOT . '/Views/Template.php';
require_once ROOT . '/Models/Card.php';
require_once ROOT . '/Models/Cards.php';

$template = new Template(ROOT . '/Views/tmpl/');

//$cards_array = [
//    new Card('https://internet-flash.com:9443/admin/', 'img/abills.png', 'Abills', 'Биллинг FlashNet'),
//    new Card('https://internet-flash.com:9443/Cacti/', 'img/cacti.png', 'Cacti', 'Кактус - система мониторинга'),
//    new Card('http://observium.internet-flash.com/', 'img/observium2.jpg', 'Observium 1', 'Сервер мониторинга главных серверов и центральных свичей'),
//    new Card('http://observium2.internet-flash.com/', 'img/observium2.jpg', 'Observium 2', 'Сервер мониторинга свичей'),
//    new Card('http://nagios.internet-flash.com/nagios/', 'img/19.png', 'Nagios', 'Система мониторинга NAGIOS'),
//    new Card('http://nagios.internet-flash.com/nagiosql/', 'img/17.png', 'NagiosQL', 'Управление Nagios'),
//    new Card('http://userside.internet-flash.com/oper/', 'img/24.jpg', 'ERP UserSide', 'Cистема автоматизации для ISP'),
//    new Card('https://proxmox.internet-flash.com', 'img/21.png', 'Proxmox', 'Система управления виртуальными серверами')
//];
//$cards = new Cards($cards_array);
//$cards->saveToFile(ROOT . '/db/cards.json');
$cards = new Cards($cards_array);
$cards->loadFromFile(ROOT . '/db/cards.json');

$template->set("cards", $cards->getCards());

?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FlashNavi. Навигатор внутренних сервисов.</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/main.css" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top kos__header">
            <div class="container">
                <a class="navbar-brand" href="#">FlashNavi</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="https://internet-flash.net/" target="blank">Сайт
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://vk.com/internet_flash" target="blank">VK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading -->
            <h1 class="my-4">FlashNavi
                <small>- навигатор внутренних сервисов</small>
            </h1>

            <div class="row">
                <?php $template->display("cards"); ?>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 kos__footer">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Konstantin Semenov 2017</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>

</html>
