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
	$pageTitle 		= "The AspectJ Project";
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

  <!-- ========== "aspectj is... "  ============= -->
    <table id="aspectj-is" borderColor="#111111"
           cellSpacing="10" cellPadding="0" width="100%" border="0" valign="top">
      <tr>
        <td colSpan="2" width="50%">
          <img alt="AspectJ[TM] is" src="http://www.eclipse.org/aspectj/aspectjIs.gif "
	       border="0" width="241" height="25">
	</td>

        <td colSpan="2" width="50%">
          <img alt="aspectj enables" src="http://www.eclipse.org/aspectj/aspectjEnables.gif "
	       border="0" width="241" height="25">
	</td>
      </tr>
      <tr>
        <td width="10">&nbsp;</td>
        <td valign="top">
         <ul>
          <li> a seamless aspect-oriented extension
        to the Java<sup><small>tm</small></sup> programming language</li>

          <li>Java platform compatible</li>
          <li>easy to learn and use</li>
         </ul>
        </td>
        <td width="10">&nbsp;</td>
        <td valign="top">
	<ul>
	  <li>clean modularization of crosscutting concerns, such as error 
	    checking and handling, synchronization, context-sensitive behavior, 
	    performance optimizations, monitoring and logging, debugging support, 
	    and multi-object protocols
	  </li>

	</ul>
      </td>
      </tr>
    </table>

<div class="homeitem3col">
  <h3>Quick Links</h3>
	<ul>
<li>For Eclipse development: <a href="/ajdt">AJDT: The AspectJ Development Tools</a></li>
<li>Blog: <a href="http://andrewclement.blogspot.com/">AspectJ Programming Blog</a></li>
<li>Popular AspectJ downloads: <a href="/aspectj/downloads.php#most_recent">Latest development build</a> | <a href="/aspectj/downloads.php#stable_release">Latest stable release</a> | <a href="/aspectj/downloads.php">More downloads...</a></li>
<li>Popular AspectJ docs: <a href="/aspectj/doc/released/adk15notebook/index.html">AspectJ 5 Developer's Notebook</a> | <a href="/aspectj/doc/released/progguide/index.html">Programming Guide</a> | <a href="/aspectj/docs.php">More docs...</a></li>
<li><a href="http://www.amazon.com/exec/obidos/ASIN/0321245873/qid=1112868888/sr=2-3/ref=pd_bbs_b_2_3/103-5274059-2049410">Eclipse AspectJ: </a> the book, by some of the leading AspectJ committers</li>
</ul>
</div>
		
				<hr class="clearer" />
				
		<div class="homeitem">
			<h3>News and Events</h3>
   <ul>
   
   <li>AspectJ 1.6.9 milestone 1 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-169.html">readme</a>
   for more information.  There are several new features in this release, please
   see the readme for more info.
   <br><div align="right"><span class="dates"><i>posted 16-Apr-10</i></span></div>
   </li>

   <li>AspectJ 1.6.8 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-168.html">readme</a>
   for more information.  There are two fixes in 1.6.8 beyond what was in 1.6.7, 
   they are both documented in detail in the README.
   <br><div align="right"><span class="dates"><i>posted 8-Jan-10</i></span></div>
   </li>
   
   <li>AspectJ 1.6.7 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-167.html">readme</a>
   for more information.
   <br><div align="right"><span class="dates"><i>posted 31-Dec-09</i></span></div>
   </li>
   
   <li>AspectJ 1.6.6 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-166.html">readme</a>
   for more information.
   <br><div align="right"><span class="dates"><i>posted 30-Sep-09</i></span></div>
   </li>
   
   <li>AspectJ 1.6.5 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-165.html">readme</a>
   for more information.
   <br><div align="right"><span class="dates"><i>posted 17-Jun-09</i></span></div>
   </li>

   <li>AspectJ 1.6.4 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-164.html">readme</a>
   for more information.
   <br><div align="right"><span class="dates"><i>posted 02-Apr-09</i></span></div>
   </li>
   
   <li>Two new blogs are online for learning more about AJDT and tips and tricks with AspectJ.<br>
   <a href="http://andrewclement.blogspot.com/">AspectJ Programming</a><br>
   <a href="http://contraptionsforprogramming.blogspot.com/">Contraptions for Programming</a><br>
   <br><div align="right"><span class="dates"><i>posted 01-Mar-09</i></span></div>
   </li>
   
   <li>Ramnivas Laddad has updated "AspectJ in Action"!<br>
   <i>"AspectJ in Action, Second Edition is a revised and updated edition of the bestselling first edition. 
   This book, now covering AspectJ 6 and Spring 2.5, will guide you through AOP and AspectJ using 
   practical applications so you can create systems that are easier to understand, implement, and maintain."</i>
   <br>
    <a href="http://manning.com/laddad2/"/>AspectJ in Action, Second Edition</a><br>
March 2009<br>
by Ramnivas Laddad<br>
<div align="right"><span class="dates"><i>posted 01-Mar-09</i></span></div>
</li>

   <li>AspectJ 1.6.3 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-163.html">readme</a>
   for more information.
   <br><div align="right"><span class="dates"><i>posted 23-Dec-08</i></span></div>
   </li>
   
   <li>AspectJ 1.6.2 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-162.html">readme</a>
   for more information.  For this release we are also making available the src
   jar from the download page.
   <br><div align="right"><span class="dates"><i>posted 03-10-08</i></span></div>
   </li>

   <li>AspectJ 1.6.1 is now <a href="downloads.php">available for download</a>.
   Please try it out!  See the <a href="doc/released/README-161.html">readme</a>
   for more information.  This release contains over 60 bug fixes as well as a
   refactored weaver that weaves faster using less memory.
   <br><div align="right"><span class="dates"><i>posted 03-07-08</i></span></div>
   </li>
   
   <li>AspectJ 1.6.1rc1 is now <a href="downloads.php">available for download</a>.
   <br><div align="right"><span class="dates"><i>posted 25-06-08</i></span></div>
   </li>
   
   <li>AspectJ 1.6.0 final is now <a href="downloads.php">available for download</a>.
   See the <a href="doc/released/README-160.html">readme</a> 
   for more information.  This release supports parameter annotation matching and
   annotation value matching (see the readme for more information).
   <br><div align="right"><span class="dates"><i>posted 23-04-08</i></span></div>
   </li>

   <li>AspectJ 1.5.4 is now <a href="downloads.php">available for download</a>.
   It includes <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&target_milestone=1.5.4&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
   numerous fixes</a> that have been incorporated since the 1.5.3 release.  
   <br><div align="right"><span class="dates"><i>posted 20-12-07</i></span></div>
   </li>
   
   <li>The AspeCt-oriented C (ACC) team have released version 0.7 of their compiler and 
   toolset.  The project can be found <a href="http://www.aspectc.net">here</a>.  The highlights are 
   described in the <a href="http://www.aspectc.net/release_v07.txt">release notes</a>.
   <br><div align="right"><span class="dates"><i>posted 25-09-07</i></span></div>
   </li>

   <li>AspectJ 1.5.3 is now <a href="downloads.php">available for download</a>. 
   It includes <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&target_milestone=1.5.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
   over 80 fixes and enhancements</a> that have been incorporated since the 1.5.2 
   release.  For a description of some of the notable changes in 1.5.3, see the 
   <a href="doc/released/README-153.html">1.5.3 README</a>.
   <br><div align="right"><span class="dates"><i>posted 22-11-06</i></span></div>
   </li>
   
   <!--li>AspectJ 1.5.3rc1 (release candidate 1) is now <a href="downloads.php">available for download</a>.
   It includes <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&target_milestone=1.5.3&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&resolution=FIXED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">
   over 80 fixes and enhancements</a> that have been incorporated since the 1.5.2 
   release.  Please download this release and report any problems you find.
   <br><div align="right"><span class="dates"><i>posted 08-11-06</i></span></div>
   </li-->
	<li>
   AspectJ 1.5.2 is now <a href="downloads.php">available for download</a>.
   It includes approximately 60 fixes and enhancements that have been incorporated since the 1.5.1a 
   release.  For full details see the 
   <a href="doc/released/README-152.html">1.5.2 README</a>.
   <br><div align="right"><span class="dates"><i>posted 30-06-06</i></span></div>
   </li>
   
   

<li>
AspectJ 1.5.1 is now <a href="downloads.php">available for download</a>. This
   release contains a number of bug fixes and minor enhancements from 1.5.0, together
   with performance and memory usage improvements resulting in greatly reduced
   memory usage when building from within AJDT (and noticeable improvements outside
   of AJDT too). For full details see the 
   <a href="doc/released/README-151.html">1.5.1 README</a>.

<br><div align="right"><span class="dates"><i>posted 04-04-06</i></span></div>
</li>

	                </ul>
	       </div>

	<div class="homeitem">
			<h3>Recent Books and Articles</h3>
	          <ul>

<li>
    <a href="http://manning.com/laddad2/"/>AspectJ in Action, Second Edition</a><br>
March 2009<br>
by Ramnivas Laddad
</li>

<li>
<a href="http://www.infoq.com/articles/aspectj-with-ajdt">Making AspectJ development easier with AJDT</a>
by Matt Chapman
</li>	          
	        	          
<li>
<a href="http://www.regdeveloper.co.uk/2006/10/26/aspects_java_aop/">RegDeveloper: Aspect oriented programming with Java</a>
by John Hunt
</li>
	          
<li>
<a href="http://www.eclipse.org/articles/Article-Introducing-AJDT/article.html">Introducing AJDT: The AspectJ Development Tools</a>
by Matt Chapman
</li>
	          
<li>
<a target="_top" href="http://www-128.ibm.com/developerworks/java/library/j-aopwork17.html">	
               &quot;AOP@Work: Component Design with Contract4J&quot;</a>
         by Dean Wampler
</li>

<li>
<a target="_top" href="http://www.ibm.com/developerworks/views/java/libraryview.jsp?search_by=AOP@work">	
               &quot;AOP@Work series on IBM developerWorks&quot;</a>
         Series lead: Nicholas Lesiecki
</li>

<li>
<a target="_top" href="http://www.ratio.co.uk/objectiveview.html">	
               &quot;Introduction to AOP&quot;</a> in ObjectiveView Issue 9
         by Alex Ruiz
</li>

<li>
      	<a target="_top" href="http://www.ibm.com/developerworks/java/library/j-aopwork15/">	
               &quot;AOP@Work: AOP myths and realities&quot;</a>
         by Ramnivas Laddad
</li>

<li>
      	<a target="_top" href="http://www.ibm.com/developerworks/java/library/j-aopwork14/">	
               &quot;AOP@Work: Check out library aspects with AspectJ 5&quot;</a>
         by Wes Isberg
</li>

<li>
      	<a target="_top" href="http://www.ibm.com/developerworks/java/library/j-aopwork13.html">	
               &quot;AOP@Work: Dependency Injection with AspectJ and Spring&quot;</a>
         by Adrian Colyer
</li>

</ul>
</div>

	<hr class="clearer" />
		

</div>

<!--
	<div id="rightcolumn" style="width: 170px">
		<div class="sideitem">
			<h6>Related links</h6>
			<ul>
				<li><a href="http://eclipse.org/ajdt">AJDT</a></li>
				<li><a href="http://aosd.net">AOSD.net</li>
				<li><a href="http://www.parc.com/research/csl/projects/aspectj/default.html">AspectJ PARC Page</li>
				<li><a href="http://www.amazon.com/exec/obidos/ASIN/0321245873/qid=1112868888/sr=2-3/ref=pd_bbs_b_2_3/103-5274059-2049410">Eclipse AspectJ Book</li>

			</ul>
		</div>
		<div class="sideitem">
			<h6>The Aspects Blog</h6>
			<ul>
	   <li><a href="http://www.aspectprogrammer.org/blogs/adrian/2006/03/graham_hamilton.html" title="Graham Hamilton on AOP" target="external">Graham Hamilton on AOP</a></li>
<li><a href="http://www.aspectprogrammer.org/blogs/adrian/2006/02/tips_for_using.html" title="Tips for using Eclipse effectively" target="external">Tips for using Eclipse effectively</a></li>

<li><a href="http://www.aspectprogrammer.org/blogs/adrian/2006/02/a_practical_gui_2.html" title="A Practical Guide to Using an Aspect Library (part I)" target="external">A Practical Guide to Using an Aspect Library (part I)</a></li>

			</ul>
		</div>

		<div class="sideitem">
			<h6>Alex Vasseur's blog</h6>
			<ul>
	   <li><a href="http://blogs.codehaus.org/people/avasseur/archives/001308_free_as_open_source_they_said.html" title="Free as Open Source they said?" target="external">Free as Open Source they said?</a></li>
<li><a href="http://blogs.codehaus.org/people/avasseur/archives/001290_microsoft_goes_aop.html" title="Microsoft goes AOP?" target="external">Microsoft goes AOP?</a></li>

<li><a href="http://blogs.codehaus.org/people/avasseur/archives/001281_spring_2x_innovation_or_maturity.html" title="Spring 2.x -  innovation or maturity?" target="external">Spring 2.x -  innovation or maturity?</a></li>
			</ul>
		</div>

		<div class="sideitem">
			<h6>Aspectivity</h6>
			<ul>
	    <li><a href="http://ramnivas.com/blog/index.php?p=23" title="AOP Madness and Sanity: A Response" target="external">AOP Madness and Sanity: A Response</a></li>
<li><a href="http://ramnivas.com/blog/index.php?p=22" title="AOP: Myths and realities" target="external">AOP: Myths and realities</a></li>

<li><a href="http://ramnivas.com/blog/index.php?p=21" title="Javapolis Experience" target="external">Javapolis Experience</a></li>
			</ul>
		</div>

		<div class="sideitem">
			<h6>Ron Bodkin on AOP</h6>
			<ul>
	  <li><a href="http://rbodkin.blogs.com/ron_bodkins_blog/2006/03/industry_case_s.html" title="Industry Case Studies at AOSD 2006" target="external">Industry Case Studies at AOSD 2006</a></li>
<li><a href="http://rbodkin.blogs.com/ron_bodkins_blog/2006/03/demos_at_aosd_2.html" title="Demos at AOSD 2006" target="external">Demos at AOSD 2006</a></li>

<li><a href="http://rbodkin.blogs.com/ron_bodkins_blog/2006/03/enterprise_aop_.html" title="Enterprise AOP Tutorial at AOSD" target="external">Enterprise AOP Tutorial at AOSD</a></li>

			</ul>
		</div>

		<div class="sideitem">
			<h6>Jonas Bonér's blog</h6>
			<ul>
	   <li><a href="http://feeds.feedburner.com/grubbel?m=44" title="The Optimized Null Check Pattern" target="external">The Optimized Null Check Pattern</a></li>
<li><a href="http://feeds.feedburner.com/grubbel?m=43" title="Interview" target="external">Interview</a></li>

<li><a href="http://feeds.feedburner.com/grubbel?m=42" title="Want To Work At Terracotta?" target="external">Want To Work At Terracotta?</a></li>

			</ul>
		</div>

		<div class="sideitem">
			<h6>Dion Almaer on AOP</h6>
			<ul>
	  <li><a href="http://www.almaer.com/blog/archives/001056.html" title="Application Monitoring with AspectJ, JMX, and GlassBox" target="external">Application Monitoring with AspectJ, JMX, and GlassBox</a></li>
<li><a href="http://www.almaer.com/blog/archives/001046.html" title="Future of AOP 2005: Jonas Boner and Adrian Colyer move on!" target="external">Future of AOP 2005: Jonas Boner and Adrian Colyer move on!</a></li>

<li><a href="http://www.almaer.com/blog/archives/000961.html" title="JVM support for AOP in JRockit" target="external">JVM support for AOP in JRockit</a></li>

			</ul>
		</div>


	</div>

-->

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
