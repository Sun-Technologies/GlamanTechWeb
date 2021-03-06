<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=device-width, maximum-scale=1" />
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
<title>Home | GlamanTech</title>
<!-- CSS FILES -->
<!--Template file default template.css-->
<link rel="stylesheet" href="css/template.css" type="text/css">
<!--Color file default none.css-->
<link rel="stylesheet" href="css/none.css" type="text/css">

<link rel="stylesheet" href="css/menus.css?<?php echo rand(1,1000) ?>" type="text/css">
<link rel="stylesheet" href="css/style.css?<?php echo rand(1,1000) ?>" type="text/css">
<link rel="stylesheet" href="css/animate.css" type="text/css">
<link rel="stylesheet" href="css/admin-page.css" type="text/css">
<link rel="stylesheet" href="css/responsive.css" type="text/css">
<!-- RTL - Right to left languages OFF (default) if you use css/style-rtl.css your site will be in RTL Mode   -->
<link rel="stylesheet" href="css/style-rtl-off.css" type="text/css">

<!-- JS FILES -->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/responsive.js"></script>
<script type="text/javascript" src="js/uniform.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="http://cherne.net/brian/resources/jquery.hoverIntent.minified.js"></script>
<!-- <script type="text/javascript" src="js/pagination.js"></script> -->

<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<!-- Slideshow background param -->
<script type="text/javascript">
var slideshowSpeed = 5000;
var slideEffect = "fade";
jQuery(document).ready(function($) {$('headerimgs').bgimgSlideshow({photos : [{ 
			"firstline" : "Our Vision",
			"secondline" : "To be the most respected, trusted global consulting firm by providing transparent, reliable and innovative solutions to our prestige clients.",	
			"url" :  "about-us.php",
			"image" : "images/slide/our-vision.jpg",
			"link" : "<div class=\"pictured\">READ MORE<div>"
		},{ 
			"firstline" : "Our Philosophy",
			"secondline" : "We measure our achievement by the success of our client. We make sure that we are providing practical and result driven solution to our client.",	
			"url" :  "about-us.php",
			"image" : "images/slide/our-philosophy.jpg",
			"link" : "<div class=\"pictured\">READ MORE<div>"
		},{ 
			"firstline" : "Who we are",
			"secondline" : "A dynamically growing adaptive IT consulting firm providing solutions to complex challenges, with highly qualified, passionate, down to earth, and approachable trained professionals.",
			"url" :  "about-us.php",
			"image" : "images/slide/who-we-are.jpg",
			"link" : "<div class=\"pictured\">READ MORE<div>"
		},{ 
      "firstline" : "What we do",
      "secondline" : "We offer strategic consultative approach on time and within budget, to boost your business profitability, productivity and also to increase the velocity of your success.",  
      "url" :  "about-us.php",
      "image" : "images/slide/what-we-do.jpg",
      "link" : "<div class=\"pictured\">READ MORE<div>"
    },]});});
		

</script>
<script src="js/jquery.vticker.min.js"></script>
<script>
  $(function() {
    $('#vTicker').vTicker();
  });
</script>
<!-- Flicker widget script-->
<script src="js/jflickrfeed.min.js"></script>
<script src="js/flickr.js"></script>
<!-- End of Flicker widget script-->
</head>
<body style="height: 87.6%;">
<!-- Background slideshow divs-->
<div id="headerimgs">
  <div id="headerimg1" style="z-index:-1" class="headerimg"></div>
  <div id="headerimg2" style="z-index:1" class="headerimg"></div>
</div>

<div id="wrap" class="clearfix">
  <div id="header-wrap" style="margin-bottom: 5px;">
    <div id="pre-header" class="clearfix">
      <div id="logo" class="logo"> 
        
        <!-- logo & slogan --> 
        <a href="index.php" title="Home"><img src="images/logo.png" alt="Home" /></a> 
        <!-- end. logo & slogan --> 
        
      </div>
      <div class="features_top_div"> 
        <!-- features top -->
        <div class="social_icons" id="social-icons">
          <ul>
            <li><a href="https://www.facebook.com/pages/Glamantech-Inc/645395162245054" target="_blank" rel="me"><img src="images/facebook.png" alt="Facebook"/></a></li>
            <li><a href="https://www.linkedin.com/company/glamantech-inc" target="_blank" rel="me"><img src="images/in.png" alt="Linked In" style="height: 21px;"/></a></li>
            <li><a href="https://plus.google.com/107887369572031570689" target="_blank" rel="me"><img src="images/googleplus.png" alt="Google Plus"/></a></li>
          </ul>
        </div>
        <!-- end .features top -->
        
        <div class="region region-header-features">
          <div class="content" id="country-location">
              <ul class="language-switcher-locale-url">
                <li class="en first active"><img class="language-icon" src="images/flags/en.png" width="16" height="12" alt="English" title="English" /></li>
                <li class="de"><img class="language-icon" src="images/flags/gb.png" width="16" height="12" alt="Deutsch" title="Deutsch" /></li>
                <li class="fr last"><img class="language-icon" src="images/flags/in.png" width="16" height="12" alt="Français" title="Français" /></li>
              </ul>
          </div>
          <!-- /.block -->
          </div>
        <!-- /.region --> 
      </div>
    </div>
    <div class="top_line_tb"></div>
    <header id="header" class="clearfix">
    <!-- Start Nav Menu -->
      <nav id="navigation" role="navigation">
        <div id="main-menu">
          <ul class="menu">
            <li class="header-font-style"><a href="index.php" title="Home" class=<?php  echo (isset($CURRENT_PAGE) && $CURRENT_PAGE === 'home'?   "active" :  ""); ?> >Home</a></li>
            <li class="header-font-style"><a href="#" class=<?php  echo (isset($CURRENT_PAGE) && $CURRENT_PAGE === 'services'?   "active" :  ""); ?>>Services</a>
              <ul class="menu" id="bg-color">
                <li><a title="SAP Solutions" href="sap-solutions.php">SAP Solutions</a>
                  <ul class="menu">
                    <li><a title="SAP Implementation and Migration" href="sap-implementation-migration.php">SAP Implementation &amp; Migration</a></li>
                    <li><a title="SAP ERP and Netweaver Implementation" href="sap-erp.php">SAP ERP &amp; Netweaver Implementation</a></li>
                    <li><a title="SAP Customer Relationship Management" href="sap-crm.php">SAP Customer Relationship Management</a></li>
                    <li><a title="SAP Supplier Relationship Management" href="sap-srm.php">SAP Supplier Relationship Management</a></li>
                    <li><a title="SAP Supply Chain Management" href="sap-scm.php">SAP Supply Chain Management</a></li>
                    <li><a title="SAP Solution Manager with CHaRM" href="sap-solution-manager.php">SAP Solution Manager with CHaRM</a></li>
                    <li><a title="SAP Mobility" href="sap-mobility.php">SAP Mobility</a></li>
                    <li><a title="SAP HANA" href="sap-hana.php">SAP HANA</a></li>
                    <li><a title="SAP AMS" href="sap-ams.php">SAP AMS</a></li>
                    <li><a title="SAP Rapid Deployment Solutions" href="sap-rds.php">SAP Rapid Deployment Solutions</a></li>
                  </ul>
                </li>
                <li><a title="Oracle ERP" href="oracle.php">Oracle ERP</a></li>
                <li><a title="" href="microsoft.php">Microsoft</a>
                  <ul class="menu">
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft-sp"><a title="Microsoft SharePoint" href="microsoft.php#microsoft-sp">Microsoft SharePoint</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft-dynamics"><a title="Microsoft Dynamics" href="microsoft.php#microsoft-dynamics">Microsoft Dynamics</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft-server"><a title="Windows Server" href="microsoft.php#microsoft-server">Windows Server</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft-scom"><a title="Microsoft SCOM" href="microsoft.php#microsoft-scom">Microsoft SCOM</a></li>
                  </ul>
                </li>
                <li><a title="Sales Force" href="sales-force.php">Sales Force</a></li>
                <li><a title="" href="app-dev.php">Application Development</a></li>
                <li><a title="" href="cloud.php">Cloud</a>
                  <ul class="menu">
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft-cloud"><a title="Microsoft Cloud" href="cloud.php#microsoft-cloud">Microsoft Cloud</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#sap-cloud"><a title="SAP Cloud" href="cloud.php#sap-cloud">SAP Cloud</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#amazon-cloud"><a title="Amazon (AWS) Cloud Services" href="cloud.php#amazon-cloud">Amazon (AWS) Cloud Services</a></li>
                  </ul>
                </li>
                <li><a title="" href="sap.php">Mobility</a>
                  <ul class="menu">
                    <li><a title="SAP" href="sap.php">SAP</a></li>
                  </ul>
                </li>
                <li><a title="Data recovery" href="data-recovery.php">Data recovery &amp; Offsite Data center</a></li>
                <li><a title="Staffing Services" href="staffing.php">Staffing Services</a></li>
                <li><a title="Training Education" href="training-and-education.php">Training &amp; Education</a></li>
                <li><a title="Drug Safety Expertise" href="pharmacovigilance-and-drug.php">Pharmacovigilance &amp; Drug Safety Expertise</a></li>
              </ul>
            </li>
            <li class="header-font-style"><a href="#" class=<?php  echo (isset($CURRENT_PAGE) && $CURRENT_PAGE === 'job-seekers'?   "active" :  ""); ?> title="Job Seekers">Job Seekers</a>
              <ul class="menu">
                    <li><a title="Search Jobs" href="search-job.php">Search Jobs</a></li>
                    <li><a title="Submit a Resume" href="search_job_apply.php">Submit a Resume</a></li>
                    <li><a title="Benefits" href="benefits.php">Benefits</a></li>
              </ul>
            </li>
            <li class="header-font-style"><a href="#" class=<?php  echo (isset($CURRENT_PAGE) && $CURRENT_PAGE === 'employers'?   "active" :  ""); ?> title="News &amp; Events">Employers</a>
              <ul class="menu">
                    <li><a title="Submit a job order" href="submit_job_order.php">Submit a job order</a></li>
                    <li><a title="Contact an Account Manager" href="contacting-account-manager.php">Contact an Account Manager</a></li>
                    <li><a title="Recruiting Methodology" href="recruit-methodology.php">Recruiting Methodology</a></li>
                    <li><a title="Our Clients" href="our-clients.php">Our Clients</a></li>
                    <li><a title="Submit Feedback" href="submit_feedback.php">Submit Feedback</a></li>
              </ul>
            </li>
            <li class="header-font-style"><a href="#" class=<?php  echo (isset($CURRENT_PAGE) && $CURRENT_PAGE === 'employees'?   "active" :  ""); ?> title="News &amp; Events">Employees</a>
              <ul class="menu">
                    <li><a title="" href="#">Enter Hours</a></li>
                    <li><a title="" href="myhr.php">My HR</a></li>
                    <li><a title="" href="benefits.php">Benefits</a></li>
              </ul>
            </li>
            <li class="header-font-style"><a href="#" class=<?php  echo (isset($CURRENT_PAGE) && $CURRENT_PAGE === 'resources'?   "active" :  ""); ?> title="Contact">Resources</a>
              <ul class="menu">
                    <li><a title="" href="whitepapers.php">Whitepapers</a></li>
                    <li><a title="" href="career-tools.php">Career Tools</a>
                    <ul class="menu">
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#resume-tips"><a title="Resume Tips" href="career-tools.php#resume-tips">Resume Tips</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#interview-que"><a title="Interview Questions" href="career-tools.php#interview-que">Interview Questions</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#interview-tips"><a title="Interview Tips" href="career-tools.php#interview-tips">Interview Tips</a></li>
                    </ul>
                    </li>
                    <li><a title="" href="blog.php">Blogs</a></li>
              </ul>
            </li>
            <li class="header-font-style"><a href="contact.php" title="Home" class=<?php  echo (isset($CURRENT_PAGE) && $CURRENT_PAGE === 'contact'?   "active" :  ""); ?> >Contact Us</a></li>
          </ul>
        </div>
      </nav>
      <img src="images/sap-partner.png" alt="Sap Partner" id="sap-image"/>
      <div id="header-right">
        <div id="block-views-latest-news-block">
          <div class="content">
            <div class="view view-latest-news view-id-latest_news view-display-id-block">
              <div class="view-content"> 
                
                <!-- start scroll -->
                <div id="vTicker" class='view view-latest_news'>
                  <ul id='views-ticker-vTicker-list-latest_news'>
                    <li> <span class='views-vTicker-tick-field'> <a href="news_detail.html">Duis Interdico Te</a> <span class="latest-news-body">Duis in jus letalis pagus patria verto. Duis eligo facilisis ideo nostrud paratus ulciscor.</span> Sunday, January 13, 2013 - 09:38</span> </li>
                    <li> <span class='views-vTicker-tick-field'> <a href="news_detail.html">Duis Interdico Te</a> <span class="latest-news-body">Duis in jus letalis pagus patria verto. Duis eligo facilisis ideo nostrud paratus ulciscor.</span> Sunday, January 13, 2013 - 09:38</span> </li>
                  </ul>
                </div>
                <!-- end scroll --> 
                
              </div>
            </div>
          </div>
          <!-- /.block --> 
        </div>
        <!-- /.region --> 
      </div>
    </header>
  </div>