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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/pages/shopCart.htm */
class __TwigTemplate_18d612c22ec84f3162a4d5a3c4948b0f61013aa2f820835d6e74e8f624747b21 extends \Twig\Template
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
        <h1 class=\"hs-line-11 font-alt mb-0\">Shopping Cart</h1>
      </div>

      <div class=\"col-md-4 mt-30\">
        <div class=\"mod-breadcrumbs font-alt align-right\">
          <a href=\"#\">Home</a>&nbsp;/&nbsp;<a href=\"#\">Shop</a>&nbsp;/&nbsp;<span>Cart</span>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- End Head Section -->


<!-- Section -->
<section class=\"page-section\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">

        <table class=\"table table-striped shopping-cart-table\">
          <tr>
            <th class=\"hidden-xs\">
              Photo
            </th>
            <th>
              Product
            </th>
            <th>
              Q-ty
            </th>
            <th>
              Total
            </th>
            <th>

            </th>
          </tr>
          <tr>
            <td class=\"hidden-xs\">
              <a href=\"\"><img src=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/previews/shop-prev-5.jpg");
        echo "\" alt=\"\" /></a>
            </td>
            <td>
              <a href=\"#\" title=\"\">Polo Shirt With Argyle Print</a>
            </td>
            <td>
              <form class=\"form\">
                <input type=\"number\" class=\"input-sm\" style=\"width: 60px;\" min=\"1\" max=\"100\" value=\"1\" />
              </form>
            </td>
            <td>
              \$25.99
            </td>
            <td>
              <a href=\"\"><i class=\"fa fa-times\"></i> <span class=\"hidden-xs\">Remove</span></a>
            </td>
          </tr>
          <tr>
            <td class=\"hidden-xs\">
              <a href=\"\"><img src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/shop/previews/shop-prev-3.jpg");
        echo "\" alt=\"\" /></a>
            </td>
            <td>
              <a href=\"#\" title=\"\">Shirt With Mesh Sleeves</a>
            </td>
            <td>
              <form class=\"form\">
                <input type=\"number\" class=\"input-sm\" style=\"width: 60px;\" min=\"1\" max=\"100\" value=\"1\" />
              </form>
            </td>
            <td>
              \$30.00
            </td>
            <td>
              <a href=\"\"><i class=\"fa fa-times\"></i> <span class=\"hidden-xs\">Remove</span></a>
            </td>
          </tr>
        </table>

        <hr />

        <div class=\"row\">
          <div class=\"col-sm-8\">
            <form action=\"#\" class=\"form\">
              <input placeholder=\"Coupon code\" class=\"input-sm mb-xs-10\" style=\"width: 250px;\" type=\"text\" pattern=\".{3,100}\" required />
              &nbsp;<button type=\"submit\" class=\"btn btn-mod btn-round btn-gray btn-small mb-xs-10\">Apply Coupon</button>
            </form>
          </div>
          <div class=\"col-sm-4 text align-right\">

            <div>
              <a href=\"\" class=\"btn btn-mod btn-gray btn-round btn-small\">Update Cart</a>
            </div>

          </div>
        </div>

        <hr class=\"mb-60\" />

        <div class=\"row\">
          <div class=\"col-sm-6\">

            <h3 class=\"small-title font-alt\">Calculate Shipping</h3>

            <form action=\"#\" class=\"form\">

              <div class=\"mb-10\">
                <select class=\"input-md form-control\">
                  <option>Select Location</option>

                </select>
              </div>

              <div class=\"mb-10\">
                <input placeholder=\"State\" class=\"input-md form-control\" type=\"text\" pattern=\".{3,100}\" />
              </div>

              <div class=\"mb-10\">
                <input placeholder=\"Postcode / Zip\" class=\"input-md form-control\" type=\"text\" pattern=\".{3,100}\" />
              </div>

            </form>

          </div>
          <div class=\"col-sm-6 text align-right pt-10\">


            <div>
              Cart subtotal: <strong>\$45.95</strong>
            </div>

            <div class=\"mb-10\">
              Shipping: <strong>\$30.00</strong>
            </div>

            <div class=\"lead mt-0 mb-30\">
              Order Total: <strong>\$75.99</strong>
            </div>

            <div>
              <a href=\"\" class=\"btn btn-mod btn-round btn-large\">Proceed to Checkout</a>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- End Section -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/shopCart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 70,  90 => 51,  38 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Head Section -->
<section class=\"page-section bg-dark-alfa-70 parallax-3\" data-background=\"{{'/assets/images/full-width-images/section-bg-1.jpg'|theme }}\">
  <div class=\"relative container align-left\">

    <div class=\"row\">

      <div class=\"col-md-8\">
        <h1 class=\"hs-line-11 font-alt mb-0\">Shopping Cart</h1>
      </div>

      <div class=\"col-md-4 mt-30\">
        <div class=\"mod-breadcrumbs font-alt align-right\">
          <a href=\"#\">Home</a>&nbsp;/&nbsp;<a href=\"#\">Shop</a>&nbsp;/&nbsp;<span>Cart</span>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- End Head Section -->


<!-- Section -->
<section class=\"page-section\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">

        <table class=\"table table-striped shopping-cart-table\">
          <tr>
            <th class=\"hidden-xs\">
              Photo
            </th>
            <th>
              Product
            </th>
            <th>
              Q-ty
            </th>
            <th>
              Total
            </th>
            <th>

            </th>
          </tr>
          <tr>
            <td class=\"hidden-xs\">
              <a href=\"\"><img src=\"{{'/assets/images/shop/previews/shop-prev-5.jpg'|theme }}\" alt=\"\" /></a>
            </td>
            <td>
              <a href=\"#\" title=\"\">Polo Shirt With Argyle Print</a>
            </td>
            <td>
              <form class=\"form\">
                <input type=\"number\" class=\"input-sm\" style=\"width: 60px;\" min=\"1\" max=\"100\" value=\"1\" />
              </form>
            </td>
            <td>
              \$25.99
            </td>
            <td>
              <a href=\"\"><i class=\"fa fa-times\"></i> <span class=\"hidden-xs\">Remove</span></a>
            </td>
          </tr>
          <tr>
            <td class=\"hidden-xs\">
              <a href=\"\"><img src=\"{{'/assets/images/shop/previews/shop-prev-3.jpg'|theme }}\" alt=\"\" /></a>
            </td>
            <td>
              <a href=\"#\" title=\"\">Shirt With Mesh Sleeves</a>
            </td>
            <td>
              <form class=\"form\">
                <input type=\"number\" class=\"input-sm\" style=\"width: 60px;\" min=\"1\" max=\"100\" value=\"1\" />
              </form>
            </td>
            <td>
              \$30.00
            </td>
            <td>
              <a href=\"\"><i class=\"fa fa-times\"></i> <span class=\"hidden-xs\">Remove</span></a>
            </td>
          </tr>
        </table>

        <hr />

        <div class=\"row\">
          <div class=\"col-sm-8\">
            <form action=\"#\" class=\"form\">
              <input placeholder=\"Coupon code\" class=\"input-sm mb-xs-10\" style=\"width: 250px;\" type=\"text\" pattern=\".{3,100}\" required />
              &nbsp;<button type=\"submit\" class=\"btn btn-mod btn-round btn-gray btn-small mb-xs-10\">Apply Coupon</button>
            </form>
          </div>
          <div class=\"col-sm-4 text align-right\">

            <div>
              <a href=\"\" class=\"btn btn-mod btn-gray btn-round btn-small\">Update Cart</a>
            </div>

          </div>
        </div>

        <hr class=\"mb-60\" />

        <div class=\"row\">
          <div class=\"col-sm-6\">

            <h3 class=\"small-title font-alt\">Calculate Shipping</h3>

            <form action=\"#\" class=\"form\">

              <div class=\"mb-10\">
                <select class=\"input-md form-control\">
                  <option>Select Location</option>

                </select>
              </div>

              <div class=\"mb-10\">
                <input placeholder=\"State\" class=\"input-md form-control\" type=\"text\" pattern=\".{3,100}\" />
              </div>

              <div class=\"mb-10\">
                <input placeholder=\"Postcode / Zip\" class=\"input-md form-control\" type=\"text\" pattern=\".{3,100}\" />
              </div>

            </form>

          </div>
          <div class=\"col-sm-6 text align-right pt-10\">


            <div>
              Cart subtotal: <strong>\$45.95</strong>
            </div>

            <div class=\"mb-10\">
              Shipping: <strong>\$30.00</strong>
            </div>

            <div class=\"lead mt-0 mb-30\">
              Order Total: <strong>\$75.99</strong>
            </div>

            <div>
              <a href=\"\" class=\"btn btn-mod btn-round btn-large\">Proceed to Checkout</a>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<!-- End Section -->", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/pages/shopCart.htm", "");
    }
}
