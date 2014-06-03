<?php

/* PaxBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_ff583522c2752c0c4c1a3fd0c04d228e78b0c23edfad5999366272f35cd9638c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PaxBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'paxblog_body' => array($this, 'block_paxblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PaxBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Ajouter - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_paxblog_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <h2>Ajouter</h2>


<h3>Formulaire d'article</h3>

<div class=\"well\">
  <form  role=\"form\" method=\"post\" ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">

";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

<div class=\"form-group\">
  ";
        // line 24
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'label', array("label" => "Titre de l'article"));
        echo "

  ";
        // line 27
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'errors');
        echo "

  ";
        // line 30
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "titre"), 'widget');
        echo "
</div>

";
        // line 34
        echo "<div class=\"form-group\">
  ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'label', array("label" => "Contenu de l'article"));
        echo "
  ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'errors');
        echo "
  ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "contenu"), 'widget');
        echo "
</div>

";
        // line 44
        echo "<div class=\"form-group\">
   ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
</div>

</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "PaxBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 45,  98 => 44,  92 => 37,  88 => 36,  84 => 35,  81 => 34,  74 => 30,  68 => 27,  62 => 24,  56 => 20,  51 => 17,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
