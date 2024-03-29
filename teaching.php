<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
  $App = new App();
  $Nav = new Nav();
  $Menu = new Menu();
  include($App->getProjectCommon());

  # Begin: page-specific settings.  Change these.
  $pageTitle = "The AspectJ Project: Teaching";
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

    <h1>Who's teaching AOSD</h1>

    <p> This list is a compilation of responses to a query sent out in November 2004 to find out
      which establishments and individuals were teaching courses on the topic of
      aspect-oriented software development, or courses that included some AOSD content. The
      courses listed here are not exclusively teaching AspectJ, and nor are they in any way
      "recommended" by the AspectJ team (we haven't taken them ourselves). </p>
    <p>If you're teaching a course with some AOSD element in it and would like to be included on
      this list then please let us know.</p>

    <h2>Courses with online materials</h2>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
      <thead>
      <tr>
        <th>Lecturer(s)</th>
        <th>Organisation</th>
        <th>Details</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Prof. Oege de Moor</td>
        <td>Oxford University</td>
        <td>3rd year undergraduate course (also available as an MSc module) on AOP. Uses
          the <a href="https://www.aspectbench.org">abc compiler</a> for AspectJ. [<a href="https://web.comlab.ox.ac.uk/oucl/courses/topics04-05/ood/">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Prof. Mira Mezini</td>
        <td>Darmstadt University of Technology</td>
        <td>Teaching AO as parts of two courses: Software Design, and Component Technology for Distributed Systems
          [Course materials]
        </td>
      </tr>
      <tr>
        <td>Jeff Gray, Ph.D.</td>
        <td>University of Alabama at Birmingham</td>
        <td>Course on Reflective and Adaptive systems with 6 weeks of AOP content.
          [<a href="https://www.cis.uab.edu/cs622/">Course materials</a>,
          <a href="https://www.cis.uab.edu/gray/Pubs/scicop-2004.pdf">paper</a>]
        </td>
      </tr>
      <tr>
        <td>Dr Awais Rashid</td>
        <td>Lancaster University</td>
        <td>MSc. module on AOSD
          [<a href="https://www.comp.lancs.ac.uk/postgraduates/mod_aosd.html">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Paulo Borba, Sergio Soares</td>
        <td>Federal University of Pernambuco</td>
        <td>Aspect-Oriented Programming course
          [<a href="https://www.cin.ufpe.br/~scbs/talp1/index_en.html">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Sergio Soares</td>
        <td>Catholic University of Pernambuco</td>
        <td>Aspect-Oriented Programming course
          [<a href="https://www.dei.unicap.br/~sergio/tac/">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Francisco Reverbel</td>
        <td>University of Sao Paulo</td>
        <td>Object-Oriented Programming course (with aspect content)
          [<a href="https://www.ime.usp.br/~kon/MAC5715/aulas/Aula16.html">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Bedir Tekinerdogan, Ph.D.</td>
        <td>University of Twente, The Netherlands</td>
        <td>Aspect Oriented Software Development course
          [<a href="https://www.cs.bilkent.edu.tr/taosd03">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Wim Vanderperren</td>
        <td>Vrije Universiteit Brussel (Belgium)</td>
        <td>Masters course in Aspect-Oriented Programming
          [<a href="https://ssel.vub.ac.be/index.php?sitecommand=./Courses/technieken/index.php">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Constantinos Constantinides</td>
        <td>Concordia University</td>
        <td>Software Comprehension and Maintenance (including AOP and AO refactoring)
          [<a href="https://www.cs.concordia.ca/~comp6431">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Dr.Guenter Kniesel</td>
        <td>Bonn University</td>
        <td>AOSD course
          [<a href="https://roots.iai.uni-bonn.de/teaching/vorlesungen/2004aosd/">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Jonathan Aldrich</td>
        <td>Carnegie Mellon University</td>
        <td>Objects and Aspects: Language Support for Extensibility and Evolvability
          [<a href="https://www-2.cs.cmu.edu/~aldrich/courses/819">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Erik Ernst</td>
        <td>Aarhus</td>
        <td>Aspect Oriented Software Development
          [<a href="https://mit.au.dk/da/uddan/udbudbeskriv.cfm?udbudid=1974&amp;lan=en">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Walter Cazzola PhD</td>
        <td>University of Milano</td>
        <td>Reflection and Aspect-Oriented Programming [<a href="https://www.disi.unige.it/person/CazzolaW">
          Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Mariano Ceccato, Filippo Ricca</td>
        <td>University of Trento, Italy</td>
        <td>Laboratory of Sofware Analysis (1 topic of many) [<a href="https://star.itc.it/ricca/swatII">
          Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Dr Dirk Heuzeroth</td>
        <td>University of Karlsruhe, Germany</td>
        <td>Component Based Software Engineering [<a href="https://www.info.uni-karlsruhe.de/lehre/2004SS/swk">
          Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Gary T. Leavens</td>
        <td>Iowa State University</td>
        <td>ComS541 - discusses AspectJ from the perspective of programming language design and semantics [
          <a href="https://www.cs.iastate.edu/~leavens/ComS541/lectures/aspectj/">Course materials</a>]
        </td>
      </tr>
      <tr>
        <td>Gregor Kiczales</td>
        <td>University of British Columbia</td>
        <td>4th year undergraduate compiler course builds a simple AspectJ compiler [
          <a href="https://www.ugrad.cs.ubc.ca/~cs411/">Course Materials</a>]
        </td>
      </tr>
      <tr>
        <td>Karl Lieberherr
        </td>
        <td>Northeastern University
        </td>
        <td>Several Masters Courses, see the
          [<a href="https://www.ccs.neu.edu/research/demeter/course/AspectJ_For_Teaching/">Information Page</a>]
        </td>
      </tr>
      <tr>
        <td>Manuel Menezes de Sequeira</td>
        <td>ISCTE (Instituto Superior de Ciencias do Trabalho e da Empresa)</td>
        <td>5th year course on advanced programming with substantial part on AOP using AspectJ
          [<a href="https://www.iscte.pt/PA/">Course Materials (Portuguese)</a>]
        </td>
      </tr>

      </tbody>
    </table>

    <h2>Other academic courses</h2>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
      <thead>
      <tr>
        <th>Lecturer(s)</th>
        <th>Organisation</th>
        <th>Details</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Lodewijk Bergmans, Mehmet Aksit</td>
        <td>University of Twente</td>
        <td>Component and Aspect-Oriented Programming course (90% AOP), Advanced Programming Concepts course
        </td>
      </tr>
      <tr>
        <td>Lionel Seinturier, Renaud Pawlak, Laurence Duchien</td>
        <td>University of Lille (France)</td>
        <td>Course on distributed application servers, with approx 40% dedicated to AOP related issues</td>
      </tr>
      <tr>
        <td>Gustav Bostrom</td>
        <td>Royal Institute of Technology, Stockholm</td>
        <td>AOSD module taught as part of two courses</td>
      </tr>
      <tr>
        <td>Herman Tromp</td>
        <td>Ghent University, Belgium</td>
        <td>Planning to introduce AOSD material into fall 2005 courses.</td>
      </tr>
      <tr>
        <td>Filippo Diotalevi</td>
        <td>Politecnico of Milan-Como</td>
        <td>Single lecture on AOP and AspectJ
          [<a href="https://www.jugmilano.it/jsp/Wiki?seminario+policomo+gennaio+2005">
            Slides</a> (Italian)].
        </td>
      </tr>
      <tr>
        <td>Bil Lewis</td>
        <td>Tufts University, Boston</td>
        <td>Course on bytecode instrumentation and the JVM. AOP content includes
          creation of an Aspect byte code weaver.
        </td>
      </tr>
      <tr>
        <td>Paolo Falcarin, Marco Torchiano</td>
        <td>Politecnico di Torino, Italy</td>
        <td>Teach an "Advanced Software Development Techniques" course, with
          approx. 50% AOSD materials. Topics include AspectJ, dynamic AOP, AO
          Modeling and other AOP-related research.
        </td>
      </tr>
      </tbody>
    </table>

    <h2>Open source offerings</h2>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
      <thead>
      <tr>
        <th>Instructor</th>
        <th>Organisation</th>
        <th>Details</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>The AspectJ Team</td>
        <td>
          AspectJ
        </td>
        <td>Teach an introductory and advanced AspectJ tutorial. Materials
          available in the AspectJ CVS repository under docs/teaching.
        </td>
      </tr>
      </tbody>
    </table>

    <h2>Commercial offerings</h2>
    <table border="1" cellspacing="0" cellpadding="5" width="100%">
      <thead>
      <tr>
        <th>Instructor</th>
        <th>Organisation</th>
        <th>Details</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>Gregor Kiczales, Ron Bodkin, Mik Kersten, Ramnivas Laddad, Nicholas
          Lesiecki, Mira Mezini
        </td>
        <td>
          <a href="https://www.aspectmentor.com">AspectMentor</a>
        </td>
        <td>A group of recognised experts in AOP and AOSD that offer two-day training
          courses in AOP in addition to consultancy services.
        </td>
      </tr>
      <tr>
        <td>Antti Karanta</td>
        <td>FCS Partners, Finland</td>
        <td>A 2-day intensive course on AOP / AspectJ [
          <a href="https://www.fcspartners.fi/koulutus/kurssit/1267.html">link</a>].
        </td>
      </tr>
      <tr>
        <td>
          <a href="https://aspectjcookbook.com">Russ Miles</a>
        </td>
        <td>General Dynamics UK</td>
        <td>Has developed an internal course for GD, and is able to offer courses
          externally too.
        </td>
      </tr>
      <tr>
        <td>
          Bill Burke
        </td>
        <td><a href="https://www.jboss.org">JBoss Group</a></td>
        <td>Teaches a JBoss AOP unit at every JBoss training event</td>
      </tr>
      </tbody>
    </table>

    <br clear="all">

  </div>

</div>
HTML;

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
