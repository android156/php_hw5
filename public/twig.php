<?php
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('/');
$twig = new \Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new \Twig\Extension\DebugExtension());

echo $twig->render('../twigtemplates/layouts/catalog.twig',
    [
        'catalog' =>  ['id' => 1, 'name' => 'Вася', 'price' => 10]
    ]);