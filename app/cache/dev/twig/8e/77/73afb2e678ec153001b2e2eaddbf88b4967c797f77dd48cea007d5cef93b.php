<?php

/* PaxBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_8e7773afb2e678ec153001b2e2eaddbf88b4967c797f77dd48cea007d5cef93b extends Twig_Template
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
        // line 2
        echo "
<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "liste_articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paxblog_voir", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "PaxBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  126 => 53,  123 => 52,  121 => 51,  118 => 50,  114 => 39,  111 => 38,  105 => 12,  103 => 11,  100 => 10,  94 => 8,  88 => 56,  86 => 50,  72 => 38,  38 => 15,  36 => 10,  31 => 8,  23 => 2,  63 => 18,  60 => 32,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  81 => 23,  74 => 40,  66 => 35,  62 => 17,  56 => 31,  53 => 15,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 7,);
    }
}
