<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
  $App = new App();
  $Nav = new Nav();
  $Menu = new Menu();
  include($App->getProjectCommon());

  # Begin: page-specific settings.  Change these.
  $pageTitle = "AspectJ Committers and Contributors";
  $pageKeywords = "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse, Contributors";
  $pageAuthor = "Andy Clement";

  # Add page-specific Nav bars here
  # Format is Link text, link URL (can be https://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
  # $Nav->addNavSeparator("My Page Links", 	"downloads.php");
  # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
  # $Nav->addCustomNav("Google", "https://www.google.com/", "_blank", 3);
  # End: page-specific settings

  # Paste your HTML content between the HTML markers!
  $html = <<<HTML
<style> 
  /* FIXME: Temporary workaround for Hugo Solstice theme */
  th, td {
    padding-top: 2px;
    padding-bottom: 2px;
    padding-left: 5px;
    padding-right: 5px;
  }
</style>

<div id="maincontent">
  <div id="midcolumn">

    <h1>Team</h1>

    <p>We are grateful to the following for their contributions to the AspectJ project:</p>

    <div class="homeitem">

      <h3>Committers (active)</h3>

      <table cellpadding="2">
        <tr>
          <td><a href="https://scrum-master.de"/>Alexander Kriegisch</a></td>
          <td>Scrum-Master.de - Agile Project Management</td>
        </tr>
        <tr>
          <td>Andy Clement</td>
          <td>Broadcom Inc. (formerly VMware)</td>
        </tr>
      </table>

      <h3>Committers (alumni)</h3>

      <table cellpadding="2">
        <tr>
          <td>Matthew Webster</td>
          <td>IBM UK Ltd</td>
        </tr>
        <tr>
          <td>Wes Isberg</td>
          <td></td>
        </tr>
        <tr>
          <td><a href="https://aspectprogrammer.org"/>Adrian Colyer</a></td>
          <td>Interface 21</td>
        </tr>
        <tr>
          <td>Alex Vasseur</td>
          <td>BEA</td>
        </tr>
        <tr>
          <td><a href="https://kerstens.org/mik">Mik Kersten</a></td>
          <td>University of British Columbia</td>
        </tr>
        <tr>
          <td>Jim Hugunin</td>
          <td></td>
        </tr>
        <tr>
          <td>Erik Hilsdale</td>
          <td></td>
        </tr>
      </table>

    </div>

    <div class="homeitem">

      <h3>Contributors</h3>

      <p>
        Helen Hawkins (IBM UK Ltd), Ron Bodkin and many others who contributed code, documentation or other helpful
        things to AspectJ. Thanks to all of you!
      </p>
      <p>
        Some Git statistics (from February 2024, commit cbdbba0ab0) - please note the at least 5 incarnations of Andy Clement:

<pre><code>$ git shortlog -sne
  4772  aclement <aclement>
   953  acolyer <acolyer>
   918  wisberg <wisberg>
   534  Andy Clement <aclement@...>
   532  Alexander Kriegisch <Alexander@...>
   313  jhugunin <jhugunin>
   205  mkersten <mkersten>
   119  mwebster <mwebster>
   108  Andy Clement <aclement@...>
   100  Andy Clement <andrew.clement@...>
   100  avasseur <avasseur>
    94  ehilsdal <ehilsdal>
    41  Lars Grefer <eclipse@...>
    22  Andy Clement <aclement@...>
    19  Andrey Turbanov <turbanoff@...>
    11  hsestupin <stupin.sergey@...>
     7  Jerry James <loganjerry@...>
     4  Uri Simchoni <urisimchoni@...>
     3  Dmitry Mikhaylov <dmitry@...>
     2  Emmanuel Bourg <ebourg@...>
     2  eli-fin <eyfinkel@...>
     1  Andy Russell <arussell123@...>
     1  Anuj Dodhia <59048795+capgen628@...>
     1  Jonathan Leitschuh <Jonathan.Leitschuh@...>
     1  Kui Liu <brucekuiliu@...>
     1  Semyon Danilov <samvimes@...>
     1  Stefan Starke <stefan@...>
     1  Tobias Roeser <le.petit.fou@...>
     1  jkew <jkew@...></code></pre>

        Not to mention all commits done in other SCM systems before the initial Git import.
      </p>

    </div>

    <hr class="clearer"/>
  </div>

</div>
HTML;

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
