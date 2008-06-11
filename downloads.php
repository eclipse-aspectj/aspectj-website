<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

// Sorts by newest first
function date_cmp($f1, $f2) {
   $f1stats=stat($f1);
   $f2stats=stat($f2);
   return $f2stats[9]-$f1stats[9];
}
// return entries in the directory that represent dev builds
function GetDevBuildsIn($dir){
   ini_set("max_execution_time",10);
   $devtag="aspectj-DEVELOPMENT-2";
   $root=opendir($dir) or die("Check $dir !");
   while (false!== ($file=readdir($root))) {
     if($file=="." || $file=="..") {continue;}
     // echo "$file<br>";
     if (substr($file,0,21) == $devtag) {
       $files[]="$dir/$file";
     }
   }
   @closedir($dir);
   usort($files, "date_cmp");
   return $files;
}

function GetChangesFilesIn($dir){
   ini_set("max_execution_time",10);
   $devtag="changes-";
   $root=opendir($dir) or die("Check $dir !");
   while (false!== ($file=readdir($root))) {
     if($file=="." || $file=="..") {continue;}
     // echo "$file<br>";
     if (substr($file,0,8) == $devtag) {
       $files[]="$dir/$file";
     }
   }
   @closedir($dir);
   usort($files, "date_cmp");
   return $files;
}

function ListDevBuilds($dir){
	$str = "";
	
	$devbuilds=GetDevBuildsIn($dir);
    $justthefirstfile=basename($devbuilds[0]);
    $stats=stat($devbuilds[0]);
    $str = $str . "<a href=\"http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/dev/$justthefirstfile\">$justthefirstfile</a><br>(size: $stats[7] bytes)";
    $str = $str . "<br><br>";
    $changesFiles=GetChangesFilesIn($dir);
    $justthefirstchangesfile=basename($changesFiles[0]);
    $stats2=stat($changesFiles[0]);
    $str = $str .  "<a href=\"http://download.eclipse.org/tools/aspectj/dev/$justthefirstchangesfile\">Changes in this build</a><br>";          
	
	return $str;
}

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
	$pageTitle 		= "AspectJ Downloads";
	$pageKeywords	= "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
	$pageAuthor		= "Type your name here";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings	
	#	
	# $builds = ListDevBuilds('/home/data/httpd/download.eclipse.org/tools/aspectj/dev');
	$builds = ListDevBuilds('$App->getDownloadBasePath()/tools/aspectj/dev');
	
	#$builds = ListDevBuilds('c:/temp');
		
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn" style="width: 80%">

	  <h1>Downloads</h1>


<p>The AspectJ compiler produces programs for any version of the Java platform 
      (jdk1.1 and later). The compiler itself requires Java2 (1.4 or later) to run. 
      Consult the <a href="doc/released/faq.html#q:compability">FAQ</a>
      for more details.&nbsp; All releases are provided under the terms and 
      conditions of the <a href="http://www.eclipse.org/legal/notice.html">Eclipse.org 
      Software User Agreement</a> unless otherwise specified.
    </p>
    
    <p>If you plan to use AspectJ inside the Eclipse IDE you can just <a href="http://www.eclipse.org/ajdt">
         download AJDT</a> since it includes a bundled AspectJ compiler. <a href="#ides"><i>More IDEs...</i></a>.</p>
         
<h2>Downloads</h2>

    <p>See below for a list of available AspectJ downloads. You probably want one of:
		the most recent <a href="#most_recent">development build</a>,
		the most recent <a href="#milestones">milestone build</a>, or
		the latest <a href="#stable_release">stable release</a>. <a href="#install">Installation
		instructions</a> and more information on 
		<a href="#ides">IDE support</a> can be found at the bottom of this page.
	</p>
	    
<div class="homeitem3col">
	<h3 id="most_recent">Most Recent Build</h3>
 	<ul>
 	<li>
 	  <b>Last Known Good developer build</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 			<tr>
 				<td>
				 	<ul>
						AspectJ Compiler, Browser, Ant tasks, and Documentation. Only download this version if you are prepared to work with a pre-release compiler. 
					    The most recent stable build below is the currently supported release version. 
					</ul>
				</td>
				<td rowspan="2" width="30%" align="right">
					    <!-- stick out reference to most recent dev build -->

					    	$builds
					    
                            <br><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-06-30&chfieldto=Now&chfieldvalue=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
                            Bugs resolved since last release</a>
				</td>
			</tr>
			<tr>
			    <td><br>
			      <i>This download is updated after every successful build and test cycle.</i>
			    </td>
			</tr>
		</tbody>
	</table>
	</li>
	</ul>
</div>

  <!-- ============ LATEST STABLE RELEASE ======================= -->

<div class="homeitem3col">
  <h3 id="stable_release">Latest Stable Release</h3>
  <ul>
    <li>
    <b>AspectJ 1.6.0, Released 23rd April, 2008</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
      <td width="30%" align="right">
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.0.jar">aspectj-1.6.0.jar</a> (~11M)
      </td>
    </tr>
    </table>
  </li>
  </ul>
</div>

  <!-- ============ ASPECTJ 6 MILESTONES -->
  <div class="homeitem3col">
  <h3 id="milestones">AspectJ 6</h3>
  <ul>
    <li>
    <b>AspectJ 1.6.0, Released 23rd April, 2008</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
      <td width="30%" align="right">
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.0.jar">aspectj-1.6.0.jar</a> (~11M)
      </td>
    </tr>
    </table>
    </li>
      <li>
    <b>AspectJ 1.6.0rc1, Released 16th April, 2008</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
      <td width="30%" align="right">
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.0rc1.jar">aspectj-1.6.0rc1.jar</a> (~11M)
      </td>
    </tr>
    </table>
  </li>
    <li>
    <b>AspectJ 1.6.0m2, Released 26th February, 2008</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
      <td width="30%" align="right">
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.0m2.jar">aspectj-1.6.0m2.jar</a> (~11M)
      </td>
    </tr>
    </table>
  </li>
    <li>
    <b>AspectJ 1.6.0m1, Released 16th January, 2008</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
      <td width="30%" align="right">
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/dev/aspectj-1.6.0m1.jar">aspectj-1.6.0m1.jar</a> (~11M)
      </td>
    </tr>
    </table>
  </li>
  </ul>
</div>
      
  <!-- ============ ASPECTJ 5 ======================= -->
<div class="homeitem3col"> 
  <h3 id="milestones">AspectJ 5</h3>
  <ul>
    <li>
    <b>AspectJ 1.5.4, Released 20th December, 2007</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
      <td width="30%" align="right">
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/downloads/aspectj-1.5.4.jar">aspectj-1.5.4.jar</a> (~11M)
      </td>
    </tr>
    </table>
  </li>
    <li>
    <b>AspectJ 1.5.3, Released 22nd November, 2006</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
    <tr>
      <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
      <td width="30%" align="right">
          <a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.3.jar">aspectj-1.5.3.jar</a> (~10M)
      </td>
    </tr>
    </table>
  </li>
    <li>
      <b>AspectJ 1.5.2a, Released 21st August, 2006</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		    <tr>
      			<td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.2a.jar">aspectj-1.5.2a.jar</a> (~10M)
	  			</td>
			</tr>
 	</table>
 	</li>
 		
 	<li>
 	<b>AspectJ 1.5.2, Released 30th June, 2006</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		     <tr>
      			<td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.2.jar">aspectj-1.5.2.jar</a> (~10M)
	  			</td>
			</tr>
	</table>
	</li>
	
	<li>
	<b>AspectJ 1.5.1a, Released 10th April, 2006</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		     <tr>
      			<td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.1_a.jar">aspectj-1.5.1_a.jar</a> (~10M)
	  			</td>
			</tr>
	</table>
	</li>
	
	<li>
	<b>AspectJ 1.5.0, Released 20th December, 2005</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		 	<tr>
      			<td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.0.jar">aspectj-1.5.0.jar</a> (~10M)
	  			</td>
			</tr>
	</table>
	</li>
	</ul>
</div>

<!--
    Commenting out all pre-release AspectJ 5.
    Normally I would just delete, but the convention in this document
    seems to be commenting - to preserve the original file location?

  <h3 id="milestones">AspectJ 5 Release Candidates</h3>

	<p>	Only download these versions if you are prepared to work with a pre-release compiler. 
	    	The most recent stable build below is the currently supported release version.
	</p>
	
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 		 	<tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.0 RC1, Released 14th December, 2005</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.0_RC1.jar">aspectj-1.5.0_RC1.jar</a> (~11M)
	  			</td>
			</tr>

		</tbody>
	</table>

  
  <h3 id="milestones">AspectJ 5 Milestone Builds</h3>

	<p>	Only download these versions if you are prepared to work with a pre-release compiler. 
	    	The most recent stable build below is the currently supported release version.
	</p>
	
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 		 	<tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.0 M5, Released 16th November, 2005</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.0_M5.jar">aspectj-1.5.0_M5.jar</a> (~11M)
	  			</td>
			</tr>
			
 			<tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.0 M4, Released 7th October, 2005</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.0_M4.jar">aspectj-1.5.0_M4.jar</a> (~9.7M)
	  			</td>
			</tr>
 		
 			<tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.0 M3a, Released 26th August, 2005</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.0_M3a.jar">aspectj-1.5.0_M3a.jar</a> (~9.1M)
	  			</td>
			</tr>
 		
 		
 			<tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.0 M2, Released 7th April, 2005</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/aspectj/dev/aspectj-1.5.0M2.jar">aspectj-1.5.0M2.jar</a> (~8.3M)
	  			</td>
			</tr>

 			<tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.0 M1, Released 10th December, 2004</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
				    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.5.0M1.jar">
	    			aspectj-1.5.0M1.jar</a> (~7.5M)
	  			</td>
			</tr>
		</tbody>
	</table>
    
    END of commenting out AspectJ 5 pre-release versions
    -->                    
	
  
  <!-- ============ ASPECTJ 1.2 ======================= -->
  
<div class="homeitem3col"> 
  <h3>AspectJ 1.2</h3>
  <ul>
  
  <li>
    <b>Version 1.2.1, Released November 5th, 2004</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 			<tr>
 				<td>
				 	<ul>
						AspectJ Compiler, Browser, Ant tasks, and Documentation
					</ul>
	 			 </td>
				<td width="30%" align="right">
				    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.2.1.jar">
	    			aspectj-1.2.1.jar</a> (7,382,062 bytes)
	  			</td>
			</tr>
	</table>
	</li>
	
<!--    		
    		<tr>
    			<td>
 					<dl>
	  					<dt>Version 1.2.1 release candidate 1, Released October 22nd, 2004</dt>
	  					<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
				    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.2.1rc1.jar">
	    			aspectj-1.2.1rc1.jar</a> (7,393,774 bytes)
	  			</td>
			</tr>
			
-->

  <li>
    <b>Version 1.2.0, Released May 25, 2004</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr>
    			<td>
 					<ul>
	  					AspectJ Compiler, Browser, Ant tasks, and Documentation
	  				</ul>
	  			</td>
				<td width="30%" align="right">
				    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.2.jar">
	    			aspectj-1.2.jar</a> (5,859,690 bytes)
	  			</td>
			</tr>	
		</table>
	</li>		
<!--
			<tr>
    			<td>
 					<dl>
	  					<dt>Version 1.2 release candidate 2, Released May 13, 2004</dt>
	  					<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
	 			  <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.2rc2.jar">
	    			aspectj-1.2rc2.jar</a> (5,853,184 bytes)
	  			</td>
			</tr>			

			<tr>
    			<td>
 					<dl>
	  					<dt>Version 1.2 release candidate 1, Released April 15, 2004</dt>
	  					<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
 					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.2rc1.jar">
				    aspectj-1.2rc1.jar</a> (5,860,538 bytes)	  			
				 </td>
			</tr>			
	</table>
-->
</div>

  <!-- ============ ASPECTJ 1.1 ======================= -->
<div class="homeitem3col"> 
  <h3>AspectJ 1.1</h3>
  <ul>
  <li>
    <b>Version 1.1.1, Released September 22nd, 2003</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 			<tr>
 				<td>
				 	<ul>
						AspectJ Compiler, Browser, Ant tasks, and Documentation
					</ul>
	 			 </td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.1.1.jar">
				    aspectj-1.1.1.jar</a> (6,352,092 bytes)	  			
				</td>
			</tr>
		</table>
	</li>
	
	<li>
    <b>Version 1.1.0, Released June 6, 2003</b>
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<tr>
 				<td>
				 	<ul>
						AspectJ Compiler, Browser, Ant tasks, and Documentation
					</ul>
	 			 </td>
				<td width="30%" align="right">
	    			<a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.1.0.jar">
	    			aspectj-1.1.0.jar</a> (6,297,885 bytes)	
				</td>
			</tr>
		</table>
	</li>
<!--
			<tr>
 				<td>
				 	<dl>
				 		<dt>Version 1.1.rc2, Released May 13, 2003</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
					</dl>
	 			 </td>
				<td width="30%" align="right">
	    			 <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.1rc2.jar">
	    			aspectj-1.1rc2.jar</a> (6,285,237 bytes)
				</td>
			</tr>

			<tr>
 				<td>
				 	<dl>
				 		<dt>Version 1.1.rc1, Released March 14, 2003</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
					</dl>
	 			 </td>
				<td width="30%" align="right">
	    			 <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.1rc1.jar">
	    			aspectj-1.1rc1.jar</a> (5,747,357 bytes)
				</td>
			</tr>
		</tbody>
	</table>
    		

	<tr>
	  <td colSpan="3"><b>Version 1.1beta4&nbsp;&nbsp;&nbsp; Released January 15, 2003</b></td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>AspectJ Compiler, Browser, Ant tasks, and Documentation</td>
	  <td>
	    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.1b4.jar">
	    aspectj-1.1b4.jar</a>
	    (5,792,693 bytes)
	  </td>
	</tr>
	<tr>
	  <td colSpan="3"><b>Version 1.1beta2&nbsp;&nbsp;&nbsp; Released December 18, 2002</b></td>
	</tr>
	<tr>
	  <td>&nbsp;</td>
	  <td>AspectJ Compiler, Browser, Ant tasks, and Documentation</td>
	  <td>
	    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.1b2.jar">
	    aspectj-1.1b2.jar</a>
	    (4,928,000 bytes)
	  </td>
	</tr>
	
      </table>
    </td>
  </tr>
-->
  </ul>
</div>

  <!-- ============ ASPECTJ 1.0 ======================= -->
<div class="homeitem3col"> 
 <h3>AspectJ 1.0</h3>
  <ul>
  <li>
    <b>Version 1.0.6</b>

						 	<table border="0" cellspacing="0" cellpadding="2" width="100%">
 									<tr>
										<td><ul>AspectJ Compiler and Browser (<i>binary distribution</i>)</ul></td>
										<td width="40%" align="right">
										    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-tools-1.0.6.jar">
										    aspectj-tools-1.0.6.jar</a> <i>(1,580,450 bytes)</i>
										</td>
									</tr>
									<tr>
										<td><ul>AspectJ Compiler and Browser (<i>source</i>)</ul></td>
										<td width="40%" align="right">
										    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-tools-src-1.0.6.tgz">
										    aspectj-tools-src-1.0.6.tgz</a> <i>(795,633 bytes)</i>										    
										</td>
									</tr>
																		
 									<tr>
										<td><ul>Documentation and Examples</ul></td>
										<td width="40%" align="right">
										    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-docs-1.0.6.tgz">
										    aspectj-docs-1.0.6.tgz</a> <i>(1,715,824 bytes) </i>
										</td>
									</tr>
 									<tr>
										<td><ul>Ant Tasks (released under the <a target="_top" href="http://apache.org/LICENSE.txt">
		    							Apache License</a>)</ul></td>
		    							<td width="40%" align="right">
										    <a href="http://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-antTasks-1.0.6.tgz">
										    aspectj-antTasks-1.0.6.tgz</a> <i>(83,124 bytes) </i>
		    							</td>
									</tr>
							</table>	
  
    <p align="left"><i>Note: All code, documentation and other files in the 1.0.6 release 
    are made available under the terms and conditions of the
    <a target="_top" href="http://www.mozilla.org/MPL/MPL-1.1.html">
    Mozilla Public License version 1.1</a>.</i></p>
		
		
	</li>
	</ul>	
</div>

  <!-- ============ INSTALLATION ======================= -->

  <h2 id="install">Installation</h2>

  <p>
      The <tt>.jar</tt> files should not be unzipped as they are self-extracting 
      Java-based GUI installers.&nbsp; On many systems they can be run directly by 
      selecting &quot;Open this file from its current location&quot; or by 
      double-clicking the downloaded file.&nbsp; If you download the <tt>.jar</tt> files 
      do not unzip them; instead invoke the GUI installer with the 
      <font face="Courier">java -jar</font> command on the corresponding file 
      e.g.: <tt><b>java&nbsp;-jar&nbsp;aspectj-1.1.0.jar</b></tt>
  </p>
  
  <!-- ============ IDE SUPPORT ======================= -->

  <h2 id="ides">Development Environment Support</h2>

	<dl>
		<dt><a target="_top" href="http://eclipse.org/ajdt">AJDT Project</a></dt>
		<dd>an Eclipse Tools project that provides an AspectJ plug-in for Eclipse.</dd>
		<dt><a target="_top" href="http://aspectj4jbuildr.sourceforge.net">AspectJ for JBuilder</a></dt>
		<dd>is an old SourceForge project that provides an AspectJ 
	    	OpenTool for Borland's JBuilder IDE.
	    </dd>
	    <dt><a target="_top" href="http://aspectj-netbeans.sourceforge.net">
	    	AspectJ for NetBeans</a>
	    </dt>
	    <dd> is an a SourceForge project that provides an 
	    	AspectJ Module for Sun's Forte/SunONEStudio4/NetBeans IDE.
	    </dd>
	    <dt><a target="_top" href="http://aspectj4emacs.sourceforge.net">
	    	AspectJ for Emacs and JDEE</a>
	    </dt>	
	    <dd>is an old SourceForge project that provides an 
	    	AspectJ mode for Emacs and an AspectJ extension to JDEE.
    	</dd>
    	<dt><a target="_top" href="https://jdeveloperaop.dev.java.net"> 
	    	jdeveloperaop</a>
	    </dt>
	    <dd>	is a java.net project to support AspectJ programming in 
	    	Oracle's JDeveloper IDE.
	    </dd>
        <!-- removed - installers not updated since July, 2005
	    <dt>Easy installers</dt>
	    <dd>Russ Miles has packaged together
	    	<a target="_top" href="http://www.aspectjcookbook.com">integrated 
	    	installers for Eclipse, AJDT, and AspectJ on the Windows and Mac platforms</a>.
    	</dd>
        -->
	</dl>
	

	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
