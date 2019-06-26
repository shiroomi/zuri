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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/pages/account.htm */
class __TwigTemplate_ab5dcd9f95dc571b3dcf08aa580fcd75859e8ac20dfdf7780d69bffbbdfe39a2 extends \Twig\Template
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
          <h1 class=\"hs-line-11 font-alt mb-20 mb-xs-0\">My Account</h1>
          <div class=\"hs-line-4 font-alt\">
            Lorem ipsum dolor sit amet, consectetur adipiscing
          </div>
        </div>

        <div class=\"col-md-4 mt-30\">
          <div class=\"mod-breadcrumbs font-alt align-right\">
            <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Home</a>&nbsp;/&nbsp;<span>My Account</span>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- End Head Section -->


  <!-- Section -->
  <section class=\"page-section\">
    <div class=\"container relative\">

      <!-- Nav Tabs -->
      <div class=\"align-center mb-40 mb-xxs-30\">
        <ul class=\"nav nav-tabs tpl-minimal-tabs\">

          <li class=\"active\">
            <a href=\"#mini-one\" data-toggle=\"tab\">Login</a>
          </li>

          <li>
            <a href=\"#mini-two\" data-toggle=\"tab\">Registration</a>
          </li>

        </ul>
      </div>
      <!-- End Nav Tabs -->

      <!-- Tab panes -->
      <div class=\"tab-content tpl-minimal-tabs-cont section-text\">

        <div class=\"tab-pane fade in active\" id=\"mini-one\">

          <!-- Login Form -->
          <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">

              <form class=\"form contact-form\" id=\"contact_form\">
                <div class=\"clearfix\">

                  <!-- Username -->
                  <div class=\"form-group\">
                    <input type=\"text\" name=\"username\" id=\"username\" class=\"input-md round form-control\" placeholder=\"Username\" pattern=\".{3,100}\" required>
                  </div>

                  <!-- Password -->
                  <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"input-md round form-control\" placeholder=\"Password\" pattern=\".{5,100}\" required>
                  </div>

                </div>

                <div class=\"clearfix\">

                  <div class=\"cf-left-col\">

                    <!-- Inform Tip -->
                    <div class=\"form-tip pt-20\">
                      <a href=\"\">Forgot Password?</a>
                    </div>

                  </div>

                  <div class=\"cf-right-col\">

                    <!-- Send Button -->
                    <div class=\"align-right pt-10\">
                      <button class=\"submit_btn btn btn-mod btn-medium btn-round\" id=\"login-btn\">Login</button>
                    </div>

                  </div>

                </div>

              </form>

            </div>
          </div>
          <!-- End Login Form -->

        </div>

        <div class=\"tab-pane fade\" id=\"mini-two\">

          <!-- Registry Form -->
          <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">

              <form class=\"form contact-form\" id=\"contact_form\">
                <div class=\"clearfix\">

                  <!-- Email -->
                  <div class=\"form-group\">
                    <input type=\"text\" name=\"Email\" id=\"Email\" class=\"input-md round form-control\" placeholder=\"Email\" pattern=\".{3,100}\" required>
                  </div>

                  <!-- Username -->
                  <div class=\"form-group\">
                    <input type=\"text\" name=\"username\" id=\"username\" class=\"input-md round form-control\" placeholder=\"Username\" pattern=\".{3,100}\" required>
                  </div>

                  <!-- Password -->
                  <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"input-md round form-control\" placeholder=\"Password\" pattern=\".{5,100}\" required>
                  </div>

                  <!-- Re-enter Password -->
                  <div class=\"form-group\">
                    <input type=\"password\" name=\"re-password\" id=\"re-password\" class=\"input-md round form-control\" placeholder=\"Re-enter Password\" pattern=\".{5,100}\" required>
                  </div>

                </div>

                <!-- Send Button -->
                <div class=\"pt-10\">
                  <button class=\"submit_btn btn btn-mod btn-medium btn-round btn-full\" id=\"reg-btn\">Register</button>
                </div>

              </form>

            </div>
          </div>
          <!-- End Registry Form -->

        </div>

      </div>

    </div>
  </section>
  <!-- End Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/account.htm";
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
          <h1 class=\"hs-line-11 font-alt mb-20 mb-xs-0\">My Account</h1>
          <div class=\"hs-line-4 font-alt\">
            Lorem ipsum dolor sit amet, consectetur adipiscing
          </div>
        </div>

        <div class=\"col-md-4 mt-30\">
          <div class=\"mod-breadcrumbs font-alt align-right\">
            <a href=\"{{'index'|page}}\">Home</a>&nbsp;/&nbsp;<span>My Account</span>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- End Head Section -->


  <!-- Section -->
  <section class=\"page-section\">
    <div class=\"container relative\">

      <!-- Nav Tabs -->
      <div class=\"align-center mb-40 mb-xxs-30\">
        <ul class=\"nav nav-tabs tpl-minimal-tabs\">

          <li class=\"active\">
            <a href=\"#mini-one\" data-toggle=\"tab\">Login</a>
          </li>

          <li>
            <a href=\"#mini-two\" data-toggle=\"tab\">Registration</a>
          </li>

        </ul>
      </div>
      <!-- End Nav Tabs -->

      <!-- Tab panes -->
      <div class=\"tab-content tpl-minimal-tabs-cont section-text\">

        <div class=\"tab-pane fade in active\" id=\"mini-one\">

          <!-- Login Form -->
          <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">

              <form class=\"form contact-form\" id=\"contact_form\">
                <div class=\"clearfix\">

                  <!-- Username -->
                  <div class=\"form-group\">
                    <input type=\"text\" name=\"username\" id=\"username\" class=\"input-md round form-control\" placeholder=\"Username\" pattern=\".{3,100}\" required>
                  </div>

                  <!-- Password -->
                  <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"input-md round form-control\" placeholder=\"Password\" pattern=\".{5,100}\" required>
                  </div>

                </div>

                <div class=\"clearfix\">

                  <div class=\"cf-left-col\">

                    <!-- Inform Tip -->
                    <div class=\"form-tip pt-20\">
                      <a href=\"\">Forgot Password?</a>
                    </div>

                  </div>

                  <div class=\"cf-right-col\">

                    <!-- Send Button -->
                    <div class=\"align-right pt-10\">
                      <button class=\"submit_btn btn btn-mod btn-medium btn-round\" id=\"login-btn\">Login</button>
                    </div>

                  </div>

                </div>

              </form>

            </div>
          </div>
          <!-- End Login Form -->

        </div>

        <div class=\"tab-pane fade\" id=\"mini-two\">

          <!-- Registry Form -->
          <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\">

              <form class=\"form contact-form\" id=\"contact_form\">
                <div class=\"clearfix\">

                  <!-- Email -->
                  <div class=\"form-group\">
                    <input type=\"text\" name=\"Email\" id=\"Email\" class=\"input-md round form-control\" placeholder=\"Email\" pattern=\".{3,100}\" required>
                  </div>

                  <!-- Username -->
                  <div class=\"form-group\">
                    <input type=\"text\" name=\"username\" id=\"username\" class=\"input-md round form-control\" placeholder=\"Username\" pattern=\".{3,100}\" required>
                  </div>

                  <!-- Password -->
                  <div class=\"form-group\">
                    <input type=\"password\" name=\"password\" id=\"password\" class=\"input-md round form-control\" placeholder=\"Password\" pattern=\".{5,100}\" required>
                  </div>

                  <!-- Re-enter Password -->
                  <div class=\"form-group\">
                    <input type=\"password\" name=\"re-password\" id=\"re-password\" class=\"input-md round form-control\" placeholder=\"Re-enter Password\" pattern=\".{5,100}\" required>
                  </div>

                </div>

                <!-- Send Button -->
                <div class=\"pt-10\">
                  <button class=\"submit_btn btn btn-mod btn-medium btn-round btn-full\" id=\"reg-btn\">Register</button>
                </div>

              </form>

            </div>
          </div>
          <!-- End Registry Form -->

        </div>

      </div>

    </div>
  </section>
  <!-- End Section -->", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/account.htm", "");
    }
}
