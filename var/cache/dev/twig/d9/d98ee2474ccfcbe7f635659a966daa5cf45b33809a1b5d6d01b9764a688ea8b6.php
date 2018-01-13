<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3759c9722424925e94476feedce0603a0cc510e76cb28af10bf1cf3e01e575aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3759c9722424925e94476feedce0603a0cc510e76cb28af10bf1cf3e01e575aa->enter($__internal_3759c9722424925e94476feedce0603a0cc510e76cb28af10bf1cf3e01e575aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_abc2e38a17ba8c2e279c4df5d10bc470669532c82d7b6327a4a623cb8269b383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc2e38a17ba8c2e279c4df5d10bc470669532c82d7b6327a4a623cb8269b383->enter($__internal_abc2e38a17ba8c2e279c4df5d10bc470669532c82d7b6327a4a623cb8269b383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3759c9722424925e94476feedce0603a0cc510e76cb28af10bf1cf3e01e575aa->leave($__internal_3759c9722424925e94476feedce0603a0cc510e76cb28af10bf1cf3e01e575aa_prof);

        
        $__internal_abc2e38a17ba8c2e279c4df5d10bc470669532c82d7b6327a4a623cb8269b383->leave($__internal_abc2e38a17ba8c2e279c4df5d10bc470669532c82d7b6327a4a623cb8269b383_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_efa84f042b037e784499de3c100503bba1165eac890669427cdd20a4fcd009d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa84f042b037e784499de3c100503bba1165eac890669427cdd20a4fcd009d5->enter($__internal_efa84f042b037e784499de3c100503bba1165eac890669427cdd20a4fcd009d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54bf98acbad7b5ed244e2d95db88932561d4de776e8f45f4c1e274a62dc42542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bf98acbad7b5ed244e2d95db88932561d4de776e8f45f4c1e274a62dc42542->enter($__internal_54bf98acbad7b5ed244e2d95db88932561d4de776e8f45f4c1e274a62dc42542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_54bf98acbad7b5ed244e2d95db88932561d4de776e8f45f4c1e274a62dc42542->leave($__internal_54bf98acbad7b5ed244e2d95db88932561d4de776e8f45f4c1e274a62dc42542_prof);

        
        $__internal_efa84f042b037e784499de3c100503bba1165eac890669427cdd20a4fcd009d5->leave($__internal_efa84f042b037e784499de3c100503bba1165eac890669427cdd20a4fcd009d5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e79e99add39cbba93a4139cc96226aaf0ed4b62a52dc746fe169af3ef9b3d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e79e99add39cbba93a4139cc96226aaf0ed4b62a52dc746fe169af3ef9b3d4d->enter($__internal_7e79e99add39cbba93a4139cc96226aaf0ed4b62a52dc746fe169af3ef9b3d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8b29f7705d023ab80988e83ade9ca8c8ec2c969d4d1460ede098846e27e03083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b29f7705d023ab80988e83ade9ca8c8ec2c969d4d1460ede098846e27e03083->enter($__internal_8b29f7705d023ab80988e83ade9ca8c8ec2c969d4d1460ede098846e27e03083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_8b29f7705d023ab80988e83ade9ca8c8ec2c969d4d1460ede098846e27e03083->leave($__internal_8b29f7705d023ab80988e83ade9ca8c8ec2c969d4d1460ede098846e27e03083_prof);

        
        $__internal_7e79e99add39cbba93a4139cc96226aaf0ed4b62a52dc746fe169af3ef9b3d4d->leave($__internal_7e79e99add39cbba93a4139cc96226aaf0ed4b62a52dc746fe169af3ef9b3d4d_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dcc056806509940e9f14d1e33da35fe18a99f67ca794935d997862db083bcd2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcc056806509940e9f14d1e33da35fe18a99f67ca794935d997862db083bcd2f->enter($__internal_dcc056806509940e9f14d1e33da35fe18a99f67ca794935d997862db083bcd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6494e92e9632e296944bef7c521032bf7141642ee7a6889c055aed6d8d666324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6494e92e9632e296944bef7c521032bf7141642ee7a6889c055aed6d8d666324->enter($__internal_6494e92e9632e296944bef7c521032bf7141642ee7a6889c055aed6d8d666324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6494e92e9632e296944bef7c521032bf7141642ee7a6889c055aed6d8d666324->leave($__internal_6494e92e9632e296944bef7c521032bf7141642ee7a6889c055aed6d8d666324_prof);

        
        $__internal_dcc056806509940e9f14d1e33da35fe18a99f67ca794935d997862db083bcd2f->leave($__internal_dcc056806509940e9f14d1e33da35fe18a99f67ca794935d997862db083bcd2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/remi/Symfony/CRMSymfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
