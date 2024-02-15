<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
  $App = new App();
  $Nav = new Nav();
  $Menu = new Menu();
  include($App->getProjectCommon());

  // Sorts by newest first
  function date_cmp($f1, $f2)
  {
    $f1stats = stat($f1);
    $f2stats = stat($f2);
    return $f2stats[9] - $f1stats[9];
  }

  // return entries in the directory that represent dev builds
  function GetDevBuildsIn($dir)
  {
    ini_set("max_execution_time", 10);
    $devtag = "aspectj-DEVELOPMENT-2";
    $root = opendir($dir) or die("Check $dir !");
    while (false !== ($file = readdir($root))) {
      if ($file == "." || $file == "..") {
        continue;
      }
      // echo "$file<br>";
      if (substr($file, 0, 21) == $devtag) {
        $files[] = "$dir/$file";
      }
    }
    @closedir($dir);
    usort($files, "date_cmp");
    return $files;
  }

  function GetChangesFilesIn($dir)
  {
    ini_set("max_execution_time", 10);
    $devtag = "changes-";
    $root = opendir($dir) or die("Check $dir !");
    while (false !== ($file = readdir($root))) {
      if ($file == "." || $file == "..") {
        continue;
      }
      // echo "$file<br>";
      if (substr($file, 0, 8) == $devtag) {
        $files[] = "$dir/$file";
      }
    }
    @closedir($dir);
    usort($files, "date_cmp");
    return $files;
  }

  function ListDevBuilds($dir)
  {
    $str = "";

    $devbuilds = GetDevBuildsIn($dir);
    $justthefirstfile = basename($devbuilds[0]);
    $stats = stat($devbuilds[0]);
    $str = $str . "<a href=\"https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/dev/$justthefirstfile\">$justthefirstfile</a><br>(size: $stats[7] bytes)";
    $str = $str . "<br><br>";
    $changesFiles = GetChangesFilesIn($dir);
    $justthefirstchangesfile = basename($changesFiles[0]);
    $stats2 = stat($changesFiles[0]);
    $str = $str . "<a href=\"https://download.eclipse.org/tools/aspectj/dev/$justthefirstchangesfile\">Changes in this build</a><br>";

    return $str;
  }

  # Begin: page-specific settings.  Change these.
  $pageTitle = "AspectJ Downloads";
  $pageKeywords = "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
  $pageAuthor = "Type your name here";

  # Add page-specific Nav bars here
  # Format is Link text, link URL (can be https://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
  # $Nav->addNavSeparator("My Page Links", 	"downloads.php");
  # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
  # $Nav->addCustomNav("Google", "https://www.google.com/", "_blank", 3);
  # End: page-specific settings

  # $builds = ListDevBuilds('/home/data/httpd/download.eclipse.org/tools/aspectj/dev');
  $rootDir = $App->getDownloadBasePath();
  $builds = ListDevBuilds("$rootDir/tools/aspectj/dev");

  #$builds = ListDevBuilds('c:/temp');

  # Paste your HTML content between the HTML markers!
  $html = <<<HTML
<div id="maincontent">
  <div id="midcolumn" style="width: 80%">

    <h1>Downloads</h1>
    
    <p>
      Please note, that all releases are provided under the terms and conditions of the
      <a href="https://www.eclipse.org/legal/notice.html">Eclipse.org Software User Agreement</a>
      unless otherwise specified.
    </p>

    <h2>AspectJ libraries</h2>

    <p>
      AspectJ consists of the following main artifacts, the more recent versions of which can all be found on
      <a href="https://central.sonatype.com/namespace/org.aspectj">Maven Central</a> and consumed using build tools like
      Maven, Gradle etc.:
      <ul>
        <li><code>org.aspectj:aspectjrt</code> - the AspectJ runtime</li>
        <li><code>org.aspectj:aspectjweaver</code> - the AspectJ weaver</li>
        <li><code>org.aspectj:aspectjtools</code> - the AspectJ compiler</li>
        <li><code>org.aspectj:aspectjmatcher</code> - the AspectJ matcher</li>
      </ul> 
    </p>
    <p>
      Occasionally, an AspectJ developer might deploy a snapshot release (development version) of the above libraries on
      <code>https://oss.sonatype.org/content/repositories/snapshots</code>. Adding this URL as a snapshot repository to
      your build configuration enables you to consume snapshots, if you need them, e.g. to re-test fixed bugs or test
      unreleased new features.
    </p>
    
    <h2>AspectJ distribution installer</h2>

    <p>
      If you need a full AspectJ distribution with the main libraries (runtime, weaver, compiler), command line tools
      and documentation, please download the executable JAR installer for the release of your choice.
    </p>
    <p>
      Since release 1.9.7, you can download installers from the
      <a href="https://github.com/eclipse-aspectj/aspectj/releases">AspectJ GitHub releases</a> page.
      Historical release installers can be found in the list below.
    </p>
    <p>
      The installer JAR should not be unzipped, as it is a self-extracting Java-based GUI installer. On many systems,
      it be run directly by selecting &quot;Open this file from its current location&quot; or by double-clicking the downloaded
      file.&nbsp;Otherwise, simply call <code>java&nbsp;-jar&nbsp;aspectj-1.9.21.jar</code> (replace the version according to your
      needs). If you wish to install AspectJ into a protected location, e.g. <code>c:\Program Files\Java\AspectJ</code>
      on Windows, you might need to run the Java command from an elevated prompt ("run as administrator"). 
    </p>
    <p>
      For information about how to use AspectJ with build tools and IDEs, please check
      <a href="https://github.com/eclipse-aspectj/aspectj/blob/master/docs/developer/IDE.md">this overview</a>.
    </p>

    <h2>Historical installer versions</h2>

    <!-- ============ ASPECTJ 9 ======================= -->
    <div class="homeitem3col">
      <h3 id="milestones">AspectJ 9</h3>
      <ul>
        <li>
          <b>AspectJ 1.9.6, Released 22 Jul 2020</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.6.jar">aspectj-1.9.6.jar</a> (~17M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.6-src.jar">aspectj-1.9.6-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.9.5, Released 28 Nov 2019</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.5.jar">aspectj-1.9.5.jar</a> (~17M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.5-src.jar">aspectj-1.9.5-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.9.4, Released 10 May 2019</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.4.jar">aspectj-1.9.4.jar</a> (~17M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.4-src.jar">aspectj-1.9.4-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.9.3, Released 4 Apr 2019</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.3.jar">aspectj-1.9.3.jar</a> (~17M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.3-src.jar">aspectj-1.9.3-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.9.3.RC1, Released 7 Mar 2019</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.3.RC1.jar">aspectj-1.9.3.RC1.jar</a> (~17M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.3.RC1-src.jar">aspectj-1.9.3.RC1-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.9.2, Released 24 Oct 2018</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.2.jar">aspectj-1.9.2.jar</a> (~17M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.2-src.jar">aspectj-1.9.2-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.9.1, Released 20 Apr 2018</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.1.jar">aspectj-1.9.1.jar</a> (~17M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.1-src.jar">aspectj-1.9.1-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.9.0, Released 2 Apr 2018</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.0.jar">aspectj-1.9.0.jar</a> (~17M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.9.0-src.jar">aspectj-1.9.0-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
      </ul>
    </div>

    <!-- ============ ASPECTJ 8 ======================= -->
    <div class="homeitem3col">
      <h3 id="milestones">AspectJ 8</h3>
      <ul>
        <li>
          <b>AspectJ 1.8.14, Released 6 Mar 2019</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.14.jar">aspectj-1.8.14.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.14-src.jar">aspectj-1.8.14-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.13, Released 15 Nov 2017</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.13.jar">aspectj-1.8.13.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.13-src.jar">aspectj-1.8.13-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.11, Released 26 Sep 2017</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.11.jar">aspectj-1.8.11.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.11-src.jar">aspectj-1.8.11-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.10, Released 12 Dec 2016</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.10.jar">aspectj-1.8.10.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.10-src.jar">aspectj-1.8.10-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.9, Released 14 Mar 2016</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.9.jar">aspectj-1.8.9.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.9-src.jar">aspectj-1.8.9-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.8, Released 7 Jan 2016</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/188/aspectj-1.8.8.jar">aspectj-1.8.8.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/188/aspectj-1.8.8-src.jar">aspectj-1.8.8-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.7, Released 9 Sep 2015</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.7.jar">aspectj-1.8.7.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.7-src.jar">aspectj-1.8.7-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.6, Released 8 Jun 2015</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.6.jar">aspectj-1.8.6.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.6-src.jar">aspectj-1.8.6-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.5, Released 28 Jan 2015</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.5.jar">aspectj-1.8.5.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.5-src.jar">aspectj-1.8.5-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.4, Released 6 Nov 2014</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.4.jar">aspectj-1.8.4.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.4-src.jar">aspectj-1.8.4-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.3, Released 23 Oct 2014</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.3.jar">aspectj-1.8.3.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.3-src.jar">aspectj-1.8.3-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.2, Released 14 Aug 2014</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.2.jar">aspectj-1.8.2.jar</a> (~15M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.2-src.jar">aspectj-1.8.2-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.1, Released 20 Jun 2014</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.1.jar">aspectj-1.8.1.jar</a> (~14M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.1-src.jar">aspectj-1.8.1-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.8.0, Released 17 Apr 2014</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.0.jar">aspectj-1.8.0.jar</a> (~14M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.8.0-src.jar">aspectj-1.8.0-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
      </ul>
    </div>

    <!-- ============ ASPECTJ 7 ======================= -->
    <div class="homeitem3col">
      <h3 id="milestones">AspectJ 7</h3>
      <ul>
        <li>
          <b>AspectJ 1.7.4, Released 25 Oct 2013</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.4.jar">aspectj-1.7.4.jar</a> (~13M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.4-src.jar">aspectj-1.7.4-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.7.3, Released 13 Jun 2013</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.3.jar">aspectj-1.7.3.jar</a> (~13M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.3-src.jar">aspectj-1.7.3-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.7.2, Released 15 Feb 2013</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.2.jar">aspectj-1.7.2.jar</a> (~13M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.2-src.jar">aspectj-1.7.2-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.7.1, Released 10 Sep, 2012</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.1.jar">aspectj-1.7.1.jar</a> (~13M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.1-src.jar">aspectj-1.7.1-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.7.0, Released 2-Jul-2012</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.0.jar">aspectj-1.7.0.jar</a> (~13M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.7.0-src.jar">aspectj-1.7.0-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
      </ul>
    </div>

    <!-- ============ ASPECTJ 6 ======================= -->
    <div class="homeitem3col">
      <h3 id="milestones6">AspectJ 6</h3>
      <ul>
        <li>
          <b>AspectJ 1.6.13, Released 25-Apr-2013</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.13.jar">aspectj-1.6.13.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.13-src.jar">aspectj-1.6.13-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.12, Released 18-Oct-2011</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.12.jar">aspectj-1.6.12.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.12-src.jar">aspectj-1.6.12-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.11, Released 15-Mar-2011</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.11.jar">aspectj-1.6.11.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.11-src.jar">aspectj-1.6.11-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.10, Released 22-Oct-2010</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.10.jar">aspectj-1.6.10.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.10-src.jar">aspectj-1.6.10-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.9, Released 5-Jul-2010</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.9.jar">aspectj-1.6.9.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.9-src.jar">aspectj-1.6.9-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.8, Released 8-Jan-2010</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.8.jar">aspectj-1.6.8.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.8-src.jar">aspectj-1.6.8-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.7, Released 31st December, 2009</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.7.jar">aspectj-1.6.7.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.7-src.jar">aspectj-1.6.7-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.6, Released 30th September, 2009</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.6.jar">aspectj-1.6.6.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.6-src.jar">aspectj-1.6.6-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.5, Released 17th June, 2009</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.5.jar">aspectj-1.6.5.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.5-src.jar">aspectj-1.6.5-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.4, Released 2nd April, 2009</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.4.jar">aspectj-1.6.4.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.4-src.jar">aspectj-1.6.4-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.3, Released 23rd December, 2008</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.3.jar">aspectj-1.6.3.jar</a> (~12M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.3-src.jar">aspectj-1.6.3-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.2, Released 3rd October, 2008</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.2.jar">aspectj-1.6.2.jar</a> (~11M)<br>
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.2-src.jar">aspectj-1.6.2-src.jar</a>
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.1, Released 3rd July, 2008</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.1.jar">aspectj-1.6.1.jar</a> (~11M)
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.6.0, Released 23rd April, 2008</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.6.0.jar">aspectj-1.6.0.jar</a> (~11M)
              </td>
            </tr>
          </table>
        </li>
      </ul>
    </div>

    <!-- ============ ASPECTJ 5 ======================= -->
    <div class="homeitem3col">
      <h3 id="milestones">AspectJ 5</h3>
      <ul>
        <li>
          <b>AspectJ 1.5.4, Released 20th December, 2007</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/downloads/aspectj-1.5.4.jar">aspectj-1.5.4.jar</a> (~11M)
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.5.3, Released 22nd November, 2006</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.3.jar">aspectj-1.5.3.jar</a> (~10M)
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.5.2a, Released 21st August, 2006</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.2a.jar">aspectj-1.5.2a.jar</a> (~10M)
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.5.2, Released 30th June, 2006</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.2.jar">aspectj-1.5.2.jar</a> (~10M)
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.5.1a, Released 10th April, 2006</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.1_a.jar">aspectj-1.5.1_a.jar</a> (~10M)
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>AspectJ 1.5.0, Released 20th December, 2005</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td><ul>AspectJ compiler, browser, documentation tool, Ant tasks, and documentation.</ul></td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/aspectj/aspectj-1.5.0.jar">aspectj-1.5.0.jar</a> (~10M)
              </td>
            </tr>
          </table>
        </li>
      </ul>
    </div>

    <!-- ============ ASPECTJ 1.2 ======================= -->
    <div class="homeitem3col">
      <h3>AspectJ 1.2</h3>
      <ul>
        <li>
          <b>Version 1.2.1, Released November 5th, 2004</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tbody>
            <tr>
              <td>
                <ul>
                  AspectJ Compiler, Browser, Ant tasks, and Documentation
                </ul>
              </td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.2.1.jar">
                  aspectj-1.2.1.jar</a> (7,382,062 bytes)
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>Version 1.2.0, Released May 25, 2004</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td>
                <ul>
                  AspectJ Compiler, Browser, Ant tasks, and Documentation
                </ul>
              </td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.2.jar">
                  aspectj-1.2.jar</a> (5,859,690 bytes)
              </td>
            </tr>
          </table>
        </li>
      </ul>
    </div>

    <!-- ============ ASPECTJ 1.1 ======================= -->
    <div class="homeitem3col">
      <h3>AspectJ 1.1</h3>
      <ul>
        <li>
          <b>Version 1.1.1, Released September 22nd, 2003</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td>
                <ul>
                  AspectJ Compiler, Browser, Ant tasks, and Documentation
                </ul>
              </td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.1.1.jar">
                  aspectj-1.1.1.jar</a> (6,352,092 bytes)
              </td>
            </tr>
          </table>
        </li>
        <li>
          <b>Version 1.1.0, Released June 6, 2003</b>
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td>
                <ul>
                  AspectJ Compiler, Browser, Ant tasks, and Documentation
                </ul>
              </td>
              <td width="30%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-1.1.0.jar">
                  aspectj-1.1.0.jar</a> (6,297,885 bytes)
              </td>
            </tr>
          </table>
        </li>
      </ul>
    </div>

    <!-- ============ ASPECTJ 1.0 ======================= -->
    <div class="homeitem3col">
      <h3>AspectJ 1.0</h3>
      <ul>
        <li>
          <b>Version 1.0.6</b>

          <table border="0" cellspacing="0" cellpadding="2" width="100%">
            <tr>
              <td><ul>AspectJ Compiler and Browser (<i>binary distribution</i>)</ul></td>
              <td width="40%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-tools-1.0.6.jar">
                  aspectj-tools-1.0.6.jar</a> <i>(1,580,450 bytes)</i>
              </td>
            </tr>
            <tr>
              <td><ul>AspectJ Compiler and Browser (<i>source</i>)</ul></td>
              <td width="40%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-tools-src-1.0.6.tgz">
                  aspectj-tools-src-1.0.6.tgz</a> <i>(795,633 bytes)</i>
              </td>
            </tr>

            <tr>
              <td><ul>Documentation and Examples</ul></td>
              <td width="40%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-docs-1.0.6.tgz">
                  aspectj-docs-1.0.6.tgz</a> <i>(1,715,824 bytes) </i>
              </td>
            </tr>
            <tr>
              <td><ul>Ant Tasks (released under the <a target="_top" href="https://apache.org/LICENSE.txt">
                Apache License</a>)</ul></td>
              <td width="40%" align="right">
                <a href="https://www.eclipse.org/downloads/download.php?file=/tools/ajdt/aspectj-antTasks-1.0.6.tgz">
                  aspectj-antTasks-1.0.6.tgz</a> <i>(83,124 bytes) </i>
              </td>
            </tr>
          </table>

          <p align="left"><i>Note: All code, documentation and other files in the 1.0.6 release
            are made available under the terms and conditions of the
            <a target="_top" href="https://www.mozilla.org/MPL/MPL-1.1.html">
              Mozilla Public License version 1.1</a>.</i></p>

        </li>
      </ul>
    </div>

  </div>

</div>
HTML;

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
