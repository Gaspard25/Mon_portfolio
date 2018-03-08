<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1a9b70014928dc96b2327ab87c4d371d39934a9d5fa5ea39a19f833d77fa6787 extends Twig_Template
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
        $__internal_f4d9c2bd7ba384013a095d9fcba46fb9098386b0577078604a60df761e451d26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d9c2bd7ba384013a095d9fcba46fb9098386b0577078604a60df761e451d26->enter($__internal_f4d9c2bd7ba384013a095d9fcba46fb9098386b0577078604a60df761e451d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_55eed876af37854e9da5923d9435c34a556755252c930847d12707210b10f958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55eed876af37854e9da5923d9435c34a556755252c930847d12707210b10f958->enter($__internal_55eed876af37854e9da5923d9435c34a556755252c930847d12707210b10f958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4d9c2bd7ba384013a095d9fcba46fb9098386b0577078604a60df761e451d26->leave($__internal_f4d9c2bd7ba384013a095d9fcba46fb9098386b0577078604a60df761e451d26_prof);

        
        $__internal_55eed876af37854e9da5923d9435c34a556755252c930847d12707210b10f958->leave($__internal_55eed876af37854e9da5923d9435c34a556755252c930847d12707210b10f958_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d36a48694e80d8d991f4723f4a5e3c6163371b6d018fcd199e3828df9ef4292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d36a48694e80d8d991f4723f4a5e3c6163371b6d018fcd199e3828df9ef4292->enter($__internal_3d36a48694e80d8d991f4723f4a5e3c6163371b6d018fcd199e3828df9ef4292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1d7afcd0d540b64f41730fe1a77b4889ef751fe9bf2882ecbda4408995cd2ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7afcd0d540b64f41730fe1a77b4889ef751fe9bf2882ecbda4408995cd2ceb->enter($__internal_1d7afcd0d540b64f41730fe1a77b4889ef751fe9bf2882ecbda4408995cd2ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_1d7afcd0d540b64f41730fe1a77b4889ef751fe9bf2882ecbda4408995cd2ceb->leave($__internal_1d7afcd0d540b64f41730fe1a77b4889ef751fe9bf2882ecbda4408995cd2ceb_prof);

        
        $__internal_3d36a48694e80d8d991f4723f4a5e3c6163371b6d018fcd199e3828df9ef4292->leave($__internal_3d36a48694e80d8d991f4723f4a5e3c6163371b6d018fcd199e3828df9ef4292_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\Stagiaire\\Desktop\\mon-portfolio\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
