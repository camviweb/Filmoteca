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

/* base.html.twig */
class __TwigTemplate_f096103b3249f65740b8e77dbe4bcfd0 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
    <title>Filmoteca - ";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 10
        yield "</head>
<body>
    <header class=\"bg-dark text-white py-3\">
        <div class=\"container\">
            ";
        // line 14
        yield from $this->loadTemplate("fragments/navigation.html.twig", "base.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "        </div>
    </header>

    <main class=\"container my-4\">
        ";
        // line 19
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 20
        yield "    </main>

    ";
        // line 22
        yield from $this->loadTemplate("fragments/footer.html.twig", "base.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "
    <script src=\"https://kit.fontawesome.com/1497a6bbb1.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 27
        yield "</body>
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  127 => 26,  117 => 19,  107 => 9,  97 => 6,  90 => 27,  88 => 26,  83 => 23,  81 => 22,  77 => 20,  75 => 19,  69 => 15,  67 => 14,  61 => 10,  59 => 9,  53 => 6,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Filmoteca - {% block title %}{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
    <link href=\"/css/style.css\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
</head>
<body>
    <header class=\"bg-dark text-white py-3\">
        <div class=\"container\">
            {% include 'fragments/navigation.html.twig' %}
        </div>
    </header>

    <main class=\"container my-4\">
        {% block content %}{% endblock %}
    </main>

    {% include 'fragments/footer.html.twig' %}

    <script src=\"https://kit.fontawesome.com/1497a6bbb1.js\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz\" crossorigin=\"anonymous\"></script>
    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/filmoteca/src/Views/base.html.twig");
    }
}
