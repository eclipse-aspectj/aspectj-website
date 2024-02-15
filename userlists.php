<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
  $App = new App();
  $Nav = new Nav();
  $Menu = new Menu();
  include($App->getProjectCommon());

  # Begin: page-specific settings.  Change these.
  $pageTitle = "AspectJ User Mailing lists";
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

    <h1>Mailing lists</h1>

    <div class="homeitem3col">
      <h3>aspectj-users@eclipse.org</h3>
      <ul>
        <li><a href="https://dev.eclipse.org/mailman/listinfo/aspectj-users">aspectj-users at eclipse.org</a><br>
          Supports discussion among AspectJ users and developers on topics such as language design,
          new features, and best usage practices.
        </li>
        <li><a href="https://dev.eclipse.org/mhonarc/lists/aspectj-users/maillist.html">Mailing list archive</a></li>
        <li><a href="https://www.mail-archive.com/aspectj-users@eclipse.org/">Search list on mail-archive.com mirror</a></li>
      </ul>
    </div>

    <div class="homeitem3col">
      <h3>aspectj-announce@eclipse.org</h3>
      <ul>
        <li><a href="https://dev.eclipse.org/mailman/listinfo/aspectj-announce">aspectj-announce at eclipse.org</a><br>
          Used only to announce new releases and other important events. This is a low traffic list.
        </li>
        <li><a href="https://dev.eclipse.org/mhonarc/lists/aspectj-announce/maillist.html">Mailing list archive</a></li>
      </ul>
    </div>

  </div>

</div>
HTML;

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
