<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_993a36b6efb48e360d27f18460f8ed1ad6b587870e76ad162a2b24ad8b0d551d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"navbar-inner\">
            <div class=\"container\">
                <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"brand\" href=\"index.php\">Administration</a>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 30
        $this->env->loadTemplate("::modulesUsed/navigationAdmin.html.twig")->display($context);
        // line 31
        echo "            <div class=\"span9\">
                
            ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        </div>
    </div>
</div>
<hr />
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright 2014 - DevAndClick</p>
            </div>
        </div>
</footer>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("../js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "</body>
</html>";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "Ecommerce Fruits & légumes - By DevAndClick";
    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  140 => 33,  135 => 12,  130 => 7,  125 => 6,  119 => 5,  114 => 49,  112 => 48,  108 => 47,  104 => 46,  90 => 34,  88 => 33,  84 => 31,  82 => 30,  61 => 13,  51 => 10,  39 => 7,  35 => 6,  25 => 1,  77 => 29,  70 => 24,  59 => 12,  55 => 11,  50 => 16,  47 => 9,  43 => 8,  31 => 5,  28 => 3,);
    }
}
