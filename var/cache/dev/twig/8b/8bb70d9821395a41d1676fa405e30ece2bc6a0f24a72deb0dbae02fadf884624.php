<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0a9f0be3bc34273104f4ca6e1727f53acaa9c97050f8cd146291888b91b226d0 extends Twig_Template
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
        $__internal_748c4ee9a529354eb95ec72f0a631e40d9cc027518705cc69b9b5c1241011c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748c4ee9a529354eb95ec72f0a631e40d9cc027518705cc69b9b5c1241011c34->enter($__internal_748c4ee9a529354eb95ec72f0a631e40d9cc027518705cc69b9b5c1241011c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9c11e41ccb8d1925435c82e0e07a837fd22c48ed18796868211e5e5cd83986fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c11e41ccb8d1925435c82e0e07a837fd22c48ed18796868211e5e5cd83986fc->enter($__internal_9c11e41ccb8d1925435c82e0e07a837fd22c48ed18796868211e5e5cd83986fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_748c4ee9a529354eb95ec72f0a631e40d9cc027518705cc69b9b5c1241011c34->leave($__internal_748c4ee9a529354eb95ec72f0a631e40d9cc027518705cc69b9b5c1241011c34_prof);

        
        $__internal_9c11e41ccb8d1925435c82e0e07a837fd22c48ed18796868211e5e5cd83986fc->leave($__internal_9c11e41ccb8d1925435c82e0e07a837fd22c48ed18796868211e5e5cd83986fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1a0eb784005c18d471006819799e6984275d8bba86b68fc1ac487522111febe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a0eb784005c18d471006819799e6984275d8bba86b68fc1ac487522111febe->enter($__internal_c1a0eb784005c18d471006819799e6984275d8bba86b68fc1ac487522111febe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6f5bb91e67773300de04f1675952c45843e5a381b16f0146024bdad756f88c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f5bb91e67773300de04f1675952c45843e5a381b16f0146024bdad756f88c8->enter($__internal_f6f5bb91e67773300de04f1675952c45843e5a381b16f0146024bdad756f88c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f6f5bb91e67773300de04f1675952c45843e5a381b16f0146024bdad756f88c8->leave($__internal_f6f5bb91e67773300de04f1675952c45843e5a381b16f0146024bdad756f88c8_prof);

        
        $__internal_c1a0eb784005c18d471006819799e6984275d8bba86b68fc1ac487522111febe->leave($__internal_c1a0eb784005c18d471006819799e6984275d8bba86b68fc1ac487522111febe_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_61634f634fbf302fa703db4e80b857292f62f51d0197aadb25f4aee036b9b1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61634f634fbf302fa703db4e80b857292f62f51d0197aadb25f4aee036b9b1a5->enter($__internal_61634f634fbf302fa703db4e80b857292f62f51d0197aadb25f4aee036b9b1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_42b857c04768638f6cd83cca0980a0cc377cf08d45c7f4e9294d618406578fdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b857c04768638f6cd83cca0980a0cc377cf08d45c7f4e9294d618406578fdf->enter($__internal_42b857c04768638f6cd83cca0980a0cc377cf08d45c7f4e9294d618406578fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_42b857c04768638f6cd83cca0980a0cc377cf08d45c7f4e9294d618406578fdf->leave($__internal_42b857c04768638f6cd83cca0980a0cc377cf08d45c7f4e9294d618406578fdf_prof);

        
        $__internal_61634f634fbf302fa703db4e80b857292f62f51d0197aadb25f4aee036b9b1a5->leave($__internal_61634f634fbf302fa703db4e80b857292f62f51d0197aadb25f4aee036b9b1a5_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0273eed39ac03a1af0b68969e72ae000780ad73248f7d7afa032039b673c8966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0273eed39ac03a1af0b68969e72ae000780ad73248f7d7afa032039b673c8966->enter($__internal_0273eed39ac03a1af0b68969e72ae000780ad73248f7d7afa032039b673c8966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eea9cb54886d3b9c95f2de8b86e6a0908f416bbf65b1545b5593d501e079cdd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea9cb54886d3b9c95f2de8b86e6a0908f416bbf65b1545b5593d501e079cdd7->enter($__internal_eea9cb54886d3b9c95f2de8b86e6a0908f416bbf65b1545b5593d501e079cdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eea9cb54886d3b9c95f2de8b86e6a0908f416bbf65b1545b5593d501e079cdd7->leave($__internal_eea9cb54886d3b9c95f2de8b86e6a0908f416bbf65b1545b5593d501e079cdd7_prof);

        
        $__internal_0273eed39ac03a1af0b68969e72ae000780ad73248f7d7afa032039b673c8966->leave($__internal_0273eed39ac03a1af0b68969e72ae000780ad73248f7d7afa032039b673c8966_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\Stagiaire\\Desktop\\mon-portfolio\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
