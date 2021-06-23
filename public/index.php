<?php

session_start();

use Pulunomoe\Controller\HelloController;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Twig\Extension\DebugExtension;

require_once __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->addErrorMiddleware(true, true, true);

/* For SQLite3 */
$pdo = new PDO('sqlite::memory:');

/* For MYSQL
$pdo = new PDO(
	'mysql:host=DB_HOST;dbname=DB_NAME;charset=utf8mb4',
	'DB_USER',
	'DB_PASSWORD'
); */

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$twig = Twig::create(__DIR__ . '/../templates/', ['debug' => true]);
$twig->addExtension(new DebugExtension());
$twig->getEnvironment()->addGlobal('session', $_SESSION);
$app->add(TwigMiddleware::create($app, $twig));

$helloController = new HelloController($pdo);
$app->get('/hello[/{name}]', [$helloController, 'hello']);

$app->run();
