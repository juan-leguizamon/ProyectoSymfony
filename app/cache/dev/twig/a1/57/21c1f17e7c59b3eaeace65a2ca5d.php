<?php

/* servicioBundle:Paquete:show.html.twig */
class __TwigTemplate_a15721c1f17e7c59b3eaeace65a2ca5d extends Twig_Template
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
        echo "<h1>Paquete</h1>

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
            <th>Idpoliticacosto</th>
            <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "idPoliticaCosto"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Valor</th>
            <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "valor"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Peso</th>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "peso"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Tamaño</th>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tamaño"), "html", null, true);
        echo "</td>
        </tr>
    </tbody>
</table>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paquete"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paquete_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("paquete_delete", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\" method=\"post\">
            ";
        // line 41
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
        return "servicioBundle:Paquete:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  97 => 49,  67 => 31,  54 => 20,  95 => 41,  88 => 36,  51 => 20,  47 => 19,  60 => 27,  38 => 12,  21 => 3,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 58,  158 => 57,  107 => 41,  101 => 34,  80 => 35,  63 => 30,  36 => 13,  156 => 58,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 42,  85 => 43,  65 => 32,  59 => 22,  45 => 17,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 62,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 49,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 33,  76 => 30,  73 => 30,  69 => 33,  32 => 11,  103 => 24,  91 => 20,  74 => 22,  70 => 31,  66 => 12,  56 => 22,  25 => 7,  22 => 3,  89 => 20,  82 => 19,  42 => 18,  23 => 3,  17 => 1,  92 => 39,  86 => 44,  77 => 38,  57 => 27,  29 => 11,  24 => 6,  19 => 2,  68 => 28,  61 => 24,  44 => 16,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 51,  143 => 46,  137 => 45,  129 => 42,  121 => 47,  118 => 46,  113 => 39,  104 => 35,  99 => 33,  94 => 21,  81 => 32,  78 => 39,  72 => 16,  64 => 24,  53 => 23,  50 => 18,  48 => 17,  41 => 18,  39 => 15,  35 => 14,  33 => 12,  30 => 12,  27 => 4,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 43,  96 => 34,  93 => 38,  90 => 45,  87 => 19,  83 => 41,  79 => 40,  71 => 35,  62 => 29,  58 => 28,  55 => 21,  52 => 21,  49 => 22,  46 => 19,  43 => 19,  40 => 17,  37 => 14,  34 => 13,  31 => 13,  28 => 7,);
    }
}
