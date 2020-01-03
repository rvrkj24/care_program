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

/* @sahaj_marg/system/header.html.twig */
class __TwigTemplate_d4215eef0c98b5a34a456dc16b865bda3ddb1b5c1218217bf3a4d90f5407fde3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4, "block" => 35, "set" => 37];
        $filters = ["escape" => 6, "clean_class" => 40];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'set'],
                ['escape', 'clean_class'],
                []
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
        // line 1
        echo "<div id='top-header'>
  <div class='container-fluid'>
    <div class='top-header-content'>
      ";
        // line 4
        if ($this->getAttribute(($context["page"] ?? null), "followus", [])) {
            // line 5
            echo "      <div id=\"followus\" class=\"followus-section p-1 col\">
        ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "followus", [])), "html", null, true);
            echo "
      </div>
      ";
        }
        // line 9
        echo "    </div>
  </div>
</div>




<div class=\"navlogosearch\">
  <div class=\"container-fluid\">
    <div class=\"row\">

      <div id=\"logo-header\" class=\"col-xl-2 col-lg-9 col-md-8 col-sm-8 col-4 order-xl-1 order-lg-2 order-md-2 order-2\">
        ";
        // line 21
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 22
            echo "        <div id=\"branding\" class=\"branding-section text-center\">
          ";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
        </div>
        ";
        }
        // line 26
        echo "      </div>



      ";
        // line 31
        echo "      <div id=\"main-navigation\" class=\"col-xl-9 col-lg-2 col-md-2 col-sm-2 col-4 order-lg-1 order-md-1 order-sm-1 order-1\">
        <div class=\"responsive-navbar\">
          <div class=\"row main-navigation-content\">
            ";
        // line 34
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 35
            echo "            ";
            $this->displayBlock('navbar', $context, $blocks);
            // line 57
            echo "            ";
        }
        // line 58
        echo "          </div>
        </div>
      </div>
      <div class=\"search-bar-trigger col order-3\"><span class=\"search-icon-container\"><div class=\"search-content\"></div></span><span
          class=\"close-icon-container\"><div class=\"close-search\"></div></span></div>
    </div>
  </div>
</div>
";
    }

    // line 35
    public function block_navbar($context, array $blocks = [])
    {
        // line 36
        echo "            ";
        // line 37
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 39
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 40
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 43
        echo "            <header ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">

              <div class=\"navbar-header\">
                ";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
              </div>

              ";
        // line 50
        echo "              ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 51
            echo "              <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
                ";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
              </div>
              ";
        }
        // line 55
        echo "            </header>
            ";
    }

    public function getTemplateName()
    {
        return "@sahaj_marg/system/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 55,  156 => 52,  153 => 51,  150 => 50,  144 => 46,  137 => 43,  135 => 40,  134 => 39,  133 => 37,  131 => 36,  128 => 35,  116 => 58,  113 => 57,  110 => 35,  108 => 34,  103 => 31,  97 => 26,  91 => 23,  88 => 22,  86 => 21,  72 => 9,  66 => 6,  63 => 5,  61 => 4,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@sahaj_marg/system/header.html.twig", "D:\\xampp\\htdocs\\drupal\\drupal-8.7.3\\themes\\custom\\sahaj_marg\\templates\\system\\header.html.twig");
    }
}
