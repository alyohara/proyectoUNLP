<?php

/* LoginLoginBundle:Default:welcome.html.twig */
class __TwigTemplate_e044e405574269045b469f2cbead1ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
    }

    // line 6
    public function block_container($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"container\" >
    <h2>Hello ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h2>
</div>
<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_logout"), "html", null, true);
        echo "\">Logout</a>


    ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  43 => 8,  40 => 7,  37 => 6,  32 => 3,  29 => 2,);
    }
}
