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

/* /Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/index.htm */
class __TwigTemplate_5735e2f28d12f941f8d053805f7cd94ddfcfd6898639766787c31317d0ef5886 extends \Twig\Template
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

<section class=\"home-section bg-dark-alfa-90 parallax-2\" data-background=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/section-bg-1.jpg");
        echo "\" id=\"home\">
  <div class=\"js-height-full\">

    <!-- Hero Content -->
    <div class=\"home-content container\">
      <div class=\"home-text\">

        <h1 class=\"hs-line-8 font-alt mb-50 mb-xs-30\">
          Unique experience with
        </h1>

        <h2 class=\"hs-line-11 font-alt mb-50 mb-xs-30\">
         Creative Studio
        </h2>

        <div class=\"local-scroll\">
          <a href=\"#about\" class=\"btn btn-mod btn-w btn-medium btn-round hidden-xs\">See More</a>
          <span class=\"hidden-xs\">&nbsp;</span>
          <a href=\"http://vimeo.com/50201327\" class=\"btn btn-mod btn-w btn-medium btn-round lightbox mfp-iframe\">Play Reel</a>
        </div>

      </div>
    </div>
    <!-- End Hero Content -->

    <!-- Scroll Down -->
    <div class=\"local-scroll\">
      <a href=\"#about\" class=\"scroll-down\"><i class=\"fa fa-angle-down scroll-down-icon\"></i></a>
    </div>
    <!-- End Scroll Down -->

  </div>
</section>
<!-- End Home Section -->

<!-- Section -->
<section class=\"page-section\">
  <div class=\"container relative\">

    <div class=\"row\">

      <!-- Content -->
      <div class=\"col-sm-12\">


        <div class=\"row multi-columns-row\">

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">

              <a href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>

              <div class=\"intro-label\">
                <span class=\"label label-danger bg-red\">Sale</span>
              </div>

            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">G-Star Polo Applique Jersey</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <del>\$150.00</del>
              &nbsp;
              <strong>\$94.75</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 88
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Only & Sons Pique Polo Shirt</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$28.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Longline Long Sleeve</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$39.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Polo Shirt With Floral Sleeves</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$85.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">

              <a href=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>

              <div class=\"intro-label\">
                <span class=\"label label-danger bg-red\">Sale</span>
              </div>

            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">G-Star Polo Applique Jersey</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <del>\$150.00</del>
              &nbsp;
              <strong>\$94.75</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 180
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Only & Sons Pique Polo Shirt</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$28.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 202
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 206
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Longline Long Sleeve</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$39.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 224
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 228
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Polo Shirt With Floral Sleeves</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$85.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 246
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 250
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Only & Sons Pique Polo Shirt</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$28.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 268
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 272
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Only & Sons Pique Polo Shirt</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$28.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 290
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 294
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Longline Long Sleeve</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$39.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"";
        // line 312
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 316
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\">Polo Shirt With Floral Sleeves</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$85.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

        </div>


      </div>
      <!-- End Content -->


    </div>

  </div>
</section>
<!-- End Section -->


<!-- Testimonials Section -->
<section class=\"page-section bg-dark bg-dark-alfa-90 fullwidth-slider\" data-background=\"";
        // line 345
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/section-bg-3.jpg");
        echo "\">

  <!-- Slide Item -->
  <div>
    <div class=\"container relative\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2 align-center\">
          <!-- Section Icon -->
          <div class=\"section-icon\">
            <span class=\"icon-quote\"></span>
          </div>
          <!-- Section Title -->
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
  <!-- End Slide Item -->

  <!-- Slide Item -->
  <div>
    <div class=\"container relative\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2 align-center\">
          <!-- Section Icon -->
          <div class=\"section-icon\">
            <span class=\"icon-quote\"></span>
          </div>
          <!-- Section Title -->
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
  <!-- End Slide Item -->

  <!-- Slide Item -->
  <div>
    <div class=\"container relative\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2 align-center\">
          <!-- Section Icon -->
          <div class=\"section-icon\">
            <span class=\"icon-quote\"></span>
          </div>
          <!-- Section Title -->
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
  <!-- End Slide Item -->

</section>
<!-- End Testimonials Section -->


<!-- Blog Section -->
<section class=\"page-section\" id=\"news\">
  <div class=\"container relative\">

    <h2 class=\"section-title font-alt align-left mb-70 mb-sm-40\">
      Latest News


    </h2>

    <div class=\"row multi-columns-row\">

      <!-- Post Item -->
      <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.1s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"";
        // line 445
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/blog/post-prev-1.jpg");
        echo "\" alt=\"\" /></a>
        </div>

        <div class=\"post-prev-title font-alt\">
          <a href=\"\">New Web Design Trends</a>
        </div>

        <div class=\"post-prev-info font-alt\">
          <a href=\"\">John Doe</a> | 10 December
        </div>

        <div class=\"post-prev-text\">
          Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
          consectetur fermentum nibh volutpat, accumsan purus.
        </div>

        <div class=\"post-prev-more\">
          <a href=\"\" class=\"btn btn-mod btn-gray btn-round\">Read More <i class=\"fa fa-angle-right\"></i></a>
        </div>

      </div>
      <!-- End Post Item -->

      <!-- Post Item -->
      <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.2s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"";
        // line 472
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/blog/post-prev-2.jpg");
        echo "\" alt=\"\" /></a>
        </div>

        <div class=\"post-prev-title font-alt\">
          <a href=\"\">Minimalistic Design Forever</a>
        </div>

        <div class=\"post-prev-info font-alt\">
          <a href=\"\">John Doe</a> | 9 December
        </div>

        <div class=\"post-prev-text\">
          Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
          consectetur fermentum nibh volutpat, accumsan purus.
        </div>

        <div class=\"post-prev-more\">
          <a href=\"\" class=\"btn btn-mod btn-gray btn-round\">Read More <i class=\"fa fa-angle-right\"></i></a>
        </div>

      </div>
      <!-- End Post Item -->

      <!-- Post Item -->
      <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.3s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"";
        // line 499
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/blog/post-prev-3.jpg");
        echo "\" alt=\"\" /></a>
        </div>

        <div class=\"post-prev-title font-alt\">
          <a href=\"\">Hipster&rsquo;s Style in&nbsp;Web</a>
        </div>

        <div class=\"post-prev-info font-alt\">
          <a href=\"\">John Doe</a> | 7 December
        </div>

        <div class=\"post-prev-text\">
          Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
          consectetur fermentum nibh volutpat, accumsan purus.
        </div>

        <div class=\"post-prev-more\">
          <a href=\"\" class=\"btn btn-mod btn-gray btn-round\">Read More <i class=\"fa fa-angle-right\"></i></a>
        </div>

      </div>
      <!-- End Post Item -->

    </div>

  </div>
</section>
<!-- End Blog Section -->


<!-- Newsletter Section -->
<section class=\"small-section bg-gray-lighter\">
  <div class=\"container relative\">

    <form class=\"form align-center\" id=\"mailchimp\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">

          <div class=\"newsletter-label font-alt\">
            Stay informed with our newsletter
          </div>

          <div class=\"mb-20\">
            <input placeholder=\"Enter Your Email\" class=\"newsletter-field form-control input-md round mb-xs-10\" type=\"email\" pattern=\".{5,100}\" required />

            <button type=\"submit\" class=\"btn btn-mod btn-medium btn-round mb-xs-10\">
              Subscribe
            </button>
          </div>

          <div class=\"form-tip\">
            <i class=\"fa fa-info-circle\"></i> Please trust us, we will never send you spam
          </div>

          <div id=\"subscribe-result\"></div>

        </div>
      </div>
    </form>

  </div>
</section>
<!-- End Newsletter Section -->


<!-- Contact Section -->
<section class=\"page-section\" id=\"contact\">
  <div class=\"container relative\">

    <h2 class=\"section-title font-alt mb-70 mb-sm-40\">
      Contact
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
                +61 123 456 7890
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
                Manila, Philippines
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
<!-- End Contact Section -->";
    }

    public function getTemplateName()
    {
        return "/Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  643 => 499,  613 => 472,  583 => 445,  480 => 345,  448 => 316,  439 => 312,  418 => 294,  409 => 290,  388 => 272,  379 => 268,  358 => 250,  349 => 246,  328 => 228,  319 => 224,  298 => 206,  289 => 202,  268 => 184,  259 => 180,  236 => 160,  222 => 151,  200 => 132,  191 => 128,  170 => 110,  161 => 106,  140 => 88,  131 => 84,  108 => 64,  94 => 55,  39 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Home Section -->

<section class=\"home-section bg-dark-alfa-90 parallax-2\" data-background=\"{{'/assets/images/full-width-images/section-bg-1.jpg'|theme }}\" id=\"home\">
  <div class=\"js-height-full\">

    <!-- Hero Content -->
    <div class=\"home-content container\">
      <div class=\"home-text\">

        <h1 class=\"hs-line-8 font-alt mb-50 mb-xs-30\">
          Unique experience with
        </h1>

        <h2 class=\"hs-line-11 font-alt mb-50 mb-xs-30\">
         Creative Studio
        </h2>

        <div class=\"local-scroll\">
          <a href=\"#about\" class=\"btn btn-mod btn-w btn-medium btn-round hidden-xs\">See More</a>
          <span class=\"hidden-xs\">&nbsp;</span>
          <a href=\"http://vimeo.com/50201327\" class=\"btn btn-mod btn-w btn-medium btn-round lightbox mfp-iframe\">Play Reel</a>
        </div>

      </div>
    </div>
    <!-- End Hero Content -->

    <!-- Scroll Down -->
    <div class=\"local-scroll\">
      <a href=\"#about\" class=\"scroll-down\"><i class=\"fa fa-angle-down scroll-down-icon\"></i></a>
    </div>
    <!-- End Scroll Down -->

  </div>
</section>
<!-- End Home Section -->

<!-- Section -->
<section class=\"page-section\">
  <div class=\"container relative\">

    <div class=\"row\">

      <!-- Content -->
      <div class=\"col-sm-12\">


        <div class=\"row multi-columns-row\">

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">

              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>

              <div class=\"intro-label\">
                <span class=\"label label-danger bg-red\">Sale</span>
              </div>

            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">G-Star Polo Applique Jersey</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <del>\$150.00</del>
              &nbsp;
              <strong>\$94.75</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Only & Sons Pique Polo Shirt</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$28.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Longline Long Sleeve</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$39.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Polo Shirt With Floral Sleeves</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$85.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">

              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>

              <div class=\"intro-label\">
                <span class=\"label label-danger bg-red\">Sale</span>
              </div>

            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">G-Star Polo Applique Jersey</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <del>\$150.00</del>
              &nbsp;
              <strong>\$94.75</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Only & Sons Pique Polo Shirt</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$28.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Longline Long Sleeve</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$39.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Polo Shirt With Floral Sleeves</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$85.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Only & Sons Pique Polo Shirt</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$28.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Only & Sons Pique Polo Shirt</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$28.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Longline Long Sleeve</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$39.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">
              <a href=\"{{'product'|page}}\"><img src=\"{{'/assets/images/shop/shop-prev-1.jpg'|theme}}\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">Polo Shirt With Floral Sleeves</a>
            </div>

            <div class=\"post-prev-text align-center\">
              <strong>\$85.99</strong>
            </div>

            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>
          <!-- End Shop Item -->

        </div>


      </div>
      <!-- End Content -->


    </div>

  </div>
</section>
<!-- End Section -->


<!-- Testimonials Section -->
<section class=\"page-section bg-dark bg-dark-alfa-90 fullwidth-slider\" data-background=\"{{'/assets/images/full-width-images/section-bg-3.jpg'|theme}}\">

  <!-- Slide Item -->
  <div>
    <div class=\"container relative\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2 align-center\">
          <!-- Section Icon -->
          <div class=\"section-icon\">
            <span class=\"icon-quote\"></span>
          </div>
          <!-- Section Title -->
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
  <!-- End Slide Item -->

  <!-- Slide Item -->
  <div>
    <div class=\"container relative\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2 align-center\">
          <!-- Section Icon -->
          <div class=\"section-icon\">
            <span class=\"icon-quote\"></span>
          </div>
          <!-- Section Title -->
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
  <!-- End Slide Item -->

  <!-- Slide Item -->
  <div>
    <div class=\"container relative\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2 align-center\">
          <!-- Section Icon -->
          <div class=\"section-icon\">
            <span class=\"icon-quote\"></span>
          </div>
          <!-- Section Title -->
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
  <!-- End Slide Item -->

</section>
<!-- End Testimonials Section -->


<!-- Blog Section -->
<section class=\"page-section\" id=\"news\">
  <div class=\"container relative\">

    <h2 class=\"section-title font-alt align-left mb-70 mb-sm-40\">
      Latest News


    </h2>

    <div class=\"row multi-columns-row\">

      <!-- Post Item -->
      <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.1s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"{{'/assets/images/blog/post-prev-1.jpg'|theme}}\" alt=\"\" /></a>
        </div>

        <div class=\"post-prev-title font-alt\">
          <a href=\"\">New Web Design Trends</a>
        </div>

        <div class=\"post-prev-info font-alt\">
          <a href=\"\">John Doe</a> | 10 December
        </div>

        <div class=\"post-prev-text\">
          Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
          consectetur fermentum nibh volutpat, accumsan purus.
        </div>

        <div class=\"post-prev-more\">
          <a href=\"\" class=\"btn btn-mod btn-gray btn-round\">Read More <i class=\"fa fa-angle-right\"></i></a>
        </div>

      </div>
      <!-- End Post Item -->

      <!-- Post Item -->
      <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.2s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"{{'/assets/images/blog/post-prev-2.jpg'|theme}}\" alt=\"\" /></a>
        </div>

        <div class=\"post-prev-title font-alt\">
          <a href=\"\">Minimalistic Design Forever</a>
        </div>

        <div class=\"post-prev-info font-alt\">
          <a href=\"\">John Doe</a> | 9 December
        </div>

        <div class=\"post-prev-text\">
          Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
          consectetur fermentum nibh volutpat, accumsan purus.
        </div>

        <div class=\"post-prev-more\">
          <a href=\"\" class=\"btn btn-mod btn-gray btn-round\">Read More <i class=\"fa fa-angle-right\"></i></a>
        </div>

      </div>
      <!-- End Post Item -->

      <!-- Post Item -->
      <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.3s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"{{'/assets/images/blog/post-prev-3.jpg'|theme}}\" alt=\"\" /></a>
        </div>

        <div class=\"post-prev-title font-alt\">
          <a href=\"\">Hipster&rsquo;s Style in&nbsp;Web</a>
        </div>

        <div class=\"post-prev-info font-alt\">
          <a href=\"\">John Doe</a> | 7 December
        </div>

        <div class=\"post-prev-text\">
          Maecenas volutpat, diam enim sagittis quam, id porta quam. Sed id dolor
          consectetur fermentum nibh volutpat, accumsan purus.
        </div>

        <div class=\"post-prev-more\">
          <a href=\"\" class=\"btn btn-mod btn-gray btn-round\">Read More <i class=\"fa fa-angle-right\"></i></a>
        </div>

      </div>
      <!-- End Post Item -->

    </div>

  </div>
</section>
<!-- End Blog Section -->


<!-- Newsletter Section -->
<section class=\"small-section bg-gray-lighter\">
  <div class=\"container relative\">

    <form class=\"form align-center\" id=\"mailchimp\">
      <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">

          <div class=\"newsletter-label font-alt\">
            Stay informed with our newsletter
          </div>

          <div class=\"mb-20\">
            <input placeholder=\"Enter Your Email\" class=\"newsletter-field form-control input-md round mb-xs-10\" type=\"email\" pattern=\".{5,100}\" required />

            <button type=\"submit\" class=\"btn btn-mod btn-medium btn-round mb-xs-10\">
              Subscribe
            </button>
          </div>

          <div class=\"form-tip\">
            <i class=\"fa fa-info-circle\"></i> Please trust us, we will never send you spam
          </div>

          <div id=\"subscribe-result\"></div>

        </div>
      </div>
    </form>

  </div>
</section>
<!-- End Newsletter Section -->


<!-- Contact Section -->
<section class=\"page-section\" id=\"contact\">
  <div class=\"container relative\">

    <h2 class=\"section-title font-alt mb-70 mb-sm-40\">
      Contact
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
                +61 123 456 7890
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
                Manila, Philippines
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
<!-- End Contact Section -->", "/Users/omi/Desktop/TEST/october/zuri/themes/zuri-theme/pages/index.htm", "");
    }
}
