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

/* /Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/underConstruction.htm */
class __TwigTemplate_d62cbc979b44110856e1541957dea685390af6be2c9be1687c42b6475b6f391d extends \Twig\Template
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
<section class=\"home-section bg-dark-alfa-90 parallax-2\" data-background=\"images/full-width-images/section-bg-4.jpg\">
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
        return "/Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/underConstruction.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Home Section -->
<section class=\"home-section bg-dark-alfa-90 parallax-2\" data-background=\"images/full-width-images/section-bg-4.jpg\">
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
<!-- End Home Section -->", "/Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/underConstruction.htm", "");
    }
}
