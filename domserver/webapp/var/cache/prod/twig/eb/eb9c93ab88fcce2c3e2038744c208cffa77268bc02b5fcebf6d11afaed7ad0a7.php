<?php

/* ::header.html.twig */
class __TwigTemplate_68f6896360449701630e7733d91b951f4cab20f4ea4f8847a5fbe48594ff05f0 extends Twig_Template
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
        echo "<nav>
  <div id=\"menutop\">
    <a href=\"index.php\" accesskey=\"h\"><span class=\"octicon octicon-home\"></span> home</a>

    ";
        // line 5
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_BALLOON")) {
            // line 6
            echo "      <a href=\"balloons.php\" accesskey=\"b\"><span class=\"octicon octicon-location\"></span> balloons</a>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_JURY")) {
            // line 10
            echo "      <a href=\"problems.php\" accesskey=\"p\"><span class=\"octicon octicon-book\"></span> problems</a>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "      ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["updates"] ?? null), "judgehosts", array(), "array")) > 0)) {
                // line 15
                echo "        <a class=\"new\" href=\"judgehosts.php\" accesskey=\"j\" id=\"menu_judgehosts\"><span class=\"octicon octicon-law\"></span> judgehosts (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["updates"] ?? null), "judgehosts", array(), "array")), "html", null, true);
                echo " down)</a>
      ";
            } else {
                // line 17
                echo "        <a href=\"judgehosts.php\" accesskey=\"j\" id=\"menu_judgehosts\"><span class=\"octicon octicon-law\"></span> judgehosts</a>
      ";
            }
            // line 19
            echo "
      ";
            // line 20
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["updates"] ?? null), "internal_error", array(), "array")) > 0)) {
                // line 21
                echo "      <a class=\"new\" href=\"internal_errors.php\" accesskey=\"e\" id=\"menu_internal_error\"><span class=\"octicon octicon-zap\"></span> internal error (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["updates"] ?? null), "internal_error", array(), "array")), "html", null, true);
                echo " new)</a>
      ";
            }
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_JURY")) {
            // line 26
            echo "      <a href=\"teams.php\" accesskey=\"t\"><span class=\"octicon octicon-organization\"></span> teams</a>
      <a href=\"users.php\" accesskey=\"u\"><span class=\"octicon octicon-person\"></span> users</a>
      ";
            // line 28
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["updates"] ?? null), "clarifications", array(), "array")) > 0)) {
                // line 29
                echo "        <a class=\"new\" href=\"clarifications.php\" accesskey=\"c\" id=\"menu_clarifications\"><span class=\"octicon octicon-comment-discussion\"></span> clarifications (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["updates"] ?? null), "clarifications", array(), "array")), "html", null, true);
                echo " new)</a>
      ";
            } else {
                // line 31
                echo "        <a href=\"clarifications.php\" accesskey=\"c\" id=\"menu_clarifications\"><span class=\"octicon octicon-comment-discussion\"></span> clarifications</a>
      ";
            }
            // line 33
            echo "
      <a href=\"submissions.php\" accesskey=\"s\"><span class=\"octicon octicon-file-code\"></span> submissions</a>

      ";
            // line 36
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["updates"] ?? null), "rejudgings", array(), "array")) > 0)) {
                // line 37
                echo "        <a class=\"new\" href=\"rejudgings.php\" accesskey=\"r\" id=\"menu_rejudgings\"><span class=\"octicon octicon-sync\"></span> rejudgings (";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["updates"] ?? null), "rejudgings", array(), "array")), "html", null, true);
                echo " active)</a>
      ";
            } else {
                // line 39
                echo "        <a href=\"rejudgings.php\" accesskey=\"r\" id=\"menu_rejudgings\"><span class=\"octicon octicon-sync\"></span> rejudgings</a>
      ";
            }
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if (($context["have_printing"] ?? null)) {
            // line 44
            echo "      <a href=\"print.php\" accesskey=\"p\"><span class=\"octicon octicon-file-text\"></span> print</a>
    ";
        }
        // line 46
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_JURY")) {
            // line 47
            echo "      <a href=\"scoreboard.php\" accesskey=\"b\"><span class=\"octicon octicon-list-ordered\"></span> scoreboard</a>
    ";
        }
        // line 49
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_TEAM")) {
            // line 50
            echo "      <a target=\"_top\" href=\"../team/\" accesskey=\"t\"><span class=\"octicon octicon-arrow-right\"></span> team</a>
    ";
        }
        // line 52
        echo "  </div>

  <div id=\"menutopright\">
    <!-- this used to be putClock() -->
    <div id=\"clock\">
      ";
        // line 57
        $context["now"] = twig_date_format_filter($this->env, "now", "U");
        // line 58
        echo "      <span id=\"timeleft\">
        ";
        // line 59
        if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getStartTime", array(), "method") < ($context["now"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getEndTime", array(), "method") >= ($context["now"] ?? null)))) {
            // line 60
            echo "          time left: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('DOMJudgeBundle\Twig\TwigExtension')->timediff(($context["now"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getEndTime", array(), "method")), "html", null, true);
            echo "
        ";
        } elseif (((twig_get_attribute($this->env, $this->getSourceContext(),         // line 61
($context["contest"] ?? null), "getActivateTime", array(), "method") < ($context["now"] ?? null)) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getStartTime", array(), "method") >= ($context["now"] ?? null)))) {
            // line 62
            echo "          time to start: ";
            echo twig_escape_filter($this->env, $this->env->getExtension('DOMJudgeBundle\Twig\TwigExtension')->timediff(($context["now"] ?? null), twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getStartTime", array(), "method")), "html", null, true);
            echo "
        ";
        }
        // line 64
        echo "      </span>

      ";
        // line 66
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_JURY") || (twig_length_filter($this->env, ($context["contests"] ?? null)) > 1))) {
            // line 67
            echo "        <div id=\"selectcontest\">
          ";
            // line 69
            echo "          <form id=\"selectcontestform\" action=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.jury_change_contest");
            echo "\">
              <label for=\"cid\">contest:</label>
              <select name=\"cid\" id=\"cid\">
                  ";
            // line 72
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_JURY")) {
                // line 73
                echo "                  <option value=\"-1\">- No contest</option>
                  ";
            }
            // line 75
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["contests"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 76
                echo "                  <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "cid", array()), "html", null, true);
                echo "\" ";
                if (($context["c"] == ($context["contest"] ?? null))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["c"], "shortname", array()), "html", null, true);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "              </select>
          </form>
          <script type=\"text/javascript\">
            document.getElementById('cid').addEventListener('change', function() {
              document.getElementById('selectcontestform').submit();
            });
          </script>
        </div>
      ";
        }
        // line 87
        echo "
      ";
        // line 89
        echo "      ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 90
            echo "        <div id=\"username\">logged in as
          ";
            // line 91
            if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()) && twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getName", array(), "method"))) {
                // line 92
                echo "            <abbr title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getUsername", array(), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getName", array(), "method"), "html", null, true);
                echo "</abbr>
          ";
            } else {
                // line 94
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "getUsername", array(), "method"), "html", null, true);
                echo "
          ";
            }
            // line 96
            echo "
          <a href=\"";
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("legacy.logout");
            echo "\"><span class=\"octicon octicon-sign-out\"></span></a>
        </div>
      ";
        }
        // line 100
        echo "    </div>

    <script type=\"text/javascript\">
      var initial = ";
        // line 103
        echo twig_escape_filter($this->env, ($context["now"] ?? null), "html", null, true);
        echo ";
      var activatetime = ";
        // line 104
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getActivateTime", array(), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getActivateTime", array(), "method"),  -1)) : ( -1)), "html", null, true);
        echo " ;
      var starttime = ";
        // line 105
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getStartTime", array(), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getStartTime", array(), "method"),  -1)) : ( -1)), "html", null, true);
        echo " ;
      var endtime = ";
        // line 106
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getEndTime", array(), "method", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["contest"] ?? null), "getEndTime", array(), "method"),  -1)) : ( -1)), "html", null, true);
        echo " ;
      var offset = 0;
      var date = new Date(initial*1000);
      var timeleftelt = document.getElementById(\"timeleft\");

      setInterval(function(){updateClock();},1000);
      updateClock();
    </script>


    ";
        // line 126
        echo "
    ";
        // line 128
        echo "    ";
        // line 129
        echo "    <div id=\"notify\" style=\"display: none\">
      ";
        // line 137
        echo "      <script type=\"text/javascript\">
      <!--
          if ( 'Notification' in window ) {
              document.getElementById('notify').style.display = 'block';
          }
      // -->
      </script>
    </div>
  </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 137,  285 => 129,  283 => 128,  280 => 126,  267 => 106,  263 => 105,  259 => 104,  255 => 103,  250 => 100,  244 => 97,  241 => 96,  235 => 94,  227 => 92,  225 => 91,  222 => 90,  219 => 89,  216 => 87,  205 => 78,  190 => 76,  185 => 75,  181 => 73,  179 => 72,  172 => 69,  169 => 67,  167 => 66,  163 => 64,  157 => 62,  155 => 61,  150 => 60,  148 => 59,  145 => 58,  143 => 57,  136 => 52,  132 => 50,  129 => 49,  125 => 47,  122 => 46,  118 => 44,  116 => 43,  113 => 42,  110 => 41,  106 => 39,  100 => 37,  98 => 36,  93 => 33,  89 => 31,  83 => 29,  81 => 28,  77 => 26,  75 => 25,  72 => 24,  69 => 23,  63 => 21,  61 => 20,  58 => 19,  54 => 17,  48 => 15,  45 => 14,  43 => 13,  40 => 12,  36 => 10,  34 => 9,  31 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::header.html.twig", "/opt/domjudge/domserver/webapp/app/Resources/views/header.html.twig");
    }
}
