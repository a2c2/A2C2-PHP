<div id="footer" class="clear">
  <div id="footer-wrap">

	<div class="col4 footer-first">
       <h3>Recent Posts</h3>
	   <ul>
         <?php $posts = get_posts('orderby=rand&numberposts=6'); foreach($posts as $post) { ?>
          <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
          </li>
         <?php } ?>
       </ul>
    </div><!-- end .footer .first -->
    <div class="col4 footer-middle">
       <h3>Support</h3>
		<ul>
          <li><a href="/about">About</a></li>
          <li><a href="/2011/07/run-jobs/">Run Jobs</a></li>
          <li><a href="/2011/07/get-an-account/">Getting Started</a></li>
          <li><a href="/education-outreach/training/">Training</a></li>
          <li><a href="/resources/saguaro/">Saguaro</a></li>
          <li><a href="/sitemap">Sitemap</a></li>
		</ul>
     </div>
     <div class="col4 contactus">
        <h3>Contact Info</h3>
		  <p><span class="prefix">Phone:</span> 480.727.0536<br />
             <span class="prefix">Fax:</span> 480.965.8988<br />
             <span class="prefix">Email:</span> <a href="a2c2@asu.edu">a2c2@asu.edu</a><br />
             <span class="prefix">Support:</span> <a href="support@hpchelp.asu.edu">support@hpchelp.asu.edu</a><br />
             <span class="prefix">Mailing Address:</span><br />
             ASU Advanced Computing Center<br />
             PO Box 878906<br/> Tempe, AZ 85287-8906</p>
     </div>
     <div class="col4 followus">
       	<h3>Follow Us</h3>
		<ul class="social" id="css3">
		    <li class="twitter">
				<a href="http://twitter.com/asuhpc"><strong>Twitter</strong></a>
			</li>
			<li class="rss">
				<a href="http://feeds2.feedburner.com/"><strong>RSS</strong></a>
			</li>
            <li class="wordpress">
				<a href="http://a2c2.asu.edu/wp-login.php"><strong>Wordpress</strong></a>
			</li>
            <li class="up">
				<a href="#"><strong>Top</strong></a>
			</li>
		</ul>
        <div class="sitemap"><h1><a href="/sitemap" title="A2C2 Sitemap"><span>A2C2 Sitemap</span></a></h1></div>
    </div>
  </div>
</div>

   <ul id="asu_footer" class="asu_black_footer">
     <li><a href="http://www.asu.edu/copyright/">Copyright &amp; Trademark</a></li>
     <li><a href="http://www.asu.edu/accessibility/">Accessibility</a></li>
     <li><a href="http://www.asu.edu/privacy/">Privacy</a></li>
     <li><a href="http://www.asu.edu/emergency/">Emergency</a></li>
     <li class="no-border"><a href="http://www.asu.edu/contactasu/">Contact ASU</a></li>
   </ul>


<div id="preload">
<img src="<?php bloginfo('template_url'); ?>/images/slide-1.png" width="570" height="270" alt="Slide 1">
<img src="<?php bloginfo('template_url'); ?>/images/slide-2.png" width="570" height="270" alt="Slide 2">
</div>
<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23462330-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>


</body>
</html>
