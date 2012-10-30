<?php

/* WebProfilerBundle:Router:panel.html.twig */
class __TwigTemplate_fd078a3f9bc818e967221d208fd6a2ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Routing for \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "pathinfo"), "html", null, true);
        echo "\"</h2>

<ul>
    <li>
        <strong>Route:&nbsp;</strong>
        ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "request"), "route")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "route"), "html", null, true);
            echo "
        ";
        } else {
            // line 9
            echo "            <em>No matching route</em>
        ";
        }
        // line 11
        echo "    </li>
    <li>
        <strong>Route parameters:&nbsp;</strong>
        ";
        // line 14
        if (twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "request"), "routeParams"))) {
            // line 15
            echo "            ";
            $this->env->loadTemplate("WebProfilerBundle:Profiler:table.html.twig")->display(array("data" => $this->getAttribute($this->getContext($context, "request"), "routeParams"), "class" => "inline"));
            // line 16
            echo "        ";
        } else {
            // line 17
            echo "            <em>No parameters</em>
        ";
        }
        // line 19
        echo "    </li>
    ";
        // line 20
        if ($this->getAttribute($this->getContext($context, "router"), "redirect")) {
            // line 21
            echo "    <li>
        <strong>Redirecting to:&nbsp;</strong> \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetUrl"), "html", null, true);
            echo "\" ";
            if ($this->getAttribute($this->getContext($context, "router"), "targetRoute")) {
                echo "(route: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "router"), "targetRoute"), "html", null, true);
                echo "\")";
            }
            // line 23
            echo "    <li>
    ";
        }
        // line 25
        echo "    <li>
        <strong>Route matching logs</strong>
        <table class=\"routing inline\">
            <tr>
                <th>Route name</th>
                <th>Pattern</th>
                <th>Log</th>
            </tr>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "traces"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 34
            echo "                <tr class=\"";
            echo (((1 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("almost") : ((((2 == $this->getAttribute($this->getContext($context, "trace"), "level"))) ? ("matches") : (""))));
            echo "\">
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "name"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "pattern"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trace"), "log"), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        echo "        </table>
        <em><small>Note: The above matching is based on the configuration for the current router which might differ from
        the configuration used while routing this request.</small></em>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Router:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  18 => 1,  260 => 236,  258 => 235,  255 => 234,  354 => 163,  345 => 160,  341 => 159,  338 => 158,  333 => 157,  321 => 149,  314 => 145,  307 => 141,  300 => 137,  286 => 129,  279 => 125,  272 => 121,  257 => 109,  236 => 218,  215 => 83,  212 => 82,  204 => 78,  201 => 77,  190 => 72,  133 => 47,  126 => 45,  111 => 40,  84 => 28,  784 => 466,  781 => 465,  770 => 463,  766 => 462,  762 => 460,  749 => 459,  723 => 454,  720 => 453,  701 => 451,  684 => 450,  680 => 448,  676 => 447,  672 => 446,  668 => 445,  664 => 444,  660 => 443,  657 => 442,  655 => 441,  638 => 440,  627 => 439,  612 => 434,  607 => 432,  603 => 431,  600 => 430,  586 => 429,  554 => 399,  536 => 396,  519 => 395,  516 => 394,  514 => 393,  509 => 391,  504 => 389,  248 => 136,  177 => 85,  159 => 79,  144 => 72,  135 => 69,  122 => 59,  180 => 69,  174 => 84,  168 => 60,  386 => 160,  383 => 159,  377 => 158,  375 => 157,  368 => 156,  364 => 155,  360 => 153,  358 => 152,  355 => 151,  352 => 150,  350 => 149,  342 => 147,  340 => 146,  337 => 145,  331 => 156,  328 => 140,  325 => 139,  323 => 150,  318 => 135,  312 => 131,  309 => 130,  306 => 129,  304 => 128,  278 => 114,  273 => 111,  262 => 105,  256 => 103,  252 => 101,  250 => 105,  245 => 97,  238 => 219,  232 => 89,  229 => 88,  226 => 89,  224 => 86,  219 => 83,  207 => 73,  205 => 76,  200 => 92,  191 => 68,  188 => 67,  167 => 82,  146 => 52,  138 => 49,  105 => 49,  186 => 87,  172 => 58,  165 => 64,  162 => 80,  132 => 54,  108 => 39,  75 => 25,  97 => 43,  67 => 20,  54 => 15,  95 => 23,  88 => 28,  51 => 17,  47 => 17,  60 => 21,  38 => 11,  21 => 3,  299 => 125,  293 => 133,  290 => 120,  287 => 119,  285 => 118,  280 => 115,  274 => 248,  271 => 110,  268 => 84,  266 => 107,  261 => 80,  247 => 79,  243 => 101,  228 => 75,  220 => 73,  218 => 72,  213 => 79,  209 => 81,  202 => 71,  196 => 74,  183 => 68,  181 => 63,  175 => 59,  158 => 59,  107 => 41,  101 => 25,  80 => 19,  63 => 22,  36 => 6,  156 => 56,  148 => 55,  142 => 50,  140 => 71,  127 => 45,  123 => 44,  115 => 55,  110 => 42,  85 => 33,  65 => 21,  59 => 18,  45 => 15,  26 => 6,  223 => 88,  214 => 90,  210 => 78,  203 => 93,  199 => 83,  194 => 69,  192 => 90,  189 => 70,  187 => 77,  184 => 76,  178 => 72,  170 => 64,  157 => 78,  152 => 54,  145 => 58,  130 => 47,  125 => 52,  119 => 45,  116 => 44,  112 => 43,  102 => 37,  98 => 36,  76 => 26,  73 => 24,  69 => 23,  32 => 8,  103 => 24,  91 => 31,  74 => 17,  70 => 22,  66 => 20,  56 => 14,  25 => 4,  22 => 2,  89 => 34,  82 => 23,  42 => 11,  23 => 3,  17 => 1,  92 => 39,  86 => 39,  77 => 23,  57 => 27,  29 => 6,  24 => 3,  19 => 2,  68 => 13,  61 => 21,  44 => 12,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 57,  137 => 45,  129 => 46,  121 => 35,  118 => 50,  113 => 44,  104 => 35,  99 => 33,  94 => 35,  81 => 27,  78 => 32,  72 => 25,  64 => 19,  53 => 15,  50 => 18,  48 => 16,  41 => 18,  39 => 12,  35 => 6,  33 => 9,  30 => 4,  27 => 6,  182 => 70,  176 => 62,  169 => 83,  163 => 60,  160 => 53,  155 => 56,  151 => 62,  149 => 53,  141 => 56,  136 => 55,  134 => 50,  131 => 43,  128 => 39,  120 => 51,  117 => 43,  114 => 41,  109 => 38,  106 => 41,  100 => 34,  96 => 32,  93 => 30,  90 => 21,  87 => 28,  83 => 38,  79 => 24,  71 => 23,  62 => 11,  58 => 20,  55 => 19,  52 => 19,  49 => 16,  46 => 11,  43 => 14,  40 => 11,  37 => 10,  34 => 9,  31 => 10,  28 => 7,);
    }
}
