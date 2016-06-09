<?php

/* home.html.twig */
class __TwigTemplate_34234fbdfa5633c622342aa0db4af1f38edd7258ddf08fe7d05807dbba929fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<section class=\"home-hero\">
\t\t<div class=\"home-hero-content\">
\t\t
\t\t\t";
        // line 7
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t</div>

\t\t";
        // line 11
        echo "\t\t<a href=\"#work-anchor\" class=\"intro-scroll-container\">
\t\t\t<div class=\"intro-scroll\"></div>
\t\t\t\t<div class=\"intro-scroll-arrow\"></div>
\t\t\t<div class=\"intro-scroll-text\">
\t\t\t  <span>View</span>
\t\t\t  <span>Work</span>
\t\t\t</div>
\t\t</a>
\t</section>

\t<section class=\"home-work\" id=\"work-anchor\">
\t\t<div class=\"home-work-feed\">

\t\t\t<ul>
\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["taxonomy"]) ? $context["taxonomy"] : null), "findTaxonomy", array(0 => array("category" => "work")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 26
            echo "\t\t\t\t";
            $context["first_image"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", array()), "images", array()));
            // line 27
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 28
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">
\t\t\t\t\t\t<div class=\"work-item-background\">
\t\t\t\t\t\t\t<h4>";
            // line 30
            echo $this->getAttribute($context["p"], "title", array());
            echo "</h4>
\t\t\t\t\t\t\t";
            // line 32
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"work-item-background-image\" style=\"background-image: url(' ";
            // line 33
            echo $this->getAttribute((isset($context["first_image"]) ? $context["first_image"] : null), "url", array());
            echo " ');\"></div>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t</ul>
\t\t</div>
\t</section>

\t<section class=\"home-about\">
\t\t<div class=\"home-about-container\">

\t\t\t<div class=\"home-about-main-container\">
\t\t\t\t<h3>";
        // line 45
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about_title", array());
        echo "</h3>
\t\t\t\t<p>";
        // line 46
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about_description", array());
        echo "</p>


\t\t\t\t<div class=\"home-about-social-container\">
\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about_social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 51
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["social"], "url", array())) {
                // line 52
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["social"], "url", array());
                echo "\" class=\"home-about-social social-";
                echo $this->getAttribute($context["social"], "class", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["social"], "class", array());
                echo "</a>
\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"home-about-side-container\">
\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "about_sidebar", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 60
            echo "\t\t\t\t\t<div class=\"home-about-sidebar\">
\t\t\t\t\t\t";
            // line 61
            if ($this->getAttribute($context["attribute"], "title", array())) {
                // line 62
                echo "\t\t\t\t\t\t\t<h6>";
                echo $this->getAttribute($context["attribute"], "title", array());
                echo "</h6>
\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t";
            if ($this->getAttribute($context["attribute"], "description", array())) {
                // line 65
                echo "\t\t\t\t\t\t\t<p>";
                echo $this->getAttribute($context["attribute"], "description", array());
                echo "</p>
\t\t\t\t\t\t";
            }
            // line 67
            echo "\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"home-about-background-image\" style=\"background-image: url(' ";
        // line 71
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "about_background_img", array());
        echo " ');\" data-1100=\"transform:scale(1);opacity:0;\" data-1600=\"transform:scale(1.05);opacity:0.05;\"></div>
\t</section>



\t";
        // line 77
        echo "\t\t<div class=\"home-bkg\" style=\"background-image: url('";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "header_background_img", array());
        echo "');\" data-0=\"transform:scale(1.05);opacity:.05;\" data-500=\"transform:scale(1);opacity:0;\"></div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 77,  175 => 71,  171 => 69,  164 => 67,  158 => 65,  155 => 64,  149 => 62,  147 => 61,  144 => 60,  140 => 59,  134 => 55,  128 => 54,  118 => 52,  115 => 51,  111 => 50,  104 => 46,  100 => 45,  90 => 37,  80 => 33,  77 => 32,  73 => 30,  68 => 28,  65 => 27,  62 => 26,  58 => 25,  42 => 11,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<section class="home-hero">*/
/* 		<div class="home-hero-content">*/
/* 		*/
/* 			{{ page.content }}*/
/* 		</div>*/
/* */
/* 		{# Scroll Image #}*/
/* 		<a href="#work-anchor" class="intro-scroll-container">*/
/* 			<div class="intro-scroll"></div>*/
/* 				<div class="intro-scroll-arrow"></div>*/
/* 			<div class="intro-scroll-text">*/
/* 			  <span>View</span>*/
/* 			  <span>Work</span>*/
/* 			</div>*/
/* 		</a>*/
/* 	</section>*/
/* */
/* 	<section class="home-work" id="work-anchor">*/
/* 		<div class="home-work-feed">*/
/* */
/* 			<ul>*/
/* 			{% for p in taxonomy.findTaxonomy({'category':'work'}) %}*/
/* 				{% set first_image = p.media.images|first %}*/
/* 				<li>*/
/* 					<a href="{{p.url}}">*/
/* 						<div class="work-item-background">*/
/* 							<h4>{{ p.title }}</h4>*/
/* 							{# {{ first_image }} #}*/
/* 						</div>*/
/* 						<div class="work-item-background-image" style="background-image: url(' {{ first_image.url }} ');"></div>*/
/* 					</a>*/
/* 				</li>*/
/* 			{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</section>*/
/* */
/* 	<section class="home-about">*/
/* 		<div class="home-about-container">*/
/* */
/* 			<div class="home-about-main-container">*/
/* 				<h3>{{ page.header.about_title }}</h3>*/
/* 				<p>{{ page.header.about_description }}</p>*/
/* */
/* */
/* 				<div class="home-about-social-container">*/
/* 				{% for social in page.header.about_social %}*/
/* 						{% if social.url %}*/
/* 							<a href="{{ social.url }}" class="home-about-social social-{{ social.class }}" target="_blank">{{ social.class }}</a>*/
/* 						{% endif %}*/
/* 				{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="home-about-side-container">*/
/* 				{% for attribute in page.header.about_sidebar %}*/
/* 					<div class="home-about-sidebar">*/
/* 						{% if attribute.title %}*/
/* 							<h6>{{ attribute.title }}</h6>*/
/* 						{% endif %}*/
/* 						{% if attribute.description %}*/
/* 							<p>{{ attribute.description }}</p>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="home-about-background-image" style="background-image: url(' {{ header.about_background_img }} ');" data-1100="transform:scale(1);opacity:0;" data-1600="transform:scale(1.05);opacity:0.05;"></div>*/
/* 	</section>*/
/* */
/* */
/* */
/* 	{# Background Image #}*/
/* 		<div class="home-bkg" style="background-image: url('{{ header.header_background_img }}');" data-0="transform:scale(1.05);opacity:.05;" data-500="transform:scale(1);opacity:0;"></div>*/
/* {% endblock %}*/
/* */
