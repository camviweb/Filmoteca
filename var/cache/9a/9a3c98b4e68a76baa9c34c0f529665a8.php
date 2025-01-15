<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* homepage.html.twig */
class __TwigTemplate_5c45f5c5b6450de17e78d46b9455ace6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Bienvenue sur Filmoteca";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container my-5\">
    <!-- Hero Section -->
    <section class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold text-primary\">
            <i class=\"fas fa-video\"></i> Bienvenue sur Filmoteca
        </h1>
        <p class=\"lead text-muted\">
            Gérez votre collection de films avec une interface simple et intuitive.
        </p>
        <a href=\"/film/list\" class=\"btn btn-primary btn-lg\">
            <i class=\"fas fa-film\"></i> Voir les films
        </a>
    </section>

    <!-- Features Section -->
    <section class=\"row text-center mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-list-ul\"></i> Liste des films
                    </h5>
                    <p class=\"card-text\">
                        Consultez et explorez tous les films ajoutés à votre collection.
                    </p>
                    <a href=\"/film/list\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-arrow-right\"></i> Accéder
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-plus\"></i> Ajouter un film
                    </h5>
                    <p class=\"card-text\">
                        Ajoutez facilement de nouveaux films à votre collection.
                    </p>
                    <a href=\"/film/create\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-plus-circle\"></i> Ajouter
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-cogs\"></i> Organisation intuitive
                    </h5>
                    <p class=\"card-text\">
                        Gérez vos films avec des outils simples et efficaces.
                    </p>
                    <a href=\"/film/list\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-cog\"></i> Commencer
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class=\"text-center py-5\">
        
        <h2 class=\"fw-bold\">
            <i class=\"fas fa-rocket\"></i> Commencez dès maintenant !
        </h2>
        <p class=\"text-muted\">Ajoutez vos premiers films pour profiter de toutes les fonctionnalités.</p>
        <a href=\"/film/create\" class=\"btn btn-success btn-lg\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter un film
        </a>
    </section>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "homepage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bienvenue sur Filmoteca{% endblock %}

{% block content %}
<div class=\"container my-5\">
    <!-- Hero Section -->
    <section class=\"text-center mb-5\">
        <h1 class=\"display-4 fw-bold text-primary\">
            <i class=\"fas fa-video\"></i> Bienvenue sur Filmoteca
        </h1>
        <p class=\"lead text-muted\">
            Gérez votre collection de films avec une interface simple et intuitive.
        </p>
        <a href=\"/film/list\" class=\"btn btn-primary btn-lg\">
            <i class=\"fas fa-film\"></i> Voir les films
        </a>
    </section>

    <!-- Features Section -->
    <section class=\"row text-center mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-list-ul\"></i> Liste des films
                    </h5>
                    <p class=\"card-text\">
                        Consultez et explorez tous les films ajoutés à votre collection.
                    </p>
                    <a href=\"/film/list\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-arrow-right\"></i> Accéder
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-plus\"></i> Ajouter un film
                    </h5>
                    <p class=\"card-text\">
                        Ajoutez facilement de nouveaux films à votre collection.
                    </p>
                    <a href=\"/film/create\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-plus-circle\"></i> Ajouter
                    </a>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-cogs\"></i> Organisation intuitive
                    </h5>
                    <p class=\"card-text\">
                        Gérez vos films avec des outils simples et efficaces.
                    </p>
                    <a href=\"/film/list\" class=\"btn btn-outline-primary\">
                        <i class=\"fas fa-cog\"></i> Commencer
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class=\"text-center py-5\">
        
        <h2 class=\"fw-bold\">
            <i class=\"fas fa-rocket\"></i> Commencez dès maintenant !
        </h2>
        <p class=\"text-muted\">Ajoutez vos premiers films pour profiter de toutes les fonctionnalités.</p>
        <a href=\"/film/create\" class=\"btn btn-success btn-lg\">
            <i class=\"fas fa-plus-circle\"></i> Ajouter un film
        </a>
    </section>
</div>
{% endblock %}", "homepage.html.twig", "/var/www/filmoteca/src/Views/homepage.html.twig");
    }
}
