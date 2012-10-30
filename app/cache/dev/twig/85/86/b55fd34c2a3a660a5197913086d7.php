<?php

/* servicioBundle:PoliticaCosto:show.html.twig */
class __TwigTemplate_8586b55fd34c2a3a660a5197913086d7 extends Twig_Template
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
        echo "<h1>PoliticaCosto</h1>

<table class=\"record_properties\">
    <tbody>
        <tr>
            <th>Id</th>
            <td>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tamaño</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tamaño"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Peso</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "peso"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Volumen</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "volumen"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Pais</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "pais"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Ciudad</th>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "ciudad"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Cantidad</th>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "cantidad"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("politicas"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("politicas_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("politicas_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "delete_form"), 'widget');
        echo "
            <button type=\"submit\">Delete</button>
        </form>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "servicioBundle:PoliticaCosto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 49,  67 => 31,  54 => 20,  95 => 41,  88 => 36,  51 => 20,  47 => 19,  60 => 27,  38 => 12,  21 => 3,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 24,  63 => 23,  36 => 6,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 43,  65 => 25,  59 => 22,  45 => 9,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 30,  73 => 23,  69 => 19,  32 => 11,  103 => 24,  91 => 20,  74 => 22,  70 => 27,  66 => 12,  56 => 12,  25 => 7,  22 => 3,  89 => 20,  82 => 19,  42 => 12,  23 => 3,  17 => 1,  92 => 39,  86 => 44,  77 => 38,  57 => 22,  29 => 4,  24 => 6,  19 => 2,  68 => 20,  61 => 24,  44 => 7,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 18,  78 => 39,  72 => 16,  64 => 15,  53 => 23,  50 => 18,  48 => 10,  41 => 18,  39 => 15,  35 => 8,  33 => 15,  30 => 4,  27 => 4,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 34,  93 => 48,  90 => 45,  87 => 19,  83 => 34,  79 => 40,  71 => 28,  62 => 17,  58 => 21,  55 => 21,  52 => 10,  49 => 14,  46 => 19,  43 => 8,  40 => 17,  37 => 16,  34 => 16,  31 => 4,  28 => 7,);
    }
}
