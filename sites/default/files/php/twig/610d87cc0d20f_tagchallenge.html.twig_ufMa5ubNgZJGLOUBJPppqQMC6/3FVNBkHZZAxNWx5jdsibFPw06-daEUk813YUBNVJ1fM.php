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

/* modules/custom/tagchallenge/templates/tagchallenge.html.twig */
class __TwigTemplate_1ed4b26924f0a967a9cf9f98f51d748ad1c254e8456df60faa0b618636557b49 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!-- Add you custom twig html here -->
<section class=\"tag-challenge\">
  <h2>Student Schedule Registration</h2>
  <div class=\"tag-challenge--container\">
    <div class=\"tag-challenge--inner-container\">
      ";
        // line 6
        if (($context["topics"] ?? null)) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["topics"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
                // line 8
                echo "          <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["topic"], "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "      ";
        }
        // line 11
        echo "      <div>
        <form>
          <div class=\"js-form-item form-item\">
            <label for=\"username\" class=\"form-label\">Username*</label>
            <input class=\"form-input form-username\" type=\"text\" id=\"username\" name=\"email\" value=\"\" required>
          </div>
          <div class=\"js-form-item form-item\">
            <label for=\"email\" class=\"form-label\">Email*</label>
            <input class=\"form-input form-email\" type=\"email\" id=\"email\" name=\"email\" value=\"\" required>
          </div>
          <div class=\"js-form-item form-item\">
            <input type=\"submit\" id=\"tag-challenge--submit\" value=\"Submit\">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/tagchallenge/templates/tagchallenge.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  62 => 10,  53 => 8,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/tagchallenge/templates/tagchallenge.html.twig", "/app/modules/custom/tagchallenge/templates/tagchallenge.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6, "for" => 7);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
