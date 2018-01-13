<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5b1103dacede655dac7da4a965d658e961e1177eb3faab93ae0bac831b87982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b1103dacede655dac7da4a965d658e961e1177eb3faab93ae0bac831b87982->enter($__internal_b5b1103dacede655dac7da4a965d658e961e1177eb3faab93ae0bac831b87982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b79b2291e916ef201d9a37548c2b8190d8c393d95e410801f48ed5d139e272ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79b2291e916ef201d9a37548c2b8190d8c393d95e410801f48ed5d139e272ca->enter($__internal_b79b2291e916ef201d9a37548c2b8190d8c393d95e410801f48ed5d139e272ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b1103dacede655dac7da4a965d658e961e1177eb3faab93ae0bac831b87982->leave($__internal_b5b1103dacede655dac7da4a965d658e961e1177eb3faab93ae0bac831b87982_prof);

        
        $__internal_b79b2291e916ef201d9a37548c2b8190d8c393d95e410801f48ed5d139e272ca->leave($__internal_b79b2291e916ef201d9a37548c2b8190d8c393d95e410801f48ed5d139e272ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0fdebe0ee47643821406b6242c4c5ac0a45b96047552eab803f8e68a6537d0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdebe0ee47643821406b6242c4c5ac0a45b96047552eab803f8e68a6537d0c5->enter($__internal_0fdebe0ee47643821406b6242c4c5ac0a45b96047552eab803f8e68a6537d0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_da8bda674139d53b0fac55fd84613a25a601bf9967445d3c4057326c6cc4b044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8bda674139d53b0fac55fd84613a25a601bf9967445d3c4057326c6cc4b044->enter($__internal_da8bda674139d53b0fac55fd84613a25a601bf9967445d3c4057326c6cc4b044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_da8bda674139d53b0fac55fd84613a25a601bf9967445d3c4057326c6cc4b044->leave($__internal_da8bda674139d53b0fac55fd84613a25a601bf9967445d3c4057326c6cc4b044_prof);

        
        $__internal_0fdebe0ee47643821406b6242c4c5ac0a45b96047552eab803f8e68a6537d0c5->leave($__internal_0fdebe0ee47643821406b6242c4c5ac0a45b96047552eab803f8e68a6537d0c5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_feb02883ad1d31c6244b13b35150c7ece51f585885e86d42bfca274e92bfc3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb02883ad1d31c6244b13b35150c7ece51f585885e86d42bfca274e92bfc3ba->enter($__internal_feb02883ad1d31c6244b13b35150c7ece51f585885e86d42bfca274e92bfc3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_020df6f9242a4797d384ce6f0fab7bbff6088ab48b4161507c7a2d26ba24b28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020df6f9242a4797d384ce6f0fab7bbff6088ab48b4161507c7a2d26ba24b28b->enter($__internal_020df6f9242a4797d384ce6f0fab7bbff6088ab48b4161507c7a2d26ba24b28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_020df6f9242a4797d384ce6f0fab7bbff6088ab48b4161507c7a2d26ba24b28b->leave($__internal_020df6f9242a4797d384ce6f0fab7bbff6088ab48b4161507c7a2d26ba24b28b_prof);

        
        $__internal_feb02883ad1d31c6244b13b35150c7ece51f585885e86d42bfca274e92bfc3ba->leave($__internal_feb02883ad1d31c6244b13b35150c7ece51f585885e86d42bfca274e92bfc3ba_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_347d160925ce8313e2d5c59eb668cb7d79fd18508dd050e014bb6692d6fa1a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347d160925ce8313e2d5c59eb668cb7d79fd18508dd050e014bb6692d6fa1a1d->enter($__internal_347d160925ce8313e2d5c59eb668cb7d79fd18508dd050e014bb6692d6fa1a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e40e7c2f329f59ab665460e46415e45dc139c0d4dbc358bc6eb20ce5538f9c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e40e7c2f329f59ab665460e46415e45dc139c0d4dbc358bc6eb20ce5538f9c92->enter($__internal_e40e7c2f329f59ab665460e46415e45dc139c0d4dbc358bc6eb20ce5538f9c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_e40e7c2f329f59ab665460e46415e45dc139c0d4dbc358bc6eb20ce5538f9c92->leave($__internal_e40e7c2f329f59ab665460e46415e45dc139c0d4dbc358bc6eb20ce5538f9c92_prof);

        
        $__internal_347d160925ce8313e2d5c59eb668cb7d79fd18508dd050e014bb6692d6fa1a1d->leave($__internal_347d160925ce8313e2d5c59eb668cb7d79fd18508dd050e014bb6692d6fa1a1d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/remi/Symfony/CRMSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
