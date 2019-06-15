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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/partials/site/header.htm */
class __TwigTemplate_f43b12874afe22818345f6ce5eb76865791e1318c57464ea81514fc3ff31d65d extends \Twig\Template
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
        echo "<nav class=\"main-nav dark transparent stick-fixed\">
  <div class=\"full-wrapper relative clearfix\">

    <div class=\"nav-logo-wrap local-scroll\">
      <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\" class=\"logo\">
        <img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/logo-white.png");
        echo "\" alt=\"\" />
      </a>
    </div>
    <div class=\"mobile-nav\">
      <i class=\"fa fa-bars\"></i>
    </div>

    <div class=\"inner-nav desktop-nav\">
      <ul class=\"clearlist\">

        <li>
          <a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\" class=\"active\">Home </a>
        </li>

        <li>
          <a href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shop");
        echo "\">Shop</a>
        </li>

        <li>
          <a href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("faq");
        echo "\">FAQ </a>
        </li>

        <li>
          <a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About Us </a>
        </li>

        <li>
          <a href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact Us</a>
        </li>

        <li><a>&nbsp;</a></li>

        <li>
          <a href=\" #\" class=\"mn-has-sub\"><i class=\"fa fa-search\"></i> Search</a>

          <ul class=\"mn-sub\">

            <li>
              <div class=\"mn-wrap\">
                <form method=\"post\" class=\"form\">
                  <div class=\"search-wrap\">
                    <button class=\"search-button animate\" type=\"submit\" title=\"Start Search\">
                      <i class=\"fa fa-search\"></i>
                    </button>
                    <input type=\"text\" class=\"form-control search-field\" placeholder=\"Search...\">
                  </div>
                </form>
              </div>
            </li>

          </ul>

        </li>

        <li>
          <a href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("shopCart");
        echo "\"><i class=\"fa fa-shopping-cart\"></i> Cart(0)</a>
        </li>

        <li>
          <a href=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("account");
        echo "\">Login / Register</a>
        </li>

      </ul>
    </div>

  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 65,  118 => 61,  87 => 33,  80 => 29,  73 => 25,  66 => 21,  59 => 17,  45 => 6,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"main-nav dark transparent stick-fixed\">
  <div class=\"full-wrapper relative clearfix\">

    <div class=\"nav-logo-wrap local-scroll\">
      <a href=\"{{'index'|page }}\" class=\"logo\">
        <img src=\"{{'/assets/images/logo-white.png'|theme }}\" alt=\"\" />
      </a>
    </div>
    <div class=\"mobile-nav\">
      <i class=\"fa fa-bars\"></i>
    </div>

    <div class=\"inner-nav desktop-nav\">
      <ul class=\"clearlist\">

        <li>
          <a href=\"{{'index'|page}}\" class=\"active\">Home </a>
        </li>

        <li>
          <a href=\"{{'shop'|page }}\">Shop</a>
        </li>

        <li>
          <a href=\"{{'faq'|page }}\">FAQ </a>
        </li>

        <li>
          <a href=\"{{'about'|page }}\">About Us </a>
        </li>

        <li>
          <a href=\"{{'contact'|page }}\">Contact Us</a>
        </li>

        <li><a>&nbsp;</a></li>

        <li>
          <a href=\" #\" class=\"mn-has-sub\"><i class=\"fa fa-search\"></i> Search</a>

          <ul class=\"mn-sub\">

            <li>
              <div class=\"mn-wrap\">
                <form method=\"post\" class=\"form\">
                  <div class=\"search-wrap\">
                    <button class=\"search-button animate\" type=\"submit\" title=\"Start Search\">
                      <i class=\"fa fa-search\"></i>
                    </button>
                    <input type=\"text\" class=\"form-control search-field\" placeholder=\"Search...\">
                  </div>
                </form>
              </div>
            </li>

          </ul>

        </li>

        <li>
          <a href=\"{{'shopCart'|page }}\"><i class=\"fa fa-shopping-cart\"></i> Cart(0)</a>
        </li>

        <li>
          <a href=\"{{'account'|page }}\">Login / Register</a>
        </li>

      </ul>
    </div>

  </div>
</nav>", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/partials/site/header.htm", "");
    }
}
