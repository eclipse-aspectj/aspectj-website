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
<i>Last updated: 20 March 2008</i>
</p>

<p>
  Here are some details of recent and upcoming AspectJ releases.
  
  <!--
  These are plotted on the
  <a href="http://www.eclipse.org/projects/timeline/">Eclipse timeline</a>.
  -->
  
</p>

<div class="homeitem3col">
<h3>AspectJ1.6.1</h3>
<p>Target: 30-Jun-08</p>
<p>Release themes:</p>
<ul>
<li>load-time weaving footprint 
<li>load-time weaving in multi-classloader environments
<li>issues with generics and intertype declarations
</ul>
</div>

<div class="homeitem3col">
<h3>Aspectj1.6.0</h3>
<p>Release themes:</p>
<ul>
<li>Java6 support
<li>Further annotation AspectJ language support
<li>Incremental compilation speed in AJDT
</ul>
<p>AspectJ 1.6.0 released 23-Apr-08 - see the downloads page.</p>
<p>AspectJ 1.6.0rc1 available 16-Apr-08.</p>
<p>AspectJ 1.6.0m2 available 26-Feb-08.</p>
<p>AspectJ 1.6.0m1 available 16-Jan-08.</p>
<p>
<p>
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&target_milestone=1.6.0+M1&target_milestone=1.6.0+M2&target_milestone=1.6.0+RC1&target_milestone=1.6.0&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">Bugs and enhancements addressed in 1.6.0</a>.

</div>

<div class="homeitem3col">
<h3>AspectJ 5, version 1.5.4</h3>
<p>Status: RC1 -  7th December 2007, Final - 20th December 2007</p>
<p>AspectJ 1.5.4 is a service refresh on the AspectJ 1.5 codestream.</p>
<p>
Shortcuts for detailed information:</p>
<ul>
<li>These <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&target_milestone=1.5.4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">bugs and enhancements</a> are fixed in AspectJ 1.5.4 .
</ul>
</div>

<div class="homeitem3col">
	<h3>AspectJ 1.5.3</h3>
	<p>
	Status: Released 22nd November 2006
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
