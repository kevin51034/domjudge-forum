<?php

/* DOMJudgeBundle:team:show.html.twig */
class __TwigTemplate_200f06efa9e8f4bde7a838122460727dbe7503b3ac3279365a0edfb5f1b31b91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DOMJudgeBundle:team:show.html.twig", 1);
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
        echo "Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "name", array()), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->loadTemplate("header.html.twig", "DOMJudgeBundle:team:show.html.twig", 6)->display($context);
        // line 7
        echo "<h1>Team ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "name", array()), "html", null, true);
        echo "</h1>

<div class=\"col1\">
  <table>
    <tbody>
      <tr>
        <td>ID:        </td>
        <td>t";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "teamid", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>Name:      </td>
        <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "name", array()), "html", null, true);
        echo "</td>
      </tr>
      <tr>
        <td>Host:</td><td><span class=\"hostname\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "hostname", array()), "html", null, true);
        echo "</span></td>
      </tr>
      <tr>
        <td>User:</td><td>
          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "users", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 26
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_user", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "userid", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["user"], "name", array()), "html", null, true);
            echo "</a>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_user", array("cmd" => "add", "forteam" => "2")), "html", null, true);
            echo "\"><small>(add)</small></a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </td>
      </tr>
      <tr>
        <td>Private contests:</td>
        <td>
          ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "contests", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contest"]) {
            // line 36
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_contest", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["contest"], "cid", array()))), "html", null, true);
            echo "\">c";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contest"], "cid", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["contest"], "shortname", array()), "html", null, true);
            echo "</a>
          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "          None
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </td>
      </tr>
    </tbody>
  </table>
</div>

<div class=\"col2\">
  <table>
    <tbody>
      <tr>
        <td>Category:</td>
        <td><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_team_category", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "category", array()), "categoryid", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "category", array()), "name", array()), "html", null, true);
        echo "</a></td>
      </tr>
      ";
        // line 53
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "affiliation", array())) {
            // line 54
            echo "      <tr>
        <td>Affiliation:</td><td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_team_affiliation", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "affiliation", array()), "affilid", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "affiliation", array()), "name", array()), "html", null, true);
            echo "</a></td>
      </tr>
      <tr>
";
            // line 59
            echo "        <td>Country:</td><td><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("images/countries/" . twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "affiliation", array()), "country", array())) . ".png")), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "affiliation", array()), "country", array()), "html", null, true);
            echo "</td>
      </tr>
      ";
        }
        // line 62
        echo "    </tbody>
  </table>
</div>

";
        // line 66
        $context["thispage"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("team_show", array("teamid" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "teamid", array())));
        // line 67
        echo "<p class=\"nomorecol\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_team", array("cmd" => "edit", "id" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "teamid", array()), "referrer" => ($context["thispage"] ?? null))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/edit.png"), "html", null, true);
        echo "\" alt=\"edit\" title=\"edit this team\" class=\"picto\"></a>
<a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_delete", array("table" => "team", "teamid" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "teamid", array()), "desc" => twig_get_attribute($this->env, $this->getSourceContext(), ($context["team"] ?? null), "name", array()))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/delete.png"), "html", null, true);
        echo "\" alt=\"delete\" title=\"delete this team\" class=\"picto\"></a></p>

";
        // line 78
        echo "
";
    }

    public function getTemplateName()
    {
        return "DOMJudgeBundle:team:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 78,  184 => 68,  177 => 67,  175 => 66,  169 => 62,  160 => 59,  152 => 55,  149 => 54,  147 => 53,  140 => 51,  127 => 40,  120 => 38,  108 => 36,  103 => 35,  96 => 30,  87 => 28,  77 => 26,  72 => 25,  65 => 21,  59 => 18,  52 => 14,  41 => 7,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DOMJudgeBundle:team:show.html.twig", "/opt/domjudge/domserver/webapp/src/DOMJudgeBundle/Resources/views/team/show.html.twig");
    }
}
