<?php

/* LoginLoginBundle:Default:index.html.twig */
class __TwigTemplate_742c581975c16c04d25173aa465705ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\"/>
        <title> Sign in &middot; Project </title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"desfription\" content=\"\"/>
        <meta name=\"author\" content=\"\"/>

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap-resnposive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/parsley/parsley.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>
    <body>
    ";
        // line 17
        $this->displayBlock('container', $context, $blocks);
        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley/parsley.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley/parsley-standalone.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/parsley/parsley.extend.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "        </body>

    </html>
";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        ";
    }

    // line 17
    public function block_container($context, array $blocks = array())
    {
        echo "  
    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  89 => 17,  85 => 12,  82 => 11,  75 => 26,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  52 => 19,  50 => 17,  44 => 14,  39 => 13,  37 => 11,  33 => 10,  22 => 1,  106 => 59,  100 => 56,  97 => 55,  95 => 54,  88 => 50,  77 => 42,  74 => 41,  71 => 40,  32 => 3,  29 => 2,);
    }
}
