<?php

/* DOMJudgeBundle:team:index.html.twig */
class __TwigTemplate_d1d1e4d5c9c0b2324b207f8d5d8404c2f731bae927ceb4cc84a51c99aaf9cc55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DOMJudgeBundle:team:index.html.twig", 1);
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
        echo "Team";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->loadTemplate("::header.html.twig", "DOMJudgeBundle:team:index.html.twig", 6)->display($context);
        // line 7
        echo "<h1>Teams</h1>

<table class=\"list sortable\">
  <thead>
    <tr>
      <th class=\"sorttable_numeric\" scope=\"col\">ID</th>
      <th scope=\"col\">teamname</th>
      <th scope=\"col\">category</th>
      <th scope=\"col\">affiliation</th>
      <th scope=\"col\" class=\"sorttable_numeric\"># (private) contests</th>
      <th scope=\"col\">host</th>
      <th scope=\"col\">room</th>
      <th class=\"sorttable_nosort\"></th>
      <th class=\"thleft\" scope=\"col\">status</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teams"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 26
            echo "    ";
            $context["status"] = 0;
            // line 27
            echo "    ";
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "getTeampageFirstVisited", array())) {
                $context["status"] = 1;
            }
            // line 28
            echo "

    ";
            // line 30
            $context["tpath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("team_show", array("teamid" => twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "teamid", array())));
            // line 31
            echo "    ";
            $context["tlink"] = "<a href=\"#{tpath}\">";
            // line 32
            echo "    <tr class=\"category";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "getCategory", array(), "method"), "categoryid", array()), "html", null, true);
            echo "\">
      <td>
        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
            echo "\">t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "teamid", array()), "html", null, true);
            echo "</a>
      </td>
      <td>
        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "name", array()), "html", null, true);
            echo "</a>
      </td>
      <td>
        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "getCategory", array(), "method"), "html", null, true);
            echo "</a>
      </td>
      ";
            // line 42
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "getAffiliation", array(), "method")) {
                // line 43
                echo "        <td title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "getAffiliation", array(), "method"), "getName", array(), "method"), "html", null, true);
                echo "\">
        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "getAffiliation", array(), "method"), "getShortname", array(), "method"), "html", null, true);
                echo "</a>
        </td>
      ";
            } else {
                // line 47
                echo "        <td>
          <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
                echo "\">&nbsp;</a>
        </td>
      ";
            }
            // line 51
            echo "      <td>
        <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "getContests", array(), "method")), "html", null, true);
            echo "</a>
      </td>
      <td>
        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
            echo "\"><span class=\"hostname\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hostname", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "hostname", array()), "-")) : ("-")), "html", null, true);
            echo "</span></a>
      </td>
      <td>
        <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "room", array()), "html", null, true);
            echo "</a>
      </td>
      ";
            // line 60
            if ((($context["status"] ?? null) == 0)) {
                echo "<td class=\"team-nocon\">
      ";
            } elseif ((            // line 61
($context["status"] ?? null) == 1)) {
                echo "<td class=\"team-nosub\">
      ";
            } elseif ((            // line 62
($context["status"] ?? null) == 2)) {
                echo "<td class=\"team-nocor\">
      ";
            } elseif ((            // line 63
($context["status"] ?? null) == 3)) {
                echo "<td class=\"team-ok\">
      ";
            }
            // line 65
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["tpath"] ?? null), "html", null, true);
            echo "\">●</a>
      </td>
      <td class=\"teamstat\">";
            // line 67
            echo "0/0</td>
      <td class=\"editdel\">
        <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_team", array("cmd" => "edit", "id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "teamid", array()), "referrer" => "teams")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/edit.png"), "html", null, true);
            echo "\" alt=\"edit\" title=\"edit this team\" class=\"picto\"></a>
        <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_delete", array("table" => "team", "teamid" => twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "teamid", array()), "referrer" => "teams", "desc" => twig_get_attribute($this->env, $this->getSourceContext(), $context["t"], "name", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/delete.png"), "html", null, true);
            echo "\" alt=\"delete\" title=\"delete this team\" class=\"picto\"></a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
  </tbody>
</table>
<p><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_team", array("cmd" => "add"));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/add.png"), "html", null, true);
        echo "\" alt=\"add\" title=\"add new team\" class=\"picto\"></a></p>
";
    }

    public function getTemplateName()
    {
        return "DOMJudgeBundle:team:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 77,  205 => 74,  193 => 70,  187 => 69,  183 => 67,  177 => 65,  172 => 63,  168 => 62,  164 => 61,  160 => 60,  153 => 58,  145 => 55,  137 => 52,  134 => 51,  128 => 48,  125 => 47,  117 => 44,  112 => 43,  110 => 42,  103 => 40,  95 => 37,  87 => 34,  81 => 32,  78 => 31,  76 => 30,  72 => 28,  67 => 27,  64 => 26,  60 => 25,  40 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DOMJudgeBundle:team:index.html.twig", "/opt/domjudge/domserver/webapp/src/DOMJudgeBundle/Resources/views/team/index.html.twig");
    }
}
