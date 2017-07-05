<?php

/* class.twig */
class __TwigTemplate_bbfe127b573458def951d783015732fd405f7d271e1cce93b9833f91ca68eb99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "class.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'page_id' => array($this, 'block_page_id'),
            'below_menu' => array($this, 'block_below_menu'),
            'page_content' => array($this, 'block_page_content'),
            'class_signature' => array($this, 'block_class_signature'),
            'method_signature' => array($this, 'block_method_signature'),
            'method_parameters_signature' => array($this, 'block_method_parameters_signature'),
            'parameters' => array($this, 'block_parameters'),
            'return' => array($this, 'block_return'),
            'exceptions' => array($this, 'block_exceptions'),
            'see' => array($this, 'block_see'),
            'constants' => array($this, 'block_constants'),
            'properties' => array($this, 'block_properties'),
            'methods' => array($this, 'block_methods'),
            'methods_details' => array($this, 'block_methods_details'),
            'method' => array($this, 'block_method'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"] = $this->loadTemplate("macros.twig", "class.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 3, $this->getSourceContext()); })());
        echo " | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "class";
    }

    // line 5
    public function block_page_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("class:" . twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 5, $this->getSourceContext()); })()), "name", array()), array("\\" => "_"))), "html", null, true);
    }

    // line 7
    public function block_below_menu($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 8, $this->getSourceContext()); })()), "namespace", array())) {
            // line 9
            echo "        <div class=\"namespace-breadcrumbs\">
            <ol class=\"breadcrumb\">
                <li><span class=\"label label-default\">";
            // line 11
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 11, $this->getSourceContext()); })()), "categoryName", array());
            echo "</span></li>
                ";
            // line 12
            echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_breadcrumbs(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 12, $this->getSourceContext()); })()), "namespace", array()));
            // line 13
            echo "<li>";
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 13, $this->getSourceContext()); })()), "shortname", array());
            echo "</li>
            </ol>
        </div>
    ";
        }
    }

    // line 19
    public function block_page_content($context, array $blocks = array())
    {
        // line 20
        echo "
    <div class=\"page-header\">
        <h1>
            ";
        // line 23
        echo twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 23, $this->getSourceContext()); })()), "name", array()), "\\"));
        echo "
            ";
        // line 24
        echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_deprecated((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 24, $this->getSourceContext()); })()));
        echo "
        </h1>
    </div>

    <p>";
        // line 28
        $this->displayBlock("class_signature", $context, $blocks);
        echo "</p>

    ";
        // line 30
        echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_deprecations((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 30, $this->getSourceContext()); })()));
        echo "

    ";
        // line 32
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 32, $this->getSourceContext()); })()), "shortdesc", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 32, $this->getSourceContext()); })()), "longdesc", array()))) {
            // line 33
            echo "        <div class=\"description\">
            ";
            // line 34
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 34, $this->getSourceContext()); })()), "shortdesc", array())) {
                // line 35
                echo "<p>";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 35, $this->getSourceContext()); })()), "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 35, $this->getSourceContext()); })()));
                echo "</p>";
            }
            // line 37
            echo "            ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 37, $this->getSourceContext()); })()), "longdesc", array())) {
                // line 38
                echo "<p>";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 38, $this->getSourceContext()); })()), "longdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 38, $this->getSourceContext()); })()));
                echo "</p>";
            }
            // line 40
            echo "            ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 40, $this->getSourceContext()); })()), "config", array(0 => "insert_todos"), "method") == true)) {
                // line 41
                echo "                ";
                echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_todos((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 41, $this->getSourceContext()); })()));
                echo "
            ";
            }
            // line 43
            echo "        </div>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((isset($context["traits"]) || array_key_exists("traits", $context) ? $context["traits"] : (function () { throw new Twig_Error_Runtime('Variable "traits" does not exist.', 46, $this->getSourceContext()); })())) {
            // line 47
            echo "        <h2>Traits</h2>

        ";
            // line 49
            echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_render_classes((isset($context["traits"]) || array_key_exists("traits", $context) ? $context["traits"] : (function () { throw new Twig_Error_Runtime('Variable "traits" does not exist.', 49, $this->getSourceContext()); })()));
            echo "
    ";
        }
        // line 51
        echo "
    ";
        // line 52
        if ((isset($context["constants"]) || array_key_exists("constants", $context) ? $context["constants"] : (function () { throw new Twig_Error_Runtime('Variable "constants" does not exist.', 52, $this->getSourceContext()); })())) {
            // line 53
            echo "        <h2>Constants</h2>

        ";
            // line 55
            $this->displayBlock("constants", $context, $blocks);
            echo "
    ";
        }
        // line 57
        echo "
    ";
        // line 58
        if ((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new Twig_Error_Runtime('Variable "properties" does not exist.', 58, $this->getSourceContext()); })())) {
            // line 59
            echo "        <h2>Properties</h2>

        ";
            // line 61
            $this->displayBlock("properties", $context, $blocks);
            echo "
    ";
        }
        // line 63
        echo "
    ";
        // line 64
        if ((isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new Twig_Error_Runtime('Variable "methods" does not exist.', 64, $this->getSourceContext()); })())) {
            // line 65
            echo "        <h2>Methods</h2>

        ";
            // line 67
            $this->displayBlock("methods", $context, $blocks);
            echo "

        <h2>Details</h2>

        ";
            // line 71
            $this->displayBlock("methods_details", $context, $blocks);
            echo "
    ";
        }
        // line 73
        echo "
";
    }

    // line 76
    public function block_class_signature($context, array $blocks = array())
    {
        // line 77
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 77, $this->getSourceContext()); })()), "interface", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 77, $this->getSourceContext()); })()), "abstract", array()))) {
            echo "abstract ";
        }
        // line 78
        echo "    ";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 78, $this->getSourceContext()); })()), "categoryName", array());
        echo "
    <strong>";
        // line 79
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 79, $this->getSourceContext()); })()), "shortname", array());
        echo "</strong>";
        // line 80
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 80, $this->getSourceContext()); })()), "parent", array())) {
            // line 81
            echo "        extends ";
            echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_class_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 81, $this->getSourceContext()); })()), "parent", array()));
        }
        // line 83
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 83, $this->getSourceContext()); })()), "interfaces", array())) > 0)) {
            // line 84
            echo "        implements
        ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 85, $this->getSourceContext()); })()), "interfaces", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["interface"]) {
                // line 86
                echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_class_link($context["interface"]);
                // line 87
                if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interface'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 90
        echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_source_link((isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 90, $this->getSourceContext()); })()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 90, $this->getSourceContext()); })()));
        echo "
";
    }

    // line 93
    public function block_method_signature($context, array $blocks = array())
    {
        // line 94
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 94, $this->getSourceContext()); })()), "final", array())) {
            echo "final";
        }
        // line 95
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 95, $this->getSourceContext()); })()), "abstract", array())) {
            echo "abstract";
        }
        // line 96
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 96, $this->getSourceContext()); })()), "static", array())) {
            echo "static";
        }
        // line 97
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 97, $this->getSourceContext()); })()), "protected", array())) {
            echo "protected";
        }
        // line 98
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 98, $this->getSourceContext()); })()), "private", array())) {
            echo "private";
        }
        // line 99
        echo "    ";
        echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 99, $this->getSourceContext()); })()), "hint", array()));
        echo "
    <strong>";
        // line 100
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 100, $this->getSourceContext()); })()), "name", array());
        echo "</strong>";
        $this->displayBlock("method_parameters_signature", $context, $blocks);
    }

    // line 103
    public function block_method_parameters_signature($context, array $blocks = array())
    {
        // line 104
        $context["__internal_99e91760cab8eab6dfeaeb929d42f8a9a6f9f4cac91006af732d1e8abf3fcc54"] = $this->loadTemplate("macros.twig", "class.twig", 104);
        // line 105
        echo $context["__internal_99e91760cab8eab6dfeaeb929d42f8a9a6f9f4cac91006af732d1e8abf3fcc54"]->macro_method_parameters_signature((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 105, $this->getSourceContext()); })()));
        echo "
    ";
        // line 106
        echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_deprecated((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 106, $this->getSourceContext()); })()));
    }

    // line 109
    public function block_parameters($context, array $blocks = array())
    {
        // line 110
        echo "    <table class=\"table table-condensed\">
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 111, $this->getSourceContext()); })()), "parameters", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["parameter"]) {
            // line 112
            echo "            <tr>
                <td>";
            // line 113
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "hint", array())) {
                echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "hint", array()));
            }
            echo "</td>
                <td>\$";
            // line 114
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "name", array());
            echo "</td>
                <td>";
            // line 115
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["parameter"], "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 115, $this->getSourceContext()); })()));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "    </table>
";
    }

    // line 121
    public function block_return($context, array $blocks = array())
    {
        // line 122
        echo "    <table class=\"table table-condensed\">
        <tr>
            <td>";
        // line 124
        echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 124, $this->getSourceContext()); })()), "hint", array()));
        echo "</td>
            <td>";
        // line 125
        echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 125, $this->getSourceContext()); })()), "hintDesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 125, $this->getSourceContext()); })()));
        echo "</td>
        </tr>
    </table>
";
    }

    // line 130
    public function block_exceptions($context, array $blocks = array())
    {
        // line 131
        echo "    <table class=\"table table-condensed\">
        ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 132, $this->getSourceContext()); })()), "exceptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["exception"]) {
            // line 133
            echo "            <tr>
                <td>";
            // line 134
            echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_class_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["exception"], 0, array(), "array"));
            echo "</td>
                <td>";
            // line 135
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["exception"], 1, array(), "array"), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 135, $this->getSourceContext()); })()));
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exception'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "    </table>
";
    }

    // line 141
    public function block_see($context, array $blocks = array())
    {
        // line 142
        echo "    <table class=\"table table-condensed\">
        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 143, $this->getSourceContext()); })()), "tags", array(0 => "see"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 144
            echo "            <tr>
                <td>";
            // line 145
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["tag"], 0, array(), "array");
            echo "</td>
                <td>";
            // line 146
            echo twig_join_filter(twig_slice($this->env, $context["tag"], 1, null), " ");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "    </table>
";
    }

    // line 152
    public function block_constants($context, array $blocks = array())
    {
        // line 153
        echo "    <table class=\"table table-condensed\">
        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["constants"]) || array_key_exists("constants", $context) ? $context["constants"] : (function () { throw new Twig_Error_Runtime('Variable "constants" does not exist.', 154, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["constant"]) {
            // line 155
            echo "            <tr>
                <td>";
            // line 156
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["constant"], "name", array());
            echo "</td>
                <td class=\"last\">
                    <p><em>";
            // line 158
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["constant"], "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 158, $this->getSourceContext()); })()));
            echo "</em></p>
                    <p>";
            // line 159
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["constant"], "longdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 159, $this->getSourceContext()); })()));
            echo "</p>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "    </table>
";
    }

    // line 166
    public function block_properties($context, array $blocks = array())
    {
        // line 167
        echo "    <table class=\"table table-condensed\">
        ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new Twig_Error_Runtime('Variable "properties" does not exist.', 168, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 169
            echo "            <tr>
                <td class=\"type\" id=\"property_";
            // line 170
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "name", array());
            echo "\">
                    ";
            // line 171
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "static", array())) {
                echo "static";
            }
            // line 172
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "protected", array())) {
                echo "protected";
            }
            // line 173
            echo "                    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "private", array())) {
                echo "private";
            }
            // line 174
            echo "                    ";
            echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "hint", array()));
            echo "
                </td>
                <td>\$";
            // line 176
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "name", array());
            echo "</td>
                <td class=\"last\">";
            // line 177
            echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 177, $this->getSourceContext()); })()));
            echo "</td>
                <td>";
            // line 179
            if ( !(twig_get_attribute($this->env, $this->getSourceContext(), $context["property"], "class", array()) === (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 179, $this->getSourceContext()); })()))) {
                // line 180
                echo "<small>from&nbsp;";
                echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_property_link($context["property"], false, true);
                echo "</small>";
            }
            // line 182
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "    </table>
";
    }

    // line 188
    public function block_methods($context, array $blocks = array())
    {
        // line 189
        echo "    <div class=\"container-fluid underlined\">
        ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new Twig_Error_Runtime('Variable "methods" does not exist.', 190, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 191
            echo "            <div class=\"row\">
                <div class=\"col-md-2 type\">
                    ";
            // line 193
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "static", array())) {
                echo "static&nbsp;";
            }
            echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_hint_link(twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "hint", array()));
            echo "
                </div>
                <div class=\"col-md-8 type\">
                    <a href=\"#method_";
            // line 196
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "name", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "name", array());
            echo "</a>";
            $this->displayBlock("method_parameters_signature", $context, $blocks);
            echo "
                    ";
            // line 197
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "shortdesc", array())) {
                // line 198
                echo "                        <p class=\"no-description\">No description</p>
                    ";
            } else {
                // line 200
                echo "                        <p>";
                echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 200, $this->getSourceContext()); })()));
                echo "</p>";
            }
            // line 202
            echo "                </div>
                <div class=\"col-md-2\">";
            // line 204
            if ( !(twig_get_attribute($this->env, $this->getSourceContext(), $context["method"], "class", array()) === (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 204, $this->getSourceContext()); })()))) {
                // line 205
                echo "<small>from&nbsp;";
                echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_method_link($context["method"], false, true);
                echo "</small>";
            }
            // line 207
            echo "</div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "    </div>
";
    }

    // line 213
    public function block_methods_details($context, array $blocks = array())
    {
        // line 214
        echo "    <div id=\"method-details\">
        ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) || array_key_exists("methods", $context) ? $context["methods"] : (function () { throw new Twig_Error_Runtime('Variable "methods" does not exist.', 215, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 216
            echo "            <div class=\"method-item\">
                ";
            // line 217
            $this->displayBlock("method", $context, $blocks);
            echo "
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "    </div>
";
    }

    // line 223
    public function block_method($context, array $blocks = array())
    {
        // line 224
        echo "    <h3 id=\"method_";
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 224, $this->getSourceContext()); })()), "name", array());
        echo "\">
        <div class=\"location\">";
        // line 225
        if ( !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 225, $this->getSourceContext()); })()), "class", array()) === (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 225, $this->getSourceContext()); })()))) {
            echo "in ";
            echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_method_link((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 225, $this->getSourceContext()); })()), false, true);
            echo " ";
        }
        echo "at ";
        echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_method_source_link((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 225, $this->getSourceContext()); })()));
        echo "</div>
        <code>";
        // line 226
        $this->displayBlock("method_signature", $context, $blocks);
        echo "</code>
    </h3>
    <div class=\"details\">
        ";
        // line 229
        echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_deprecations((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 229, $this->getSourceContext()); })()));
        echo "

        ";
        // line 231
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 231, $this->getSourceContext()); })()), "shortdesc", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 231, $this->getSourceContext()); })()), "longdesc", array()))) {
            // line 232
            echo "            <div class=\"method-description\">
                ";
            // line 233
            if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 233, $this->getSourceContext()); })()), "shortdesc", array()) &&  !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 233, $this->getSourceContext()); })()), "longdesc", array()))) {
                // line 234
                echo "                    <p class=\"no-description\">No description</p>
                ";
            } else {
                // line 236
                echo "                    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 236, $this->getSourceContext()); })()), "shortdesc", array())) {
                    // line 237
                    echo "<p>";
                    echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 237, $this->getSourceContext()); })()), "shortdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 237, $this->getSourceContext()); })()));
                    echo "</p>";
                }
                // line 239
                echo "                    ";
                if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 239, $this->getSourceContext()); })()), "longdesc", array())) {
                    // line 240
                    echo "<p>";
                    echo $this->env->getExtension('Sami\Renderer\TwigExtension')->parseDesc($context, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 240, $this->getSourceContext()); })()), "longdesc", array()), (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new Twig_Error_Runtime('Variable "class" does not exist.', 240, $this->getSourceContext()); })()));
                    echo "</p>";
                }
            }
            // line 243
            echo "                ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 243, $this->getSourceContext()); })()), "config", array(0 => "insert_todos"), "method") == true)) {
                // line 244
                echo "                    ";
                echo $context["__internal_c3e02cbf21b415a504b5c5536156934c225c78f939c0acb972d28e16dd434727"]->macro_todos((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 244, $this->getSourceContext()); })()));
                echo "
                ";
            }
            // line 246
            echo "            </div>
        ";
        }
        // line 248
        echo "        <div class=\"tags\">
            ";
        // line 249
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 249, $this->getSourceContext()); })()), "parameters", array())) {
            // line 250
            echo "                <h4>Parameters</h4>

                ";
            // line 252
            $this->displayBlock("parameters", $context, $blocks);
            echo "
            ";
        }
        // line 254
        echo "
            ";
        // line 255
        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 255, $this->getSourceContext()); })()), "hintDesc", array()) || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 255, $this->getSourceContext()); })()), "hint", array()))) {
            // line 256
            echo "                <h4>Return Value</h4>

                ";
            // line 258
            $this->displayBlock("return", $context, $blocks);
            echo "
            ";
        }
        // line 260
        echo "
            ";
        // line 261
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 261, $this->getSourceContext()); })()), "exceptions", array())) {
            // line 262
            echo "                <h4>Exceptions</h4>

                ";
            // line 264
            $this->displayBlock("exceptions", $context, $blocks);
            echo "
            ";
        }
        // line 266
        echo "
            ";
        // line 267
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 267, $this->getSourceContext()); })()), "tags", array(0 => "see"), "method")) {
            // line 268
            echo "                <h4>See also</h4>

                ";
            // line 270
            $this->displayBlock("see", $context, $blocks);
            echo "
            ";
        }
        // line 272
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "class.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  822 => 272,  817 => 270,  813 => 268,  811 => 267,  808 => 266,  803 => 264,  799 => 262,  797 => 261,  794 => 260,  789 => 258,  785 => 256,  783 => 255,  780 => 254,  775 => 252,  771 => 250,  769 => 249,  766 => 248,  762 => 246,  756 => 244,  753 => 243,  747 => 240,  744 => 239,  739 => 237,  736 => 236,  732 => 234,  730 => 233,  727 => 232,  725 => 231,  720 => 229,  714 => 226,  704 => 225,  699 => 224,  696 => 223,  691 => 220,  674 => 217,  671 => 216,  654 => 215,  651 => 214,  648 => 213,  643 => 210,  627 => 207,  622 => 205,  620 => 204,  617 => 202,  612 => 200,  608 => 198,  606 => 197,  598 => 196,  589 => 193,  585 => 191,  568 => 190,  565 => 189,  562 => 188,  557 => 185,  549 => 182,  544 => 180,  542 => 179,  538 => 177,  534 => 176,  528 => 174,  523 => 173,  518 => 172,  514 => 171,  510 => 170,  507 => 169,  503 => 168,  500 => 167,  497 => 166,  492 => 163,  482 => 159,  478 => 158,  473 => 156,  470 => 155,  466 => 154,  463 => 153,  460 => 152,  455 => 149,  446 => 146,  442 => 145,  439 => 144,  435 => 143,  432 => 142,  429 => 141,  424 => 138,  415 => 135,  411 => 134,  408 => 133,  404 => 132,  401 => 131,  398 => 130,  390 => 125,  386 => 124,  382 => 122,  379 => 121,  374 => 118,  365 => 115,  361 => 114,  355 => 113,  352 => 112,  348 => 111,  345 => 110,  342 => 109,  338 => 106,  334 => 105,  332 => 104,  329 => 103,  323 => 100,  318 => 99,  313 => 98,  308 => 97,  303 => 96,  298 => 95,  294 => 94,  291 => 93,  285 => 90,  268 => 87,  266 => 86,  249 => 85,  246 => 84,  244 => 83,  240 => 81,  238 => 80,  235 => 79,  230 => 78,  226 => 77,  223 => 76,  218 => 73,  213 => 71,  206 => 67,  202 => 65,  200 => 64,  197 => 63,  192 => 61,  188 => 59,  186 => 58,  183 => 57,  178 => 55,  174 => 53,  172 => 52,  169 => 51,  164 => 49,  160 => 47,  158 => 46,  155 => 45,  151 => 43,  145 => 41,  142 => 40,  137 => 38,  134 => 37,  129 => 35,  127 => 34,  124 => 33,  122 => 32,  117 => 30,  112 => 28,  105 => 24,  101 => 23,  96 => 20,  93 => 19,  83 => 13,  81 => 12,  77 => 11,  73 => 9,  70 => 8,  67 => 7,  61 => 5,  55 => 4,  47 => 3,  43 => 1,  41 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/layout.twig\" %}
{% from \"macros.twig\" import render_classes, breadcrumbs, namespace_link, class_link, property_link, method_link, hint_link, source_link, method_source_link, deprecated, deprecations, todo, todos %}
{% block title %}{{ class|raw }} | {{ parent() }}{% endblock %}
{% block body_class 'class' %}
{% block page_id 'class:' ~ (class.name|replace({'\\\\': '_'})) %}

{% block below_menu %}
    {% if class.namespace %}
        <div class=\"namespace-breadcrumbs\">
            <ol class=\"breadcrumb\">
                <li><span class=\"label label-default\">{{ class.categoryName|raw }}</span></li>
                {{ breadcrumbs(class.namespace) -}}
                <li>{{ class.shortname|raw }}</li>
            </ol>
        </div>
    {% endif %}
{% endblock %}

{% block page_content %}

    <div class=\"page-header\">
        <h1>
            {{ class.name|split('\\\\')|last|raw }}
            {{ deprecated(class) }}
        </h1>
    </div>

    <p>{{ block('class_signature') }}</p>

    {{ deprecations(class) }}

    {% if class.shortdesc or class.longdesc %}
        <div class=\"description\">
            {% if class.shortdesc -%}
                <p>{{ class.shortdesc|desc(class) }}</p>
            {%- endif %}
            {% if class.longdesc -%}
                <p>{{ class.longdesc|desc(class) }}</p>
            {%- endif %}
            {% if project.config('insert_todos') == true %}
                {{ todos(class) }}
            {% endif %}
        </div>
    {% endif %}

    {% if traits %}
        <h2>Traits</h2>

        {{ render_classes(traits) }}
    {% endif %}

    {% if constants %}
        <h2>Constants</h2>

        {{ block('constants') }}
    {% endif %}

    {% if properties %}
        <h2>Properties</h2>

        {{ block('properties') }}
    {% endif %}

    {% if methods %}
        <h2>Methods</h2>

        {{ block('methods') }}

        <h2>Details</h2>

        {{ block('methods_details') }}
    {% endif %}

{% endblock %}

{% block class_signature -%}
    {% if not class.interface and class.abstract %}abstract {% endif %}
    {{ class.categoryName|raw }}
    <strong>{{ class.shortname|raw }}</strong>
    {%- if class.parent %}
        extends {{ class_link(class.parent) }}
    {%- endif %}
    {%- if class.interfaces|length > 0 %}
        implements
        {% for interface in class.interfaces %}
            {{- class_link(interface) }}
            {%- if not loop.last %}, {% endif %}
        {%- endfor %}
    {%- endif %}
    {{- source_link(project, class) }}
{% endblock %}

{% block method_signature -%}
    {% if method.final %}final{% endif %}
    {% if method.abstract %}abstract{% endif %}
    {% if method.static %}static{% endif %}
    {% if method.protected %}protected{% endif %}
    {% if method.private %}private{% endif %}
    {{ hint_link(method.hint) }}
    <strong>{{ method.name|raw }}</strong>{{ block('method_parameters_signature') }}
{%- endblock %}

{% block method_parameters_signature -%}
    {%- from \"macros.twig\" import method_parameters_signature -%}
    {{ method_parameters_signature(method) }}
    {{ deprecated(method) }}
{%- endblock %}

{% block parameters %}
    <table class=\"table table-condensed\">
        {% for parameter in method.parameters %}
            <tr>
                <td>{% if parameter.hint %}{{ hint_link(parameter.hint) }}{% endif %}</td>
                <td>\${{ parameter.name|raw }}</td>
                <td>{{ parameter.shortdesc|desc(class) }}</td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block return %}
    <table class=\"table table-condensed\">
        <tr>
            <td>{{ hint_link(method.hint) }}</td>
            <td>{{ method.hintDesc|desc(class) }}</td>
        </tr>
    </table>
{% endblock %}

{% block exceptions %}
    <table class=\"table table-condensed\">
        {% for exception in method.exceptions %}
            <tr>
                <td>{{ class_link(exception[0]) }}</td>
                <td>{{ exception[1]|desc(class) }}</td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block see %}
    <table class=\"table table-condensed\">
        {% for tag in method.tags('see') %}
            <tr>
                <td>{{ tag[0]|raw }}</td>
                <td>{{ tag[1:]|join(' ')|raw }}</td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block constants %}
    <table class=\"table table-condensed\">
        {% for constant in constants %}
            <tr>
                <td>{{ constant.name|raw }}</td>
                <td class=\"last\">
                    <p><em>{{ constant.shortdesc|desc(class) }}</em></p>
                    <p>{{ constant.longdesc|desc(class) }}</p>
                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block properties %}
    <table class=\"table table-condensed\">
        {% for property in properties %}
            <tr>
                <td class=\"type\" id=\"property_{{ property.name|raw }}\">
                    {% if property.static %}static{% endif %}
                    {% if property.protected %}protected{% endif %}
                    {% if property.private %}private{% endif %}
                    {{ hint_link(property.hint) }}
                </td>
                <td>\${{ property.name|raw }}</td>
                <td class=\"last\">{{ property.shortdesc|desc(class) }}</td>
                <td>
                    {%- if property.class is not same as(class) -%}
                        <small>from&nbsp;{{ property_link(property, false, true) }}</small>
                    {%- endif -%}
                </td>
            </tr>
        {% endfor %}
    </table>
{% endblock %}

{% block methods %}
    <div class=\"container-fluid underlined\">
        {% for method in methods %}
            <div class=\"row\">
                <div class=\"col-md-2 type\">
                    {% if method.static %}static&nbsp;{% endif %}{{ hint_link(method.hint) }}
                </div>
                <div class=\"col-md-8 type\">
                    <a href=\"#method_{{ method.name|raw }}\">{{ method.name|raw }}</a>{{ block('method_parameters_signature') }}
                    {% if not method.shortdesc %}
                        <p class=\"no-description\">No description</p>
                    {% else %}
                        <p>{{ method.shortdesc|desc(class) }}</p>
                    {%- endif %}
                </div>
                <div class=\"col-md-2\">
                    {%- if method.class is not same as(class) -%}
                        <small>from&nbsp;{{ method_link(method, false, true) }}</small>
                    {%- endif -%}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block methods_details %}
    <div id=\"method-details\">
        {% for method in methods %}
            <div class=\"method-item\">
                {{ block('method') }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block method %}
    <h3 id=\"method_{{ method.name|raw }}\">
        <div class=\"location\">{% if method.class is not same as(class) %}in {{ method_link(method, false, true) }} {% endif %}at {{ method_source_link(method) }}</div>
        <code>{{ block('method_signature') }}</code>
    </h3>
    <div class=\"details\">
        {{ deprecations(method) }}

        {% if method.shortdesc or method.longdesc %}
            <div class=\"method-description\">
                {% if not method.shortdesc and not method.longdesc %}
                    <p class=\"no-description\">No description</p>
                {% else %}
                    {% if method.shortdesc -%}
                    <p>{{ method.shortdesc|desc(class) }}</p>
                    {%- endif %}
                    {% if method.longdesc -%}
                    <p>{{ method.longdesc|desc(class) }}</p>
                    {%- endif %}
                {%- endif %}
                {% if project.config('insert_todos') == true %}
                    {{ todos(method) }}
                {% endif %}
            </div>
        {% endif %}
        <div class=\"tags\">
            {% if method.parameters %}
                <h4>Parameters</h4>

                {{ block('parameters') }}
            {% endif %}

            {% if method.hintDesc or method.hint %}
                <h4>Return Value</h4>

                {{ block('return') }}
            {% endif %}

            {% if method.exceptions %}
                <h4>Exceptions</h4>

                {{ block('exceptions') }}
            {% endif %}

            {% if method.tags('see') %}
                <h4>See also</h4>

                {{ block('see') }}
            {% endif %}
        </div>
    </div>
{% endblock %}
", "class.twig", "/Users/Edujugon/Code/Documentation/Documentator/vendor/sami/sami/Sami/Resources/themes/default/class.twig");
    }
}
