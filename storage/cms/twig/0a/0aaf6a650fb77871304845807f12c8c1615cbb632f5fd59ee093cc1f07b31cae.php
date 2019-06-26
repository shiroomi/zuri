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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/pages/index.htm */
class __TwigTemplate_7f138caf598f49c31dd5c27f0d3a2c9fb1771a05e75079218340e1bf4722e13a extends \Twig\Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("CategoryList"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "<!-- Home Section -->

<section class=\"home-section bg-dark-alfa-90 parallax-2\"
  data-background=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/cofi-main-image-2.jpg");
        echo "\" id=\"home\">
  <div class=\"js-height-full\">

    <!-- Hero Content -->
    <div class=\"home-content container\">
      <div class=\"home-text\">
        <!-- <h1 class=\"hs-line-8 font-alt mb-50 mb-xs-30\">
          Unique experience with
        </h1>

        <h2 class=\"hs-line-11 font-alt mb-50 mb-xs-30\">
         Creative Studio
        </h2>

        <div class=\"local-scroll\">
          <a href=\"#about\" class=\"btn btn-mod btn-w btn-medium btn-round hidden-xs\">See More</a>
          <span class=\"hidden-xs\">&nbsp;</span>
          <a href=\"http://vimeo.com/50201327\" class=\"btn btn-mod btn-w btn-medium btn-round lightbox mfp-iframe\">Play Reel</a>
        </div> -->

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
        <h2 class=\"section-title font-alt align-left mb-70 mb-sm-40\">
          Collection List
        </h2>
        <div class=\"col-md-2 col-lg-2 mb-60 mb-xs-40\"></div>
        ";
        // line 51
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 51), "tree", [], "method", false, false, false, 51);
        // line 52
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, false, 52)) {
            // line 53
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                // line 54
                echo "        <div class=\"col-md-4 col-lg-4 mb-60 mb-xs-40\">

          <div class=\"post-prev-img\">

            <a href=\"#\"><img src=\"";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obCategory"], "preview_image", [], "any", false, false, false, 58), "path", [], "any", false, false, false, 58), "html", null, true);
                echo "\" alt=\"\" /></a>
            <div class=\"intro-label\">
            </div>

          </div>

          <div class=\"post-prev-title font-alt align-center\">
            <a href=\"#\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 65), "html", null, true);
                echo "</a>
          </div>

        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "        ";
        }
        // line 71
        echo "        <div class=\"col-md-2 col-lg-2 mb-60 mb-xs-40\"></div>
        <!-- ";
        // line 72
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 72);
        // line 73
        echo "          ";
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 73), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 73)], "method", false, false, false, 73), "active", [], "method", false, false, false, 73), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "id", [], "any", false, false, false, 73)], "method", false, false, false, 73);
        // line 74
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpthy", [], "method", false, false, false, 74)) {
            // line 75
            echo "        <div class=\"row multi-columns-row\">
    
          ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 78
                echo "          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">
            <div class=\"post-prev-img\">
                ";
                // line 80
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 80))) {
                    // line 81
                    echo "              <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 81), "path", [], "any", false, false, false, 81), "html", null, true);
                    echo "\" alt=\"\" /></a>
                ";
                }
                // line 83
                echo "              <div class=\"intro-label\">
                <span class=\"label label-danger bg-red\">Sale</span>
              </div>

            </div>


            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
                // line 91
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 91), "html", null, true);
                echo "</a>
            </div>
            ";
                // line 93
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 93), "first", [], "method", false, false, false, 93);
                // line 94
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpthy", [], "method", false, false, false, 94)) {
                    // line 95
                    echo "            <div class=\"post-prev-text align-center\">

              <strong>";
                    // line 97
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 97), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 97), "html", null, true);
                    echo "</strong>
            </div>
            ";
                }
                // line 100
                echo "            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "        </div>

        ";
        }
        // line 109
        echo " -->



      </div>
      <!-- End Content -->


    </div>

  </div>
</section>
<!-- End Section -->


<!-- Testimonials Section -->
<section class=\"page-section bg-dark bg-light-alfa-90 fullwidth-slider text-center \"
  data-background=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/section-bg-3.jpg");
        echo "\">

  <!-- Slide Item -->
  <div>
    <img src=\"";
        // line 130
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/banners/cofi-banner-1.jpg");
        echo "\" alt=\"\">
  </div>
  <!-- <div>
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
  </div> -->
  <!-- End Slide Item -->



  <!-- Slide Item -->
  <div>
    <img src=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/banners/cofi-banner-2.jpg");
        echo "\" alt=\"\">
  </div>
  <!-- End Slide Item -->

</section>
<!-- End Testimonials Section -->


<!-- Blog Section -->
<section class=\"page-section\" id=\"news\">
  <div class=\"container relative\">

    <h2 class=\"section-title font-alt align-left mb-70 mb-sm-40\">
      Featured Collection
    </h2>

    <div class=\"row multi-columns-row\">

      ";
        // line 178
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 178), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 178)], "method", false, false, false, 178), "active", [], "method", false, false, false, 178);
        // line 179
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 179)) {
            // line 180
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["obProductList"] ?? null), 0, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 181
                echo "      <div data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "id", [], "any", false, false, false, 181), "html", null, true);
                echo "\">
        <div class=\"col-md-4 col-lg-4 mb-60 mb-xs-40\">

          <div class=\"post-prev-img\">
            ";
                // line 185
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 185))) {
                    // line 186
                    echo "            <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 186), "path", [], "any", false, false, false, 186), "html", null, true);
                    echo "\" alt=\"\" /></a>
            ";
                }
                // line 188
                echo "            <div class=\"intro-label\">
              <span class=\"label label-danger bg-red\">Sale</span>
            </div>

          </div>

          <div class=\"post-prev-title font-alt align-center\">
            <a href=\"";
                // line 195
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 195), "html", null, true);
                echo "</a>
          </div>

          <div class=\"post-prev-text align-center\">
            <strong>";
                // line 199
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_text", [], "any", false, false, false, 199), "html", null, true);
                echo "</strong>
            ";
                // line 200
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 200), "first", [], "method", false, false, false, 200);
                // line 201
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 201)) {
                    // line 202
                    echo "            <span>Price: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 202), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 202), "html", null, true);
                    echo " </span>
            ";
                }
                // line 204
                echo "          </div>


          <div class=\"post-prev-more align-center\">
            <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
          </div>

        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "        ";
        }
        // line 214
        echo "
        <!-- <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.1s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"";
        // line 218
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/blog/post-prev-1.jpg");
        echo "\"
              alt=\"\" /></a>
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

      </div> -->

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
            <input placeholder=\"Enter Your Email\" class=\"newsletter-field form-control input-md round mb-xs-10\"
              type=\"email\" pattern=\".{5,100}\" required />

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
                <input type=\"text\" name=\"name\" id=\"name\" class=\"input-md round form-control\" placeholder=\"Name\"
                  pattern=\".{3,100}\" required>
              </div>

              <!-- Email -->
              <div class=\"form-group\">
                <input type=\"email\" name=\"email\" id=\"email\" class=\"input-md round form-control\" placeholder=\"Email\"
                  pattern=\".{5,100}\" required>
              </div>

            </div>

            <div class=\"cf-right-col\">

              <!-- Message -->
              <div class=\"form-group\">
                <textarea name=\"message\" id=\"message\" class=\"input-md round form-control\" style=\"height: 84px;\"
                  placeholder=\"Message\"></textarea>
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
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 218,  376 => 214,  373 => 213,  359 => 204,  351 => 202,  348 => 201,  346 => 200,  342 => 199,  333 => 195,  324 => 188,  316 => 186,  314 => 185,  306 => 181,  301 => 180,  298 => 179,  296 => 178,  275 => 160,  242 => 130,  235 => 126,  216 => 109,  211 => 107,  199 => 100,  192 => 97,  188 => 95,  185 => 94,  183 => 93,  176 => 91,  166 => 83,  158 => 81,  156 => 80,  152 => 78,  148 => 77,  144 => 75,  141 => 74,  138 => 73,  136 => 72,  133 => 71,  130 => 70,  119 => 65,  109 => 58,  103 => 54,  98 => 53,  95 => 52,  93 => 51,  44 => 5,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'CategoryList' %}
<!-- Home Section -->

<section class=\"home-section bg-dark-alfa-90 parallax-2\"
  data-background=\"{{'/assets/images/full-width-images/cofi-main-image-2.jpg'|theme }}\" id=\"home\">
  <div class=\"js-height-full\">

    <!-- Hero Content -->
    <div class=\"home-content container\">
      <div class=\"home-text\">
        <!-- <h1 class=\"hs-line-8 font-alt mb-50 mb-xs-30\">
          Unique experience with
        </h1>

        <h2 class=\"hs-line-11 font-alt mb-50 mb-xs-30\">
         Creative Studio
        </h2>

        <div class=\"local-scroll\">
          <a href=\"#about\" class=\"btn btn-mod btn-w btn-medium btn-round hidden-xs\">See More</a>
          <span class=\"hidden-xs\">&nbsp;</span>
          <a href=\"http://vimeo.com/50201327\" class=\"btn btn-mod btn-w btn-medium btn-round lightbox mfp-iframe\">Play Reel</a>
        </div> -->

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
        <h2 class=\"section-title font-alt align-left mb-70 mb-sm-40\">
          Collection List
        </h2>
        <div class=\"col-md-2 col-lg-2 mb-60 mb-xs-40\"></div>
        {% set obCategoryList = CategoryList.make().tree() %}
        {% if obCategoryList.isNotEmpty() %}
        {% for obCategory in obCategoryList %}
        <div class=\"col-md-4 col-lg-4 mb-60 mb-xs-40\">

          <div class=\"post-prev-img\">

            <a href=\"#\"><img src=\"{{ obCategory.preview_image.path }}\" alt=\"\" /></a>
            <div class=\"intro-label\">
            </div>

          </div>

          <div class=\"post-prev-title font-alt align-center\">
            <a href=\"#\">{{ obCategory.name }}</a>
          </div>

        </div>
        {% endfor %}
        {% endif %}
        <div class=\"col-md-2 col-lg-2 mb-60 mb-xs-40\"></div>
        <!-- {% set obCategory = CategoryPage.get() %}
          {% set obProductList = ProductList.make().sort(ProductList.getSorting()).active().category(obCategory.id) %}
          {%if obProductList.isNotEmpthy() %}
        <div class=\"row multi-columns-row\">
    
          {% for obProduct in obProductList%}
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">
            <div class=\"post-prev-img\">
                {% if obProduct.preview_image is not empty %}
              <a href=\"{{'product'|page}}\"><img src=\"{{obProduct.preview_image.path}}\" alt=\"\" /></a>
                {% endif %}
              <div class=\"intro-label\">
                <span class=\"label label-danger bg-red\">Sale</span>
              </div>

            </div>


            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"{{'product'|page}}\">{{obProduct.name}}</a>
            </div>
            {% set obOffer = obProduct.offer.first() %}
            {%if obOffer.isNotEmpthy() %}
            <div class=\"post-prev-text align-center\">

              <strong>{{ obOffer.currency }}{{obOffer.price}}</strong>
            </div>
            {% endif %}
            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>

          {% endfor %}
        </div>

        {% endif %} -->



      </div>
      <!-- End Content -->


    </div>

  </div>
</section>
<!-- End Section -->


<!-- Testimonials Section -->
<section class=\"page-section bg-dark bg-light-alfa-90 fullwidth-slider text-center \"
  data-background=\"{{'/assets/images/full-width-images/section-bg-3.jpg'|theme}}\">

  <!-- Slide Item -->
  <div>
    <img src=\"{{'/assets/images/banners/cofi-banner-1.jpg'|theme}}\" alt=\"\">
  </div>
  <!-- <div>
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
  </div> -->
  <!-- End Slide Item -->



  <!-- Slide Item -->
  <div>
    <img src=\"{{'/assets/images/banners/cofi-banner-2.jpg'|theme}}\" alt=\"\">
  </div>
  <!-- End Slide Item -->

</section>
<!-- End Testimonials Section -->


<!-- Blog Section -->
<section class=\"page-section\" id=\"news\">
  <div class=\"container relative\">

    <h2 class=\"section-title font-alt align-left mb-70 mb-sm-40\">
      Featured Collection
    </h2>

    <div class=\"row multi-columns-row\">

      {% set obProductList = ProductList.make().sort(ProductList.getSorting()).active() %}
      {% if obProductList.isNotEmpty() %}
      {% for obProduct in obProductList|slice(0, 6)  %}
      <div data-id=\"{{ obProduct.id }}\">
        <div class=\"col-md-4 col-lg-4 mb-60 mb-xs-40\">

          <div class=\"post-prev-img\">
            {% if obProduct.preview_image is not empty %}
            <a href=\"{{'product'|page}}\"><img src=\"{{ obProduct.preview_image.path }}\" alt=\"\" /></a>
            {% endif %}
            <div class=\"intro-label\">
              <span class=\"label label-danger bg-red\">Sale</span>
            </div>

          </div>

          <div class=\"post-prev-title font-alt align-center\">
            <a href=\"{{'product'|page}}\">{{ obProduct.name }}</a>
          </div>

          <div class=\"post-prev-text align-center\">
            <strong>{{ obProduct.preview_text }}</strong>
            {% set obOffer = obProduct.offer.first() %}
            {% if obOffer.isNotEmpty()%}
            <span>Price: {{ obOffer.currency }} {{ obOffer.price }} </span>
            {% endif %}
          </div>


          <div class=\"post-prev-more align-center\">
            <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
          </div>

        </div>
        {% endfor %}
        {% endif %}

        <!-- <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.1s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"{{'/assets/images/blog/post-prev-1.jpg'|theme}}\"
              alt=\"\" /></a>
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

      </div> -->

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
            <input placeholder=\"Enter Your Email\" class=\"newsletter-field form-control input-md round mb-xs-10\"
              type=\"email\" pattern=\".{5,100}\" required />

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
                <input type=\"text\" name=\"name\" id=\"name\" class=\"input-md round form-control\" placeholder=\"Name\"
                  pattern=\".{3,100}\" required>
              </div>

              <!-- Email -->
              <div class=\"form-group\">
                <input type=\"email\" name=\"email\" id=\"email\" class=\"input-md round form-control\" placeholder=\"Email\"
                  pattern=\".{5,100}\" required>
              </div>

            </div>

            <div class=\"cf-right-col\">

              <!-- Message -->
              <div class=\"form-group\">
                <textarea name=\"message\" id=\"message\" class=\"input-md round form-control\" style=\"height: 84px;\"
                  placeholder=\"Message\"></textarea>
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
<!-- End Contact Section -->", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/index.htm", "");
    }
}
