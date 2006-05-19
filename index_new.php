<?php                                require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App  = new App(); $Nav = new Nav(); $Menu  = new Menu();  include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

 #*****************************************************************************
 #
 # template.php
 #
 # Author:   Denis Roy
 # Date:   2005-06-16
 #
 # Description: Type your page comments here - these are not sent to the browser
 #
 #
 #****************************************************************************
 
 #
 # Begin: page-specific settings.  Change these. 
 $pageTitle   = "The AspectJ Project";
 $pageKeywords = "Type, page, keywords, here";
 $pageAuthor  = "Type your name here";
 
 # Add page-specific Nav bars here
 # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
 # $Nav->addNavSeparator("My Page Links",  "downloads.php");
 # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
 # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

 # End: page-specific settings
 #
  
 # Paste your HTML content between the EOHTML markers! 
 $html = <<<EOHTML

<div id="maincontent">
 <div id="midcolumn">
  <h1>$pageTitle</h1>

  <!-- ========== "aspectj is... "  ============= -->
    <table id="aspectj-is" style="BORDER-COLLAPSE: collapse" borderColor="#111111"
           cellSpacing="0" cellPadding="0" width="100%" border="0" valign="top">
      <tr>
        <td colSpan="2" width="35%">
          <img alt="AspectJ[TM] is" src="http://www.eclipse.org/aspectj/aspectjIs.gif "
        border="0" width="241" height="25">
 </td>

        <td colSpan="2" width="65%">
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

 <hr class="clearer" />
  
  <div class="homeitem3col">
   <h3>News and Events</h3>
                 <ul>

 <li>
A podcast <a href="http://www.se-radio.net/index.php?post_id=78154">
   interview with Gregor Kiczales</a> recorded at this year's AOSD conference
   is now available at <a href="http://www.se-radio.net">Software Engineering Radio</a>.
   The interview covers a number of topics including the history of AOP, the
   relationship of AOP to interceptors, industry acceptance of AOP, early aspects,
   and adoption strategies.

<br><div align="right"><span class="dates"><i>posted 09-04-06</i></span></div>
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

<li>
     Gerard Davidson released a version of AJDT with AspectJ 5 
     for JDeveloper 10.1.3.
     To get it, use the automatic update feature in JDeveloper
     to find AspectJ via the "Open Source and Partner" update center.
<br><div align="right"><span class="dates"><i>posted 03-04-06</i></span></div>
</li>

<li>
   AspectJ 5 released! It contains a small number
   of minor fixes since RC1, plus a slight change to the
   syntax for @DeclareParents. See the 
   <a href="doc/released/README-150.html">1.5.0 README</a> for details of the release.
   You can download AspectJ 5 from the 
   <a href="downloads.php">downloads page</a>.
<br><div align="right"><span class="dates"><i>posted 20-12-05</i></span></div>
</li>
                 </ul>
        </div>

 <hr class="clearer" />

 <div class="homeitem3col">
   <h3>Recent Books and Articles</h3>
           <ul>
<li>
<a target="_top" href="http://www-128.ibm.com/developerworks/java/library/j-aopwork17.html"> 
               &quot;AOP@Work: Component Design with Contract4J&quot;</a>
         by n Wampler
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

</ul>
</div>

 <hr class="clearer" />
  

</div>

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
   <h6>Jonas Bon�r's blog</h6>
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
</div>


EOHTML;


 # Generate the web page
 $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>