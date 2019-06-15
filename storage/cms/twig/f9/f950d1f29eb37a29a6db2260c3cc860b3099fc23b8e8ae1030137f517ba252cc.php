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

/* /Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/404.htm */
class __TwigTemplate_6da08b001cb7bde9fa76da04dd677fca4bf3cd459baa923132a981dc8dad6be6 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!-- Home Section -->
<section class=\"home-section bg-dark-alfa-50 parallax-2\" data-background=\"i";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/section-bg-1.jpg");
        echo "\">
  <div class=\"js-height-full\">

    <!-- Hero Content -->
    <div class=\"home-content container\">
      <div class=\"home-text\">
        <div class=\"hs-cont\">

          <!-- Headings -->
          <div class=\"hs-wrap\">

            <div class=\"hs-line-13 font-alt mb-10\">
              404
            </div>

            <div class=\"hs-line-4 font-alt mb-40\">
              The page you were looking for could not be found.
            </div>

            <div class=\"local-scroll\">
              <a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\" class=\"btn btn-mod btn-w btn-round btn-small\"><i class=\"fa fa-angle-left\"></i> Back To Home Page</a>
            </div>

          </div>
          <!-- End Headings -->

        </div>
      </div>
    </div>
    <!-- End Hero Content -->

  </div>
</section>
<!-- End Home Section -->";
    }

    public function getTemplateName()
    {
        return "/Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Home Section -->
<section class=\"home-section bg-dark-alfa-50 parallax-2\" data-background=\"i{{'/assets/images/full-width-images/section-bg-1.jpg'|theme }}\">
  <div class=\"js-height-full\">

    <!-- Hero Content -->
    <div class=\"home-content container\">
      <div class=\"home-text\">
        <div class=\"hs-cont\">

          <!-- Headings -->
          <div class=\"hs-wrap\">

            <div class=\"hs-line-13 font-alt mb-10\">
              404
            </div>

            <div class=\"hs-line-4 font-alt mb-40\">
              The page you were looking for could not be found.
            </div>

            <div class=\"local-scroll\">
              <a href=\"{{'index'|page}}\" class=\"btn btn-mod btn-w btn-round btn-small\"><i class=\"fa fa-angle-left\"></i> Back To Home Page</a>
            </div>

          </div>
          <!-- End Headings -->

        </div>
      </div>
    </div>
    <!-- End Hero Content -->

  </div>
</section>
<!-- End Home Section -->", "/Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/404.htm", "");
    }
}
