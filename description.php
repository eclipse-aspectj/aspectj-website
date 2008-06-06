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
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
	
	<!--h1>About</h1-->
		<table border="0" cellpadding="4">
          <tr>
          	<!--td valign="top"><img border=0 src="logo.gif" width="164" height="229" alt="AJDT screenshot"></td-->
          	<td valign="top">&nbsp;</td>
            <td valign="top">

		<p>
		Some aspects of system implementation, such as logging, error
		handling, standards enforcement and feature variations are
		notoriously difficult to implement in a modular way. The result
		is that code is tangled across a system and leads to quality,
		productivity and maintenance problems.  AspectJ is a seamless 
		aspect-oriented extension to the Java programming language 
		that enables clean modularization of these 'crosscutting concerns'.
		For the best AspectJ development experience, the AspectJ 
		Development Tools (AJDT) project provides
		Eclipse platform based tool support for AOSD with AspectJ - see
		<a href="http://eclipse.org/ajdt"> Eclipse AJDT project</a>.
		</p>

		  	</td>
          </tr>

        </table>
			 		
		<hr class="clearer" />
	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
