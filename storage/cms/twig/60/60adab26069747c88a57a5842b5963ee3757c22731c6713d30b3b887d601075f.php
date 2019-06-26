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

        <!-- <div class=\"clearfix mb-40\">

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

        </div> -->

        <div class=\"row multi-columns-row\">
            ";
        // line 55
        $context["obProductList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "make", [], "method", false, false, false, 55), "sort", [0 => twig_get_attribute($this->env, $this->source, ($context["ProductList"] ?? null), "getSorting", [], "method", false, false, false, 55)], "method", false, false, false, 55), "active", [], "method", false, false, false, 55);
        // line 56
        echo "
            ";
        // line 57
        $context["iPage"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getPageFromRequest", [], "method", false, false, false, 57);
        // line 58
        echo "            ";
        $context["arPaginationList"] = twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "get", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "count", [], "method", false, false, false, 58)], "method", false, false, false, 58);
        // line 59
        echo "            
            ";
        // line 61
        echo "            ";
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, false, 61)], "method", false, false, false, 61);
        // line 62
        echo "
            ";
        // line 64
        echo "            ";
        $context["arProductList"] = twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "page", [0 => ($context["iPage"] ?? null), 1 => twig_get_attribute($this->env, $this->source, ($context["Pagination"] ?? null), "getCountPerPage", [], "method", false, false, false, 64)], "method", false, false, false, 64);
        // line 65
        echo "
            ";
        // line 66
        if ( !twig_test_empty(($context["arProductList"] ?? null))) {
            // line 67
            echo "
            
            ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, ($context["obProductList"] ?? null), "isNotEmpty", [], "method", false, false, false, 69)) {
                // line 70
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["arProductList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["obProduct"]) {
                    // line 71
                    echo "            <div data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "id", [], "any", false, false, false, 71), "html", null, true);
                    echo "\">
              <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">
      
                <div class=\"post-prev-img\">
                  ";
                    // line 75
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 75))) {
                        // line 76
                        echo "                  <a href=\"";
                        echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_image", [], "any", false, false, false, 76), "path", [], "any", false, false, false, 76), "html", null, true);
                        echo "\" alt=\"\" /></a>
                  ";
                    }
                    // line 78
                    echo "                  <div class=\"intro-label\">
                  </div>
      
                </div>
      
                <div class=\"post-prev-title font-alt align-center\">
                  <a href=\"";
                    // line 84
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("product");
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "name", [], "any", false, false, false, 84), "html", null, true);
                    echo "</a>
                </div>
      
                <div class=\"post-prev-text align-center\">
                  <strong>";
                    // line 88
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["obProduct"], "preview_text", [], "any", false, false, false, 88), "html", null, true);
                    echo "</strong>
                  ";
                    // line 89
                    $context["obOffer"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["obProduct"], "offer", [], "any", false, false, false, 89), "first", [], "method", false, false, false, 89);
                    // line 90
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "isNotEmpty", [], "method", false, false, false, 90)) {
                        // line 91
                        echo "                  <span>Price: ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "currency", [], "any", false, false, false, 91), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["obOffer"] ?? null), "price", [], "any", false, false, false, 91), "html", null, true);
                        echo " </span>
                  ";
                    }
                    // line 93
                    echo "                </div>
                
      
                <div class=\"post-prev-more align-center\">
                  <a href=\"#\" class=\"btn btn-mod btn-gray btn-round\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                </div>
      
              </div>
            </div>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obProduct'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "              
              ";
            }
            // line 105
            echo "              <!-- End Post Item -->
      
            
      
          </div>

        </div>

      </div>
        ";
            // line 115
            echo "              ";
            if ( !twig_test_empty(($context["arPaginationList"] ?? null))) {
                // line 116
                echo "              <nav aria-label=\"...\">
                  <ul class=\"pagination pagination-lg\">
                  ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["arPaginationList"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["arPagination"]) {
                    // line 119
                    echo "                 <a href=\"?page=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPagination"], "value", [], "any", false, false, false, 119), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPagination"], "class", [], "any", false, false, false, 119), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["arPagination"], "name", [], "any", false, false, false, 119), "html", null, true);
                    echo "</a>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arPagination'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                echo "                  </ul>
              </nav>
              ";
            }
            // line 124
            echo "
              ";
        }
        // line 126
        echo "      <!-- End Content -->


    </div>

</section>
<!-- End Section -->


<!-- Divider -->
<hr class=\"mt-0 mb-0\" />


<!-- <section class=\"page-section\">
  <div class=\"container relative\">

    <div class=\"row multi-columns-row\">

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Cart</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-posts\">

              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 154
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

              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 167
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

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

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

        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Text widget</h5>

          <div class=\"widget-body\">
            <div class=\"widget-text clearfix\">

              <img src=\"";
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/user-avatar.png");
        echo "\" alt=\"\" width=\"70\" class=\"img-circle left img-left\">

              Consectetur adipiscing elit. Quisque magna ante eleifend eleifend.
              Purus ut dignissim consectetur, nulla erat ultrices purus, ut consequat sem elit non sem.
              Quisque magna ante eleifend eleifend.

            </div>
          </div>

        </div>

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

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

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Bestsellers</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-posts\">

              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 323
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

              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 343
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

              <li class=\"clearfix\">
                <a href=\"\"><img src=\"";
        // line 360
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

            </ul>
          </div>

        </div>

      </div>

    </div>

  </div>
</section> -->";
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
        return array (  501 => 360,  481 => 343,  458 => 323,  363 => 231,  296 => 167,  280 => 154,  250 => 126,  246 => 124,  241 => 121,  228 => 119,  224 => 118,  220 => 116,  217 => 115,  206 => 105,  202 => 103,  187 => 93,  179 => 91,  176 => 90,  174 => 89,  170 => 88,  161 => 84,  153 => 78,  145 => 76,  143 => 75,  135 => 71,  130 => 70,  128 => 69,  124 => 67,  122 => 66,  119 => 65,  116 => 64,  113 => 62,  110 => 61,  107 => 59,  104 => 58,  102 => 57,  99 => 56,  97 => 55,  55 => 16,  38 => 2,  35 => 1,);
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

        <!-- <div class=\"clearfix mb-40\">

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

        </div> -->

        <div class=\"row multi-columns-row\">
            {% set obProductList = ProductList.make().sort(ProductList.getSorting()).active() %}

            {% set iPage = Pagination.getPageFromRequest() %}
            {% set arPaginationList = Pagination.get(iPage, obProductList.count()) %}
            
            {# Apply pagination to product collection and get array with product items #}
            {% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}

            {# Apply pagination to product collection and get array with product items #}
            {% set arProductList = obProductList.page(iPage, Pagination.getCountPerPage()) %}

            {% if arProductList is not empty %}

            
            {% if obProductList.isNotEmpty() %}
            {% for obProduct in arProductList %}
            <div data-id=\"{{ obProduct.id }}\">
              <div class=\"col-md-3 col-lg-3 mb-60 mb-xs-40\">
      
                <div class=\"post-prev-img\">
                  {% if obProduct.preview_image is not empty %}
                  <a href=\"{{'product'|page}}\"><img src=\"{{ obProduct.preview_image.path }}\" alt=\"\" /></a>
                  {% endif %}
                  <div class=\"intro-label\">
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
            </div>
              {% endfor %}
              
              {% endif %}
              <!-- End Post Item -->
      
            
      
          </div>

        </div>

      </div>
        {# Render pagination buttons #}
              {% if arPaginationList is not empty %}
              <nav aria-label=\"...\">
                  <ul class=\"pagination pagination-lg\">
                  {% for arPagination in arPaginationList %}
                 <a href=\"?page={{ arPagination.value }}\" class=\"{{ arPagination.class }}\">{{ arPagination.name }}</a>
                  {% endfor %}
                  </ul>
              </nav>
              {% endif %}

              {% endif %}
      <!-- End Content -->


    </div>

</section>
<!-- End Section -->


<!-- Divider -->
<hr class=\"mt-0 mb-0\" />


<!-- <section class=\"page-section\">
  <div class=\"container relative\">

    <div class=\"row multi-columns-row\">

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Cart</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-posts\">

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

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

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

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

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

      </div>

      <div class=\"col-sm-6 col-md-3 col-lg-3\">

        <div class=\"widget\">

          <h5 class=\"widget-title font-alt\">Bestsellers</h5>

          <div class=\"widget-body\">
            <ul class=\"clearlist widget-posts\">

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

            </ul>
          </div>

        </div>

      </div>

    </div>

  </div>
</section> -->", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/shop.htm", "");
    }
}
