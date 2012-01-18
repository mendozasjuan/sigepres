<?php

/* PrestamoBundle:Persona:index.html.twig */
class __TwigTemplate_33dfbb13698af69195cbfac78a6f5d24 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "personas"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["persona"]) {
            // line 18
            echo "              <tr>
                  <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persona"), "nacionalidad"), "html", null, true);
            echo "</td>
                  <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persona"), "cedula"), "html", null, true);
            echo "</td>
                  <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persona"), "nombre"), "html", null, true);
            echo "</td>
                  <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persona"), "apellidos"), "html", null, true);
            echo "</td>
                  <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persona"), "direccion"), "html", null, true);
            echo "</td>
                  <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "persona"), "Telefono"), "html", null, true);
            echo "</td>
                  <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestamo_id", array("persona_id" => $this->getAttribute($this->getContext($context, "persona"), "id"))), "html", null, true);
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
        return "PrestamoBundle:Persona:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
