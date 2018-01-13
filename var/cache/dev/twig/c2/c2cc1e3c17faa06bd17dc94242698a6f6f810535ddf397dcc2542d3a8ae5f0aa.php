<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_e88b04838d69e2d367efc02b601cb7101188bb601464ea66305338477c9f0b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88b04838d69e2d367efc02b601cb7101188bb601464ea66305338477c9f0b7e->enter($__internal_e88b04838d69e2d367efc02b601cb7101188bb601464ea66305338477c9f0b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_162c0b82ee4f47fcdfe0a2fc46ac4e91cfa7824450c6885b583e934b4303cc23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162c0b82ee4f47fcdfe0a2fc46ac4e91cfa7824450c6885b583e934b4303cc23->enter($__internal_162c0b82ee4f47fcdfe0a2fc46ac4e91cfa7824450c6885b583e934b4303cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e88b04838d69e2d367efc02b601cb7101188bb601464ea66305338477c9f0b7e->leave($__internal_e88b04838d69e2d367efc02b601cb7101188bb601464ea66305338477c9f0b7e_prof);

        
        $__internal_162c0b82ee4f47fcdfe0a2fc46ac4e91cfa7824450c6885b583e934b4303cc23->leave($__internal_162c0b82ee4f47fcdfe0a2fc46ac4e91cfa7824450c6885b583e934b4303cc23_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7e51a51a2a8a6754d68568e5474e543c8091dd1dffbeb68c08e0e77a542c598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e51a51a2a8a6754d68568e5474e543c8091dd1dffbeb68c08e0e77a542c598->enter($__internal_e7e51a51a2a8a6754d68568e5474e543c8091dd1dffbeb68c08e0e77a542c598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0f75f522d0ce11777542e5de553a1df71d84d28b6f7f222ee40467007cbb7b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f75f522d0ce11777542e5de553a1df71d84d28b6f7f222ee40467007cbb7b9d->enter($__internal_0f75f522d0ce11777542e5de553a1df71d84d28b6f7f222ee40467007cbb7b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0f75f522d0ce11777542e5de553a1df71d84d28b6f7f222ee40467007cbb7b9d->leave($__internal_0f75f522d0ce11777542e5de553a1df71d84d28b6f7f222ee40467007cbb7b9d_prof);

        
        $__internal_e7e51a51a2a8a6754d68568e5474e543c8091dd1dffbeb68c08e0e77a542c598->leave($__internal_e7e51a51a2a8a6754d68568e5474e543c8091dd1dffbeb68c08e0e77a542c598_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d707a474e852deafb0db5b63cdf483f12ed7446de86d05eaaadd4baed08fc83d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d707a474e852deafb0db5b63cdf483f12ed7446de86d05eaaadd4baed08fc83d->enter($__internal_d707a474e852deafb0db5b63cdf483f12ed7446de86d05eaaadd4baed08fc83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d83716dafb76829c286847488d12cbf3fb5c08cffbf991448811ec26215fddb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d83716dafb76829c286847488d12cbf3fb5c08cffbf991448811ec26215fddb0->enter($__internal_d83716dafb76829c286847488d12cbf3fb5c08cffbf991448811ec26215fddb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d83716dafb76829c286847488d12cbf3fb5c08cffbf991448811ec26215fddb0->leave($__internal_d83716dafb76829c286847488d12cbf3fb5c08cffbf991448811ec26215fddb0_prof);

        
        $__internal_d707a474e852deafb0db5b63cdf483f12ed7446de86d05eaaadd4baed08fc83d->leave($__internal_d707a474e852deafb0db5b63cdf483f12ed7446de86d05eaaadd4baed08fc83d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9dd6302abcd91e845adb3b51da1f36aa79e97170ccadf932dafabbe31098b5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd6302abcd91e845adb3b51da1f36aa79e97170ccadf932dafabbe31098b5d5->enter($__internal_9dd6302abcd91e845adb3b51da1f36aa79e97170ccadf932dafabbe31098b5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ac614dae63d0041e3cfb9086afa2d928f244d93d896380e35082d18c94ceeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac614dae63d0041e3cfb9086afa2d928f244d93d896380e35082d18c94ceeb3->enter($__internal_1ac614dae63d0041e3cfb9086afa2d928f244d93d896380e35082d18c94ceeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1ac614dae63d0041e3cfb9086afa2d928f244d93d896380e35082d18c94ceeb3->leave($__internal_1ac614dae63d0041e3cfb9086afa2d928f244d93d896380e35082d18c94ceeb3_prof);

        
        $__internal_9dd6302abcd91e845adb3b51da1f36aa79e97170ccadf932dafabbe31098b5d5->leave($__internal_9dd6302abcd91e845adb3b51da1f36aa79e97170ccadf932dafabbe31098b5d5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/remi/Symfony/CRMSymfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
