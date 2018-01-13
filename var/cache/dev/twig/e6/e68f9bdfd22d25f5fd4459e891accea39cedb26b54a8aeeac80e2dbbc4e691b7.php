<?php

/* base.html.twig */
class __TwigTemplate_3698a5049a95d96cd35abee4dbe42043aec1c3ce4b593cfad74f69e93521450f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a71e2ac398b47c8dffecde076986549ef43b852799e18628cfd359b9ee9765b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a71e2ac398b47c8dffecde076986549ef43b852799e18628cfd359b9ee9765b->enter($__internal_6a71e2ac398b47c8dffecde076986549ef43b852799e18628cfd359b9ee9765b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0d38da688210775d2325644064ad8eae66bac8d803c4d333239d6894588fa4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d38da688210775d2325644064ad8eae66bac8d803c4d333239d6894588fa4a6->enter($__internal_0d38da688210775d2325644064ad8eae66bac8d803c4d333239d6894588fa4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
</html>
";
        
        $__internal_6a71e2ac398b47c8dffecde076986549ef43b852799e18628cfd359b9ee9765b->leave($__internal_6a71e2ac398b47c8dffecde076986549ef43b852799e18628cfd359b9ee9765b_prof);

        
        $__internal_0d38da688210775d2325644064ad8eae66bac8d803c4d333239d6894588fa4a6->leave($__internal_0d38da688210775d2325644064ad8eae66bac8d803c4d333239d6894588fa4a6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bcc3f85ab54618c48503a6306983ffb8cd1b0eae0e52da02f8a2ca70a1502a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bcc3f85ab54618c48503a6306983ffb8cd1b0eae0e52da02f8a2ca70a1502a5->enter($__internal_2bcc3f85ab54618c48503a6306983ffb8cd1b0eae0e52da02f8a2ca70a1502a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e5b646b56030da272dac32cc53156fab53d1ae9321e34945084609cb21545f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5b646b56030da272dac32cc53156fab53d1ae9321e34945084609cb21545f2->enter($__internal_8e5b646b56030da272dac32cc53156fab53d1ae9321e34945084609cb21545f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8e5b646b56030da272dac32cc53156fab53d1ae9321e34945084609cb21545f2->leave($__internal_8e5b646b56030da272dac32cc53156fab53d1ae9321e34945084609cb21545f2_prof);

        
        $__internal_2bcc3f85ab54618c48503a6306983ffb8cd1b0eae0e52da02f8a2ca70a1502a5->leave($__internal_2bcc3f85ab54618c48503a6306983ffb8cd1b0eae0e52da02f8a2ca70a1502a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a73717453fcfca292cb2395f36ea52c3b9a316b99b0b0b68b77f5ec802a63c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73717453fcfca292cb2395f36ea52c3b9a316b99b0b0b68b77f5ec802a63c2b->enter($__internal_a73717453fcfca292cb2395f36ea52c3b9a316b99b0b0b68b77f5ec802a63c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_59ffcb2769b213210e6a7f97fb1e1d6757107908f7c5c471a96934184ffb0cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ffcb2769b213210e6a7f97fb1e1d6757107908f7c5c471a96934184ffb0cda->enter($__internal_59ffcb2769b213210e6a7f97fb1e1d6757107908f7c5c471a96934184ffb0cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_59ffcb2769b213210e6a7f97fb1e1d6757107908f7c5c471a96934184ffb0cda->leave($__internal_59ffcb2769b213210e6a7f97fb1e1d6757107908f7c5c471a96934184ffb0cda_prof);

        
        $__internal_a73717453fcfca292cb2395f36ea52c3b9a316b99b0b0b68b77f5ec802a63c2b->leave($__internal_a73717453fcfca292cb2395f36ea52c3b9a316b99b0b0b68b77f5ec802a63c2b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1d5f6761f957b0bb10e97408a979d373e2b7cc128cf4d50efd3b8ae27daeb09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d5f6761f957b0bb10e97408a979d373e2b7cc128cf4d50efd3b8ae27daeb09->enter($__internal_f1d5f6761f957b0bb10e97408a979d373e2b7cc128cf4d50efd3b8ae27daeb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efd2084052b6b559f568fb1218a7412bd46449d39e0d04589fd3d26de3446cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd2084052b6b559f568fb1218a7412bd46449d39e0d04589fd3d26de3446cfd->enter($__internal_efd2084052b6b559f568fb1218a7412bd46449d39e0d04589fd3d26de3446cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_efd2084052b6b559f568fb1218a7412bd46449d39e0d04589fd3d26de3446cfd->leave($__internal_efd2084052b6b559f568fb1218a7412bd46449d39e0d04589fd3d26de3446cfd_prof);

        
        $__internal_f1d5f6761f957b0bb10e97408a979d373e2b7cc128cf4d50efd3b8ae27daeb09->leave($__internal_f1d5f6761f957b0bb10e97408a979d373e2b7cc128cf4d50efd3b8ae27daeb09_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_52dc028c970723b1347087e3ee3005b3dc8cb672d3f3e2101fd4820ad0b11756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52dc028c970723b1347087e3ee3005b3dc8cb672d3f3e2101fd4820ad0b11756->enter($__internal_52dc028c970723b1347087e3ee3005b3dc8cb672d3f3e2101fd4820ad0b11756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_846a6c95d4c816015aaa7dfcfaf569439742b11a2734d2292bc940f9645e0481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846a6c95d4c816015aaa7dfcfaf569439742b11a2734d2292bc940f9645e0481->enter($__internal_846a6c95d4c816015aaa7dfcfaf569439742b11a2734d2292bc940f9645e0481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_846a6c95d4c816015aaa7dfcfaf569439742b11a2734d2292bc940f9645e0481->leave($__internal_846a6c95d4c816015aaa7dfcfaf569439742b11a2734d2292bc940f9645e0481_prof);

        
        $__internal_52dc028c970723b1347087e3ee3005b3dc8cb672d3f3e2101fd4820ad0b11756->leave($__internal_52dc028c970723b1347087e3ee3005b3dc8cb672d3f3e2101fd4820ad0b11756_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 12,  104 => 11,  87 => 6,  69 => 5,  54 => 13,  51 => 12,  49 => 11,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
    <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>
</html>
", "base.html.twig", "/home/remi/Symfony/CRMSymfony/app/Resources/views/base.html.twig");
    }
}
