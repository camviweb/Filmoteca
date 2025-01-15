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

/* fragments/navigation.html.twig */
class __TwigTemplate_19b892676a2f37516c46ec9390c3f382 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<div class=\"filmoteca-logo\">
\t\t\t\t<div class=\"film-strip\">
\t\t\t\t\t<div class=\"strip-hole\"></div>
\t\t\t\t\t<div class=\"strip-hole\"></div>
\t\t\t\t\t<div class=\"strip-hole\"></div>
\t\t\t\t\t<div class=\"strip-hole\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"logo-text\">Filmoteca</div>
\t\t\t</div>
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/film/list\">
\t\t\t\t\t\t<i class=\"fas fa-list\"></i>
\t\t\t\t\t\tListe des films
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/film/create\">
\t\t\t\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t\t\t\t\tAjouter un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "fragments/navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand\" href=\"/\">
\t\t\t<div class=\"filmoteca-logo\">
\t\t\t\t<div class=\"film-strip\">
\t\t\t\t\t<div class=\"strip-hole\"></div>
\t\t\t\t\t<div class=\"strip-hole\"></div>
\t\t\t\t\t<div class=\"strip-hole\"></div>
\t\t\t\t\t<div class=\"strip-hole\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"logo-text\">Filmoteca</div>
\t\t\t</div>
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNav\">
\t\t\t<ul class=\"navbar-nav ms-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/film/list\">
\t\t\t\t\t\t<i class=\"fas fa-list\"></i>
\t\t\t\t\t\tListe des films
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"/film/create\">
\t\t\t\t\t\t<i class=\"fas fa-plus-circle\"></i>
\t\t\t\t\t\tAjouter un film
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "fragments/navigation.html.twig", "/var/www/filmoteca/src/Views/fragments/navigation.html.twig");
    }
}
