<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'stderr');

require dirname(__DIR__) . '/vendor/autoload.php';

use Argo\Http\HttpContainerFactory;
use Argo\Infra\Preflight;
use AutoRoute\Router;

$container = HttpContainerFactory::new();
$request = $container->get(SapiRequest::CLASS);
$preflight = $container->get(Preflight::CLASS);
$redirect = $preflight($request->url['path']);

if ($redirect !== null) {
    header("Location: {$redirect}");
    exit();
}

$router = $container->get(Router::CLASS);
$route = $router->route($request->method, $request->url['path']);
$action = $container->new($route->class);
$response = call_user_func([$action, $route->method], ...$route->params);
$sender = new SapiResponseSender();
$sender->send($response);
