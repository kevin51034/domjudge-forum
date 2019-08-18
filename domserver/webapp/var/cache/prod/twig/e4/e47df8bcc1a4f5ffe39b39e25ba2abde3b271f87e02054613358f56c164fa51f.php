<?php

/* DOMJudgeBundle:security:login.html.twig */
class __TwigTemplate_c6e9021de698938789cba205e14e7e20c5c1a00860946aaa5d06dfb4010f4e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DOMJudgeBundle:security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'extrahead' => array($this, 'block_extrahead'),
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
        echo "Login";
    }

    // line 5
    public function block_extrahead($context, array $blocks = array())
    {
        // line 6
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
<link rel=\"stylesheet\" href=\"./css/bootstrap.min.css\" type=\"text/css\" />
<link rel=\"stylesheet\" href=\"style_login.css\" type=\"text/css\" />
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
  <form class=\"form-signin\" action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
    <img class=\"mb-4\" src=\"images/DOMjudgelogo.png\" alt=\"DOMjudge\" width=\"72\">

  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "      <div class=\"alert alert-success\" role=\"alert\">
      ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
      <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>

  ";
        // line 25
        if (($context["error"] ?? null)) {
            // line 26
            echo "      <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
  ";
        }
        // line 28
        echo "
      <label for=\"username\" class=\"sr-only\">Username</label>
      <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Username\" required autofocus>
      <label for=\"inputPassword\" class=\"sr-only\">Password</label>
      <input type=\"password\" id=\"inputPassword\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required>
      <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
      <p class=\"mt-5 mb-3 small text-muted\">DOMjudge ";
        // line 34
        echo twig_escape_filter($this->env, ($context["DOMJUDGE_VERSION"] ?? null), "html", null, true);
        echo "</p>

  ";
        // line 36
        if (($context["allow_registration"] ?? null)) {
            // line 37
            echo "  <div>Don't have an account? <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("register", array(), true);
            echo "\">Register now</a>.</div>
  ";
        }
        // line 39
        echo "  </form>

  ";
        // line 41
        $this->loadTemplate("::footer.html.twig", "DOMJudgeBundle:security:login.html.twig", 41)->display($context);
    }

    public function getTemplateName()
    {
        return "DOMJudgeBundle:security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  112 => 39,  106 => 37,  104 => 36,  99 => 34,  91 => 28,  85 => 26,  83 => 25,  78 => 22,  69 => 19,  66 => 18,  62 => 17,  56 => 14,  52 => 13,  49 => 12,  46 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DOMJudgeBundle:security:login.html.twig", "/opt/domjudge/domserver/webapp/src/DOMJudgeBundle/Resources/views/security/login.html.twig");
    }
}
