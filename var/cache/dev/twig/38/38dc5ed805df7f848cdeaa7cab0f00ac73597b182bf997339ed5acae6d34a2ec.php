<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a8fe31633b9cd1e0d8dfdf67957bf2215e880f4eb9ac23dc01494eb68caecbb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be4d0a6c3656c90ba38d0cdb243de85003fc91495f6b7c944c04a1d7e06975aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4d0a6c3656c90ba38d0cdb243de85003fc91495f6b7c944c04a1d7e06975aa->enter($__internal_be4d0a6c3656c90ba38d0cdb243de85003fc91495f6b7c944c04a1d7e06975aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_04b8d3c11b8bc800de8891cbd19895bbaba0d9c0c607d1473145867deccd64d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b8d3c11b8bc800de8891cbd19895bbaba0d9c0c607d1473145867deccd64d5->enter($__internal_04b8d3c11b8bc800de8891cbd19895bbaba0d9c0c607d1473145867deccd64d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_be4d0a6c3656c90ba38d0cdb243de85003fc91495f6b7c944c04a1d7e06975aa->leave($__internal_be4d0a6c3656c90ba38d0cdb243de85003fc91495f6b7c944c04a1d7e06975aa_prof);

        
        $__internal_04b8d3c11b8bc800de8891cbd19895bbaba0d9c0c607d1473145867deccd64d5->leave($__internal_04b8d3c11b8bc800de8891cbd19895bbaba0d9c0c607d1473145867deccd64d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/remi/Symfony/CRMSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
