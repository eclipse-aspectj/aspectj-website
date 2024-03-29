<?php

  # Set the theme for your project's web pages.
  # See the Committer Tools "How Do I" for list of themes
  # https://dev.eclipse.org/committers/
  $theme = "Lazarus";

  #	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
  #$projectInfo = new ProjectInfo("technology.aspectj");
  #$projectInfo->generate_common_nav( $Nav );

  $branding = <<<HTML
<STYLE TYPE="text/css">
  #midcolumn {
    margin-top: 5px;
  }
</STYLE>

<div id="branding">
  <img src="/aspectj/aspectjbanner2.png" width="502" height="42" alt="AspectJ">
</div>
HTML;

  $Menu->setProjectBranding($branding);

  $Nav->setLinkList(array());

  # Define your project-wide Nav bars here.
  # Format is Link text, link URL (can be https://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
  $Nav->addNavSeparator("AspectJ", "/aspectj/index.php");
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About This Project",
    "/projects/project_summary.php?projectid=tools.aspectj", "", 1);
  #$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About AspectJ", "/aspectj/description.php", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Team", "/aspectj/team.php", "_self", 1);
  # I do not think, we will use Eclipse release plans any longer, but rather GitHub milestones and releases
  #$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Plans", "https://www.eclipse.org/projects/project-plan.php?projectid=tools.aspectj", "_self", 1);

  $Nav->addNavSeparator("Users", "", "_self", 1);
  #$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", 	"/aspectj/gettingstarted.php", 	"_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "/aspectj/downloads.php", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Docs", "/aspectj/doc/latest/index.html", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/aspectj/bugs.php", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/aspectj/doc/latest/faq/faq.html", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Mailing lists", "/aspectj/userlists.php", "_self", 1);

  $Nav->addNavSeparator("Developers", "", "_self", 1);
  #$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Contributing", "/aspectj/developers.php", 	"_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Source code", "https://github.com/eclipse-aspectj/aspectj", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing list", "https://dev.eclipse.org/mailman/listinfo/aspectj-dev", "_self", 1);
  #$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Work tasks", "/aspectj/tasks.php", 	"_self", 1);

?>
