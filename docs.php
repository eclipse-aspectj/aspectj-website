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
	$pageTitle 		= "AspectJ Documentation";
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

	  <h1>Documentation</h1>

	  <div id="container">
 <table>
  <!-- links row -->
  <tr>
    <td ALIGN=LEFT width="100%" colspan="2">
      <table cellSpacing="0" cellPadding="0" align="left" border="0">
	<tr>
	  <td class="smallParagraph" height="26"><b>
	    <a href="/aspectj/docs.php">[doc index]</a>
	    &nbsp;<a href="doc/released/adk15notebook/index.html">
	    [AspectJ 5 language changes]</a>
	    &nbsp;<a href="doc/released/progguide/index.html">
	    [language]</a>
	    &nbsp;<a href="doc/released/devguide/index.html">
	    [tools]</a>
	    &nbsp;<a href="doc/released/faq.php">
	    [faq]</a>
	    &nbsp;<a href="http://www.eclipse.org/aspectj/publications.php">[publications]</a> 
	    &nbsp;<a href="http://www.eclipse.org/aspectj/sample-code.html">
	    [samples]</a> 
	    </b>
	  </td>
	  <td>&nbsp;</td>
	</tr>
      </table>
    </td>
  </tr>
</table>
</div>

<div id="docs-main">

<! -- main content for docs page -->
<p>
The AspectJ release documentation answers common questions and describes 
language and tool usage.  Other publications about AspectJ address topics
in AOP, and code samples demonstrate common idioms.  If you are new to AspectJ,
follow the trail proposed in the 
<a href="doc/released/index.html#paths">released documentation</a>.
</p>


<div class="homeitem" style="width: 97%">
<h3>AspectJ 5 Developer's Notebook</h3>
<ul>
<p>The <a href="doc/released/adk15notebook/index.html">AspectJ 5 Developer's Notebook</a>
summarises changes made to the AspectJ language in AspectJ 5. These changes are
<emphasis>not</emphasis> yet reflected in the programming guide.
</p>
</ul>
</div>

				<hr class="clearer" />

<div class="homeitem" style="width: 97%">
<h3>AspectJ Documentation packages</h3>
<ul>
<p>The AspectJ documentation package is included in the AspectJ download
	and linked below (both the most-recent released version and the
	next work-in-progress, as 
	<img border="0" height="13" width="13" src="images/next.gif" alt="next"/>).  
	Parts are also included with the
	Eclipse <a href="http://eclipse.org/ajdt">AJDT</a> plugin.
	For all contents, see the 
	<a href="doc/released/index.html">index</a> 
      <a href="doc/next/index.html">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a>.
</p>
</ul>

<ul>
<li>
<h4>AspectJ Language</h4>
      The <a href="doc/released/progguide/index.html">Programming Guide</a> 
      <a href="doc/next/progguide/index.html">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
      introduces AOP and the AspectJ language:     
	   
      &nbsp; <a href="doc/released/progguide/starting.html"> Getting Started</a> 
      <a href="doc/next/progguide/starting.html">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
	  introduces basic AspectJ semantics 
      and shows development- and production-time applications.
	  
      &nbsp; <a href="doc/released/progguide/language.html">The AspectJ Language</a> 
      <a href="doc/next/progguide/language.html">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
	  describes join points, pointcuts, advice, and 
      inter-type declarations, all features new to AOP.
	  
      &nbsp; <a href="doc/released/progguide/examples.html">Examples</a> 
      <a href="doc/next/progguide/examples.html">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
      walks through the code in 
      <a href="doc/released/examples"><code>doc/released/examples</code></a>
      <a href="doc/next/examples">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a>; 
	  
      <a href="doc/released/progguide/idioms.html">Idioms</a> 
      <a href="doc/next/progguide/idioms.html">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
	  and  
      <a href="doc/released/progguide/pitfalls.html">Pitfalls</a> 
      <a href="doc/next/progguide/pitfalls.html">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
      offer rules on things to do (or not).
      The <a href="doc/released/quick5.pdf">Quick Reference</a> 
      <a href="doc/next/quick5.pdf">
		<img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
		summarizes syntax,
      but the <a href="doc/released/progguide/semantics.html">
      Semantics appendix</a> 
      <a href="doc/next/progguide/semantics.html">
		<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
		is the best reference for AspectJ usage.
	</li>
	
	<li>	
<h4>Runtime and tools APIs</h4>
<ul>
<li>
<a href="doc/released/runtime-api/index.html">Javadocs for the AspectJ runtime API</a> 
<a href="doc/next/runtime-api/index.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a>.
</li>
<li>
<a href="doc/released/aspectj5rt-api/index.html">Javadocs for the "Java 5"-only runtime APIs</a> 
<a href="doc/next/aspectj5rt-api/index.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
(reflection API and annotations).
</li>
<li>
<a href="doc/released/weaver-api/index.html">Javadocs for the AspectJ weaver API</a> 
<a href="doc/next/weaver-api/index.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a>.
</li>
</ul>

</li>

<li>
<h4>AspectJ Tools</h4>
<p>
	
The 
<a href="doc/released/devguide/index.html">Development Environment Guide</a> 
<a href="doc/next/devguide/index.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a>
describes how to use the command-line compiler 
<a href="doc/released/devguide/ajc-ref.html">ajc</a>
<a href="doc/next/devguide/ajc-ref.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a>,

the Ant task 
<a href="doc/released/devguide/antTasks.html">iajc</a>
<a href="doc/next/devguide/antTasks.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 

the documentation tool
<a href="doc/released/devguide/rn01re02.html">AJDoc</a>
<a href="doc/next/devguide/ajdoc-ref.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 

the 
<a href="doc/released/devguide/ltw.html">load-time weaving (LTW) support</a>
<a href="doc/next/devguide/ltw.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 

and the stand-alone
<a href="doc/released/devguide/ajbrowser.html">AJ Browser</a>
<a href="doc/next/devguide/ajbrowser.html">
<img border="0" border="0" height="13" width="13" src="images/next.gif" alt="next"/></a>.

</p>	
</li>

<li>
<h4>Other documentation</h4>
 <p>The <a href="doc/released/pdguide/index.html"/>AspectJ problem diagnosis</a> guide describes the tracing/logging and dump framework.</p>
 <p>
 For answers to frequently-asked questions, see the 
  <a href="doc/released/faq.php">FAQ</a> 
  <a href="doc/next/faq.html">
	 <img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a> 
 </p>
 <p>For a history of important fixes and new features for AspectJ, see the
   <a href="doc/released/porting.html">Porting Guide</a> for upgrading
   from older versions of the language 
   and the release README files for
   <a href="doc/released/README-150.html">1.5.0</a>,
   <a href="doc/released/README-121.html">1.2.1</a>,
   <a href="doc/released/README-12.html">1.2</a>, 
   <a href="doc/released/README-11.html">1.1</a> or the summary of 
   <a href="doc/released/changes.html">changes</a>
	<a href="doc/released/changes.html">
	 <img border="0" height="13" width="13" src="images/next.gif" alt="next"/></a>.
</p>
</li>
</ul>
</div>


</div>

				<hr class="clearer" />


<div class="homeitem">
<h3>Online and external resources</h3>
<ul>
<p>
Books and articles we know of are listed on the
<a href="publications.php">Publications page</a>.

For our published tutorials and exercises outlining
the rationale and concepts of AOP, the basics of the AspectJ language, and
the differences from Java programs, see
<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.aspectj/modules/docs/teaching/exercises/?cvsroot=Technology_Project">
<code>aspectj.org/modules/docs/teaching</code></a>. 
(To get stuff from the CVS repository, see 
<a href="doc/released/faq.php#q:buildingsource">building source</a>.)
Spanish speakers might also be interested in "Programemos en AspectJ" at
<a href="http://www.programemos.com">http://www.programemos.com</a>.
Find earlier project history, papers, and articles on the
<a target="_top" href="http://www.parc.com/groups/csl/projects/aspectj/">
PARC project page</a>.
 </p>

<p>
  For a list of places to get example AspectJ code,
  see the <a href="doc/released/faq.php#q:exampleprograms">FAQ entry on example programs</a>.
  We collect and publish 
  <a href="sample-code.html">sample code contributions from community</a>, 
  including AspectJ programs and user-level trails for things like
  <a href="sample-code.html#trails-debugging-aspectj11">
  debugging AspectJ code</a>  or 
  <a href="sample-code.html#j2ee-tomcat4-precompileJsp">
  precompiling JSP's for Tomcat using AspectJ</a>.&nbsp;&nbsp;
  Popular entries include reusable code for 
  <a href="sample-code.html#library-pointcutIdioms">standard pointcut idioms</a>
  and 
  <a href="sample-code.html#pubs-papers-aodesignpatterns">design pattern implementations</a>.
 </p>
</ul>
</div>

<div class="homeitem">
<h3>Eclipse AspectJ book</h3>
  
   <p align="center">
    <a href="http://www.amazon.com/exec/obidos/ASIN/0321245873/qid=1112868888/sr=2-3/ref=pd_bbs_b_2_3/103-5274059-2049410">
  	   <img src="images/eclipseaspectj.jpg" width="180" alt="Eclipse AspectJ Book Cover"/>
    </a>
   </p>

  <p align="center"><a href="http://www.amazon.com/exec/obidos/ASIN/0321245873/qid=1112868888/sr=2-3/ref=pd_bbs_b_2_3/103-5274059-2049410">
   	    Eclipse AspectJ</a> the book, by some of the leading AspectJ committers
  </p>	
  

</div>


	</div>

</div>


EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
