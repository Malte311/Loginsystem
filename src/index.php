<?php

define('Loginsystem', 'ok');

header('Content-Type: text/html; charset=utf-8');
error_reporting(!empty($_ENV['PROD']) && $_ENV['PROD'] == 'prod' ? 0 : E_ALL);

require_once(__DIR__ . '/php/autoload.php');

$login = new Login();
$login->handleRequests();

$view;
if ($login->isLoggedIn()) {
	$view = new HomeView(new Template('home'));
} else {
	$template = new Template('login');
	$template->addReplacement('%%NONCE%%', $login->generateNonce());
	$view = new LoginView($template);
}

$view->show();

?>