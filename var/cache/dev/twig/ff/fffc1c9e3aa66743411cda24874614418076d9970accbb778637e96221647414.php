<?php

/* connexion/index.html.twig */
class __TwigTemplate_5d05087d310ac6cac3848d2622ac2cce52133ff3471308641f5ce2a40a46c29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("../base.html.twig", "connexion/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "../base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa309dc241f46633eaf0595527ca4ad271d0c7d63a5d48f81ffe17386daa47ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa309dc241f46633eaf0595527ca4ad271d0c7d63a5d48f81ffe17386daa47ec->enter($__internal_aa309dc241f46633eaf0595527ca4ad271d0c7d63a5d48f81ffe17386daa47ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

        $__internal_622db2a9b3af346efd260c8ba80c8ab1f2827432240502c0c6fb8dd2abc2edef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622db2a9b3af346efd260c8ba80c8ab1f2827432240502c0c6fb8dd2abc2edef->enter($__internal_622db2a9b3af346efd260c8ba80c8ab1f2827432240502c0c6fb8dd2abc2edef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "connexion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa309dc241f46633eaf0595527ca4ad271d0c7d63a5d48f81ffe17386daa47ec->leave($__internal_aa309dc241f46633eaf0595527ca4ad271d0c7d63a5d48f81ffe17386daa47ec_prof);

        
        $__internal_622db2a9b3af346efd260c8ba80c8ab1f2827432240502c0c6fb8dd2abc2edef->leave($__internal_622db2a9b3af346efd260c8ba80c8ab1f2827432240502c0c6fb8dd2abc2edef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a50ddc54f0a6910c8096a31b2d3c8a9a7f31fca104bf054b53da847a32f23f67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a50ddc54f0a6910c8096a31b2d3c8a9a7f31fca104bf054b53da847a32f23f67->enter($__internal_a50ddc54f0a6910c8096a31b2d3c8a9a7f31fca104bf054b53da847a32f23f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1dfd73974c5c61baf0b628c39332f85325021dc5c1ddd093fb834e7313357607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dfd73974c5c61baf0b628c39332f85325021dc5c1ddd093fb834e7313357607->enter($__internal_1dfd73974c5c61baf0b628c39332f85325021dc5c1ddd093fb834e7313357607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_1dfd73974c5c61baf0b628c39332f85325021dc5c1ddd093fb834e7313357607->leave($__internal_1dfd73974c5c61baf0b628c39332f85325021dc5c1ddd093fb834e7313357607_prof);

        
        $__internal_a50ddc54f0a6910c8096a31b2d3c8a9a7f31fca104bf054b53da847a32f23f67->leave($__internal_a50ddc54f0a6910c8096a31b2d3c8a9a7f31fca104bf054b53da847a32f23f67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f7c84663e4c23d7d5a67edf5d85b56c595de60986aa58233cdf54f854bde186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7c84663e4c23d7d5a67edf5d85b56c595de60986aa58233cdf54f854bde186->enter($__internal_3f7c84663e4c23d7d5a67edf5d85b56c595de60986aa58233cdf54f854bde186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_691c1d934ad110eabaa94a89a861f1ce3477c8d8c58f9720a2f694329e6ecc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691c1d934ad110eabaa94a89a861f1ce3477c8d8c58f9720a2f694329e6ecc77->enter($__internal_691c1d934ad110eabaa94a89a861f1ce3477c8d8c58f9720a2f694329e6ecc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <h1>Bienvenue sur FormaCol</h1>
            </div>
        </div>
        <div class=\"row button_margin-bottom\">
            <div class=\"col-sm-6 text-justify\">

                <p class=\"titre_context\"><span class=\"glyphicon glyphicon-question-sign\"></span> Qu'est-ce-que Formacol ?</p>

                <p class=\"desc_context\">FormaCol est une application web ayant pour finalité le suivi des compétences de
                    chaque stagiaire.</p>

                <p class=\"desc_context\">Chaque stagiaire inscrit a la possibilité de créer divers contextes et de leur
                    associer des illustrations (documents, images ...) et compétences. Ils ont, également, la
                    possibilité de les modifiers à tout moment et de les supprimer et cela en toute simplicité !</p>

                <p class=\"desc_context\">Ainsi, ces contextes sont alors associé au portefeuille du stagiaire et sont
                    consultable par les entreprises et les autres personnes extérieur grâce à l'IPC du portefeuille.</p>

            </div>

            <div class=\"col-sm-6 text-justify\">

                <p class=\"titre_context\"><span class=\"glyphicon glyphicon-question-sign\"></span> Comment voir les contextes d'un portefeuille ?</p>
                <p class=\"desc_context\">Pour voir les contextes associés à un portefeuille, il vous suffit de cliquer sur \"Plus d'informations\" sur le contexte souhaité.</p>

            </div>
        </div>

        <div class=\"row button_margin-bottom\">
            <div class=\"col-sm-6 text-justify\">
                <p class=\"titre_context\"><span class=\"glyphicon glyphicon-question-sign\"></span> Comment chercher un portefeuille ?</p>

                <p class=\"desc_context\">Pour chercher un portefeuille il vous suffit d'aller dans \"Rechercher un
                    Portefeuille et de saisir l'IPC du portefeuille en question.</p>
            </div>

            <div class=\"col-sm-6 text-justify\">
                <p class=\"titre_context\"><span class=\"glyphicon glyphicon-question-sign\"></span> Comment gérer les contextes dans un portefeuille ?</p>

                <p class=\"desc_context\">Il vous suffit d'aller dans \"Espace Personnel\" et de vous connecter si cela n'est pas fait. De là vous pourrez ajouter des contextes via le bouton \"Ajouter un contexte\"; Modifier et supprimer un contexte précis grâce, respectivement, aux boutons \"Modifier\" et \"Supprimer\".</p>
            </div>
        </div>

    </div>

";
        
        $__internal_691c1d934ad110eabaa94a89a861f1ce3477c8d8c58f9720a2f694329e6ecc77->leave($__internal_691c1d934ad110eabaa94a89a861f1ce3477c8d8c58f9720a2f694329e6ecc77_prof);

        
        $__internal_3f7c84663e4c23d7d5a67edf5d85b56c595de60986aa58233cdf54f854bde186->leave($__internal_3f7c84663e4c23d7d5a67edf5d85b56c595de60986aa58233cdf54f854bde186_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1e10469340326be72df9af9310408f6941c7d85cfd7939fd495a456625b55bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e10469340326be72df9af9310408f6941c7d85cfd7939fd495a456625b55bd3->enter($__internal_1e10469340326be72df9af9310408f6941c7d85cfd7939fd495a456625b55bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ce6c53f183effd853f194ebe2b328d3f28cd40211a3a31046408797a8013cb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6c53f183effd853f194ebe2b328d3f28cd40211a3a31046408797a8013cb15->enter($__internal_ce6c53f183effd853f194ebe2b328d3f28cd40211a3a31046408797a8013cb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ce6c53f183effd853f194ebe2b328d3f28cd40211a3a31046408797a8013cb15->leave($__internal_ce6c53f183effd853f194ebe2b328d3f28cd40211a3a31046408797a8013cb15_prof);

        
        $__internal_1e10469340326be72df9af9310408f6941c7d85cfd7939fd495a456625b55bd3->leave($__internal_1e10469340326be72df9af9310408f6941c7d85cfd7939fd495a456625b55bd3_prof);

    }

    public function getTemplateName()
    {
        return "connexion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 57,  127 => 56,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '../base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 text-center\">
                <h1>Bienvenue sur FormaCol</h1>
            </div>
        </div>
        <div class=\"row button_margin-bottom\">
            <div class=\"col-sm-6 text-justify\">

                <p class=\"titre_context\"><span class=\"glyphicon glyphicon-question-sign\"></span> Qu'est-ce-que Formacol ?</p>

                <p class=\"desc_context\">FormaCol est une application web ayant pour finalité le suivi des compétences de
                    chaque stagiaire.</p>

                <p class=\"desc_context\">Chaque stagiaire inscrit a la possibilité de créer divers contextes et de leur
                    associer des illustrations (documents, images ...) et compétences. Ils ont, également, la
                    possibilité de les modifiers à tout moment et de les supprimer et cela en toute simplicité !</p>

                <p class=\"desc_context\">Ainsi, ces contextes sont alors associé au portefeuille du stagiaire et sont
                    consultable par les entreprises et les autres personnes extérieur grâce à l'IPC du portefeuille.</p>

            </div>

            <div class=\"col-sm-6 text-justify\">

                <p class=\"titre_context\"><span class=\"glyphicon glyphicon-question-sign\"></span> Comment voir les contextes d'un portefeuille ?</p>
                <p class=\"desc_context\">Pour voir les contextes associés à un portefeuille, il vous suffit de cliquer sur \"Plus d'informations\" sur le contexte souhaité.</p>

            </div>
        </div>

        <div class=\"row button_margin-bottom\">
            <div class=\"col-sm-6 text-justify\">
                <p class=\"titre_context\"><span class=\"glyphicon glyphicon-question-sign\"></span> Comment chercher un portefeuille ?</p>

                <p class=\"desc_context\">Pour chercher un portefeuille il vous suffit d'aller dans \"Rechercher un
                    Portefeuille et de saisir l'IPC du portefeuille en question.</p>
            </div>

            <div class=\"col-sm-6 text-justify\">
                <p class=\"titre_context\"><span class=\"glyphicon glyphicon-question-sign\"></span> Comment gérer les contextes dans un portefeuille ?</p>

                <p class=\"desc_context\">Il vous suffit d'aller dans \"Espace Personnel\" et de vous connecter si cela n'est pas fait. De là vous pourrez ajouter des contextes via le bouton \"Ajouter un contexte\"; Modifier et supprimer un contexte précis grâce, respectivement, aux boutons \"Modifier\" et \"Supprimer\".</p>
            </div>
        </div>

    </div>

{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}", "connexion/index.html.twig", "/home/remi/Symfony/CRMSymfony/app/Resources/views/connexion/index.html.twig");
    }
}
