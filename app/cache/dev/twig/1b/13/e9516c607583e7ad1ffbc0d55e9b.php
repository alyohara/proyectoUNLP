<?php

/* LoginLoginBundle:Default:signup.html.twig */
class __TwigTemplate_1b13e9516c607583e7ad1ffbc0d55e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
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
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\" >
    <form id=\"form\"  class=\"well\" method=\"POST\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_signup"), "html", null, true);
        echo "\" data-validate=\"parsley\">
        
        <h2>Signup </h2>
        <label>Username</label>
        <input type=\"text\" id=\"username\" name=\"username\" class=\"input-xlarge\" value=\"\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\"/>
        <label>Repeat Username</label>
        <input type=\"text\" name=\"usernameRe\" class=\"input-xlarge\" value=\"\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" data-equalto=\"#username\"/>
        <label>First Name</label>
        <input type=\"text\" name=\"firstname\" class=\"input-xlarge\" value=\"\" data-trigger=\"change\" data-required=\"true\" />
        <label>Password</label>
        <input type=\"password\" name=\"password\" class=\"input-xlarge\" value=\"\" data-trigger=\"change\" data-required=\"true\" />
        <div>
            <button class=\"btn btn-primary\" type=\"submit\" >Create Account</button>
        </div>
    </form>
</div>

";
        // line 21
        if (array_key_exists("name", $context)) {
            // line 22
            echo "<div class=\"alert-info fade in\">
    <strong>Hello ";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</strong>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  56 => 22,  54 => 21,  34 => 4,  31 => 3,  28 => 2,);
    }
}
