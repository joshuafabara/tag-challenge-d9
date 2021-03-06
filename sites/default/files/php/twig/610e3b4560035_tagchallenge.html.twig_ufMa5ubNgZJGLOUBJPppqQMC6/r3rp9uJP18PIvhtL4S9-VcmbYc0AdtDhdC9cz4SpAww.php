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
      <div class=\"tag-challenge--form-container\">
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
            <label for=\"subject\" class=\"form-label\">Subject*</label>
            <select class=\"form-input form-subject\" id=\"subject\" name=\"subject\" required>
              <option value=\"\">Select Subject</option>
              <option value=\"math\">Math</option>
              <option value=\"science\">Science</option>
              <option value=\"arts\">Arts</option>
              <option value=\"language_arts\">Language Arts</option>
            </select>
          </div>
          <div class=\"js-form-item form-item\">
            <label for=\"topic\" class=\"form-label\">Topic*</label>
            <select class=\"form-input form-topic\" id=\"topic\" name=\"topic\" required>
            </select>
          </div>
          <div class=\"js-form-item form-item\">
            <label for=\"timeslot\" class=\"form-label\">Class Timeslot*</label>
            <select class=\"form-input form-timeslot\" id=\"timeslot\" name=\"timeslot\" required>
            </select>
          </div>
          <div class=\"js-form-item form-item\">
            <input type=\"submit\" id=\"tag-challenge--submit\" value=\"Submit\">
          </div>
        </form>
      </div>
      <div class=\"tag-challenge--schedule-container\">
        <div class=\"tag-challenge--schedule\" id=\"tag-challenge--schedule\">
        </div>
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

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/tagchallenge/templates/tagchallenge.html.twig", "/app/modules/custom/tagchallenge/templates/tagchallenge.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
