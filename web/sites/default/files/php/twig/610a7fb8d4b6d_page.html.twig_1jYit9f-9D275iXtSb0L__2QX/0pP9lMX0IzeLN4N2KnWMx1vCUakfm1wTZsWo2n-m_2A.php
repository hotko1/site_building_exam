<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/exam/templates/page.html.twig */
class __TwigTemplate_86ed331c85204aefa7dd86d7b702c2274d09b2362604fe503b40b9f9089c012f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 93
        echo "
";
        // line 95
        $this->displayBlock('main', $context, $blocks);
        // line 160
        echo "
";
        // line 161
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 161)) {
            // line 162
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default"))];
        // line 64
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 65
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 65)) {
            // line 66
            echo "        <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 66, $this->source), "html", null, true));
            echo "\">
      ";
        }
        // line 68
        echo "      <div class=\"navbar-header\">
        ";
        // line 69
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 69), 69, $this->source), "html", null, true));
        echo "
        ";
        // line 71
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 71)) {
            // line 72
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 73
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 79
        echo "      </div>

      ";
        // line 82
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 82)) {
            // line 83
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 84
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 84), 84, $this->source), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 87
        echo "      ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method", false, false, true, 87)) {
            // line 88
            echo "        </div>
      ";
        }
        // line 90
        echo "    </header>
  ";
    }

    // line 95
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 96, $this->source), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 100
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 100)) {
            // line 101
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 106
            echo "      ";
        }
        // line 107
        echo "
      ";
        // line 109
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 109)) {
            // line 110
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 115
            echo "      ";
        }
        // line 116
        echo "
      ";
        // line 118
        echo "      ";
        // line 119
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 120
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 120) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 120))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 121
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 121) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 121)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 122
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 122) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 122)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 123
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 123)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 123)))) ? ("col-sm-12") : (""))];
        // line 126
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 126), 126, $this->source), "html", null, true));
        echo ">

        ";
        // line 129
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 129)) {
            // line 130
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 133
            echo "        ";
        }
        // line 134
        echo "
        ";
        // line 136
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 136)) {
            // line 137
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 140
            echo "        ";
        }
        // line 141
        echo "
        ";
        // line 143
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 147
        echo "      </section>

      ";
        // line 150
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 150)) {
            // line 151
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 156
            echo "      ";
        }
        // line 157
        echo "    </div>
  </div>
";
    }

    // line 101
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 103), 103, $this->source), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 110
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 111
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 112
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 112), 112, $this->source), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 130
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 131), 131, $this->source), "html", null, true));
        echo "</div>
          ";
    }

    // line 137
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 138), 138, $this->source), "html", null, true));
        echo "
          ";
    }

    // line 143
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 144
        echo "          <a id=\"main-content\"></a>
          ";
        // line 145
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 145), 145, $this->source), "html", null, true));
        echo "
        ";
    }

    // line 151
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 153), 153, $this->source), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 162
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 163
        echo "    <footer class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 163, $this->source), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 164
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 164), 164, $this->source), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 164,  320 => 163,  316 => 162,  309 => 153,  306 => 152,  302 => 151,  296 => 145,  293 => 144,  289 => 143,  282 => 138,  278 => 137,  271 => 131,  267 => 130,  260 => 112,  257 => 111,  253 => 110,  246 => 103,  243 => 102,  239 => 101,  233 => 157,  230 => 156,  227 => 151,  224 => 150,  220 => 147,  217 => 143,  214 => 141,  211 => 140,  208 => 137,  205 => 136,  202 => 134,  199 => 133,  196 => 130,  193 => 129,  187 => 126,  185 => 123,  184 => 122,  183 => 121,  182 => 120,  181 => 119,  179 => 118,  176 => 116,  173 => 115,  170 => 110,  167 => 109,  164 => 107,  161 => 106,  158 => 101,  155 => 100,  148 => 96,  144 => 95,  139 => 90,  135 => 88,  132 => 87,  126 => 84,  123 => 83,  120 => 82,  116 => 79,  107 => 73,  104 => 72,  101 => 71,  97 => 69,  94 => 68,  88 => 66,  86 => 65,  81 => 64,  79 => 61,  78 => 59,  76 => 58,  72 => 57,  66 => 162,  64 => 161,  61 => 160,  59 => 95,  56 => 93,  52 => 57,  50 => 56,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/exam/templates/page.html.twig", "/var/www/web/themes/custom/exam/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("escape" => 64, "t" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
