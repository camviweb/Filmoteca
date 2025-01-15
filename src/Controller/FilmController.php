<?php

declare(strict_types=1);

namespace App\Controller;

use App\Core\TemplateRenderer;
use App\Entity\Film;
use App\Repository\FilmRepository;

class FilmController
{
    private TemplateRenderer $renderer;

    public function __construct()
    {
        $this->renderer = new TemplateRenderer();
    }

    public function list(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $films = $filmRepository->findAll();

        /* $filmEntities = [];
        foreach ($films as $film) {
            $filmEntity = new Film();
            $filmEntity->setId($film['id']);
            $filmEntity->setTitle($film['title']);
            $filmEntity->setYear($film['year']);
            $filmEntity->setType($film['type']);
            $filmEntity->setSynopsis($film['synopsis']);
            $filmEntity->setDirector($film['director']);
            $filmEntity->setCreatedAt(new \DateTime($film['created_at']));
            $filmEntity->setUpdatedAt(new \DateTime($film['updated_at']));

            $filmEntities[] = $filmEntity;
        } */

        //dd($films);

        echo $this->renderer->render('film/list.html.twig', [
            'films' => $films,
        ]);

        // header('Content-Type: application/json');
        // echo json_encode($films);
    }

    public function create()
    {
        // echo "Création d'un film";
        // Rendre la vue create.html.twig 
        echo $this->renderer->render('create.html.twig');
    }

    public function store()
    {
        // Récupération des données du formulaire
        $title = $_POST['title'];
        $year = $_POST['year'];
        $type = $_POST['type'];
        $synopsis = $_POST['synopsis'];
        $director = $_POST['director'];
        $deletedAt = !empty($_POST['deleted_at']) ? new \DateTime($_POST['deleted_at']) : null;

        // Validation des données
        if (empty($title) || empty($type)) {
            echo "Titre et Type sont obligatoires.";
            return;
        }

        $data = [
            'title' => $title,
            'year' => $year,
            'type' => $type,
            'synopsis' => $synopsis,
            'director' => $director,
            'deleted_at' => $deletedAt ? $deletedAt->format('Y-m-d H:i:s') : null,
            'created_at' => (new \DateTime())->format('Y-m-d H:i:s'),
            'updated_at' => (new \DateTime())->format('Y-m-d H:i:s')
        ];

        // Utilisation de l'EntityMapper pour mapper les données sur l'entité Film
        $entityMapper = new \App\Service\EntityMapper();
        $film = $entityMapper->mapToEntity($data, Film::class);
        // Création de l'objet Film
        /*$film = new Film();
        $film->setTitle($title);
        $film->setYear($year ? (string) $year : null);
        $film->setType($type);
        $film->setSynopsis($synopsis);
        $film->setDirector($director);
        $film->setDeletedAt($deletedAt);
        $film->setCreatedAt(new \DateTime());
        $film->setUpdatedAt(new \DateTime());*/

        // Sauvegarde via le repository
        $filmRepository = new FilmRepository();
        $filmRepository->save($film);

        // Message de confirmation
        $message = "Film ajouté";
        // header("Location: /films");

        // Rendre la vue create.html.twig avec le message
        echo $this->renderer->render('create.html.twig', [
            'message' => $message,
        ]);
    }

    public function read(array $queryParams)
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find((int) $queryParams['id']);

        dd($film);
    }

    public function edit(int $id)
    {

        // Récupère l'ID du film à partir des paramètres de l'URL
        $filmRepository = new FilmRepository();

        // Récupère les informations du film depuis la base de données
        $film = $filmRepository->find($id);

        if ($film) {
            echo $this->renderer->render('film/edit.html.twig', [
                'film' => $film
            ]);
        } else {
            echo "Film introuvable.";
        }
    }

    public function update(array $data)
    {
        // Récupère les données du formulaire via POST
        $filmId = (int) $data['id'];
        /*$title = $data['title'];
        $year = $data['year'];
        $type = $data['type'];
        $synopsis = $data['synopsis'];
        $director = $data['director'];*/

        // Récupère le film à modifier
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find($filmId);

        if ($film) {
            // Met à jour les informations du film
            /*$film->setTitle($title);
            $film->setYear($year ? (string) $year : null);
            $film->setType($type);
            $film->setSynopsis($synopsis);
            $film->setDirector($director);
            $film->setUpdatedAt(new \DateTime());*/

            $entityMapper = new \App\Service\EntityMapper();
            $film = $entityMapper->mapToEntity($data, Film::class);
            // Sauvegarde les modifications dans la base de données

            $film->setUpdatedAt(new \DateTime());
            $filmRepository->update($film);

            // Redirige vers la liste des films ou affiche un message de succès
            header('Location: /film/list');
            exit;
        } else {
            // Si le film n'existe pas, affiche une erreur
            echo "Film introuvable.";
        }
    }


    public function delete(array $queryParams)
    {
        // Vérifie si un ID est passé dans la requête POST
        if (isset($_POST['id'])) {
            $filmId = (int) $_POST['id'];

            // Récupérer l'entité film via son ID
            $filmRepository = new FilmRepository();
            $film = $filmRepository->find($filmId);

            // Si le film existe, le supprimer
            if ($film) {
                $filmRepository->delete($film);

                // Rediriger l'utilisateur vers la liste des films après la suppression
                header('Location: /film/list');
                exit;  // Arrêter l'exécution du script après la redirection
            } else {
                echo "Film introuvable.";
            }
        } else {
            // Gérer le cas où l'ID n'est pas passé
            echo "ID du film manquant.";
        }

        // echo "Suppression d'un film";
    }

    public function showDetails(int $id): void
    {
        $filmRepository = new FilmRepository();
        $film = $filmRepository->find($id); // Récupère les informations du film par son ID

        if ($film) {
            echo $this->renderer->render('film/details.html.twig', [
                'film' => $film, // Passe les données du film à la vue
            ]);
        } else {
            echo "Film introuvable.";
        }
    }

}
