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
	$pageTitle 		= "AspectJ";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Andy Clement";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	$rightcolumn = file_get_contents("rightcolumn.html");
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<div align="center"><h1>$pageTitle</h1></div>

<p>
<i>Last updated: 19 May 2006</i>
</p>

<p>
  Here are some details of recent and upcoming AJDT releases.
  
  <!--
  These are plotted on the
  <a href="http://www.eclipse.org/projects/timeline/">Eclipse timeline</a>.
  -->
  
</p>

<div class="homeitem3col">
	<h3>AspectJ 1.5.2</h3>
	<p>
	Status: Planned for June/July 2006 <br>
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

<div class="homeitem3col">
	<h3>AspectJ 1.5.0</h3>
		<p>
		Released: 20th December 2005
		</p>
		
        <p>
          Release themes:
        </p>

        <ul>
           <li>Integrate Java5 with AspectJ</li>
        </ul>

</div>


		<hr class="clearer" />
	</div>

	$rightcolumn
</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
