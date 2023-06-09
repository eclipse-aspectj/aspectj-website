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
	$pageTitle 		= "AspectJ User Mailing lists";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Type your name here";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings	
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn" style="width: 80%">

	  <h1>Mailing lists</h1>

		<div class="homeitem3col">
			<h3>aspectj-users@eclipse.org</h3>
			<ul>
				<li><a href="https://dev.eclipse.org/mailman/listinfo/aspectj-users">
	    	aspectj-users at eclipse.org</a><br>
	    	Supports discussion among AspectJ users and developers on topics such 
	    	as language design, new features, and best usage practices.</li>
	    	
	    		<li><a href="http://dev.eclipse.org/mhonarc/lists/aspectj-users/maillist.html">
	    	Mailing list archive</a></li>
	    	
	    		<li><a href="http://www.eclipse.org/search/search.cgi?cmd=Search%21&form=extended&ps=10&m=all&t=5&ul=%2Fmhonarc%2Flists%2Faspectj-users&wm=wrd&t=News&t=Mail">Search list</a></li>
			
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>aspectj-announce@eclipse.org</h3>
			<ul>
				<li><a href="https://dev.eclipse.org/mailman/listinfo/aspectj-announce">
	    	aspectj-announce at eclipse.org</a><br>
	    	Used only to announce new releases and other important events. This is 
	    	a low traffic list.</li>
	    	
	    		<li><a href="http://dev.eclipse.org/mhonarc/lists/aspectj-announce/maillist.html">
	    	Mailing list archive</a></li>
	    	
	    		<li><a href="http://www.eclipse.org/search/search.cgi?cmd=Search%21&form=extended&ps=10&m=all&t=5&ul=%2Fmhonarc%2Flists%2Faspectj-announce&wm=wrd&t=News&t=Mail">Search list</a></li>
			
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>Archives</h3>
			<ul>
				<li><a href="http://dev.eclipse.org/viewcvs/indextech.cgi/~checkout~/aspectj-home/archives/users.zip">
	    	users at aspectj.org  ZIP archive (deprecated mailing list)</a>
	    	<br>These archives contain user discussion from August 1999 - December 2002.
 				</li>
	    	
	    		<li><a href="http://dev.eclipse.org/viewcvs/indextech.cgi/~checkout~/aspectj-home/archives/announce.zip">
		    announce at aspectj.org ZIP archive (deprecated mailing list)</a>		
			<br>These archives contain announcement messages from August 1999 - 
		    December 2002.
	    		</li>
			
			</ul>
		</div>

	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
