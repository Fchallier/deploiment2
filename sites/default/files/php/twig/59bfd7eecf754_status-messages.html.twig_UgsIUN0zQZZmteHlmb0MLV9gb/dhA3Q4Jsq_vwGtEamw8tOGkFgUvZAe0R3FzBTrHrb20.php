<?php

/* core/themes/bartik/templates/status-messages.html.twig */
class __TwigTemplate_8ed5431a71f24b3ec84506f6d7ea93e7ec44f8d4fb5da8a6325cab531d9b0472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@classy/misc/status-messages.html.twig", "core/themes/bartik/templates/status-messages.html.twig", 1);
        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@classy/misc/status-messages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d062fbd7d30b20030bdccb9862770181728e3950d03614b927e95f5ee0cc7605 = $this->env->getExtension("native_profiler");
        $__internal_d062fbd7d30b20030bdccb9862770181728e3950d03614b927e95f5ee0cc7605->enter($__internal_d062fbd7d30b20030bdccb9862770181728e3950d03614b927e95f5ee0cc7605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/bartik/templates/status-messages.html.twig"));

        $tags = array("if" => 24);
        $filters = array();
        $functions = array("attach_library" => 25);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d062fbd7d30b20030bdccb9862770181728e3950d03614b927e95f5ee0cc7605->leave($__internal_d062fbd7d30b20030bdccb9862770181728e3950d03614b927e95f5ee0cc7605_prof);

    }

    // line 23
    public function block_messages($context, array $blocks = array())
    {
        $__internal_8245ad5ae0922782f21e066d32a40eb12d0ba6b84bb0e3b869d54dfec327d2a9 = $this->env->getExtension("native_profiler");
        $__internal_8245ad5ae0922782f21e066d32a40eb12d0ba6b84bb0e3b869d54dfec327d2a9->enter($__internal_8245ad5ae0922782f21e066d32a40eb12d0ba6b84bb0e3b869d54dfec327d2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 24
        echo "  ";
        if ( !twig_test_empty((isset($context["message_list"]) ? $context["message_list"] : null))) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("bartik/messages"), "html", null, true));
            echo "
    <div class=\"messages__wrapper layout-container\">
      ";
            // line 27
            $this->displayParentBlock("messages", $context, $blocks);
            echo "
    </div>
  ";
        }
        
        $__internal_8245ad5ae0922782f21e066d32a40eb12d0ba6b84bb0e3b869d54dfec327d2a9->leave($__internal_8245ad5ae0922782f21e066d32a40eb12d0ba6b84bb0e3b869d54dfec327d2a9_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  67 => 25,  64 => 24,  58 => 23,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@classy/misc/status-messages.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 */
#}
{% block messages %}
  {% if message_list is not empty %}
    {{ attach_library('bartik/messages') }}
    <div class=\"messages__wrapper layout-container\">
      {{ parent() }}
    </div>
  {% endif %}
{% endblock messages %}
";
    }
}
