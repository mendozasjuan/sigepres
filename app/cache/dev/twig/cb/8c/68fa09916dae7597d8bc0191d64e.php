<?php

/* PrestamoBundle:Prestamo:index.html.twig */
class __TwigTemplate_cb8c68fa09916dae7597d8bc0191d64e extends Twig_Template
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
        echo "  <div>
      <table>
          <thead>
              <tr>
                  <th>Cantidad</th>
                  <th>Fecha</th>
                  <th>Porcentaje</th>
                  <th>Cancelo</th>
              </tr>
          </thead>
          <tbody>
              ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "prestamo"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["prestamos"]) {
            // line 15
            echo "              <tr>
                  <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prestamos"), "cantidad"), "html", null, true);
            echo "</td>
                  <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, "prestamos"), "fecha"), "d M"), "html", null, true);
            echo "</td>
                  <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prestamos"), "porcentaje"), "html", null, true);
            echo "</td>
                  <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prestamos"), "cancelo"), "html", null, true);
            echo "</td>
              </tr>
               ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "              <tr>
                <td colspan=\"4\">No existe Ningun prestamo</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prestamos'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "          </tbody>
      </table>

   </div>
";
    }

    public function getTemplateName()
    {
        return "PrestamoBundle:Prestamo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
