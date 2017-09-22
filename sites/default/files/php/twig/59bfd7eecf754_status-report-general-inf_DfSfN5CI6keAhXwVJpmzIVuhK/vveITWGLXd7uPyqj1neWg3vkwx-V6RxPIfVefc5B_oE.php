<?php

/* core/themes/seven/templates/status-report-general-info.html.twig */
class __TwigTemplate_7e0d941db5c78f2c24d79d65676f2df7757b3901d2416e7f53b21edf13e51f27 extends Twig_Template
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
        $__internal_b3d8dfaf23828b23fcc39278625866afcd5d421520545ceea1479684894789cf = $this->env->getExtension("native_profiler");
        $__internal_b3d8dfaf23828b23fcc39278625866afcd5d421520545ceea1479684894789cf->enter($__internal_b3d8dfaf23828b23fcc39278625866afcd5d421520545ceea1479684894789cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/seven/templates/status-report-general-info.html.twig"));

        $tags = array("if" => 40);
        $filters = array("t" => 33);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
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

        // line 32
        echo "<div class=\"system-status-general-info\">
  <h2 class=\"system-status-general-info__header\">";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("General System Information")));
        echo "</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--d8\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Drupal Version")));
        echo "</h3>
        ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 40
        if ($this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "description", array())) {
            // line 41
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["drupal"]) ? $context["drupal"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 43
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--clock\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 48
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last Cron Run")));
        echo "</h3>
        ";
        // line 49
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 50
        if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "run_cron", array())) {
            // line 51
            echo "          <div class=\"system-status-general-info__run-cron\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "run_cron", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 53
        echo "        ";
        if ($this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "description", array())) {
            // line 54
            echo "          <div class=\"system-status-general-info__description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["cron"]) ? $context["cron"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 56
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--server\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Web Server")));
        echo "</h3>
        ";
        // line 62
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 63
        if ($this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "description", array())) {
            // line 64
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["webserver"]) ? $context["webserver"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 66
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--php\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("PHP")));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php"]) ? $context["php"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 73
        if ($this->getAttribute((isset($context["php"]) ? $context["php"] : null), "description", array())) {
            // line 74
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php"]) ? $context["php"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 76
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 77
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Memory limit")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 78
        if ($this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "description", array())) {
            // line 79
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["php_memory_limit"]) ? $context["php_memory_limit"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 81
        echo "      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--database\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Database")));
        echo "</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 87
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Version")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 88
        if ($this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "description", array())) {
            // line 89
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system_version"]) ? $context["database_system_version"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 91
        echo "
        <h4 class=\"system-status-general-info__sub-item-title\">";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("System")));
        echo "</h4>";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "value", array()), "html", null, true));
        echo "
        ";
        // line 93
        if ($this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "description", array())) {
            // line 94
            echo "          <div class=\"description\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["database_system"]) ? $context["database_system"] : null), "description", array()), "html", null, true));
            echo "</div>
        ";
        }
        // line 96
        echo "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_b3d8dfaf23828b23fcc39278625866afcd5d421520545ceea1479684894789cf->leave($__internal_b3d8dfaf23828b23fcc39278625866afcd5d421520545ceea1479684894789cf_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/status-report-general-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 96,  206 => 94,  204 => 93,  198 => 92,  195 => 91,  189 => 89,  187 => 88,  181 => 87,  177 => 86,  170 => 81,  164 => 79,  162 => 78,  156 => 77,  153 => 76,  147 => 74,  145 => 73,  139 => 72,  135 => 71,  128 => 66,  122 => 64,  120 => 63,  116 => 62,  112 => 61,  105 => 56,  99 => 54,  96 => 53,  90 => 51,  88 => 50,  84 => 49,  80 => 48,  73 => 43,  67 => 41,  65 => 40,  61 => 39,  57 => 38,  49 => 33,  46 => 32,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for status report general info.
 *
 * Available variables:
 * - drupal: The status of Drupal installation:
 *   - value: The current status of Drupal installation.
 *   - description: The description for current status of Drupal installation.
 * - cron: The status of cron:
 *   - value: The current status of cron.
 *   - description: The description for current status of cron.
 *   - cron.run_cron: An array to render a button for running cron.
 * - database_system: The status of database system:
 *   - value: The current status of database sytem.
 *   - description: The description for current status of cron.
 * - database_system_version: The info about current database version:
 *   - value: The current version of database.
 *   - description: The description for current version of database.
 * - php: The current version of PHP:
 *   - value: The status of currently installed PHP version.
 *   - description: The description for current installed PHP version.
 * - php_memory_limit: The info about current PHP memory limit:
 *   - value: The status of currently set PHP memory limit.
 *   - description: The description for currently set PHP memory limit.
 * - webserver: The info about currently installed web server:
 *   - value: The status of currently installed web server.
 *   - description: The description for the status of currently installed web
 *     server.
 */
#}
<div class=\"system-status-general-info\">
  <h2 class=\"system-status-general-info__header\">{{ 'General System Information'|t }}</h2>
  <div class=\"system-status-general-info__items\">
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--d8\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Drupal Version'|t }}</h3>
        {{ drupal.value }}
        {% if drupal.description %}
          <div class=\"description\">{{ drupal.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--clock\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Last Cron Run'|t }}</h3>
        {{ cron.value }}
        {% if cron.run_cron %}
          <div class=\"system-status-general-info__run-cron\">{{ cron.run_cron }}</div>
        {% endif %}
        {% if cron.description %}
          <div class=\"system-status-general-info__description\">{{ cron.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--server\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Web Server'|t }}</h3>
        {{ webserver.value }}
        {% if webserver.description %}
          <div class=\"description\">{{ webserver.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--php\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'PHP'|t }}</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Version'|t }}</h4>{{ php.value }}
        {% if php.description %}
          <div class=\"description\">{{ php.description }}</div>
        {% endif %}

        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Memory limit'|t }}</h4>{{ php_memory_limit.value }}
        {% if php_memory_limit.description %}
          <div class=\"description\">{{ php_memory_limit.description }}</div>
        {% endif %}
      </div>
    </div>
    <div class=\"system-status-general-info__item\">
      <span class=\"system-status-general-info__item-icon system-status-general-info__item-icon--database\"></span>
      <div class=\"system-status-general-info__item-details\">
        <h3 class=\"system-status-general-info__item-title\">{{ 'Database'|t }}</h3>
        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'Version'|t }}</h4>{{ database_system_version.value }}
        {% if database_system_version.description %}
          <div class=\"description\">{{ database_system_version.description }}</div>
        {% endif %}

        <h4 class=\"system-status-general-info__sub-item-title\">{{ 'System'|t }}</h4>{{ database_system.value }}
        {% if database_system.description %}
          <div class=\"description\">{{ database_system.description }}</div>
        {% endif %}
      </div>
    </div>
  </div>
</div>
";
    }
}
