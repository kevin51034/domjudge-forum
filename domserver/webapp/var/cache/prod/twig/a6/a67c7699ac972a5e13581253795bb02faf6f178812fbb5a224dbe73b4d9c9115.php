<?php

/* DOMJudgeBundle:security:register.html.twig */
class __TwigTemplate_d21449680d0d8572ec283c8625b533811f41e7e3737b7c9e0144aea812ef7726 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DOMJudgeBundle:security:register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Register Account";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Register Account</h1>

<p>Enter the following information to register your account.</p>
  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["registration_form"] ?? null), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "_token", array()), 'widget');
        echo "
    <div>
      ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["registration_form"] ?? null), 'errors');
        echo "
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "username", array()), 'errors');
        echo "
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "plainPassword", array()), 'errors');
        echo "
    </div>
    <table>
      <tr>
        <td>";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "username", array()), 'label');
        echo ":</td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "username", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "plainPassword", array()), "first", array()), 'label');
        echo ":</td>
        <td>";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "plainPassword", array()), "first", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "plainPassword", array()), "second", array()), 'label');
        echo ":</td>
        <td>";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["registration_form"] ?? null), "plainPassword", array()), "second", array()), 'widget');
        echo "</td>
      </tr>
      <tr>
        <td></td>
        <td><button type=\"submit\">register</button></td>
      </tr>
    </table>
  ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["registration_form"] ?? null), 'form_end');
        echo "

  ";
        // line 36
        $this->loadTemplate("::footer.html.twig", "DOMJudgeBundle:security:register.html.twig", 36)->display($context);
    }

    public function getTemplateName()
    {
        return "DOMJudgeBundle:security:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  101 => 34,  91 => 27,  87 => 26,  81 => 23,  77 => 22,  71 => 19,  67 => 18,  60 => 14,  56 => 13,  52 => 12,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DOMJudgeBundle:security:register.html.twig", "/opt/domjudge/domserver/webapp/src/DOMJudgeBundle/Resources/views/security/register.html.twig");
    }
}
