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

/* themes/custom/sahaj_marg/templates/page/page.html.twig */
class __TwigTemplate_4b7f499c4cfdabbb252bdf4333cf830ea1c978955fd3f213924435e4764558bf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'highlighted' => [$this, 'block_highlighted'],
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 54, "if" => 56, "block" => 59];
        $filters = ["escape" => 60];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'block'],
                ['escape'],
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
        // line 54
        $this->loadTemplate("@sahaj_marg/system/header.html.twig", "themes/custom/sahaj_marg/templates/page/page.html.twig", 54)->display($context);
        // line 55
        echo " ";
        // line 56
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 57
            echo "    <div class=\"container\">
      <div class=\"row\">
    ";
            // line 59
            $this->displayBlock('highlighted', $context, $blocks);
            // line 62
            echo "    </div>
  </div>
  ";
        }
        // line 65
        echo "
";
        // line 67
        $this->displayBlock('main', $context, $blocks);
        // line 84
        echo "
";
        // line 85
        $this->loadTemplate("@sahaj_marg/system/footer.html.twig", "themes/custom/sahaj_marg/templates/page/page.html.twig", 85)->display($context);
        // line 86
        echo "    ";
    }

    // line 59
    public function block_highlighted($context, array $blocks = [])
    {
        // line 60
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "
    ";
    }

    // line 67
    public function block_main($context, array $blocks = [])
    {
        // line 68
        echo "  <div role=\"main\" class=\"main-container js-quickedit-main-content\">
    <div class=\"main-container-content\">

      ";
        // line 72
        echo "      <section class=\"content-section\">     
        ";
        // line 74
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "      </section>

      
    </div>
  </div>
";
    }

    // line 74
    public function block_content($context, array $blocks = [])
    {
        // line 75
        echo "          <a id=\"main-content\"></a>
          <div class=\"main-content\">";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "</div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/sahaj_marg/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 76,  126 => 75,  123 => 74,  114 => 78,  111 => 74,  108 => 72,  103 => 68,  100 => 67,  93 => 60,  90 => 59,  86 => 86,  84 => 85,  81 => 84,  79 => 67,  76 => 65,  71 => 62,  69 => 59,  65 => 57,  62 => 56,  60 => 55,  58 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sahaj_marg/templates/page/page.html.twig", "D:\\xampp\\htdocs\\drupal\\drupal-8.7.3\\themes\\custom\\sahaj_marg\\templates\\page\\page.html.twig");
    }
}
