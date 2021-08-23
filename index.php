<?php
date_default_timezone_set("America/New_York");

$glid=$_SERVER['HTTP_UFSHIB_GLID'];
$date_auto = date("Y-m-d H:i:s");
$UFID=$_SERVER['HTTP_UFSHIB_UFID'];
$mail=$_SERVER['HTTP_UFSHIB_MAIL'];
$name=$_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
$date=date("Y-m-j");
$timenow=date("H:i:s");
$today=date("Y-m-j");
$now=date("H-m-s");
?>

<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title>AAC Workshops</title>
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Academic Advising Center &raquo; Feed" href="https://www.advising.ufl.edu/feed/" />
<link rel="alternate" type="application/rss+xml" title="Academic Advising Center &raquo; Comments Feed" href="https://www.advising.ufl.edu/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.advising.ufl.edu\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.10"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">

.white_content {display: none;position: relative;left: 0%;width: 400px;height: 250px;padding: 0px 10px 5px 10px;border: 5px solid #FF4a00;background-color: white;z-index:1002;overflow: auto;}
table{border:1px solid black;width:80%;margin:10px auto;border-collapse:collapse;}
table th {background-color:#00285e;color:#FFFFFF;}
table td, table th{text-align:left;padding:10px;border:1px solid black;font-weight:normal;}

p.admin{border:1px solid black;margins:10px;padding:10px;background-color:#CECECE;}
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript"></script>


<link rel='stylesheet' id='child-style-css'  href='https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/css/style.min.css?ver=1.9.4' type='text/css' media='all' />
<link rel='stylesheet' id='child-style-inline-css'  href='https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/css/inline.min.css?ver=1.9.4' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentyseventeen-ie8-css'  href='https://www.advising.ufl.edu/wp-content/themes/twentyseventeen/assets/css/ie8.css?ver=4.9.10' type='text/css' media='all' />
<![endif]-->
<link rel='stylesheet' id='tablepress-default-css'  href='https://www.advising.ufl.edu/wp-content/plugins/tablepress/css/default.min.css?ver=1.9.2' type='text/css' media='all' />
<!--[if lt IE 9]>
<script type='text/javascript' src='https://www.advising.ufl.edu/wp-content/themes/twentyseventeen/assets/js/html5.js?ver=4.9.10'></script>
<![endif]-->
<script type='text/javascript' src='https://www.advising.ufl.edu/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<link rel='https://api.w.org/' href='https://www.advising.ufl.edu/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.advising.ufl.edu/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.advising.ufl.edu/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.10" />
<link rel="canonical" href="https://www.advising.ufl.edu/academicinfo/deans-list/" />
<link rel='shortlink' href='https://www.advising.ufl.edu/?p=732' />
<link rel="alternate" type="application/json+oembed" href="https://www.advising.ufl.edu/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.advising.ufl.edu%2Facademicinfo%2Fdeans-list%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.advising.ufl.edu/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.advising.ufl.edu%2Facademicinfo%2Fdeans-list%2F&#038;format=xml" />

	<link rel="icon" href="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/favicon/favicon.ico" >
	<link rel="apple-touch-icon" href="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/favicon/favicon-180.png">
	<link rel="stylesheet" type="text/css" href="https://cloud.typography.com/6019574/7283992/css/fonts.css" />
	<meta name="msapplication-TileColor" content="#00529b">
	<meta name="msapplication-TileImage" content="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/favicon/favicon-144.png">
</head>

<body class="page-template-default page page-id-732 page-child parent-pageid-102 logged-in has-header-image page-two-column colors-light">

	<header class="X-header header-clas">
	<a class="skip-link screen-reader-text" href="#content">Skip to main content</a>

       <div class="uf"> <!-- UF Logo -->
          <a href="http://www.ufl.edu" target="_blank">
					 <svg class="icon-uflogo" aria-hidden="true"> <use xlink:href="#uflogo"></use> </svg>					 <span class="SVGaltText">University of Florida Homepage</span>
          </a>
       </div>

		   <div class="college"><!-- College of Liberal Arts logo -->
				 <div class="strikeRight">
	 				<a href="http://www.clas.ufl.edu" target="_blank">
	 						<span class="college-logo-desktop">
	 							<svg aria-hidden="true"> <use xlink:href="#college-logo"></use> </svg>	 							<span class="SVGaltText">College of Liberal Arts and Sciences</span>
	 						</span>
	 						<span class="college-logo-mobile">
	 							<span>Liberal Arts and Sciences</span>
	 					 </span>
	 					 <span class="college-logo-tablet">
	 							<span>College of Liberal Arts and Sciences</span>
	 					 </span>
	 				</a>
	 	   	</div>
				<div class="menuBox">
					<button><svg id="icon-menu" class="icon-menu" aria-hidden="true"> <use xlink:href="#icon-fivelines"></use> </svg></button>
				</div>
		   </div>

   <div class="department">
		<div class="container_header_department"><!-- Website title -->
		 <span>
					<h1 class="strikeheader"><a class="strikeheader" href="https://www.advising.ufl.edu"><span class="access-focus">Academic Advising Center</span></a></h1>
			</span>

		 <div class="X-menu"> <!-- Main Navigation -->
			 <div class="mobileSearch">

<form role="search" aria-label="Search Form 1" method="get" class="search-form" action="https://www.advising.ufl.edu/">
	<label for="search-form-1">
		<span class="screen-reader-text">Search for:</span>
	</label>
	<input type="search" id="search-form-1" class="search-field" value="" name="s" placeholder="Search Academic Advising Center" />
	<button type="submit" class="search-submit"><svg class="icon icon-search" aria-hidden="true"> <use xlink:href="#icon-search"></use> </svg><span class="screen-reader-text">Search</span></button>
</form>
</div>
				 						<nav id="site-navigation" class="main-navigation" aria-label="Main Navigation">
						 <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
							 <svg class="icon icon-bars" aria-hidden="true"> <use xlink:href="#icon-bars"></use> </svg><svg class="icon icon-close" aria-hidden="true"> <use xlink:href="#icon-close"></use> </svg>Menu						 </button>

						 <div class="menu-new-container"><ul id="top-menu" class="menu"><li id="menu-item-494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-494"><a href="https://www.advising.ufl.edu/advising/" title="Advising"> <span>Advising</span></a>
<ul class="sub-menu">
	<li id="menu-item-5580" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5580"><a href="https://www.advising.ufl.edu/advising/clas-career-coaching/" title="CLAS Career Coaching"> CLAS Career Coaching</a></li>
	<li id="menu-item-12265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12265"><a href="https://www.advising.ufl.edu/advising/advisingservices/first-year-clas-advising/" title="First Year CLAS Advising"> First Year CLAS Advising</a></li>
	<li id="menu-item-9211" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9211"><a href="https://www.advising.ufl.edu/advising/who-is-my-advisor/" title="Who Is My Advisor?"> Who Is My Advisor?</a></li>
	<li id="menu-item-496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-496"><a href="https://www.advising.ufl.edu/advising/staff/" title="AAC Staff"> AAC Staff</a>
	<ul class="sub-menu">
		<li id="menu-item-13483" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13483"><a href="https://www.advising.ufl.edu/advising/staff/academic-advising-grad-assistant-position/" title="Academic Advising Grad Assistant Position"> Academic Advising Grad Assistant Position</a></li>
		<li id="menu-item-13137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13137"><a href="https://www.advising.ufl.edu/advising/staff/aac-graduate-students/" title="AAC Graduate Students"> AAC Graduate Students</a></li>
		<li id="menu-item-12573" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12573"><a href="https://www.advising.ufl.edu/advising/staff/preview-graduate-internships/" title="Preview Graduate Internships"> Preview Graduate Internships</a></li>
	</ul>
</li>
	<li id="menu-item-498" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-498"><a href="https://www.advising.ufl.edu/advising/leadership/" title="Leadership &#038; Awards"> Leadership &#038; Awards</a></li>
</ul>
</li>
<li id="menu-item-504" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current_page_ancestor menu-item-has-children menu-item-504"><a href="https://www.advising.ufl.edu/academics/" title="Academics"> <span>Academics</span></a>
<ul class="sub-menu">
	<li id="menu-item-580" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-580"><a href="" title="Academic Offerings"> Academic Offerings</a>
	<ul class="sub-menu">
		<li id="menu-item-9227" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9227"><a href="https://www.advising.ufl.edu/beyond120/" title="<em>Beyond120</em>"> <em>Beyond120</em></a></li>
		<li id="menu-item-582" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-582"><a href="https://catalog.ufl.edu/ugrad/current/Pages/certificates.aspx" title="Certificates"> Certificates</a></li>
		<li id="menu-item-7462" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7462"><a href="https://www.advising.ufl.edu/liberal-arts-and-sciences-internship-ids4940/" title="Liberal Arts and Sciences Internship – IDS4940"> Liberal Arts and Sciences Internship – IDS4940</a></li>
		<li id="menu-item-1674" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1674"><a href="https://clas.ufl.edu/undergraduate/" title="Majors"> Majors</a></li>
		<li id="menu-item-304" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-304"><a href="https://www.advising.ufl.edu/academicinfo/minors/" title="Minors"> Minors</a></li>
	</ul>
</li>
	<li id="menu-item-556" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-556"><a href="https://www.advising.ufl.edu/academicinfo/clas-policiesprocedures/" title="CLAS Policies/Procedures"> CLAS Policies/Procedures</a>
	<ul class="sub-menu">
		<li id="menu-item-558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-558"><a href="https://www.advising.ufl.edu/academicinfo/clas-probation/" title="CLAS Probation"> CLAS Probation</a></li>
		<li id="menu-item-10189" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-732 current_page_item menu-item-10189"><a href="https://www.advising.ufl.edu/academicinfo/deans-list/" title="Dean&#8217;s List"> Dean&#8217;s List</a></li>
		<li id="menu-item-562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-562"><a href="https://www.advising.ufl.edu/academicinfo/duals-and-doubles/" title="Duals and Doubles"> Duals and Doubles</a></li>
		<li id="menu-item-566" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-566"><a href="https://www.advising.ufl.edu/academicinfo/graduation/" title="Graduation"> Graduation</a></li>
		<li id="menu-item-10487" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10487"><a href="https://www.advising.ufl.edu/academicinfo/clas-policiesprocedures/study-abroad/" title="Study Abroad"> Study Abroad</a></li>
		<li id="menu-item-570" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-570"><a href="https://www.advising.ufl.edu/academicinfo/transient-study/" title="Transient Study"> Transient Study</a></li>
	</ul>
</li>
	<li id="menu-item-584" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-584"><a href="https://catalog.ufl.edu/ugrad/current/liberalarts/school_pages/degrees.aspx" title="College Requirements"> College Requirements</a>
	<ul class="sub-menu">
		<li id="menu-item-554" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-554"><a href="https://www.advising.ufl.edu/academicinfo/clas-foreign-language-requirement/" title="CLAS Foreign Language Requirement"> CLAS Foreign Language Requirement</a></li>
	</ul>
</li>
	<li id="menu-item-9229" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9229"><a href="" title="Special Programs"> Special Programs</a>
	<ul class="sub-menu">
		<li id="menu-item-9231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9231"><a href="https://www.advising.ufl.edu/promise/" title="PROMISE"> PROMISE</a></li>
		<li id="menu-item-10737" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10737"><a href="https://www.advising.ufl.edu/docs/2019AmbassadorApplication.pdf" title="CLAS Ambassador Application"> CLAS Ambassador Application</a></li>
		<li id="menu-item-9233" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9233"><a href="http://innovationacademy.ufl.edu" title="Innovation Academy"> Innovation Academy</a></li>
		<li id="menu-item-9235" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9235"><a href="https://www.advising.ufl.edu/pace-pathways-to-campus-enrollment/" title="PaCE: Pathway to Campus Enrollment"> PaCE: Pathway to Campus Enrollment</a></li>
		<li id="menu-item-9487" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-9487"><a href="https://www.advising.ufl.edu/tau-sigma/" title="Tau Sigma"> Tau Sigma</a></li>
		<li id="menu-item-9237" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9237"><a href="https://www.advising.ufl.edu/uf-online/" title="UF Online"> UF Online</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-542" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-542"><a href="https://www.advising.ufl.edu/admissions/" title="Admissions"> <span>Admissions</span></a>
<ul class="sub-menu">
	<li id="menu-item-1436" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1436"><a href="http://www.admissions.ufl.edu/prospectivefreshmen.html" title="Freshman Admissions"> Freshman Admissions</a></li>
	<li id="menu-item-594" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-594"><a href="https://www.advising.ufl.edu/admissions/transfer-admissions/" title="Transfer Admissions"> Transfer Admissions</a>
	<ul class="sub-menu">
		<li id="menu-item-948" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-948"><a href="https://www.advising.ufl.edu/admissions/transfer-admissions/tips-for-junior-transfer-students/" title="Tips for Junior Transfer Students"> Tips for Junior Transfer Students</a></li>
		<li id="menu-item-946" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-946"><a href="https://www.advising.ufl.edu/admissions/transfer-admissions/if-admitted/" title="If Admitted"> If Admitted</a></li>
		<li id="menu-item-944" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-944"><a href="https://www.advising.ufl.edu/prep/" title="Transfer Preview Prep"> Transfer Preview Prep</a></li>
		<li id="menu-item-954" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-954"><a href="https://www.advising.ufl.edu/admissions/transfer-admissions/if-not-admitted/" title="If Not Admitted"> If Not Admitted</a></li>
		<li id="menu-item-9595" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9595"><a href="https://www.advising.ufl.edu/admissions/transfer-admissions/student-spotlights/" title="Student Spotlights"> Student Spotlights</a></li>
	</ul>
</li>
	<li id="menu-item-596" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-596"><a href="https://www.advising.ufl.edu/admissions/readmissions/" title="Readmissions"> Readmissions</a>
	<ul class="sub-menu">
		<li id="menu-item-990" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-990"><a href="https://www.advising.ufl.edu/admissions/readmissions/fresh-start/" title="Fresh Start"> Fresh Start</a></li>
		<li id="menu-item-988" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-988"><a href="https://www.advising.ufl.edu/admissions/readmissions/readmission-dismissed/" title="Readmission – Dismissed"> Readmission – Dismissed</a></li>
		<li id="menu-item-986" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-986"><a href="https://www.advising.ufl.edu/admissions/readmissions/readmission-above-2-0-uf-gpa/" title="Readmission – Above 2.0 UF GPA"> Readmission – Above 2.0 UF GPA</a></li>
		<li id="menu-item-984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-984"><a href="https://www.advising.ufl.edu/admissions/readmissions/readmission-below-2-0-uf-gpa/" title="Readmission – Below 2.0 UF GPA"> Readmission – Below 2.0 UF GPA</a></li>
		<li id="menu-item-982" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-982"><a href="https://www.advising.ufl.edu/admissions/readmissions/frequently-asked-questions/" title="Frequently Asked Questions"> Frequently Asked Questions</a></li>
	</ul>
</li>
	<li id="menu-item-1676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1676"><a href="" title="Other"> Other</a>
	<ul class="sub-menu">
		<li id="menu-item-980" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-980"><a href="https://phpb.clas.ufl.edu/" title="Postbaccalaureate"> Postbaccalaureate</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-506" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-506"><a href="https://www.advising.ufl.edu/pre-health/" title="Pre-Health"> <span>Pre-Health</span></a>
<ul class="sub-menu">
	<li id="menu-item-508" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-508"><a href="https://www.advising.ufl.edu/pre-health/services/" title="Pre-Health Services"> Pre-Health Services</a>
	<ul class="sub-menu">
		<li id="menu-item-510" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-510"><a href="https://www.advising.ufl.edu/pre-health/services/faculty-information/" title="Faculty Information"> Faculty Information</a></li>
		<li id="menu-item-8352" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8352"><a href="https://www.advising.ufl.edu/pre-health/services/pre-health-listserv/" title="Pre-Health Listserv"> Pre-Health Listserv</a></li>
	</ul>
</li>
	<li id="menu-item-538" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-538"><a href="https://www.advising.ufl.edu/pre-health/apply/" title="Steps to Building a Pre-Health Career"> Steps to Building a Pre-Health Career</a>
	<ul class="sub-menu">
		<li id="menu-item-1061" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1061"><a href="https://www.advising.ufl.edu/pre-health/apply/explore/" title="Explore"> Explore</a></li>
		<li id="menu-item-1069" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1069"><a href="https://www.advising.ufl.edu/pre-health/apply/prepare/" title="Prepare"> Prepare</a></li>
		<li id="menu-item-1075" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1075"><a href="https://www.advising.ufl.edu/pre-health/apply/apply/" title="Apply"> Apply</a></li>
		<li id="menu-item-1120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1120"><a href="https://www.advising.ufl.edu/pre-health/apply/profession-details/" title="Profession Details"> Profession Details</a></li>
		<li id="menu-item-536" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-536"><a href="https://www.advising.ufl.edu/pre-health/apply/growth-year-planning/" title="Growth Year Planning"> Growth Year Planning</a></li>
		<li id="menu-item-8924" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8924"><a href="https://www.advising.ufl.edu/pre-health/apply/international-opportunities/" title="International Opportunities"> International Opportunities</a></li>
	</ul>
</li>
	<li id="menu-item-1158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1158"><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/" title="Pre-Health Resources"> Pre-Health Resources</a>
	<ul class="sub-menu">
		<li id="menu-item-520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-520"><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/event-calendar/" title="Event Calendar"> Event Calendar</a></li>
		<li id="menu-item-522" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-522"><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/faqs/" title="FAQs"> FAQs</a></li>
		<li id="menu-item-518" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-518"><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/forms-handouts/" title="Forms &#038; Handouts"> Forms &#038; Handouts</a></li>
		<li id="menu-item-4512" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4512"><a href="http://advising.ufl.edu/docs/GPACalculator.xlsx" title="GPA Calculator"> GPA Calculator</a></li>
		<li id="menu-item-526" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-526"><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/suggested-reading/" title="Suggested Reading"> Suggested Reading</a></li>
		<li id="menu-item-528" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-528"><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/uf-graduate-programs/" title="UF Graduate Programs"> UF Graduate Programs</a></li>
		<li id="menu-item-516" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-516"><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/workshops/" title="Workshops"> Workshops</a></li>
		<li id="menu-item-4890" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4890"><a href="https://www.advising.ufl.edu/pre-health/pre-health-resources/pre-health-links/" title="Pre-Health Links"> Pre-Health Links</a></li>
	</ul>
</li>
	<li id="menu-item-530" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-530"><a href="https://www.advising.ufl.edu/pre-health/specialty-programs/" title="Specialty Programs"> Specialty Programs</a>
	<ul class="sub-menu">
		<li id="menu-item-4894" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4894"><a href="https://www.advising.ufl.edu/pre-health/specialty-programs/#MHP" title="Medical Honors Program (MHP)"> Medical Honors Program (MHP)</a></li>
		<li id="menu-item-4882" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4882"><a href="https://www.advising.ufl.edu/pre-health/specialty-programs/#BSDMD" title="BS/DMD"> BS/DMD</a></li>
		<li id="menu-item-4148" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4148"><a href="https://phpb.clas.ufl.edu/" title="Pre-Health Postbac Program (PHPB)"> Pre-Health Postbac Program (PHPB)</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-540" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-540"><a href="https://www.advising.ufl.edu/pre-law/" title="Pre-Law"> <span>Pre-Law</span></a>
<ul class="sub-menu">
	<li id="menu-item-692" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-692"><a href="https://www.advising.ufl.edu/pre-law/advising-services/" title="Advising Services"> Advising Services</a>
	<ul class="sub-menu">
		<li id="menu-item-682" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-682"><a href="https://www.advising.ufl.edu/pre-law/advising-services/exploring-law/" title="Exploring Law"> Exploring Law</a></li>
		<li id="menu-item-690" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-690"><a href="https://www.advising.ufl.edu/pre-law/advising-services/academic-preparation/" title="Academic Preparation"> Academic Preparation</a></li>
		<li id="menu-item-684" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-684"><a href="https://www.advising.ufl.edu/pre-law/advising-services/application-process/" title="Application Process"> Application Process</a></li>
		<li id="menu-item-884" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-884"><a href="https://www.advising.ufl.edu/pre-law/advising-services/pre-law-gator-success/" title="Pre-Law Gator Success!"> Pre-Law Gator Success!</a></li>
		<li id="menu-item-678" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-678"><a href="https://www.advising.ufl.edu/pre-law/pre-law-checklists/" title="Pre-Law Checklists"> Pre-Law Checklists</a></li>
	</ul>
</li>
	<li id="menu-item-1166" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1166"><a href="https://www.advising.ufl.edu/pre-law/pre-law-resources/" title="Pre-Law Resources"> Pre-Law Resources</a>
	<ul class="sub-menu">
		<li id="menu-item-688" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-688"><a href="https://www.advising.ufl.edu/pre-law/pre-law-resources/pre-law-events/" title="Pre-Law Events"> Pre-Law Events</a></li>
		<li id="menu-item-680" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-680"><a href="https://www.advising.ufl.edu/pre-law/pre-law-resources/pre-law-involvement-opportunities/" title="Pre-Law Involvement Opportunities"> Pre-Law Involvement Opportunities</a></li>
		<li id="menu-item-686" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-686"><a href="https://www.advising.ufl.edu/pre-law/pre-law-resources/workshops/" title="Workshops"> Workshops</a></li>
	</ul>
</li>
	<li id="menu-item-1822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1822"><a href="https://www.advising.ufl.edu/pre-law/pre-law-listserv/" title="Pre-Law Listserv"> Pre-Law Listserv</a></li>
</ul>
</li>
<li id="menu-item-548" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-548"><a href="https://www.advising.ufl.edu/exploratory/" title="Exploratory"> <span>Exploratory</span></a>
<ul class="sub-menu">
	<li id="menu-item-1724" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1724"><a href="https://www.advising.ufl.edu/exploratory/academic-advising/" title="Advising Services"> Advising Services</a></li>
	<li id="menu-item-8848" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8848"><a href="https://www.advising.ufl.edu/exploratory/events/" title="Events"> Events</a></li>
	<li id="menu-item-840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-840"><a href="https://www.advising.ufl.edu/exploratory/frequently-asked-questions/" title="Frequently Asked Questions"> Frequently Asked Questions</a></li>
	<li id="menu-item-12479" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-12479"><a href="https://www.advising.ufl.edu/exploratory/getting-started/" title="Getting Started"> Getting Started</a>
	<ul class="sub-menu">
		<li id="menu-item-874" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-874"><a href="https://www.advising.ufl.edu/exploratory/getting-started/exercises/" title="Exploratory Exercises"> Exploratory Exercises</a></li>
		<li id="menu-item-838" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-838"><a href="https://www.advising.ufl.edu/wp-content/uploads/2020/05/FamilyGuide.pdf" title="Exploratory Family Guide"> Exploratory Family Guide</a></li>
		<li id="menu-item-848" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-848"><a href="https://www.advising.ufl.edu/exploratory/getting-started/exploratory-timeline/" title="Exploratory Timeline"> Exploratory Timeline</a></li>
		<li id="menu-item-872" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-872"><a href="https://www.advising.ufl.edu/exploratory/getting-started/workshops/" title="Online Workshops"> Online Workshops</a></li>
		<li id="menu-item-850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-850"><a href="https://www.advising.ufl.edu/exploratory/getting-started/top-ten-ways-to-explore-with-purpose/" title="Top Ten Ways to Explore with Purpose"> Top Ten Ways to Explore with Purpose</a></li>
	</ul>
</li>
	<li id="menu-item-870" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-870"><a href="https://www.advising.ufl.edu/exploratory/additional-resources/" title="Additional Resources"> Additional Resources</a></li>
</ul>
</li>
<li id="menu-item-1390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1390"><a href="https://www.advising.ufl.edu/resources/" title="Resources"> <span>Resources</span></a>
<ul class="sub-menu">
	<li id="menu-item-5834" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5834"><a href="https://www.advising.ufl.edu/resources/newstudents/" title="New Student Information and Resources"> New Student Information and Resources</a>
	<ul class="sub-menu">
		<li id="menu-item-7914" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7914"><a href="https://www.advising.ufl.edu/resources/newstudents/newly-admitted-students/" title="Newly-Admitted Students"> Newly-Admitted Students</a></li>
		<li id="menu-item-7912" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7912"><a href="https://www.advising.ufl.edu/resources/newstudents/after-attending-preview/" title="After Attending Preview"> After Attending Preview</a></li>
		<li id="menu-item-7910" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7910"><a href="https://www.advising.ufl.edu/resources/newstudents/once-classes-have-begun/" title="Once Classes Have Begun"> Once Classes Have Begun</a></li>
		<li id="menu-item-7908" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7908"><a href="https://www.advising.ufl.edu/resources/newstudents/additional-useful-information/" title="Additional Useful Information"> Additional Useful Information</a></li>
	</ul>
</li>
	<li id="menu-item-1394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1394"><a href="https://www.advising.ufl.edu/resources/faqs/" title="FAQs"> FAQs</a>
	<ul class="sub-menu">
		<li id="menu-item-12299" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-12299"><a href="https://www.advising.ufl.edu/resources/improve-academic-success/" title="Want to Improve Your Academic Success?"> Want to Improve Your Academic Success?</a></li>
	</ul>
</li>
	<li id="menu-item-1392" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1392"><a href="https://www.advising.ufl.edu/resources/forms/" title="Forms"> Forms</a></li>
	<li id="menu-item-5364" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5364"><a href="" title="Supportive Resources"> Supportive Resources</a>
	<ul class="sub-menu">
		<li id="menu-item-10847" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10847"><a href="https://www.advising.ufl.edu/workshops" title="AAC Workshops"> AAC Workshops</a></li>
		<li id="menu-item-5366" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5366"><a href="http://career.ufl.edu/" title="Career Connections Center"> Career Connections Center</a></li>
		<li id="menu-item-10023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10023"><a href="https://www.advising.ufl.edu/resources/gpa-calculator/" title="GPA Calculator"> GPA Calculator</a></li>
		<li id="menu-item-5370" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5370"><a href="https://teachingcenter.ufl.edu/" title="Teaching Center"> Teaching Center</a></li>
		<li id="menu-item-5372" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5372"><a href="http://www.ufadvising.ufl.edu/college-remote-advising-contacts/" title="UF College Advisors"> UF College Advisors</a></li>
		<li id="menu-item-5368" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5368"><a href="https://counseling.ufl.edu/" title="UF Counseling &#038; Wellness Center"> UF Counseling &#038; Wellness Center</a></li>
		<li id="menu-item-8832" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8832"><a href="http://www.sfa.ufl.edu/search/" title="UF Scholarship Search Engine"> UF Scholarship Search Engine</a></li>
	</ul>
</li>
	<li id="menu-item-8984" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8984"><a href="https://www.advising.ufl.edu/resources/scholarships/" title="Scholarships"> Scholarships</a></li>
</ul>
</li>
<li id="menu-item-7176" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-7176"><a href="https://www.advising.ufl.edu/transferstudents/" title="Transfer"> <span>Transfer</span></a>
<ul class="sub-menu">
	<li id="menu-item-7182" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7182"><a href="https://www.advising.ufl.edu/transferstudents/peermentoringprogram/" title="Peer Mentoring Program"> Peer Mentoring Program</a></li>
	<li id="menu-item-7180" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7180"><a href="https://www.advising.ufl.edu/transferstudents/studentresources/" title="Student Resources"> Student Resources</a></li>
	<li id="menu-item-13785" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13785"><a href="https://www.advising.ufl.edu/tau-sigma/membership/" title="Tau Sigma Membership"> Tau Sigma Membership</a></li>
	<li id="menu-item-7178" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7178"><a href="https://www.advising.ufl.edu/transferstudents/workshops/" title="Workshops"> Workshops</a></li>
</ul>
</li>
</ul></div>
						</nav><!-- #site-navigation -->
				 
		 </div>
   </div>


		<nav class="X-quickLinks" aria-label="Quick Links"><!--Quicklinks menu -->
		  <a href="#" class="menu-title" aria-hidden="true">Quick Links</a>
		  
<div class="menu-new-container">
<ul id="quicklinks" class="menu">


<!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-504"><a href="https://www.advising.ufl.edu/advising/advisingservices/#hours" title="Hours and Location"> <span>Hours and Location</span></a></li>-->


<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-494"><a href="https://www.advising.ufl.edu" title="Forms"> <span>AAC Home</span></a></li>



<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-494"><a href="https://www.advising.ufl.edu/resources/forms/" title="Forms"> <span>Forms</span></a></li>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-542"><a href="https://www.advising.ufl.edu/resources/newstudents/newly-admitted-students/" title="Newly-Admitted Students"> <span>Newly-Admitted Students</span></a></li>


<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-542"><a href="https://www.advising.ufl.edu/resources/newstudents/after-attending-preview/" title="Newly-Admitted Students"> <span>After Attending Preview</span></a></li>

<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-542"><a href="https://www.advising.ufl.edu/advising/who-is-my-advisor/" title="Who is my advisor?"> <span>Who Is My Advisor?</span></a></li>









</ul></div>  	
  	</nav>

	<div class="X-searchTrigger"> <!-- Search section -->
	   <button>
		   <svg id="icon-search-thin-trigger" class="icon-search-thin-open" aria-labelledby="title-2"><title id="title-2">Open/Close Search</title> <use xlink:href="#icon-search-thin-open"></use> </svg>	   </button>
	</div>
   <div class="X-search-form-container">

<form role="search" aria-label="Search Form 3" method="get" class="search-form" action="https://www.advising.ufl.edu/">
	<label for="search-form-3">
		<span class="screen-reader-text">Search for:</span>
	</label>
	<input type="search" id="search-form-3" class="search-field" value="" name="s" placeholder="Search Academic Advising Center" />
	<button type="submit" class="search-submit"><svg class="icon icon-search" aria-hidden="true"> <use xlink:href="#icon-search"></use> </svg><span class="screen-reader-text">Search</span></button>
</form>
</div>
 </div>

</header><!-- uf-branding -->

<div id="page" class="site">
	
	<div class="site-content-contain">
		<div id="content" class="site-content">


	<div id="primary" class="content-area">
		<main id="main" class="site-main">    
			
<article id="post-732" class="post-732 page type-page status-publish format-standard hentry">
	<header class="entry-header">
           <div class="wrap">
		<h2 class="entry-title">Academic Advising Center Workshops</h2></div><!-- .wrap -->
	</header><!-- .entry-header -->
	<div class="entry-content">
           <div class="wrap">

















<?php



//These Gatorlink IDs have access to the Workshop Admin tool
$admin=array("danshields","tsy","losickey","saracarl","veggie","lpowers","gatorbec","kspan","rknicker","richmoc","rkwong","rnelson2","sspan27","lblancaster");

if  (in_array($glid,$admin)){
echo "
<center><p class=\"admin\"><strong><strong>$glid</strong>, you can access the <a href=\"/workshops/admin/\">Workshop Admin site</a>.</p></center>
";
}

if ((isset($_POST['submit'])) AND (empty($_POST['id']))) {
	echo"</div>";
	include ("/h/cnswww-www.advising/www.advising.ufl.edu/htdocs/includes/footer.html");
	print "<script type=\"text/javascript\">
    window.alert(\"Please click the button of the workshop for which you want to register.\");
  </script>";
	exit;
}

if ((isset($_POST['submit'])) AND (!empty($_POST['id']))) {
require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/newlogin.cgi");

$name=$_SERVER['HTTP_UFSHIB_BUSINESSNAME'];
$UFID = $mysqli -> real_escape_string($_POST['UFID']);
$glid = $mysqli -> real_escape_string($_POST['glid']);
$mail = $mysqli -> real_escape_string($_POST['mail']);
$date_auto = $mysqli -> real_escape_string($_POST['date_auto']);
$admit = $mysqli -> real_escape_string($_POST['admit']);
$year = $mysqli -> real_escape_string($_POST['year']);
$area = $mysqli -> real_escape_string($_POST['area']);
$id = $mysqli -> real_escape_string($_POST['id']);

$sql="insert into wkshp_reg (name, UFID, glid, mail, date_auto, admit, year, area, id) values ('$name', '$UFID','$glid', '$mail','$date_auto', '$admit', '$year', '$area', '$id') ON DUPLICATE KEY UPDATE name='$name',UFID='$UFID',glid='$glid', mail='$mail', date_auto='$date_auto', admit='$admit', year='$year', area='$area', id=$id;";
$result = mysqli_query($mysqli,$sql);
	
$sql2="SELECT wkshp.title as title FROM wkshp WHERE ID='$id';";
$result2 = mysqli_query($mysqli,$sql2);
while($row = mysqli_fetch_array($result2))
  {
    $title2=$row['title'];
  echo "<br />";
  }

$to = $mail;
$subject = "AAC Workshop Registration";
$body = "Thank you for registering for<br><strong>".$title2."</strong><br><br>Remember to put it on your calendar! You can also sign in to http://www.advising.ufl.edu/workshops/workshoplist.php with your GatorLink to see workshops for which you are registered and to download an ical file to add to your calendar.<br><br>If you are registered for a workshop, you are expected to attend. If you are unable to attend for any reason, please cancel your registration with at least 24 hours' notice.<br><br>
Academic Advising Center<br>
100 Fletcher Drive - P.O. Box 112015<br>
Gainesville, FL  32611-2015<br>
Phone: <a href='tel:3523921521'>(352) 392-1521</a><br>
Fax: (352) 392-2905";


$headers = 'From: '.'advisor@advising.ufl.edu'."\r\n" .
   'Reply-To: '.'advisor@advising.ufl.edu'."\r\n" .
   'Content-Type: text/html; charset=ISO-8859-1'."\r\n".
   'X-Mailer: PHP/' . phpversion();
   if(mail($to, $subject, $body, $headers, "-f please-do-not-reply@ufl.edu")){


print "<center><h3>Thank you for registering.</h3>
<center><p>An email confirmation was sent to your UF email account.</p>

<p>Go to the <a href=\"workshoplist.php\">workshop page</a> to see your workshops.</p>
</center>
</div>
";



die;
} else {
	echo("<center><p>Message delivery failed...</p></center>");
	}
}









require("/h/cnswww-www.advising/www.advising.ufl.edu/cgi-bin/newlogin.cgi");

//query acadvise.wkshp_reg for workshops to display depending on the team selected
$sql = "SELECT wkshp.ID as id, wkshp.title as title, wkshp.description, wkshp.location as location, DATE_FORMAT(wkshp.date,'%b %e, %Y') as date, DATE_FORMAT(wkshp.timestart,'%l:%i %p') as timestart, DATE_FORMAT(wkshp.timeend,'%l:%i %p') as timeend, wkshp.team as team, date as begdate, timestart as begtime FROM acadvise.wkshp WHERE id NOT IN (SELECT ID from acadvise.wkshp_reg where '$UFID' = UFID) and '$today' <=wkshp.date and (SELECT count(ID) from acadvise.wkshp_reg where wkshp_reg.ID=wkshp.ID) < acadvise.wkshp.capacity order by begdate, begtime;";


$result1 = mysqli_query($mysqli,$sql);
$num_rows1 = mysqli_num_rows($result1);


//IF NO RESULTS, POST CHECK BACK SOON MESSAGE
if (!$num_rows1){
 echo '<center><p><b>There are no workshops currently scheduled.</b></p>
 <p>Please check back soon.</p></center>';
}



else {
	
print "<p>The AAC hosts workshops and events throughout the year.</p>
<ul>
	<li>Click the workshop title for a description of the workshop.</li>
	<li>Select the \"Register\" column button to register.</li>
	<li>Click the \"Submit\" button below.</li>
	<li>You will receive a confirmation email to your @ufl.edu email address. <strong>If you sign up for a workshop, you are expected to attend. If you cannot attend, please cancel your registration at least 24 hours in advance.</strong></li>
	</ul>

<p>You can also <a href=\"workshoplist.php\">view a list</a> of workshops for which you've registered.</p>
	
<p><form onsubmit='return validate_form ( ): onSubmit=stamp()' id='sm-form' name='registration' action='index.php' method='POST'>";
$i=0;
echo '<table>
<tr class="toprow">
	<th>Title</th>
	<th>Date/Time (ET)/Location</th>
	<th>Register</th>
</tr>';



while ($row1=mysqli_fetch_row($result1)) {
  $id1=$row1[0];
  $title1=$row1[1];
  $description1=$row1[2];  
  $location1 = $row1[3];
  $date1 = $row1[4];
  $timestart1= $row1[5];
  $timeend1= $row1[6];
  $team1=$row1[7];
  
  echo "
  <tr>
	<td>
 	<a href = \"javascript:void(0)\" onclick = \"document.getElementById('light$i').style.display='block';document.getElementById('fade$i').style.display='block'\">".$title1."</a> (".$team1." team)
	
	
	<div id=\"light$i\" class=\"white_content\"><p><font color=\"#000066\"><a href = \"javascript:void(0)\" onclick =\"document.getElementById('light$i').style.display='none';document.getElementById('fade$i').style.display='none'\">Close</a></font></p>
		<p>".$description1."</p>
		<p><font color=\"#000066\"><a href = \"javascript:void(0)\" onclick = \"document.getElementById('light$i').style.display='none';document.getElementById('fade$i').style.display='none'\">Close</a></font></p>
	</div>
	<div id=\"fade$i\" class=\"black_overlay\"></div>
    </td>
	
	<td>
    ".$date1.",<br />".$timestart1." - ".$timeend1.",<br />".$location1."
    </td>
	
	<td>
      <input name='id' type='radio' value='".$id1."' />
    </td>
   
    </tr>";
$i++;
}
echo "<tr><td colspan='3' class='submit'>
<input type='hidden' value=\"".$glid."\" name='glid' />
<input type='hidden' value=\"".$name."\" name='name' />
<input type='hidden' value=\"".$UFID."\" name='UFID' />
<input type='hidden' value=\"".$mail."\" name='mail' />
<input type='hidden' value=\"".$date_auto."\" name='date_auto' />
<input type='submit' onsubmit='return validate_form ( );' value='Submit' name='submit' />
</form></td></tr>

</table>";
}
?>




</div><!-- .wrap -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->



		</div><!-- #content -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<footer aria-label="Main Footer">
<div class="footer-main">
   <div class="footer-main-wrap">


<style>
.footer-main-col-1 p{float:left;}
.mapouter{float:right;padding-top:.5rem;}
</style>
<div class="footer-main-col-1">
      <div class="uf">
         <a href="https://clas.ufl.edu" target="_blank">
            <svg class="icon-college-logo-stacked" aria-hidden="true"> <use xlink:href="#college-logo-stacked"></use> </svg>			<span class="SVGaltText">College of Liberal Arts and Sciences Homepage</span>
         </a><br>
      </div>
<svg class="icon-journeys-begin" aria-hidden="true"> <use xlink:href="#journeys-begin"></use> </svg>
 <p>
      &#169; 2020 University of Florida<br><a href ="//assistive.usablenet.com/tt/referrer"> Text-only </a>  |  <a href ="https://privacy.ufl.edu/privacy-policies-and-procedures/onlineinternet-privacy-statement"> UF Privacy Policy | <a href="mailto:www@advising.ufl.edu?subject=Website Question">Webmaster | <a href="https://www.advising.ufl.edu/manual">AAC Manual</a></a>
      </p>
</div><!-- .footer-main-col-1 -->

<style>
.footer-main-col-2 {
    padding-left: 0rem;
}
</style>

   <div class="footer-main-col-2">
	<div class="footer-main-sub-col">
	<div class="footer-main-FooterCol2 footer-menu">
<center><p>Academic Advising Center<br>
205 Fletcher Drive<br>
Gainesville, FL 32611<br>
tel: <a href="tel:3523921521">352-392-1521</a><br>
fax: 352-392-2905<br><br>
<!--<div class="mapouter"><div class="gmap_canvas"><iframe width="110" height="110" id="gmap_canvas" src="https://maps.google.com/maps?q=Farrior%20Hall&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:110px;width:110px;}.gmap_canvas {overflow:hidden;background:none!important;height:110px;width:110px;}</style></div>-->
</p></center>


<!--<div style="text-align: center;"><a class="btn-orange" href="https://www.advising.ufl.edu/advising/contact/email-a-question/">Email a Question</a></div>-->


	</div>
	</div>
	</div><!-- .footer-main-col-2 -->


   <div class="footer-main-col-3">
          <div class="uf-campaign">
          <a href="https://www.ufl.edu" target="_blank">
             <svg class="footer-icon-uf" aria-hidden="true"> <use xlink:href="#footer-icon-uf"></use> </svg>			 <span class="SVGaltText">University of Florida Homepage</span>
          </a>
         <!--<div class="hashtag">
            <span> #UF_AAC</span>
         </div>-->

          </div>

   </div><!-- .footer-main-col-3 -->


</div>
</div><!-- .footer-main -->


<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<!-- Inline SVG with <image> fallback for older browsers -->
<symbol id="uflogo" viewBox="0 0 125 125">
	<title>University of Florida Logo</title>
	<g fill="none" fill-rule="evenodd">
	<path fill="#F45A1D" d="M0 125h125V0H0z"/>
	<path fill="#FFF" d="M78.042 78.347V65.89h11.48v-8.213h-11.48V46.04h12.603v4.515h8.314v-12.66H65.672v8.145h3.118v32.307h-3.106v8.212h15.362v-8.212zM61.343 68.167v-22.13h3.076v-8.143H49.023v8.144h3.002v19.377c0 8.124-.94 12.025-6.772 12.025-5.833 0-6.772-3.901-6.772-12.025V46.038h2.98v-8.144H26.04v8.144h3.056v22.129c0 4.832 0 8.794 2.28 12.35 2.547 4.03 7.172 6.59 13.876 6.59 11.867 0 16.09-6.185 16.09-18.94"/>
	</g>
   <image src="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/logos/uflogo.png" xlink:href="">
</symbol>

<symbol id="uflogo-go-greater" viewBox="0 0 180 180">
	<title>University of Florida Go Greater Logo</title>
	<g fill="#99D0DF" fill-rule="evenodd">
		<path d="M97.336 159.096v-7.53l-7.674-4.894-7.672 4.894v7.53l-.687-.082a69.862 69.862 0 0 1-5.742-.937c-15.428-3.188-29.473-11.692-39.549-23.945a69.41 69.41 0 0 1-11.628-20.34c-2.792-7.651-4.208-15.7-4.208-23.923 0-18.603 7.228-36.093 20.353-49.248 13.123-13.154 30.573-20.4 49.133-20.4 18.562 0 36.012 7.246 49.135 20.4 13.125 13.155 20.353 30.645 20.353 49.248 0 8.244-1.423 16.312-4.23 23.982a69.398 69.398 0 0 1-11.684 20.375c-10.127 12.271-24.232 20.76-39.716 23.901a69.78 69.78 0 0 1-5.497.887l-.687.082zM89.662 21.453c-18.231 0-35.373 7.117-48.265 20.039-12.893 12.922-19.992 30.103-19.992 48.377a68.37 68.37 0 0 0 4.132 23.5 68.184 68.184 0 0 0 11.424 19.98c9.898 12.037 23.694 20.391 38.848 23.522 1.63.337 3.292.617 4.953.834v-6.815l8.9-5.676 8.902 5.676v6.815a67.951 67.951 0 0 0 4.712-.785c15.209-3.084 29.065-11.423 39.013-23.48a68.185 68.185 0 0 0 11.478-20.013 68.358 68.358 0 0 0 4.154-23.558c0-18.274-7.099-35.455-19.992-48.377-12.892-12.922-30.034-20.04-48.267-20.04zM28.53 45.044a2.152 2.152 0 1 1-4.304 0 2.152 2.152 0 0 1 4.304 0M18.719 63.81a2.073 2.073 0 1 1-4.147 0 2.073 2.073 0 0 1 4.147 0M14.35 84.514a1.994 1.994 0 1 1-3.987 0 1.994 1.994 0 0 1 3.987 0M15.682 105.61a1.915 1.915 0 1 1-3.83 0 1.915 1.915 0 0 1 3.83 0M22.648 125.541a1.833 1.833 0 1 1-3.67 0 1.835 1.835 0 0 1 3.67 0M34.73 142.906a1.754 1.754 0 1 1-3.51 0 1.754 1.754 0 0 1 3.51 0M50.996 156.21a1.676 1.676 0 1 1-3.35 0 1.676 1.676 0 0 1 3.35 0M70.257 164.658a1.594 1.594 0 1 1-3.19 0 1.594 1.594 0 0 1 3.19 0M150.794 45.044a2.153 2.153 0 1 0 4.305 0 2.153 2.153 0 0 0-4.305 0M160.606 63.81a2.073 2.073 0 1 0 4.145.001 2.073 2.073 0 0 0-4.145-.001M164.974 84.514a1.994 1.994 0 1 0 3.987 0 1.994 1.994 0 0 0-3.987 0M163.642 105.61a1.915 1.915 0 1 0 3.83 0 1.915 1.915 0 0 0-3.83 0M156.676 125.541a1.834 1.834 0 1 0 3.668 0 1.834 1.834 0 0 0-3.668 0M144.595 142.906a1.754 1.754 0 1 0 3.509 0 1.754 1.754 0 0 0-3.51 0M128.328 156.21a1.676 1.676 0 1 0 3.35 0 1.676 1.676 0 0 0-3.35 0M109.068 164.658a1.594 1.594 0 1 0 3.189 0 1.594 1.594 0 0 0-3.189 0"/><path d="M98.564 152.35l-9.515-6.07v-12.819l9.515 6.069v12.82zm-8.287-6.745l7.058 4.502v-9.9l-7.058-4.502v9.9z"/><path d="M80.762 152.35v-12.82l9.516-6.069v12.82l-9.516 6.07zm1.228-12.143v9.9l7.058-4.502v-9.9l-7.058 4.502z"/><path d="M81.376 142.372a.615.615 0 0 1-.615-.616v-6.23a.615.615 0 1 1 1.229 0v6.23c0 .34-.274.616-.614.616M89.663 136.142a.615.615 0 0 1-.615-.616v-5.285a.615.615 0 1 1 1.229 0v5.285c0 .34-.274.616-.614.616M97.95 142.372a.615.615 0 0 1-.615-.616v-6.23a.615.615 0 1 1 1.229 0v6.23c0 .34-.275.616-.614.616M95.187 149.99a.615.615 0 0 1-.614-.616v-6.176a.613.613 0 1 1 1.229 0v6.176c0 .34-.275.616-.615.616M92.425 148.174a.615.615 0 0 1-.615-.615v-6.177a.615.615 0 1 1 1.229 0v6.177c0 .34-.274.615-.614.615M86.9 148.174a.615.615 0 0 1-.614-.615v-6.177a.615.615 0 1 1 1.229 0v6.177c0 .34-.275.615-.615.615M84.138 149.99a.615.615 0 0 1-.614-.616v-6.176a.613.613 0 1 1 1.229 0v6.176c0 .34-.276.616-.615.616M89.663 172.85a.615.615 0 0 1-.615-.615v-26.292a.615.615 0 1 1 1.229 0v26.292c0 .34-.274.615-.614.615"/><path d="M89.663 179.74c-12.104 0-23.847-2.377-34.901-7.063-10.677-4.527-20.266-11.006-28.5-19.26-8.234-8.253-14.7-17.864-19.216-28.566C2.37 113.77 0 102.002 0 89.87c0-12.134 2.37-23.903 7.046-34.984 4.517-10.7 10.982-20.312 19.215-28.564 8.235-8.254 17.824-14.734 28.5-19.26C65.817 2.377 77.56 0 89.664 0c12.104 0 23.847 2.377 34.9 7.063 10.677 4.526 20.267 11.006 28.501 19.26 8.234 8.252 14.699 17.864 19.215 28.564 4.676 11.081 7.046 22.85 7.046 34.983 0 12.132-2.37 23.901-7.046 34.98-4.516 10.703-10.981 20.314-19.215 28.567-8.234 8.254-17.824 14.733-28.5 19.26-11.054 4.686-22.797 7.062-34.901 7.062m0-178.507c-11.94 0-23.521 2.343-34.423 6.965-10.53 4.465-19.988 10.855-28.11 18.997-8.122 8.139-14.499 17.62-18.952 28.174-4.61 10.927-6.95 22.535-6.95 34.502 0 11.966 2.34 23.574 6.95 34.501 4.453 10.555 10.83 20.036 18.952 28.176 8.122 8.14 17.58 14.53 28.11 18.996 10.902 4.622 22.483 6.965 34.423 6.965 11.939 0 23.52-2.343 34.422-6.965 10.531-4.465 19.988-10.856 28.11-18.996 8.122-8.14 14.499-17.621 18.952-28.176 4.611-10.927 6.95-22.535 6.95-34.5 0-11.968-2.339-23.576-6.95-34.503-4.453-10.554-10.83-20.035-18.951-28.174-8.123-8.142-17.58-14.532-28.11-18.997-10.903-4.622-22.484-6.965-34.423-6.965"/><path d="M97.95 176.97a.613.613 0 0 1-.615-.616v-17.951h1.229v17.271c20.957-2.159 40.33-11.944 54.62-27.604 14.535-15.928 22.54-36.598 22.54-58.2 0-11.645-2.275-22.942-6.763-33.576-4.333-10.272-10.539-19.497-18.444-27.42-7.904-7.922-17.107-14.141-27.355-18.485-10.61-4.499-21.88-6.78-33.499-6.78-11.618 0-22.89 2.281-33.499 6.78-10.248 4.344-19.452 10.563-27.356 18.486-7.903 7.922-14.109 17.147-18.444 27.419C5.876 66.928 3.6 78.224 3.6 89.869c0 21.603 8.005 42.273 22.54 58.2 14.29 15.66 33.665 25.446 54.62 27.605v-17.271h1.229v17.95a.621.621 0 0 1-.2.456.618.618 0 0 1-.472.158C59.8 174.92 39.884 164.953 25.235 148.9 10.492 132.745 2.372 111.78 2.372 89.869c0-11.81 2.309-23.269 6.86-34.055 4.397-10.418 10.69-19.775 18.708-27.81 8.017-8.035 17.351-14.344 27.745-18.75 10.762-4.562 22.194-6.876 33.978-6.876 11.783 0 23.215 2.314 33.977 6.877 10.394 4.405 19.73 10.714 27.747 18.749 8.016 8.035 14.31 17.392 18.706 27.81 4.552 10.786 6.86 22.245 6.86 34.055 0 21.911-8.12 42.876-22.862 59.032-14.648 16.052-34.565 26.02-56.084 28.066a.853.853 0 0 1-.057.002"/><path d="M38.864 67.813l4.28.004-.025 31.09c-.005 6.789-.009 12.351 3.182 17.352 3.566 5.66 10.046 9.265 19.442 9.272h.04c16.605 0 22.52-8.684 22.535-26.588l.025-31.09 4.311.004.009-11.44-21.58-.017-.009 11.44 4.208.002-.022 27.224c-.01 11.403-1.328 16.886-9.49 16.886h-.014c-8.176-.006-9.487-5.492-9.477-16.901l.023-27.224 4.174.003.01-11.439-21.613-.018-.009 11.44zm89.927 6.42l.005-6.343-17.665-.016-.014 16.348 16.088.012-.009 11.54-16.088-.015-.015 17.502 4.213.004-.008 11.537-21.535-.017.009-11.538 4.354.004.036-45.387-4.368-.003.01-11.442 46.652.037-.014 17.785-11.65-.009zM43.56 116.323H25.79l.807 1.119H44.21a19.97 19.97 0 0 1-.652-1.12"/><path d="M78.588 153.52c-3.811-2.4-8.22-5.572-12.612-9.613-.242-.224-.487-.455-.732-.686h11.198a76.906 76.906 0 0 0 2.146 3.863v-2.206a75.75 75.75 0 0 1-.902-1.657h.902v-1.117h-1.481c-2.057-4.045-4.072-8.868-5.803-14.531-.365.05-.741.089-1.118.128 1.695 5.578 3.666 10.36 5.686 14.403h-11.79c-4.757-4.673-9.733-10.754-13.733-18.342a21.123 21.123 0 0 1-2.04-1.548c4.004 8.235 9.178 14.827 14.19 19.89H44.645l.807 1.117h18.176a81.423 81.423 0 0 0 1.621 1.537c4.664 4.286 9.352 7.612 13.34 10.082v-1.32zM158.507 91.661v-1.119h-20.535l.002-.157c0-4.892-.453-9.465-1.245-13.747h-1.14a74.136 74.136 0 0 1 1.266 13.747l-.002.157H129.6l-.001 1.12h7.236c-.15 9.342-1.938 17.544-4.676 24.66h-14.455l-.001 1.12h14.01c-4.296 10.61-10.665 18.755-16.678 24.66H103.25c2.081-4.162 4.108-9.111 5.836-14.904l-1.163-.001c-1.756 5.824-3.815 10.772-5.916 14.906h-1.39v1.119h.81c-.27.51-.54 1.004-.81 1.489v2.233a75.934 75.934 0 0 0 2.064-3.722h11.193c-.244.23-.49.462-.731.685-4.36 4.01-8.735 7.164-12.526 9.558v1.32c3.97-2.464 8.622-5.772 13.252-10.026a85.235 85.235 0 0 0 1.621-1.537h17.959l1.615-1.12h-18.445c5.948-6.006 12.128-14.155 16.302-24.66h19.578l.808-1.12h-19.948c2.695-7.139 4.448-15.34 4.596-24.66h20.553zM40.726 90.543H20.818v1.119h19.907zM153.337 64.762H142.85l-.001 1.12h11.296zM36.466 64.762H25.791l-.808 1.12h11.483zM65.973 37.225c8.202-7.422 16.475-11.841 20.768-13.85-2.59 2.628-6.823 7.643-10.864 15.607H64.096a81.078 81.078 0 0 1 1.877-1.757zM89.004 22.75v16.232h-11.88c4.84-9.367 9.881-14.443 11.88-16.232zm1.119-.001c1.999 1.785 7.046 6.858 11.886 16.233H90.123V22.749zm22.99 14.448c.632.569 1.268 1.165 1.91 1.785h-11.778C99.207 31.022 94.98 26.01 92.39 23.38c4.29 2.007 12.536 6.415 20.724 13.817zM50.817 53.982l1.3.001c3.315-5.522 7.12-10.129 10.846-13.882H75.32c-1.92 3.933-3.776 8.547-5.368 13.897l1.134.002h.027c1.62-5.379 3.505-9.99 5.445-13.9h12.446v13.914h1.119V40.102h12.453c1.942 3.914 3.828 8.535 5.448 13.929l1.154.001c-1.594-5.365-3.453-9.99-5.375-13.93h12.353c3.741 3.767 7.559 8.397 10.88 13.944l1.301.001c-3.226-5.504-6.94-10.135-10.619-13.945h19.336l-.808-1.12h-19.629a78.844 78.844 0 0 0-2.753-2.614c-10.75-9.717-21.64-14.358-23.741-15.2v-.335h-1.119v.331c-2.08.833-12.988 5.473-23.75 15.204a79.981 79.981 0 0 0-2.753 2.615H42.85l-.808 1.119H61.4c-3.664 3.796-7.365 8.404-10.584 13.881zM44.436 32.11c-.677 1.866-1.429 2.925-2.495 3.871-2.054 1.827-4.462 1.788-6.394-.386-1.962-2.208-1.846-4.529.317-6.451.848-.754 2.166-1.614 3.565-2.097l.952 2.188c-1.066.616-1.748 1.01-2.53 1.705-.838.744-.84 1.64.01 2.597.812.913 1.741 1.06 2.469.413.37-.329.69-.67 1.124-1.232l-.368-.413-1.282 1.14-1.362-1.533 3.25-2.889 2.744 3.088zM51.64 23.404c-.66-1.096-1.479-1.298-2.312-.795-.834.504-1.037 1.32-.376 2.417.632 1.045 1.442 1.235 2.275.733.834-.504 1.044-1.31.413-2.355m2.651-1.6c1.502 2.49.825 4.8-1.652 6.293-2.476 1.496-4.835 1.017-6.338-1.471-1.525-2.528-.862-4.863 1.615-6.357 2.477-1.494 4.85-.992 6.375 1.535M74.405 18.024c-1.429 1.38-2.57 2-3.945 2.382-2.65.736-4.797-.359-5.578-3.163-.791-2.846.335-4.882 3.125-5.657 1.093-.304 2.657-.497 4.126-.316l-.106 2.385c-1.231.086-2.017.139-3.026.42-1.08.299-1.475 1.105-1.132 2.338.328 1.177 1.098 1.718 2.037 1.458.477-.134.914-.3 1.552-.613l-.149-.533-1.654.46-.55-1.977 4.192-1.166 1.108 3.982zM82.7 13.514c.624-.058.937-.453.876-1.105-.054-.579-.461-.862-1.128-.8l-.912.086.18 1.912.985-.093zm-.515-4.393c2.607-.245 4.184.834 4.389 3.006.12 1.289-.22 2.183-1.074 2.878l1.856 2.323.02.217-3.215.303-1.4-1.987-.826.078.198 2.1-3.041.286-.832-8.834 3.925-.37zM91.467 17.57l.61-8.858 6.911.476-.172 2.511-3.906-.268-.057.813 3.297.227-.151 2.193-3.297-.227-.056.827 4.022.277-.173 2.512zM109.01 14.605a8.884 8.884 0 0 1-.014-1.084c-.13.282-.297.585-.522.95l-.921 1.523 1.552.39-.095-1.78zm-3.474 4.711l-3.106-.778 5.12-7.87 4.066 1.019.81 9.353-3.106-.777-.072-1.278-3.049-.763-.663 1.094zM122.413 18.585l-2.422 5.593-2.803-1.213 2.422-5.594-2.31-1 1.104-2.55 7.423 3.215-1.105 2.549zM125.928 27.174l4.792-7.463 5.824 3.74-1.359 2.116-3.292-2.114-.439.686 2.777 1.783-1.186 1.848-2.777-1.783-.448.696 3.389 2.177-1.358 2.117zM141.261 32.956c.466.419.968.381 1.406-.105.39-.433.324-.924-.175-1.372l-.68-.613-1.286 1.428.735.662zm2.885-3.356c1.946 1.753 2.22 3.644.76 5.267-.867.963-1.755 1.318-2.845 1.158l-.455 2.94-.146.162-2.4-2.16.515-2.377-.617-.555-1.413 1.568-2.27-2.045 5.94-6.596 2.931 2.638z"/>
	</g>
</symbol>

<symbol id="college-logo" viewBox="0 0 2726 200">
<svg version="1.1" id="Layer_1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;"
		 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 626.5 86.8"
		 style="enable-background:new 0 0 626.5 86.8;" xml:space="preserve">
	<style type="text/css">
		.st0{fill:none;stroke:#F45A1D;stroke-width:2.5;stroke-miterlimit:10;}
		.st1{fill:#FFFFFF;}
		.st2{fill:#F45A1D;}
	</style>
	<switch>
		<foreignObject requiredExtensions="&ns_ai;" x="0" y="0" width="1" height="1">
			<i:aipgfRef  xlink:href="#adobe_illustrator_pgf">
			</i:aipgfRef>
		</foreignObject>
		<g i:extraneous="self">
			<line class="st0" x1="-0.2" y1="71.2" x2="144.8" y2="71.2"/>
			<line class="st0" x1="481.5" y1="71.2" x2="626.5" y2="71.2"/>
			<path class="st1" d="M9.4,7.3h9c0.2,0,0.2,1.1,0,1.1c-5,0-5.5,0.1-5.7,0.3s-0.3,1.9-0.4,10.5c0,5.1-0.1,7.7-0.1,17.2
				c0,5.7,0.1,6.9,0.2,7.1s1.3,0.4,5.5,0.4c5.4,0,7.1-0.4,8.3-1.6c1.2-1.2,2.4-3.9,4.3-11.9c0.1-0.3,1-0.2,1,0
				c-0.1,4.2-0.3,10.8-0.5,14.4c0,0.3-0.1,0.5-0.7,0.5c-4.8-0.2-9.3-0.1-15.8-0.1c-6.9,0-10.9,0-14.8,0.1C-0.3,45.2-0.2,44,0,44
				C4.7,44,5.4,44,5.6,43.8s0.3-1.1,0.3-5C5.9,31.3,6,23.5,6,16.5C6,10.8,6,8.9,5.7,8.7S4.7,8.4,0.4,8.3c-0.2,0-0.1-1.1,0.1-1.1
				C3.1,7.3,7.1,7.3,9.4,7.3z"/>
			<path class="st1" d="M34.3,45.2c-0.2,0-0.3-1.1,0-1.1c3.5-0.1,4.4-0.1,4.7-0.3s0.3-0.9,0.4-2.6c0.1-2.1,0.1-3.5,0.1-5.5
				c0-2.4-0.1-8.5-0.3-11.5c0-1.1-0.1-1.7-0.4-2s-0.8-0.3-4.7-0.3c-0.2,0-0.2-1,0-1c3.2-0.1,8.8-0.2,10.1-0.2c0.4,0,0.6,0.1,0.6,0.6
				c-0.1,3.5,0,10.7,0,15.1c0,5.9,0.3,7.3,0.5,7.5s1,0.3,4.4,0.3c0.3,0,0.3,1.1,0,1.1L34.3,45.2z M41.9,13.5
				c-1.9-0.1-3.4-1.6-3.4-3.6c0-0.9,0.3-1.8,1-2.5c0.8-0.8,1.8-1.2,2.9-1.2c1.8,0,3.3,1.5,3.4,3.3C45.6,11.6,44,13.3,41.9,13.5z"/>
			<path class="st1" d="M58,42.5c-0.3,0-1.2,0.8-3.8,3.4c-0.2,0.3-0.9,0.1-0.9-0.3c0.1-3.2,0.3-9.6,0.3-17.6c0-4.7-0.1-10.8-0.3-17.1
				c-0.1-3-0.1-3.9-0.3-4.1s-0.6-0.2-4.1-0.2c-0.3,0-0.3-1.1,0-1.1c3.3-0.1,8.1-0.3,9.8-0.3c0.4,0,0.5,0.3,0.5,0.6
				c0,1.4-0.2,18.4-0.2,20.1l0.1,0.1c1.7-3.5,4.5-6.5,8.3-6.5c2.8,0.1,5.5,1.3,7.5,3.4c2.2,2.3,3.5,5.4,3.4,8.7
				c-0.1,3.9-1.7,7.6-4.5,10.2c-2.1,2.3-5,3.6-8.1,3.7C61.3,45.8,58.5,42.5,58,42.5z M60,26.7c-0.8,1.8-1.1,3.7-1,5.6
				c0,6.7,0.2,8.4,0.6,9.2c0.6,1.2,3.4,2.9,5.7,2.9s3.8-1,5-3.4c0.9-1.9,1.5-4.6,1.5-8.6c0-4.2-0.6-7-1.4-8.7
				c-0.6-1.6-2.2-2.6-3.9-2.5C63.7,21.4,61.3,24.2,60,26.7z"/>
			<path class="st1" d="M106.2,38.2c-1.5,4.6-5.8,7.7-10.7,7.8c-3.9,0-7.6-1.5-10.4-4.2c-2.4-2.4-3.7-5.6-3.6-9
				c0.3-7.1,6-12.8,13.1-13.1c3.3,0,6.4,1.3,8.7,3.6c2.1,2.3,3.3,5.4,3.3,8.6c0,0.2-0.1,0.5-0.4,0.5c0,0,0,0,0,0
				c-10.1-0.1-15.1,0.1-18.3,0.2c0,4,0.6,6.5,1.4,8.2c1.2,2.4,3.2,3.7,6.8,3.7c4,0,7.1-2.2,8.9-6.7C105.3,37.5,106.3,37.9,106.2,38.2
				z M89.5,23.7c-1,2.4-1.5,5-1.5,7.5l12.6-0.1c-0.4-7.2-2.2-10.2-6.4-10.2C92.2,20.8,90.4,21.9,89.5,23.7z"/>
			<path class="st1" d="M112.2,43.8c0.3-1.3,0.4-2.6,0.4-3.9c0-2.2,0-8.2-0.1-10.9c0-4.7-0.3-6.5-0.6-6.8s-0.8-0.3-4.2-0.3
				c-0.3,0-0.3-1.1,0.1-1.1c2.5,0,7.9-0.2,9.3-0.2c0.9,0,1,0.1,1,0.9c-0.1,1.6-0.1,4.7-0.1,7h0.1c2-4.7,4.2-8.5,7.8-8.5
				c3.2,0,5.3,2,5.3,4.4c0.1,2.1-1.5,3.9-3.6,4c0,0,0,0-0.1,0c-1.6,0.2-3-1-3.1-2.5c0-0.1,0-0.2,0-0.3c0-2.1,1.7-2.9,1.7-3.4
				c0-0.3-0.3-0.5-1.1-0.5c-1.9,0-3.9,2.5-5.4,5.6c-1.1,1.9-1.6,4-1.6,6.1v5.7c0.1,2.9,0.2,4.4,0.4,4.6s1.1,0.2,4.8,0.3
				c0.3,0,0.3,1.2,0.1,1.2h-15.9c-0.2,0-0.2-1.1,0-1.1C111.5,44,112,44,112.2,43.8z"/>
			<path class="st1" d="M139.2,23c0,0.7,2.4,0.9,2.4,3.3c0,1.7-1.4,3-3.1,3c0,0-0.1,0-0.1,0c-1.7,0.1-3.2-1.3-3.2-3
				c0-0.1,0-0.1,0-0.2c0-1.2,0.6-2.4,1.5-3.2c2.1-2,4.9-3.1,7.9-3c3.8,0,6.2,1.1,7.9,2.8c1.6,1.7,2.2,3.5,2.2,6.5
				c0,3.1-0.2,8.5-0.2,12.8c0,1.5,0.4,2.1,1.5,2.1c1.4,0,2.6-1.4,3.2-4.5c0.1-0.2,0.9-0.1,0.9,0.2c-0.6,3.5-2.5,6.1-5.8,6.1
				c-3.1,0-5.1-1.7-5.7-4.2c-2.1,2.4-4.7,4-7.8,4.1c-3.7,0.1-7.5-2.5-7.5-6.2c0-1.6,0.7-3.2,1.9-4.2c2-2.1,5.7-3.7,13.7-4.2
				c0.1-0.8,0-2.6,0-4.4c0-2.4-0.3-3.5-1.1-4.4c-1.1-0.9-2.4-1.3-3.8-1.2C141,21.1,139.2,22.5,139.2,23z M139,39.2c0,3,1,4.7,3.2,4.7
				c2.5,0,5.4-2.4,6-3.7c0.3-0.4,0.3-0.8,0.4-2.7s0.1-2.5,0.1-5.4C140.6,32.8,139,34.1,139,39.2L139,39.2z"/>
			<path class="st1" d="M170.9,5.6c0.5,0,0.6,0.3,0.6,0.8c-0.1,6.5-0.1,11.8-0.1,18.6c0,6.2-0.1,11.4-0.1,16.4c0,1.5,0.2,2.2,0.5,2.5
				s0.5,0.3,4.2,0.4c0.2,0,0.3,1.1,0,1.1c-5.5-0.2-9-0.2-14.8-0.2c-0.2,0-0.1-1.1,0.1-1.1c3.4,0,3.9-0.1,4-0.3s0.2-0.5,0.2-1.5
				c0.1-3,0.2-8.8,0.2-12.7c0-8.5,0-14.1-0.1-20.9c0-1.1,0-1.4-0.2-1.6s-0.6-0.2-4.2-0.4c-0.3-0.1-0.3-1.1,0.1-1.1
				C164.9,5.7,167.2,5.7,170.9,5.6z"/>
			<path class="st1" d="M194.9,43c1-1.2,1.9-2.5,2.5-4c5.1-11.2,10.3-22.8,14.1-32.7c0.1-0.1,0.4-0.3,1.2-0.3c1,0,1.2,0.1,1.3,0.4
				c1.7,5.1,4.3,12.8,11.4,32.3c1.1,3,1.6,4,2.3,4.7c0.6,0.6,1.1,0.6,4.7,0.8c0.2,0,0.2,1.1,0,1.1c-3.5-0.1-6-0.2-8.5-0.2
				c-2.9,0-4.5-0.1-8.2,0.1c-0.1,0-0.2-1.1,0-1.1c3-0.2,3.7-0.3,4-0.7s0.4-0.8,0-2.1c-0.6-1.7-1.7-5-2.8-8c-1.1-0.1-4.4-0.1-9.3-0.1
				c-2.4,0-3.9,0-5.7,0.1c-0.3,0-0.5,0-0.6,0.3c-1,2.2-1.6,3.6-2.5,6c-0.3,0.9-0.6,1.8-0.6,2.7c0,1.4,0.6,1.5,4.7,1.8
				c0.1,0,0.1,1.1-0.1,1.1c-3.4-0.1-8.8-0.1-12.7,0c-0.1,0-0.1-1,0-1C193.4,44,194,43.8,194.9,43z M210,13.9
				c-2.8,6.6-5.6,12.9-7.8,17.9c3.8,0.2,10.6,0.3,14.3,0.3c-1.7-5.3-4.6-13.2-6.4-18.3L210,13.9z"/>
			<path class="st1" d="M239,43.8c0.3-1.3,0.4-2.6,0.4-3.9c0-2.2,0-8.2-0.1-10.9c0-4.7-0.3-6.5-0.6-6.8s-0.7-0.3-4.2-0.3
				c-0.3,0-0.3-1.1,0.1-1.1c2.5,0,7.9-0.2,9.3-0.2c0.9,0,1,0.1,1,0.9c-0.1,1.6-0.1,4.7-0.1,7h0.1c2-4.7,4.2-8.5,7.9-8.5
				c3.2,0,5.3,2,5.3,4.4c0.2,2.1-1.4,3.9-3.5,4.1c0,0-0.1,0-0.1,0c-1.6,0.1-3-1-3.1-2.6c0-0.1,0-0.2,0-0.3c0-2.1,1.7-2.9,1.7-3.4
				c0-0.3-0.3-0.5-1.1-0.5c-1.9,0-3.9,2.5-5.4,5.6c-1,1.9-1.6,4-1.6,6.1v5.7c0.1,2.9,0.2,4.4,0.4,4.6s1.1,0.2,4.8,0.3
				c0.3,0,0.3,1.2,0.1,1.2h-16c-0.2,0-0.3-1.1,0-1.1C238.4,44,238.9,44,239,43.8z"/>
			<path class="st1" d="M271.9,45.7c-2.2,0.1-4.3-0.7-5.9-2.2c-1.1-1.1-1.7-2.5-1.7-5.2c0-4,0.1-11.1,0.2-16.1
				c-0.4-0.1-3.7-0.1-4.4-0.1c-0.3,0-0.3-1.2-0.1-1.2c3.7-0.2,4.9-0.5,5.7-1.4c1.3-1.2,2.9-4.7,3.5-7.7c0.1-0.3,1-0.3,1.1,0
				c-0.2,2.1-0.2,6.9-0.3,8.9c2.5,0.1,6.6,0.1,7.6,0.1c0.4,0,0.3,1.3-0.1,1.3c-4.9,0-6.9,0.1-7.5,0.1c-0.1,2.3-0.3,9.2-0.3,14.3
				c0,4.3,0.1,5,0.5,5.8c0.6,1,1.7,1.6,2.9,1.6c2,0,3.7-2,4.8-6.2c0.1-0.3,1.1-0.1,1.1,0.2C278.1,43,275.5,45.7,271.9,45.7z"/>
			<path class="st1" d="M300.9,42.8c-2.1,1.9-4.9,2.9-7.7,2.8c-5,0-7.4-1.8-8-1.8c-0.3,0-0.7,0.7-1.3,2.1c-0.1,0.3-1,0.2-1-0.1
				c-0.1-2.9-0.4-6.4-0.6-9.2c0-0.3,1-0.4,1.1-0.1c0.5,2,1.5,3.9,2.9,5.5c1.5,1.5,4.1,2.2,6.9,2.2c2.3,0,3.9-0.5,4.8-1.4
				c0.7-0.9,1.1-1.9,1-3c0-2.1-1.6-3.2-7-4.6c-4.2-1.1-6.1-1.9-7.4-3.2c-1-1.1-1.6-2.5-1.6-4c0-4.7,4.2-8.1,9.2-8.1
				c3.8,0,6.5,2,7.1,2c0.3,0,0.5-0.5,1.4-2.6c0.1-0.2,0.9-0.1,1,0.1c-0.2,2.8-0.2,5.5-0.1,8.4c0,0.4-0.9,0.4-1.1,0.1
				c-0.5-1.6-1.4-3.1-2.5-4.4c-1.5-1.6-3.7-2.4-5.9-2.3c-1.5-0.1-2.9,0.4-4,1.4c-0.7,0.7-1.1,1.6-1.1,2.6c0,2.4,1.8,3.3,7.2,4.7
				c4.3,1.1,6.2,2,7.5,3.3c1.1,1.1,1.7,2.6,1.7,4.2C303.2,39.5,302.3,41.4,300.9,42.8z"/>
			<path class="st2" d="M339.2,27c0.4-0.9,0.8-1.7,1.5-2.5c0.9,0.1,1.7,0.2,2.6,0.5c0.1,0.3,0.2,0.7,0.2,1c-0.6,1.4-3.6,8.7-5.4,13.1
				c-0.4,1.1-0.7,2.3-0.8,3.5c-0.1,0.7,0.4,1.4,1.2,1.5c0,0,0.1,0,0.1,0c1.2,0,2.8-0.7,5.8-4.6c0.1-0.1,0.8,0.4,0.7,0.5
				c-2.9,3.9-4.9,5.6-7.4,5.6c-1.9,0.1-3.6-1.4-3.7-3.3c0-0.9,0.1-1.8,0.4-2.7c-2.4,3.2-5.8,6-8.4,6s-5.6-2.7-5.6-6.6
				c0-2.7,1-5.5,4.2-8.7c3.4-3.4,7.5-5.6,10.6-5.6C337,24.5,338.5,25.5,339.2,27z M325.4,35.3c-1.1,1.9-1.7,4.1-1.9,6.3
				c-0.1,1.5,1,2.9,2.5,3c0.1,0,0.3,0,0.4,0c2.7,0,6.9-3.8,8.9-7.9s3.2-7.5,3.2-8.4c-0.2-1.6-1.6-2.9-3.2-2.9
				C331.2,25.5,328,30,325.4,35.3L325.4,35.3z"/>
			<path class="st2" d="M357,25.2c0.1,0,0.2,0.1,0.2,0.2c0,0,0,0.1,0,0.1c-0.4,1.1-2.2,6.1-2.7,7.4c0,0.1,0.1,0.3,0.2,0.2
				c4.5-5.9,6.9-8.6,9.7-8.6c1.3,0,2.6,0.5,3.5,1.4c0.8,0.8,1.3,1.9,1.3,3c0,1.8-0.6,3-2.5,7s-2.5,5.5-2.5,6.5c0,0.8,0.6,1.6,1.4,1.6
				c0,0,0,0,0.1,0c1.6,0,3.4-1.5,5.8-4.2c0.1-0.1,0.8,0.5,0.7,0.6c-1.7,2.1-5,5.1-7.5,5.1c-1,0-2-0.4-2.7-1.1
				c-0.7-0.7-1.1-1.8-1.1-2.8c0-1,0.5-2.8,2.4-6.8s2.5-5.3,2.5-6.6c0.1-1.1-0.8-2.1-1.9-2.1c0,0-0.1,0-0.1,0c-1.3,0-2.2,0.5-4.2,2.5
				c-3,3-5.6,6.5-7.5,10.3c-0.8,2-1.8,4.3-2.5,6.1c-1.2,0.1-2.4,0.1-3.6,0c-0.1,0-0.1-0.1,0-0.3c0.7-1.5,4.3-9.7,5.1-11.6
				c1.9-4.8,2.3-6.7,2.2-6.9s-4.8,0-5.5-0.1c-0.2,0-0.1-0.9,0.1-0.9C350.7,25.4,356.7,25.2,357,25.2z"/>
			<path class="st2" d="M393.5,27.9c0,0,0.1,0.1,0.1,0c2.1-5.1,3.4-8.4,5.4-13.3c0.3-0.7,0.1-1,0-1.1c-1.9-0.2-3.8-0.3-5.8-0.3
				c-0.2,0-0.2-0.9,0-0.9c2.9,0,6.8,0.1,10.2,0.1c0.2,0,0.3,0.1,0.3,0.3c-4.4,10.4-6.7,15.9-11.4,26.7c-0.5,1-0.8,2.1-0.8,3.3
				c-0.1,0.8,0.4,1.4,1.2,1.5c0,0,0.1,0,0.1,0c1.3,0,2.4-0.7,4.2-2.4c0.7-0.7,1.3-1.4,1.9-2.1c0.1-0.1,0.8,0.4,0.7,0.5
				c-2.8,3.5-5.2,5.5-7.3,5.5s-4-1.6-4-3.4c0-0.5,0-1,0.1-1.5c-2.6,3.3-5.2,5.1-8.1,5.1c-1.8-0.1-3.5-0.8-4.7-2.1
				c-1.3-1.3-1.9-3-1.9-4.8c0.2-3.6,1.8-7,4.4-9.4c2.5-2.5,6.4-5.1,10.7-5.1C390.9,24.5,392.8,25.9,393.5,27.9z M379.2,33.9
				c-1.2,2.1-1.8,4.5-1.9,6.9c0,2.5,0.9,4,3.3,4c1.7,0,3.4-0.7,5.7-3c1.9-1.9,3.4-4.1,4.3-6.6c1.2-2.9,2.2-5.3,2.3-5.8
				c-0.4-2.3-1.9-4-4.4-4C384.7,25.4,381.4,29.5,379.2,33.9L379.2,33.9z"/>
			<path class="st1" d="M443.1,6.8c0.1-0.2,0.9-0.1,0.9,0.1c-0.4,4.1-0.4,8.2-0.1,12.3c0,0.2-0.9,0.3-1,0.1c-1.7-4.4-3.1-6.9-4.7-8.4
				c-1.9-1.9-4.5-2.8-7.1-2.7c-3.4,0-5.4,0.9-6.8,2.4c-1.3,1.3-2,3.1-2,5c0,4.1,2.7,5.4,9.8,7.3c6.5,1.7,9.6,3.3,11.5,5.2
				c1.7,1.7,2.6,4.1,2.4,6.5c0,6.6-5.8,11.5-13.2,11.5c-6.7,0-10.1-3.3-11.4-3.3c-0.8,0-1.8,1.1-2.7,2.8c-0.1,0.3-0.9,0.1-0.9-0.1
				c0.2-4.5,0.1-9.1-0.4-13.6c0-0.3,0.8-0.4,0.9-0.1c2.4,5.5,3.9,8.1,5.7,9.8c2.4,2.2,5.5,3.3,8.7,3.2c3.1,0,5.4-0.8,6.8-2.2
				c1.3-1.3,2-3.1,1.9-5c0-4-2.5-5.9-9.8-7.8c-6.5-1.7-9.5-3-11.3-4.9c-1.7-1.7-2.5-4-2.4-6.4c0-6,5.5-11.4,13.3-11.4
				c6.5,0,9.3,2.7,9.8,2.7S442.5,8.3,443.1,6.8z"/>
			<path class="st1" d="M453.9,42c-2.4-2.3-3.7-5.4-3.6-8.7c0-3.4,1.4-6.7,3.9-9.1c2.5-2.7,6.1-4.3,9.8-4.3c5.6,0,10,3.4,10,6.8
				c0.1,1.9-1.3,3.6-3.2,3.8c-0.1,0-0.2,0-0.2,0c-1.7,0.1-3.1-1.3-3.2-3c0-0.8,0.2-1.5,0.8-2.1c1-1,2.4-0.9,2.6-1.1
				c0.5-0.5-2-3-6.4-3c-2.5-0.2-4.9,1.2-6,3.5c-1.1,2.1-1.4,4.5-1.4,7.9c0,4.2,0.3,6.6,1.3,8.3c1,2,2.6,3.5,6,3.5
				c3.6,0,7.1-2.5,8.7-7.4c0.1-0.5,1.3,0.1,1.2,0.5c-1.7,5.2-5.6,8.4-10.8,8.4C459.8,46,456.4,44.5,453.9,42z"/>
			<path class="st1" d="M475.8,45.2c-0.2,0-0.3-1.1,0-1.1c3.5-0.1,4.4-0.1,4.7-0.3s0.3-0.9,0.4-2.6c0.1-2.1,0.1-3.5,0.1-5.5
				c0-2.4-0.1-8.5-0.3-11.5c0-1.1-0.1-1.7-0.4-2s-0.7-0.3-4.7-0.3c-0.2,0-0.2-1,0-1c3.2-0.1,8.8-0.2,10.1-0.2c0.4,0,0.6,0.1,0.6,0.6
				c-0.1,3.5,0,10.7,0,15.1c0,5.9,0.3,7.3,0.5,7.5s1,0.3,4.4,0.3c0.3,0,0.3,1.1,0,1.1L475.8,45.2z M483.4,13.5
				c-1.9-0.1-3.4-1.6-3.4-3.6c0-0.9,0.3-1.8,1-2.5c0.8-0.8,1.8-1.2,2.9-1.2c1.8,0,3.3,1.5,3.4,3.3C487.1,11.6,485.5,13.3,483.4,13.5z
				"/>
			<path class="st1" d="M516.4,38.2c-1.5,4.6-5.8,7.7-10.7,7.8c-3.9,0-7.6-1.5-10.4-4.2c-2.4-2.4-3.7-5.6-3.6-9
				c0.1-3.3,1.4-6.4,3.7-8.8c2.4-2.7,5.9-4.2,9.5-4.3c3.3,0,6.4,1.3,8.7,3.6c2.1,2.3,3.3,5.4,3.3,8.6c0,0.2-0.1,0.5-0.4,0.5
				c-10.1-0.1-15.1,0.1-18.3,0.2c0,4,0.6,6.5,1.4,8.2c1.3,2.4,3.2,3.7,6.8,3.7c4,0,7.1-2.2,8.9-6.7C515.5,37.5,516.5,37.9,516.4,38.2
				z M499.7,23.7c-1,2.4-1.5,4.9-1.5,7.5l12.7-0.1c-0.4-7.2-2.3-10.2-6.4-10.2C502.4,20.8,500.6,21.9,499.7,23.7z"/>
			<path class="st1" d="M518.2,44.2c3.2-0.1,3.9-0.1,4.1-0.3s0.4-1.2,0.4-4.9V26.6c0-2.7-0.2-4.2-0.5-4.4s-0.8-0.3-4-0.4
				c-0.2,0-0.2-1,0.1-1c2.8,0,7.3-0.1,9.9-0.1c0.4,0,0.4,0.2,0.4,0.6c-0.1,1.5-0.2,4.6-0.3,6.2l0.2,0.1c2.2-4.3,4.9-7.9,9.3-7.9
				c4.9,0,7.7,3.1,7.7,9c0,2.4-0.1,5.4-0.1,8.4c0,5.3,0.2,6.4,0.5,6.7s0.7,0.3,3.7,0.4c0.2,0,0.2,1-0.1,1c-5-0.1-9.1-0.1-13-0.1
				c-0.3,0-0.3-1-0.1-1c1.9-0.1,2.6-0.2,2.9-0.4s0.3-1.1,0.3-2.5c0-2-0.1-12.5-0.1-13.8c0-3.3-1-5.2-3.5-5.2c-3.1,0-5.6,3.3-6.9,6
				c-0.7,1.3-1,2.8-0.9,4.3c0,1.9,0.1,5.8,0.1,8.1s0.1,2.9,0.3,3.1s0.6,0.3,3.7,0.4c0.2,0,0.2,1-0.1,1c-4-0.1-10.2-0.1-14,0
				C517.9,45.2,518,44.2,518.2,44.2z"/>
			<path class="st1" d="M553.7,42c-2.4-2.3-3.7-5.4-3.6-8.7c0-3.4,1.4-6.7,3.9-9.1c2.5-2.7,6.1-4.3,9.8-4.3c5.6,0,10,3.4,10,6.8
				c0.1,1.9-1.3,3.6-3.2,3.8c-0.1,0-0.2,0-0.2,0c-1.7,0.1-3.1-1.2-3.2-2.9c0-0.8,0.2-1.6,0.7-2.2c1-1,2.4-0.9,2.6-1.1
				c0.5-0.5-2-3-6.3-3c-2.5-0.2-4.9,1.2-6,3.5c-1.1,2.1-1.4,4.5-1.4,7.9c0,4.2,0.3,6.6,1.3,8.3c1,2,2.6,3.5,6,3.5
				c3.6,0,7.1-2.5,8.7-7.4c0.1-0.5,1.3,0.1,1.2,0.5c-1.7,5.2-5.6,8.4-10.8,8.4C559.6,46,556.2,44.5,553.7,42z"/>
			<path class="st1" d="M601.5,38.2c-1.5,4.6-5.8,7.7-10.7,7.8c-3.9,0-7.6-1.5-10.4-4.2c-2.4-2.4-3.7-5.6-3.6-9
				c0.1-3.3,1.4-6.4,3.7-8.8c2.4-2.7,5.9-4.2,9.5-4.3c3.3,0,6.4,1.3,8.7,3.6c2.1,2.3,3.3,5.4,3.3,8.6c0,0.2-0.1,0.5-0.4,0.5
				c-10.1-0.1-15.1,0.1-18.3,0.2c0,4,0.6,6.5,1.4,8.2c1.3,2.4,3.2,3.7,6.8,3.7c4,0,7.1-2.2,8.9-6.7C600.6,37.5,601.6,37.9,601.5,38.2
				z M584.8,23.7c-1,2.4-1.5,4.9-1.5,7.5l12.7-0.1c-0.4-7.2-2.2-10.2-6.4-10.2C587.5,20.8,585.7,21.9,584.8,23.7z"/>
			<path class="st1" d="M624.3,42.8c-2.1,1.9-4.9,2.9-7.7,2.8c-5,0-7.3-1.8-8-1.8c-0.3,0-0.8,0.7-1.3,2.1c-0.1,0.3-1,0.2-1-0.1
				c-0.1-2.9-0.4-6.4-0.6-9.2c0-0.3,1-0.4,1.1-0.1c0.5,2,1.5,3.9,2.8,5.5c1.5,1.5,4.1,2.2,6.8,2.2c2.3,0,3.9-0.5,4.8-1.4
				c0.7-0.8,1.1-1.9,1.1-3c0-2.1-1.6-3.2-7-4.6c-4.2-1.1-6.1-1.9-7.3-3.2c-1-1.1-1.6-2.5-1.6-4c0-4.7,4.2-8.1,9.2-8.1
				c3.8,0,6.5,2,7.1,2c0.3,0,0.5-0.5,1.4-2.6c0.1-0.2,0.9-0.1,1,0.1c-0.2,2.8-0.2,5.5-0.1,8.4c0,0.4-0.9,0.4-1.1,0.1
				c-0.5-1.6-1.4-3.1-2.5-4.4c-1.5-1.6-3.7-2.4-5.9-2.3c-1.5-0.1-2.9,0.5-4,1.4c-0.7,0.7-1.1,1.6-1.1,2.6c0,2.4,1.8,3.3,7.2,4.7
				c4.3,1.1,6.2,2,7.5,3.3c1.1,1.1,1.6,2.6,1.6,4.2C626.5,39.5,625.7,41.4,624.3,42.8z"/>
			<path class="st1" d="M178.5,79c-2.4,1.6-5.3,2.4-8.2,2.3c-5.9,0-9.4-3.6-9.4-10.1s3.5-10.2,9.7-10.2c2.5,0,4.9,0.6,7.1,1.7
				l-1.2,2.8c-1.8-0.7-3.8-1.1-5.8-1.1c-4,0-6.1,2.3-6.1,6.8c0,4.2,2.2,6.7,5.8,6.7c2.3,0,4.6-0.6,6.7-1.7L178.5,79z"/>
			<path class="st1" d="M184.6,81.1V61.4h3.7v16.2h9.3v3.5H184.6z"/>
			<path class="st1" d="M206.8,81.1h-4l7.9-19.6h5l7.9,19.6h-4L218,77h-9.6L206.8,81.1z M213.9,66.4c-0.3-0.7-0.5-1.4-0.7-2.2
				c-0.2,0.6-0.4,1.3-0.7,2.2l-2.8,7.1h7L213.9,66.4z"/>
			<path class="st1" d="M242.2,65.6c-2-0.9-4.1-1.3-6.3-1.3c-1.8,0-2.8,0.9-2.8,2c0,1.9,1.3,2.2,5.1,3.4c3.6,1.2,5.6,2.4,5.6,5.9
				c0,3.8-2.8,5.8-6.6,5.8c-3.1-0.1-6.1-1-8.9-2.5l1.4-2.9c2.2,1.2,4.7,2,7.2,2.2c1.8,0,2.9-0.7,2.9-2.1c0-1.7-0.9-2.3-4.9-3.4
				c-3.4-1-5.7-2.3-5.7-5.9c0-3.2,2.4-5.5,6.5-5.5c2.6,0,5.2,0.6,7.6,1.6L242.2,65.6z"/>
			<path class="st1" d="M282,79c-2.4,1.6-5.3,2.4-8.2,2.3c-5.9,0-9.4-3.6-9.4-10.1s3.5-10.2,9.7-10.2c2.5,0,4.9,0.6,7.1,1.7l-1.2,2.8
				c-1.8-0.7-3.8-1.1-5.8-1.1c-4,0-6.1,2.3-6.1,6.8c0,4.2,2.2,6.7,5.8,6.7c2.3,0,4.6-0.6,6.7-1.7L282,79z"/>
			<path class="st1" d="M305.7,71.3c0,6.4-3.5,10.1-9.6,10.1s-9.5-3.6-9.5-10.1s3.5-10.2,9.5-10.2S305.7,64.8,305.7,71.3z
				 M301.9,71.3c0-4.4-2.1-6.8-5.8-6.8s-5.8,2.3-5.8,6.8s2.1,6.7,5.8,6.7S301.9,75.7,301.9,71.3z"/>
			<path class="st1" d="M326.4,81.1l-10.2-13.4v13.4h-3.7V61.4h3.4l10.2,13.5V61.4h3.7v19.6H326.4z"/>
			<path class="st1" d="M351.5,81.1l-10.3-13.4v13.4h-3.7V61.4h3.4l10.2,13.5V61.4h3.7v19.6H351.5z"/>
			<path class="st1" d="M362.6,81.1V61.4h13.7v3.4h-10v4.7h8.6V73h-8.6v4.7h10.2v3.4L362.6,81.1z"/>
			<path class="st1" d="M399.7,79c-2.4,1.6-5.3,2.4-8.2,2.4c-5.9,0-9.4-3.6-9.4-10.1s3.5-10.2,9.7-10.2c2.5,0,4.9,0.6,7.1,1.7
				l-1.2,2.8c-1.8-0.7-3.8-1.1-5.8-1.1c-4,0-6.1,2.3-6.1,6.8c0,4.2,2.2,6.7,5.8,6.7c2.3,0,4.6-0.6,6.7-1.7L399.7,79z"/>
			<path class="st1" d="M414.8,64.9v16.2H411V64.9h-6.6v-3.4h16.9v3.4H414.8z"/>
			<path class="st1" d="M427.2,81.1V61.4h13.7v3.4H431v4.7h8.6V73H431v4.7h10.2v3.4L427.2,81.1z"/>
			<path class="st1" d="M454.5,61.4c7,0,10.8,3.6,10.8,9.7s-4,9.9-10.8,9.9h-6.4V61.4H454.5z M454.5,77.7c4.6,0,7.1-2.3,7.1-6.5
				s-2.5-6.3-7.1-6.3h-2.7v12.9H454.5z"/>
		</g>
	</switch>
	<i:aipgf  id="adobe_illustrator_pgf" i:pgfEncoding="zstd/base64" i:pgfVersion="24">
		<![CDATA[
		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
		]]>
		<![CDATA[
		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
	IoJU28DF1uk8zMMHM3E8LgQWt7CzgAxMMBaOxS3sRhUKiEhrgcKwo4UWFApCTxCG8imwhRZBGHoS
	IJYVbOFhEinIqGBQdOxTiIylBNZXupoIwbO81UZrM3E8JDAUv/EYbIoCAn8aG3CDlrD5Tpy0DFbC
	JkNqiRkYDAmby7wQZJRACJuJBitqaU6oTUgWBjxgQqjN52FAtLIMoDYdkoTnQLGoiLiZOB4BjdK8
	RyTgzepyUrGDg4iYqdw6n4SWPYiIt5rJoCj6QJQYFBwIjAURMbNAelD4QCgFkRvRcTyO9UShcMOa
	DeMUeQqsPaB07cTxqLmeAutRQGgC0ZQkKdHzTsW7jZmJgh6AeLfQYALlENjd783zLff0Mc025zrr
	K7f0al1mbtr5T2vOl3I0y+z4MabdjbHMc2JqfWZau5temeekXH2Zp3M1+9Oft7t/Sjzd8RA9rpJO
	r5ZWa/vE3t0TSzq9uuNxwzgeH4jrG3M8RLhaer+738rbzlWMabYV53xn57+y263NlM5/m/Hlpq1e
	Z8U5Vzxv11uvnbMpxrUdX65Sx7kxzvlmWfG1nfGd01Js6+NKac05X4y7c7udctqvnme9f2vO+VJZ
	6xRdOqe07dx1++35tuOccUtb27Fnt7ninP1lbXc8RPTeOq3Pl933vTGuOWdrq7fnx4279teJaf+1
	0zvjnO1L3O54vPC0tCuu7m//Uorbn7q0746H6Lp97Bf3dO7nrP4T55y7Sqc+sZX+1EqfVlZ6cXX5
	lauNc/7HOdeW77f+dI5iaqtPimnl5jd9m3HO79KnU4kpN2V+56Zt6pR+d2crK+WcWtvY3iop5az9
	v9XinB9L+24zxX0xzhlXWd8ppnK+Ox6vO+n8zk+pO+cuJ+Uc33rt55yvyzlzxbXenHNPOen9nhW7
	nZSr2d5p8b2SUkz9/mybc24qO8tcOTux7UpzzvVSr/ZzU/kizv2dXorltdyk1fbnnN2lxfLdOac3
	10kxlvdytW3f+TnnnOX3e79jmnPGfutPSzvnnOlLfDnsdNa/Oec75XSf7o7Hi8uZutPrU+Kvs912
	d7vLjMLujgeNy33tW5xznlTmy1WasXWcc/Ysc/sDAJwrPK4t00qlcjxQlb7jQePm/Vo9d3fTKqtX
	+Y9v2+ydaf073WVzGNe+1F53mr9O2VyejXNXet9iW7O8P619t/binvnK5kQQ944HAFhcOx6tieMh
	MIagVnMXb3EcblTgQAJx7XjUUNzFOYvj4UJxzXXlmqv1OfzO5evhFwAPBauRWpPOAECQirInT0CZ
	2iVS/KZkynxMMoKaaeSAeVA7mU0GpXEJWAWJ05G005UqS0GKatebk4agdp2R2Iy+02iIX1ta3tce
	6aErCOMEFcynUEOwSCxOTelqq2RtYzfw2bhIlYkGBtArMhuVJo4HRYNIAURbTQpvRJkSApTp8JTZ
	URTcJjOEir1SIMyFnIUYxgbPFEEeLFw0IgMmYPETxyOCdbFguLUaNWs9+K5ORkbUTkZ+Ilr/UDuZ
	evEt70L6Conb6N9hNlJ4jb4gYvQPtZORBKfRax40YLfLW7wERBVxscAoLiiBOnRsKOCQGRAlnbfj
	0TXUTsCqBT4Vl6whTVSzlw0ce/lMySUiXgqnVy/UTuZF9uULtROwWXCbK7MwqXB9Qu1kHmVP3gm1
	OTbT5iUrTAleBGXyBIyCgE3HCC7cQeOaA9dEdPGpiHXlEym+8qkVTu26QmvXFUkl4uCZGCLFbza8
	rjWwU+s3Gqyua5+C5WHiU7vOBhQilMm7jVitjGdEX5AN9tp1J7IvSbB5bW7AyyeOhw==
		]]>
		<![CDATA[
		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
	i1pHJYpPSiFUG4ndOODSvakgjNcQNgriBYbSEfAwaBgIfJxibJUeBqQc/UOBQ4T+w4dVAwgjQpYh
	iRIaJdXJyM7StUpdb8xRA0iDwGQaTYwCDgQmjgeEcutkIhk1ZYL4YTgy0K5lIxry2agkymgFI1AH
	2vi4LHUiTRyPBYtFIyT7SJwPA4ojogAnGBFYBElWPI80cTxQDKeNiwG5qUAaYf4ExMqVo4laRSMk
	EtkktlWiGZg6GDax+7REnTgeFZyKkKR5YVIWPSBYhBIs7Al0+YAakEHNeEalhIUX6NM2DSgBIvRA
	+pYhkSykkh9QMEB6CKrDcMlngPShamIyBygYbkgavWBpAqhSvDKTQlAhwkSK/0AaFqLT6nYyXULt
	ZDqOzeSbhNrJbGSFyTMJGAJThUKn6wYHDEYtsmlcHtROxnPgqt0VdCyfjm0i0jjmwKLWGt/ojJ2M
	5aB2RKfamXSn2slEyAqTy40cMD+n2sn0ihX6iYcHzal2Mp2MgJNnOBX8TJD8QmtFipRURCZWsEKv
	weoaTNXOBYMwHlBRURfEnkATrNXM1KmhIgQaZJNCJzt2n1Q4u4QC17p9l5hylLrbn5J2xrMrvvLS
	x5OrE0+KJ8UUT694Oh6viqeVFk88HQ/RzJOredL6816Kp0unj6m0+eK3N0//POd8mTP1pn8nly2+
	k/NM6b2z3ju5PO3tv5Nz6n8bUzmpvW8zlV7ptV5prfXld/u9d1J88b1z3r6Y2ur579/bd3IZV3zt
	vHbSa136ndhyl9Yqr52Oh4hOey13qbR2WksptdPOdmsnrXbWr47Hi1I7KWetnRydNF/aWDrlclv6
	X9upu8R2cj7f4jlnpdVbOs32fzoeNP87Pc+J6ZwWRees81o6K521vlt7O9vbFdNbKXZq7Vd7q7yz
	7cx+7aWTw5POrvJnrbPOnOl9mm3Xt54xxk+/6//jz1h6nRZ700zpzHdSnOec1ztLr5OzubZbSjOt
	lbb8Orm3P+nM06d1pz8dD1Gd3P2mbl9imnPX6Rg3xTdT6/dSe1vWOjmn/XTSfP+pxNk6vZdel7dO
	jlbHdc7/6/XvpFfiOh3bOuvMfjOddFY6K52Ox4vSOem8czoeL1rnxHPmOSemGNueuE5752eZ5+Ry
	T+vXZtvZ/sS2/rT5yjznnC9qn9e+z5q93v6apfVpP7vf/PNWWr+n057W3p6OB+22T0nz/Po3y6b5
	uYunf7ZNZ/2213POs+ecPblMP+eftUqK81f61ClXn/aVOD/nb5vOn5dazxLnv/Zlzp9p9+Rqd1eu
	Xu/5PZ16trg67fl0ek/H4/WfKa24u2lL3LO+z1ntrNcnh53i9+y35sb5KYezz9o/uTm7P1eb8aR3
	5q8+rc/PPn86Hi/6c9LJ5Zrf53Q8RPTnzD8x/XwxvT8pzdL+dDxEmNaf12Kf9VqfjoeoqU+fjsfL
	J57v0yeX7eVc4p65crOn4yG69Oav9Wv7T2nre315c/76fbOklLu058XZznYqbX7Hg0Zrpn/te2Nv
	PN3SOtvzrfbzrfYvh2e++HK2YmotrnbWSx0PEcVz3m98c54trc222q/Srdt3PF5u377fr1fa+1ba
	+/f//v/96vcd2+v3HQ8RzbLx3/drLb0YO5Z+HXXp1zxnpbXn2+nvteb50mvOmf6llmZqMa34v+lT
	27fKPN/Sap1aWaek9O1Pp7beKSt9jt57Lc2PO9Mpq50Z33tbXkot/Srf8Xi1xbZm+rXSr9X6rPO9
	4vnZUmwxpZXKdjyt02unpPM5emv+6VnimRu3xVbOeW2Vk84p73z6Tt+xpY9dVpolpk+7/q3P1Tsv
	pY2fm03zpfLSXJ+r+NLO1FKK619b/2WtT2u9lav17VunktZ3PF65JbXcnG7xz5wzvvLre31MraX0
	uXpvtvc2vn6zZ2qp1/sYz4xltS/zfHvnc7b+nTTf6hS3nJab916/FeeuLu18jtKu+VqMZ2fplmsr
	66QWVzyvxbWtbDvr7ZwrvV+rtdmv1yob41tzrrLStth2nm5vprItVy2m3vPStnjiSt9aWedz01Z7
	6bTd2am87y7vfMdDdDFt7Ni214tv35z9s7Vvv72zV0pzvdNn30onrc9ZevO8fftWjlJbm1rZdDZ9
	bDHFV+JaaZ7U8RB1nbab5ntbPn3OadPm+fPp++N+7vrtvyj6P/8r7ukU93/2n9n/SuyPfV56cf3q
	U848u1pr+06c3d6c63d/46YV3ypvvdVlrv2y//9/1lqt/Urt/7Rcpth9tnT7807vrvivzfhO+jPL
	tu8/ae2W9f86vnhm63Ri2Zab83H1fq+ZPvbO2L7MlcMYu6z/nWn1SadLXPvnpbhK++94iHDF9Dqt
	bjFu//5br/XvmjHtm7E3dok/Y2t7Zvve0+/3S/zP+f2msz6eVOLK/cRfra3fU/Z8zm2muGZKvevL
	tte/Zix9vqWOZz+1Pj//Ox4v+2///23/Ox4oXKvsaWkVYf/rz9GX1r+9H1OL259a+f6Ox4va96f2
	rb3y1q6VYscY/8ts3fq887HPfKetslLsPituOf05+jg7/ppttvfdZvn+bv9m//rfua/FnSmdFsvO
	zuGuNePPfX3mee+12XrtKz+74yGi2Wu+NldLscTZObez0u9rURy9tXqtlNa3k5tf3dZ6G3tuv/hp
	xn/nlW25m6/narvWzxJjdzxoFlPHFL/M3zLT2k/pvHL299tqb+5ubzmzc05xxn3d87e0FMuMO2Nv
	zzRfah27V/s3+3f7lZ69Zu++1232+rj/ur21c7U4++fstDb2bGmt2KvP99mPp6SVw9htzldaS/HT
	SudTt/RSt9fO2fXO3DbnSq2klaO1s8tL6/1JbW2JK1e7zmxd3n4O267Zbf06H+eJ287bnrOs/bXb
	Nr1Yzn6M3a/bTKv0fq7aiu/nm7//7dOmEueZ51f6+NqanbO5Me2ZK6UTS2u5me+dbyvtrm57evXs
	dLp0+9XxffkUU5unY0v7Tqf0XuzuGEvHzjnN1Gfbe/9Oefvb0s4uJ3bHQ1Rpxe7f+A==
		]]>
		<![CDATA[
		YvzyqTut9k6JsXP30mnr15/Z5uzz3eVnm527/RdjS++tPafFdD5+t1h2P5fbZjpxz7+fH8+ndFbr
	srZ7lZjafsdjxPWk1rn7XrtajH9WWS1HPduJb9PvK7F1DtfP8/vtz6+S2pntzfJtX3dbqcR32nsr
	vS9pftn1r1/KeeWydYqtOx6vav0ph2/XSt1SamV/W7eUsy0vpbX6VzqtrZTi7jkx/jx/3opn3/u0
	Up8S12utzLS2bd3xGHH4Vd3Sv0+7+15RS6ecdaf5+97p0innGb+l9NafL7N1LlNaJ56ZesXU2lor
	pV2ry782P73OecYXd+eKqaXy0vrf8t6ab7W1L3Xplct1Tkpp7TutxNVp19qy1ktr2353f/oSV58+
	a2OJr3PTZjut39vTTumWc7+zdm3cucpr5bSc9Tplvc7d/1vdzoztvbJa7v4/vvZndirndW5mTO1X
	t/O95bUctn7pxBb/lX3d8RDZdnltS2qp5bC1ubp30ynduuOBastZ77e5+pW5upU5187t3ZjKWx2/
	4+kyT5npxPM6fu92LL/mS/9re8YZ51s93/ZZHV9s5cSda60Y10vrnD6pzJajT3O1NFtsZdec5Zxe
	88xv75VNZ+2nklZ3PERNab3Vc/tbO7vbusS1vqSUu1Tieh0wk372m6mtFN9KqWM6aZ6W2v47rct6
	OWqxZ9G93D/OmGZ8W+bL2Tmzz6/XYpeWOnd75ln9s8303lzvrNNxtpLS3JPWWats/NS5x9cr/Tt9
	upWNb+fP117p1DnPds7+b3/ssnHOVjbNF9/uibstxX4lvtx17ztpxfg+zdTxze5d3W3O/dXS61ni
	+blvP7YX1+n33izp5fBjnC+2n23O1jF9KuedFlOcLZVN3fGgXQ5jv+71KUrkXd3xeHV17uVbaltO
	imWlk1JLq+wsabUc7p4iO2Wt1B2PF6XO/X1888TZWu5WOvPt7knlpNbeLOu1ePq13W2ppNRyFuPp
	nLX2tvXcL2ovpvbWnK+oBBNmFKqqBKVSZmaGZpAkAZMSAAAYMB4PyEXj+b52BxSABE5CLko8Rig0
	KplNRKI4lMI4iqQojMIghBBECjFVVSAAPYHNEh17Lci9VLJo0uTeniPEmpePUbJILdyFRyQTkXjJ
	imc1ar7XjGJyRyfA/ulFUVUKWaL0MzNzXWFUy7iS7SMwub8fmpnCx7rLTopLslyYmhmn5LpqxCqJ
	+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
		]]>
		<![CDATA[
		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
		]]>
		<![CDATA[
		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
		]]>
		<![CDATA[
		YKJ4Hp05yUcvvoPtAsd7Kc7v9oUZPoeneCeKxrgyt8QZXh6s1kS+Vu3uxnB86VnjW+a9+pI7RioB
	89Nq+JqxuqEn3qA/m4DS9NsdNLgQiPL0qz4PrrmJtrBJRIiUQh4A00G1x/M6I7k3k80Yk2OGq50p
	0Zq0A+lI9WINXtWh9sgBBzV60WUcNxK9js/gcq7WuwfqC2EnAWubkrfJJxqoQwIVeJDFsc/d3OLm
	YsAK/L4rbRpHmO7EqlUcwe0oCHUyeUEAzv5qTD60aD9MXpBkb8OkufYKr1Z13+wrpuM2VUIAhTey
	H/8Kq2uNSjdgtrk2Z/Ly0fepTS7WI7EIFnTMJ+7C9at7y/Iztzq/mfU7wc722PVchANmKONjanh+
	E5cG05ozAhEOOWSUA3/vBgeTEc9Jkrr9ZkLu0aFaEBqEY+T5lElAiCuSgA8csMilI7JcApO3yJHa
	1TQ1uEIiYC42ohYvCO7CblEHI+kXGCypRkZibjQ4jaM45CZPTQ61s8UVUpJsGfVQC5F2g8rpjvYq
	2cOlVDzUe/MknH8LP/likL+T5T2lcgAX5W8Azpv6m4wXkumaZnCEbyezXvo6qbZ+vp3TRHtTSmPS
	F06haJ5NiwIKbzTbLNOn9GWk0EMRkkOgCWT8QHyfVq28RF3Y882QldaQvgURwTodTh7hejZL+0kx
	EWuJuwPKBkB7vvrenC6lLzj1CYzn27MPJCN92TIDptRQLztkrZJd+5fOXLW8uij205KxqVTnxZWi
	wGU82qI41CKFEyyFf9q0uMPJ0FzzJ/hMiR9tcyB4G81UzRiau1kpjyfjHkoWNjxqZdrPNZp6SOvp
	Wr7yULyW8GCR+8lsMpI1XANQYJpN/mP22vdnt2rMSGkYKfH4EZPfPaT9coalXznikx3tM8OD6kDg
	AX2yBW2gMzv1IhiLUqDY+8ME3rQJAeGGAuKqR8ky9Qx/wLgbLjG3vomZuSM7ANNP9tOh5rtwfg9E
	movUok5A802FuzNMVozyNBAEWZmLgcHJ9Oq3U2hAJU2zrFSLD95jzblXmiEv4DPeaggxQhdYSuNt
	oCVFo5IiuIH2hiqp3w0uqRGNqk9f3oPKO4oC21WFIDZgKdRRbmNeaP3dvE+WOWr+WDLDpQ9E4Xm+
	sLg1s73IJHhMy7iCQHOLsPTwhZgVXYLguoX1S+AghcelOWMgxmTpDIc6FdSZWBh94Wlm2bpQdbP9
	VtTITnzXhk8YgVl5W3Jr3rFkSVUizELaJJxlfea+g2vCsA70e4WFU9RWaJw9qr3o4HLPRt71/TQd
	5jzhV34dtfpxuqfUAqJYOKZI6qsvub4hTRdmXfpyfWMK8l66uaL3XQtC60y/Xl/5R1Ft1mSUw7Tn
	3ut7HqxoYbEwrSOLU0B9zQG3N3x9nxuOXdNz5+n6/q1bNw5vJmSYVibmv0JNpPh+FhfGG+jdxcGB
	zgd3N1AmpiQ4yjgmKgF0XRIy4st8Ek8guNnA/XNwcHUVHdE+cwLZwUFbvJCu0dMqXM8CxAfjD1Td
	57CDA04cg4d5xkptxI73CX2QJ+//S4JIcEwGDqUX4i7l475+1aBcW06yc+qendf80Ke9djIhuuzV
	BAczsUtbJWhQh99v0sr717btwUbxJx4G2dFziKsNC/vffTWoA8MyUJH00GL9e0TjU3Tb1iJ4NoE0
	FDHyZmo90dQMsrAJAjGLd8/8okByhoH0003XPMacVsEyVYjju+sMyeKiunplGqLucGTv9DUPOxNA
	Shdrn/WL4j+/loi8CLwfEA8YRamszSfOPHsnqX435ZOzccY4EIoO4BgdshlFKjPuMAm+kT6ypkN4
	PhY6ZSZc3Ceb5+qVGaAw7pUeczMO8eTDWaHdJ+NpLFEqpp6fJD7I6i/UEyi3kuFqNMsgjzP2BYto
	awonj09376m66ApY4JjQ0Re/o1+CfKo8pPb4BytxjKkPtjyAK5rCvx+UIBjt+Vau8vS+42VPWedA
	ipj1WDg7Qzycklor7BO/KWjQOFPK4BFwbw/hXMhMSdDwWbfQpTa7PH+68hqzo9U3drYzxNSJACUd
	O+G2UjVDEzGnMJToWNV1paXqcG6TTDi4wpzPbiaSIQPdeQBmwcERTZACjccAnH4gGbP41nqiwwhT
	lPFZZ3x6Y+rS9Baju7r0dElXwz0kixy6XNqOrHBep7D2MMURud7C1KgfRqvBkXLr3DGb9YNJ1DjB
	+m+3igt+DWAT6ysRUDH1ojhHF0r8PoYRmM5MiwDYG+hfK5rsAVaDbbymlPrhGqyA2WlpblQWfK3Z
	UF22NWEQ07FlXMX6lT93ogcB2HUT3hF5n4kDrIdxuCiTjlgjdetWcOiSbXTK4QNoPGx8iogjEPAV
	12nkKq/y90WX+guE+vxfr/2gJLFU9v+lIzVMb9RiAyVCb40qUbFrujRQDUJibFNYaQS4i7qSRE8y
	8AlwGnl1WLdMBsIjvOHIYmdV26m9RtwAP13yaHYTHHRgKzcq8eGDfpXFQlkfHdMqyH1M3M6jX5Ip
	nTrFff9qIZsnmIl7c+cJ0apnHOQNUA0p8O/Km4UlJcV7A9W0wDAlGD7GriksbZy1ASB1dutKwxAn
	Sro4MkMuf5h3Fu0hSyGIPc/VAB7x+0f+fHdjnFjAdbckAbBL5S7t9M9a1d209lUj7jS0ALv8Xpfr
	PzxtjHdjvSY/TzxbfaNmhwoizNYvrO8l0Yr5b+nA+p0+CACZJF1Qmxi7mDZyNk+r0az3Qg1ZbWvi
	HjmCv8tFtmRk2WtvdmBCDUKDLLw4OWImDR1JCwRUzPsifGvWvmIXtpIL2/SAuMSicfrZr3O6D1B1
	2XVsTrWAfup7+YCIumMdljN6FsX4YPjDOJEoCkOHqNMZdFgIV0LOv88B/qVBb1IsX9W+aVTlBFGG
	Gmgj0YJEYpjKZZXuFg0h+b2d9neuFE5ySqxvPqEx+tm7HTjSPkSR03vpKQiq6Iu0z1TCapfqk6PP
	/cxvkk/ewjco9+prHDxjQQmV32EG5NJLS3Lkad/viJVFruEotx1zITU2cuAHaBtkInvkvV/pDRYh
	1kKQgRTAjA3JsCg6FgSyNcsXxkup7rqpHlTbMcjSFikWOoBZ2+sTXD9kGCcPoGohbagqaWhSMqLH
	DfI+RURARaiQuyEOB9Hi4kq5wkdppAgDuoGsnE5yKYASI3faW73XgZg6GXxBWNEM4zDXRNxLlrbv
	MDGlW8RyTmehzAqvvMbbaYjyGEHUC+Y/Mjo8gVV2yOgWAdahRO5ofcWJWjKyCsZPmA+nKeEvhfZs
	Ztnn3e211zJsLI5X9g2V3qxqBEq4+1kqUnRTXYQ967Chl5j9YswWchey9khGYqKonbsTxqCXJnRn
	l34kIhgkN2tzbdHeIrpGkbVxk8gV4bCf+PnhWO4SczZRL4bT3QGzlAdFE8AHhNcuSFhDVr9t8Mmz
	tm6GbXzBTA4LR/VTrv50yahOLmwckGZTqYHcY6Y/mwh6RQ16vQcnsrMEyZ+4SpGMT8IP9Jyr55w1
	+eg5BqqDdY0rDxCA+zTGcpHIwzuZQn8uyfB1JGhOYurcWCHwWVmvkhpKBL9oSr+NSztWNDbHXwZI
	YppeUg2uMP6z31fDc3Nc6KXNszh271SyfG2OWGZO2Hdh1hd475khhR8EE4DjPH5oXMOwJFnWzdYt
	gUnZ7vcJHRtrTe1bSOn5ieIPjX51SveOHbgWzuV2r9PcG4/bXI3qJvCclBxMXHkvz23vxT86DJ9X
	vdZge3dOk5MQnV6n9lI3ZDEYHezEh0oFgH7Kcq3hNRmyvDQfCSHuxmN6zCXWC9t7J3yhN2i12jwj
	VY/o2tazstQCUlu5JbyDvU0yYhCPPQYnf8fXl/gHy+zHbW1zy1GsWcgO7OmiBfxQQXzQKquP69nc
	QwSvCKJ9AtxtpGt9jh8jAZkf4hq5l1xpSmjB7VQnOvz4lsggFcyVlFdQpwsUfAD1jq4cs3NJbRtk
	BB5sIB8NH3NO1ULumJSNnL+AJAzffgMozxAPwI+joyYYuYXDWqig2+NFC/logkaK6Hsu5ZQkRLRU
	qW5y2V856GUcYAlMmfZ9m0Kh/vlQR5fnO/PVdKyU5nnrCF8C+NBZPAetFg2bteUNhJmGg6Y7oGj9
	zszYleUDZn8DXKCPxgILuf2RFpkiFR+eS4K7UWepRDbO+EhVbjcF1kgUhpflN0bHvMOESYxCV66R
	pztE0iPztncrq/RVlAJmE8hrnugtT104qCC8J3AqyGc7+A1snRvF6TovQ/SF+srn4M0zUKokpN8H
	pUkKLj+RcFpVLpJNqQOXRiumdSBpEzTkdKGTSJI20EL7Y26tiBJabJonNg7O/iZTYbxJu8a36wrS
	Fhdj6RmVnWVOTSII66vTsQz3pFmWdCV6Mqtp9LvvwSGdXyJLkaiUdsUDCHBEM2tRURMWPvzxK7xR
	MFhu42O+miBqx0XGIcfn3Hd/+gr28DpEMc6eHsfPgTILB376ngM4NvxCGknob6DlvkYw4FMtnKfs
	+a3q3FiHFaOt2PnmwGruknIIBVtryKRVT14FHSCGtuN0kj8sgxJj3sJmRG1ALJH5Ol0OuvGBsPbT
	7BJ9azXAegbvq3bDZE0U+9PGAvlPIh1PBBHyOsMgb9mv1HwdLpXZ7BEuEb7paQqrNljEPMCA8sXL
	/owwbEYbdmCBcULk+3UIkJVAvnyUErDW8Iejo7oUf3Ak4DdIOybXMLi3UBkec37kJiMiOL4ozgAn
	ZT2o/FYLTcEV+KiENCi7z0g9euPvfRy4cBD4FLHo71dQRY8k8QMB3+xEFlFKUkAJiUSieORFz48G
	nZGR1eKTrIZ6ImyhgThGpqZmw7lYE6kboDPI9ZvMuz4w2pSxox98in4M6ZAwJjpaPAM57Qn3dMxG
	Nb0Vebq+mRigjLyNS8TjYy3zAh9nUt6AA+l1PZZZUn3LN8d48IduXJoHesPQ79c5b8Kfb3/HF9zU
	WpzLnyD40gup4NYEWwQPLQ+yAV96Fb10MhwkFNfiWoJKk6RR994XANtAXBDe4jFxjYEqRDcOeV8o
	gbe0/V+6tWIj3QhjF5eG/WgXmW2w5SEU5IcrPEU/T0z0tD8amMj6FYpF5U2chcML+QvcKa/wsbOo
	MarMis50Z8gAfOWuPJjrtZ4V++a3+NGsqa3/N7dS7+UH5BIqM6P/O8dfO9Avb3oePE+nrHMC5WLt
	O4DY5MsdUTEcyqdImXad5SoGdCdC/jxPnqowXxVm3hdlD8OwDv9Yh4OcOelBiTtPrq5vxZrUUbPU
	k4k2eDEERV0p7dqmd4Q16gRfdXT2R1KwAcg+oq4LGdXvRSjk6VJ/xXtJ4WI1VZqjjbH081xnyFgI
	U9QiHJsrXdPoAUCqXQMUebGOgTowMTjToDMfbbECpsiUlhVm6XD4c1bmE2jCT/3gaKBE7QDyC/na
	pwegqbykfoN8R+ErXxbSqOJ4Ycb8bYHcv00xBSSlCXOktB3Y0csSprX1Ee+ghHaNCQ==
		]]>
		<![CDATA[
		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
		]]>
		<![CDATA[
		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
		]]>
		<![CDATA[
		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
		]]>
		<![CDATA[
		1cuPhYNK4nvUyagTd22JHtmwgHR5urcl2UWv6htvqvlWBS09Al4pM87xncpjwB4VicexMFCG+6L2
	e5A+V24gCuQfZ4fNEnECiE9g763V+bToxlm+QFanh5iKFyxQ8KzYY6NlomBR5OECKboTHU2DJnJp
	SWvua0oPtA8cG/oUsdGkzQnhAmQEeMDzgHXm4bMtYmbnIhvNBLo1qGica9Ms4eIEAOtZsWAg4OhH
	4WDB7hJCyjOShMKFTJKWjh1eR87kcDpqRIyXUf/kYseazqOYf60WFpbmJbNOp4zzwJjiUJ4IdapU
	8aYgFtXewDnQSoAeLHZVyy7moXkopv9pErliUWMh2FpH3Zvvt0vn9WgpLqnzYbjsdEO4AjWQ5EhS
	e/dEJmtiONm57ESYljwBmdic2ihpPa3rBzmDypKQ9TilDWb6YUgY3yoy1zeKKF1arlOBZN+C5G/m
	HpHunQHqbcXGNgEv6JnWOvBJHp4cXLQVcLJYAkM/hOIxmoyDKhVc8JpI5pZI2jtVR1m7JZJoKnjv
	rducMHh2qooswiMTZ+1K7wgRRTO/XoTT4X/q/ofzYNhHaRUVY9LB3GiFCHfe0PVYGVNAUEznBQL9
	sYXr7JwwqwnplP0BClCMhm25RhiF0UNEo2XOjBMoKig5sAmQksXG6NNnkr8QSRZzGVPWhV2/DOOF
	SU0293YVEVWJcqkoZQdjc5dQXKBIdJP/sXr5iWrCAM1AcoAef3y64eogMZ+lqzzIel9Ij4HiRKzw
	12MiaGKs+8SlySzfuEIEZSjEPVhGn4+4ztZ+D8pb13Dg13nEs1OqVURX3kP1ZPSjdsymrCs0dPBw
	hGlsUIJdyrhFv5pxceqA/h4ksp8dFKLCgWZyQrdJB4fxpjp/VLpPDKUOnUXasKuymSZt+ivBV6R9
	tna/ViSwdjyrlON2sxFtMf9Olla35DYwaUvkt3b5ZwHeFpyl6Zb+V6oDV/dNAgOeloFP1jXtQxoX
	faVJc/Yv9ExPGtcHifheCF2AJV3XVdR9uE2AaiPF8pBYsVCzGTcHsSFa7BazZwCHDegVlIM3VXuH
	rfdXdxm/hRLAqPw1ucqTwWl/OuXjKPbEVCpBWp1nvpjGGmkhHj+HzKgDhMSrIZ7KZP8vhVom20du
	QKwgUccKlUA62CAFFlPyA1+F1hrAAOC2ec/iBg/ABuhAMofHOv38ODnx0vZSgZ3QzI/6/7EgFyQ/
	MxrZdoy3KmEWb1sC/hdvVorKMRmoESfKiCHk/U6sHWm6bNuco0l6NkVjXETOb3AfmTDVD5b/IWTv
	XrQNO7MH9OgJW7dAIa2jqVYGCW8tQixq
		]]>
	</i:aipgf>
	</svg>
</symbol>

<symbol id="college-logo-stacked" viewBox="0 0 368 83">
	<title>UF Liberal Arts and Sciences Logo</title>
	<g fill="none" fill-rule="evenodd">
	<path d="M101.842 2.009h8.065c.168 0 .168 1.008 0 1.008-4.536 0-4.984.056-5.152.224-.224.224-.28 1.734-.336 9.405 0 4.592-.056 6.888-.056 15.454 0 5.094.056 6.214.224 6.382.225.223 1.12.335 4.928.335 4.874 0 6.385-.335 7.505-1.399 1.066-1.062 2.129-3.526 3.865-10.693.111-.224.897-.168.897 0-.056 3.807-.224 9.685-.448 12.932 0 .281-.112.448-.617.448-4.313-.167-8.401-.112-14.17-.112-6.217 0-9.8 0-13.274.057-.168 0-.112-1.065.056-1.065 4.257-.055 4.873-.055 5.04-.223.169-.168.225-.953.225-4.478.056-6.72.168-13.774.168-19.99 0-5.15-.056-6.83-.28-7.053-.224-.224-.952-.282-4.816-.336-.168 0-.112-1.008.056-1.008a434 434 0 0 0 8.12.112M131.169 7.496c-1.735 0-3.08-1.624-3.08-3.192 0-.952.336-1.679.895-2.24.618-.672 1.458-1.064 2.633-1.064 1.625 0 3.025 1.344 3.025 2.968 0 1.848-1.793 3.528-3.473 3.528m-6.777 28.498c-.168 0-.224-.951 0-.951 3.137-.057 3.976-.057 4.201-.28.224-.225.28-.84.336-2.353.055-1.903.055-3.191.055-4.927 0-2.128-.112-7.613-.223-10.357 0-1.008-.112-1.567-.336-1.792-.225-.224-.672-.224-4.201-.28-.167 0-.167-.952 0-.952 2.913-.056 7.897-.167 9.074-.167.392 0 .559.11.559.503-.055 3.136 0 9.63 0 13.55 0 5.262.225 6.55.449 6.775.224.223.895.28 3.92.28.28 0 .28 1.008 0 1.008-1.12 0-12.994-.057-13.834-.057M147.607 19.422c-.672 1.4-.896 2.574-.896 5.038 0 5.991.17 7.558.56 8.287.504 1.063 3.024 2.63 5.098 2.63 1.96 0 3.416-.951 4.48-3.022.84-1.68 1.343-4.144 1.343-7.727 0-3.75-.504-6.326-1.23-7.781-.73-1.457-1.681-2.241-3.474-2.241-2.576 0-4.704 2.52-5.88 4.816m-1.793 14.221c-.28 0-1.12.727-3.416 3.079-.224.225-.84.112-.84-.224.112-2.855.224-8.622.224-15.788 0-4.2-.112-9.743-.224-15.342-.055-2.688-.112-3.528-.28-3.696-.169-.167-.56-.167-3.64-.167-.225 0-.225-.953 0-.953 2.967-.055 7.28-.223 8.85-.28.391 0 .446.225.446.561 0 1.231-.168 16.573-.168 18.029l.056.056c1.569-3.136 4.033-5.824 7.45-5.824 2.632 0 4.928 1.288 6.72 3.078 1.905 1.962 3.025 4.538 3.025 7.784 0 3.808-1.792 7-4.033 9.238-2.128 2.128-4.536 3.36-7.281 3.36-3.92 0-6.385-2.91-6.89-2.91M174.277 16.677c-.896 1.791-1.23 4.032-1.343 6.775l11.37-.056c-.337-6.495-2.017-9.183-5.77-9.183-2.128 0-3.64 1.176-4.257 2.464m15.067 13.102c-1.793 4.872-5.88 6.999-9.633 6.999-3.697 0-7.057-1.512-9.354-3.807-2.016-2.016-3.249-4.536-3.249-8.119 0-2.967 1.4-5.935 3.305-7.893 2.297-2.296 5.097-3.864 8.514-3.864 3.36 0 6.049 1.456 7.841 3.246 1.568 1.568 2.912 4.368 2.968 7.727 0 .279-.112.392-.336.448-9.074-.056-13.554.056-16.466.168 0 3.583.504 5.823 1.233 7.335 1.119 2.184 2.855 3.359 6.103 3.359 3.585 0 6.385-2.016 8.01-6.047.224-.224 1.12.168 1.064.448M194.906 34.763c.168-.17.28-2.073.335-3.472 0-2.016 0-7.335-.055-9.799 0-4.199-.28-5.879-.504-6.103-.226-.222-.672-.222-3.753-.278-.224 0-.224-1.008.056-1.008 2.24 0 7.113-.168 8.345-.168.784 0 .896.112.896.838-.056 1.4-.112 4.256-.112 6.328h.112c1.792-4.2 3.808-7.672 7.057-7.672 2.912 0 4.76 1.792 4.76 3.976 0 2.296-1.68 3.64-3.248 3.64-1.625 0-2.8-1.008-2.8-2.577 0-1.903 1.511-2.63 1.511-3.079 0-.222-.279-.446-.95-.446-1.737 0-3.53 2.238-4.873 5.038-1.064 2.128-1.457 3.64-1.457 5.487v5.095c.056 2.576.168 3.919.393 4.143.112.169 1.007.169 4.312.28.28 0 .28 1.065.056 1.065h-14.338c-.169 0-.225-1.008 0-1.008 3.64-.057 4.088-.112 4.257-.28M219.202 30.619c0 2.743.896 4.256 2.913 4.256 2.24 0 4.872-2.185 5.377-3.304.224-.392.28-.728.334-2.464.058-1.624.058-2.239.114-4.815-7.337.616-8.738 1.792-8.738 6.327m.112-14.557c0 .616 2.185.785 2.185 2.968 0 1.568-1.233 2.742-2.913 2.742-1.625 0-2.912-1.174-2.912-2.854 0-1.12.448-2.071 1.345-2.911 1.455-1.401 3.752-2.69 7.057-2.69 3.416 0 5.6 1.009 7.055 2.522 1.457 1.455 1.961 3.135 1.961 5.765 0 2.8-.168 7.671-.168 11.479 0 1.343.392 1.848 1.343 1.848 1.233 0 2.354-1.233 2.913-4.032.112-.168.84-.056.84.168-.504 3.135-2.24 5.487-5.208 5.487-2.8 0-4.592-1.511-5.152-3.751-1.85 2.128-4.202 3.639-7.001 3.695-3.306.056-6.721-2.24-6.721-5.599 0-1.4.504-2.688 1.68-3.807 1.847-1.905 5.153-3.304 12.322-3.808.056-.728 0-2.35 0-3.92 0-2.126-.28-3.192-1.009-3.918-.616-.615-1.792-1.064-3.417-1.064-2.52 0-4.2 1.288-4.2 1.68M248.009.44c.448 0 .559.224.559.672-.055 5.824-.111 10.639-.111 16.686 0 5.598-.056 10.245-.113 14.724 0 1.401.169 1.96.45 2.241.222.168.446.279 3.806.335.17 0 .225 1.007 0 1.007-4.929-.166-8.066-.166-13.273-.166-.17 0-.112-1.008.056-1.008 3.025 0 3.472-.056 3.64-.225.168-.168.168-.448.168-1.344.056-2.687.168-7.894.168-11.422 0-7.67 0-12.71-.112-18.756 0-1.008 0-1.287-.168-1.455-.167-.169-.504-.169-3.752-.337-.224-.056-.224-.952.056-.952 3.192.057 5.265.057 8.626 0M283.125 7.832c-2.52 5.934-5.04 11.59-7 16.124 3.416.17 9.52.28 12.88.28-1.567-4.76-4.144-11.87-5.768-16.404h-.112zm-13.553 26.203c.615-.616 1.343-1.736 2.24-3.64 4.648-10.022 9.298-20.38 12.713-29.282.112-.112.392-.224 1.066-.224.951 0 1.118.112 1.175.336 1.513 4.535 3.865 11.533 10.25 29.002.951 2.688 1.4 3.582 2.072 4.254.504.504 1.008.562 4.256.73.17 0 .17.952 0 .952-3.136-.058-5.433-.17-7.674-.17-2.575 0-4.086-.054-7.391.058-.112 0-.168-.952 0-.952 2.688-.168 3.36-.282 3.64-.618.28-.222.336-.672 0-1.902a378.409 378.409 0 0 0-2.52-7.167c-.952-.056-3.977-.11-8.402-.11-2.128 0-3.529 0-5.096.054-.225 0-.448 0-.56.279-.896 1.96-1.4 3.249-2.24 5.432-.337.952-.56 1.848-.56 2.408 0 1.23.503 1.4 4.255 1.624.113 0 .057.952-.055.952-3.025-.112-7.897-.112-11.426 0-.112 0-.112-.896 0-.896 2.913-.17 3.472-.338 4.257-1.12zM309.41 34.763c.169-.17.28-2.073.336-3.472 0-2.016 0-7.335-.055-9.799 0-4.199-.28-5.879-.504-6.103-.226-.222-.672-.222-3.753-.278-.225 0-.225-1.008.056-1.008 2.24 0 7.113-.168 8.345-.168.784 0 .896.112.896.838-.056 1.4-.112 4.256-.112 6.328h.112c1.792-4.2 3.808-7.672 7.057-7.672 2.912 0 4.76 1.792 4.76 3.976 0 2.296-1.68 3.64-3.247 3.64-1.626 0-2.801-1.008-2.801-2.577 0-1.903 1.511-2.63 1.511-3.079 0-.222-.279-.446-.95-.446-1.737 0-3.53 2.238-4.873 5.038-1.065 2.128-1.457 3.64-1.457 5.487v5.095c.056 2.576.168 3.919.392 4.143.112.169 1.007.169 4.313.28.28 0 .28 1.065.056 1.065h-14.339c-.168 0-.224-1.008 0-1.008 3.642-.057 4.09-.112 4.258-.28M339.112 36.442c-2.353 0-4.032-.728-5.265-1.96-1.008-1.007-1.512-2.24-1.512-4.703 0-3.64.056-10.022.168-14.445-.336-.056-3.361-.056-3.976-.056-.28 0-.224-1.064-.056-1.064 3.36-.168 4.368-.447 5.152-1.232 1.12-1.064 2.632-4.198 3.192-6.943.056-.279.896-.279.952 0-.167 1.904-.167 6.216-.224 8.007 2.24.056 5.937.056 6.834.056.335 0 .223 1.176-.057 1.176-4.424 0-6.16.056-6.777.112-.112 2.07-.224 8.287-.224 12.821 0 3.863.112 4.479.448 5.207.392.784 1.345 1.4 2.577 1.4 1.791 0 3.36-1.848 4.312-5.543.056-.224 1.009-.056.953.224-.953 4.591-3.248 6.943-6.497 6.943M365.318 33.867c-1.737 1.678-4.48 2.518-6.945 2.518-4.482 0-6.61-1.568-7.226-1.568-.28 0-.672.616-1.176 1.904-.112.226-.895.168-.895-.056a190.15 190.15 0 0 0-.561-8.23c0-.223.896-.335.952-.111.672 2.07 1.512 3.919 2.577 4.983 1.343 1.344 3.697 2.016 6.16 2.016 2.073 0 3.472-.448 4.313-1.232.504-.562.952-1.512.952-2.743 0-1.905-1.4-2.857-6.329-4.144-3.753-1.008-5.488-1.736-6.609-2.856-.896-.896-1.4-2.127-1.4-3.584 0-4.199 3.809-7.279 8.233-7.279 3.417 0 5.825 1.794 6.385 1.794.28 0 .448-.448 1.232-2.352.056-.168.84-.112.897.056-.168 2.518-.168 4.926-.112 7.501 0 .393-.842.393-1.009.113-.728-1.848-1.455-3.192-2.296-3.976-1.176-1.232-2.744-2.07-5.265-2.07-1.624 0-2.857.504-3.64 1.288a3.331 3.331 0 0 0-.952 2.35c0 2.128 1.624 2.968 6.497 4.199 3.864 1.008 5.6 1.793 6.72 2.968 1.008 1.007 1.512 2.24 1.512 3.75 0 2.017-.896 3.583-2.015 4.76" fill="#FFF"/>
	<path d="M97.435 72.73c-1.256 2.557-1.616 4.216-1.616 5.382 0 1.616 1.078 2.557 2.514 2.557 2.334 0 5.924-3.274 7.675-6.818 1.749-3.5 2.781-6.416 2.781-7.178 0-1.077-1.121-2.468-2.781-2.468-3.59 0-6.283 3.948-8.573 8.525m11.939-7.18c.492-.986 1.077-2.153 1.255-2.153.27 0 2.156.314 2.245.404.089.09.225.763.18.898-.54 1.211-3.143 7.492-4.624 11.349-.403.989-.673 2.38-.673 3.052 0 .762.45 1.3 1.123 1.3 1.077 0 2.378-.628 5.026-3.99.09-.093.674.312.63.401-2.514 3.367-4.22 4.801-6.376 4.801-1.525 0-3.185-1.077-3.185-2.825 0-.764.135-1.525.313-2.333-2.064 2.78-4.98 5.204-7.225 5.204-2.289 0-4.891-2.425-4.891-5.832 0-2.334.897-4.757 3.635-7.538 2.962-2.916 6.508-4.891 9.2-4.891 1.57 0 2.828.897 3.367 2.153M124.841 63.98c.134 0 .224.09.18.225-.315.942-1.885 5.293-2.334 6.416-.046.089.09.268.18.178 3.858-5.07 5.968-7.447 8.392-7.447 1.301 0 2.243.45 3.007 1.212.762.763 1.076 1.57 1.076 2.557 0 1.57-.538 2.602-2.199 6.057-1.615 3.41-2.154 4.711-2.154 5.653 0 .808.583 1.391 1.303 1.391 1.345 0 2.96-1.302 4.98-3.59.09-.09.72.405.628.494-1.48 1.794-4.307 4.441-6.461 4.441-.988 0-1.662-.314-2.334-.987-.629-.628-.943-1.391-.943-2.422 0-.896.449-2.423 2.11-5.833 1.705-3.499 2.153-4.62 2.153-5.698 0-1.077-.717-1.838-1.749-1.838-1.123 0-1.886.448-3.636 2.197-3.052 3.052-5.7 7.044-6.463 8.885-.672 1.704-1.57 3.677-2.198 5.248-.045.179-2.828.045-3.098.045-.09 0-.09-.09-.044-.225.584-1.3 3.725-8.39 4.398-10.005 1.66-4.17 1.975-5.832 1.884-5.92-.089-.091-4.128-.047-4.711-.091-.135 0-.045-.808.09-.808 2.558 0 7.72-.134 7.943-.134M144.189 71.518c-.987 1.93-1.66 4.038-1.66 5.966 0 2.155.808 3.455 2.827 3.455 1.436 0 2.917-.583 4.892-2.557 1.615-1.615 2.557-2.916 3.725-5.787 1.032-2.468 1.93-4.533 2.02-4.98-.36-1.975-1.661-3.5-3.815-3.5-3.231 0-6.104 3.59-7.99 7.403m12.343-5.204c0 .044.09.089.135 0 1.795-4.398 2.961-7.269 4.622-11.53.225-.629.134-.899.045-.988-.135-.133-3.052-.224-4.982-.224-.135 0-.135-.807.045-.807 2.468 0 5.88.09 8.842.045.133 0 .27.134.224.269-3.816 8.974-5.79 13.728-9.873 23.105-.539 1.256-.719 2.018-.719 2.826 0 .718.404 1.346 1.122 1.346 1.077 0 2.11-.585 3.635-2.11.673-.671 1.078-1.076 1.661-1.837.09-.092.673.358.584.447-2.379 3.007-4.488 4.757-6.33 4.757-1.973 0-3.5-1.346-3.5-2.963 0-.492 0-.672.091-1.255-2.289 2.827-4.533 4.396-7 4.396-1.527 0-3.097-.808-4.085-1.794-.898-.898-1.66-2.289-1.66-4.126 0-2.873 1.48-5.833 3.814-8.166 2.199-2.2 5.565-4.398 9.244-4.398 1.975 0 3.502 1.393 4.085 3.007" fill="#FF5A0E"/>
	<path d="M200.998 46.667c.056-.168.842-.056.842.114-.28 3.531-.393 6.671-.112 11.046 0 .166-.786.28-.898.056-1.515-3.925-2.805-6.168-4.208-7.57-1.514-1.515-3.477-2.411-6.394-2.411-3.027 0-4.823.841-6.113 2.13-1.122 1.122-1.794 2.747-1.794 4.486 0 3.7 2.467 4.878 8.862 6.56 5.833 1.571 8.637 2.971 10.32 4.655 1.458 1.457 2.188 3.14 2.188 5.831 0 5.943-5.272 10.317-11.891 10.317-6.058 0-9.087-2.972-10.265-2.972-.73 0-1.627 1.01-2.412 2.523-.112.225-.842.113-.842-.11.112-3.926.112-7.066-.392-12.225 0-.224.728-.338.842-.112 2.187 4.99 3.533 7.29 5.104 8.86 1.738 1.738 4.542 2.858 7.853 2.858 2.804 0 4.88-.727 6.113-1.962 1.18-1.178 1.738-2.523 1.738-4.485 0-3.59-2.243-5.329-8.861-7.01-5.834-1.513-8.526-2.746-10.153-4.43-1.458-1.458-2.132-3.083-2.132-5.72 0-5.437 4.938-10.26 11.948-10.26 5.833 0 8.356 2.466 8.862 2.466.45 0 1.179-1.288 1.795-2.635M210.871 78.349c-1.851-1.85-3.253-4.375-3.253-7.85 0-2.972 1.234-5.888 3.477-8.188 2.189-2.185 5.048-3.868 8.863-3.868 5.049 0 8.974 3.027 8.974 6.112 0 2.186-1.514 3.421-3.14 3.421-1.628 0-2.862-1.235-2.862-2.637 0-.84.225-1.457.674-1.963.898-.897 2.131-.784 2.357-1.009.448-.447-1.797-2.746-5.723-2.746-2.973 0-4.599 1.458-5.44 3.14-.954 1.906-1.29 4.036-1.29 7.122 0 3.813.28 5.943 1.122 7.512.897 1.795 2.355 3.14 5.44 3.14 3.253 0 6.395-2.242 7.852-6.671.113-.45 1.18.056 1.066.446-1.57 4.655-5.048 7.57-9.704 7.57-3.251 0-6.226-1.345-8.413-3.531M237.571 52.668c-1.739 0-3.085-1.627-3.085-3.197 0-.953.337-1.681.898-2.243.616-.673 1.459-1.065 2.637-1.065 1.626 0 3.029 1.345 3.029 2.972 0 1.85-1.796 3.533-3.479 3.533m-6.787 28.54c-.168 0-.224-.952 0-.952 3.141-.058 3.983-.058 4.207-.28.224-.226.28-.843.337-2.357.056-1.907.056-3.195.056-4.932 0-2.132-.113-7.628-.224-10.376 0-1.009-.112-1.569-.337-1.793-.225-.225-.673-.225-4.207-.281-.168 0-.168-.953 0-.953 2.917-.056 7.909-.168 9.087-.168.392 0 .56.112.56.505-.055 3.14 0 9.643 0 13.57 0 5.27.225 6.56.45 6.785.224.222.897.28 3.927.28.279 0 .279 1.009 0 1.009-1.123 0-13.014-.056-13.856-.056M252.418 61.863c-.898 1.794-1.234 4.038-1.346 6.785l11.387-.056c-.337-6.504-2.02-9.196-5.778-9.196-2.13 0-3.646 1.176-4.263 2.467m15.089 13.122c-1.795 4.878-5.89 7.007-9.648 7.007-3.702 0-7.067-1.512-9.367-3.811-2.019-2.019-3.254-4.543-3.254-8.13 0-2.972 1.402-5.944 3.31-7.907 2.3-2.298 5.105-3.869 8.525-3.869 3.367 0 6.06 1.457 7.853 3.252 1.571 1.57 2.917 4.374 2.973 7.737 0 .281-.112.393-.336.45-9.087-.057-13.574.055-16.491.168 0 3.588.505 5.83 1.235 7.344 1.12 2.188 2.86 3.365 6.112 3.365 3.59 0 6.395-2.017 8.022-6.056.224-.225 1.122.17 1.066.45M269.257 80.311c2.916-.056 3.477-.056 3.702-.224.223-.225.335-1.066.335-4.43V64.555c0-2.41-.167-3.757-.448-3.982-.168-.223-.728-.28-3.645-.335-.17 0-.17-.953.056-.953 2.523 0 6.618-.056 8.917-.056.338 0 .394.166.394.56l-.225 5.55.169.057c1.963-3.869 4.375-7.066 8.356-7.066 4.376 0 6.9 2.805 6.9 8.131 0 2.131-.056 4.823-.056 7.57 0 4.767.169 5.776.45 6.056.167.224.671.224 3.364.336.17 0 .17.898-.055.898-4.488-.112-8.19-.056-11.667-.056-.281 0-.225-.898-.057-.898 1.683-.112 2.356-.169 2.58-.337.225-.223.225-.952.225-2.297 0-1.796-.056-11.216-.056-12.394 0-2.972-.898-4.71-3.197-4.71-2.75 0-5.048 2.973-6.227 5.384-.617 1.176-.785 1.907-.785 3.87 0 1.68.056 5.269.112 7.288.056 1.962.113 2.636.28 2.804.17.168.562.28 3.367.392.168 0 .168.954-.112.954-3.59-.112-9.144-.112-12.622 0-.28-.056-.224-1.01-.055-1.01M301.424 78.349c-1.85-1.85-3.252-4.375-3.252-7.85 0-2.972 1.235-5.888 3.477-8.188 2.188-2.185 5.049-3.868 8.862-3.868 5.05 0 8.976 3.027 8.976 6.112 0 2.186-1.515 3.421-3.141 3.421-1.627 0-2.862-1.235-2.862-2.637 0-.84.225-1.457.673-1.963.9-.897 2.131-.784 2.357-1.009.45-.447-1.795-2.746-5.723-2.746-2.973 0-4.597 1.458-5.44 3.14-.954 1.906-1.29 4.036-1.29 7.122 0 3.813.28 5.943 1.122 7.512.897 1.795 2.356 3.14 5.441 3.14 3.253 0 6.394-2.242 7.853-6.671.11-.45 1.178.056 1.066.446-1.571 4.655-5.048 7.57-9.704 7.57-3.253 0-6.227-1.345-8.415-3.531M329.577 61.863c-.897 1.794-1.233 4.038-1.345 6.785l11.387-.056c-.338-6.504-2.02-9.196-5.778-9.196-2.132 0-3.647 1.176-4.264 2.467m15.09 13.122c-1.797 4.878-5.89 7.007-9.648 7.007-3.703 0-7.067-1.512-9.367-3.811-2.02-2.019-3.255-4.543-3.255-8.13 0-2.972 1.403-5.944 3.31-7.907 2.3-2.298 5.104-3.869 8.526-3.869 3.365 0 6.058 1.457 7.853 3.252 1.57 1.57 2.917 4.374 2.973 7.737 0 .281-.112.393-.336.45-9.088-.057-13.575.055-16.491.168 0 3.588.504 5.83 1.235 7.344 1.12 2.188 2.86 3.365 6.112 3.365 3.59 0 6.395-2.017 8.022-6.056.224-.225 1.122.17 1.066.45M365.315 79.078c-1.74 1.682-4.488 2.522-6.956 2.522-4.487 0-6.618-1.57-7.236-1.57-.28 0-.672.618-1.177 1.907-.112.225-.898.168-.898-.056a190.554 190.554 0 0 0-.561-8.242c0-.224.897-.336.954-.112.673 2.076 1.514 3.925 2.58 4.99 1.346 1.345 3.702 2.019 6.17 2.019 2.075 0 3.478-.448 4.32-1.234.503-.56.952-1.514.952-2.747 0-1.907-1.402-2.859-6.338-4.15-3.758-1.009-5.496-1.738-6.62-2.86-.896-.897-1.401-2.13-1.401-3.59 0-4.204 3.814-7.287 8.245-7.287 3.422 0 5.833 1.793 6.395 1.793.28 0 .45-.447 1.234-2.355.056-.166.841-.112.897.055-.168 2.525-.168 4.936-.112 7.516 0 .392-.841.392-1.01.112-.729-1.851-1.457-3.196-2.3-3.982-1.178-1.234-2.747-2.074-5.272-2.074-1.627 0-2.86.504-3.645 1.29a3.344 3.344 0 0 0-.954 2.354c0 2.132 1.626 2.972 6.506 4.206 3.87 1.01 5.61 1.795 6.731 2.972 1.01 1.01 1.514 2.242 1.514 3.756 0 2.02-.898 3.589-2.018 4.767" fill="#FFF"/>
	<path fill="#FF5A0E" d="M.667 82.081h81.835V.273H.667z"/>
	<path fill="#FFF" d="M51.76 51.548v-8.152h7.515V38.02H51.76v-7.616h8.25v2.956h5.443v-8.287H43.662v5.331h2.04v21.144H43.67v5.375h10.057v-5.375zM40.827 44.886V30.403h2.014v-5.33h-10.08v5.33h1.965v12.682c0 5.317-.614 7.87-4.433 7.87-3.818 0-4.433-2.553-4.433-7.87V30.403h1.95v-5.33H17.716v5.33h2v14.483c0 3.162 0 5.754 1.492 8.083 1.668 2.637 4.696 4.311 9.085 4.311 7.769 0 10.534-4.046 10.534-12.394"/>
	</g>
</symbol>

<symbol id="college-logo-stacked" viewBox="0 0 368 83">
	<title>UF Liberal Arts and Sciences Logo</title>
	<g fill="none" fill-rule="evenodd">
	<path d="M101.842 2.009h8.065c.168 0 .168 1.008 0 1.008-4.536 0-4.984.056-5.152.224-.224.224-.28 1.734-.336 9.405 0 4.592-.056 6.888-.056 15.454 0 5.094.056 6.214.224 6.382.225.223 1.12.335 4.928.335 4.874 0 6.385-.335 7.505-1.399 1.066-1.062 2.129-3.526 3.865-10.693.111-.224.897-.168.897 0-.056 3.807-.224 9.685-.448 12.932 0 .281-.112.448-.617.448-4.313-.167-8.401-.112-14.17-.112-6.217 0-9.8 0-13.274.057-.168 0-.112-1.065.056-1.065 4.257-.055 4.873-.055 5.04-.223.169-.168.225-.953.225-4.478.056-6.72.168-13.774.168-19.99 0-5.15-.056-6.83-.28-7.053-.224-.224-.952-.282-4.816-.336-.168 0-.112-1.008.056-1.008a434 434 0 0 0 8.12.112M131.169 7.496c-1.735 0-3.08-1.624-3.08-3.192 0-.952.336-1.679.895-2.24.618-.672 1.458-1.064 2.633-1.064 1.625 0 3.025 1.344 3.025 2.968 0 1.848-1.793 3.528-3.473 3.528m-6.777 28.498c-.168 0-.224-.951 0-.951 3.137-.057 3.976-.057 4.201-.28.224-.225.28-.84.336-2.353.055-1.903.055-3.191.055-4.927 0-2.128-.112-7.613-.223-10.357 0-1.008-.112-1.567-.336-1.792-.225-.224-.672-.224-4.201-.28-.167 0-.167-.952 0-.952 2.913-.056 7.897-.167 9.074-.167.392 0 .559.11.559.503-.055 3.136 0 9.63 0 13.55 0 5.262.225 6.55.449 6.775.224.223.895.28 3.92.28.28 0 .28 1.008 0 1.008-1.12 0-12.994-.057-13.834-.057M147.607 19.422c-.672 1.4-.896 2.574-.896 5.038 0 5.991.17 7.558.56 8.287.504 1.063 3.024 2.63 5.098 2.63 1.96 0 3.416-.951 4.48-3.022.84-1.68 1.343-4.144 1.343-7.727 0-3.75-.504-6.326-1.23-7.781-.73-1.457-1.681-2.241-3.474-2.241-2.576 0-4.704 2.52-5.88 4.816m-1.793 14.221c-.28 0-1.12.727-3.416 3.079-.224.225-.84.112-.84-.224.112-2.855.224-8.622.224-15.788 0-4.2-.112-9.743-.224-15.342-.055-2.688-.112-3.528-.28-3.696-.169-.167-.56-.167-3.64-.167-.225 0-.225-.953 0-.953 2.967-.055 7.28-.223 8.85-.28.391 0 .446.225.446.561 0 1.231-.168 16.573-.168 18.029l.056.056c1.569-3.136 4.033-5.824 7.45-5.824 2.632 0 4.928 1.288 6.72 3.078 1.905 1.962 3.025 4.538 3.025 7.784 0 3.808-1.792 7-4.033 9.238-2.128 2.128-4.536 3.36-7.281 3.36-3.92 0-6.385-2.91-6.89-2.91M174.277 16.677c-.896 1.791-1.23 4.032-1.343 6.775l11.37-.056c-.337-6.495-2.017-9.183-5.77-9.183-2.128 0-3.64 1.176-4.257 2.464m15.067 13.102c-1.793 4.872-5.88 6.999-9.633 6.999-3.697 0-7.057-1.512-9.354-3.807-2.016-2.016-3.249-4.536-3.249-8.119 0-2.967 1.4-5.935 3.305-7.893 2.297-2.296 5.097-3.864 8.514-3.864 3.36 0 6.049 1.456 7.841 3.246 1.568 1.568 2.912 4.368 2.968 7.727 0 .279-.112.392-.336.448-9.074-.056-13.554.056-16.466.168 0 3.583.504 5.823 1.233 7.335 1.119 2.184 2.855 3.359 6.103 3.359 3.585 0 6.385-2.016 8.01-6.047.224-.224 1.12.168 1.064.448M194.906 34.763c.168-.17.28-2.073.335-3.472 0-2.016 0-7.335-.055-9.799 0-4.199-.28-5.879-.504-6.103-.226-.222-.672-.222-3.753-.278-.224 0-.224-1.008.056-1.008 2.24 0 7.113-.168 8.345-.168.784 0 .896.112.896.838-.056 1.4-.112 4.256-.112 6.328h.112c1.792-4.2 3.808-7.672 7.057-7.672 2.912 0 4.76 1.792 4.76 3.976 0 2.296-1.68 3.64-3.248 3.64-1.625 0-2.8-1.008-2.8-2.577 0-1.903 1.511-2.63 1.511-3.079 0-.222-.279-.446-.95-.446-1.737 0-3.53 2.238-4.873 5.038-1.064 2.128-1.457 3.64-1.457 5.487v5.095c.056 2.576.168 3.919.393 4.143.112.169 1.007.169 4.312.28.28 0 .28 1.065.056 1.065h-14.338c-.169 0-.225-1.008 0-1.008 3.64-.057 4.088-.112 4.257-.28M219.202 30.619c0 2.743.896 4.256 2.913 4.256 2.24 0 4.872-2.185 5.377-3.304.224-.392.28-.728.334-2.464.058-1.624.058-2.239.114-4.815-7.337.616-8.738 1.792-8.738 6.327m.112-14.557c0 .616 2.185.785 2.185 2.968 0 1.568-1.233 2.742-2.913 2.742-1.625 0-2.912-1.174-2.912-2.854 0-1.12.448-2.071 1.345-2.911 1.455-1.401 3.752-2.69 7.057-2.69 3.416 0 5.6 1.009 7.055 2.522 1.457 1.455 1.961 3.135 1.961 5.765 0 2.8-.168 7.671-.168 11.479 0 1.343.392 1.848 1.343 1.848 1.233 0 2.354-1.233 2.913-4.032.112-.168.84-.056.84.168-.504 3.135-2.24 5.487-5.208 5.487-2.8 0-4.592-1.511-5.152-3.751-1.85 2.128-4.202 3.639-7.001 3.695-3.306.056-6.721-2.24-6.721-5.599 0-1.4.504-2.688 1.68-3.807 1.847-1.905 5.153-3.304 12.322-3.808.056-.728 0-2.35 0-3.92 0-2.126-.28-3.192-1.009-3.918-.616-.615-1.792-1.064-3.417-1.064-2.52 0-4.2 1.288-4.2 1.68M248.009.44c.448 0 .559.224.559.672-.055 5.824-.111 10.639-.111 16.686 0 5.598-.056 10.245-.113 14.724 0 1.401.169 1.96.45 2.241.222.168.446.279 3.806.335.17 0 .225 1.007 0 1.007-4.929-.166-8.066-.166-13.273-.166-.17 0-.112-1.008.056-1.008 3.025 0 3.472-.056 3.64-.225.168-.168.168-.448.168-1.344.056-2.687.168-7.894.168-11.422 0-7.67 0-12.71-.112-18.756 0-1.008 0-1.287-.168-1.455-.167-.169-.504-.169-3.752-.337-.224-.056-.224-.952.056-.952 3.192.057 5.265.057 8.626 0M283.125 7.832c-2.52 5.934-5.04 11.59-7 16.124 3.416.17 9.52.28 12.88.28-1.567-4.76-4.144-11.87-5.768-16.404h-.112zm-13.553 26.203c.615-.616 1.343-1.736 2.24-3.64 4.648-10.022 9.298-20.38 12.713-29.282.112-.112.392-.224 1.066-.224.951 0 1.118.112 1.175.336 1.513 4.535 3.865 11.533 10.25 29.002.951 2.688 1.4 3.582 2.072 4.254.504.504 1.008.562 4.256.73.17 0 .17.952 0 .952-3.136-.058-5.433-.17-7.674-.17-2.575 0-4.086-.054-7.391.058-.112 0-.168-.952 0-.952 2.688-.168 3.36-.282 3.64-.618.28-.222.336-.672 0-1.902a378.409 378.409 0 0 0-2.52-7.167c-.952-.056-3.977-.11-8.402-.11-2.128 0-3.529 0-5.096.054-.225 0-.448 0-.56.279-.896 1.96-1.4 3.249-2.24 5.432-.337.952-.56 1.848-.56 2.408 0 1.23.503 1.4 4.255 1.624.113 0 .057.952-.055.952-3.025-.112-7.897-.112-11.426 0-.112 0-.112-.896 0-.896 2.913-.17 3.472-.338 4.257-1.12zM309.41 34.763c.169-.17.28-2.073.336-3.472 0-2.016 0-7.335-.055-9.799 0-4.199-.28-5.879-.504-6.103-.226-.222-.672-.222-3.753-.278-.225 0-.225-1.008.056-1.008 2.24 0 7.113-.168 8.345-.168.784 0 .896.112.896.838-.056 1.4-.112 4.256-.112 6.328h.112c1.792-4.2 3.808-7.672 7.057-7.672 2.912 0 4.76 1.792 4.76 3.976 0 2.296-1.68 3.64-3.247 3.64-1.626 0-2.801-1.008-2.801-2.577 0-1.903 1.511-2.63 1.511-3.079 0-.222-.279-.446-.95-.446-1.737 0-3.53 2.238-4.873 5.038-1.065 2.128-1.457 3.64-1.457 5.487v5.095c.056 2.576.168 3.919.392 4.143.112.169 1.007.169 4.313.28.28 0 .28 1.065.056 1.065h-14.339c-.168 0-.224-1.008 0-1.008 3.642-.057 4.09-.112 4.258-.28M339.112 36.442c-2.353 0-4.032-.728-5.265-1.96-1.008-1.007-1.512-2.24-1.512-4.703 0-3.64.056-10.022.168-14.445-.336-.056-3.361-.056-3.976-.056-.28 0-.224-1.064-.056-1.064 3.36-.168 4.368-.447 5.152-1.232 1.12-1.064 2.632-4.198 3.192-6.943.056-.279.896-.279.952 0-.167 1.904-.167 6.216-.224 8.007 2.24.056 5.937.056 6.834.056.335 0 .223 1.176-.057 1.176-4.424 0-6.16.056-6.777.112-.112 2.07-.224 8.287-.224 12.821 0 3.863.112 4.479.448 5.207.392.784 1.345 1.4 2.577 1.4 1.791 0 3.36-1.848 4.312-5.543.056-.224 1.009-.056.953.224-.953 4.591-3.248 6.943-6.497 6.943M365.318 33.867c-1.737 1.678-4.48 2.518-6.945 2.518-4.482 0-6.61-1.568-7.226-1.568-.28 0-.672.616-1.176 1.904-.112.226-.895.168-.895-.056a190.15 190.15 0 0 0-.561-8.23c0-.223.896-.335.952-.111.672 2.07 1.512 3.919 2.577 4.983 1.343 1.344 3.697 2.016 6.16 2.016 2.073 0 3.472-.448 4.313-1.232.504-.562.952-1.512.952-2.743 0-1.905-1.4-2.857-6.329-4.144-3.753-1.008-5.488-1.736-6.609-2.856-.896-.896-1.4-2.127-1.4-3.584 0-4.199 3.809-7.279 8.233-7.279 3.417 0 5.825 1.794 6.385 1.794.28 0 .448-.448 1.232-2.352.056-.168.84-.112.897.056-.168 2.518-.168 4.926-.112 7.501 0 .393-.842.393-1.009.113-.728-1.848-1.455-3.192-2.296-3.976-1.176-1.232-2.744-2.07-5.265-2.07-1.624 0-2.857.504-3.64 1.288a3.331 3.331 0 0 0-.952 2.35c0 2.128 1.624 2.968 6.497 4.199 3.864 1.008 5.6 1.793 6.72 2.968 1.008 1.007 1.512 2.24 1.512 3.75 0 2.017-.896 3.583-2.015 4.76" fill="#FFF"/>
	<path d="M97.435 72.73c-1.256 2.557-1.616 4.216-1.616 5.382 0 1.616 1.078 2.557 2.514 2.557 2.334 0 5.924-3.274 7.675-6.818 1.749-3.5 2.781-6.416 2.781-7.178 0-1.077-1.121-2.468-2.781-2.468-3.59 0-6.283 3.948-8.573 8.525m11.939-7.18c.492-.986 1.077-2.153 1.255-2.153.27 0 2.156.314 2.245.404.089.09.225.763.18.898-.54 1.211-3.143 7.492-4.624 11.349-.403.989-.673 2.38-.673 3.052 0 .762.45 1.3 1.123 1.3 1.077 0 2.378-.628 5.026-3.99.09-.093.674.312.63.401-2.514 3.367-4.22 4.801-6.376 4.801-1.525 0-3.185-1.077-3.185-2.825 0-.764.135-1.525.313-2.333-2.064 2.78-4.98 5.204-7.225 5.204-2.289 0-4.891-2.425-4.891-5.832 0-2.334.897-4.757 3.635-7.538 2.962-2.916 6.508-4.891 9.2-4.891 1.57 0 2.828.897 3.367 2.153M124.841 63.98c.134 0 .224.09.18.225-.315.942-1.885 5.293-2.334 6.416-.046.089.09.268.18.178 3.858-5.07 5.968-7.447 8.392-7.447 1.301 0 2.243.45 3.007 1.212.762.763 1.076 1.57 1.076 2.557 0 1.57-.538 2.602-2.199 6.057-1.615 3.41-2.154 4.711-2.154 5.653 0 .808.583 1.391 1.303 1.391 1.345 0 2.96-1.302 4.98-3.59.09-.09.72.405.628.494-1.48 1.794-4.307 4.441-6.461 4.441-.988 0-1.662-.314-2.334-.987-.629-.628-.943-1.391-.943-2.422 0-.896.449-2.423 2.11-5.833 1.705-3.499 2.153-4.62 2.153-5.698 0-1.077-.717-1.838-1.749-1.838-1.123 0-1.886.448-3.636 2.197-3.052 3.052-5.7 7.044-6.463 8.885-.672 1.704-1.57 3.677-2.198 5.248-.045.179-2.828.045-3.098.045-.09 0-.09-.09-.044-.225.584-1.3 3.725-8.39 4.398-10.005 1.66-4.17 1.975-5.832 1.884-5.92-.089-.091-4.128-.047-4.711-.091-.135 0-.045-.808.09-.808 2.558 0 7.72-.134 7.943-.134M144.189 71.518c-.987 1.93-1.66 4.038-1.66 5.966 0 2.155.808 3.455 2.827 3.455 1.436 0 2.917-.583 4.892-2.557 1.615-1.615 2.557-2.916 3.725-5.787 1.032-2.468 1.93-4.533 2.02-4.98-.36-1.975-1.661-3.5-3.815-3.5-3.231 0-6.104 3.59-7.99 7.403m12.343-5.204c0 .044.09.089.135 0 1.795-4.398 2.961-7.269 4.622-11.53.225-.629.134-.899.045-.988-.135-.133-3.052-.224-4.982-.224-.135 0-.135-.807.045-.807 2.468 0 5.88.09 8.842.045.133 0 .27.134.224.269-3.816 8.974-5.79 13.728-9.873 23.105-.539 1.256-.719 2.018-.719 2.826 0 .718.404 1.346 1.122 1.346 1.077 0 2.11-.585 3.635-2.11.673-.671 1.078-1.076 1.661-1.837.09-.092.673.358.584.447-2.379 3.007-4.488 4.757-6.33 4.757-1.973 0-3.5-1.346-3.5-2.963 0-.492 0-.672.091-1.255-2.289 2.827-4.533 4.396-7 4.396-1.527 0-3.097-.808-4.085-1.794-.898-.898-1.66-2.289-1.66-4.126 0-2.873 1.48-5.833 3.814-8.166 2.199-2.2 5.565-4.398 9.244-4.398 1.975 0 3.502 1.393 4.085 3.007" fill="#FF5A0E"/>
	<path d="M200.998 46.667c.056-.168.842-.056.842.114-.28 3.531-.393 6.671-.112 11.046 0 .166-.786.28-.898.056-1.515-3.925-2.805-6.168-4.208-7.57-1.514-1.515-3.477-2.411-6.394-2.411-3.027 0-4.823.841-6.113 2.13-1.122 1.122-1.794 2.747-1.794 4.486 0 3.7 2.467 4.878 8.862 6.56 5.833 1.571 8.637 2.971 10.32 4.655 1.458 1.457 2.188 3.14 2.188 5.831 0 5.943-5.272 10.317-11.891 10.317-6.058 0-9.087-2.972-10.265-2.972-.73 0-1.627 1.01-2.412 2.523-.112.225-.842.113-.842-.11.112-3.926.112-7.066-.392-12.225 0-.224.728-.338.842-.112 2.187 4.99 3.533 7.29 5.104 8.86 1.738 1.738 4.542 2.858 7.853 2.858 2.804 0 4.88-.727 6.113-1.962 1.18-1.178 1.738-2.523 1.738-4.485 0-3.59-2.243-5.329-8.861-7.01-5.834-1.513-8.526-2.746-10.153-4.43-1.458-1.458-2.132-3.083-2.132-5.72 0-5.437 4.938-10.26 11.948-10.26 5.833 0 8.356 2.466 8.862 2.466.45 0 1.179-1.288 1.795-2.635M210.871 78.349c-1.851-1.85-3.253-4.375-3.253-7.85 0-2.972 1.234-5.888 3.477-8.188 2.189-2.185 5.048-3.868 8.863-3.868 5.049 0 8.974 3.027 8.974 6.112 0 2.186-1.514 3.421-3.14 3.421-1.628 0-2.862-1.235-2.862-2.637 0-.84.225-1.457.674-1.963.898-.897 2.131-.784 2.357-1.009.448-.447-1.797-2.746-5.723-2.746-2.973 0-4.599 1.458-5.44 3.14-.954 1.906-1.29 4.036-1.29 7.122 0 3.813.28 5.943 1.122 7.512.897 1.795 2.355 3.14 5.44 3.14 3.253 0 6.395-2.242 7.852-6.671.113-.45 1.18.056 1.066.446-1.57 4.655-5.048 7.57-9.704 7.57-3.251 0-6.226-1.345-8.413-3.531M237.571 52.668c-1.739 0-3.085-1.627-3.085-3.197 0-.953.337-1.681.898-2.243.616-.673 1.459-1.065 2.637-1.065 1.626 0 3.029 1.345 3.029 2.972 0 1.85-1.796 3.533-3.479 3.533m-6.787 28.54c-.168 0-.224-.952 0-.952 3.141-.058 3.983-.058 4.207-.28.224-.226.28-.843.337-2.357.056-1.907.056-3.195.056-4.932 0-2.132-.113-7.628-.224-10.376 0-1.009-.112-1.569-.337-1.793-.225-.225-.673-.225-4.207-.281-.168 0-.168-.953 0-.953 2.917-.056 7.909-.168 9.087-.168.392 0 .56.112.56.505-.055 3.14 0 9.643 0 13.57 0 5.27.225 6.56.45 6.785.224.222.897.28 3.927.28.279 0 .279 1.009 0 1.009-1.123 0-13.014-.056-13.856-.056M252.418 61.863c-.898 1.794-1.234 4.038-1.346 6.785l11.387-.056c-.337-6.504-2.02-9.196-5.778-9.196-2.13 0-3.646 1.176-4.263 2.467m15.089 13.122c-1.795 4.878-5.89 7.007-9.648 7.007-3.702 0-7.067-1.512-9.367-3.811-2.019-2.019-3.254-4.543-3.254-8.13 0-2.972 1.402-5.944 3.31-7.907 2.3-2.298 5.105-3.869 8.525-3.869 3.367 0 6.06 1.457 7.853 3.252 1.571 1.57 2.917 4.374 2.973 7.737 0 .281-.112.393-.336.45-9.087-.057-13.574.055-16.491.168 0 3.588.505 5.83 1.235 7.344 1.12 2.188 2.86 3.365 6.112 3.365 3.59 0 6.395-2.017 8.022-6.056.224-.225 1.122.17 1.066.45M269.257 80.311c2.916-.056 3.477-.056 3.702-.224.223-.225.335-1.066.335-4.43V64.555c0-2.41-.167-3.757-.448-3.982-.168-.223-.728-.28-3.645-.335-.17 0-.17-.953.056-.953 2.523 0 6.618-.056 8.917-.056.338 0 .394.166.394.56l-.225 5.55.169.057c1.963-3.869 4.375-7.066 8.356-7.066 4.376 0 6.9 2.805 6.9 8.131 0 2.131-.056 4.823-.056 7.57 0 4.767.169 5.776.45 6.056.167.224.671.224 3.364.336.17 0 .17.898-.055.898-4.488-.112-8.19-.056-11.667-.056-.281 0-.225-.898-.057-.898 1.683-.112 2.356-.169 2.58-.337.225-.223.225-.952.225-2.297 0-1.796-.056-11.216-.056-12.394 0-2.972-.898-4.71-3.197-4.71-2.75 0-5.048 2.973-6.227 5.384-.617 1.176-.785 1.907-.785 3.87 0 1.68.056 5.269.112 7.288.056 1.962.113 2.636.28 2.804.17.168.562.28 3.367.392.168 0 .168.954-.112.954-3.59-.112-9.144-.112-12.622 0-.28-.056-.224-1.01-.055-1.01M301.424 78.349c-1.85-1.85-3.252-4.375-3.252-7.85 0-2.972 1.235-5.888 3.477-8.188 2.188-2.185 5.049-3.868 8.862-3.868 5.05 0 8.976 3.027 8.976 6.112 0 2.186-1.515 3.421-3.141 3.421-1.627 0-2.862-1.235-2.862-2.637 0-.84.225-1.457.673-1.963.9-.897 2.131-.784 2.357-1.009.45-.447-1.795-2.746-5.723-2.746-2.973 0-4.597 1.458-5.44 3.14-.954 1.906-1.29 4.036-1.29 7.122 0 3.813.28 5.943 1.122 7.512.897 1.795 2.356 3.14 5.441 3.14 3.253 0 6.394-2.242 7.853-6.671.11-.45 1.178.056 1.066.446-1.571 4.655-5.048 7.57-9.704 7.57-3.253 0-6.227-1.345-8.415-3.531M329.577 61.863c-.897 1.794-1.233 4.038-1.345 6.785l11.387-.056c-.338-6.504-2.02-9.196-5.778-9.196-2.132 0-3.647 1.176-4.264 2.467m15.09 13.122c-1.797 4.878-5.89 7.007-9.648 7.007-3.703 0-7.067-1.512-9.367-3.811-2.02-2.019-3.255-4.543-3.255-8.13 0-2.972 1.403-5.944 3.31-7.907 2.3-2.298 5.104-3.869 8.526-3.869 3.365 0 6.058 1.457 7.853 3.252 1.57 1.57 2.917 4.374 2.973 7.737 0 .281-.112.393-.336.45-9.088-.057-13.575.055-16.491.168 0 3.588.504 5.83 1.235 7.344 1.12 2.188 2.86 3.365 6.112 3.365 3.59 0 6.395-2.017 8.022-6.056.224-.225 1.122.17 1.066.45M365.315 79.078c-1.74 1.682-4.488 2.522-6.956 2.522-4.487 0-6.618-1.57-7.236-1.57-.28 0-.672.618-1.177 1.907-.112.225-.898.168-.898-.056a190.554 190.554 0 0 0-.561-8.242c0-.224.897-.336.954-.112.673 2.076 1.514 3.925 2.58 4.99 1.346 1.345 3.702 2.019 6.17 2.019 2.075 0 3.478-.448 4.32-1.234.503-.56.952-1.514.952-2.747 0-1.907-1.402-2.859-6.338-4.15-3.758-1.009-5.496-1.738-6.62-2.86-.896-.897-1.401-2.13-1.401-3.59 0-4.204 3.814-7.287 8.245-7.287 3.422 0 5.833 1.793 6.395 1.793.28 0 .45-.447 1.234-2.355.056-.166.841-.112.897.055-.168 2.525-.168 4.936-.112 7.516 0 .392-.841.392-1.01.112-.729-1.851-1.457-3.196-2.3-3.982-1.178-1.234-2.747-2.074-5.272-2.074-1.627 0-2.86.504-3.645 1.29a3.344 3.344 0 0 0-.954 2.354c0 2.132 1.626 2.972 6.506 4.206 3.87 1.01 5.61 1.795 6.731 2.972 1.01 1.01 1.514 2.242 1.514 3.756 0 2.02-.898 3.589-2.018 4.767" fill="#FFF"/>
	<path fill="#FF5A0E" d="M.667 82.081h81.835V.273H.667z"/>
	<path fill="#FFF" d="M51.76 51.548v-8.152h7.515V38.02H51.76v-7.616h8.25v2.956h5.443v-8.287H43.662v5.331h2.04v21.144H43.67v5.375h10.057v-5.375zM40.827 44.886V30.403h2.014v-5.33h-10.08v5.33h1.965v12.682c0 5.317-.614 7.87-4.433 7.87-3.818 0-4.433-2.553-4.433-7.87V30.403h1.95v-5.33H17.716v5.33h2v14.483c0 3.162 0 5.754 1.492 8.083 1.668 2.637 4.696 4.311 9.085 4.311 7.769 0 10.534-4.046 10.534-12.394"/>
	</g>
</symbol>

<symbol id="claslogo" viewBox="0 0 907.279 29.017">
	<title>CLAS Logo Mobile Version</title>
  	<path d="M7.427 26.781c-10.102-5.046-9.841-20.255.432-25.154C13.868-1.24 22.76.477 22.76 4.5c0 2.203-.788 2.555-4.983 2.228-7.588-.593-10.35 1.489-10.35 7.798 0 6.564 3.934 9.138 10.48 6.855 3.122-1.088 4.365-.989 5.553.442 2.147 2.587.667 4.307-5.081 5.904-6.232 1.73-5.462 1.797-10.952-.946zm29.683.835c-7.461-2.132-10.679-12.794-6.373-21.121 3.93-7.6 17.634-8.192 22.686-.98 4.33 6.184 1.183 19.84-4.981 21.613-5.768 1.659-7.04 1.713-11.332.488zm9.555-7.261c4.45-4.45 1.342-13.905-4.571-13.905-5.989 0-8.853 8.708-4.46 13.562 2.708 2.992 6.247 3.127 9.031.343zm98.474 7.838c-1.625-.32-4.54-2.467-6.476-4.768-2.96-3.519-3.417-5.112-2.867-9.997 1.178-10.448 8.8-15.228 19.63-12.311 4.11 1.106 5.355 2.024 4.779 3.523-.428 1.116-.778 2.25-.778 2.523 0 .272-2.936.147-6.525-.278-6.02-.713-6.709-.493-8.888 2.833-4.21 6.424.69 14.04 7.873 12.236 4.37-1.096 4.664-3.504.429-3.504-3.79 0-4.935-.995-3.988-3.464.48-1.251 2.875-1.87 7.242-1.87h6.524v6.034c0 5.032-.498 6.22-3 7.163-4.536 1.71-10.65 2.533-13.955 1.88zm70.667-.017c-4.586-.879-9.712-7.861-9.712-13.228 0-10.716 8.242-17.051 17.995-13.833 6.222 2.054 8.671 5.922 8.671 13.692 0 5.05-.702 7.134-3.272 9.704-1.8 1.8-4.151 3.272-5.225 3.272-1.073 0-2.75.216-3.727.48-.977.264-3.105.225-4.73-.087zm8.192-7.821c4.459-4.459 1.34-13.905-4.59-13.905-2.733 0-6.648 4.712-6.648 8 0 3.288 3.915 8 6.647 8 1.373 0 3.439-.943 4.591-2.095zm337.383 7.505c-7.135-1.685-8.9-3.184-6.928-5.882 1.42-1.942 2.367-2.106 5.434-.94 5.075 1.93 7.54 1.771 7.54-.485 0-1.043-2.028-2.565-4.506-3.383-9.263-3.057-11.378-10.06-4.568-15.125 3.04-2.26 4.476-2.485 9.333-1.46 4.443.937 5.74 1.812 5.74 3.871 0 2.215-.892 2.66-5.332 2.66-6.832 0-7.305 2.184-.946 4.36 2.72.93 5.696 2.696 6.612 3.922 5.309 7.099-2.366 14.826-12.379 12.462zm145.486-.525c-5.478-1.653-6.752-3.133-5.03-5.846.797-1.256 2.166-1.28 6.01-.1 3.728 1.145 5.361 1.147 6.5.009 1.137-1.138-.051-2.194-4.73-4.2-9.39-4.025-10.931-11.945-3.076-15.811 5.767-2.84 16.382.018 14.855 3.998-.609 1.586-2.18 1.897-6.888 1.367-7.692-.867-7.34 1.183.919 5.343 5.333 2.686 6.046 3.581 6.416 8.056.384 4.65.057 5.183-4.29 7-2.59 1.081-4.876 1.92-5.083 1.864-.207-.057-2.728-.812-5.603-1.68zm30.451.315c-6.456-1.823-9.07-5.657-9.07-13.302 0-5.466.648-7.306 3.621-10.278 3.014-3.012 4.742-3.603 10.288-3.522 7.293.107 9.817 1.592 8.507 5.006-.674 1.756-1.927 2.044-6.037 1.387-6.731-1.077-9.2.99-9.2 7.7 0 6.476 3.978 9.007 10.554 6.715 3.524-1.229 4.286-1.074 5.455 1.11 1.059 1.98.84 2.804-.992 3.744-4.117 2.11-8.895 2.635-13.126 1.44zm101.474.052c-2.182-.65-5.019-2.548-6.304-4.217-2.916-3.79-3.14-14.045-.39-17.97 3.029-4.324 10.023-6.186 16.592-4.417 4.732 1.274 5.265 1.786 4.107 3.95-1.059 1.979-2.376 2.347-6.445 1.8-3.701-.496-5.733-.066-7.353 1.554-3.059 3.058-2.815 9.113.487 12.101 2.327 2.106 3.492 2.262 7.971 1.066 4.721-1.26 5.33-1.136 6.084 1.24.896 2.823-1.222 4.92-5.005 4.954-1.223.011-3.023.268-4 .571-.977.303-3.561.02-5.744-.632zm52.075-.34c-5.635-1.73-6.753-3.153-4.847-6.17.992-1.569 1.86-1.63 4.708-.333 1.92.875 4.663 1.591 6.095 1.591 4.736 0 2.704-3.6-3.334-5.905-13.763-5.257-6.814-19.806 7.423-15.54 3.867 1.158 5.225 2.226 4.906 3.857-.358 1.827-1.666 2.166-6.905 1.788-7.883-.569-8.008 1.992-.23 4.685 8.346 2.89 10.892 8.281 6.41 13.577-3.058 3.615-7.781 4.428-14.226 2.45zM61.055 14.45l-.067-13.333h7.772v19.846l5.667.41c4.71.341 5.738.916 6.093 3.41.409 2.88.03 3-9.486 3h-9.912zm25.039 0V1.117h3.333c3.26 0 3.333.222 3.333 10v10h6c5.511 0 6 .271 6 3.333 0 3.238-.266 3.333-9.333 3.333h-9.333zm24 0V1.117h10c9.11 0 10 .237 10 2.666 0 2.272-.89 2.667-6 2.667-5.112 0-6 .395-6 2.667 0 2.222.888 2.666 5.333 2.666 4.444 0 5.333.445 5.333 2.667s-.889 2.667-5.333 2.667c-4.34 0-5.333.469-5.333 2.519 0 2.143.946 2.492 6.333 2.333 5.62-.165 6.381.152 6.76 2.814.411 2.899.061 3-10.334 3h-10.76zm58.666 0V1.117h10c9.111 0 10 .237 10 2.666 0 2.311-.889 2.667-6.666 2.667-5.778 0-6.667.356-6.667 2.667 0 2.222.889 2.666 5.333 2.666 4.445 0 5.334.445 5.334 2.667s-.89 2.667-5.334 2.667c-4.306 0-5.333.476-5.333 2.474 0 2.083 1.002 2.452 6.333 2.333 5.604-.124 6.383.205 6.76 2.86.41 2.884.037 3-9.667 3H168.76zm70.667 0V1.117h9.333c8.445 0 9.334.254 9.334 2.666 0 2.272-.89 2.667-6 2.667-5.512 0-6 .272-6 3.333 0 3 .533 3.334 5.333 3.334 4.444 0 5.333.444 5.333 2.666 0 2.223-.889 2.667-5.333 2.667-5.206 0-5.333.111-5.333 4.667 0 4.089-.413 4.666-3.334 4.666h-3.333zm37.333 0V1.117h3.334c3.257 0 3.333.227 3.333 9.923v9.923l5.667.41c4.71.341 5.738.916 6.092 3.41.408 2.869.012 3-9 3h-9.426zm24 0V1.117h6.667v26.666h-6.667zm14.667 0V1.117h8.46c6.836 0 8.935.525 10.934 2.733 2.066 2.284 2.232 3.373 1.008 6.616-1.155 3.06-1.07 4.21.4 5.43 2.814 2.335 2.239 7.474-1.099 9.812-1.918 1.343-5.916 2.075-11.333 2.075h-8.37zm14.504 6.795c2.77-1.754.518-4.128-3.916-4.128-3.033 0-3.921.604-3.921 2.666 0 2.86 4.35 3.671 7.837 1.462zm-1.333-10.666c1.01-.64 1.425-1.831.921-2.647-1.298-2.1-7.425-1.855-7.425.296 0 3.468 3.017 4.56 6.504 2.35zm14.829 3.871V1.117h10c9.111 0 10 .237 10 2.666 0 2.272-.889 2.667-6 2.667s-6 .395-6 2.667c0 2.222.889 2.666 5.333 2.666 4.445 0 5.334.445 5.334 2.667s-.89 2.667-5.334 2.667c-4.434 0-5.333.447-5.333 2.651 0 2.32.794 2.612 6.333 2.334 5.667-.285 6.378-.002 6.76 2.681.411 2.899.062 3-10.334 3h-10.76zm26.667 0V1.117h8.666c6.89 0 9.214.547 11.334 2.666 3.232 3.233 3.503 10.199.524 13.49-1.976 2.184-1.918 2.681.758 6.439l2.9 4.071h-3.661c-2.48 0-4.799-1.363-7.188-4.225-3.884-4.652-6.667-4.247-6.667.97 0 2.583-.688 3.255-3.333 3.255h-3.333zm15.787-3.174c.55-2.902-1.836-4.776-6.12-4.806-2.463-.016-3 .712-3 4.064 0 3.804.297 4.056 4.322 3.667 2.973-.287 4.47-1.2 4.798-2.925zm16.068 3.507c4.88-12.895 4.959-13.003 9.7-13.404l4.781-.404 4.832 12.47c2.657 6.86 4.832 12.891 4.832 13.405 0 1.848-6.768.888-7.518-1.067-.522-1.36-2.653-2-6.667-2-4.014 0-6.144.64-6.667 2-.428 1.117-2.41 2-4.49 2h-3.723zm11.776-2.398c-1.472-4.798-2.338-4.443-4.227 1.732-.78 2.55-.423 3 2.38 3 3.163 0 3.24-.196 1.847-4.732zm17.702 2.065V1.117h3.333c3.26 0 3.334.222 3.334 10v10h6c5.51 0 6 .271 6 3.333 0 3.238-.267 3.333-9.334 3.333h-9.333zm34.667 12.904c0-.236 2.288-6.086 5.086-13 4.965-12.272 5.197-12.58 9.746-12.97l4.66-.398 4.44 11.732c2.442 6.453 4.72 12.482 5.063 13.399.4 1.07-.637 1.666-2.895 1.666-1.934 0-3.863-.9-4.285-2-.537-1.4-2.722-2-7.291-2-4.91 0-6.524.495-6.524 2 0 1.334-1.334 2-4 2-2.2 0-4-.193-4-.429zm17.313-12.57c-.024-2.676-2.19-6.568-3.133-5.626-.346.347-1.044 2.28-1.55 4.295-.785 3.128-.509 3.664 1.892 3.664 1.796 0 2.804-.843 2.79-2.334zm17.353-.334V1.117h8.435c7.092 0 8.895.49 11.333 3.086 3.554 3.783 3.739 9.407.419 12.727-2.408 2.408-2.41 2.572-.03 5.667 3.27 4.252 3.129 5.186-.783 5.186-2.114 0-4.354-1.433-6.251-4-1.627-2.2-3.745-4-4.707-4-1.055 0-1.75 1.589-1.75 4 0 3.378-.518 4-3.332 4h-3.334zm15.525-2.017c1.084-2.826-1.917-5.983-5.688-5.983-2.633 0-3.17.677-3.17 4 0 3.565.44 4 4.042 4 2.378 0 4.36-.83 4.816-2.017zm18.974 13.684c-.092-.917-.243-5.567-.333-10.334l-.166-8.666-4.333-.418c-3.253-.314-4.333-1.061-4.333-3 0-2.363 1.02-2.582 12-2.582 11.11 0 12 .197 12 2.666 0 2.074-.89 2.667-4 2.667h-4v10.667c0 10.489-.056 10.666-3.334 10.666-1.833 0-3.409-.75-3.501-1.666zm61.424-11.334c4.968-12.788 5.126-13.006 9.732-13.404l4.682-.404 4.831 12.47c2.658 6.86 4.832 12.891 4.832 13.405 0 1.961-6.595.824-7.81-1.347-1.585-2.833-10.792-2.605-13.003.322-.815 1.077-3.018 1.958-4.897 1.958h-3.417zm13.41 1.82c0-.282-.816-2.455-1.813-4.827l-1.814-4.313-1.52 4.359c-1.952 5.602-2.057 5.295 1.814 5.295 1.834 0 3.334-.231 3.334-.514zm16-2.153c0-13.152.044-13.333 3.172-13.333 2.282 0 4.805 2.121 9 7.569l5.829 7.569.4-7.57c.371-7.034.63-7.568 3.666-7.568 3.25 0 3.267.072 3.267 13.333 0 13.287-.012 13.333-3.29 13.333-2.442 0-4.762-1.953-9-7.577l-5.71-7.576-.4 7.576c-.372 7.044-.63 7.577-3.667 7.577-3.249 0-3.266-.072-3.266-13.333zm33.334 0V1.117h8.102c7.178 0 8.548.445 12 3.897 3.057 3.057 3.898 5.092 3.898 9.436s-.84 6.38-3.898 9.436c-3.452 3.452-4.822 3.897-12 3.897h-8.102zm15.66 5.063c2.757-2.29 2.008-8.677-1.29-10.987-6.021-4.218-7.703-2.893-7.703 6.069v8.144l3.659-.918c2.012-.505 4.412-1.544 5.333-2.308zm83.007-5.063V1.117h6.666v26.666h-6.666zm14.666 0V1.117h10c9.111 0 10 .237 10 2.666 0 2.618-3.531 3.496-11 2.737-1.525-.155-2.333.688-2.333 2.436 0 2.192 1.02 2.748 5.655 3.084 4.125.3 5.775 1.041 6.098 2.743.37 1.951-.573 2.334-5.753 2.334-5.186 0-6.121.38-5.739 2.333.323 1.645 1.827 2.384 5.098 2.504 7.686.283 7.974.397 7.974 3.163 0 2.43-.889 2.666-10 2.666h-10zm26.667 0c0-13.037.068-13.333 3.077-13.333 2.202 0 4.666 2.165 8.667 7.614l5.59 7.614V8.731c0-7.233.166-7.614 3.333-7.614h3.333V14.45c0 12.957-.085 13.332-3 13.27-2.048-.045-4.8-2.452-8.667-7.584l-5.666-7.52V20.2c0 7.2-.169 7.583-3.334 7.583h-3.333zm60 0V1.117h10c9.111 0 10 .237 10 2.666 0 2.272-.889 2.667-6 2.667s-6 .395-6 2.667c0 2.222.889 2.666 5.333 2.666 4.445 0 5.334.445 5.334 2.667s-.89 2.667-5.334 2.667c-4.509 0-5.333.427-5.333 2.767 0 2.468.685 2.725 6.333 2.373 5.67-.353 6.378-.084 6.76 2.566.41 2.849.02 2.96-10.334 2.96h-10.76z" fill="#fff"/>
	<image src="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/logos/icon-collegelogo.png" xlink:href="">
</symbol>

<symbol id="search" viewBox="0 0 17 18">
	<circle fill="none" stroke="#FFF" stroke-width="2.292" cx="7" cy="7" r="5.8"/>
	<path fill="none" stroke="#FFF" stroke-width="2.292" d="M10.5 11.4l5.7 5.8"/>
</symbol>

<symbol id="icon-fivelines" viewBox="0 0 60 47">
	<rect x="5" y="19.8" width="48" height="6.4" rx="3" fill="#fff"/><rect x="5" y="38.6" width="48" height="6.4" rx="3" fill="#fff"/><rect x="5" y="1" width="48" height="6.4" rx="3" fill="#fff"/>
	<image src="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/icons/icon-fivelines.png" xlink:href="">
</symbol>
         
<symbol id="icon-close" viewBox="0 0 41.608 41.6">
	<path d="M35.514 6.09c-8.12-8.12-21.29-8.12-29.42 0-8.13 8.12-8.12 21.29 0 29.42 8.12 8.12 21.29 8.12 29.42 0 8.13-8.12 8.12-21.3 0-29.42zm-5.11 23.13l-1.18 1.18-8.44-8.42-8.4 8.38-1.18-1.18 8.4-8.38-8.4-8.38 1.18-1.18 8.4 8.38 8.44-8.42 1.18 1.18-8.44 8.42z" class="path1" fill="#4c87b5" fill-opacity=".941"/>
	<path d="M11.204 12.42l1.18-1.18 8.4 8.38 8.44-8.42 1.18 1.18-8.44 8.42 8.44 8.42-1.18 1.18-8.44-8.42-8.4 8.38-1.18-1.18 8.4-8.38z" fill="#fff"/>
	<image src="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/icons/icon-close.png" xlink:href="">
</symbol>
     
<symbol id="icon-search-close" viewBox="0 0 41.608 41.6">
	<path d="M35.514 6.09c-8.12-8.12-21.29-8.12-29.42 0-8.13 8.12-8.12 21.29 0 29.42 8.12 8.12 21.29 8.12 29.42 0 8.13-8.12 8.12-21.3 0-29.42zm-5.11 23.13l-1.18 1.18-8.44-8.42-8.4 8.38-1.18-1.18 8.4-8.38-8.4-8.38 1.18-1.18 8.4 8.38 8.44-8.42 1.18 1.18-8.44 8.42z" class="path1" fill="#00337a" fill-opacity=".941"/>
	<path d="M11.204 12.42l1.18-1.18 8.4 8.38 8.44-8.42 1.18 1.18-8.44 8.42 8.44 8.42-1.18 1.18-8.44-8.42-8.4 8.38-1.18-1.18 8.4-8.38z" fill="#fff"/>
	<image src="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/icons/icon-close.png" xlink:href="">
</symbol>

<symbol id="icon-angle-down" viewBox="0 0 21 32">
<path class="path1" d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z"></path>
</symbol>

<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="facebook" width="40px" height="40px" >

<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><rect class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path id="f" class="cls-2" d="M27.6,40V24.51h5.2l.78-6h-6V14.62c0-1.75.48-2.94,3-2.94h3.2V6.28A43.65,43.65,0,0,0,29.13,6c-4.61,0-7.76,2.81-7.76,8v4.45H16.15v6h5.22V40Z"/></g></g>

</symbol>

<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="instagram" width="40px" height="40px">
<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><rect class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M20,9.07c3.56,0,4,0,5.39.08a7.16,7.16,0,0,1,2.47.46,4.31,4.31,0,0,1,2.53,2.53,7.16,7.16,0,0,1,.46,2.47c.07,1.41.08,1.83.08,5.39s0,4-.08,5.39a7.16,7.16,0,0,1-.46,2.47,4.31,4.31,0,0,1-2.53,2.53,7.16,7.16,0,0,1-2.47.46c-1.41.07-1.83.08-5.39.08s-4,0-5.39-.08a7.16,7.16,0,0,1-2.47-.46,4.31,4.31,0,0,1-2.53-2.53,7.16,7.16,0,0,1-.46-2.47C9.08,24,9.07,23.56,9.07,20s0-4,.08-5.39a7.16,7.16,0,0,1,.46-2.47,4.31,4.31,0,0,1,2.53-2.53,7.16,7.16,0,0,1,2.47-.46C16,9.08,16.44,9.07,20,9.07m0-2.4c-3.62,0-4.08,0-5.5.08a9.57,9.57,0,0,0-3.23.62,6.7,6.7,0,0,0-3.9,3.9,9.57,9.57,0,0,0-.62,3.23c-.07,1.42-.08,1.88-.08,5.5s0,4.08.08,5.5a9.57,9.57,0,0,0,.62,3.23,6.7,6.7,0,0,0,3.9,3.9,9.57,9.57,0,0,0,3.23.62c1.42.07,1.88.08,5.5.08s4.08,0,5.5-.08a9.57,9.57,0,0,0,3.23-.62,6.7,6.7,0,0,0,3.9-3.9,9.57,9.57,0,0,0,.62-3.23c.07-1.42.08-1.88.08-5.5s0-4.08-.08-5.5a9.57,9.57,0,0,0-.62-3.23,6.7,6.7,0,0,0-3.9-3.9,9.57,9.57,0,0,0-3.23-.62c-1.42-.07-1.88-.08-5.5-.08Z"/><path class="cls-2" d="M20,13.15A6.85,6.85,0,1,0,26.85,20,6.85,6.85,0,0,0,20,13.15Zm0,11.29A4.44,4.44,0,1,1,24.44,20,4.44,4.44,0,0,1,20,24.44Z"/><circle class="cls-2" cx="27.12" cy="12.88" r="1.6"/></g></g>
</symbol>

<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="twitter" width="40px" height="40px">
<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><rect class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M33,11.94a10.84,10.84,0,0,1-3.06.84,5.37,5.37,0,0,0,2.34-2.95,10.69,10.69,0,0,1-3.39,1.29,5.33,5.33,0,0,0-9.22,3.65A5.34,5.34,0,0,0,19.8,16a15.12,15.12,0,0,1-11-5.57,5.35,5.35,0,0,0,1.65,7.12A5.24,5.24,0,0,1,8,16.87v.06a5.33,5.33,0,0,0,4.28,5.23,5,5,0,0,1-1.4.19,5.58,5.58,0,0,1-1-.09,5.35,5.35,0,0,0,5,3.7A10.89,10.89,0,0,1,7,28.17,15.16,15.16,0,0,0,30.35,15.39c0-.23,0-.46,0-.69A10.91,10.91,0,0,0,33,11.94Z"/></g></g>
</symbol>

<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" id="youtube" width="40" height="40">
<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><rect class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><g id="_Group_" data-name="&lt;Group&gt;"><path id="_Path_" data-name="&lt;Path&gt;" class="cls-2" d="M33.84,13a3.64,3.64,0,0,0-2.55-2.57C29,9.82,20,9.82,20,9.82s-9,0-11.29.61A3.64,3.64,0,0,0,6.16,13a38.33,38.33,0,0,0-.6,7,38.33,38.33,0,0,0,.6,7,3.64,3.64,0,0,0,2.55,2.57c2.26.61,11.29.61,11.29.61s9,0,11.29-.61A3.64,3.64,0,0,0,33.84,27a38.33,38.33,0,0,0,.6-7A38.33,38.33,0,0,0,33.84,13Z"/><polygon id="_Path_2" data-name="&lt;Path&gt;" class="footer-icon-color" points="17.05 24.3 24.6 20 17.05 15.71 17.05 24.3"/></g></g></g>

</symbol>

<symbol id="icon-email" class="icon-email" viewBox="0 0 1528 1024">
	
	<path d="M766.048 613.486h0.348c11.476 0 22.819-3.332 31.995-9.393l2.487-1.601c0.542-0.348 1.109-0.676 1.676-1.054l28.991-23.985 691.967-571.011c-1.432-1.974-3.874-3.327-6.471-3.327h-1505.388c-1.87 0-3.601 0.676-4.981 1.815l723.947 596.724c9.124 7.554 22.142 11.859 35.842 11.859zM3.108 83.805v846.445l518.64-418.95-518.64-427.475zM1006.916 514.12l518.093 416.319v-843.809l-518.093 427.5zM842.203 650.007c-20.653 16.945-47.666 26.285-76.035 26.285-28.476 0-55.465-9.286-76.065-26.151l-118.778-97.964-568.226 458.957v1.457c0 4.357 3.735 8.068 8.147 8.068h1505.736c4.327 0 8.037-3.705 8.037-8.095v-1.353l-567.728-456.167-115.043 94.955z"></path>
</symbol>



<symbol id="icon-footer-email" class="icon-footer-email" viewBox="0 0 40 40"  width="40" height="40">
<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><rect class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M26.24,23c0,1.78.48,2.26,1.37,2.26,1.47,0,3.67-1.37,3.73-6.47,0-6.18-4.14-10.26-10.86-10.26-7,0-11.82,4.68-11.82,11.69,0,6.82,4.46,11.12,11.18,11.12a17.16,17.16,0,0,0,7.77-1.72l.61,1.28A17,17,0,0,1,19.84,33C12.13,33,7,27.87,7,20.22,7,12.29,12.67,7,20.48,7,28.09,7,33,11.78,33,18.79,33,25.54,29.18,27,26.82,27c-1.53,0-2.9-.35-3.44-2.16A6.74,6.74,0,0,1,18.21,27C15,27,13,25,13,20.13s2.07-6.88,5.48-6.88a7.33,7.33,0,0,1,4.65,1.68V13.5h3.12Zm-3.12-5.49a5.06,5.06,0,0,0-3.57-1.62c-2.1,0-3.5,1.08-3.5,4.24,0,3.41,1.24,4.43,3.25,4.43,1.56,0,2.61-.77,3.82-1.88Z"/></g></g>
</symbol>




<symbol id="icon-footer-linkedin" class="icon-footer-linkedin" viewBox="0 0 40 40" width="40px" height="40px">

<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><rect class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M6.16,15.2h5.93V34.29H6.16Zm3-9.49A3.44,3.44,0,1,1,5.69,9.15,3.45,3.45,0,0,1,9.13,5.71"/><path class="cls-2" d="M15.82,15.2H21.5v2.61h.08a6.25,6.25,0,0,1,5.62-3.08c6,0,7.11,3.95,7.11,9.09V34.29H28.38V25c0-2.22,0-5.07-3.08-5.07s-3.56,2.42-3.56,4.91v9.44H15.82Z"/></g></g>

</symbol>





<symbol id="rss" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 40 40">

<defs><style>.footer-icon-color{fill:#9ad2e1;}.cls-2{fill:#00285e;}</style></defs><g data-name="Layer 2"><g data-name="Layer 1"><rect class="footer-icon-color" width="40" height="40" rx="2.21" ry="2.21"/><path class="cls-2" d="M29.06,34.44a23.44,23.44,0,0,0-6.88-16.62h0A23.44,23.44,0,0,0,5.56,10.94h0V5.56A28.87,28.87,0,0,1,34.44,34.44H29.06Zm-9.95,0H24.5A18.94,18.94,0,0,0,5.56,15.5v5.39h0a13.47,13.47,0,0,1,9.58,4h0a13.47,13.47,0,0,1,4,9.58Zm-9.7-7.71a3.86,3.86,0,1,0,3.86,3.86A3.85,3.85,0,0,0,9.41,26.73Z"/></g></g>

</symbol>


<symbol id="footer-icon-uf" class="footer-icon-uf"  viewBox="0 0 194.8 35.8">
	<title>UF Watermark Logo</title>
<path fill="#f45a1d" d="M56.1 1.2v33.9h1.5V1.2h-1.5"/><path fill="#ffffff" d="M169.1 10c.1.4.4.6.7.8.3.2.8.3 1.4.3.5 0 .9-.1 1.3-.2s.8-.4 1.2-.7c.4-.3.7-.5.9-.8.3-.3.5-.8.7-1.5.2-.6.3-1.3.3-1.9 0-.3 0-.6-.1-.9-.1-.3-.2-.5-.4-.7-.2-.2-.4-.4-.8-.5-.3-.1-.7-.2-1.2-.2s-1 .1-1.4.3c-.4.2-.9.4-1.2.7-.4.3-.6.5-.8.7-.2.3-.5.8-.7 1.4-.2.7-.3 1.3-.3 1.9.2.5.3.9.4 1.3zm1.8-3.5c.2-.8.5-1.4.7-1.7.3-.3.6-.4 1-.4s.7.1.9.4c.2.3.4.7.4 1.3 0 .7-.1 1.4-.3 2.2-.1.5-.3.9-.5 1.2-.2.3-.4.5-.6.7-.2.1-.4.2-.7.2-.4 0-.7-.1-1-.4-.2-.3-.3-.7-.3-1.3.1-.6.2-1.4.4-2.2zm6.8-1.7h1l-1.1 5.5c-.3 1.5-.5 2.5-.7 3-.1.2-.2.4-.3.5-.1.1-.2.1-.4.1-.1 0-.3-.1-.4-.2-.1-.1-.2-.3-.3-.5h-.2c-.1.3-.1.5-.2.7-.1.2-.2.5-.3.9.2.1.4.1.6.1.2 0 .5-.1.7-.2.5-.2.9-.6 1.4-1.2.5-.5.8-1.2 1.1-1.9.3-.7.6-1.8 1-3.4l.8-3.5h1.8c0-.2.1-.5.2-.8l-.1-.1c-.1.2-.3.2-.7.2h-1.2c.1-.6.3-1.3.4-1.9.1-.2.1-.4.2-.5l.3-.3c.1-.1.2-.1.4-.1s.3.1.5.2.4.3.6.7h.2c.1-.6.2-1.2.4-1.9-.1-.2-.3-.2-.5-.2-.3 0-.5 0-.7.1-.2.1-.5.3-1 .7-.5.4-1 .8-1.4 1.2-.3.3-.5.5-.6.8-.1.2-.2.4-.3.9 0 .2-.1.3-.1.4-.2.1-.5.2-.8.3-.3.1-.6.2-.7.2l-.1.4c.1-.2.3-.2.5-.2zM76.1 21.3h-1.3c0 .9-.1 1.5-.2 1.7-.1.2-.2.3-.3.3-.3.1-1.2.2-2.5.2-.5 0-1.3 0-2.6-.1v-2.1c0-2.6.1-4.4.2-5.4.3 0 .8 0 1.6-.1h1.4c.9 0 1.7.1 2.3.2.7.1 1.1.2 1.3.4.1 0 .1.1.1.1 0 .1.1.4.1.8.1.8.1 1.4.1 1.6h1.2c0-.7.1-1.4.1-2.3.1-.9.2-1.6.3-2.2l-.1-.2c-.9-.1-1.9-.2-2.9-.2l-7.3.1-5.4-.1v1.3c1 .1 1.6.1 1.8.2.2.1.4.1.4.2.1.1.1.1.1.2.1.3.1.9.2 1.7.1 2.7.1 4.1.1 4.2V28c0 .5 0 1.4-.1 2.6-.1 1.2-.1 2-.1 2.2-.1.4-.1.7-.2.8l-.2.2c-.2.1-.9.1-2 .1v1.2c1.9-.1 3.2-.1 4.1-.1l5.9.1V34c-1.4-.1-2.2-.2-2.4-.2-.2-.1-.3-.2-.4-.3-.1-.2-.2-.7-.2-1.7-.1-1-.1-2.6-.1-5v-1.7h1.2c1.6 0 2.8.1 3.5.2.3.1.5.2.5.3.1.3.2 1 .3 2.3h1.3c.2-2.7.2-4.9.2-6.6zm8.4 13.8c.7 0 1.8 0 3.5.1 2.2.1 3.4.1 3.6.1 1.3 0 2.2 0 2.9-.1.3 0 .6-.1.9-.2 0-.2.1-.8.1-1.7l.4-3.1v-.5h-1.2c-.2 1-.4 1.9-.6 2.6-.1.3-.2.5-.3.6-.2.1-.4.1-.8.2-1.1.2-2.5.3-4 .3-.5 0-1.5 0-2.8-.1v-2.6-4.3V22c0-1.7 0-3.1.1-4.2 0-1.1.1-1.7.1-1.9 0-.1.1-.2.2-.3.3-.1.9-.2 2.1-.3V14c-1.6.1-3.4.1-5.2.1-1.6 0-3.1 0-4.4-.1v1.3c1.3.1 2.1.2 2.3.3.1.1.2.2.2.3.1.3.2 1.4.2 3.3v5.9c0 2.2 0 4-.1 5.6 0 1.6-.1 2.5-.1 2.7 0 .1 0 .1-.1.2s-.2.2-.4.3c-.5.3-.8.5-1.1.6v.8c2-.2 3.5-.2 4.5-.2zm13-4.2c.9 1.6 2.2 2.8 3.8 3.6 1.6.8 3.6 1.2 5.8 1.2 2.1 0 4-.3 5.6-1 1.2-.5 2.3-1.2 3.2-2.2.9-.9 1.6-2 2.1-3.2.7-1.6 1-3.4 1-5.3 0-1.1-.1-2.1-.3-3.1-.2-.9-.6-1.8-1-2.6s-1.1-1.5-1.9-2.3c-.9-.7-1.8-1.3-2.9-1.7-1.5-.5-3.2-.8-5-.8-1.8 0-3.5.3-5.1.8-1.2.4-2.3 1.1-3.4 2.1-1 1-1.8 2.1-2.4 3.5-.6 1.4-.8 3-.8 4.8 0 2.6.4 4.6 1.3 6.2zm4-11.4c.5-1.4 1.2-2.4 2.3-3.1 1-.7 2.3-1 3.8-1 1.3 0 2.3.2 3.1.7.8.4 1.5 1.1 2 1.9.6.8 1 1.8 1.3 3 .3 1.2.5 2.5.5 3.9 0 2.1-.3 3.8-.9 5.3-.6 1.4-1.4 2.5-2.4 3.1-1 .6-2.1.9-3.4.9-1.4 0-2.6-.3-3.6-1-1-.6-1.8-1.7-2.5-3.3-.6-1.5-1-3.5-1-5.8.1-1.8.3-3.3.8-4.6zm19.8-3.9c.1.1.2.1.2.3.1.3.2 1 .2 2.3l.1 3.2V27l-.1 4.4c0 .8-.1 1.4-.2 1.8 0 .2-.1.4-.1.4-.1.1-.1.1-.3.2-.2.1-.9.1-2 .2v1.3c1.3-.1 2.8-.1 4.4-.1 1.8 0 3.5 0 5.2.1V34c-1 0-1.6 0-1.8-.1-.2 0-.3-.1-.4-.2-.1-.1-.2-.1-.2-.2-.1-.2-.1-.5-.2-1.1 0-.3-.1-1.5-.1-3.5v-4.8c0-1 0-2.9.1-5.7 0-1.3.1-2.1.1-2.5.5-.1 1-.1 1.4-.1 1.1 0 1.8.1 2.3.2.7.2 1.2.7 1.7 1.3.4.6.7 1.4.7 2.3 0 .9-.2 1.7-.6 2.5-.4.7-.9 1.3-1.6 1.5-.6.3-1.5.4-2.7.4l-.2.5c.3.2.6.6.9 1l2.4 3.6 3.2 5.3c.2.4.3.6.4.9.8 0 1.6-.1 2.4-.1.7 0 1.8 0 3.4.1V34c-.5 0-.8 0-1-.1-.2-.1-.3-.2-.5-.4s-.6-.8-1.4-1.8c-.1-.1-.4-.6-1-1.5l-2.3-3.5c-.1-.1-.1-.2-.2-.3-.1-.1-.2-.4-.6-.9-.3-.5-.6-.9-.9-1.4 1.6-.6 2.7-1.4 3.5-2.4.8-1 1.1-2.1 1.1-3.3 0-1-.3-1.9-.8-2.6-.6-.7-1.2-1.2-2-1.4-.8-.2-2-.3-3.6-.3-.8 0-1.9 0-3.1.1-.8 0-1.7.1-2.7.1h-2.9c-1.4 0-2.2-.1-2.4-.1v1.2c1.2 0 2 .1 2.2.2zm24.2-1.5c-1.6 0-3.1 0-4.4-.1v1.3c1.1 0 1.7.1 1.9.1.2 0 .3.1.4.2.1.1.1.2.1.3.1.3.1 1.1.2 2.4v10.2c0 1 0 2.2-.1 3.4-.1.8-.1 1.3-.1 1.4 0 .1-.1.2-.1.2-.1.1-.2.1-.4.2-.2 0-.8.1-1.8.1v1.3c1.3-.1 2.7-.1 4.4-.1 1.9 0 3.6 0 5.3.1v-1.3c-1 0-1.6-.1-1.8-.1-.2 0-.4-.1-.5-.2-.1-.1-.2-.2-.2-.3-.1-.3-.2-1-.2-2V22.3c0-.2 0-1.5.1-4v-1.5c0-.5.1-.8.2-1 0-.1.1-.2.2-.2.1-.1.2-.1.4-.2.2 0 .8-.1 1.8-.1V14c-1.8.1-3.6.1-5.4.1zm11.7 21l4.5.1c2 0 3.8-.2 5.2-.7 1.4-.5 2.8-1.2 4-2.2 1.2-1 2.2-2.3 2.9-3.8.7-1.5 1.1-3.2 1.1-5.2 0-1.5-.2-2.9-.7-4.2-.3-.8-.7-1.5-1.2-2.1-.5-.7-1.2-1.2-2-1.7s-1.7-.8-2.8-1c-1.1-.2-2.5-.3-4.3-.3-.8 0-1.8 0-3.1.1-1.8.1-3 .1-3.6.1l-5.5-.1v1.2c1.1.1 1.7.2 1.9.3s.3.1.4.2c.1.1.1.1.1.2.1.4.2 1.3.2 2.7.1 2.6.1 4.5.1 5.9V27c0 3-.1 5.2-.2 6.6-.3.2-.7.5-1 .7-.2.1-.3.2-.4.2v.7l4.4-.1zm1.3-7.7v-3.5c0-4 .1-6.7.2-8.1.9-.1 1.8-.2 2.6-.2 2.1 0 3.6.2 4.6.5 1 .4 1.9.9 2.5 1.8.7.8 1.1 1.7 1.4 2.8.3 1.1.4 2.2.4 3.3 0 1.3-.1 2.4-.4 3.5-.3 1.1-.7 2-1.2 2.8-.5.8-1.1 1.4-1.7 1.8-.6.4-1.2.7-2 .9-1 .3-2.2.4-3.6.4-.9 0-1.8-.1-2.7-.2-.1-.8-.1-2.8-.1-5.8zm17.2 7.7l3.5.1V34c-1.2 0-1.9-.1-2.2-.3-.2-.1-.2-.3-.2-.5 0-.3.3-1.2.8-2.6l.7-1.8h7.8l1.3 3.3c.2.6.3 1 .3 1.2 0 .2-.1.3-.2.4-.2.1-.8.2-2.1.2v1.2l5.3-.1 4.2.1V34c-.3 0-.5-.1-.7-.1-.5 0-.8-.1-.9-.1-.1 0-.2-.1-.3-.2-.1-.1-.2-.2-.3-.4l-.6-1.4-.9-2.1-6.8-15.8h-2.2l-1.3 3.4-3.9 9.8c-.7 1.8-1.3 3.1-1.5 3.7-.6 1.3-.9 2.1-1 2.3-.1.2-.2.4-.3.5-.1.1-.2.2-.4.2s-.6.1-1.5.2v1.2l3.4-.1zm6.3-15.9l3.2 7.8H178.9l3.1-7.8zM63.1 1.8l.2.2c0 .1.1.2.1.4V8c0 .2.1.5.2.8.1.3.3.5.6.7.3.2.6.4 1 .5.6.2 1.2.3 1.8.3.6 0 1-.1 1.5-.2.4-.1.8-.3 1.1-.5.3-.2.5-.5.7-.8.2-.3.3-.6.3-1 .1-.4.1-.8.1-1.2V5.1 3.3c0-.8.1-1.2.1-1.3 0-.1.1-.2.1-.2.1-.1.3-.1.7-.1v-.5h-3v.5c.5 0 .8.1.9.1.1 0 .1.1.1.2s.1.4.1 1v3.3c0 .9-.1 1.5-.2 1.8-.1.3-.4.6-.7.8-.3.2-.8.3-1.4.3-.5 0-.9-.1-1.3-.2-.3-.2-.6-.3-.7-.6-.2-.2-.3-.6-.3-1V3.8c0-.9 0-1.5.1-1.7 0-.1.1-.2.1-.2.1-.1.4-.1.9-.1v-.6h-4.1v.5l1 .1zm11.3 8.3H77.5v-.6h-.1c-.1 0-.3 0-.6-.1-.1 0-.2 0-.2-.1l-.1-.1c0-.1-.1-.4-.1-.9V3.2c2.5 3.1 4.4 5.4 5.8 6.9.4.1.7.1 1.1.2l.1-.1c-.1-.6-.1-2.3-.1-5.1V3.4c0-.8.1-1.2.1-1.5 0 0 0-.1.1-.1.1-.1.4-.1.9-.1v-.5h-3v.5c.6 0 .9.1 1 .1.1 0 .1.1.1.3.1.4.1 1.7.1 4v1.5c-.6-.6-1.3-1.4-2.2-2.5-1.2-1.5-2.3-2.8-3.2-3.9h-2.7v.5c.4 0 .7.1.8.1.1 0 .2.1.2.1s.1.1.1.2V7.9c0 .6-.1 1-.1 1.2 0 .1 0 .2-.1.2l-.1.1c-.1 0-.4 0-.9.1v.6zM89 1.2h-1.8v.6c.5 0 .7 0 .8.1.1 0 .1 0 .2.1 0 0 0 .1.1.1 0 .1.1.5.1 1V7.4c0 .4 0 .9-.1 1.4v.6s0 .1-.1.1c0 0-.1.1-.2.1h-.8v.6h4v-.7h-.8c-.1 0-.2 0-.2-.1l-.1-.1c0-.1-.1-.4-.1-.9V4.7 3v-.6c0-.2 0-.3.1-.4 0 0 0-.1.1-.1 0 0 .1-.1.2-.1h.8v-.6H89zm10.1 8.9c.3-.7.8-2 1.5-3.7l.9-2 .5-1.1c.4-.9.6-1.4.7-1.4.1-.1.3-.1.7-.1v-.6h-3v.6H101.3s.1 0 .1.1v.4c0 .2-.2.5-.3 1-.3.7-.4 1.1-.5 1.2L99.2 8l-1.6-4v-.1l-.3-.6c-.3-.7-.4-1.1-.4-1.2 0-.1 0-.1.1-.2 0 0 .1-.1.2-.1.2 0 .4-.1.8-.1v-.5H93.8v.6c.4 0 .7 0 .8.1.1 0 .2.2.4.6.2.3.6 1.3 1.3 3l.9 2.2c.3.8.7 1.6 1 2.5h.9v-.1zm9.2-.1h4.3l.1-.1c0-.5 0-1.2.1-2.1h-.5c-.1.6-.2.9-.2 1.2 0 .1-.1.1-.1.1-.1.1-.3.1-.7.1h-2.5V5.8h1c.5 0 .8 0 1.1.1.1 0 .2.1.3.2.1.1.1.4.1.9h.5V4.2h-.5c0 .4 0 .6-.1.8 0 .1-.1.1-.1.1h-2.3V3.8c0-.7 0-1.4.1-1.8h1.2c.4 0 .8 0 1.2.1.3 0 .5.1.5.1l.1.1c0 .1 0 .4.1.9h.5c0-.5.1-.9.1-.9l.1-.9v-.1H106.1v.5c.5 0 .8.1.9.1l.1.1c0 .1.1.4.1.9V7c0 .3 0 .9-.1 1.6 0 .4 0 .7-.1.9-.2.1-.4.2-.6.4v.3c1.1-.2 1.8-.2 1.9-.2zm8.4-8.2l.1.1c0 .1.1.4.1 1v3.7l-.1 1.9c0 .3 0 .6-.1.7 0 .1 0 .1-.1.2l-.1.1c-.1 0-.4.1-.9.1v.6h4v-.7h-.7c-.1 0-.1 0-.2-.1l-.1-.1c0-.1-.1-.2-.1-.5V7.3v-2-2.4-1c.2 0 .4-.1.6-.1.5 0 .8 0 1 .1.3.1.5.3.7.5.2.3.3.6.3 1s-.1.7-.3 1c-.2.3-.4.5-.7.6-.3.1-.6.2-1.1.2l-.1.2c.1.1.3.2.4.4.3.4.6.9 1 1.5l1.4 2.2c.1.1.1.3.2.4h2.4v-.4c-.2 0-.3 0-.4-.1-.1 0-.1-.1-.2-.2s-.3-.3-.6-.7c0 0-.2-.2-.4-.6l-1-1.5s0-.1-.1-.1l-.2-.4c-.1-.2-.3-.4-.4-.6.7-.2 1.1-.6 1.5-1 .3-.4.5-.9.5-1.4 0-.4-.1-.8-.3-1.1-.2-.3-.5-.5-.8-.6-.3-.1-.8-.1-1.5-.1H115.8v.5c.5.2.8.2.9.2zm16.4.7c0-.3.1-.5.1-.8l-.1-.2c-.3-.2-.7-.3-1.1-.3-.4-.1-.9-.1-1.3-.1s-.9 0-1.3.1-.8.3-1.1.5c-.3.2-.6.5-.8.9-.2.4-.3.8-.3 1.3 0 .3.1.7.2.9.1.3.3.5.5.8.2.2.5.4.9.5.2.1.7.2 1.5.3.5.1.9.2 1.1.4.2.1.4.3.5.5.1.2.1.4.1.7 0 .3-.1.6-.2.9s-.4.4-.7.6c-.3.1-.7.2-1.1.2-.5 0-.9-.1-1.3-.3-.4-.2-.7-.4-.8-.7-.1-.5-.1-.8-.1-1.1h-.5c0 1-.1 1.7-.2 2.2.5.2.9.4 1.3.5.4.1.9.1 1.4.1.7 0 1.3-.1 1.8-.3.3-.1.6-.3.9-.6.3-.3.5-.5.7-.8.2-.4.3-.9.3-1.4 0-.3 0-.6-.1-.8-.1-.2-.2-.5-.3-.6-.1-.2-.3-.3-.5-.4-.2-.1-.5-.2-.8-.3-.1 0-.4-.1-.9-.2-.4-.1-.8-.1-1-.2-.3-.1-.6-.2-.7-.3-.2-.1-.3-.2-.4-.4-.1-.2-.1-.4-.1-.7 0-.4.2-.7.5-1 .3-.3.8-.4 1.3-.4.4 0 .8.1 1.1.2.3.1.6.3.7.5 0 .2.1.5.1 1h.5c.1-.6.1-1 .2-1.2zm5.6-1.3h-1.8v.6c.5 0 .7 0 .8.1.1 0 .1 0 .2.1 0 0 0 .1.1.1 0 .1.1.5.1 1V7.4c0 .4 0 .9-.1 1.4v.6s0 .1-.1.1c0 0-.1.1-.2.1h-.8v.6h4v-.7h-.8c-.1 0-.2 0-.2-.1l-.1-.1c0-.1-.1-.4-.1-.9V4.7 3v-.6c0-.2 0-.3.1-.4 0 0 0-.1.1-.1 0 0 .1-.1.2-.1h.8v-.6h-2.2zm8.8 8.8c.6 0 1.3 0 2.1.1v-.5c-.5 0-.8-.1-.9-.1-.1-.1-.2-.1-.2-.2 0-.2-.1-.7-.1-1.6V3.8 2.1h.9c.5 0 .9 0 1.3.1h.2s.1.1.1.3c0 .3.1.6.1.9h.5V2c0-.2 0-.4.1-.7l-.1-.1h-8l-.1.1c0 .2 0 .4.1.6v1.5h.5c0-.4 0-.7.1-1 0-.1 0-.2.1-.2 0 0 .1 0 .2-.1h2.1v5.5c0 .9 0 1.5-.1 1.6 0 .1-.1.2-.2.3-.1.1-.4.1-.9.1v.5c.9-.1 1.6-.1 2.2-.1zm10.4-6.4c-.3-.6-.6-1.1-.9-1.6-.2-.3-.4-.5-.5-.6-.1-.1-.3-.2-.6-.4-.2.1-.5.1-.7.2l-1.3.3V2h.6c.1 0 .2.2.5.4.3.3.7.8 1 1.4.5.7.9 1.4 1.3 2.2.2.3.2.5.2.6V9c0 .2 0 .3-.1.4 0 0-.1.1-.2.1s-.4 0-.8.1v.6h4.1v-.7c-.5 0-.8 0-.8-.1-.1 0-.2-.1-.2-.1 0-.1-.1-.2-.1-.4V6.7v-.5c0-.1.1-.3.2-.5.1-.3.5-.9 1.1-1.8.6-.9 1.1-1.7 1.7-2.4v-.3h-1c-.1.1-.2.4-.4.8-.7 1.2-1.1 1.9-1.2 2.1l-.8 1.3c-.3-.2-.6-.8-1.1-1.8z"/><g fill="#ffffff"><path d="M36.2 29.4v-8.7h8V15h-8V6.9H45V10h5.8V1.2H27.6v5.7h2.2v22.5h-2.2v5.7h10.7v-5.7h-2.1M24.6 22.3V6.9h2.1V1.2H16v5.7h2.1v13.5c0 5.7-.7 8.4-4.7 8.4S8.7 26 8.7 20.4V6.9h2.1V1.2H0v5.7h2.1v15.4c0 3.4 0 6.1 1.6 8.6 1.8 2.8 5 4.6 9.7 4.6 8.2 0 11.2-4.3 11.2-13.2z"/></g><path fill="#ffffff" d="M169.1 10c.1.4.4.6.7.8.3.2.8.3 1.4.3.5 0 .9-.1 1.3-.2s.8-.4 1.2-.7c.4-.3.7-.5.9-.8.3-.3.5-.8.7-1.5.2-.6.3-1.3.3-1.9 0-.3 0-.6-.1-.9-.1-.3-.2-.5-.4-.7-.2-.2-.4-.4-.8-.5-.3-.1-.7-.2-1.2-.2s-1 .1-1.4.3c-.4.2-.9.4-1.2.7-.4.3-.6.5-.8.7-.2.3-.5.8-.7 1.4-.2.7-.3 1.3-.3 1.9.2.5.3.9.4 1.3zm1.8-3.5c.2-.8.5-1.4.7-1.7.3-.3.6-.4 1-.4s.7.1.9.4c.2.3.4.7.4 1.3 0 .7-.1 1.4-.3 2.2-.1.5-.3.9-.5 1.2-.2.3-.4.5-.6.7-.2.1-.4.2-.7.2-.4 0-.7-.1-1-.4-.2-.3-.3-.7-.3-1.3.1-.6.2-1.4.4-2.2zm6.8-1.7h1l-1.1 5.5c-.3 1.5-.5 2.5-.7 3-.1.2-.2.4-.3.5-.1.1-.2.1-.4.1-.1 0-.3-.1-.4-.2-.1-.1-.2-.3-.3-.5h-.2c-.1.3-.1.5-.2.7-.1.2-.2.5-.3.9.2.1.4.1.6.1.2 0 .5-.1.7-.2.5-.2.9-.6 1.4-1.2.5-.5.8-1.2 1.1-1.9.3-.7.6-1.8 1-3.4l.8-3.5h1.8c0-.2.1-.5.2-.8l-.1-.1c-.1.2-.3.2-.7.2h-1.2c.1-.6.3-1.3.4-1.9.1-.2.1-.4.2-.5l.3-.3c.1-.1.2-.1.4-.1s.3.1.5.2.4.3.6.7h.2c.1-.6.2-1.2.4-1.9-.1-.2-.3-.2-.5-.2-.3 0-.5 0-.7.1-.2.1-.5.3-1 .7-.5.4-1 .8-1.4 1.2-.3.3-.5.5-.6.8-.1.2-.2.4-.3.9 0 .2-.1.3-.1.4-.2.1-.5.2-.8.3-.3.1-.6.2-.7.2l-.1.4c.1-.2.3-.2.5-.2z"/></symbol>
   <image src="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/logos/UFlogoFooter.png" xlink:href="">
</symbol>



<symbol id="icon-arrow-left" viewBox="0 0 75 75">
<style>.cls-1{fill:#bc581a;}</style><g data-name="Layer 2"><g data-name="Layer 1"><path class="cls-1" d="M37.5,0A37.5,37.5,0,1,1,0,37.5,37.72,37.72,0,0,1,37.5,0Zm0,5.2A32.39,32.39,0,1,0,69.8,37.5,32.28,32.28,0,0,0,37.5,5.2Zm2.87,48.09L27.63,40.55H57.06V34.63H27.63L40.37,22.07l-4.13-4.31L17,37.5l19.2,20.1Z"/></g></g>
</symbol>


<symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 53.5" id="caret" class="icon-caret"><path fill="none" stroke="currentColor" stroke-width="10" stroke-linecap="round" stroke-miterlimit="10" d="M5 5l21.9 21.7L5 48.5"/></symbol>

<symbol id="header-line" class="icon-header-line" viewBox="0 0 9.3327619 5.4591612">
  <rect
     y="4.5054784"
     x="1.0463169"
     height="0.90736622"
     width="199.90736"
     id="rect3140"
     style="fill:#bc581a;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:0.09263377px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />


</symbol>

<symbol id="icon-arrow-right" viewBox="0 0 75 75">
<style>.cls-1{fill:#f45a1d;}</style>
<g data-name="Layer 2"><g data-name="Layer 1"><path class="cls-1" d="M75,37.5A37.5,37.5,0,1,1,37.5,0,37.6,37.6,0,0,1,75,37.5Zm-69.8,0A32.3,32.3,0,1,0,37.5,5.2,32.31,32.31,0,0,0,5.2,37.5ZM38.76,57.6,58,37.5,38.76,17.76l-4.13,4.31L47.37,34.63H17.94v5.92H47.37L34.63,53.29Z"/></g></g>
</symbol>

<symbol id="icon-search" viewBox="0 0 30 32">
<path class="path1" d="M20.571 14.857q0-3.304-2.348-5.652t-5.652-2.348-5.652 2.348-2.348 5.652 2.348 5.652 5.652 2.348 5.652-2.348 2.348-5.652zM29.714 29.714q0 0.929-0.679 1.607t-1.607 0.679q-0.964 0-1.607-0.679l-6.125-6.107q-3.196 2.214-7.125 2.214-2.554 0-4.884-0.991t-4.018-2.679-2.679-4.018-0.991-4.884 0.991-4.884 2.679-4.018 4.018-2.679 4.884-0.991 4.884 0.991 4.018 2.679 2.679 4.018 0.991 4.884q0 3.929-2.214 7.125l6.125 6.125q0.661 0.661 0.661 1.607z"></path>
</symbol>

<symbol id="icon-search-thin-open" viewBox="0 0 28 28">
  <path d="M10.5 19a8.437 8.437 0 1 1 0-16.875c2.25.02 4.402.917 6 2.5A8.437 8.437 0 0 1 10.5 19zM28 26.625l-9.5-9.5a10.356 10.356 0 0 0-.625-13.875C13.836-.789 7.289-.789 3.25 3.25s-4.039 10.586 0 14.625a10.012 10.012 0 0 0 7.25 3 10.476 10.476 0 0 0 6.625-2.375l9.5 9.5L28 26.625z" fill-rule="nonzero" fill="#FFF"/>
</symbol>

<symbol id="journeys-begin" viewBox="0 0 334 66">
  	<title>Journeys Begin Here</title>
	<g fill="none" fill-rule="evenodd">
    <path d="M.667 40.617H334V.777H.667v39.84zm2.299-2.3H331.7V3.077H2.966v35.242z" fill="#FF5A0E"/>
    <path d="M23.685 22.083c0 3.774-1.332 5.476-4.518 5.476-1.46 0-3.056-.48-4.471-1.179l.804-2.574c1.07.329 1.88.525 2.838.525 1.179 0 1.79-.655 1.79-2.248v-8.028h3.557v8.028zM39.89 20.732c0-2.467-1.158-3.711-3.122-3.711-1.983 0-3.14 1.244-3.14 3.71 0 2.4 1.157 3.643 3.14 3.643 1.964 0 3.122-1.242 3.122-3.642m3.6 0c0 4.383-2.532 6.827-6.722 6.827-4.208 0-6.74-2.444-6.74-6.827 0-4.41 2.532-6.897 6.74-6.897 4.19 0 6.722 2.488 6.722 6.897M61.877 21.013c0 4.43-1.986 6.547-6.088 6.547-4.08 0-6.066-2.117-6.066-6.547v-6.959h3.558v6.96c0 2.268.849 3.36 2.508 3.36 1.68 0 2.53-1.092 2.53-3.36v-6.96h3.558v6.96zM74.11 20.883c1.486 0 2.315-.677 2.315-1.856 0-1.22-.83-1.918-2.315-1.918h-2.007v3.774h2.007zm6.262 6.48h-3.796l-2.66-3.709h-1.813v3.709h-3.555V14.054h5.519c3.754 0 5.87 1.788 5.87 4.973 0 1.944-.895 3.318-2.532 4.038l2.967 4.014v.284zM95.359 27.363l-5.63-7.504v7.504H86.17V14.054h3.228l5.63 7.594v-7.594h3.557v13.31zM105.67 27.363V14.054h9.82v3.23h-6.262v2.006h5.343v3.055h-5.343V24.2h6.436v3.164zM129.382 27.363h-3.536v-4.19l-4.993-9.119h3.73l2.225 4.19c.305.566.588 1.134.808 1.678.218-.544.503-1.112.805-1.678l2.225-4.19h3.733l-4.997 9.12v4.19zM148.51 17.697c-2.05-.764-3.162-1.003-4.32-1.003-.764 0-1.395.305-1.395.873 0 .611.5.85 3.357 1.81 2.708.917 3.58 1.92 3.58 4.147 0 2.421-1.766 4.035-4.885 4.035-1.726 0-4.452-.697-6.287-1.81l1.332-2.772c2.03 1.112 3.468 1.55 4.755 1.55.786 0 1.224-.329 1.224-.894 0-.568-.348-.786-2.923-1.55-2.575-.765-3.796-2.204-3.796-4.256 0-2.266 1.635-3.992 4.646-3.992 1.702 0 3.403.22 5.76 1.267l-1.048 2.595zM168.816 24.417h1.898c1.373 0 2.159-.478 2.159-1.31 0-.762-.7-1.2-1.92-1.2h-2.137v2.51zm0-5.257h2.138c.872 0 1.374-.371 1.374-1.049 0-.719-.655-1.112-1.789-1.112h-1.723v2.16zm1.723-5.106c3.295 0 5.148 1.353 5.148 3.73 0 1.267-.764 2.138-2.008 2.555 1.92.478 2.882 1.614 2.882 3.228 0 2.42-2.14 3.796-5.956 3.796h-5.349V14.054h5.283zM182.643 27.363V14.054h9.816v3.23H186.2v2.006h5.346v3.055H186.2V24.2h6.435v3.164zM211.35 25.9c-2.378 1.18-4.278 1.66-6.458 1.66-3.992 0-6.526-2.445-6.526-6.828 0-4.126 2.643-6.897 6.635-6.897 1.659 0 3.883.372 5.758 1.2l-.895 2.641c-1.678-.459-2.987-.743-4.537-.743-2.028 0-3.357 1.529-3.357 3.799 0 2.4 1.154 3.685 3.076 3.685 1.067 0 2.05-.064 3.228-.502v-1.33h-3.403v-2.793h6.48V25.9zM217.933 27.363h3.557V14.055h-3.557zM237.785 27.363l-5.63-7.504v7.504h-3.556V14.054h3.229l5.628 7.594v-7.594h3.556v13.31zM265.354 27.363V22.28h-5.018v5.083h-3.556V14.054h3.556v4.997h5.018v-4.997h3.558v13.31zM275.995 27.363V14.054h9.817v3.23h-6.26v2.006h5.346v3.055h-5.345V24.2h6.434v3.164zM297.918 20.883c1.484 0 2.312-.677 2.312-1.856 0-1.22-.828-1.918-2.312-1.918h-2.007v3.774h2.007zm6.262 6.48h-3.798l-2.661-3.709h-1.81v3.709h-3.557V14.054h5.52c3.753 0 5.868 1.788 5.868 4.973 0 1.944-.894 3.318-2.53 4.038l2.968 4.014v.284zM309.976 27.363V14.054h9.82v3.23h-6.26v2.006h5.343v3.055h-5.343V24.2h6.434v3.164zM46.458 63.383c1.449-.302 2.844-.513 3.886-.583 1.714-.106 2.315.636 2.438 1.803l-1.449.917c-.335-1.254-.724-1.519-1.8-1.553-.92-.037-1.856.051-3.129.211l.054-.795zm2.366-12.173c-1.747 0-2.896 1.08-3.126 2.81l-.565 3.957c-.248 1.819.547 2.669 2.297 2.669h1.253c1.75 0 2.88-.956 3.145-2.757l.565-3.974c.266-1.84-.548-2.705-2.296-2.705h-1.273zm1.626-1.643c2.88 0 4.222 1.786 3.815 4.63l-.493 3.622c-.407 2.808-2.191 4.486-5.053 4.486h-1.555c-2.914 0-4.293-1.767-3.904-4.576l.494-3.62c.407-2.862 2.191-4.542 5.124-4.542h1.572zM64.378 59.886c-.088.617.089.953.796.953h.794l-.159 1.201a5.415 5.415 0 0 1-1.572.23c-.76 0-1.661-.283-1.696-1.572l.035-.23c-1.253.777-2.72 1.642-4.169 1.642h-.212c-1.642 0-2.19-.6-1.926-2.507l.778-5.247a47.657 47.657 0 0 0-1.343-.106l.142-1.307h3.197l-.795 5.812c-.23 1.52-.123 1.8.99 1.8h.211c.99 0 2.067-.581 3.162-1.307l.76-4.892a42.244 42.244 0 0 0-1.342-.106l.141-1.307h3.198l-.99 6.943zM74.295 55.91c.176-1.29-.548-1.874-1.855-1.874h-.53c-1.361 0-2.314.743-2.491 2.087l-.142.937h4.859l.159-1.15zm-1.68-3.18c2.527 0 3.605 1.219 3.27 3.62l-.283 2.015h-6.5l-.107.671c-.177 1.363.512 1.927 1.802 1.927h.724c.884 0 1.625-.264 2.05-.972l.122-.23h1.45l-.16 1.255c-.918.9-2.296 1.29-3.62 1.29h-.602c-2.809 0-3.833-1.237-3.444-3.959l.264-1.925c.354-2.49 1.855-3.691 4.452-3.691h.583zM77.762 55.08c.248-1.643 1.484-2.35 3.817-2.35h.3c.9 0 2.543.195 3.586.69l-.265 2.1h-1.485l.054-1.2c-.6-.264-1.36-.335-2.05-.335-1.43 0-2.19.389-2.314 1.218v.124c-.14.937.407.9 2.774 1.396 2.226.423 2.932.972 2.737 2.384l-.052.461c-.283 1.977-1.501 2.737-3.763 2.737h-.69c-.918 0-2.49-.158-3.48-1.272l.249-1.766h1.377l-.035 1.148c.477.548 1.431.582 1.979.582h.582c1.201 0 1.909-.422 2.049-1.465l.037-.23c.123-.884-.39-.988-2.652-1.45-2.436-.44-2.985-1.04-2.79-2.401l.035-.371zM90.063 60.75c.635 0 1.06 0 1.695-.051l-.087 1.077c-.777.335-1.748.529-2.65.529h-.194c-1.379 0-1.962-.795-1.714-2.508l.776-5.477h-1.164l.176-1.378h.884c.334 0 .477-.14.511-.44l.318-2.103c.743-.107 1.061-.142 1.661-.159l-.352 2.702h2.684l-.176 1.378h-2.704l-.67 4.717c-.178 1.414-.072 1.713.847 1.713h.159zM97.609 50.558c-.07.547-.566.882-1.148.882-.635 0-1.077-.441-.99-1.077.072-.565.585-.9 1.149-.9.637 0 1.078.441.989 1.095zm-1.466 9.328c-.087.617.09.954.795.954h.742l-.159 1.148c-.637.264-1.094.283-1.554.283-1.007 0-1.944-.513-1.696-2.103l.866-5.794c-.39-.036-.778-.09-1.15-.124l.143-1.308h3.002l-.989 6.944zM103.39 60.927c1.378 0 2.261-.742 2.456-2.048l.37-2.792c.195-1.326-.422-1.978-1.801-1.978h-.848c-1.378 0-2.226.74-2.42 2.085l-.407 2.79c-.176 1.307.425 1.943 1.802 1.943h.848zm-.919 1.378c-2.755 0-3.833-1.308-3.46-3.94l.228-1.73c.388-2.67 1.731-3.904 4.505-3.904h.847c2.721 0 3.746 1.325 3.375 4.008l-.23 1.732c-.388 2.633-1.714 3.834-4.416 3.834h-.849zM112.299 54.444c1.29-.883 2.685-1.713 4.134-1.713h.195c1.536 0 2.172.723 1.907 2.509l-.672 4.645c-.07.618.089.955.796.955h.76l-.16 1.2a5.42 5.42 0 0 1-1.571.23c-.76 0-1.892-.3-1.697-1.891l.601-4.275c.211-1.553.088-1.82-1.026-1.82h-.212c-.97 0-2.03.566-3.16 1.308l-.99 6.519h-1.838l1.166-7.737c-.389-.036-.778-.09-1.149-.124l.142-1.308h3.004l-.23 1.502z" fill="#FFF"/>
    <path d="M126.44 55.24c1.271 0 2.12.917 2.12 2.118 0 1.202-.849 2.12-2.12 2.12-1.273 0-2.12-.918-2.12-2.12 0-1.2.847-2.118 2.12-2.118" fill="#FF5A0E"/>
    <path d="M142.979 53.719c.23-1.59-.494-2.402-2.12-2.402h-3.303l-1.308 9.222h3.251c1.626 0 2.65-.9 2.879-2.472l.601-4.348zm-1.802-3.975c2.898.017 4.08 1.38 3.675 4.242l-.565 4.044c-.407 2.827-1.91 4.081-4.752 4.081h-6.89l.158-1.379c.636-.07 1.148-.105 1.484-.14l1.378-9.363c-.353-.036-.813-.053-1.484-.123l.16-1.362h6.836zM150.053 50.558c-.072.547-.566.882-1.15.882-.635 0-1.076-.441-.988-1.077.07-.565.583-.9 1.148-.9.636 0 1.077.441.99 1.095zm-1.467 9.328c-.088.617.089.954.795.954h.742l-.16 1.148c-.635.264-1.094.283-1.554.283-1.006 0-1.943-.513-1.695-2.103l.865-5.794c-.389-.036-.778-.09-1.149-.124l.143-1.308h3.002l-.99 6.944zM152.104 55.08c.248-1.643 1.485-2.35 3.817-2.35h.3c.901 0 2.543.195 3.587.69l-.266 2.1h-1.484l.053-1.2c-.6-.264-1.36-.335-2.049-.335-1.431 0-2.191.389-2.314 1.218v.124c-.141.937.406.9 2.773 1.396 2.227.423 2.932.972 2.738 2.384l-.052.461c-.284 1.977-1.502 2.737-3.764 2.737h-.689c-.919 0-2.49-.158-3.48-1.272l.248-1.766h1.378l-.036 1.148c.477.548 1.431.582 1.98.582h.581c1.202 0 1.91-.422 2.05-1.465l.036-.23c.123-.884-.389-.988-2.651-1.45-2.437-.44-2.986-1.04-2.791-2.401l.035-.371zM168.521 60.998c-.918.812-2.26 1.307-3.55 1.307h-.972c-2.473 0-3.41-1.217-3.074-3.64l.353-2.455c.318-2.296 1.838-3.48 4.099-3.48h.724c1.237 0 2.208.23 3.304.636l-.318 2.58h-1.378l.052-1.502c-.688-.248-1.183-.318-2.225-.318-1.378 0-2.226.69-2.456 2.296l-.353 2.421c-.194 1.536.459 2.013 1.749 2.013h.583c.866 0 1.625-.317 2.05-1.023l.105-.178h1.466l-.159 1.343zM174.744 60.927c1.378 0 2.261-.742 2.456-2.048l.371-2.792c.194-1.326-.423-1.978-1.802-1.978h-.848c-1.378 0-2.226.74-2.42 2.085l-.407 2.79c-.176 1.307.425 1.943 1.803 1.943h.847zm-.919 1.378c-2.755 0-3.833-1.308-3.462-3.94l.23-1.73c.388-2.67 1.731-3.904 4.505-3.904h.849c2.72 0 3.744 1.325 3.373 4.008l-.229 1.732c-.389 2.633-1.714 3.834-4.417 3.834h-.849zM191.109 54.267c-.512.053-.972.09-1.396.123l-4.24 7.721h-1.925l-1.98-7.754c-.37-.02-.76-.072-1.2-.107l.14-1.308h4.329l-.16 1.308c-.458.017-.83.054-1.218.07l1.343 6.201h.017l3.374-6.164c-.352-.02-.742-.072-1.183-.107l.141-1.308h4.099l-.141 1.325zM198.181 55.91c.177-1.29-.547-1.874-1.854-1.874h-.53c-1.361 0-2.315.743-2.491 2.087l-.142.937h4.858l.16-1.15zm-1.677-3.18c2.525 0 3.602 1.219 3.267 3.62l-.282 2.015h-6.501l-.107.671c-.176 1.363.511 1.927 1.803 1.927h.724c.883 0 1.624-.264 2.049-.972l.123-.23h1.45l-.16 1.255c-.919.9-2.296 1.29-3.62 1.29h-.603c-2.808 0-3.832-1.237-3.443-3.959l.264-1.925c.353-2.49 1.854-3.691 4.452-3.691h.584zM204.263 54.621c1.06-1.15 1.908-1.767 3.163-1.767h.829l-.211 1.697a21.99 21.99 0 0 0-1.325.07c-.936.017-1.679.318-2.596 1.236l-.937 6.254h-1.839l1.168-7.738c-.39-.035-.778-.089-1.15-.123l.143-1.308h3.002l-.247 1.68z" fill="#FFF"/>
    <path d="M214.162 55.24c1.272 0 2.12.917 2.12 2.118 0 1.202-.848 2.12-2.12 2.12-1.273 0-2.12-.918-2.12-2.12 0-1.2.847-2.118 2.12-2.118" fill="#FF5A0E"/>
    <path d="M230.508 60.592c-1.131 1.13-2.738 1.713-4.31 1.713h-1.201c-2.864 0-4.065-1.361-3.676-4.258l.566-4.044c.405-2.95 2.048-4.436 4.928-4.436h.743c1.272 0 2.685.144 4.222.69l-.425 3.197h-1.572l.071-1.997c-.9-.334-1.872-.318-3.074-.318-1.661 0-2.72 1.007-2.968 2.846l-.6 4.292c-.248 1.68.493 2.421 2.119 2.421h.901c1.308 0 2.243-.566 2.862-1.644l1.59.053-.176 1.485zM236.98 60.927c1.377 0 2.26-.742 2.455-2.048l.37-2.792c.195-1.326-.423-1.978-1.801-1.978h-.848c-1.378 0-2.226.74-2.42 2.085l-.407 2.79c-.177 1.307.425 1.943 1.802 1.943h.848zm-.92 1.378c-2.755 0-3.833-1.308-3.462-3.94l.23-1.73c.388-2.67 1.731-3.904 4.504-3.904h.85c2.72 0 3.744 1.325 3.373 4.008l-.23 1.732c-.388 2.633-1.714 3.834-4.416 3.834h-.849zM245.888 54.444c1.29-.883 2.686-1.713 4.134-1.713h.195c1.537 0 2.172.723 1.908 2.509l-.673 4.645c-.07.618.09.955.796.955h.76l-.159 1.2a5.42 5.42 0 0 1-1.572.23c-.76 0-1.891-.3-1.697-1.891l.601-4.275c.211-1.553.088-1.82-1.025-1.82h-.212c-.972 0-2.032.566-3.162 1.308l-.99 6.519h-1.836l1.165-7.737c-.389-.036-.777-.09-1.149-.124l.143-1.308h3.003l-.23 1.502zM257.43 54.444c1.29-.883 2.686-1.713 4.135-1.713h.194c1.537 0 2.173.723 1.908 2.509l-.672 4.645c-.07.618.089.955.795.955h.76l-.158 1.2a5.42 5.42 0 0 1-1.573.23c-.76 0-1.89-.3-1.696-1.891l.6-4.275c.212-1.553.089-1.82-1.025-1.82h-.212c-.971 0-2.031.566-3.161 1.308l-.99 6.519h-1.837l1.166-7.737c-.39-.036-.778-.09-1.15-.124l.143-1.308h3.003l-.23 1.502zM272.965 55.91c.177-1.29-.548-1.874-1.855-1.874h-.53c-1.36 0-2.314.743-2.49 2.087l-.143.937h4.859l.159-1.15zm-1.678-3.18c2.526 0 3.603 1.219 3.268 3.62l-.282 2.015h-6.501l-.107.671c-.176 1.363.512 1.927 1.802 1.927h.725c.883 0 1.624-.264 2.048-.972l.124-.23h1.449l-.16 1.255c-.918.9-2.296 1.29-3.62 1.29h-.601c-2.81 0-3.834-1.237-3.445-3.959l.265-1.925c.353-2.49 1.854-3.691 4.452-3.691h.583zM283.41 60.998c-.917.812-2.26 1.307-3.55 1.307h-.971c-2.474 0-3.41-1.217-3.074-3.64l.352-2.455c.318-2.296 1.838-3.48 4.1-3.48h.724c1.236 0 2.208.23 3.303.636l-.318 2.58H282.6l.053-1.502c-.689-.248-1.185-.318-2.227-.318-1.378 0-2.225.69-2.454 2.296l-.355 2.421c-.194 1.536.46 2.013 1.75 2.013h.583c.865 0 1.624-.317 2.05-1.023l.104-.178h1.467l-.16 1.343zM288.927 60.75c.636 0 1.061 0 1.696-.051l-.088 1.077c-.777.335-1.748.529-2.649.529h-.194c-1.38 0-1.962-.795-1.715-2.508l.778-5.477h-1.165l.175-1.378h.885c.334 0 .476-.14.512-.44l.318-2.103c.742-.107 1.06-.142 1.66-.159l-.353 2.702h2.685l-.178 1.378h-2.702l-.671 4.717c-.177 1.414-.07 1.713.847 1.713h.16z" fill="#FFF"/>
  </g>
   <image src="https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/images/logos/Journeys_White.png" xlink:href="">
</symbol>



</svg></footer>

<script type='text/javascript'>
/* <![CDATA[ */
var twentyseventeenScreenReaderText = {"quote":"<svg class=\"icon icon-quote-right\" aria-hidden=\"true\"> <use xlink:href=\"#icon-quote-right\"><\/use> <\/svg>","expand":"Expand child menu","collapse":"Collapse child menu","icon":"<svg class=\"icon icon-angle-down\" aria-hidden=\"true\"> <use xlink:href=\"#icon-angle-down\"><\/use> <span class=\"svg-fallback icon-angle-down\"><\/span><\/svg>"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.advising.ufl.edu/wp-content/themes/UF-CLAS-DEPT-master/assets/js/script.min.js?ver=1.9.4'></script>
<script type='text/javascript' src='https://www.advising.ufl.edu/wp-includes/js/wp-embed.min.js?ver=4.9.10'></script>
</body>
</html>