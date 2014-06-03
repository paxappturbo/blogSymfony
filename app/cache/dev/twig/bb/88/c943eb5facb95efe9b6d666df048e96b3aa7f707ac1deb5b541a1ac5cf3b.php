<?php

/* PaxBlogBundle:Default:index.html.twig */
class __TwigTemplate_bb88c943eb5facb95efe9b6d666df048e96b3aa7f707ac1deb5b541a1ac5cf3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<html>
    <body>
    Hello ";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
    </body>
</body>
";
    }

    public function getTemplateName()
    {
        return "PaxBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
