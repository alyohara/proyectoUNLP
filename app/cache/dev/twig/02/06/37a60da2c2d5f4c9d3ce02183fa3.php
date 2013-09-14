<?php

/* LoginLoginBundle:Default:login.html.twig */
class __TwigTemplate_020637a60da2c2d5f4c9d3ce02183fa3 extends Twig_Template
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
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #FFF;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin -form-signin-heading,
        .form-signin .checkbox{
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"]{
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }



    </style>

    ";
    }

    // line 40
    public function block_container($context, array $blocks = array())
    {
        // line 41
        echo "    <div class=\"container\" >
        <form class=\"form-signin\" method=\"POST\" action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_homepage"), "html", null, true);
        echo "\" data-validate=\"parsley\">
            <h2 class=\"form-signin-heading\">Please Sign In </h2>
            <input type=\"text\" class=\"input-block-level\" name=\"username\" placeholder=\"Email Adress\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\"/>
            <input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Password\" data-trigger=\"change\" data-required=\"true\" />
            <label class=\"checkbox\">
                <input type=\"checkbox\" name=\"remeber\" value=\"remeber-me\"/>Remember Me 
            </label>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in </button>
            <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_signup"), "html", null, true);
        echo "\">Sign Up</a>
        </form>
    </div>

";
        // line 54
        if (array_key_exists("name", $context)) {
            // line 55
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 56
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</strong>
    </div>
 ";
        }
        // line 59
        echo "    ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 59,  100 => 56,  97 => 55,  95 => 54,  88 => 50,  77 => 42,  74 => 41,  71 => 40,  32 => 3,  29 => 2,);
    }
}
