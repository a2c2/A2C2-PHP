<?php
/*
Template Name: Front Page
*/
?>
<?php get_header(); ?>

<div id="wrap">
<?php include('featured.php') ?>
</div>

<div id="page-wrap">
<div id="steps" class=" clearfix drop-shadow">
<div class="steps-steps">
<a href="/2011/07/get-an-account/" title="The first step in using our resources is to request an account." class="steps-1"></a>
<a href="/2011/07/access-system/" title="Once you have an account, you must access our system using ssh." class="steps-2"></a>
<a href="/2011/07/run-jobs/" title="The final step is to run jobs." class="steps-3"></a>
</div>
</div><!-- end #steps -->

<div id="services" class="clearfix">
<div class="one-third first drop-shadow">
<img src="<?php bloginfo('template_url'); ?>/images/info.png" alt="" class="icon"  />
<h3 class="title">Why A2C2?</h3>
<p>By using systems of interconnected computer clusters and the concept of parallel computing to distribute tasks over multiple processors at once, high performance computing makes it possible to tackle single problems with unprecedented computing power.</p>
<div class="buttonLink"><a href="about" class="button">Read more</a></div>
</div> <!-- end .one-third -->

<div class="one-third drop-shadow">
<img src="<?php bloginfo('template_url'); ?>/images/services.png" alt="" class="icon" />
<h3 class="title">What We Can Do</h3>
<p>Our services include:</p>
<ul>
<li><a href="/2011/07/get-an-account/">Account</a></li>
<li><a href="/2011/07/cpu-hours/">CPU Hours for Purchase</a></li>
<li><a href="/resources/">Data Storage & Virtual Servers</a></li>
<li><a href="/research/information-design/">Information Design Services</a></li>
<li><a href="http://a2c2.asu.edu/how-to/get-proposal-support/">Research Proposal Support</a></li>
<li><a href="/research/application-support/">Application Support</a></li>
<li><a href="/education-outreach/training/">Workshops and Training</a></li>
<li><a href="http://a2c2.asu.edu/education-outreach/outreach//">Tours of Facilities</a></li>
</ul>
</div> <!-- end .one-third -->

<div class="one-third last drop-shadow">
<img src="<?php bloginfo('template_url'); ?>/images/announcements.png" alt="" class="icon" />
<h3 class="title">Announcements</h3>
<div class="tweet">
<script type='text/javascript'>
$(document).ready(function(){
$(".tweet").tweet({
username: "asuhpc",
join_text: "auto",
avatar_size: 32,
count: 3,
auto_join_text_default: "we said,",
auto_join_text_ed: "we",
auto_join_text_ing: "we were",
auto_join_text_reply: "we replied to",
auto_join_text_url: "we were checking out",
loading_text: "loading tweets...",
template: "{text}"
});
});
</script>
</div>
</div> <!-- end .one-third -->
</div> <!-- end #services -->


<div id="content-area-home">
<div id="seminars" class="drop-shadow">
<h3 class="title-front-page">Training, Workshops, and Special Events</h3> <img class="icon" src="<?php bloginfo('template_url'); ?>/images/seminars.png" alt="" />
<p></p> <div class="buttonLink"><a class="button" href="/education-outreach/special-events/">View Workshops</a></div>
</div>
</div> <!-- end #content-area-home -->

<div id="cluster" class="clearfix drop-shadow">
<div class="cluster-block">
<h3 class="title-front-page">Cluster Status</h3>
<object data="http://a2c2.asu.edu/dashboard/computeNodeActivity.svg" type="image/svg+xml" class="img" width="200" height="400" >
</object>
<div class="buttonLink"><a class="button" href="http://a2c2.asu.edu/dashboard/dashboard.svg">Full View</a><!--<h3>Saguaro is Offline</h3>--></div>
</div> <!-- end .cluster-block -->
</div> <!-- end cluster -->


</div><!-- /end page-wrap-->

<?php get_footer(); ?>
