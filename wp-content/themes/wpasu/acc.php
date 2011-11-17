<!-- /asuthemes/3.0/headers/acc.html -->



<!--[if lte IE 7]>
<style type="text/css">
  #asu_search_module {height:17px;float:none; text-align:right;}
  #asu_search_module input.asu_search_button {border:0;padding:3px 0px;line-height:12px;}
  .asu_search_selection {position:relative; top:-2px;}
</style>
<![endif]-->

<script type="text/javascript">
// <![CDATA[
// Declare the ASUHeader namespace, if it doesn't already exist.
if (!ASUHeader) {
	var ASUHeader = {};
}
// ]]>
</script>
<div id="asu_hdr" class="asu_hdr_maroon" style="height:70px;overflow:hidden;">
	<div id="asu_logo">
    	<a target="_top" href="/" title=""><img src="<?php bloginfo('template_url'); ?>/images/acc.png" alt="" title="" /></a>
	</div>

	<div id="asu_nav_wrapper">
        <h2 class="hidden">Navigation: ASU Universal</h2>
    <ul id="asu_universal_nav">
      <li><a target="_top" href="http://www.asu.edu/">ASU Home</a></li>
      <li><a target="_top" href="https://my.asu.edu/">My ASU</a></li>
      <li><a target="_top" href="http://www.asu.edu/colleges/">Colleges &amp; Schools</a></li>

      <li><a target="_top" href="http://www.asu.edu/index/">A-Z Index</a></li>
      <li><a target="_top" href="http://www.asu.edu/directory/">Directory</a></li>
      <li><a target="_top" href="http://www.asu.edu/map/">Map</a></li>
	</ul>
        
    <h2 class="hidden">Sign In / Sign Out</h2>
	<ul id="asu_login_module" class="hidden">
	  	      <li id="asu_hdr_ssi" class="end">

	        <a target="_top" href="https://weblogin.asu.edu/cgi-bin/login?callapp=##w.l##"
	           onmouseover="this.href = ASUHeader.alterLoginHref(this.href);"
		       onfocus="this.href = ASUHeader.alterLoginHref(this.href);"
	           onclick="this.href = ASUHeader.alterLoginHref(this.href);">SIGN IN</a>
	      </li>
	      </ul>

    <script type="text/javascript">
// <![CDATA[
ASUHeader.inIFrame = (window.top != window) ? true : false;
ASUHeader.signin_url = '';
if (!ASUHeader.signin_callback_url) {
	ASUHeader.signin_callback_url = ''; // set this in your app to use non-automatic callback
}
if (!ASUHeader.signout_url) {
	ASUHeader.signout_url = 'https://webapp4.asu.edu/myasu/Signout';
}

ASUHeader.alterLoginHref = function(url) {
    if (ASUHeader.signin_url) {
        return ASUHeader.signin_url;
    }
    
    if (ASUHeader.signin_callback_url) {
    	callApp = ASUHeader.signin_callback_url;
    } else {
    	var callApp = window.location.toString();
	    if (ASUHeader.inIFrame) {
	    	try {
	    		// If we're in an iFrame, force the document domain to be asu.edu
		    	document.domain = 'asu.edu';
		        callApp = window.parent.location.toString();
	    	} catch(ignore) {}
	    }
    }
    
    // Decode the URL
    url = unescape(url);

    // Dyanamic Drupal login links
    if (url.match('##w.l.d##') && typeof(Drupal) != 'undefined') {
        var re = /https?:\/\/[^\/]*/i;
        var result = re.exec(window.location.toString());
        callApp = result + Drupal.settings.basePath + 'asuwebauth-login';
        url = url.replace('##w.l.d##', callApp);
    }
    url = url.replace('##w.l##', callApp);
    ASUHeader.signin_url = url;
    return ASUHeader.signin_url;
}

ASUHeader.checkSSOCookie = function() {
    // try to parse out the username from SSONAME cookie
    var cookies = document.cookie.split(";");
    for(var i = 0; i < cookies.length; i++) {
        if (cookies[i].indexOf('SSONAME') > 0) {
            var sso_name = document.createElement('li');
            if (cookies[i].substring(9) == "") {
                break;
            }
            sso_name.innerHTML = cookies[i].substring(9);
            
            var sso_link = document.createElement('li');
            sso_link.innerHTML = '<a target="_top" href="'+ASUHeader.signout_url+'">SIGN OUT</a>';
            sso_link.className = 'end';
            sso_link.id = 'asu_hdr_sso';
            
            var ul = document.getElementById('asu_login_module');
            while (ul.childNodes[0]) {
                ul.removeChild(ul.childNodes[0]);
            }
            ul.appendChild(sso_name);
            ul.appendChild(sso_link);
            
            break;
        }
    }
    // unhide the links
    document.getElementById('asu_login_module').style.display = 'inline-block';
}

if (typeof(jQuery) != 'undefined') {
    jQuery(document).ready(function() {
    	ASUHeader.checkSSOCookie();
    });
} else {
	// fall back and use window onload, this will always work
    if (window.addEventListener) {
        window.addEventListener('load', ASUHeader.checkSSOCookie, false);
    } else if (window.attachEvent) {
        window.attachEvent('onload', ASUHeader.checkSSOCookie);
    }
}

// ]]>
</script>  </div>

    <h2 class="hidden">Search</h2>
  <div id="asu_search_module">

	<form target="_top" action="https://search.asu.edu/search" method="get" name="gs">
	<label class="hidden" for="asu_search_box">Search</label>
			<input name="site" value="default_collection" type="hidden" />
		<input type="text" name="q" size="32" value="Search ASU" id="asu_search_box" class="asu_search_box" onfocus="ASUHeader.searchFocus(this)" onblur="ASUHeader.searchBlur(this)" /> 
	<input type="submit" value="Search" title="Search" class="asu_search_button" />
	<input name="sort" value="date:D:L:d1" type="hidden" /> 
	<input name="output" value="xml_no_dtd" type="hidden" /> 
	<input name="ie" value="UTF-8" type="hidden" /> 
	<input name="oe" value="UTF-8" type="hidden" /> 
	<input name="client" value="asu_frontend" type="hidden" /> 
	<input name="proxystylesheet" value="asu_frontend" type="hidden" />

<input type=hidden name="as_fid" value="WNJnI8wiPBuIrTK00Cdr" />
</form>  </div>
  </div>

<script type="text/javascript">
// <![CDATA[
ASUHeader.default_search_text = "Search ASU";
ASUHeader.searchSwitch = function(name) {
    var field = document.getElementById('asu_search_box');
    if (field != null) {
        var oldDefault = ASUHeader.default_search_text;
        ASUHeader.default_search_text = "Search "+name;
        if (field.value == oldDefault) {
            field.value = ASUHeader.default_search_text;
        }
    }
}
ASUHeader.searchFocus = function(field) {
    if (typeof field != "undefined") {
        if (field.value == ASUHeader.default_search_text) {
            field.value = "";
        }
    }
}
ASUHeader.searchBlur = function(field) {
    if (typeof field != "undefined") {
        if (field.value == "") {
            field.value = ASUHeader.default_search_text;
        }
    }
}
ASUHeader.searchToggle = function(radio) {
    var google = document.getElementById('asu_search_google');
    if (google != null) {
        if (google.style.display == "none") {
            ASUHeader.default_search_text = "Search ASU";
            google.style.display = "block";
        } else {
            google.style.display = "none";
        }
    }
    var alt = document.getElementById('asu_search_alternate');
    if (alt != null) {
        if (alt.style.display == "none") {
            ASUHeader.default_search_text = "Search ASU";
            alt.style.display = "block";
        } else {
            alt.style.display = "none";
        }
    }

    if (typeof radio != "undefined") {
        radio.checked = false;
    }
}
// ]]>
</script>

<div style="clear:both;"></div>

