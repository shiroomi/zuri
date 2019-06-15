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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/pages/shop.htm */
class __TwigTemplate_a169357479f41c005621ba46c5cb818789100804dc8b37ce9ab29c067ae82288 extends \Twig\Template
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
        <h1 class=\"hs-line-11 font-alt mb-20 mb-xs-0\">Shop</h1>
        <div class=\"hs-line-4 font-alt\">
          Choose the best products in our shop
        </div>
      </div>

      <div class=\"col-md-4 mt-30\">
        <div class=\"mod-breadcrumbs font-alt align-right\">
          <a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Home</a>&nbsp;/&nbsp;<span>Shop</span>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- End Head Section -->


<!-- Section -->
<section class=\"page-section\">
  <div class=\"container relative\">

    <div class=\"row\">

      <!-- Content -->
      <div class=\"col-sm-12\">

        <!-- Shop options -->
        <div class=\"clearfix mb-40\">

          <div class=\"left section-text mt-10\">
            Showing 1–12 of 23 results
          </div>

          <div class=\"right\">
            <form method=\"post\" action=\"#\" class=\"form\">
              <select class=\"input-md round\">
                <option>Default sorting</option>
                <option>Sort by price: low to high</option>
                <option>Sort by price: high to low</option>
              </select>
            </form>
          </div>

        </div>
        <!-- End Shop options -->

        <div class=\"row multi-columns-row\">

          <!-- Shop Item -->
          <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">

            <div class=\"post-prev-img\">

              <a href=\"";
        // line 63
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
        // line 71
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
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 95
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
        // line 113
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 117
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
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 139
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
        // line 158
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
        // line 167
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
        // line 187
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 191
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
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 213
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
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 235
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
        // line 253
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 257
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
        // line 275
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 279
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
        // line 297
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 301
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
        // line 319
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/shop-prev-1.jpg");
        echo "\" alt=\"\" /></a>
            </div>

            <div class=\"post-prev-title font-alt align-center\">
              <a href=\"";
        // line 323
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

        <!-- Pagination -->
        <div class=\"pagination\">
          <a href=\"\"><i class=\"fa fa-angle-left\"></i></a>
          <a href=\"\" class=\"active\">1</a>
          <a href=\"\">2</a>
          <a href=\"\">3</a>
          <a class=\"no-active\">...</a>
          <a href=\"\">9</a>
          <a href=\"\"><i class=\"fa fa-angle-right\"></i></a>
        </div>
        <!-- End Pagination -->

      </div>
      <!-- End Content -->


    </div>

  </div>
</section>
<!-- End Section -->


<!-- Divider -->
<hr class=\"mt-0 mb-0\" />
<!-- End Divider -->


<!-- Widgets Section -->
<section class=\"page-section\">
  <div class=\"container relative\">

    <div class=\"row multi-columns-row\">

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Cart</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-posts\">

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 385
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/previews/shop-prev-4.jpg");
        echo "\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Polo Shirt With Argyle Print</a>
                  <div>
                    1 x \$25.99
                  </div>
                  <div>
                    <a href=\"\"><i class=\"fa fa-times\"></i> Remove</a>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 400
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/previews/shop-prev-4.jpg");
        echo "\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Shirt With Mesh Sleeves</a>
                  <div>
                    1 x \$30.00
                  </div>
                  <div>
                    <a href=\"\"><i class=\"fa fa-times\"></i> Remove</a>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

            </ul>

            <div class=\"clearfix mt-20\">

              <div class=\"left mt-10\">
                Subtotal: <strong>\$35.00</strong>
              </div>

              <div class=\"right\">
                <a href=\"#\" class=\"btn btn-mod btn-border btn-small btn-round\">View Cart</a>
              </div>

            </div>

            <div>

            </div>

          </div>

        </div>
        <!-- End Widget -->

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Tags</h5>

          <div class=\"widget-body\">
            <div class=\"tags\">
              <a href=\"\">Design</a>
              <a href=\"\">Portfolio</a>
              <a href=\"\">Digital</a>
              <a href=\"\">Branding</a>
              <a href=\"\">Theme</a>
              <a href=\"\">Clean</a>
              <a href=\"\">UI & UX</a>
              <a href=\"\">Love</a>
            </div>
          </div>

        </div>
        <!-- End Widget -->

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Text widget</h5>

          <div class=\"widget-body\">
            <div class=\"widget-text clearfix\">

              <img src=\"";
        // line 469
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/user-avatar.png");
        echo "\" alt=\"\" width=\"70\" class=\"img-circle left img-left\">

              Consectetur adipiscing elit. Quisque magna ante eleifend eleifend.
              Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.
              Quisque magna ante eleifend eleifend.

            </div>
          </div>

        </div>
        <!-- End Widget -->

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Categories</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-menu\">
              <li>
                <a href=\"#\" title=\"\">Branding</a>
                <small>
                  - 7
                </small>
              </li>
              <li>
                <a href=\"#\" title=\"\">Design</a>
                <small>
                  - 15
                </small>
              </li>
              <li>
                <a href=\"#\" title=\"\">Development</a>
                <small>
                  - 3
                </small>
              </li>
              <li>
                <a href=\"#\" title=\"\">Photography</a>
                <small>
                  - 5
                </small>
              </li>
              <li>
                <a href=\"#\" title=\"\">Other</a>
                <small>
                  - 1
                </small>
              </li>
            </ul>
          </div>

        </div>
        <!-- End Widget -->

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Filter by price</h5>

          <div class=\"widget-body\">
            <form method=\"post\" action=\"#\" class=\"form\">

              <div class=\"row mb-20\">
                <div class=\"col-xs-6\">
                  <input type=\"text\" name=\"price-from\" id=\"price-from\" class=\"input-md round form-control\" placeholder=\"From, \$\" maxlength=\"100\">
                </div>

                <div class=\"col-xs-6\">
                  <input type=\"text\" name=\"price-to\" id=\"price-to\" class=\"input-md round form-control\" placeholder=\"To, \$\" maxlength=\"100\">
                </div>
              </div>

              <button class=\"btn btn-mod btn-medium btn-full btn-round\">Filter</button>

            </form>
          </div>

        </div>
        <!-- End Widget -->

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Bestsellers</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-posts\">

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 568
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/previews/shop-prev-4.jpg");
        echo "\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Polo Shirt With Argyle Print</a>
                  <div>
                    <del>
                      50.00
                    </del>&nbsp;
                    \$25.99
                  </div>
                  <div>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star-half-o\"></i>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 590
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/previews/shop-prev-4.jpg");
        echo "\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Polo Slim Fit Pique Badge Logo</a>
                  <div>
                    \$75.00
                  </div>
                  <div>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star-o\"></i>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 609
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/previews/shop-prev-4.jpg");
        echo "\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Esprit Pique Polo Shirt</a>
                  <div>
                    \$30.99
                  </div>
                  <div>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star-half-o\"></i>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

            </ul>
          </div>

        </div>
        <!-- End Widget -->

      </div>

    </div>

  </div>
</section>
<!-- End Widgets Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/shop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  762 => 609,  740 => 590,  715 => 568,  613 => 469,  541 => 400,  523 => 385,  458 => 323,  449 => 319,  428 => 301,  419 => 297,  398 => 279,  389 => 275,  368 => 257,  359 => 253,  338 => 235,  329 => 231,  308 => 213,  299 => 209,  278 => 191,  269 => 187,  246 => 167,  232 => 158,  210 => 139,  201 => 135,  180 => 117,  171 => 113,  150 => 95,  141 => 91,  118 => 71,  105 => 63,  55 => 16,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Head Section -->
<section class=\"page-section bg-dark-alfa-70 parallax-3\" data-background=\"{{'/assets/images/full-width-images/section-bg-1.jpg'|theme }}\">
  <div class=\"relative container align-left\">

    <div class=\"row\">

      <div class=\"col-md-8\">
        <h1 class=\"hs-line-11 font-alt mb-20 mb-xs-0\">Shop</h1>
        <div class=\"hs-line-4 font-alt\">
          Choose the best products in our shop
        </div>
      </div>

      <div class=\"col-md-4 mt-30\">
        <div class=\"mod-breadcrumbs font-alt align-right\">
          <a href=\"{{'index'|page}}\">Home</a>&nbsp;/&nbsp;<span>Shop</span>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- End Head Section -->


<!-- Section -->
<section class=\"page-section\">
  <div class=\"container relative\">

    <div class=\"row\">

      <!-- Content -->
      <div class=\"col-sm-12\">

        <!-- Shop options -->
        <div class=\"clearfix mb-40\">

          <div class=\"left section-text mt-10\">
            Showing 1–12 of 23 results
          </div>

          <div class=\"right\">
            <form method=\"post\" action=\"#\" class=\"form\">
              <select class=\"input-md round\">
                <option>Default sorting</option>
                <option>Sort by price: low to high</option>
                <option>Sort by price: high to low</option>
              </select>
            </form>
          </div>

        </div>
        <!-- End Shop options -->

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

        <!-- Pagination -->
        <div class=\"pagination\">
          <a href=\"\"><i class=\"fa fa-angle-left\"></i></a>
          <a href=\"\" class=\"active\">1</a>
          <a href=\"\">2</a>
          <a href=\"\">3</a>
          <a class=\"no-active\">...</a>
          <a href=\"\">9</a>
          <a href=\"\"><i class=\"fa fa-angle-right\"></i></a>
        </div>
        <!-- End Pagination -->

      </div>
      <!-- End Content -->


    </div>

  </div>
</section>
<!-- End Section -->


<!-- Divider -->
<hr class=\"mt-0 mb-0\" />
<!-- End Divider -->


<!-- Widgets Section -->
<section class=\"page-section\">
  <div class=\"container relative\">

    <div class=\"row multi-columns-row\">

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Cart</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-posts\">

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"{{'/assets/images/shop/previews/shop-prev-4.jpg'|theme}}\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Polo Shirt With Argyle Print</a>
                  <div>
                    1 x \$25.99
                  </div>
                  <div>
                    <a href=\"\"><i class=\"fa fa-times\"></i> Remove</a>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"{{'/assets/images/shop/previews/shop-prev-4.jpg'|theme}}\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Shirt With Mesh Sleeves</a>
                  <div>
                    1 x \$30.00
                  </div>
                  <div>
                    <a href=\"\"><i class=\"fa fa-times\"></i> Remove</a>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

            </ul>

            <div class=\"clearfix mt-20\">

              <div class=\"left mt-10\">
                Subtotal: <strong>\$35.00</strong>
              </div>

              <div class=\"right\">
                <a href=\"#\" class=\"btn btn-mod btn-border btn-small btn-round\">View Cart</a>
              </div>

            </div>

            <div>

            </div>

          </div>

        </div>
        <!-- End Widget -->

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Tags</h5>

          <div class=\"widget-body\">
            <div class=\"tags\">
              <a href=\"\">Design</a>
              <a href=\"\">Portfolio</a>
              <a href=\"\">Digital</a>
              <a href=\"\">Branding</a>
              <a href=\"\">Theme</a>
              <a href=\"\">Clean</a>
              <a href=\"\">UI & UX</a>
              <a href=\"\">Love</a>
            </div>
          </div>

        </div>
        <!-- End Widget -->

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Text widget</h5>

          <div class=\"widget-body\">
            <div class=\"widget-text clearfix\">

              <img src=\"{{'/assets/images/user-avatar.png'|theme}}\" alt=\"\" width=\"70\" class=\"img-circle left img-left\">

              Consectetur adipiscing elit. Quisque magna ante eleifend eleifend.
              Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.
              Quisque magna ante eleifend eleifend.

            </div>
          </div>

        </div>
        <!-- End Widget -->

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Categories</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-menu\">
              <li>
                <a href=\"#\" title=\"\">Branding</a>
                <small>
                  - 7
                </small>
              </li>
              <li>
                <a href=\"#\" title=\"\">Design</a>
                <small>
                  - 15
                </small>
              </li>
              <li>
                <a href=\"#\" title=\"\">Development</a>
                <small>
                  - 3
                </small>
              </li>
              <li>
                <a href=\"#\" title=\"\">Photography</a>
                <small>
                  - 5
                </small>
              </li>
              <li>
                <a href=\"#\" title=\"\">Other</a>
                <small>
                  - 1
                </small>
              </li>
            </ul>
          </div>

        </div>
        <!-- End Widget -->

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Filter by price</h5>

          <div class=\"widget-body\">
            <form method=\"post\" action=\"#\" class=\"form\">

              <div class=\"row mb-20\">
                <div class=\"col-xs-6\">
                  <input type=\"text\" name=\"price-from\" id=\"price-from\" class=\"input-md round form-control\" placeholder=\"From, \$\" maxlength=\"100\">
                </div>

                <div class=\"col-xs-6\">
                  <input type=\"text\" name=\"price-to\" id=\"price-to\" class=\"input-md round form-control\" placeholder=\"To, \$\" maxlength=\"100\">
                </div>
              </div>

              <button class=\"btn btn-mod btn-medium btn-full btn-round\">Filter</button>

            </form>
          </div>

        </div>
        <!-- End Widget -->

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <!-- Widget -->
        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Bestsellers</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-posts\">

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"{{'/assets/images/shop/previews/shop-prev-4.jpg'|theme}}\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Polo Shirt With Argyle Print</a>
                  <div>
                    <del>
                      50.00
                    </del>&nbsp;
                    \$25.99
                  </div>
                  <div>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star-half-o\"></i>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"{{'/assets/images/shop/previews/shop-prev-4.jpg'|theme}}\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Polo Slim Fit Pique Badge Logo</a>
                  <div>
                    \$75.00
                  </div>
                  <div>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star-o\"></i>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

              <!-- Preview item -->
              <li class=\"clearfix\">
                <a href=\"\"><img src=\"{{'/assets/images/shop/previews/shop-prev-4.jpg'|theme}}\" alt=\"\" class=\"widget-posts-img\" /></a>
                <div class=\"widget-posts-descr\">
                  <a href=\"#\" title=\"\">Esprit Pique Polo Shirt</a>
                  <div>
                    \$30.99
                  </div>
                  <div>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star-half-o\"></i>
                  </div>
                </div>
              </li>
              <!-- End Preview item -->

            </ul>
          </div>

        </div>
        <!-- End Widget -->

      </div>

    </div>

  </div>
</section>
<!-- End Widgets Section -->", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/shop.htm", "");
    }
}
