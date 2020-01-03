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

/* themes/custom/sahaj_marg/templates/menu/menu--account.html.twig */
class __TwigTemplate_102ce61c117f61aee2630b030076f979bd3c278f412a67b37c72558190ef7018 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 25];
        $filters = ["escape" => 28];
        $functions = ["url" => 32];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                ['url']
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
        // line 18
        echo "

<div class=\"user-profile-account\">
 <nav class=\"navbar navbar-expand-lg navbar-light bg-light\"> 
 
  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
        ";
        // line 25
        if (($context["user_display_name"] ?? null)) {
            // line 26
            echo "      <li class=\"nav-item dropdown user-pro\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_display_name"] ?? null)), "html", null, true);
            echo "          
        </a>
        <div class=\"dropdown-menu submenuitems\" aria-labelledby=\"navbarDropdown\">\t
          <a class=\"dropdown-item\" href=\"";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["my_account_url"] ?? null)), "html", null, true);
            echo "\" target=\"_blank\">My Account</a>
          <a class=\"dropdown-item useracc\" href=\"";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logout_redirect"] ?? null)), "html", null, true);
            echo "?next=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
            echo "/user/logout\">Logout</a>     
        </div>
      </li>       
        ";
        }
        // line 36
        echo "     
    </ul>
   
  </div>
 </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/sahaj_marg/templates/menu/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  80 => 32,  76 => 31,  70 => 28,  66 => 26,  64 => 25,  55 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/sahaj_marg/templates/menu/menu--account.html.twig", "D:\\xampp\\htdocs\\drupal\\drupal-8.7.3\\themes\\custom\\sahaj_marg\\templates\\menu\\menu--account.html.twig");
    }
}
