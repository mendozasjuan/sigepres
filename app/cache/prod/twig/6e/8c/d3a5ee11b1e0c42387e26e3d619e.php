<?php

/* PrestamoBundle:Default:index.html.twig */
class __TwigTemplate_6e8cd3a5ee11b1e0c42387e26e3d619e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestamoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div>
      <table>
          <thead>
              <tr>
                  <th>Nacionalidad</th>
                  <th>Cedula</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Accion</th>
              </tr>
          </thead>
          <tbody>
              ";
        // line 17
        if (isset($context["personas"])) { $_personas_ = $context["personas"]; } else { $_personas_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_personas_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 18
            echo "              <tr>
                  <td>";
            // line 19
            if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "nacionalidad"), "html", null, true);
            echo "</td>
                  <td>";
            // line 20
            if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "cedula"), "html", null, true);
            echo "</td>
                  <td>";
            // line 21
            if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "nombre"), "html", null, true);
            echo "</td>
                  <td>";
            // line 22
            if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "apellidos"), "html", null, true);
            echo "</td>
                  <td>";
            // line 23
            if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "direccion"), "html", null, true);
            echo "</td>
                  <td>";
            // line 24
            if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_persona_, "Telefono"), "html", null, true);
            echo "</td>
                  <td><a href=\"";
            // line 25
            if (isset($context["persona"])) { $_persona_ = $context["persona"]; } else { $_persona_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestamo_id", array("persona_id" => $this->getAttribute($_persona_, "id"))), "html", null, true);
            echo "\">Ver Prestamos</a></td>
              </tr>
               ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "              <tr>
                <td colspan=\"4\">No existe Ninguna persona</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['persona'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "          </tbody>
      </table>

   </div>
";
    }

    public function getTemplateName()
    {
        return "PrestamoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
