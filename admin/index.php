<?php
header('Content-Type: text/html; charset=utf-8');
define('ROOT', dirname(__DIR__));

use \vavulis\Template as Template;
use \vavulis\Card as Card;
use \vavulis\Cards as Cards;

require_once ROOT . '/Views/Template.php';
require_once ROOT . '/Models/Card.php';
require_once ROOT . '/Models/Cards.php';

$template = new Template(ROOT . '/Views/tmpl/');
