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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Filmoteca</title>
    <link rel=\"stylesheet\" href=\"css.css\" />
</head>

<body>
    <header>
        <h1>Filmoteca</h1>
    </header>
    <div class=\"menu\">
        <a href=\"homepage.html\">Accueil</a>
        <a href=\"films.php\">Liste des films</a>
        <a href=\"add.php\">Ajouter un film</a>
    </div>
    <section>
        <p>Ce site est ma collection de films.</p>
    </section>
    <footer>
        <p>&copy;Câm-Vi Nguyen</p>
    </footer>
</body>

</html>";
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
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Filmoteca</title>
    <link rel=\"stylesheet\" href=\"css.css\" />
</head>

<body>
    <header>
        <h1>Filmoteca</h1>
    </header>
    <div class=\"menu\">
        <a href=\"homepage.html\">Accueil</a>
        <a href=\"films.php\">Liste des films</a>
        <a href=\"add.php\">Ajouter un film</a>
    </div>
    <section>
        <p>Ce site est ma collection de films.</p>
    </section>
    <footer>
        <p>&copy;Câm-Vi Nguyen</p>
    </footer>
</body>

</html>", "homepage.html.twig", "/var/www/filmoteca/src/Views/homepage.html.twig");
    }
}
