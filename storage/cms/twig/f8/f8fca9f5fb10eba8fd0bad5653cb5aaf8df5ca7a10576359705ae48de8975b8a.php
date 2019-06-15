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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/pages/underConstruction.htm */
class __TwigTemplate_36e6cb316ae8839fb92ac4035aee0a5a4d97722125baf4459adcc53eca7f6823 extends \Twig\Template
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
  <section class=\"page-section bg-dark-alfa-50 parallax-3\" data-background=\"";
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

            <div class=\"hs-line-12 font-alt mb-10\">
              Sorry
            </div>

            <div class=\"hs-line-6 no-transp font-alt mb-40\">
              We are currently under construction!
            </div>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mi urna, vehicula aliquam dapibus ornare, semper semper nisl.
            </p>

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
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/underConstruction.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Home Section -->
  <section class=\"page-section bg-dark-alfa-50 parallax-3\" data-background=\"{{'/assets/images/full-width-images/section-bg-1.jpg'|theme }}\">
  <div class=\"js-height-full\">

    <!-- Hero Content -->
    <div class=\"home-content container\">
      <div class=\"home-text\">
        <div class=\"hs-cont\">

          <!-- Headings -->
          <div class=\"hs-wrap\">

            <div class=\"hs-line-12 font-alt mb-10\">
              Sorry
            </div>

            <div class=\"hs-line-6 no-transp font-alt mb-40\">
              We are currently under construction!
            </div>

            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mi urna, vehicula aliquam dapibus ornare, semper semper nisl.
            </p>

          </div>
          <!-- End Headings -->

        </div>
      </div>
    </div>
    <!-- End Hero Content -->

  </div>
</section>
<!-- End Home Section -->", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/underConstruction.htm", "");
    }
}
