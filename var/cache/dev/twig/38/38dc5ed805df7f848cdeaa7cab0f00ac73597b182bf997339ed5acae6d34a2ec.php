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
        $__internal_e06222c6e0b1c134e9a3139e5d91d4f243144007a6193cf189ed6a70768b1f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06222c6e0b1c134e9a3139e5d91d4f243144007a6193cf189ed6a70768b1f90->enter($__internal_e06222c6e0b1c134e9a3139e5d91d4f243144007a6193cf189ed6a70768b1f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_054bde23820dfe12c4aa3f1d1ae37294437c97167a263c88f7fe51cdfb706459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054bde23820dfe12c4aa3f1d1ae37294437c97167a263c88f7fe51cdfb706459->enter($__internal_054bde23820dfe12c4aa3f1d1ae37294437c97167a263c88f7fe51cdfb706459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_e06222c6e0b1c134e9a3139e5d91d4f243144007a6193cf189ed6a70768b1f90->leave($__internal_e06222c6e0b1c134e9a3139e5d91d4f243144007a6193cf189ed6a70768b1f90_prof);

        
        $__internal_054bde23820dfe12c4aa3f1d1ae37294437c97167a263c88f7fe51cdfb706459->leave($__internal_054bde23820dfe12c4aa3f1d1ae37294437c97167a263c88f7fe51cdfb706459_prof);

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
