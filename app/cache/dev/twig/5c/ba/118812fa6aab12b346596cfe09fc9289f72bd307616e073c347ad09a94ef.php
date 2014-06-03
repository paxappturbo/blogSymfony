<?php

/* ::layout.html.twig */
class __TwigTemplate_5cba118812fa6aab12b346596cfe09fc9289f72bd307616e073c347ad09a94ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
    <div class=\"container theme-showcase\">
      <div id=\"header\" class=\"jumbotron\">
        <h1>Mon Projet Symfony2</h1>
        <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2\">
          Lire le tutoriel »
        </a></p>
      </div>

      <div class=\"row\">
        <div id=\"menu\" class=\"col-md-4\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("paxblog_accueil");
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("paxblog_ajouter");
        echo "\">Ajouter un article</a></li>
          </ul>
                    
          ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PaxBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"col-md-8\">
          ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p>The sky's the limit © 2012 and beyond.</p>
      </footer>
    </div>

  ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "
  </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Pax";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      ";
        // line 12
        echo "      <link rel=\"stylesheet\" href=\"http://getbootstrap.com/dist/css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\"http://getbootstrap.com/dist/css/bootstrap-theme.min.css\">
    ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "          ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        // line 52
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 53,  123 => 52,  121 => 51,  118 => 50,  114 => 39,  111 => 38,  105 => 12,  103 => 11,  100 => 10,  94 => 8,  88 => 56,  86 => 50,  72 => 38,  38 => 15,  36 => 10,  31 => 8,  23 => 2,  63 => 18,  60 => 32,  55 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  81 => 23,  74 => 40,  66 => 35,  62 => 17,  56 => 31,  53 => 15,  48 => 14,  42 => 10,  39 => 9,  32 => 6,  29 => 5,);
    }
}
