<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_001ec319e56b05cdf9c9542561587dc367de6b139dec9406243e318a64bdc777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8400adcaa273af156122e3d643beffa684b270f82d298550f7d887ba1ca9fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8400adcaa273af156122e3d643beffa684b270f82d298550f7d887ba1ca9fd3->enter($__internal_b8400adcaa273af156122e3d643beffa684b270f82d298550f7d887ba1ca9fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_df2189387e7c27de34a199d6c3b80421924b629bbc8c2c17f67585caf3b2f510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df2189387e7c27de34a199d6c3b80421924b629bbc8c2c17f67585caf3b2f510->enter($__internal_df2189387e7c27de34a199d6c3b80421924b629bbc8c2c17f67585caf3b2f510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8400adcaa273af156122e3d643beffa684b270f82d298550f7d887ba1ca9fd3->leave($__internal_b8400adcaa273af156122e3d643beffa684b270f82d298550f7d887ba1ca9fd3_prof);

        
        $__internal_df2189387e7c27de34a199d6c3b80421924b629bbc8c2c17f67585caf3b2f510->leave($__internal_df2189387e7c27de34a199d6c3b80421924b629bbc8c2c17f67585caf3b2f510_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_307b9416952b2d454b5378f5f3f4a526460a2496b3278cdf9bec05dbc2447e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_307b9416952b2d454b5378f5f3f4a526460a2496b3278cdf9bec05dbc2447e7e->enter($__internal_307b9416952b2d454b5378f5f3f4a526460a2496b3278cdf9bec05dbc2447e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1092663f127ef1a52365d249280192e11e44f4d936b9e3678dc8b62966e5494b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1092663f127ef1a52365d249280192e11e44f4d936b9e3678dc8b62966e5494b->enter($__internal_1092663f127ef1a52365d249280192e11e44f4d936b9e3678dc8b62966e5494b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1092663f127ef1a52365d249280192e11e44f4d936b9e3678dc8b62966e5494b->leave($__internal_1092663f127ef1a52365d249280192e11e44f4d936b9e3678dc8b62966e5494b_prof);

        
        $__internal_307b9416952b2d454b5378f5f3f4a526460a2496b3278cdf9bec05dbc2447e7e->leave($__internal_307b9416952b2d454b5378f5f3f4a526460a2496b3278cdf9bec05dbc2447e7e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/remi/Symfony/CRMSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
