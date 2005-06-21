<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>The AspectJ project at Eclipse.org: Development Plan</title>
  <link rel="stylesheet" href="aspectj_style.css" type="text/css" />
</head>
<body>
<div id="container">
<?php require("banner.html"); ?>
<div id="main">
  <!-- ================ Page specific content starts here ================ -->

<h1>aspectj: development plan</h1>

<p>Last update 21st June 2005</p>

<p>The next major release of AspectJ will be AspectJ 5. Details of the new
features planned for AspectJ 5 are documented in the
<a href="http://www.eclipse.org/aspectj/doc/next/adk15notebook">
AspectJ 5 Developer's Notebook</a>. 
</p>

<p>The AspectJ 5 M2 milestone build is currently available from the 
<a href="http://www.eclipse.org/aspectj/downloads.php">download page</a>
and supports full source compilation of Java 5 constructs and a complete implementation
of all the features described in the annotations, autoboxing, covariance, varargs, 
enumerated types, and "other changes in AspectJ 5" chapters in the AspectJ 5 Developer's
Notebook. The M2 build also supports the <code>pertypewithin</code> aspect
instantiation model, but not with a generic aspect declaration.</p>

<p>We are currently developing M3, which will include full support for the features
documented in the generics chapter of the AspectJ 5 Developer's Notebook. This 
milestone will also include support for the annotation based development style 
described in chapter 9, excluding inter-type declaration support (M4).  In addition,
M3 will support the enhanced load-time weaving mechanisms described in chapter
12 "load-time weaving". 
See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&target_milestone=1.5.0+M3&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED">
complete list of bugs and enhancements targeted
for the M3 release</a>. 
</p>

<p>AspectJ 5 M4 will complete the new function planned for the AspectJ 5 release with
a new set of reflection interfaces for AspectJ types, and completion of the @AspectJ
(annotation style) development support. See the <a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=AspectJ&target_milestone=1.5.0+M4&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED">
complete list of bugs and enhancements targeted
for the M4 release</a>. 

<p>Following M4 we will put out the first release candidate and then proceed to
AspectJ 5 (1.5.0 final) based on bug reports from the field.</p>

<table>
  <th>
      <td>build</td>
      <td>planned release date</td>
  </th>
  <tr>
      <td>AspectJ 5 M3</td>
      <td>17th July 2005</td>
  </tr>
  <tr>
      <td>AspectJ 5 M4</td>
      <td>19th August 2005</td>
  </tr>
  <tr>
      <td>AspectJ 5 RC1</td>
      <td>2nd September 2005</td>
  </tr>
  <tr>
      <td>AspectJ 5 final</td>
      <td>16th September 2005</td>
  </tr>
</table>

  <!-- ================ End of page specific content ===================== -->
</div>
</div>
</body>
</html>