<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/sahaj_marg/templates/menu/menu--main.html.twig */
class __TwigTemplate_47ecf036f93543df23ba11bf88aa16010312f445c8b91a0e3e5ab81540de1382 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 54, "for" => 56, "set" => 57, "macro" => 21];
        $filters = ["escape" => 20];
        $functions = ["devel_breakpoint" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set', 'macro'],
                ['escape'],
                ['devel_breakpoint']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\devel\Twig\Extension\Debug')->breakpoint($this->env, $context), "html", null, true);
        echo "
";
        // line 47
        echo "
<nav class=\"navbar navbar-expand-xl sahajmarg-hover-menu custom-carets\">
<div class=\"header-menu\">
<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
<span class=\"navbar-toggler-icon\"></span>
</button>
  <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
  \t";
        // line 54
        if (($context["items"] ?? null)) {
            // line 55
            echo "      <ul class=\"navbar-nav\">
      \t ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 57
                echo "          ";
                $context["active_class"] = (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("is-active") : (""));
                // line 58
                echo "      \t";
                if ((((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", [])) && $this->getAttribute($context["item"], "below", []))) {
                    // line 59
                    echo "      \t\t<li class=\"nav-item dropdown\">
      \t\t\t<a class=\"nav-link smd-link dropdown-toggle ";
                    // line 60
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null)), "html", null, true);
                    echo "\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  ";
                    // line 61
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo "
              </a>
              ";
                    // line 63
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 64
                        echo "                ";
                        $context["child_link"] = ["title" => $this->getAttribute($context["item"], "title", []), "url" => $this->getAttribute($context["item"], "url", [])];
                        // line 65
                        echo "\t\t\t\t        ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => $this->getAttribute($context["item"], "below", []), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null), 4 => ($context["child_link"] ?? null)], "method")));
                        echo "
\t\t\t\t      ";
                    }
                    // line 67
                    echo "      \t\t</li>
      \t";
                } else {
                    // line 69
                    echo "      \t\t<li class=\"nav-item\">
              <a class=\"nav-link ";
                    // line 70
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null)), "html", null, true);
                    echo "\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                    echo " </a>
          </li>
      \t";
                }
                // line 73
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "      </ul>
  \t";
        }
        // line 76
        echo "  </div>
  </div>
</nav>";
    }

    // line 21
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, $__child_link__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "child_link" => $__child_link__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 22
            echo "\t";
            if (($context["items"] ?? null)) {
                // line 23
                echo "\t\t<ul class=\"dropdown-menu\">
      <li class=\"d-xl-none\"><a href=\"";
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["child_link"] ?? null), "url", [])), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["child_link"] ?? null), "title", [])), "html", null, true);
                echo "</a> </li>
      \t ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 26
                    echo "          ";
                    $context["active_class"] = (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("is-active") : (""));
                    // line 27
                    echo "      \t";
                    if (($this->getAttribute($context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", []))) {
                        // line 28
                        echo "      \t\t<li>

      \t\t\t<a  class=\"dropdown-item smd-link dropdown-toggle ";
                        // line 30
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null)), "html", null, true);
                        echo "\" href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                        echo "\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  ";
                        // line 31
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo "
              </a>
              ";
                        // line 33
                        if ($this->getAttribute($context["item"], "below", [])) {
                            // line 34
                            echo "                 ";
                            $context["child_link"] = ["title" => $this->getAttribute($context["item"], "title", []), "url" => $this->getAttribute($context["item"], "url", [])];
                            // line 35
                            echo "\t\t\t\t        ";
                            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => $this->getAttribute($context["item"], "below", []), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null), 4 => ($context["child_link"] ?? null)], "method")));
                            echo "
\t\t\t\t      ";
                        }
                        // line 37
                        echo "      \t\t</li>
      \t";
                    } else {
                        // line 39
                        echo "      \t\t<li>
              <a class=\"dropdown-item ";
                        // line 40
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["active_class"] ?? null)), "html", null, true);
                        echo "\" href=\"";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                        echo "\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), "html", null, true);
                        echo " </a>
          </li>
      \t";
                    }
                    // line 43
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "      </ul>
\t";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/sahaj_marg/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 44,  222 => 43,  212 => 40,  209 => 39,  205 => 37,  199 => 35,  196 => 34,  194 => 33,  189 => 31,  183 => 30,  179 => 28,  176 => 27,  173 => 26,  169 => 25,  163 => 24,  160 => 23,  157 => 22,  141 => 21,  135 => 76,  131 => 74,  125 => 73,  115 => 70,  112 => 69,  108 => 67,  102 => 65,  99 => 64,  97 => 63,  92 => 61,  86 => 60,  83 => 59,  80 => 58,  77 => 57,  73 => 56,  70 => 55,  68 => 54,  59 => 47,  55 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sahaj_marg/templates/menu/menu--main.html.twig", "D:\\xampp\\htdocs\\drupal\\drupal-8.7.3\\themes\\custom\\sahaj_marg\\templates\\menu\\menu--main.html.twig");
    }
}
