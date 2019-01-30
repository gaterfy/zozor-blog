<?php

/* blog/_comment_form.html.twig */
class __TwigTemplate_7b088b3b87fb8c9b459fb364e7929e718df7aa07b8e1dbab80dd19328d2d02b7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_comment_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/_comment_form.html.twig"));

        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', array("method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_new", array("postSlug" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->source); })()), "slug", array())))));
        echo "
    ";
        // line 15
        echo "
    <fieldset>
        <legend>
            <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.add_comment"), "html", null, true);
        echo "
        </legend>

        ";
        // line 22
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), 'errors');
        echo "

        <div class=\"form-group ";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "content", array()), "vars", array()), "valid", array())) {
            echo "has-error";
        }
        echo "\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "content", array()), 'label', array("label_attr" => array("class" => "hidden"), "label" => "label.content"));
        echo "

            ";
        // line 28
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "content", array()), 'errors');
        echo "

            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "content", array()), 'widget', array("attr" => array("rows" => 10)));
        echo "
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "content", array()), 'help');
        echo "
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">
                <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.publish_comment"), "html", null, true);
        echo "
            </button>
        </div>
    </fieldset>
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "blog/_comment_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  82 => 36,  74 => 31,  70 => 30,  64 => 28,  59 => 25,  53 => 24,  47 => 22,  41 => 18,  36 => 15,  32 => 9,  29 => 8,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    By default, forms enable client-side validation. This means that you can't
    test the server-side validation errors from the browser. To temporarily
    disable this validation, add the 'novalidate' attribute:

    {{ form_start(form, {method: ..., action: ..., attr: {novalidate: 'novalidate'}}) }}
#}

{{ form_start(form, {method: 'POST', action: path('comment_new', {'postSlug': post.slug})}) }}
    {#  instead of displaying form fields one by one, you can also display them
        all with their default options and styles just by calling to this function:

        {{ form_widget(form) }}
    #}

    <fieldset>
        <legend>
            <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> {{ 'title.add_comment'|trans }}
        </legend>

        {# Render any global form error (e.g. when a constraint on a public getter method failed) #}
        {{ form_errors(form) }}

        <div class=\"form-group {% if not form.content.vars.valid %}has-error{% endif %}\">
            {{ form_label(form.content, 'label.content', {label_attr: {class: 'hidden'}}) }}

            {# Render any errors for the \"content\" field (e.g. when a class property constraint failed) #}
            {{ form_errors(form.content) }}

            {{ form_widget(form.content, {attr: {rows: 10}}) }}
            {{ form_help(form.content) }}
        </div>

        <div class=\"form-group\">
            <button class=\"btn btn-primary pull-right\" type=\"submit\">
                <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i> {{ 'action.publish_comment'|trans }}
            </button>
        </div>
    </fieldset>
{{ form_end(form) }}
", "blog/_comment_form.html.twig", "/home/dev/Projects/oc/zozor-blog/templates/blog/_comment_form.html.twig");
    }
}
