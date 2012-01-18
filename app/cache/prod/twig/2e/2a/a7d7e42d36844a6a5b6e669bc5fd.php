<?php

/* PrestamoBundle::layout.html.twig */
class __TwigTemplate_2e2aa7d7e42d36844a6a5b6e669bc5fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "  <h1><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("portada"), "html", null, true);
        echo "\">Sistema de Gestion de Prestamos</a></h1>

  <nav>
  <ul>
    <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("persona"), "html", null, true);
        echo "\">Personas</a></li>
    <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestamo"), "html", null, true);
        echo "\">Prestamos</a></li>
  </ul>
  </nav>
";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "  
";
    }

    public function getTemplateName()
    {
        return "PrestamoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
