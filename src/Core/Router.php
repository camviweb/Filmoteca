<?php

declare(strict_types=1);

namespace App\Core;

use App\Controller\HomeController;

class Router
{
    public function route(): void
    {
        /**
         * echo '<pre>';
         * var_dump($_SERVER);
         * echo '</pre>';die;
         */

        // Récupère l'URL demandée (sans le domaine et la racine)
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $method = $_SERVER['REQUEST_METHOD']; // Méthode HTTP (GET, POST)

        // Découpe l'URI pour obtenir la route et l'action
        $parts = explode('/', $uri); // Exemple : ['films', 'create']

        $route = $parts[0] ?? null;   // 'films'
        $action = $parts[1] ?? null; // 'create'

        // Définit les routes et leurs contrôleurs associés
        $routes = [
            'film' => 'FilmController',
            'contact' => 'ContactController',
        ];

        // Gestion des routes POST spécifiques
        if ($method === 'POST') {
            if ($uri === 'add_movie') {
                $controller = new \App\Controller\FilmController();
                $controller->store();
                return;
            }

            if ($uri === 'delete_movie') {
                $controller = new \App\Controller\FilmController();
                $filmId = $_POST['id'] ?? null;
                if ($filmId) {
                    // Appel de la méthode delete avec l'ID du film
                    $controller->delete(['id' => $filmId]);
                } else {
                    echo "ID du film manquant.";
                }
                return;
            }

            if ($route === 'film' && $action === 'update') {
                $controller = new \App\Controller\FilmController();
                $controller->update($_POST);
                return;
            }
        }

        // Gestion de la route GET pour afficher les détails d'un film
        if ($method === 'GET' && $route === 'film' && isset($parts[2]) && $parts[1] === 'details') {
            $controller = new \App\Controller\FilmController();
            $controller->showDetails((int) $parts[2]); // Appelle la méthode showDetails avec l'ID du film
            return;
        }

        if ($method === 'GET' && $route === 'film' && isset($parts[2]) && $parts[1] === 'edit') {
            // Récupère l'ID de l'URL et appelle la méthode edit avec l'ID
            $controller = new \App\Controller\FilmController();
            $controller->edit((int) $parts[2]); // Passe l'ID du film à la méthode edit
            return;
        }

        if (array_key_exists($route, $routes)) {
            // Crée dynamiquement le contrôleur
            $controllerName = 'App\\Controller\\' . $routes[$route];

            if (!class_exists($controllerName)) {
                echo "Controller '$controllerName' not found";
                return;
            }

            $controller = new $controllerName();

            // Vérifie si la méthode existe dans le contrôleur
            if (method_exists($controller, $action)) {
                $queryParams = $_GET; // Récupère les paramètres éventuels
                $controller->$action($queryParams); // Appelle la méthode dynamique correspondant à l'action du contrôleur
            } else {
                echo "Action '$action' not found in $controllerName";
            }
        } else {
            // Si la route n'existe pas, affiche la page d'accueil
            $controller = new HomeController();
            $controller->index();
        }
    }
}