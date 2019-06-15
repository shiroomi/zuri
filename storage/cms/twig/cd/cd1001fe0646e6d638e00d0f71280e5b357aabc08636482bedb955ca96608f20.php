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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/layouts/default.htm */
class __TwigTemplate_b1924983b50e79c8a75cac2dca8474e0034fccc2ab9965957a67eafeb571a562 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>ZURI TEMPLATE - ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</title>
  <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_description", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
  <meta name=\"title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "meta_title", [], "any", false, false, false, 8), "html", null, true);
        echo "\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"author\" content=\"omi\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

  <!-- Favicons -->
  <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon.png");
        echo "\">

  <!-- CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style-responsive.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.min.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vertical.min.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
  ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 27
        echo "</head>

<body class=\"appear-animate\">

  <div class=\"page-loader\">
    <div class=\"loader\">Loading...</div>
  </div>

  <!-- Page Wrap -->
  <div class=\"page\" id=\"top\">

    <!-- Header -->
    <header id=\"layout-header\">
      ";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "    </header>

    <!-- Content -->
    <section id=\"layout-content\">
      ";
        // line 45
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 46
        echo "    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
      ";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "    </footer>

  </div>
  <!-- Scripts -->
  <script type=\"text/javascript\" src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-1.11.2.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.easing.1.3.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 58
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/SmoothScroll.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.scrollTo.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.localScroll.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.viewport.mini.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.countTo.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.appear.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.sticky.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.parallax-1.1.3.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.fitvids.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/isotope.pkgd.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/imagesloaded.pkgd.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
  <!-- Replace test API Key \"AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg\" with your own one below
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
  <script type=\"text/javascript\" src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/gmap3.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/masonry.pkgd.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.simple-text-rotator.min.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/all.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/contact-form.js");
        echo "\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.ajaxchimp.min.js");
        echo "\"></script>
  <!--[if lt IE 10]><script type=\"text/javascript\" src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/placeholder.js");
        echo "\"></script><![endif]-->

  ";
        // line 83
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 84
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 85
        echo "
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 85,  259 => 84,  244 => 83,  239 => 81,  235 => 80,  231 => 79,  227 => 78,  223 => 77,  219 => 76,  215 => 75,  211 => 74,  207 => 73,  201 => 70,  197 => 69,  193 => 68,  189 => 67,  185 => 66,  181 => 65,  177 => 64,  173 => 63,  169 => 62,  165 => 61,  161 => 60,  157 => 59,  153 => 58,  149 => 57,  145 => 56,  141 => 55,  135 => 51,  131 => 50,  125 => 46,  123 => 45,  117 => 41,  113 => 40,  98 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  67 => 19,  61 => 16,  50 => 8,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <title>ZURI TEMPLATE - {{ this.page.title }}</title>
  <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
  <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
  <meta name=\"keywords\" content=\"\">
  <meta name=\"author\" content=\"omi\">
  <meta name=\"generator\" content=\"OctoberCMS\">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />

  <!-- Favicons -->
  <link rel=\"shortcut icon\" href=\"{{ 'assets/images/favicon.png'|theme }}\">

  <!-- CSS -->
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/style-responsive.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.min.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/vertical.min.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.css'|theme }}\">
  <link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css'|theme }}\">
  {% styles %}
</head>

<body class=\"appear-animate\">

  <div class=\"page-loader\">
    <div class=\"loader\">Loading...</div>
  </div>

  <!-- Page Wrap -->
  <div class=\"page\" id=\"top\">

    <!-- Header -->
    <header id=\"layout-header\">
      {% partial 'site/header' %}
    </header>

    <!-- Content -->
    <section id=\"layout-content\">
      {% page %}
    </section>

    <!-- Footer -->
    <footer id=\"layout-footer\">
      {% partial 'site/footer' %}
    </footer>

  </div>
  <!-- Scripts -->
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery-1.11.2.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.easing.1.3.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/SmoothScroll.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.scrollTo.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.localScroll.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.viewport.mini.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.countTo.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.appear.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.sticky.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.parallax-1.1.3.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.fitvids.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/isotope.pkgd.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/imagesloaded.pkgd.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.magnific-popup.min.js'|theme }}\"></script>
  <!-- Replace test API Key \"AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg\" with your own one below
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
  <script type=\"text/javascript\" src=\"{{ 'assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/gmap3.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/masonry.pkgd.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.simple-text-rotator.min.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/all.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/contact-form.js'|theme }}\"></script>
  <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.ajaxchimp.min.js'|theme }}\"></script>
  <!--[if lt IE 10]><script type=\"text/javascript\" src=\"{{ 'assets/js/placeholder.js'|theme }}\"></script><![endif]-->

  {% framework extras %}
  {% scripts %}

</body>

</html>", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/layouts/default.htm", "");
    }
}
