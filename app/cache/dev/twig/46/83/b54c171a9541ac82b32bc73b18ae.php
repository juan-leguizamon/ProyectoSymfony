<?php

/* TwigBundle:Exception:exception.xml.twig */
class __TwigTemplate_4683b54c171a9541ac82b32bc73b18ae extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
        echo "\">
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 5
            echo "    <exception class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "class"), "html", null, true);
            echo "\" message=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "message"), "html", null, true);
            echo "\">
";
            // line 6
            $this->env->loadTemplate("TwigBundle:Exception:traces.xml.twig")->display(array("exception" => $this->getContext($context, "e")));
            // line 7
            echo "    </exception>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 9
        echo "</error>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 79,  189 => 78,  187 => 77,  184 => 76,  178 => 72,  170 => 67,  157 => 61,  152 => 59,  145 => 55,  130 => 48,  125 => 46,  119 => 45,  116 => 44,  112 => 43,  102 => 36,  98 => 34,  76 => 28,  73 => 27,  69 => 26,  32 => 11,  103 => 24,  91 => 20,  74 => 16,  70 => 14,  66 => 12,  56 => 22,  25 => 4,  22 => 3,  89 => 20,  82 => 19,  42 => 7,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  77 => 17,  57 => 22,  29 => 4,  24 => 6,  19 => 2,  68 => 14,  61 => 24,  44 => 8,  20 => 2,  161 => 63,  153 => 50,  150 => 49,  147 => 48,  143 => 46,  137 => 45,  129 => 42,  121 => 41,  118 => 40,  113 => 39,  104 => 36,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 13,  50 => 15,  48 => 8,  41 => 6,  39 => 5,  35 => 8,  33 => 5,  30 => 4,  27 => 4,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 60,  151 => 54,  149 => 53,  141 => 54,  136 => 51,  134 => 50,  131 => 43,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 22,  93 => 31,  90 => 29,  87 => 19,  83 => 24,  79 => 40,  71 => 19,  62 => 19,  58 => 23,  55 => 14,  52 => 6,  49 => 9,  46 => 19,  43 => 8,  40 => 6,  37 => 6,  34 => 7,  31 => 6,  28 => 3,);
    }
}
