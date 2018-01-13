<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42ad1cda4129fb7dd270a17c73e9d777ce83a5593fdd83dab77160909243549d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17bc89ebc9b07d1195399bd430d1d36594d14263de8980e66d670cc0dcf913a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17bc89ebc9b07d1195399bd430d1d36594d14263de8980e66d670cc0dcf913a5->enter($__internal_17bc89ebc9b07d1195399bd430d1d36594d14263de8980e66d670cc0dcf913a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f4b3215b037494012269025adcf0f0c6f9c15cae8a9e1c94de99d8240118119f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b3215b037494012269025adcf0f0c6f9c15cae8a9e1c94de99d8240118119f->enter($__internal_f4b3215b037494012269025adcf0f0c6f9c15cae8a9e1c94de99d8240118119f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_17bc89ebc9b07d1195399bd430d1d36594d14263de8980e66d670cc0dcf913a5->leave($__internal_17bc89ebc9b07d1195399bd430d1d36594d14263de8980e66d670cc0dcf913a5_prof);

        
        $__internal_f4b3215b037494012269025adcf0f0c6f9c15cae8a9e1c94de99d8240118119f->leave($__internal_f4b3215b037494012269025adcf0f0c6f9c15cae8a9e1c94de99d8240118119f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c60c5ac88aec244083d59718e5f38ef16947ae1b5bcf32c6129e845ca57af8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60c5ac88aec244083d59718e5f38ef16947ae1b5bcf32c6129e845ca57af8f7->enter($__internal_c60c5ac88aec244083d59718e5f38ef16947ae1b5bcf32c6129e845ca57af8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bea59ea91f2273378500dcef80278c1aa78664b96efd349af4bb73beb52e99e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea59ea91f2273378500dcef80278c1aa78664b96efd349af4bb73beb52e99e3->enter($__internal_bea59ea91f2273378500dcef80278c1aa78664b96efd349af4bb73beb52e99e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bea59ea91f2273378500dcef80278c1aa78664b96efd349af4bb73beb52e99e3->leave($__internal_bea59ea91f2273378500dcef80278c1aa78664b96efd349af4bb73beb52e99e3_prof);

        
        $__internal_c60c5ac88aec244083d59718e5f38ef16947ae1b5bcf32c6129e845ca57af8f7->leave($__internal_c60c5ac88aec244083d59718e5f38ef16947ae1b5bcf32c6129e845ca57af8f7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cd5d7a3ae533aade76a2f089013bc966d592a81a5129f75be903b744403c2233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd5d7a3ae533aade76a2f089013bc966d592a81a5129f75be903b744403c2233->enter($__internal_cd5d7a3ae533aade76a2f089013bc966d592a81a5129f75be903b744403c2233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_86315fe76cc3e3e5e1bb0d143cc5f22e5a83aed07386e37302e0b36d4d75e6df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86315fe76cc3e3e5e1bb0d143cc5f22e5a83aed07386e37302e0b36d4d75e6df->enter($__internal_86315fe76cc3e3e5e1bb0d143cc5f22e5a83aed07386e37302e0b36d4d75e6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_86315fe76cc3e3e5e1bb0d143cc5f22e5a83aed07386e37302e0b36d4d75e6df->leave($__internal_86315fe76cc3e3e5e1bb0d143cc5f22e5a83aed07386e37302e0b36d4d75e6df_prof);

        
        $__internal_cd5d7a3ae533aade76a2f089013bc966d592a81a5129f75be903b744403c2233->leave($__internal_cd5d7a3ae533aade76a2f089013bc966d592a81a5129f75be903b744403c2233_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_846036de27a12bd91dfbf1239298aa1f888c8e1bd6afdc04a51c71c20f68a1e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846036de27a12bd91dfbf1239298aa1f888c8e1bd6afdc04a51c71c20f68a1e8->enter($__internal_846036de27a12bd91dfbf1239298aa1f888c8e1bd6afdc04a51c71c20f68a1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d977a24845460304db1f2b422ce9a44180a09955cf34315451987fbdf4c498c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d977a24845460304db1f2b422ce9a44180a09955cf34315451987fbdf4c498c5->enter($__internal_d977a24845460304db1f2b422ce9a44180a09955cf34315451987fbdf4c498c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d977a24845460304db1f2b422ce9a44180a09955cf34315451987fbdf4c498c5->leave($__internal_d977a24845460304db1f2b422ce9a44180a09955cf34315451987fbdf4c498c5_prof);

        
        $__internal_846036de27a12bd91dfbf1239298aa1f888c8e1bd6afdc04a51c71c20f68a1e8->leave($__internal_846036de27a12bd91dfbf1239298aa1f888c8e1bd6afdc04a51c71c20f68a1e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/remi/Symfony/CRMSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
