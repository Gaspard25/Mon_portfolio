<?php

/* @EasyAdmin/data_collector/easyadmin.html.twig */
class __TwigTemplate_f077b41778df1748209e1a0b7ab6b6863fe95a90904a2e9dcc0d70d43dc71cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@EasyAdmin/data_collector/easyadmin.html.twig", 1);
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
        $__internal_4107e58a593d646b175818e5b69b279aecf9aec0a7f6b964dad92cb0b74c4613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4107e58a593d646b175818e5b69b279aecf9aec0a7f6b964dad92cb0b74c4613->enter($__internal_4107e58a593d646b175818e5b69b279aecf9aec0a7f6b964dad92cb0b74c4613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $__internal_127a5c95965efa413fab1bf8026766e63b3614fd9c7a4206134ac2c0e56038c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127a5c95965efa413fab1bf8026766e63b3614fd9c7a4206134ac2c0e56038c1->enter($__internal_127a5c95965efa413fab1bf8026766e63b3614fd9c7a4206134ac2c0e56038c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/data_collector/easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4107e58a593d646b175818e5b69b279aecf9aec0a7f6b964dad92cb0b74c4613->leave($__internal_4107e58a593d646b175818e5b69b279aecf9aec0a7f6b964dad92cb0b74c4613_prof);

        
        $__internal_127a5c95965efa413fab1bf8026766e63b3614fd9c7a4206134ac2c0e56038c1->leave($__internal_127a5c95965efa413fab1bf8026766e63b3614fd9c7a4206134ac2c0e56038c1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1c6a5487de0b4502622919e93e15484bb525ac10a6d5343eaa97ed76275b4748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6a5487de0b4502622919e93e15484bb525ac10a6d5343eaa97ed76275b4748->enter($__internal_1c6a5487de0b4502622919e93e15484bb525ac10a6d5343eaa97ed76275b4748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d1b83ee25620ecfad6cf19b343364ecf08c95c51480daa462b2de5757ad3b8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b83ee25620ecfad6cf19b343364ecf08c95c51480daa462b2de5757ad3b8d8->enter($__internal_d1b83ee25620ecfad6cf19b343364ecf08c95c51480daa462b2de5757ad3b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "isEasyAdminAction", array())) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 5, $this->getSourceContext()); })()), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            $context["icon_fill_color"] = ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 8, $this->getSourceContext()); })()) == 1)) ? ("#222") : ("#AAA"));
            // line 9
            echo "            ";
            $context["icon_height"] = ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 9, $this->getSourceContext()); })()) == 1)) ? ("28") : ("24"));
            // line 10
            echo "            <span class=\"icon\">";
            echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => (isset($context["icon_fill_color"]) || array_key_exists("icon_fill_color", $context) ? $context["icon_fill_color"] : (function () { throw new Twig_Error_Runtime('Variable "icon_fill_color" does not exist.', 10, $this->getSourceContext()); })()), "height" => (isset($context["icon_height"]) || array_key_exists("icon_height", $context) ? $context["icon_height"] : (function () { throw new Twig_Error_Runtime('Variable "icon_height" does not exist.', 10, $this->getSourceContext()); })())));
            echo "</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->getSourceContext()); })()), "numEntities", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">";
            // line 17
            echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
            echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 21, $this->getSourceContext()); })()), "numEntities", array()), "html", null, true);
            echo "</span>
        </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 24
            echo "
        ";
            // line 25
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_d1b83ee25620ecfad6cf19b343364ecf08c95c51480daa462b2de5757ad3b8d8->leave($__internal_d1b83ee25620ecfad6cf19b343364ecf08c95c51480daa462b2de5757ad3b8d8_prof);

        
        $__internal_1c6a5487de0b4502622919e93e15484bb525ac10a6d5343eaa97ed76275b4748->leave($__internal_1c6a5487de0b4502622919e93e15484bb525ac10a6d5343eaa97ed76275b4748_prof);

    }

    // line 29
    public function block_menu($context, array $blocks = array())
    {
        $__internal_264f6f0e8aa7ddaf809e3b66217fee0d7671d14b7d989be23234abf236721e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264f6f0e8aa7ddaf809e3b66217fee0d7671d14b7d989be23234abf236721e40->enter($__internal_264f6f0e8aa7ddaf809e3b66217fee0d7671d14b7d989be23234abf236721e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c7f109e74d52b8f37f3e246d4cd1fa36e03cffde3535be165d8dc2a681f999fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f109e74d52b8f37f3e246d4cd1fa36e03cffde3535be165d8dc2a681f999fa->enter($__internal_c7f109e74d52b8f37f3e246d4cd1fa36e03cffde3535be165d8dc2a681f999fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 30
        echo "    <span class=\"label ";
        echo (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 30, $this->getSourceContext()); })()), "isEasyAdminAction", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 31
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_c7f109e74d52b8f37f3e246d4cd1fa36e03cffde3535be165d8dc2a681f999fa->leave($__internal_c7f109e74d52b8f37f3e246d4cd1fa36e03cffde3535be165d8dc2a681f999fa_prof);

        
        $__internal_264f6f0e8aa7ddaf809e3b66217fee0d7671d14b7d989be23234abf236721e40->leave($__internal_264f6f0e8aa7ddaf809e3b66217fee0d7671d14b7d989be23234abf236721e40_prof);

    }

    // line 36
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42615c19e03349d7b4accee54997f656cfd05b7d0157c4339c7c349c932b0528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42615c19e03349d7b4accee54997f656cfd05b7d0157c4339c7c349c932b0528->enter($__internal_42615c19e03349d7b4accee54997f656cfd05b7d0157c4339c7c349c932b0528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_110eace1c3b233a3af292e13d2438029b93841678bc36febe42add3e399ce5c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110eace1c3b233a3af292e13d2438029b93841678bc36febe42add3e399ce5c0->enter($__internal_110eace1c3b233a3af292e13d2438029b93841678bc36febe42add3e399ce5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 37
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 37, $this->getSourceContext()); })()), 1)) : (1));
        // line 38
        echo "
    <h2>EasyAdmin <small>(";
        // line 39
        echo twig_escape_filter($this->env, twig_constant("EasyCorp\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 41
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 41, $this->getSourceContext()); })()), "isEasyAdminAction", array())) {
            // line 42
            echo "
        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    ";
        } else {
            // line 48
            echo "
        ";
            // line 49
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 49, $this->getSourceContext()); })()) == 1)) {
                // line 50
                echo "
            <h3>Request Parameters</h3>
            ";
                // line 52
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 52, $this->getSourceContext()); })()), "requestParameters", array())));
                echo "

        ";
            } else {
                // line 55
                echo "
            ";
                // line 56
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 56, $this->getSourceContext()); })()), "requestParameters", array())) {
                    // line 57
                    echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 59
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array()), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 64
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array()), "-")) : ("-")), "html", null, true);
                    echo "</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                ";
                    // line 68
                    if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 68, $this->getSourceContext()); })()), "requestParameters", array()), "id", array())) {
                        // line 69
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 70
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 70, $this->getSourceContext()); })()), "requestParameters", array()), "id", array()), "html", null, true);
                        echo "</span>
                        <span class=\"label\">ID</span>
                    </div>
                ";
                    } elseif (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),                     // line 73
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 73, $this->getSourceContext()); })()), "requestParameters", array()), "sort_field", array())) {
                        // line 74
                        echo "                    <div class=\"metric\">
                        <span class=\"value\">";
                        // line 75
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 75, $this->getSourceContext()); })()), "requestParameters", array()), "sort_field", array()), "html", null, true);
                        echo " <span class=\"unit\">(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 75, $this->getSourceContext()); })()), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                        echo ")</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                ";
                    }
                    // line 79
                    echo "            </div>
            ";
                }
                // line 81
                echo "
        ";
            }
            // line 83
            echo "
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    ";
            // line 88
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 88, $this->getSourceContext()); })()), "dump", array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 88, $this->getSourceContext()); })()), "currentEntityConfig", array())), "method");
            echo "
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    ";
            // line 99
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 99, $this->getSourceContext()); })()), "dump", array(0 => array("site_name" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 100
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 100, $this->getSourceContext()); })()), "backendConfig", array()), "site_name", array(), "array"), "formats" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 101
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 101, $this->getSourceContext()); })()), "backendConfig", array()), "formats", array(), "array"))), "method");
            // line 102
            echo "

                    <h4>Design Configuration</h4>
                    ";
            // line 105
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 105, $this->getSourceContext()); })()), "dump", array(0 => array("design" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 106
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 106, $this->getSourceContext()); })()), "backendConfig", array()), "design", array(), "array"))), "method");
            // line 107
            echo "

                    <h4>Actions Configuration</h4>
                    ";
            // line 110
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 110, $this->getSourceContext()); })()), "dump", array(0 => array("disabled_actions" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 111
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 111, $this->getSourceContext()); })()), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 112
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 112, $this->getSourceContext()); })()), "backendConfig", array()), "list", array(), "array"), "edit" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 113
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 113, $this->getSourceContext()); })()), "backendConfig", array()), "edit", array(), "array"), "new" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 114
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 114, $this->getSourceContext()); })()), "backendConfig", array()), "new", array(), "array"), "show" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 115
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 115, $this->getSourceContext()); })()), "backendConfig", array()), "show", array(), "array"))), "method");
            // line 116
            echo "

                    <h4>Entities Configuration</h4>
                    ";
            // line 119
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 119, $this->getSourceContext()); })()), "dump", array(0 => array("entities" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 120
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 120, $this->getSourceContext()); })()), "backendConfig", array()), "entities", array(), "array"))), "method");
            // line 121
            echo "

                    <h4>Full Backend Configuration</h4>
                    ";
            // line 124
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 124, $this->getSourceContext()); })()), "dump", array(0 => array("easy_admin" => twig_get_attribute($this->env, $this->getSourceContext(),             // line 125
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 125, $this->getSourceContext()); })()), "backendConfig", array()))), "method");
            // line 126
            echo "
                </div>
            </div>
        </div>

    ";
        }
        // line 132
        echo "
    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
        
        $__internal_110eace1c3b233a3af292e13d2438029b93841678bc36febe42add3e399ce5c0->leave($__internal_110eace1c3b233a3af292e13d2438029b93841678bc36febe42add3e399ce5c0_prof);

        
        $__internal_42615c19e03349d7b4accee54997f656cfd05b7d0157c4339c7c349c932b0528->leave($__internal_42615c19e03349d7b4accee54997f656cfd05b7d0157c4339c7c349c932b0528_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/data_collector/easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 132,  307 => 126,  305 => 125,  304 => 124,  299 => 121,  297 => 120,  296 => 119,  291 => 116,  289 => 115,  288 => 114,  287 => 113,  286 => 112,  285 => 111,  284 => 110,  279 => 107,  277 => 106,  276 => 105,  271 => 102,  269 => 101,  268 => 100,  267 => 99,  253 => 88,  246 => 83,  242 => 81,  238 => 79,  229 => 75,  226 => 74,  224 => 73,  218 => 70,  215 => 69,  213 => 68,  206 => 64,  198 => 59,  194 => 57,  192 => 56,  189 => 55,  183 => 52,  179 => 50,  177 => 49,  174 => 48,  166 => 42,  164 => 41,  159 => 39,  156 => 38,  153 => 37,  144 => 36,  130 => 31,  125 => 30,  116 => 29,  103 => 25,  100 => 24,  94 => 21,  87 => 17,  83 => 15,  81 => 14,  78 => 13,  73 => 11,  68 => 10,  65 => 9,  62 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.isEasyAdminAction %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}
            {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}
            <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>
            <span class=\"sf-toolbar-value sf-toolbar-status\">{{ collector.numEntities }}</span>
        {% endset %}

        {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>EasyAdmin version</b>
            <span class=\"sf-toolbar-status\">{{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Managed entities</b>
            <span class=\"sf-toolbar-status\">{{ collector.numEntities }}</span>
        </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ not collector.isEasyAdminAction ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>EasyAdmin <small>({{ constant('EasyCorp\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if not collector.isEasyAdminAction %}

        <div class=\"empty\">
            <p>No information available because this route is not related to EasyAdmin.</p>
        </div>

    {% else %}

        {% if profiler_markup_version == 1 %}

            <h3>Request Parameters</h3>
            {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}

        {% else %}

            {% if collector.requestParameters %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.action|default('-') }}</span>
                    <span class=\"label\">Action</span>
                </div>

                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.entity|default('-') }}</span>
                    <span class=\"label\">Entity Name</span>
                </div>

                {% if collector.requestParameters.id %}
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.requestParameters.id }}</span>
                        <span class=\"label\">ID</span>
                    </div>
                {% elseif collector.requestParameters.sort_field %}
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.requestParameters.sort_field }} <span class=\"unit\">({{ collector.requestParameters.sort_direction }})</span></span>
                        <span class=\"label\">Sorting</span>
                    </div>
                {% endif %}
            </div>
            {% endif %}

        {% endif %}

        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Current Entity Configuration</h3>
                <div class=\"tab-content\">
                    {{ collector.dump(collector.currentEntityConfig)|raw }}
                </div>

                <br>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Full Backend Configuration</h3>
                <div class=\"tab-content\">

                    <h4>Basic Configuration</h4>
                    {{ collector.dump({
                        'site_name': collector.backendConfig['site_name'],
                        'formats': collector.backendConfig['formats']
                    })|raw }}

                    <h4>Design Configuration</h4>
                    {{ collector.dump({
                        'design': collector.backendConfig['design']
                    })|raw }}

                    <h4>Actions Configuration</h4>
                    {{ collector.dump({
                        'disabled_actions': collector.backendConfig['disabled_actions'],
                        'list': collector.backendConfig['list'],
                        'edit': collector.backendConfig['edit'],
                        'new': collector.backendConfig['new'],
                        'show': collector.backendConfig['show'],
                    })|raw }}

                    <h4>Entities Configuration</h4>
                    {{ collector.dump({
                        'entities': collector.backendConfig['entities']
                    })|raw }}

                    <h4>Full Backend Configuration</h4>
                    {{ collector.dump({
                        'easy_admin': collector.backendConfig
                    })|raw }}
                </div>
            </div>
        </div>

    {% endif %}

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

{% endblock %}
", "@EasyAdmin/data_collector/easyadmin.html.twig", "C:\\Users\\Stagiaire\\Desktop\\mon-portfolio\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\data_collector\\easyadmin.html.twig");
    }
}
