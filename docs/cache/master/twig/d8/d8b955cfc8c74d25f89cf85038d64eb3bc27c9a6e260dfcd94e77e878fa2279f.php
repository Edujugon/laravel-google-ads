<?php

/* index.twig */
class __TwigTemplate_b15f3e6ae701694f0772fed2e7f4b7cbb8d58e763a3bd70d08a5702f1ed1f9a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new Twig_Error_Runtime('Variable "extension" does not exist.', 7, $this->getSourceContext()); })()), "index.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["has_namespaces"]) || array_key_exists("has_namespaces", $context) ? $context["has_namespaces"] : (function () { throw new Twig_Error_Runtime('Variable "has_namespaces" does not exist.', 1, $this->getSourceContext()); })())) {
            // line 2
            $context["extension"] = "namespaces.twig";
        } else {
            // line 4
            $context["extension"] = "classes.twig";
        }
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        echo "index";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  32 => 7,  29 => 4,  26 => 2,  24 => 1,  18 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if has_namespaces %}
    {% set extension = 'namespaces.twig' %}
{% else %}
    {% set extension = 'classes.twig' %}
{% endif %}

{% extends extension %}

{% block body_class 'index' %}
", "index.twig", "/Users/Edujugon/Code/Documentation/Documentator/vendor/sami/sami/Sami/Resources/themes/default/index.twig");
    }
}
