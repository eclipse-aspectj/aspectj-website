<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>The AspectJ project at Eclipse.org: Downloads</title>
  <link rel="stylesheet" href="aspectj_style.css" type="text/css" />
</head>
<body>
<div id="container">
<?php require("banner.html"); ?>
<div id="main">
  <!-- ================ Page specific content starts here ================ -->

<h1>aspectj downloads</h1>

<p>The AspectJ compiler produces programs for any version of the Java platform 
      (jdk1.1 and later). The compiler itself requires Java2 (1.3 or later) to run. 
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
	    

	<h3 id="most_recent">Most Recent Build</h3>
 
 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 			<tr>
 				<td>
				 	<dl>
				 		<dt>Last Known Good developer build</dt>
						<dd>
						AspectJ Compiler, Browser, Ant tasks, and Documentation. Only download this version if you are prepared to work with a pre-release compiler. 
					    The most recent stable build below is the currently supported release version. 
					  </dd>
					</dl>
				</td>
				<td width="30%" align="right">
					    <!-- stick out reference to most recent dev build -->
							<?php
							  #$devbuilds=GetDevBuildsIn('k:/tmp');
							  $devbuilds=GetDevBuildsIn('/home/data/httpd/download.eclipse.org/technology/aspectj/dev');
                              $justthefirstfile=basename($devbuilds[0]);
                              $stats=stat($devbuilds[0]);
                              echo "<a href=\"http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/dev/$justthefirstfile\">$justthefirstfile</a><br><br>(size: $stats[7] bytes)";
                              echo "<br><br>";
                              $changesFiles=GetChangesFilesIn('/home/data/httpd/download.eclipse.org/technology/aspectj/dev');
                              $justthefirstchangesfile=basename($changesFiles[0]);
                              $stats2=stat($changesFiles[0]);
                              echo "<a href=\"http://download.eclipse.org/technology/aspectj/dev/$justthefirstchangesfile\">(Changes in this build)</a><br>";          
                            ?>
                            <br><a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=2006-06-30&chfieldto=Now&chfieldvalue=&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
                            Bugs resolved since last release</a>
				</td>
			</tr>
			<tr>
			    <td colSpan="3"><br>
			      <i>This download is updated after every successful build and test cycle.</i>
			    </td>
			</tr>
		</tbody>
	</table>

  <!-- ============ LATEST STABLE RELEASE ======================= -->

  <h3 id="stable_release">Latest Stable Release</h3>

      <table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 		    <tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.2a, Released 21st August, 2006</dt>
						<dd>AspectJ compiler, browser, documentation tool,
                            Ant tasks, and documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.2a.jar">aspectj-1.5.2a.jar</a> (~10M)
	  			</td>
			</tr>
		</tbody>
      </table> 
      

  <!-- ============ ASPECTJ 5 ======================= -->

  <h3 id="milestones">AspectJ 5</h3>

 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>

 		    <tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.2a, Released 21st August, 2006</dt>
						<dd>AspectJ compiler, browser, documentation tool,
                            Ant tasks, and documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.2a.jar">aspectj-1.5.2a.jar</a> (~10M)
	  			</td>
			</tr>
 		
 		     <tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.2, Released 30th June, 2006</dt>
						<dd>AspectJ compiler, browser, documentation tool,
                            Ant tasks, and documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.2.jar">aspectj-1.5.2.jar</a> (~10M)
	  			</td>
			</tr>
			
			
 		     <tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.1a, Released 10th April, 2006</dt>
						<dd>AspectJ compiler, browser, documentation tool,
                            Ant tasks, and documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.1_a.jar">aspectj-1.5.1_a.jar</a> (~10M)
	  			</td>
			</tr>
			
 		 	<tr>
 				<td>
				 	<dl>
				 		<dt>AspectJ 1.5.0, Released 20th December, 2005</dt>
						<dd>AspectJ compiler, browser, documentation tool,
                            Ant tasks, and documentation. 
	  					</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.0.jar">aspectj-1.5.0.jar</a> (~10M)
	  			</td>
			</tr>

		</tbody>
	</table>

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
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.0_RC1.jar">aspectj-1.5.0_RC1.jar</a> (~11M)
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
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.0_M5.jar">aspectj-1.5.0_M5.jar</a> (~11M)
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
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.0_M4.jar">aspectj-1.5.0_M4.jar</a> (~9.7M)
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
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/aspectj-1.5.0_M3a.jar">aspectj-1.5.0_M3a.jar</a> (~9.1M)
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
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/aspectj/dev/aspectj-1.5.0M2.jar">aspectj-1.5.0M2.jar</a> (~8.3M)
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
				    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.5.0M1.jar">
	    			aspectj-1.5.0M1.jar</a> (~7.5M)
	  			</td>
			</tr>
		</tbody>
	</table>
    
    END of commenting out AspectJ 5 pre-release versions
    -->                    
	
  
  <!-- ============ ASPECTJ 1.2 ======================= -->
  
  <h3>AspectJ 1.2</h3>

 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 			<tr>
 				<td>
				 	<dl>
				 		<dt>Version 1.2.1, Released November 5th, 2004</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
					</dl>
	 			 </td>
				<td width="30%" align="right">
				    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.2.1.jar">
	    			aspectj-1.2.1.jar</a> (7,382,062 bytes)
	  			</td>
			</tr>

<!--    		
    		<tr>
    			<td>
 					<dl>
	  					<dt>Version 1.2.1 release candidate 1, Released October 22nd, 2004</dt>
	  					<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
				    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.2.1rc1.jar">
	    			aspectj-1.2.1rc1.jar</a> (7,393,774 bytes)
	  			</td>
			</tr>
-->
			<tr>
    			<td>
 					<dl>
	  					<dt>Version 1.2.0, Released May 25, 2004</dt>
	  					<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
				    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.2.jar">
	    			aspectj-1.2.jar</a> (5,859,690 bytes)
	  			</td>
			</tr>			
<!--
			<tr>
    			<td>
 					<dl>
	  					<dt>Version 1.2 release candidate 2, Released May 13, 2004</dt>
	  					<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
	  				</dl>
	  			</td>
				<td width="30%" align="right">
	 			  <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.2rc2.jar">
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
 					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.2rc1.jar">
				    aspectj-1.2rc1.jar</a> (5,860,538 bytes)	  			
				 </td>
			</tr>			
-->
		</tbody>
	</table>

  <!-- ============ ASPECTJ 1.1 ======================= -->

  <h3>AspectJ 1.1</h3>

 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 			<tr>
 				<td>
				 	<dl>
				 		<dt>Version 1.1.1, Released September 22nd, 2003</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
					</dl>
	 			 </td>
				<td width="30%" align="right">
					<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.1.1.jar">
				    aspectj-1.1.1.jar</a> (6,352,092 bytes)	  			
				</td>
			</tr>

			<tr>
 				<td>
				 	<dl>
				 		<dt>Version 1.1.0, Released June 6, 2003</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
					</dl>
	 			 </td>
				<td width="30%" align="right">
	    			<a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.1.0.jar">
	    			aspectj-1.1.0.jar</a> (6,297,885 bytes)	
				</td>
			</tr>
<!--
			<tr>
 				<td>
				 	<dl>
				 		<dt>Version 1.1.rc2, Released May 13, 2003</dt>
						<dd>AspectJ Compiler, Browser, Ant tasks, and Documentation</dd>
					</dl>
	 			 </td>
				<td width="30%" align="right">
	    			 <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.1rc2.jar">
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
	    			 <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.1rc1.jar">
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
	    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.1b4.jar">
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
	    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-1.1b2.jar">
	    aspectj-1.1b2.jar</a>
	    (4,928,000 bytes)
	  </td>
	</tr>
	
-->
      </table>
    </td>
  </tr>

  <!-- ============ ASPECTJ 1.0 ======================= -->

 <h3>AspectJ 1.0</h3>

 	<table border="0" cellspacing="0" cellpadding="0" width="100%">
 		<tbody>
 			<tr>
 				<td colspan="2">
				 	<dl>
				 		<dt>Version 1.0.6</dt>
						<dd>
						 	<table border="0" cellspacing="0" cellpadding="5" width="100%">
 								<tbody>
 									<tr>
										<td>AspectJ Compiler and Browser (<i>binary distribution</i>)</td>
										<td width="30%" align="right">
										    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-tools-1.0.6.jar">
										    aspectj-tools-1.0.6.jar</a> <i>(1,580,450 bytes)</i>
										</td>
									</tr>
									<tr>
										<td>AspectJ Compiler and Browser (<i>source</i>)</td>
										<td width="30%" align="right">
										    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-tools-src-1.0.6.tgz">
										    aspectj-tools-src-1.0.6.tgz</a> <i>(795,633 bytes)</i>										    
										</td>
									</tr>
																		
 									<tr>
										<td>Documentation and Examples</td>
										<td width="30%" align="right">
										    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-docs-1.0.6.tgz">
										    aspectj-docs-1.0.6.tgz</a> <i>(1,715,824 bytes) </i>
										</td>
									</tr>
 									<tr>
										<td>Ant Tasks (released under the <a target="_top" href="http://apache.org/LICENSE.txt">
		    							Apache License</a>)</td>
		    							<td width="30%" align="right">
										    <a href="http://www.eclipse.org/downloads/download.php?file=/technology/ajdt/aspectj-antTasks-1.0.6.tgz">
										    aspectj-antTasks-1.0.6.tgz</a> <i>(83,124 bytes) </i>
		    							</td>
									</tr>
								</tbody>
							</table>
						</dd>
					</dl>
	 			 </td>
			</tr>
		</tbody>
	</table>
	
  
    <p align="left">Note: All code, documentation and other files in the 1.0.6 release 
    are made available under the terms and conditions of the
    <a target="_top" href="http://www.mozilla.org/MPL/MPL-1.1.html">
    Mozilla Public License version 1.1</a>.</p>
			
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
		<dd>an Eclipse Technology project that provides an AspectJ plug-in for Eclipse.</dd>
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
	
  <!-- ================ End of page specific content ===================== -->
</div>
</div>
</body>
</html>
<?php 
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

?>