<?php

/* servicioBundle:Terrestre:new.html.twig */
class __TwigTemplate_585278d6507c9faf07a8f46a59493700 extends Twig_Template
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
        echo "<h1>Terrestre creation</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terrestre_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("terrestre"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "servicioBundle:Terrestre:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 29,  97 => 49,  67 => 31,  54 => 20,  95 => 41,  88 => 36,  51 => 24,  47 => 19,  60 => 23,  38 => 12,  21 => 3,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 35,  63 => 23,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 43,  65 => 32,  59 => 22,  45 => 9,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 30,  73 => 30,  69 => 33,  32 => 11,  103 => 24,  91 => 20,  74 => 22,  70 => 27,  66 => 12,  56 => 22,  25 => 7,  22 => 3,  89 => 20,  82 => 19,  42 => 19,  23 => 3,  17 => 1,  92 => 39,  86 => 44,  77 => 38,  57 => 27,  29 => 4,  24 => 6,  19 => 2,  68 => 25,  61 => 24,  44 => 16,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 32,  78 => 39,  72 => 16,  64 => 24,  53 => 23,  50 => 18,  48 => 17,  41 => 18,  39 => 15,  35 => 14,  33 => 15,  30 => 4,  27 => 4,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 43,  96 => 34,  93 => 38,  90 => 45,  87 => 19,  83 => 34,  79 => 40,  71 => 28,  62 => 17,  58 => 21,  55 => 25,  52 => 21,  49 => 22,  46 => 17,  43 => 19,  40 => 17,  37 => 16,  34 => 16,  31 => 13,  28 => 7,);
    }
}