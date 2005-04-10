<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>The AspectJ project at Eclipse.org: Documentation</title>
  <link rel="stylesheet" href="aspectj_style.css" type="text/css" />
</head>
<body>
<div id="container">
<?php require("banner.html"); ?>
  <!-- ================ Page specific content starts here ================ -->

<!-- sub-banner for docs page -->
<table BORDER=0 CELLSPACING=5 CELLPADDING=2 WIDTH="100%" >
  <!-- header row -->
  <tr> 
    <td ALIGN=LEFT width="60%" valign="top">
      <h1>aspectj documentation</h1>
    </td>
    <td WIDTH="40%" align="right">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="http://eclipse.org/images/howto_banner.jpg" align="center" width="183" height="71">
    </td>
  </tr>

  <!-- links row -->
  <tr>
    <td ALIGN=LEFT width="100%" colspan="2">
      <table cellSpacing="0" cellPadding="0" align="left" border="0">
	<tr>
	  <td class="smallParagraph" height="26"><b>
	    <a href="http://www.eclipse.org/aspectj/docs.php">[doc index]</a>
	    &nbsp;<a href="doc/ajdk15notebook/index.html">
	    [AspectJ 5 language changes]</a>
	    &nbsp;<a href="doc/progguide/index.html">
	    [language]</a>
	    &nbsp;<a href="doc/devguide/index.html">
	    [tools]</a>
	    &nbsp;<a href="doc/faq.html">
	    [faq]</a>
	    &nbsp;<a href="http://www.eclipse.org/aspectj/publications.php">[publications]</a> 
	    &nbsp;<a href="http://www.eclipse.org/aspectj//sample-code.html">
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
      This pages contains links to documentation for AspectJ 1.2.1
      (For an earlier version, see the docs in that release.)
      </p>
      <p>For a list of books and articles on AspectJ see the <a href="publications.php">publications</a> page.</p>
      <!--
        <p>To learn the AspectJ language, read the
        <a href="doc/progguide/index.html">Programming Guide</a>. Focus 
        initially on the join point model and pointcuts, concepts AOP adds to OOP. 
        To see how the code works, tour the 
        <a href="doc/examples">examples</a> from the
        <a href="doc/progguide/examples.html">Examples</a>
        section of the <a href="doc/progguide/index.html">
        Programming Guide</a>.
      -->

    <h2>AspectJ 5 Developer's Notebook</h2>
	<p>The <a href="doc/ajdk15notebook/index.html">AspectJ 5 Developer's Notebook</a>
      describes changes to the AspectJ language and tools in the AspectJ 5 release. The
      programming guide has not yet been updated to reflect these changes.
    </p>
    
    <h2>Programming Guide</h2>
	<p> 
      The <a href="doc/progguide/index.html">Programming Guide</a> 
      introduces AOP and the AspectJ language:      
      &nbsp; <a href="doc/progguide/starting.html">
      Getting Started</a> introduces basic AspectJ semantics 
      and shows development- and production-time applications.
      <a href="doc/progguide/language.html">The AspectJ 
      Language</a> describes join points, pointcuts, advice, and 
      inter-type declarations, all features new to AOP.
      <a href="doc/progguide/examples.html">Examples</a> 
      walks through the code in <code>doc/examples</code>; 
      <a href="doc/progguide/idioms.html">Idioms</a> and  
      <a href="doc/progguide/pitfalls.html">Pitfalls</a> 
      offer rules on things to do (or not).
      The <a href="doc/quick.pdf">Quick Reference</a> summarizes syntax,
      but the <a href="doc/progguide/semantics.html">
      Semantics appendix</a> is the best reference for AspectJ usage.
    </p>

	<h2>Development Environment Guide</h2>
	 <p> The <a href="doc/devguide/index.html">Development Environment Guide</a> 
      describes how to use the
      command-line compiler <tt>ajc</tt>, ant tasks, <tt>ajdoc</tt> documentation tool, and the
      stand-alone <tt>ajbrowser</tt>.
    </p>
</div>
<!-- Eclipse AspectJ book -->

<div id="docs-inset">
  <!-- <h2>Eclipse Links</h2> -->
  
   <p align="center">
    <a href="http://www.amazon.com/exec/obidos/ASIN/0321245873/qid=1112868888/sr=2-3/ref=pd_bbs_b_2_3/103-5274059-2049410">
  	   <img src="images/eclipseaspectj.jpg" width="180" alt="Eclipse AspectJ Book Cover"/>
    </a>
   </p>

  <p align="center"><a href="http://www.amazon.com/exec/obidos/ASIN/0321245873/qid=1112868888/sr=2-3/ref=pd_bbs_b_2_3/103-5274059-2049410">
   	    Eclipse AspectJ</a> the book, by some of the leading AspectJ committers
  </p>	
  
  <p/>
   
</div>

<div id="main">
	<h2>Changes and Porting</h2>
	<p>
      Important fixes and new features for the 
      <a href="doc/README-121.html">1.2.1 release</a>,
      <a href="doc/README-12.html">1.2 release</a>, 
      <a href="doc/README-11.html">1.1 release</a>,
      or <a href="doc/changes.html">releases before and since 1.2</a>,
      and the 
      <a href="doc/porting.html">Porting Guide</a> for upgrading
      from older versions of the language. 
    </p>

	<h2>FAQ</h2>
	<p>
	 <a href="doc/faq.html">Frequently-asked questions</a> about the 
      AspectJ language, tools, and project.
    </p>
  
  	<h2>Contributed samples and trails</h2>
    <p>
      For a list of places to get example AspectJ code,
      see the <a href="doc/faq.html#q:exampleprograms">FAQ entry on example programs</a>.
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

	<h2>AspectJ Papers and Slides</h2>
      <p>Books and articles we know of are listed on the
      <a href="publications.html">Publications page</a>.
      We publish some presentations and tutorials outlining
      the rationale and concepts of AOP,
      the basics of the AspectJ language, and
      the differences from Java programs;
      these are in the AspectJ CVS tree at
      <a href="http://dev.eclipse.org/viewcvs/index.cgi/org.aspectj/modules/docs/teaching/exercises/?cvsroot=Technology_Project">
      <code>aspectj.org/modules/docs/teaching</code></a>, 
      and include answers to tutorial exercies.
      For instructions on downloading code from the CVS repository, see the
      <a href="doc/faq.html#q:buildingsource">FAQ entry on building source</a>.
      </p>
      <p> 
      Find earlier project history, papers, and articles on the
      <a target="_top" href="http://www.parc.com/groups/csl/projects/aspectj/">
      PARC project page</a>.

      <p>Spanish speakers might also be interested in "Programemos en AspectJ" at
      <a href="http://www.programemos.com">http://www.programemos.com.</p>
</div>


  <!-- ================ End of page specific content ===================== -->
</body>
</html>