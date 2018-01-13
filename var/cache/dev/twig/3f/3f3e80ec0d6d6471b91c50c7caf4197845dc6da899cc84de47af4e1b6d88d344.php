<?php

/* /index.html.twig */
class __TwigTemplate_a4bee53b7522ea0ec6e10091ca1f46c1b8ca6cc39262dc44d11feb0e4193d974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("/base.html.twig", "/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44cac195a554182249d0e38d9f8e1db1227918cf4905bcd75ec661eedd11ba32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44cac195a554182249d0e38d9f8e1db1227918cf4905bcd75ec661eedd11ba32->enter($__internal_44cac195a554182249d0e38d9f8e1db1227918cf4905bcd75ec661eedd11ba32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $__internal_6bbceaa79a1204e67395cbb645a04f42bc6478d2a820eb3ff24b9fa1f9ed0152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbceaa79a1204e67395cbb645a04f42bc6478d2a820eb3ff24b9fa1f9ed0152->enter($__internal_6bbceaa79a1204e67395cbb645a04f42bc6478d2a820eb3ff24b9fa1f9ed0152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44cac195a554182249d0e38d9f8e1db1227918cf4905bcd75ec661eedd11ba32->leave($__internal_44cac195a554182249d0e38d9f8e1db1227918cf4905bcd75ec661eedd11ba32_prof);

        
        $__internal_6bbceaa79a1204e67395cbb645a04f42bc6478d2a820eb3ff24b9fa1f9ed0152->leave($__internal_6bbceaa79a1204e67395cbb645a04f42bc6478d2a820eb3ff24b9fa1f9ed0152_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f24d377be28aec009f5f3d83776fe9eafdd12aeb02b61f596bd806da51b7380 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f24d377be28aec009f5f3d83776fe9eafdd12aeb02b61f596bd806da51b7380->enter($__internal_8f24d377be28aec009f5f3d83776fe9eafdd12aeb02b61f596bd806da51b7380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6023e37907e94a1a16737ad89ac0f9820705d6f9b5afb947b01bd0f0ab28ee9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6023e37907e94a1a16737ad89ac0f9820705d6f9b5afb947b01bd0f0ab28ee9c->enter($__internal_6023e37907e94a1a16737ad89ac0f9820705d6f9b5afb947b01bd0f0ab28ee9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_6023e37907e94a1a16737ad89ac0f9820705d6f9b5afb947b01bd0f0ab28ee9c->leave($__internal_6023e37907e94a1a16737ad89ac0f9820705d6f9b5afb947b01bd0f0ab28ee9c_prof);

        
        $__internal_8f24d377be28aec009f5f3d83776fe9eafdd12aeb02b61f596bd806da51b7380->leave($__internal_8f24d377be28aec009f5f3d83776fe9eafdd12aeb02b61f596bd806da51b7380_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_42b5f948abe48e32dea45050d579b52cec18fe55b09166cecca5a2cbc44fbea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b5f948abe48e32dea45050d579b52cec18fe55b09166cecca5a2cbc44fbea6->enter($__internal_42b5f948abe48e32dea45050d579b52cec18fe55b09166cecca5a2cbc44fbea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aca04be2998cb7e0a5c985a3f4af684369818e4c3f3653306c1eb02aec5086dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca04be2998cb7e0a5c985a3f4af684369818e4c3f3653306c1eb02aec5086dd->enter($__internal_aca04be2998cb7e0a5c985a3f4af684369818e4c3f3653306c1eb02aec5086dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container\" style=\" \">
        <div class=\"row \">
            <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-6 \">
                <div class=\"jumbotron col-sm-12\">

                        <div class=\"col-sm-12 text-center\">
                            <h1>Connexion</h1>
                        </div>

                    <div class=\" col-sm-12\">
                        <Form role=\"form\" action=\"./gestionRessourceControlleur.php\" method=\"POST\" class=\"form-horizontal\" enctype=\"multipart/form-data\">
                            <div class=\"col-sm-12\">
                                <div class=\"row\">
                                    <label for= \"login\" class=\"control-label\">Pseudo : </label>
                                    <input class='form-control' id=\"login\" type=\"text\" name=\"login\" requiered=requiered/><br/>
                                </div>
                                <div class=\"row\">
                                    <label for= \"pwd\" class=\"control-label\">Mot de passe : </label>
                                    <input class='form-control' id=\"pwd\" type=\"text\" name=\"pwd\" requiered=requiered/><br/>
                                </div>
                                <input type=\"hidden\" name=\"formRessource\" value=\"true\">
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                </div>
                                <div class=\"form-group col-sm-6\">
                                    <input type=\"button\" value=\"connexion\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"window.location.href = '../vue/menuPrincipal.php'\">
                                </div>
                                <div class=\"col-sm-3\">
                                </div>
                            </div>
                        </Form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_aca04be2998cb7e0a5c985a3f4af684369818e4c3f3653306c1eb02aec5086dd->leave($__internal_aca04be2998cb7e0a5c985a3f4af684369818e4c3f3653306c1eb02aec5086dd_prof);

        
        $__internal_42b5f948abe48e32dea45050d579b52cec18fe55b09166cecca5a2cbc44fbea6->leave($__internal_42b5f948abe48e32dea45050d579b52cec18fe55b09166cecca5a2cbc44fbea6_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b395e6349be7126518197aea08e0be11865e11e34f3aa911f9937ce8c43248f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b395e6349be7126518197aea08e0be11865e11e34f3aa911f9937ce8c43248f->enter($__internal_2b395e6349be7126518197aea08e0be11865e11e34f3aa911f9937ce8c43248f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_916a5ef89925c97cf0faeba34ee75eec7541f67c8dba56dfc8d8fc5c300ec654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_916a5ef89925c97cf0faeba34ee75eec7541f67c8dba56dfc8d8fc5c300ec654->enter($__internal_916a5ef89925c97cf0faeba34ee75eec7541f67c8dba56dfc8d8fc5c300ec654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_916a5ef89925c97cf0faeba34ee75eec7541f67c8dba56dfc8d8fc5c300ec654->leave($__internal_916a5ef89925c97cf0faeba34ee75eec7541f67c8dba56dfc8d8fc5c300ec654_prof);

        
        $__internal_2b395e6349be7126518197aea08e0be11865e11e34f3aa911f9937ce8c43248f->leave($__internal_2b395e6349be7126518197aea08e0be11865e11e34f3aa911f9937ce8c43248f_prof);

    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  119 => 48,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/base.html.twig' %}

{% block title %}Home{% endblock %}

{% block body %}

    <div class=\"container\" style=\" \">
        <div class=\"row \">
            <div class=\"col-lg-3\"></div>
            <div class=\"col-lg-6 \">
                <div class=\"jumbotron col-sm-12\">

                        <div class=\"col-sm-12 text-center\">
                            <h1>Connexion</h1>
                        </div>

                    <div class=\" col-sm-12\">
                        <Form role=\"form\" action=\"./gestionRessourceControlleur.php\" method=\"POST\" class=\"form-horizontal\" enctype=\"multipart/form-data\">
                            <div class=\"col-sm-12\">
                                <div class=\"row\">
                                    <label for= \"login\" class=\"control-label\">Pseudo : </label>
                                    <input class='form-control' id=\"login\" type=\"text\" name=\"login\" requiered=requiered/><br/>
                                </div>
                                <div class=\"row\">
                                    <label for= \"pwd\" class=\"control-label\">Mot de passe : </label>
                                    <input class='form-control' id=\"pwd\" type=\"text\" name=\"pwd\" requiered=requiered/><br/>
                                </div>
                                <input type=\"hidden\" name=\"formRessource\" value=\"true\">
                            </div>
                            <div class=\"row\">
                                <div class=\"col-sm-3\">
                                </div>
                                <div class=\"form-group col-sm-6\">
                                    <input type=\"button\" value=\"connexion\" class=\"btn btn-primary btn-lg btn-block\" onclick=\"window.location.href = '../vue/menuPrincipal.php'\">
                                </div>
                                <div class=\"col-sm-3\">
                                </div>
                            </div>
                        </Form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/main.js') }}\"></script>
{% endblock %}", "/index.html.twig", "/home/remi/Symfony/CRMSymfony/app/Resources/views/index.html.twig");
    }
}
