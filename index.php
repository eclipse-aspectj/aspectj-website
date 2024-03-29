<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
  $App = new App();
  $Nav = new Nav();
  $Menu = new Menu();
  include($App->getProjectCommon());

  # Begin: page-specific settings.  Change these.
  $pageTitle = "The AspectJ Project";
  $pageKeywords = "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
  $pageAuthor = "Type your name here";

  # Add page-specific Nav bars here
  # Format is Link text, link URL (can be https://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
  # $Nav->addNavSeparator("My Page Links", 	"downloads.php");
  # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
  # $Nav->addCustomNav("Google", "https://www.google.com/", "_blank", 3);
  # End: page-specific settings

  # Paste your HTML content between the HTML markers!
  $html = <<<HTML
<div id="maincontent">
  <div id="midcolumn" style="width: 80%">

    <!-- ========== "aspectj is... "  ============= -->
    <table id="aspectj-is" borderColor="#111111"
           cellSpacing="10" cellPadding="0" width="100%" border="0" valign="top">
      <tr>
        <td colSpan="2" width="50%">
          <img alt="AspectJ[TM] is" src="https://www.eclipse.org/aspectj/aspectjIs.gif "
               border="0" width="241" height="25">
        </td>

        <td colSpan="2" width="50%">
          <img alt="aspectj enables" src="https://www.eclipse.org/aspectj/aspectjEnables.gif "
               border="0" width="241" height="25">
        </td>
      </tr>
      <tr>
        <td width="10">&nbsp;</td>
        <td valign="top">
          <ul>
            <li> a seamless aspect-oriented extension
              to the Java<sup><small>tm</small></sup> programming language
            </li>

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
        <li>Blog: <a href="https://andrewclement.blogspot.com/">AspectJ Programming Blog</a></li>
        <li>Popular AspectJ downloads: <a href="/aspectj/downloads.php#most_recent">Latest development build</a> | <a href="/aspectj/downloads.php#stable_release">Latest stable release</a> | <a href="/aspectj/downloads.php">More
          downloads...</a></li>
        <li>Popular AspectJ docs: <a href="/aspectj/doc/released/adk15notebook/index.html">AspectJ 5 Developer's
          Notebook</a> | <a href="/aspectj/doc/released/progguide/index.html">Programming Guide</a> | <a href="/aspectj/doc/latest/index.html">More docs...</a></li>
        <li><a href="https://www.amazon.com/exec/obidos/ASIN/0321245873/qid=1112868888/sr=2-3/ref=pd_bbs_b_2_3/103-5274059-2049410">Eclipse
          AspectJ: </a> the book, by some of the leading AspectJ committers
        </li>
      </ul>
    </div>

    <hr class="clearer"/>

    <div class="homeitem">
      <h3>News and Events</h3>

      <li>Older news have been purged. If any, we are going to post more recent ones here.
        <br>
        <div align="right"><span class="dates"><i>posted 14-Feb-2024</i></span></div>
      </li>

    <hr class="clearer"/>

  </div>

    <div class="homeitem">
      <h3>Recent Books and Articles</h3>
      <ul>

        <li>
          <a href="https://manning.com/laddad2/"/>AspectJ in Action, Second Edition</a><br>
          March 2009<br>
          by Ramnivas Laddad
        </li>

        <li>
          <a href="https://www.infoq.com/articles/aspectj-with-ajdt">Making AspectJ development easier with AJDT</a>
          by Matt Chapman
        </li>

        <li>
          <a href="https://www.regdeveloper.co.uk/2006/10/26/aspects_java_aop/">RegDeveloper: Aspect oriented programming
            with Java</a>
          by John Hunt
        </li>

        <li>
          <a href="https://www.eclipse.org/articles/Article-Introducing-AJDT/article.html">Introducing AJDT: The AspectJ
            Development Tools</a>
          by Matt Chapman
        </li>

        <li>
          <a target="_top" href="https://www-128.ibm.com/developerworks/java/library/j-aopwork17.html">
            &quot;AOP@Work: Component Design with Contract4J&quot;</a>
          by Dean Wampler
        </li>

        <li>
          <a target="_top" href="https://www.ibm.com/developerworks/views/java/libraryview.jsp?search_by=AOP@work">
            &quot;AOP@Work series on IBM developerWorks&quot;</a>
          Series lead: Nicholas Lesiecki
        </li>

        <li>
          <a target="_top" href="https://www.ratio.co.uk/objectiveview.html">
            &quot;Introduction to AOP&quot;</a> in ObjectiveView Issue 9
          by Alex Ruiz
        </li>

        <li>
          <a target="_top" href="https://www.ibm.com/developerworks/java/library/j-aopwork15/">
            &quot;AOP@Work: AOP myths and realities&quot;</a>
          by Ramnivas Laddad
        </li>

        <li>
          <a target="_top" href="https://www.ibm.com/developerworks/java/library/j-aopwork14/">
            &quot;AOP@Work: Check out library aspects with AspectJ 5&quot;</a>
          by Wes Isberg
        </li>

        <li>
          <a target="_top" href="https://www.ibm.com/developerworks/java/library/j-aopwork13.html">
            &quot;AOP@Work: Dependency Injection with AspectJ and Spring&quot;</a>
          by Adrian Colyer
        </li>

      </ul>
    </div>

  </div>
</div>
HTML;

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
