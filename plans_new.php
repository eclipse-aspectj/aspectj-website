<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# template.php
	#
	# Author: 		Denis Roy
	# Date:			2005-06-16
	#
	# Description: Type your page comments here - these are not sent to the browser
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "AspectJ Plans";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Andy Clement";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
				
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<h1>Plans</h1>

<p>
<i>Last updated: 25 October 2007</i>
</p>

<p>
  Here are some details of recent and upcoming AspectJ releases.
  
  <!--
  These are plotted on the
  <a href="http://www.eclipse.org/projects/timeline/">Eclipse timeline</a>.
  -->
  
</p>

<div class="homeitem3col">
<h3>Aspectj1.6.0</h3>
<p>Status: release date tbd. there are likely to be milestone releases before a final release.</p>
<p>Release themes:</p>
<ul>
<li>Java6 support
<li>Better support and integration with other common enterprise components: eg. code coverage tools, static code analysis
tools, code generation libraries
<li><i>more to follow...</i>
</ul>
<p>Shortcuts for detailed information:</p>
<ul>
<li>These <a href="">bugs and enhancements</a> are currently targetted for 1.6.0M1.
<li>These <a href="">bugs and enhancements</a> are currently targetted for 1.6.0 final.
</ul>
</div>

<div class="homeitem3col">
<h3>AspectJ 5, version 1.5.4</h3>
<p>Status: Targeted release date 7th December 2007</p>
<p>AspectJ 1.5.4 is a service refresh of the AspectJ 1.5 codestream.</p>
<p>
Shortcuts for detailed information:</p>
<ul>
<li>These <a href="">bugs and enhancements</a> are currently targetted for 1.5.4.
<li>These <a href="">bugs and enhancements</a> are already fixed, available in todays DEVELOPMENT builds, and 
will be packaged in the 1.5.4 release.
</ul>
</div>

<div class="homeitem3col">
	<h3>AspectJ 1.5.3</h3>
	<p>
	Status: Release candidate available 8th November 2006
	</p>
	 <p>
      Release themes:
    </p>

    <ul>
       <li>Improved memory usage</li>        
       <li>Improved LTW</li>
       <li>Improved serviceability</li>
    </ul>
</div>

<div class="homeitem3col">
	<h3>AspectJ 1.5.2</h3>
	<p>
	Released: 30th June 2006
	</p>
	 <p>
      Release themes:
    </p>

    <ul>
       <li>Improved performance</li>        
       <li>Improved LTW</li>
       <li>Improved incremental compilation</li>
    </ul>
</div>

<div class="homeitem3col">
	<h3>AspectJ 1.5.1a</h3>
		<p>
		Released: 10th April 2006
		</p>
		
        <p>
          Release themes:
        </p>

        <ul>
           <li>Improved memory usage</li>        
           <li>Improved performance</li>
        </ul>
</div>

		<hr class="clearer" />
	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
