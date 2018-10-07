<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<!--[if lt IE 9]><html class="lte-ie8" lang=""><![endif]-->
	<!--[if gt IE 8]><!--><html lang=""><!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <title>GOV.UK - The best place to find government services and information</title>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />


    <!--[if gt IE 8]><!--><link rel="stylesheet" media="screen" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/stylesheets/govuk-template.css" type="text/css"/>
	  <link rel="stylesheet" media="screen" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/assets/stylesheets/govuk-template-joomla.css" type="text/css"/><!--<![endif]-->
    <!--[if IE 6]><link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/stylesheets/govuk-template-ie6.css"/><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/stylesheets/govuk-template-ie7.css"/><![endif]-->
    <!--[if IE 8]><link rel="stylesheet" media="screen" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/stylesheets/govuk-template-ie8.css"/><![endif]-->
    <link rel="stylesheet" media="print" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/stylesheets/govuk-template-print.css"/>

    <link rel="stylesheet" media="all" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/stylesheets/fonts.css"/>
    <!--[if lt IE 9]><script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/javascripts/ie.js"></script><![endif]-->

    <link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/favicon.ico" type="image/x-icon" />
    
    <link rel="mask-icon" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/gov.uk_logotype_crown.svg" color="#0b0c0c">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/apple-touch-icon.png">

    
    <meta name="theme-color" content="#0b0c0c" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    
    <meta property="og:image" content="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/opengraph-image.png">
  </head>

  <body class="">
    <script>document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script>

    

    <div id="skiplink-container">
      <div>
        <a href="#content" class="skiplink"></a>
      </div>
    </div>

    <div id="global-cookie-message">
        <p>GOV.UK uses cookies to make the site simpler. <a href="https://www.gov.uk/help/cookies">Find out more about cookies</a></p>
    </div>

    
    <header role="banner" id="global-header" class="">
		<div class="header-wrapper">
        	<div class="header-global">
				<div class="header-logo">
					<a href="https://www.gov.uk/" title="Go to the GOV.UK homepage" id="logo" class="content">
						<img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/images/gov.uk_logotype_crown_invert_trans.png" width="36" height="32" alt=""> GOV.UK
					</a>
				</div>

				<jdoc:include type="modules" name="search" />
				<div class="govuk-header__content">
    				<a href="<?php echo $this->baseurl; ?>" class="govuk-header__link govuk-header__link--service-	name">
      				<?php $config = JFactory::getConfig(); echo $config->get( 'sitename' );?>
    				</a>

    			<button type="button" role="button" class="govuk-header__menu-button js-header-toggle" aria-controls="navigation" aria-label="Show or hide Top Level Navigation">Menu</button>
			  
   				<nav class="govuk-header__link">
	  				<jdoc:include type="modules" name="header-menu" />
				</nav>
			</div>
	    </div>
	</header>

	<div id="global-header-bar"></div>
	
	<main>
		<div id="wrapper">
			<div class="grid-row">
			<main id="content" role="main" class="clearfix">
				<div class="column-two-thirds">
					<jdoc:include type="modules" name="wrapper-menu" />
					<jdoc:include type="component" />
				</div>
				<div class="column-one-third">
					<div class="right-header-bar"></div>
					<jdoc:include type="modules" name="right" />
				</div>
			</main>
			</div>
		</div>
	</main>
	  
    <footer class="group js-footer" id="footer" role="contentinfo">
	    <div class="footer-wrapper">
	        <div class="footer-meta">
				<div class="footer-meta-inner">
		            <div class="open-government-licence">
        			    <p class="logo"><a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/" rel="license">Open Government Licence</a></p>
		                <p>All content is available under the <a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/" rel="license">Open Government Licence v3.0</a>, except where otherwise stated</p>
		            </div>
        		</div>
				<div class="copyright">
					<a href="https://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/uk-government-licensing-framework/crown-copyright/">© Crown copyright</a>
				</div>
        	</div>
      	</div>
    </footer>

    <div id="global-app-error" class="app-error hidden"></div>

    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/assets/javascripts/govuk-template.js"></script>
    <script>if (typeof window.GOVUK === 'undefined') document.body.className = document.body.className.replace('js-enabled', '');</script>
  </body>
</html>