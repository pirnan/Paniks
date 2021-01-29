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

/* themes/furniture_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_08741ff7290984ac56ba84ea834dfb97d3d467826728037c5264369669a288ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<!-- Start: Header -->
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"navbar-header col-sm\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 70)) {
            // line 71
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 73
        echo "      </div>

      ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "call", [], "any", false, false, true, 75)) {
            // line 76
            echo "        <div class=\"col-sm\">
          <div class=\"quick-call\">
            <i class=\"fas fa-phone-square\"></i>
            ";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "call", [], "any", false, false, true, 79)) {
                // line 80
                echo "              ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "call", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 82
            echo "          </div>
        </div>
      ";
        }
        // line 85
        echo "      
      ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 86)) {
            // line 87
            echo "        <div class=\"col-sm\">
          ";
            // line 88
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 88)) {
                // line 89
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 91
            echo "        </div>
      ";
        }
        // line 93
        echo "
    </div>
  </div>
</div>
<!--End: Widget -->


<!--End: Menu -->
<div class=\"container\">
  <div class=\"clearfix main-menu\">
    ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 103)) {
            // line 104
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 104), 104, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 106
        echo "  </div>
</div>
<!--End: Widget -->


<!--Start: Flexslider -->
";
        // line 112
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 113
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 117
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 117, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 123
        echo "<!--End: Widget -->


<!-- Start: Clients -->
";
        // line 127
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 127)) {
            echo " 
  <div class=\"clients\" id=\"clients\">
    ";
            // line 129
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 129)) {
                // line 130
                echo "      <div class=\"custom-block-title\" >
        ";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients_title", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 134
            echo "    <div class=\"container\">
      ";
            // line 135
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "clients", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 139
        echo "<!--End: Widget -->


<!--Start: Top message -->
";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 143)) {
            // line 144
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topmessage", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 150
        echo "<!--End: Widget -->


<!--Start: Title -->
";
        // line 154
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 154) &&  !($context["is_front"] ?? null))) {
            // line 155
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 158
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 158), 158, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 163
        echo "<!--End: Title -->


<!--Start: Highlighted -->
";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 167)) {
            // line 168
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 170
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 170), 170, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 174
        echo "<!--End: Widget -->


<!--- Start: Main content -->
<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      ";
        // line 182
        if ( !($context["is_front"] ?? null)) {
            // line 183
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 184
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 187
        echo "
      <div class=\"row layout\">
        ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 189)) {
            // line 190
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 190, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 192
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 196
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 196)) {
            // line 197
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 197, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 199
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 199), 199, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 203
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 203)) {
            // line 204
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 204, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 206
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 206), 206, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 210
        echo "      </div>

    </div>
  </div>
</div>
<!-- End: Main content -->


<!-- Start: Top widget -->
";
        // line 219
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 219) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 219)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 219))) {
            // line 220
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
      
      ";
            // line 223
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 223)) {
                // line 224
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 225
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 225), 225, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 228
            echo "
      <div class=\"row topwidget-list clearfix\">      
        ";
            // line 230
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 230)) {
                // line 231
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 231, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 231), 231, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 232
            echo "        
        ";
            // line 233
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 233)) {
                // line 234
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 234, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 234), 234, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 235
            echo "    
        ";
            // line 236
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 236)) {
                // line 237
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 237, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 237), 237, $this->source), "html", null, true);
                echo "</div>
        ";
            }
            // line 239
            echo "      </div>

    </div>
  </div>
";
        }
        // line 244
        echo "<!--End: Widget -->


<!-- Start: Features -->
";
        // line 248
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 248) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 248)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 248))) {
            // line 249
            echo "  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 252
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 252)) {
                // line 253
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 254
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 257
            echo "
      <div class=\"row\">
        ";
            // line 259
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 259)) {
                // line 260
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 260, $this->source), "html", null, true);
                echo ">
            ";
                // line 261
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 261), 261, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 264
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 264)) {
                // line 265
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 265, $this->source), "html", null, true);
                echo ">
            ";
                // line 266
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 266), 266, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 269
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 269)) {
                // line 270
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 270, $this->source), "html", null, true);
                echo ">
            ";
                // line 271
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 271), 271, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 274
            echo "      </div>

    </div>
  </div>
";
        }
        // line 279
        echo "<!--End: Widget -->


<!-- Start: Updates widgets -->
";
        // line 283
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 283) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 283)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 283))) {
            // line 284
            echo "  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 287
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 287)) {
                // line 288
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 289
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_title", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 292
            echo "
      <div class=\"row\">     
        ";
            // line 294
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 294)) {
                // line 295
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 295, $this->source), "html", null, true);
                echo ">
            ";
                // line 296
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_first", [], "any", false, false, true, 296), 296, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 299
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 299)) {
                // line 300
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 300, $this->source), "html", null, true);
                echo ">
            ";
                // line 301
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_second", [], "any", false, false, true, 301), 301, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 303
            echo "        
        ";
            // line 304
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 304)) {
                // line 305
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 305, $this->source), "html", null, true);
                echo ">
            ";
                // line 306
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_third", [], "any", false, false, true, 306), 306, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 308
            echo "          
        ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 309)) {
                // line 310
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null), 310, $this->source), "html", null, true);
                echo ">
            ";
                // line 311
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "updates_forth", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 314
            echo "      </div>

    </div>
  </div>
";
        }
        // line 319
        echo "<!--End: Widgets -->


<!-- Start: Services widgets -->
";
        // line 323
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 323) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 323)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 323)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 323))) {
            // line 324
            echo "  <div class=\"services\" id=\"services\">    
    <div class=\"container\">
      
      ";
            // line 327
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 327)) {
                // line 328
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 329
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_title", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 332
            echo "
      <div class=\"row team-list\">        
        ";
            // line 334
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 334)) {
                // line 335
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 335, $this->source), "html", null, true);
                echo ">
            ";
                // line 336
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_first", [], "any", false, false, true, 336), 336, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 339
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 339)) {
                // line 340
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 340, $this->source), "html", null, true);
                echo ">
            ";
                // line 341
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_second", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 343
            echo "       
        ";
            // line 344
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 344)) {
                // line 345
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 345, $this->source), "html", null, true);
                echo ">
            ";
                // line 346
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_third", [], "any", false, false, true, 346), 346, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 349
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 349)) {
                // line 350
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null), 350, $this->source), "html", null, true);
                echo ">
            ";
                // line 351
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services_forth", [], "any", false, false, true, 351), 351, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 354
            echo "      </div>

    </div>
  </div>
";
        }
        // line 359
        echo "<!--End: Widgets -->


<!-- Start: Bottom widgets -->
";
        // line 363
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 363) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 363)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 363)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 363))) {
            // line 364
            echo "  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 367
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 367)) {
                // line 368
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 369
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 369), 369, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 372
            echo "
      <div class=\"row\">         
        ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 374)) {
                // line 375
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 375, $this->source), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 379
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 379)) {
                // line 380
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 380, $this->source), "html", null, true);
                echo ">
            ";
                // line 381
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 381), 381, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 383
            echo "         
        ";
            // line 384
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 384)) {
                // line 385
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 385, $this->source), "html", null, true);
                echo ">
            ";
                // line 386
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 386), 386, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 389
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 389)) {
                // line 390
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 390, $this->source), "html", null, true);
                echo ">
            ";
                // line 391
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 391), 391, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 394
            echo "      </div>

    </div>
  </div>
";
        }
        // line 399
        echo "<!--End: Widgets -->


<!-- Start: FAQ -->
";
        // line 403
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq", [], "any", false, false, true, 403)) {
            echo " 
  <div class=\"faq\" id=\"faq\">
    ";
            // line 405
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq_title", [], "any", false, false, true, 405)) {
                // line 406
                echo "      <div class=\"custom-block-title\" >
        ";
                // line 407
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq_title", [], "any", false, false, true, 407), 407, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 410
            echo "    <div class=\"container\">
      ";
            // line 411
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "faq", [], "any", false, false, true, 411), 411, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 415
        echo "<!--End: FAQ -->


<!-- Start: Footer widgets -->
";
        // line 419
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 419) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 419)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 419))) {
            // line 420
            echo "  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 423
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 423)) {
                // line 424
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 425
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 425), 425, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 428
            echo "
      <div class=\"row\">
        ";
            // line 430
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 430)) {
                // line 431
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 431, $this->source), "html", null, true);
                echo ">
            ";
                // line 432
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 432), 432, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 435
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 435)) {
                // line 436
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 436, $this->source), "html", null, true);
                echo ">
            ";
                // line 437
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 437), 437, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 440
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 440)) {
                // line 441
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 441, $this->source), "html", null, true);
                echo ">
            ";
                // line 442
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 442), 442, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 445
            echo "      </div>

    </div>
  </div>
";
        }
        // line 450
        echo "<!--End: Widgets -->


<!-- Start: Copyright -->
<div class=\"copyright\">
    <div class=\"container\">

      <span>Copyright © ";
        // line 457
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 459
        if (($context["show_credit_link"] ?? null)) {
            // line 460
            echo "        <span class=\"credit-link\">Designed By <a href=\"https://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 462
        echo "
      ";
        // line 463
        if (($context["show_social_icon"] ?? null)) {
            // line 464
            echo "        <p class=\"social-media\">
          ";
            // line 465
            if (($context["facebook_url"] ?? null)) {
                // line 466
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 466, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
          ";
            }
            // line 468
            echo "          ";
            if (($context["twitter_url"] ?? null)) {
                // line 469
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 469, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
          ";
            }
            // line 471
            echo "          ";
            if (($context["linkedin_url"] ?? null)) {
                // line 472
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 472, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
          ";
            }
            // line 474
            echo "          ";
            if (($context["instagram_url"] ?? null)) {
                // line 475
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 475, $this->source), "html", null, true);
                echo "\" class=\"instagram\" target=\"_blank\" ><i class=\"fab fa-instagram\"></i></a>
          ";
            }
            // line 477
            echo "          ";
            if (($context["rss_url"] ?? null)) {
                // line 478
                echo "            <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 478, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
          ";
            }
            // line 480
            echo "        </p>
      ";
        }
        // line 482
        echo "
  </div>
</div>
<!--End: Widget -->";
    }

    public function getTemplateName()
    {
        return "themes/furniture_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  934 => 482,  930 => 480,  924 => 478,  921 => 477,  915 => 475,  912 => 474,  906 => 472,  903 => 471,  897 => 469,  894 => 468,  888 => 466,  886 => 465,  883 => 464,  881 => 463,  878 => 462,  874 => 460,  872 => 459,  867 => 457,  858 => 450,  851 => 445,  845 => 442,  840 => 441,  837 => 440,  831 => 437,  826 => 436,  823 => 435,  817 => 432,  812 => 431,  810 => 430,  806 => 428,  800 => 425,  797 => 424,  795 => 423,  790 => 420,  788 => 419,  782 => 415,  775 => 411,  772 => 410,  766 => 407,  763 => 406,  761 => 405,  756 => 403,  750 => 399,  743 => 394,  737 => 391,  732 => 390,  729 => 389,  723 => 386,  718 => 385,  716 => 384,  713 => 383,  707 => 381,  702 => 380,  699 => 379,  693 => 376,  688 => 375,  686 => 374,  682 => 372,  676 => 369,  673 => 368,  671 => 367,  666 => 364,  664 => 363,  658 => 359,  651 => 354,  645 => 351,  640 => 350,  637 => 349,  631 => 346,  626 => 345,  624 => 344,  621 => 343,  615 => 341,  610 => 340,  607 => 339,  601 => 336,  596 => 335,  594 => 334,  590 => 332,  584 => 329,  581 => 328,  579 => 327,  574 => 324,  572 => 323,  566 => 319,  559 => 314,  553 => 311,  548 => 310,  546 => 309,  543 => 308,  537 => 306,  532 => 305,  530 => 304,  527 => 303,  521 => 301,  516 => 300,  513 => 299,  507 => 296,  502 => 295,  500 => 294,  496 => 292,  490 => 289,  487 => 288,  485 => 287,  480 => 284,  478 => 283,  472 => 279,  465 => 274,  459 => 271,  454 => 270,  451 => 269,  445 => 266,  440 => 265,  437 => 264,  431 => 261,  426 => 260,  424 => 259,  420 => 257,  414 => 254,  411 => 253,  409 => 252,  404 => 249,  402 => 248,  396 => 244,  389 => 239,  381 => 237,  379 => 236,  376 => 235,  368 => 234,  366 => 233,  363 => 232,  355 => 231,  353 => 230,  349 => 228,  343 => 225,  340 => 224,  338 => 223,  333 => 220,  331 => 219,  320 => 210,  313 => 206,  307 => 204,  304 => 203,  297 => 199,  291 => 197,  288 => 196,  281 => 192,  275 => 190,  273 => 189,  269 => 187,  263 => 184,  260 => 183,  258 => 182,  248 => 174,  241 => 170,  237 => 168,  235 => 167,  229 => 163,  221 => 158,  216 => 155,  214 => 154,  208 => 150,  201 => 146,  197 => 144,  195 => 143,  189 => 139,  182 => 135,  179 => 134,  173 => 131,  170 => 130,  168 => 129,  163 => 127,  157 => 123,  151 => 119,  142 => 117,  138 => 116,  133 => 113,  131 => 112,  123 => 106,  117 => 104,  115 => 103,  103 => 93,  99 => 91,  93 => 89,  91 => 88,  88 => 87,  86 => 86,  83 => 85,  78 => 82,  72 => 80,  70 => 79,  65 => 76,  63 => 75,  59 => 73,  53 => 71,  51 => 70,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/furniture_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\paniks_drupal\\themes\\furniture_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 70, "for" => 116);
        static $filters = array("escape" => 71, "raw" => 117, "date" => 457);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
