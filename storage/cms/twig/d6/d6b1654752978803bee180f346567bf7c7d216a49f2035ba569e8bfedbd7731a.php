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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/pages/contact.htm */
class __TwigTemplate_9532ac72733f83b20317c269cb628086ebc0520580a9cf42a60a111937feb145 extends \Twig\Template
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
        echo "<!-- Head Section -->
<section class=\"page-section bg-dark-alfa-70 parallax-3\" data-background=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/section-bg-1.jpg");
        echo "\">
  <div class=\"relative container align-left\">

    <div class=\"row\">

      <div class=\"col-md-8\">
        <h1 class=\"hs-line-11 font-alt mb-20 mb-xs-0\">Contact</h1>
        <div class=\"hs-line-4 font-alt\">
          We’re always open to talk to good people
        </div>
      </div>

      <div class=\"col-md-4 mt-30\">
        <div class=\"mod-breadcrumbs font-alt align-right\">
          <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Home</a>&nbsp;/&nbsp;<span>Contact Us</span>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- End Head Section -->


<!-- Contact Section -->
<section class=\"page-section\" id=\"contact\">
  <div class=\"container relative\">

    <h2 class=\"section-title font-alt mb-70 mb-sm-40\">
      Have a questions?
    </h2>

    <div class=\"row mb-60 mb-xs-40\">

      <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"row\">

          <!-- Phone -->
          <div class=\"col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0\">
            <div class=\"contact-item\">
              <div class=\"ci-icon\">
                <i class=\"fa fa-phone\"></i>
              </div>
              <div class=\"ci-title font-alt\">
                Call Us
              </div>
              <div class=\"ci-text\">
                +63 123 456 7890
              </div>
            </div>
          </div>
          <!-- End Phone -->

          <!-- Address -->
          <div class=\"col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0\">
            <div class=\"contact-item\">
              <div class=\"ci-icon\">
                <i class=\"fa fa-map-marker\"></i>
              </div>
              <div class=\"ci-title font-alt\">
                Address
              </div>
              <div class=\"ci-text\">
                Manila Philippines
              </div>
            </div>
          </div>
          <!-- End Address -->

          <!-- Email -->
          <div class=\"col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0\">
            <div class=\"contact-item\">
              <div class=\"ci-icon\">
                <i class=\"fa fa-envelope\"></i>
              </div>
              <div class=\"ci-title font-alt\">
                Email
              </div>
              <div class=\"ci-text\">
                <a href=\"\">email@domain.com</a>
              </div>
            </div>
          </div>
          <!-- End Email -->

        </div>
      </div>

    </div>

    <!-- Contact Form -->
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">

        <form class=\"form contact-form\" id=\"contact_form\">
          <div class=\"clearfix\">

            <div class=\"cf-left-col\">

              <!-- Name -->
              <div class=\"form-group\">
                <input type=\"text\" name=\"name\" id=\"name\" class=\"input-md round form-control\" placeholder=\"Name\" pattern=\".{3,100}\" required>
              </div>

              <!-- Email -->
              <div class=\"form-group\">
                <input type=\"email\" name=\"email\" id=\"email\" class=\"input-md round form-control\" placeholder=\"Email\" pattern=\".{5,100}\" required>
              </div>

            </div>

            <div class=\"cf-right-col\">

              <!-- Message -->
              <div class=\"form-group\">
                <textarea name=\"message\" id=\"message\" class=\"input-md round form-control\" style=\"height: 84px;\" placeholder=\"Message\"></textarea>
              </div>

            </div>

          </div>

          <div class=\"clearfix\">

            <div class=\"cf-left-col\">

              <!-- Inform Tip -->
              <div class=\"form-tip pt-20\">
                <i class=\"fa fa-info-circle\"></i> All the fields are required
              </div>

            </div>

            <div class=\"cf-right-col\">

              <!-- Send Button -->
              <div class=\"align-right pt-10\">
                <button class=\"submit_btn btn btn-mod btn-medium btn-round\" id=\"submit_btn\">Submit Message</button>
              </div>

            </div>

          </div>



          <div id=\"result\"></div>
        </form>

      </div>
    </div>
    <!-- End Contact Form -->

  </div>
</section>
<!-- End Contact Section -->


<!-- Google Map -->
<!-- <div class=\"google-map\">

  <div data-address=\"Belt Parkway, Queens, NY, United States\" id=\"map-canvas\"></div>

  <div class=\"map-section\">

    <div class=\"map-toggle\">
      <div class=\"mt-icon\">
        <i class=\"fa fa-map-marker\"></i>
      </div>
      <div class=\"mt-text font-alt\">
        <div class=\"mt-open\">Open the map <i class=\"fa fa-angle-down\"></i></div>
        <div class=\"mt-close\">Close the map <i class=\"fa fa-angle-up\"></i></div>
      </div>
    </div>

  </div>

</div> -->
<!-- End Google Map -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Head Section -->
<section class=\"page-section bg-dark-alfa-70 parallax-3\" data-background=\"{{'/assets/images/full-width-images/section-bg-1.jpg'|theme }}\">
  <div class=\"relative container align-left\">

    <div class=\"row\">

      <div class=\"col-md-8\">
        <h1 class=\"hs-line-11 font-alt mb-20 mb-xs-0\">Contact</h1>
        <div class=\"hs-line-4 font-alt\">
          We’re always open to talk to good people
        </div>
      </div>

      <div class=\"col-md-4 mt-30\">
        <div class=\"mod-breadcrumbs font-alt align-right\">
          <a href=\"{{'index'|page}}\">Home</a>&nbsp;/&nbsp;<span>Contact Us</span>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- End Head Section -->


<!-- Contact Section -->
<section class=\"page-section\" id=\"contact\">
  <div class=\"container relative\">

    <h2 class=\"section-title font-alt mb-70 mb-sm-40\">
      Have a questions?
    </h2>

    <div class=\"row mb-60 mb-xs-40\">

      <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"row\">

          <!-- Phone -->
          <div class=\"col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0\">
            <div class=\"contact-item\">
              <div class=\"ci-icon\">
                <i class=\"fa fa-phone\"></i>
              </div>
              <div class=\"ci-title font-alt\">
                Call Us
              </div>
              <div class=\"ci-text\">
                +63 123 456 7890
              </div>
            </div>
          </div>
          <!-- End Phone -->

          <!-- Address -->
          <div class=\"col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0\">
            <div class=\"contact-item\">
              <div class=\"ci-icon\">
                <i class=\"fa fa-map-marker\"></i>
              </div>
              <div class=\"ci-title font-alt\">
                Address
              </div>
              <div class=\"ci-text\">
                Manila Philippines
              </div>
            </div>
          </div>
          <!-- End Address -->

          <!-- Email -->
          <div class=\"col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0\">
            <div class=\"contact-item\">
              <div class=\"ci-icon\">
                <i class=\"fa fa-envelope\"></i>
              </div>
              <div class=\"ci-title font-alt\">
                Email
              </div>
              <div class=\"ci-text\">
                <a href=\"\">email@domain.com</a>
              </div>
            </div>
          </div>
          <!-- End Email -->

        </div>
      </div>

    </div>

    <!-- Contact Form -->
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">

        <form class=\"form contact-form\" id=\"contact_form\">
          <div class=\"clearfix\">

            <div class=\"cf-left-col\">

              <!-- Name -->
              <div class=\"form-group\">
                <input type=\"text\" name=\"name\" id=\"name\" class=\"input-md round form-control\" placeholder=\"Name\" pattern=\".{3,100}\" required>
              </div>

              <!-- Email -->
              <div class=\"form-group\">
                <input type=\"email\" name=\"email\" id=\"email\" class=\"input-md round form-control\" placeholder=\"Email\" pattern=\".{5,100}\" required>
              </div>

            </div>

            <div class=\"cf-right-col\">

              <!-- Message -->
              <div class=\"form-group\">
                <textarea name=\"message\" id=\"message\" class=\"input-md round form-control\" style=\"height: 84px;\" placeholder=\"Message\"></textarea>
              </div>

            </div>

          </div>

          <div class=\"clearfix\">

            <div class=\"cf-left-col\">

              <!-- Inform Tip -->
              <div class=\"form-tip pt-20\">
                <i class=\"fa fa-info-circle\"></i> All the fields are required
              </div>

            </div>

            <div class=\"cf-right-col\">

              <!-- Send Button -->
              <div class=\"align-right pt-10\">
                <button class=\"submit_btn btn btn-mod btn-medium btn-round\" id=\"submit_btn\">Submit Message</button>
              </div>

            </div>

          </div>



          <div id=\"result\"></div>
        </form>

      </div>
    </div>
    <!-- End Contact Form -->

  </div>
</section>
<!-- End Contact Section -->


<!-- Google Map -->
<!-- <div class=\"google-map\">

  <div data-address=\"Belt Parkway, Queens, NY, United States\" id=\"map-canvas\"></div>

  <div class=\"map-section\">

    <div class=\"map-toggle\">
      <div class=\"mt-icon\">
        <i class=\"fa fa-map-marker\"></i>
      </div>
      <div class=\"mt-text font-alt\">
        <div class=\"mt-open\">Open the map <i class=\"fa fa-angle-down\"></i></div>
        <div class=\"mt-close\">Close the map <i class=\"fa fa-angle-up\"></i></div>
      </div>
    </div>

  </div>

</div> -->
<!-- End Google Map -->", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/contact.htm", "");
    }
}
