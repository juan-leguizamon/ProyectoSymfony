<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c0fb8f597897e25d26f8d5c5ffdf097e extends Twig_Template
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
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  82 => 19,  42 => 10,  23 => 5,  17 => 1,  92 => 39,  86 => 6,  77 => 39,  57 => 22,  29 => 5,  24 => 3,  19 => 2,  68 => 14,  61 => 9,  44 => 8,  20 => 2,  161 => 32,  153 => 50,  150 => 49,  147 => 48,  143 => 46,  137 => 45,  129 => 42,  121 => 41,  118 => 40,  113 => 39,  104 => 36,  99 => 33,  94 => 31,  81 => 25,  78 => 24,  72 => 16,  64 => 15,  53 => 13,  50 => 15,  48 => 14,  41 => 7,  39 => 9,  35 => 8,  33 => 4,  30 => 9,  27 => 3,  182 => 70,  176 => 66,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 53,  141 => 48,  136 => 45,  134 => 44,  131 => 43,  128 => 42,  120 => 37,  117 => 36,  114 => 35,  109 => 38,  106 => 37,  100 => 30,  96 => 32,  93 => 28,  90 => 29,  87 => 26,  83 => 24,  79 => 40,  71 => 19,  62 => 19,  58 => 8,  55 => 14,  52 => 6,  49 => 12,  46 => 14,  43 => 8,  40 => 12,  37 => 8,  34 => 7,  31 => 7,  28 => 3,);
    }
}