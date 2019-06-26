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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/pages/about.htm */
class __TwigTemplate_b2b5a5dede85f11c4b4c0f4667b76739fc942c982bc371017538f670356f58b8 extends \Twig\Template
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
  <section class=\"page-section bg-dark-alfa-50 parallax-3\" data-background=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/section-bg-1.jpg");
        echo "\">
    <div class=\"relative container align-left\">

      <div class=\"row\">

        <div class=\"col-md-8\">
          <h1 class=\"hs-line-11 font-alt mb-20 mb-xs-0\">About Us</h1>
          <div class=\"hs-line-4 font-alt\">
            Extraordinary art team &&nbsp;creative minimalism lovers
          </div>
        </div>

        <div class=\"col-md-4 mt-30\">
          <div class=\"mod-breadcrumbs font-alt align-right\">
            <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Home</a>&nbsp;/&nbsp;<span>About Us</span>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- End Head Section -->


  <!-- About Section -->
  <section class=\"page-section\" id=\"about\">
    <div class=\"container relative\">

      <div class=\"section-text mb-50 mb-sm-20\">
        <div class=\"row\">

          <div class=\"col-md-4\">
            <blockquote>
              <p>
                Design is&nbsp;not making beauty, beauty emerges from selection, affinities, integration, love.
              </p>
              <footer>
                Lorem Ipsum
              </footer>
            </blockquote>
          </div>

          <div class=\"col-md-4 col-sm-6 mb-sm-50 mb-xs-30\">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
          </div>

          <div class=\"col-md-4 col-sm-6 mb-sm-50 mb-xs-30\">
            Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
          </div>

        </div>
      </div>


    </div>
  </section>
  <!-- End About Section -->


  <!-- <section class=\"page-section bg-dark bg-dark-alfa-90 fullwidth-slider\" data-background=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/section-bg-1.jpg");
        echo "\">

    
    <div>
      <div class=\"container relative\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 align-center\">
            
            <div class=\"section-icon\">
              <span class=\"icon-quote\"></span>
            </div>
            
            <h3 class=\"small-title font-alt\">What people say?</h3>
            <blockquote class=\"testimonial white\">
              <p>
                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                risus utaliquam dapibus. Thanks!
              </p>
              <footer class=\"testimonial-author\">
                John Doe, doodle inc.
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    

    
    <div>
      <div class=\"container relative\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 align-center\">
            
            <div class=\"section-icon\">
              <span class=\"icon-quote\"></span>
            </div>
            
            <h3 class=\"small-title font-alt\">What people say?</h3>
            <blockquote class=\"testimonial white\">
              <p>
                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                risus utaliquam dapibus. Thanks!
              </p>
              <footer class=\"testimonial-author\">
                John Doe, doodle inc.
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    

    
    <div>
      <div class=\"container relative\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 align-center\">
            
            <div class=\"section-icon\">
              <span class=\"icon-quote\"></span>
            </div>
            
            <h3 class=\"small-title font-alt\">What people say?</h3>
            <blockquote class=\"testimonial white\">
              <p>
                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                risus utaliquam dapibus. Thanks!
              </p>
              <footer class=\"testimonial-author\">
                John Doe, doodle inc.
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    

  </section> -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 62,  55 => 16,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Head Section -->
  <section class=\"page-section bg-dark-alfa-50 parallax-3\" data-background=\"{{'/assets/images/full-width-images/section-bg-1.jpg'|theme }}\">
    <div class=\"relative container align-left\">

      <div class=\"row\">

        <div class=\"col-md-8\">
          <h1 class=\"hs-line-11 font-alt mb-20 mb-xs-0\">About Us</h1>
          <div class=\"hs-line-4 font-alt\">
            Extraordinary art team &&nbsp;creative minimalism lovers
          </div>
        </div>

        <div class=\"col-md-4 mt-30\">
          <div class=\"mod-breadcrumbs font-alt align-right\">
            <a href=\"{{'index'|page}}\">Home</a>&nbsp;/&nbsp;<span>About Us</span>
          </div>

        </div>
      </div>

    </div>
  </section>
  <!-- End Head Section -->


  <!-- About Section -->
  <section class=\"page-section\" id=\"about\">
    <div class=\"container relative\">

      <div class=\"section-text mb-50 mb-sm-20\">
        <div class=\"row\">

          <div class=\"col-md-4\">
            <blockquote>
              <p>
                Design is&nbsp;not making beauty, beauty emerges from selection, affinities, integration, love.
              </p>
              <footer>
                Lorem Ipsum
              </footer>
            </blockquote>
          </div>

          <div class=\"col-md-4 col-sm-6 mb-sm-50 mb-xs-30\">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In maximus ligula semper metus pellentesque mattis. Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor consectetur fermentum nibh volutpat, accumsan purus.
          </div>

          <div class=\"col-md-4 col-sm-6 mb-sm-50 mb-xs-30\">
            Etiam sit amet fringilla lacus. Pellentesque suscipit ante at ullamcorper pulvinar neque porttitor. Integer lectus. Praesent sed nisi eleifend, fermentum orci amet, iaculis libero. Donec vel ultricies purus. Nam dictum sem, eu aliquam.
          </div>

        </div>
      </div>


    </div>
  </section>
  <!-- End About Section -->


  <!-- <section class=\"page-section bg-dark bg-dark-alfa-90 fullwidth-slider\" data-background=\"{{'/assets/images/full-width-images/section-bg-1.jpg'|theme }}\">

    
    <div>
      <div class=\"container relative\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 align-center\">
            
            <div class=\"section-icon\">
              <span class=\"icon-quote\"></span>
            </div>
            
            <h3 class=\"small-title font-alt\">What people say?</h3>
            <blockquote class=\"testimonial white\">
              <p>
                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                risus utaliquam dapibus. Thanks!
              </p>
              <footer class=\"testimonial-author\">
                John Doe, doodle inc.
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    

    
    <div>
      <div class=\"container relative\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 align-center\">
            
            <div class=\"section-icon\">
              <span class=\"icon-quote\"></span>
            </div>
            
            <h3 class=\"small-title font-alt\">What people say?</h3>
            <blockquote class=\"testimonial white\">
              <p>
                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                risus utaliquam dapibus. Thanks!
              </p>
              <footer class=\"testimonial-author\">
                John Doe, doodle inc.
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    

    
    <div>
      <div class=\"container relative\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2 align-center\">
            
            <div class=\"section-icon\">
              <span class=\"icon-quote\"></span>
            </div>
            
            <h3 class=\"small-title font-alt\">What people say?</h3>
            <blockquote class=\"testimonial white\">
              <p>
                Phasellus luctus commodo ullamcorper a posuere rhoncus commodo elit. Aenean congue,
                risus utaliquam dapibus. Thanks!
              </p>
              <footer class=\"testimonial-author\">
                John Doe, doodle inc.
              </footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    

  </section> -->", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/about.htm", "");
    }
}
