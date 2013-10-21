<?php

/* AcmeDemoBundle:Events:index.html.twig */
class __TwigTemplate_1bc4a1e5978d54bf04e5336422c3b2408b7c42008e45df7b7a91f44160292100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Events";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Events</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_events_add", array("name" => "Add"));
        echo "\">Add</a></li>
    </ul>

    <table>

        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "events"));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 16
            echo "            <tr>
                <td>
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "title"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "description"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "date"), "m/d/Y"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "time"), "H:i:s"), "html", null, true);
            echo "
                </td>
                <td>
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "location"), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
    </table>


";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Events:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  89 => 30,  83 => 27,  77 => 24,  71 => 21,  65 => 18,  61 => 16,  57 => 15,  49 => 10,  45 => 8,  42 => 7,  36 => 5,  30 => 3,);
    }
}
