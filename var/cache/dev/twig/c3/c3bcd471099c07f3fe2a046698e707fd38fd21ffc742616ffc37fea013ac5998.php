<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3ee92d9538cc95eb3141425e04bc61a54134f801c2eddde4cfebb2c00d655dfc extends Twig_Template
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
        $__internal_7f1ba362694b441e2b634bddf982e6495231a5df2498d8d66d5700e2e2b0f1ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f1ba362694b441e2b634bddf982e6495231a5df2498d8d66d5700e2e2b0f1ff->enter($__internal_7f1ba362694b441e2b634bddf982e6495231a5df2498d8d66d5700e2e2b0f1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ad8573e2ea9030650b71eb183d94df61557472da5f888310bfb47f998e984da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8573e2ea9030650b71eb183d94df61557472da5f888310bfb47f998e984da8->enter($__internal_ad8573e2ea9030650b71eb183d94df61557472da5f888310bfb47f998e984da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f1ba362694b441e2b634bddf982e6495231a5df2498d8d66d5700e2e2b0f1ff->leave($__internal_7f1ba362694b441e2b634bddf982e6495231a5df2498d8d66d5700e2e2b0f1ff_prof);

        
        $__internal_ad8573e2ea9030650b71eb183d94df61557472da5f888310bfb47f998e984da8->leave($__internal_ad8573e2ea9030650b71eb183d94df61557472da5f888310bfb47f998e984da8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4a7938c08227daf4a5bed547def90b93d04437f8a35f66fb9507d4ddde36ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a7938c08227daf4a5bed547def90b93d04437f8a35f66fb9507d4ddde36ba4->enter($__internal_e4a7938c08227daf4a5bed547def90b93d04437f8a35f66fb9507d4ddde36ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_450c1dbec7df6b6bfcd3f0db6125dd37c34abdd3bbb969b2682e238827973897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450c1dbec7df6b6bfcd3f0db6125dd37c34abdd3bbb969b2682e238827973897->enter($__internal_450c1dbec7df6b6bfcd3f0db6125dd37c34abdd3bbb969b2682e238827973897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_450c1dbec7df6b6bfcd3f0db6125dd37c34abdd3bbb969b2682e238827973897->leave($__internal_450c1dbec7df6b6bfcd3f0db6125dd37c34abdd3bbb969b2682e238827973897_prof);

        
        $__internal_e4a7938c08227daf4a5bed547def90b93d04437f8a35f66fb9507d4ddde36ba4->leave($__internal_e4a7938c08227daf4a5bed547def90b93d04437f8a35f66fb9507d4ddde36ba4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_060e87b66d501f8f90541e8531b30ba1171b1c1b5d389df8b2d81e45aa8fedc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060e87b66d501f8f90541e8531b30ba1171b1c1b5d389df8b2d81e45aa8fedc8->enter($__internal_060e87b66d501f8f90541e8531b30ba1171b1c1b5d389df8b2d81e45aa8fedc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_58472a9884f361633dd6df2dd5a684ff703f6e147436acc40b5b5c8315c8b7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58472a9884f361633dd6df2dd5a684ff703f6e147436acc40b5b5c8315c8b7bb->enter($__internal_58472a9884f361633dd6df2dd5a684ff703f6e147436acc40b5b5c8315c8b7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_58472a9884f361633dd6df2dd5a684ff703f6e147436acc40b5b5c8315c8b7bb->leave($__internal_58472a9884f361633dd6df2dd5a684ff703f6e147436acc40b5b5c8315c8b7bb_prof);

        
        $__internal_060e87b66d501f8f90541e8531b30ba1171b1c1b5d389df8b2d81e45aa8fedc8->leave($__internal_060e87b66d501f8f90541e8531b30ba1171b1c1b5d389df8b2d81e45aa8fedc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37f9f988bff025fd78beac6a53ef9b66504481ca26680f23480d1d0e90881c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f9f988bff025fd78beac6a53ef9b66504481ca26680f23480d1d0e90881c73->enter($__internal_37f9f988bff025fd78beac6a53ef9b66504481ca26680f23480d1d0e90881c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_92001c7e81c5a451d965e7ac1408ea08ba9f66a5026aa0c0eda02d16a2cd0d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92001c7e81c5a451d965e7ac1408ea08ba9f66a5026aa0c0eda02d16a2cd0d4c->enter($__internal_92001c7e81c5a451d965e7ac1408ea08ba9f66a5026aa0c0eda02d16a2cd0d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_92001c7e81c5a451d965e7ac1408ea08ba9f66a5026aa0c0eda02d16a2cd0d4c->leave($__internal_92001c7e81c5a451d965e7ac1408ea08ba9f66a5026aa0c0eda02d16a2cd0d4c_prof);

        
        $__internal_37f9f988bff025fd78beac6a53ef9b66504481ca26680f23480d1d0e90881c73->leave($__internal_37f9f988bff025fd78beac6a53ef9b66504481ca26680f23480d1d0e90881c73_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\Stagiaire\\Desktop\\mon-portfolio\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
