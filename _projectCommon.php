<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/ 
	$theme = "Phoenix";

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	#$projectInfo = new ProjectInfo("technology.aspectj");
	#$projectInfo->generate_common_nav( $Nav );

	$Nav->setLinkList(array());

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addNavSeparator("AspectJ", 	"/aspectj/index_new.php");
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About", "/aspectj/description.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Committers", "/aspectj/committers.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Plans", "/aspectj/plans_new.php", 	"_self", 1);

	$Nav->addNavSeparator("Users", "", "_self", 1);
	#$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Getting Started", 	"/aspectj/gettingstarted.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", 	"/aspectj/downloads.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Bugs", "/aspectj/bugs.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ", "/aspectj/doc/released/faq.html", "_self", 1);
	#$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Demos", "/aspectj/demos/", "_self", 1);
	#$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;New Features", "/aspectj/newfeatures/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Mailing list", "http://dev.eclipse.org/mailman/listinfo/aspectj-users", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Newsgroup", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.technology.aspectj", "_self", 1);

	$Nav->addNavSeparator("Developers", "", "_self", 1);
	#$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Contributing", "/aspectj/developers.php", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;CVS", "http://dev.eclipse.org/viewcvs/indextech.cgi/org.aspectj/modules/", 	"_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Mailing list", "http://dev.eclipse.org/mailman/listinfo/aspectj-dev", "_self", 1);
	#$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;Work tasks", "/aspectj/tasks.php", 	"_self", 1);

?>
