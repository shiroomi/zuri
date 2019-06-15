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

/* C:\xampp\htdocs\zuri/themes/zuri-theme/partials/site/footer.htm */
class __TwigTemplate_de8c8776b700fdbc2d43d38c4faa9b5690d6305f20ba9f4e14b42a22c7959d59 extends \Twig\Template
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
        echo "<footer class=\"page-section bg-gray-lighter footer pb-60\">
                <div class=\"container\">

                    <!-- Footer Logo -->
                    <div class=\"local-scroll mb-30 wow fadeInUp\" data-wow-duration=\"1.5s\">
                        <a href=\"#top\"><img src=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-footer.png");
        echo "\" width=\"78\" height=\"36\" alt=\"\" /></a>
                    </div>
                    <!-- End Footer Logo -->

                    <!-- Social Links -->
                    <div class=\"footer-social-links mb-110 mb-xs-60\">
                        <a href=\"#\" title=\"Facebook\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\" title=\"Twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\" title=\"Behance\" target=\"_blank\"><i class=\"fa fa-behance\"></i></a>
                        <a href=\"#\" title=\"LinkedIn+\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                        <a href=\"#\" title=\"Pinterest\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
                    </div>
                    <!-- End Social Links -->

                    <!-- Footer Text -->
                    <div class=\"footer-text\">

                        <!-- Copyright -->
                        <div class=\"footer-copy font-alt\">
                            <a href=\"#\" target=\"_blank\">&copy; 2017 - ";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</a>.
                        </div>
                        
                    </div>
                    <!-- End Footer Text -->

                 </div>


                 <!-- Top Link -->
                 <div class=\"local-scroll\">
                     <a href=\"#top\" class=\"link-to-top\"><i class=\"fa fa-caret-up\"></i></a>
                 </div>
                 <!-- End Top Link -->

            </footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"page-section bg-gray-lighter footer pb-60\">
                <div class=\"container\">

                    <!-- Footer Logo -->
                    <div class=\"local-scroll mb-30 wow fadeInUp\" data-wow-duration=\"1.5s\">
                        <a href=\"#top\"><img src=\"{{'assets/images/logo-footer.png'|theme}}\" width=\"78\" height=\"36\" alt=\"\" /></a>
                    </div>
                    <!-- End Footer Logo -->

                    <!-- Social Links -->
                    <div class=\"footer-social-links mb-110 mb-xs-60\">
                        <a href=\"#\" title=\"Facebook\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                        <a href=\"#\" title=\"Twitter\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                        <a href=\"#\" title=\"Behance\" target=\"_blank\"><i class=\"fa fa-behance\"></i></a>
                        <a href=\"#\" title=\"LinkedIn+\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                        <a href=\"#\" title=\"Pinterest\" target=\"_blank\"><i class=\"fa fa-pinterest\"></i></a>
                    </div>
                    <!-- End Social Links -->

                    <!-- Footer Text -->
                    <div class=\"footer-text\">

                        <!-- Copyright -->
                        <div class=\"footer-copy font-alt\">
                            <a href=\"#\" target=\"_blank\">&copy; 2017 - {{ \"now\"|date(\"Y\") }}</a>.
                        </div>
                        
                    </div>
                    <!-- End Footer Text -->

                 </div>


                 <!-- Top Link -->
                 <div class=\"local-scroll\">
                     <a href=\"#top\" class=\"link-to-top\"><i class=\"fa fa-caret-up\"></i></a>
                 </div>
                 <!-- End Top Link -->

            </footer>", "C:\\xampp\\htdocs\\zuri/themes/zuri-theme/partials/site/footer.htm", "");
    }
}
