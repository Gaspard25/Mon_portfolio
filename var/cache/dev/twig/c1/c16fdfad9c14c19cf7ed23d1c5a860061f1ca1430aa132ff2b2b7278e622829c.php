<?php

/* base.html.twig */
class __TwigTemplate_e9f7d9a0af54ae3d73f5ba4676fd5612ff96fdaafcc1fc73f4d82c7b87c8d6c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'index' => array($this, 'block_index'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94554ba8e2e3ad99187796450ed3d9c3480ce3c1ee5e12c82accc1571d974a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94554ba8e2e3ad99187796450ed3d9c3480ce3c1ee5e12c82accc1571d974a99->enter($__internal_94554ba8e2e3ad99187796450ed3d9c3480ce3c1ee5e12c82accc1571d974a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_a61fd991647d603ca80fbb2bc93a132273c4e717b889459ba32b1483e25e8463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a61fd991647d603ca80fbb2bc93a132273c4e717b889459ba32b1483e25e8463->enter($__internal_a61fd991647d603ca80fbb2bc93a132273c4e717b889459ba32b1483e25e8463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    
        <title>";
        // line 15
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
</head>

<body>
    
    ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 26
        echo "

    ";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        // line 247
        echo "  
    
</body>
</html>
";
        
        $__internal_94554ba8e2e3ad99187796450ed3d9c3480ce3c1ee5e12c82accc1571d974a99->leave($__internal_94554ba8e2e3ad99187796450ed3d9c3480ce3c1ee5e12c82accc1571d974a99_prof);

        
        $__internal_a61fd991647d603ca80fbb2bc93a132273c4e717b889459ba32b1483e25e8463->leave($__internal_a61fd991647d603ca80fbb2bc93a132273c4e717b889459ba32b1483e25e8463_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_647d804cecc7cc7b153e9b6997e4842a1b02923b26d1b57bb5f76bed4ea8471a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647d804cecc7cc7b153e9b6997e4842a1b02923b26d1b57bb5f76bed4ea8471a->enter($__internal_647d804cecc7cc7b153e9b6997e4842a1b02923b26d1b57bb5f76bed4ea8471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b294938997447f9a4d8ba61dfab12bf54b025cc5424c87d05a1fc8ae0916f956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b294938997447f9a4d8ba61dfab12bf54b025cc5424c87d05a1fc8ae0916f956->enter($__internal_b294938997447f9a4d8ba61dfab12bf54b025cc5424c87d05a1fc8ae0916f956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    <link rel=\"stylesheet\" href=\"asset/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"asset/css/style.css\">
    <link rel=\"stylesheet\" href=\"asset/font-awesome-4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"asset/css/animate.css\"> 
    ";
        
        $__internal_b294938997447f9a4d8ba61dfab12bf54b025cc5424c87d05a1fc8ae0916f956->leave($__internal_b294938997447f9a4d8ba61dfab12bf54b025cc5424c87d05a1fc8ae0916f956_prof);

        
        $__internal_647d804cecc7cc7b153e9b6997e4842a1b02923b26d1b57bb5f76bed4ea8471a->leave($__internal_647d804cecc7cc7b153e9b6997e4842a1b02923b26d1b57bb5f76bed4ea8471a_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_d86b9308621b5c472c7eeadb75be18734d9fb8e3dda6fb96fb2a6dca16346e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86b9308621b5c472c7eeadb75be18734d9fb8e3dda6fb96fb2a6dca16346e29->enter($__internal_d86b9308621b5c472c7eeadb75be18734d9fb8e3dda6fb96fb2a6dca16346e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8941c1fc90a52aa3702d13d0bbe3083a9652e132df439cf695bd12f3a6a8794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8941c1fc90a52aa3702d13d0bbe3083a9652e132df439cf695bd12f3a6a8794->enter($__internal_b8941c1fc90a52aa3702d13d0bbe3083a9652e132df439cf695bd12f3a6a8794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Antoine!";
        
        $__internal_b8941c1fc90a52aa3702d13d0bbe3083a9652e132df439cf695bd12f3a6a8794->leave($__internal_b8941c1fc90a52aa3702d13d0bbe3083a9652e132df439cf695bd12f3a6a8794_prof);

        
        $__internal_d86b9308621b5c472c7eeadb75be18734d9fb8e3dda6fb96fb2a6dca16346e29->leave($__internal_d86b9308621b5c472c7eeadb75be18734d9fb8e3dda6fb96fb2a6dca16346e29_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_407c88e4b25b4550718f7a28bb9488431de5a61e58bb5535d6c65508095b9609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407c88e4b25b4550718f7a28bb9488431de5a61e58bb5535d6c65508095b9609->enter($__internal_407c88e4b25b4550718f7a28bb9488431de5a61e58bb5535d6c65508095b9609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_24310bc1570880117eadead91a912ef729c3e1642c40e1c79c6ceff76d97a416 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24310bc1570880117eadead91a912ef729c3e1642c40e1c79c6ceff76d97a416->enter($__internal_24310bc1570880117eadead91a912ef729c3e1642c40e1c79c6ceff76d97a416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
    <div id=\"index\">";
        // line 23
        $this->displayBlock('index', $context, $blocks);
        echo "</div>

    ";
        
        $__internal_24310bc1570880117eadead91a912ef729c3e1642c40e1c79c6ceff76d97a416->leave($__internal_24310bc1570880117eadead91a912ef729c3e1642c40e1c79c6ceff76d97a416_prof);

        
        $__internal_407c88e4b25b4550718f7a28bb9488431de5a61e58bb5535d6c65508095b9609->leave($__internal_407c88e4b25b4550718f7a28bb9488431de5a61e58bb5535d6c65508095b9609_prof);

    }

    public function block_index($context, array $blocks = array())
    {
        $__internal_adb4600f027f87fe678fae407bdfc8a9098d52ae213358751e48524dc5faa35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb4600f027f87fe678fae407bdfc8a9098d52ae213358751e48524dc5faa35a->enter($__internal_adb4600f027f87fe678fae407bdfc8a9098d52ae213358751e48524dc5faa35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        $__internal_3fc930912fefe26ff318e8e374c7f2e6955de0ecf3dbb1399c96da75daac380b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc930912fefe26ff318e8e374c7f2e6955de0ecf3dbb1399c96da75daac380b->enter($__internal_3fc930912fefe26ff318e8e374c7f2e6955de0ecf3dbb1399c96da75daac380b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "index"));

        
        $__internal_3fc930912fefe26ff318e8e374c7f2e6955de0ecf3dbb1399c96da75daac380b->leave($__internal_3fc930912fefe26ff318e8e374c7f2e6955de0ecf3dbb1399c96da75daac380b_prof);

        
        $__internal_adb4600f027f87fe678fae407bdfc8a9098d52ae213358751e48524dc5faa35a->leave($__internal_adb4600f027f87fe678fae407bdfc8a9098d52ae213358751e48524dc5faa35a_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d920f8307a922f885855f7fb6c9094eba57ff8ee3cbca98cb4f3996a3bee8f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d920f8307a922f885855f7fb6c9094eba57ff8ee3cbca98cb4f3996a3bee8f2d->enter($__internal_d920f8307a922f885855f7fb6c9094eba57ff8ee3cbca98cb4f3996a3bee8f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b3613a90941bcb40c7e0141917b856967f29384e837fa338b42f7fdb2c4d0eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3613a90941bcb40c7e0141917b856967f29384e837fa338b42f7fdb2c4d0eca->enter($__internal_b3613a90941bcb40c7e0141917b856967f29384e837fa338b42f7fdb2c4d0eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "
<script src=\"asset/js/jquery-3.2.1.min.js\"></script>
<script src=\"asset/js/bootstrap.min.js\"></script>
<script src=\"asset/js/popper.js\"></script>
<script src=\"asset/js/midnight.jquery.min.js\"></script>



<script src=\"asset/js/wow.min.js\"></script>


<script type=\"text/javascript\">

    \$('#myCollapse').on('shown.bs.collapse'), function (e) { // Action to execute once the collapsible area is expanded }) 
    };

    wow = new WOW(
        {
            animateClass: 'animated',
            offset: 0,
            callback: function (box) {
                console.log(\"WOW: animating <\" + box.tagName.toLowerCase() + \">\")
            }
        }
    );

    wow.init();

    document.getElementById('moar').onclick = function () {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };


    \$(document.body).on('click', 'a[href*=\"#main\"]', function (e) {
        e.preventDefault();
        \$('html,body').animate({
            scrollTop: \$(this.hash).offset().top
        }, 900);
    });


    \$(window).on('scroll',
        function () {
            var scrolled = \$(window).scrollTop();
            var height = \$(window).height();
            if (scrolled < height) {
                \$('.full-image').css({ 'top': -scrolled * .5 });
            }
        });


</script>





<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#main\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".description\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.description').css({ 'top': -scrolled * .5 });
        }
    });


</script>

<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#formation\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".formation\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>


<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#experience\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".experience\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>

<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#promo\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".promo\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>


<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#fluide\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".fluide\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>




<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#contact\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".contact\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>


<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#home\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\"header\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });

</script>

    ";
        
        $__internal_b3613a90941bcb40c7e0141917b856967f29384e837fa338b42f7fdb2c4d0eca->leave($__internal_b3613a90941bcb40c7e0141917b856967f29384e837fa338b42f7fdb2c4d0eca_prof);

        
        $__internal_d920f8307a922f885855f7fb6c9094eba57ff8ee3cbca98cb4f3996a3bee8f2d->leave($__internal_d920f8307a922f885855f7fb6c9094eba57ff8ee3cbca98cb4f3996a3bee8f2d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  166 => 29,  157 => 28,  128 => 23,  125 => 22,  116 => 21,  98 => 15,  84 => 9,  75 => 8,  61 => 247,  59 => 28,  55 => 26,  53 => 21,  44 => 15,  41 => 14,  39 => 8,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
    <link rel=\"stylesheet\" href=\"asset/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"asset/css/style.css\">
    <link rel=\"stylesheet\" href=\"asset/font-awesome-4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"asset/css/animate.css\"> 
    {% endblock %}
    
        <title>{% block title %}Antoine!{% endblock %}</title>
    
</head>

<body>
    
    {% block body %}

    <div id=\"index\">{% block index %}{% endblock %}</div>

    {% endblock %}


    {% block javascripts %}

<script src=\"asset/js/jquery-3.2.1.min.js\"></script>
<script src=\"asset/js/bootstrap.min.js\"></script>
<script src=\"asset/js/popper.js\"></script>
<script src=\"asset/js/midnight.jquery.min.js\"></script>



<script src=\"asset/js/wow.min.js\"></script>


<script type=\"text/javascript\">

    \$('#myCollapse').on('shown.bs.collapse'), function (e) { // Action to execute once the collapsible area is expanded }) 
    };

    wow = new WOW(
        {
            animateClass: 'animated',
            offset: 0,
            callback: function (box) {
                console.log(\"WOW: animating <\" + box.tagName.toLowerCase() + \">\")
            }
        }
    );

    wow.init();

    document.getElementById('moar').onclick = function () {
        var section = document.createElement('section');
        section.className = 'section--purple wow fadeInDown';
        this.parentNode.insertBefore(section, this);
    };


    \$(document.body).on('click', 'a[href*=\"#main\"]', function (e) {
        e.preventDefault();
        \$('html,body').animate({
            scrollTop: \$(this.hash).offset().top
        }, 900);
    });


    \$(window).on('scroll',
        function () {
            var scrolled = \$(window).scrollTop();
            var height = \$(window).height();
            if (scrolled < height) {
                \$('.full-image').css({ 'top': -scrolled * .5 });
            }
        });


</script>





<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#main\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".description\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.description').css({ 'top': -scrolled * .5 });
        }
    });


</script>

<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#formation\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".formation\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>


<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#experience\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".experience\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>

<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#promo\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".promo\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>


<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#fluide\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".fluide\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>




<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#contact\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\".contact\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });


</script>


<script type=\"text/javascript\">

    \$(document.body).on('click', 'a[href*=\"#home\"]',
        function (e) {
            e.preventDefault();
            \$('html,body').animate({
                scrollTop: \$(\"header\").offset().top
            }, 900);
        });


    \$(window).on('scroll', function () {
        var scrolled = \$(window).scrollTop();
        var height = \$(window).height();
        if (scrolled < height) {
            \$('.fleche').css({ 'top': -scrolled * .5 });
        }
    });

</script>

    {% endblock %}  
    
</body>
</html>
", "base.html.twig", "C:\\Users\\Stagiaire\\Desktop\\mon-portfolio\\templates\\base.html.twig");
    }
}
