<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Home | GlamanTech</title>
<!-- CSS FILES -->
<!--Template file default template.css-->
<link rel="stylesheet" href="css/template.css" type="text/css">
<!--Color file default none.css-->
<link rel="stylesheet" href="css/none.css" type="text/css">

<link rel="stylesheet" href="css/menus.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/responsive.css" type="text/css">
<!-- RTL - Right to left languages OFF (default) if you use css/style-rtl.css your site will be in RTL Mode   -->
<link rel="stylesheet" href="css/style-rtl-off.css" type="text/css">

<!-- JS FILES -->
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/responsive.js"></script>
<script type="text/javascript" src="js/uniform.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<!-- Slideshow background param -->
<script type="text/javascript">
var slideshowSpeed = 5000;
var slideEffect = "fade";
jQuery(document).ready(function($) {$('headerimgs').bgimgSlideshow({photos : [{ 
			"firstline" : "Our Vision",
			"secondline" : "To be the most respected, trusted global consulting firm by providing transparent, reliable and innovative solutions to our prestige clients.",	
			"url" :  "",
			"image" : "images/slide/slide22.jpg",
			"link" : "<div class=\"pictured\">READ MORE<div>"
		},{ 
			"firstline" : "Our Philosophy",
			"secondline" : "We measure our achievement by the success of our client. We make sure that we are providing practical and result driven solution to our client.",	
			"url" :  "",
			"image" : "images/slide/slide33.jpg",
			"link" : "<div class=\"pictured\">READ MORE<div>"
		},{ 
			"firstline" : "Who we are",
			"secondline" : "A dynamically growing adaptive IT consulting firm providing solutions to complex challenges, with highly qualified, passionate, down to earth, and approachable trained professionals.",
			"url" :  "",
			"image" : "images/slide/slide44.jpg",
			"link" : "<div class=\"pictured\">READ MORE<div>"
		},{ 
      "firstline" : "What we do",
      "secondline" : "We offer strategic consultative approach on time and within budget, to boost your business profitability, productivity and also to increase the velocity of your success.",  
      "url" :  "",
      "image" : "images/slide/slide11.jpg",
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

<!-- Slideshow controls -->
<div class="fade">
  <div id="control" class="btn"></div>
</div>
<div id="back" class="btn-back"></div>
<div id="next" class="btn-next"></div>
<div id="fullscreen" class="btnf"></div>

<!-- end .Slideshow controls -->

<div id="wrap" class="clearfix">
  <div id="header-wrap">
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
            <li><a href="http://www.facebook.com/facebook" target="_blank" rel="me"><img src="images/facebook.png" alt="Facebook"/></a></li>
            <li><a href="http://www.twitter.com/twitter" target="_blank" rel="me"><img src="images/in.png" alt="Twitter"/></a></li>
            <li><a href="https://plus.google.com/googleplus" target="_blank" rel="me"><img src="images/googleplus.png" alt="Twitter"/></a></li>
          </ul>
        </div>
        <!-- end .features top -->
        
        <div class="region region-header-features">
          <div class="content" id="country-location">
              <ul class="language-switcher-locale-url">
                <li class="en first active"><a href="#" class="language-link active" lang="en"><img class="language-icon" src="images/flags/en.png" width="16" height="12" alt="English" title="English" /> </a></li>
                <li class="de"><a href="#" class="language-link" lang="de"><img class="language-icon" src="images/flags/gb.png" width="16" height="12" alt="Deutsch" title="Deutsch" /> </a></li>
                <li class="fr last"><a href="#" class="language-link" lang="fr"><img class="language-icon" src="images/flags/in.png" width="16" height="12" alt="Français" title="Français" /> </a></li>
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
            <li><a href="index.php" title="Home" class="active">HOME</a></li>
            <li><a  href="#">SERVICES</a>
              <ul class="menu">
                <li><a title="SAP Solutions" href="sap-solutions.php">SAP Solutions</a>
                  <ul>
                    <li><a title="SAP Implementation and Migration" href="sap-implementation-migration.php">SAP Implementation and Migration</a></li>
                    <li><a title="SAP ERP and Netweaver Implementation" href="sap-erp.php">SAP ERP and Netweaver Implementation</a></li>
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
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft.php#microsoft-sp"><a title="" href="microsoft.php#microsoft-sp">Microsoft SharePoint</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft.php#microsoft-dynamics"><a title="" href="microsoft.php#microsoft-dynamics">Microsoft Dynamics</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft.php#microsoft-server"><a title="" href="microsoft.php#microsoft-server">Windows Server</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft.php#microsoft-scom"><a title="" href="microsoft.php#microsoft-scom">Microsoft SCOM</a></li>
                  </ul>
                </li>
                <li><a title="Sales Force" href="sales-force.php">Sales Force</a></li>
                <li><a title="" href="app-dev.php">Application Development</a></li>
                <li><a title="" href="cloud.php">Cloud</a>
                  <ul class="menu">
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft-cloud"><a title="" href="#microsoft-sp">Microsoft Cloud</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft-sp"><a title="" href="#sap-cloud">SAP Cloud</a></li>
                    <li class='scrollspy-example' data-offset='0' data-spy="scroll" data-target="#microsoft-sp"><a title="" href="#amazon-cloud">Amazon (AWS) Cloud Services</a></li>
                  </ul>
                </li>
                <li><a title="" href="#">Mobility</a>
                  <ul class="menu">
                    <li><a title="" href="sap.php">SAP</a></li>
                  </ul>
                </li>
                <li><a title="" href="disaster-recovery.php">Disaster recovery and Offsite Data center</a></li>
                <li><a title="" href="staffing.php">Staffing Services</a>
                  <ul class="menu">
                    <li><a title="" href="#">Direct Hire</a></li>
                    <li><a title="" href="#">Contract Services</a></li>
                    <li><a title="" href="#">Cloud Resources</a></li>
                    <li><a title="" href="#">Expert Search</a></li>
                  </ul>
                </li>
                <li><a title="" href="training-and-education.php">Training and Education</a></li>
                <li><a title="" href="pharmacovigilance-and-drug.php">Pharmacovigilance and Drug Safety Expertise</a></li>
              </ul>
            </li>
            <li><a href="news.html" title="News &amp; Events">JOB SEEKERS</a>
              <ul class="menu">
                    <li><a title="" href="#">Search Jobs</a></li>
                    <li><a title="" href="#">Submit a Resume</a></li>
                    <li><a title="" href="#">Contact a Recruiter</a></li>
                    <li><a title="Benefits" href="benefits.php">Benefits</a></li>
              </ul>
            </li>
            <li><a href="#" title="News &amp; Events">EMPLOYERS</a>
              <ul class="menu">
                    <li><a title="" href="#">Submit a job order</a></li>
                    <li><a title="" href="#">Get Quote</a></li>
                    <li><a title="Recruiting Methodology" href="recruit-methodology.php">Recruiting Methodology</a></li>
                    <li><a title="Our Clients" href="our-clients.php">Our Clients</a></li>
                    <li><a title="" href="#">Submit Feedback</a></li>
              </ul>
            </li>
            <li><a href="#" title="News &amp; Events">EMPLOYEES</a>
              <ul class="menu">
                    <li><a title="" href="#">Enter Hours</a></li>
                    <li><a title="" href="#">Payroll</a></li>
                    <li><a title="" href="#">Benefits</a></li>
                    <li><a title="" href="#">Leave Registration</a></li>
              </ul>
            </li>
            <li><a href="#" title="Contact">RESOURCES</a>
              <ul class="menu">
                    <li><a title="" href="whitepapers.php">Whitepapers</a></li>
                    <li><a title="" href="#">Case Studies</a></li>
                    <li><a title="" href="blog.php">Blogs</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
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