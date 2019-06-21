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
        echo "<!-- Home Section -->

<section class=\"home-section bg-dark-alfa-90 parallax-2\"
  data-background=\"";
        // line 4
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
        // line 50
        $context["obCategoryList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["CategoryList"] ?? null), "make", [], "method", false, false, false, 50), "tree", [], "method", false, false, false, 50);
        // line 51
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obCategoryList"] ?? null), "isNotEmpty", [], "method", false, false, false, 51)) {
            // line 52
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obCategoryList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obCategory"]) {
                // line 53
                echo "        <div class=\"col-md-4 col-lg-4 mb-60 mb-xs-40\">

          <div class=\"post-prev-img\">

            <a href=\"#\"><img src=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obCategory"], "preview_image", [], "any", false, false, false, 57), "path", [], "any", false, false, false, 57), "html", null, true);
                echo "\" alt=\"\" /></a>
            <div class=\"intro-label\">
            </div>

          </div>

          <div class=\"post-prev-title font-alt align-center\">
            <a href=\"#\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obCategory"], "name", [], "any", false, false, false, 64), "html", null, true);
                echo "</a>
          </div>

        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
        }
        // line 70
        echo "        <div class=\"col-md-2 col-lg-2 mb-60 mb-xs-40\"></div>
        <!-- ";
        // line 71
        $context["obCategory"] = twig_get_attribute($this->env, $this->source, ($context["CategoryPage"] ?? null), "get", [], "method", false, false, false, 71);
        // line 72
        echo "          ";
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 72), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 72)], "method", false, false, false, 72), "active", [], "method", false, false, false, 72), "category", [0 => twig_get_attribute($this->env, $this->source, ($context["obCategory"] ?? null), "id", [], "any", false, false, false, 72)], "method", false, false, false, 72);
        // line 73
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpthy", [], "method", false, false, false, 73)) {
            // line 74
            echo "        <div class=\"row multi-columns-row\">
    
          ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 77
                echo "          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">
            <div class=\"post-prev-img\">
                ";
                // line 79
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 79))) {
                    // line 80
                    echo "              <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 80), "path", [], "any", false, false, false, 80), "html", null, true);
                    echo "\" alt=\"\" /></a>
                ";
                }
                // line 82
                echo "              <div class=\"intro-label\">
                <span class=\"label label-danger bg-red\">Sale</span>
              </div>

            </div>


            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
                // line 90
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 90), "html", null, true);
                echo "</a>
            </div>
            ";
                // line 92
                $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 92), "first", [], "method", false, false, false, 92);
                // line 93
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpthy", [], "method", false, false, false, 93)) {
                    // line 94
                    echo "            <div class=\"post-prev-text align-center\">

              <strong>";
                    // line 96
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 96), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 96), "html", null, true);
                    echo "</strong>
            </div>
            ";
                }
                // line 99
                echo "            <div class=\"post-prev-more align-center\">
              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
            </div>

          </div>

          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "        </div>

        ";
        }
        // line 108
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
        // line 125
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/full-width-images/section-bg-3.jpg");
        echo "\">

  <!-- Slide Item -->
  <div>
    <img src=\"";
        // line 129
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
        // line 159
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
        // line 177
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 177), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 177)], "method", false, false, false, 177), "active", [], "method", false, false, false, 177);
        // line 178
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 178)) {
            // line 179
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["obProductList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                // line 180
                echo "                    <div data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "id", [], "any", false, false, false, 180), "html", null, true);
                echo "\">
                        <div class=\"col-md-4 col-lg-4 mb-60 mb-xs-40\">

                            <div class=\"post-prev-img\">
                              ";
                // line 184
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 184))) {
                    // line 185
                    echo "                              <a href=\"";
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                    echo "\"><img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 185), "path", [], "any", false, false, false, 185), "html", null, true);
                    echo "\" alt=\"\" /></a>
                              ";
                }
                // line 187
                echo "                              <div class=\"intro-label\">
                                <span class=\"label label-danger bg-red\">Sale</span>
                              </div>
                
                            </div>
                
                            <div class=\"post-prev-title font-alt align-center\">
                              <a href=\"";
                // line 194
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 194), "html", null, true);
                echo "</a>
                            </div>
                
                            <div class=\"post-prev-text align-center\">
                              <strong>";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_text", [], "any", false, false, false, 198), "html", null, true);
                echo "</strong>
                            </div>
                
                            <div class=\"post-prev-more align-center\">
                              <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                            </div>
                
                          </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "        ";
        }
        // line 208
        echo "
      <!-- <div class=\"col-sm-6 col-md-4 col-lg-4 mb-md-50 wow fadeIn\" data-wow-delay=\"0.1s\" data-wow-duration=\"2s\">

        <div class=\"post-prev-img\">
          <a href=\"blog-single-sidebar-right.html\"><img src=\"";
        // line 212
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
        return array (  365 => 212,  359 => 208,  356 => 207,  341 => 198,  332 => 194,  323 => 187,  315 => 185,  313 => 184,  305 => 180,  300 => 179,  297 => 178,  295 => 177,  274 => 159,  241 => 129,  234 => 125,  215 => 108,  210 => 106,  198 => 99,  191 => 96,  187 => 94,  184 => 93,  182 => 92,  175 => 90,  165 => 82,  157 => 80,  155 => 79,  151 => 77,  147 => 76,  143 => 74,  140 => 73,  137 => 72,  135 => 71,  132 => 70,  129 => 69,  118 => 64,  108 => 57,  102 => 53,  97 => 52,  94 => 51,  92 => 50,  43 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'CategoryList' %}<!-- Home Section -->

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
                {% for obProduct in obProductList %}
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
