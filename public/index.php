<?php

declare(strict_types=1); // Déclare le mode strict pour les types de données

require __DIR__ . '/../vendor/autoload.php'; // Charge automatiquement les classes nécessaires via Composer

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use App\Core\Router; // Utilise la classe Router du namespace App\Core

// Configurer Twig
$loader = new FilesystemLoader(__DIR__ . '/../src/Views'); // Spécifie le dossier contenant les templates
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/../var/cache', // Cache pour optimiser les performances
    'debug' => true, // Active le mode debug (désactive en production)
]);

// Exemple d'utilisation de Twig
echo $twig->render('homepage.html.twig');

// FRONT-CONTROLLER
$router = new Router($twig); // Crée une nouvelle instance de la classe Router
$router->route(); // Appelle la méthode route() pour gérer les requêtes entrantes
