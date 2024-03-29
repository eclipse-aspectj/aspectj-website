<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
  $App = new App();
  $Nav = new Nav();
  $Menu = new Menu();
  include($App->getProjectCommon());

  # Begin: page-specific settings.  Change these.
  $pageTitle = "AspectJ Frequently Asked Questions";
  $pageKeywords = "AspectJ, AJDT, Aspect Oriented Software Development, Eclipse";
  $pageAuthor = "Type your name here";

  # Add page-specific Nav bars here
  # Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
  # $Nav->addNavSeparator("My Page Links", 	"downloads.php");
  # $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
  # $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);
  # End: page-specific settings

  # Paste your HTML content between the HTML markers!
  $html = <<<HTML
<div id="maincontent">
  <div id="midcolumn" style="width: 80%">

    <h1>Frequently Asked Questions</h1>

    <p>Copyright (c) 1997-2001 Xerox Corporation,
      2002 Palo Alto Research Center, Incorporated,
      2003-2006 Contributors. All rights reserved.
    </p>
    <p>Last updated March 5, 2009
    </p>
    <p>
      For a list of recently-updated FAQ entries, see <a href="#q:faqchanges">Q:What has changed since the last FAQ
      version?</a>
    </p>
    <div class="qandaset">
      <dl>
        <dt>1 <a href="#overview">Overview</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:whatisaj">What is AspectJ?</a></dt>
            <dt>2. <a href="#q:benefits">What are the benefits of using AspectJ?</a></dt>
            <dt>3. <a href="#q:compability">Can AspectJ work with any Java program?</a></dt>
            <dt>4. <a href="#q:license">How is AspectJ licensed?</a></dt>
            <dt>5. <a href="#q:project">What is the AspectJ Project?</a></dt>
          </dl>
        </dd>
        <dt>2 <a href="#quickstart">Quick Start</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:requirements">
              What Java versions does AspectJ require and support?
            </a></dt>
            <dt>2. <a href="#q:install">How do I download and install AspectJ?</a></dt>
            <dt>3. <a href="#q:startUsingAJ">How should I start using AspectJ?</a></dt>
            <dt>4. <a href="#q:integrateWithDevTools">How does AspectJ integrate with existing Java development
              tools?
            </a></dt>
          </dl>
        </dd>
        <dt>3 <a href="#typicalprograms">Typical AspectJ programs</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:aspectsoptional">Are aspects always optional or non-functional parts of
              a program?
            </a></dt>
            <dt>2. <a href="#q:developmentAndProductionAspects">
              What is the difference between development and production aspects?
            </a></dt>
            <dt>3. <a href="#q:devAspects">
              What are some common development aspects?
            </a></dt>
            <dt>4. <a href="#q:prodAspects">
              What are some common production aspects?
            </a></dt>
          </dl>
        </dd>
        <dt>4 <a href="#concepts">Basic AOP and AspectJ Concepts</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:crosscutting">What are scattering, tangling, and crosscutting?</a></dt>
            <dt>2. <a href="#q:joinpoints">What are join points?</a></dt>
            <dt>3. <a href="#q:pointcut">
              What is a pointcut?
            </a></dt>
            <dt>4. <a href="#q:advice">What is advice?</a></dt>
            <dt>5. <a href="#q:declarations">What are inter-type declarations?</a></dt>
            <dt>6. <a href="#q:whatisanaspect">What is an aspect?</a></dt>
          </dl>
        </dd>
        <dt>5 <a href="#whyaop">Why AOP?</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:ccfromflaws">Are crosscutting concerns induced by flaws in parts of the
              system design, programming language, operating system, etc. Or is
              there something more fundamental going on?
            </a></dt>
            <dt>2. <a href="#q:definingaspectspercc">Does it really make sense to define aspects in terms of
              crosscutting?
            </a></dt>
            <dt>3. <a href="#q:domainspecific">Is AOP restricted to domain-specific
              applications?
            </a></dt>
            <dt>4. <a href="#q:whyaopifinterceptors">Why do I need AOP if I can use interceptors
              (or JVMPI or ref
              lection)?
            </a></dt>
          </dl>
        </dd>
        <dt>6 <a href="#related">Related Technology</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:comparetonewforms">
              How does AspectJ compare to other new forms of programming?
            </a></dt>
            <dt>2. <a href="#q:compartoreflection">How do you compare the features of AspectJ with
              reflective systems?
            </a></dt>
            <dt>3. <a href="#q:comparetomixin">How do AspectJ features compare with those of mixin-based
              inheritance?
            </a></dt>
            <dt>4. <a href="#q:dynamicaop">How does AspectJ compare with more dynamic AOP?
            </a></dt>
            <dt>5. <a href="#q:aopandxp">What is the relationship between AOP and
              XP (extreme programming AKA agile methods)?
            </a></dt>
            <dt>6. <a href="#q:aspectjandcsharp">Will you support C#?</a></dt>
          </dl>
        </dd>
        <dt>7 <a href="#adoption">Deciding to adopt AspectJ</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:productplans">
              Is it safe to use AspectJ in my product plans?
            </a></dt>
            <dt>2. <a href="#q:effectonsize">What is the effect of using AspectJ on the source code
              size of programs?
            </a></dt>
            <dt>3. <a href="#q:effectonperformance">
              Does AspectJ add any performance overhead?
            </a></dt>
            <dt>4. <a href="#q:modularityviolations">
              I've heard that AspectJ leads to modularity violations. Does it?
            </a></dt>
            <dt>5. <a href="#q:encapsulation">
              Why does AspectJ permit aspects to access and add members of another type?
              Isn't that violating OO encapsulation?
            </a></dt>
            <dt>6. <a href="#q:aspectjandj2ee">Can I use AspectJ with J2EE?</a></dt>
            <dt>7. <a href="#q:aspectjandgj">Can I use AspectJ with Generic Java?</a></dt>
            <dt>8. <a href="#q:aspectjandj2me">Can I use AspectJ with J2ME?</a></dt>
            <dt>9. <a href="#q:aopinjava"> Are you working to put AOP into Java?
              It seems that every AOP toolset currently uses proprietary mechanisms
              to describe point-cuts, etc.
            </a></dt>
            <dt>10. <a href="#q:support">What kind of support is available?</a></dt>
            <dt>11. <a href="#q:mailingLists">What mailing lists are there?</a></dt>
          </dl>
        </dd>
        <dt>8 <a href="#compiler">Using the AspectJ compiler</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:compilerRequired">
              Do I have to use the AspectJ compiler?
            </a></dt>
            <dt>2. <a href="#q:requiredsources">
              What files do I need to include when compiling AspectJ programs?
            </a></dt>
            <dt>3. <a href="#q:listingsources">I have to list many files in the command line to
              compile with ajc. Is there any other way to
              provide the file names to ajc?
            </a></dt>
            <dt>4. <a href="#q:compilerVM">What Java virtual machine (JVM) do I use to run the
              AspectJ compiler?
            </a></dt>
            <dt>5. <a href="#q:compilingForDifferentVMs">How can I use ajc to compile
              programs for a JVM that is different from the one used to run it?
            </a></dt>
            <dt>6. <a href="#q:assert">Does the ajc compiler support
              the assert keyword in Java 1.4?
            </a></dt>
            <dt>7. <a href="#q:generics">Does the ajc compiler support
              generics and the other new language features of Java 5?
            </a></dt>
            <dt>8. <a href="#q:versionCompatibility">Will aspects work with different versions of the compiler/weaver
              and runtime?
            </a></dt>
            <dt>9. <a href="#q:msjvm">Are there any issues using AspectJ with the Microsoft
              JVM?
            </a></dt>
            <dt>10. <a href="#q:javacbytecode">Does ajc rely
              on javac for generating Java bytecode
              (.class) files?
            </a></dt>
            <dt>11. <a href="#q:parsergenerators">
              I noticed the AspectJ compiler doesn't use a parser generator. Why is that?
            </a></dt>
            <dt>12. <a href="#q:howIncrementalWorks">How does incremental mode work?
            </a></dt>
          </dl>
        </dd>
        <dt>9 <a href="#devtools">Integrating AspectJ into your development environment</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:knowWhenAspectsAffectClasses">How do I know which aspects affect a class when looking
              at that class's source code?
            </a></dt>
            <dt>2. <a href="#q:idesupport">What kind of IDE support is available for developing
              AspectJ programs?
            </a></dt>
            <dt>3. <a href="#q:idesupportplans">What plans are there to support my IDE?</a></dt>
            <dt>4. <a href="#q:portingajde">Can I port AJDE support to my development environment?</a></dt>
            <dt>5. <a href="#q:hybridbuilds">I want the aspects for development builds but
              remove them for production builds. How can I set up the build
              system so they are unpluggable? And so I use javac
              in my production build?
            </a></dt>
            <dt>6. <a href="#q:stepwiseBuilds">
              We compile module jars and then assemble them. Can we continue this with AspectJ?
            </a></dt>
            <dt>7. <a href="#q:incrementalModuleCompiles">We use modules and would like to use incremental compilation.
              Is that possible?
            </a></dt>
          </dl>
        </dd>
        <dt>10 <a href="#notes">Programming notes and tips</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:methodsignatures">Is it possible to change methods by introducing keywords (like
              synchronized), adding parameters,
              or changing the "throws" clause?
            </a></dt>
            <dt>2. <a href="#q:seeingjoinpoints">
              I don't understand what join points exist. How can I see them?
            </a></dt>
            <dt>3. <a href="#q:comparecallandexecution">
              What is the difference between call and execution join points?
            </a></dt>
            <dt>4. <a href="#q:comparecflowandcflowbelow">
              What is the difference between cflow and cflowbelow?
            </a></dt>
            <dt>5. <a href="#q:recursiveentrypoints">How do I say that I want the topmost entrypoint in a
              recursive call? How about the most-recent prior entrypoint?
            </a></dt>
            <dt>6. <a href="#q:initializationjoinpoints">What is the difference between constructor call,
              constructor execution, initialization, and static
              initialization join points?
            </a></dt>
            <dt>7. <a href="#q:adviseconstructors">How do I work with an object right when it is created?
            </a></dt>
            <dt>8. <a href="#q:andingpointcuts">
              I want advice to run at two join points, but it doesn't run at all. What gives?
            </a></dt>
            <dt>9. <a href="#q:staticfieldreferences">
              How do I refer to a static field when my advice crosscuts multiple classes?
            </a></dt>
            <dt>10. <a href="#q:interfacesastypepatterns">I would like to reuse a type pattern, e.g., to
              write advice that is limited to a certain set of classes.
              Do I have to retype it each time?
            </a></dt>
            <dt>11. <a href="#q:exampleprograms">Where do I find example programs and how-to's?</a></dt>
            <dt>12. <a href="#q:aspectlibraries">Are aspect libraries available?</a></dt>
            <dt>13. <a href="#q:serialversionuid">How does ajc interact with the
              serialVersionUID?
            </a></dt>
            <dt>14. <a href="#q:applets">How can I use AspectJ with applets?</a></dt>
            <dt>15. <a href="#q:typeoblivious">How can I specify types for advice that captures primitives, void,
              etc.?</a></dt>
            <dt>16. <a href="#q:versioninfo">How do I detect which version I am running?</a></dt>
            <dt>17. <a href="#q:synchronizedAdvice">How do I write synchronized advice?</a></dt>
          </dl>
        </dd>
        <dt>11 <a href="#problems">Common Problems</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:infiniterecursion">When I run, I get a StackOverflowError
              (or a long stack trace or no output whatsoever)
            </a></dt>
            <dt>2. <a href="#q:typelessdeclarations">I've declared a field on every class in
              my package; how do I use it in advice?
            </a></dt>
            <dt>3. <a href="#q:ajcoom">The AspectJ compiler aborts with an OutOfMemoryError when
              compiling many classes. How can I fix this?
            </a></dt>
            <dt>4. <a href="#q:duplicateclass">
              Why do I get a message that my class is already defined?
            </a></dt>
            <dt>5. <a href="#q:ajcrecompile">
              ajc recompiles all files every time.
              How can I make it recompile only the files that have changed?
            </a></dt>
            <dt>6. <a href="#q:ajcjvm">
              ajc is using the wrong JVM. How do I
              fix it?
            </a></dt>
            <dt>7. <a href="#q:idebalkingataspects">My IDE is trying to parse AspectJ files which makes my project
              unusable.
              What can I do?
            </a></dt>
            <dt>8. <a href="#q:idememory">I used to be able to compile my program in my IDE, but when I
              use AJDE, I run out of memory (or it goes really slow).
            </a></dt>
            <dt>9. <a href="#q:noaspectbound">
              When I run, I get a NoAspectBoundException or a
              ClassNotFound message for NoAspectBoundException.
            </a></dt>
            <dt>10. <a href="#q:stacktraces">
              My stack traces don't make sense. What gives?
            </a></dt>
            <dt>11. <a href="#q:advicenotrunning">
              My advice is not running (or running twice), and I don't know why.
            </a></dt>
            <dt>12. <a href="#q:adviceOnOveriddenMethods">
              My advice runs for each overridden method!
            </a></dt>
            <dt>13. <a href="#q:tejpsp">
              I don't understand when thisEnclosingJoinPointStaticPart is available.
            </a></dt>
            <dt>14. <a href="#q:packagedeclares">
              I declared a member on a class with package access, but other classes in the package cannot see it.
            </a></dt>
            <dt>15. <a href="#q:interfaceDeclarations">I declared a member on a interface, but javac does not see it.
            </a></dt>
            <dt>16. <a href="#q:cantfindjavac">
              ajc 1.0 complains that it can't find
              javac. What's wrong?
            </a></dt>
            <dt>17. <a href="#q:ajdocneeds13">
              I'm running under 1.4, but ajdoc asks for 1.3
              (or throws IllegalAccessError for HtmlWriter.configuration)
            </a></dt>
            <dt>18. <a href="#q:compileunits">I set up different files to my compiles to change what
              the aspects see, but now I don't
              understand how the aspects are working.
            </a></dt>
            <dt>19. <a href="#q:readingpreprocessedcode">I'm reading the code generated by ajc 1.0
              in -preprocess mode, and it seems like it would not
              work (or "like it works this way").
            </a></dt>
            <dt>20. <a href="#q:injection">I've heard AspectJ can generate or inject code into my code.
              Is this true?
            </a></dt>
            <dt>21. <a href="#q:newjoinpoints">Why can't AspectJ pick out local variables (or array elements or ...)?
            </a></dt>
            <dt>22. <a href="#q:reflectiveCalls">Why doesn't AspectJ pick out reflective calls?
              The pointcut call(void run())
              won't pick out a call using reflection, like
              ((Method)run).invoke(null, args).
            </a></dt>
            <dt>23. <a href="#q:currentbugs">What are the bugs now most affecting users?</a></dt>
            <dt>24. <a href="#q:runtimeMemory">What extra memory is required at runtime?
            </a></dt>
            <dt>25. <a href="#q:weavingcglib">I get a VerifyError when running CGLIB generated code that has been woven
              by
              AspectJ. Why is this?
            </a></dt>
          </dl>
        </dd>
        <dt>12 <a href="#aj11">AspectJ 1.1 and eclipse.org</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:whyeclipse">Why did the AspectJ project move to eclipse.org?
            </a></dt>
            <dt>2. <a href="#q:eclipserequired">Do I have to download Eclipse to use AspectJ?
            </a></dt>
            <dt>3. <a href="#q:eclipseetc">What are the relationships between AspectJ, JDT,
              Eclipse, AJDT, and IDE support generally?
            </a></dt>
          </dl>
        </dd>
        <dt>13 <a href="#AspectJ5">AspectJ 5 and Java 5</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:aspectj5features">
              What are the new features of AspectJ 5?
            </a></dt>
            <dt>2. <a href="#q:codeversusannotationstyles">
              Should I use code- or annotation-style aspects?
            </a></dt>
            <dt>3. <a href="#q:aspectj5ltw">
              What's new about the load-time weaving support in AspectJ 5?
            </a></dt>
          </dl>
        </dd>
        <dt>14 <a href="#Technology">Understanding AspectJ Technology</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:implementation">Do I need to know how the compiler or weaver works?
            </a></dt>
            <dt>2. <a href="#q:whitepapers">How does the compiler/weaver work? Are there any white papers?
            </a></dt>
            <dt>3. <a href="#q:ltwAppServers">How do I get load-time weaving to work in my chosen application server?
            </a></dt>
            <dt>4. <a href="#q:reflection">Does AspectJ use reflection at runtime?
            </a></dt>
            <dt>5. <a href="#q:loadtimeWeaving">What about load-time weaving? Can I weave aspects at runtime?
            </a></dt>
          </dl>
        </dd>
        <dt>15 <a href="#Developers">AspectJ Project Development</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:howitworks">I'm interested in the code implementing AspectJ.
            </a></dt>
            <dt>2. <a href="#q:contributions">How can I get involved with developing the AspectJ project?
            </a></dt>
            <dt>3. <a href="#q:buildingsource">How do I get and compile the source code for AspectJ?
            </a></dt>
            <dt>4. <a href="#q:buildingAspectJAndAJDT">How do I build AspectJ and integrate it into AJDT?
            </a></dt>
            <dt>5. <a href="#q:devDocs">Where do I find developer documentation on building and testing AspectJ source
              code?
            </a></dt>
            <dt>6. <a href="#q:harnesstestcases">How should I submit test cases for bugs?
            </a></dt>
            <dt>7. <a href="#q:testharness">I'd like to run my test case. How do I get the test harness?
            </a></dt>
            <dt>8. <a href="#q:bcel">BCEL is used by AspectJ but it's not actively developed. Will you change?
            </a></dt>
          </dl>
        </dd>
        <dt>16 <a href="#help">Getting Help</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:moreaboutaj">
              How do I find out more about AspectJ?
            </a></dt>
            <dt>2. <a href="#q:bugreports">How do I submit a bug report?</a></dt>
            <dt>3. <a href="#q:talktousers">
              How do I communicate with other AspectJ users?
            </a></dt>
            <dt>4. <a href="#q:searchingsite">
              How can I search the email archives or the web site?
            </a></dt>
            <dt>5. <a href="#q:writingbugsandemails">
              How should I write email queries?
            </a></dt>
            <dt>6. <a href="#q:idebugs">
              How do I write bugs for IDE support?
            </a></dt>
            <dt>7. <a href="#q:ajcbugs">
              How do I write bugs for the AspectJ compiler?
            </a></dt>
            <dt>8. <a href="#q:teachingmaterials">
              Can you recommend reading or teaching material for AspectJ?
            </a></dt>
            <dt>9. <a href="#q:consulting">
              Where can our group get consulting and support?
            </a></dt>
            <dt>10. <a href="#q:faqchanges">
              What has changed since the last FAQ version?
            </a></dt>
          </dl>
        </dd>
        <dt>17 <a href="#project">About the AspectJ Project</a></dt>
        <dd>
          <dl>
            <dt>1. <a href="#q:opensource">What does the fact that AspectJ is an Open Source
              Project mean to me?
            </a></dt>
            <dt>2. <a href="#q:standardization">What are your plans to make AspectJ a general feature
              of Java supported by Sun and the other key players in the Java
              Industry?
            </a></dt>
            <dt>3. <a href="#q:bytecodeweaving">When will AspectJ work from class files?
              When will it work at class-loading time?
            </a></dt>
            <dt>4. <a href="#q:differences">What are the differences between the current and
              previously released versions of AspectJ?
            </a></dt>
            <dt>5. <a href="#q:schedule">
              What is the AspectJ development schedule?
            </a></dt>
            <dt>6. <a href="#q:java5">
              Will AspectJ support Java 5?
            </a></dt>
          </dl>
        </dd>
      </dl>
      <div class="qandadiv"><h3 class="title"><a name="overview"></a>1 Overview</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:whatisaj"></a><b>1. </b>What is AspectJ?</p></div>
          <div class="answer"><p><a name="d0e23"></a><b></b>
            AspectJ(tm) is a simple and practical extension to the
            Java(tm) programming
            language that adds to Java aspect-oriented programming (AOP)
            capabilities. AOP allows developers to reap the benefits of
            modularity for concerns that cut across the natural units of
            modularity. In object-oriented programs like Java, the natural unit
            of modularity is the class. In AspectJ, aspects modularize concerns that
            affect more than one class.
          </p>
            <p>You compile your program using the AspectJ compiler
              (perhaps using the supported development environments)
              and then run it,
              supplying a small (&lt; 100K) runtime library.
            </p>
            <p>The AspectJ technologies include
              a compiler (<tt>ajc</tt>),
              a debugger (<tt>ajdb</tt>),
              a documentation generator (<tt>ajdoc</tt>),
              a program structure browser (<tt>ajbrowser</tt>),
              and integration with
              Eclipse, Sun-ONE/Netbeans, GNU Emacs/XEmacs,
              JBuilder, and Ant.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:benefits"></a><b>2. </b>What are the benefits of using AspectJ?</p></div>
          <div class="answer"><p><a name="d0e46"></a><b></b>AspectJ can be used to improve the modularity of software
            systems.
          </p>
            <p> Using ordinary Java, it can be difficult to modularize design
              concerns such as
            </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e52"></a>system-wide error-handling</p></li>
                <li><p><a name="d0e55"></a>contract enforcement</p></li>
                <li><p><a name="d0e58"></a>distribution concerns</p></li>
                <li><p><a name="d0e61"></a>feature variations</p></li>
                <li><p><a name="d0e64"></a>context-sensitive behavior</p></li>
                <li><p><a name="d0e67"></a>persistence</p></li>
                <li><p><a name="d0e70"></a>testing</p></li>
              </ul>
            </div>
            <p>The code for these concerns tends to be spread out across the
              system. Because these concerns won't stay inside of any one module
              boundary, we say that they <span class="emphasis"><i>crosscut</i></span> the
              system's modularity.
            </p>
            <p>AspectJ adds constructs to Java that enable the modular
              implementation of crosscutting concerns. This ability is
              particularly valuable because crosscutting concerns tend to be both
              complex and poorly localized, making them hard to deal with.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:compability"></a><b>3. </b>Can AspectJ work with any Java program?</p>
          </div>
          <div class="answer"><p><a name="d0e85"></a><b></b>AspectJ has been designed as a <span class="emphasis"><i>compatible</i></span>
            extension to Java. By compatible, we mean
          </p>
            <div class="informaltable" id="d0e91"><a name="d0e91"></a>
              <table border="0">
                <colgroup>
                  <col>
                  <col>
                </colgroup>
                <tbody>
                <tr>
                  <td align="right"><span class="emphasis"><i>upward compatible</i></span></td>
                  <td>All legal Java programs are legal AspectJ
                    programs.
                  </td>
                </tr>
                <tr>
                  <td align="right"><span class="emphasis"><i>platform
                    compatible
                    </i></span></td>
                  <td>All legal AspectJ programs run on standard Java
                    virtual machines.
                  </td>
                </tr>
                <tr>
                  <td align="right"><span class="emphasis"><i>tool
                    compatible
                    </i></span></td>
                  <td>Existing tools can be extended to work with
                    AspectJ.
                  </td>
                </tr>
                <tr>
                  <td align="right"><span class="emphasis"><i>programmer compatible</i></span></td>
                  <td>Programming in AspectJ feels natural to Java
                    programmers.
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <p>The AspectJ tools run on any Java 2 Platform compatible
              platform. The AspectJ compiler produces classes that run
              on any Java 1.1 (or later) compatible platform.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:license"></a><b>4. </b>How is AspectJ licensed?</p></div>
          <div class="answer"><p><a name="d0e124"></a><b></b>Since AspectJ 1.5.2, source code and documentation is
            available under the
            <a href="http://eclipse.org/legal/epl-v10.html" target="_top">Eclipse Public License 1.0</a>.
          </p>
            <p>AspectJ 1.1 through 1.5.1 source code and documentation is available under the
              <a href="http://eclipse.org/legal/cpl-v10.html" target="_top">Common Public License 1.0</a>.
            </p>
            <p>The AspectJ 1.0 tools are open-source software available under the
              <a href="http://www.opensource.org/licenses/mozilla1.1" target="_top">Mozilla Public License 1.1</a>.
              That documentation is available under a separate license
              that precludes for-profit or commercial
              redistribution.
            </p>
            <p>Most users only want to use AspectJ to build programs they distribute.
              There are no restrictions here. When you distribute your program, be sure to
              include all the runtime classes from the aspectjrt.jar for that version of AspectJ.
              When distributing only the runtime classes, you need not provide any notice that
              the program was compiled with AspectJ or includes binaries from the AspectJ project,
              except as necessary to preserve the warranty disclaimers in our license.
            </p>
            <p>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:project"></a><b>5. </b>What is the AspectJ Project?</p></div>
          <div class="answer"><p><a name="d0e148"></a><b></b>AspectJ is based on over ten years of research at
            <a href="http://www.parc.xerox.com" target="_top">
              Xerox Palo Alto Research Center
            </a>
            as funded by Xerox, a U.S. Government grant (NISTATP), and a
            DARPA contract.
          </p>
            <p>It has evolved through open-source releases
              to a strong user community and now operates as an
              open source project at
              <a href="http://eclipse.org/aspectj" target="_top">
                http://eclipse.org/aspectj</a>
              The AspectJ team works closely with the community
              to ensure AspectJ continues to evolve as an effective
              aspect-oriented programming language and tool set.
            </p>
            <p>
              The latest release is 1.2
              which can be downloaded from the
              <a href="http://eclipse.org/aspectj" target="_top">AspectJ project page</a>,
              including sources as described
              <a href="#q:buildingsource">Q:How do I get and compile the source code for AspectJ?</a>.
              Development is focused on supporting applications,
              improving quality and performance,
              enhancing integration with IDE's,
              and building the next generations of the language.
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="quickstart"></a>2 Quick Start</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:requirements"></a><b>1. </b>
            What Java versions does AspectJ require and support?
          </p></div>
          <div class="answer"><p><a name="d0e175"></a><b></b>
            The AspectJ compiler produces programs for any released version of the
            Java platform (jdk1.1 and later). When running, your program classes must
            be able to reach classes in the
            small (&lt; 100K) runtime library (aspectjrt.jar) from the distribution.
            The tools themselves require J2SE 1.3 or later to run,
            but the compiler can produce classes for any 1.1-compliant
            version of the Java platform.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:install"></a><b>2. </b>How do I download and install AspectJ?</p></div>
          <div class="answer"><p><a name="d0e182"></a><b></b>From AspectJ's
            <a href="http://eclipse.org/aspectj" target="_top">web page
            </a>, download the AspectJ distribution.
            The <tt>jar</tt> file is installed by executing
          </p>
            <pre class="programlisting">
            java -jar <span class="emphasis"><i>jar file name</i></span>
          </pre>
            <p>Do <span class="bold"><b>not</b></span> try to extract the
              <tt>jar</tt> file contents and then attempt to execute
              <tt>java org.aspectj.tools.Main</tt>. (A
              <tt>NoClassDefFoundError</tt> exception will be
              thrown.) The AspectJ distribution is not designed to be installed
              this way. Use the <tt>java -jar</tt> form shown above.
            </p>
            <p>To uninstall, remove the files the installer wrote in your
              file system. In most cases, you can delete the top-level install
              directory (and all contained files), after you remove any
              new or updated files you want to keep. On Windows, no
              registry settings were added or changed, so nothing needs to be
              undone. Do not install over prior versions, which might have
              different files. Delete the prior version first.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:startUsingAJ"></a><b>3. </b>How should I start using AspectJ?</p></div>
          <div class="answer"><p><a name="d0e219"></a><b></b>Many users adopt AspectJ in stages, first using it
            to understand and validate their systems (relying on it only in
            development) and then using it to implement crosscutting concerns
            in production systems. AspectJ has been designed to make each
            step discrete and beneficial.
          </p>
            <p>
              In order of increasing reliance, you may use AspectJ:
            </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e225"></a>
                  <span class="bold"><b> In the development
                    process
                </b></span> Use AspectJ to trace or log
                  interesting information. You can do this by adding
                  simple AspectJ code that performs logging or tracing.
                  This kind of addition may be removed ("unplugged") for
                  the final build since it does not implement a design
                  requirement; the functionality of the system is unaffected by
                  the aspect.
                </p></li>
                <li><p><a name="d0e231"></a>
                  <span class="bold"><b>As an ancillary part of your
                    system
                </b></span> Use AspectJ to more completely and
                  accurately test the system.
                  Add sophisticated code that can check contracts,
                  provide debugging support, or implement test strategies.
                  Like pure development aspects, this code may also be
                  unplugged from production builds. However, the same code
                  can often be helpful in diagnosing failures in deployed
                  production systems, so you may design the functionality
                  to be deployed but disabled, and enable it when debugging.
                </p></li>
                <li><p><a name="d0e237"></a>
                  <span class="bold"><b>As an essential part of your
                    system
                </b></span> Use AspectJ to modularize
                  crosscutting concerns in your system by design.
                  This uses AspectJ to implement logic integral to a system
                  and is delivered in production builds.
                </p></li>
              </ul>
            </div>
            <p>This adoption sequence works well in practice and has been
              followed by many projects.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:integrateWithDevTools"></a><b>4. </b>How does AspectJ integrate with
            existing Java development
            tools?
          </p></div>
          <div class="answer"><p><a name="d0e249"></a><b></b>AspectJ products are designed to make it easy to integrate
            AspectJ into an existing development process.
            Each release includes
            Ant tasks for building programs,
            the AspectJ Development Environment (AJDE) for writing
            aspects inside popular IDE's, and
            command-line tools for compiling and documenting Java and AspectJ code.
          </p>
            <p>AspectJ provides replacements for standard Java tools:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e256"></a><tt>ajc</tt>, the AspectJ compiler,
                  runs on any Java 2 compatible platform, and produces classes
                  that run on any Java 1.1 (or later) compatible platform.
                </p></li>
                <li><p><a name="d0e261"></a><tt>ajdoc</tt> produces API documentation like
                  javadoc, with additional crosscutting links. For example,
                  it shows advice affecting
                  a particular method or all code affected by a given aspect.
                  At present, <tt>ajdoc</tt> is only supported in AspectJ 1.0.
                </p></li>
              </ul>
            </div>
            </p><p>For debugging, AspectJ supports JSR-45, which provides a mechanism for
              debugging .class files that have multiple source files.
              Debugger clients and VM's are beginning to support this;
              see Sun's J2SE 1.4.1 VM and jdb debugger
              and recent versions of JBuilder.
            </p>
            <p>The AspectJ Development Environment (AJDE)
              enables programmers to view and navigate the crosscutting structures
              in their programs, integrated with existing support in
              popular Java IDE's for viewing and navigating object-oriented
              structures. For many programmers this provides a deeper understanding
              of how aspects work to modularize their concerns and permits them
              to extend some of their development practices without
              having to abandon their existing tools.
            </p>
            <p>
              AJDE is a set of API's providing the basis for the following
              development tool integrations:
            </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e278"></a>Eclipse (version 2.0)
                  in the Eclipse AspectJ Development Tools project
                  <a href="http://eclipse.org/ajdt" target="_top">
                    http://eclipse.org/ajdt
                  </a>
                </p></li>
                <li><p><a name="d0e284"></a>Emacs (GNU version 20.3)
                  and XEmacs (version 21.1 on Unix and 21.4 on Windows),
                  in the SourceForge AspectJ for Emacs project
                  <a href="http://aspectj4emacs.sourceforge.net" target="_top">
                    http://aspectj4emacs.sourceforge.net
                  </a>
                </p></li>
                <li><p><a name="d0e290"></a>JBuilder (versions 4 through 7) from Borland
                  in the SourceForge AspectJ for JBuilder project
                  <a href="http://aspectj4jbuildr.sourceforge.net" target="_top">
                    http://aspectj4jbuildr.sourceforge.net
                  </a>
                </p></li>
                <li><p><a name="d0e296"></a>Netbeans up to 3.4
                  (and Sun Microsystems' Forte for Java (versions 2 and 3), Sun/One)
                  in the SourceForge AspectJ for NetBeans project
                  <a href="http://aspectj4netbean.sourceforge.net" target="_top">
                    http://aspectj4netbean.sourceforge.net
                  </a>
                </p></li>
              </ul>
            </div>
            <p>
              The common functionality of AJDE is also available in
              the stand-alone source code browser <tt>ajbrowser</tt>,
              included in the tools distribution.
            </p>
            <p>Finally, as mentioned above,
              AspectJ also supports building with Ant by providing
              task interfaces to the ajc and ajdoc tools.
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="typicalprograms"></a>3 Typical AspectJ programs</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aspectsoptional"></a><b>1. </b>Are aspects always optional or
            non-functional parts of
            a program?
          </p></div>
          <div class="answer"><p><a name="d0e316"></a><b></b>No. Although AspectJ can be used in a way that allows
            AspectJ
            code to be removed for the final build, aspect-oriented code is not
            <span class="emphasis"><i>always</i></span> optional or non-functional. Consider
            what AOP really does: it makes the modules in a program correspond
            to modules in the design. In any given design, some modules are
            optional, and some are not.
          </p>
            <p>The examples directory included in the AspectJ distribution
              contains some examples of the use aspects that are not optional.
              Without aspects,
            </p>
            <div class="informaltable" id="d0e324"><a name="d0e324"></a>
              <table border="0">
                <colgroup>
                  <col>
                  <col>
                </colgroup>
                <tbody>
                <tr>
                  <td align="right"><span class="strong"><i>bean</i></span></td>
                  <td>Point objects would not be JavaBeans.</td>
                </tr>
                <tr>
                  <td align="right"><span class="strong"><i>introduction</i></span></td>
                  <td>Point objects would not be cloneable, comparable or
                    serializable.
                  </td>
                </tr>
                <tr>
                  <td align="right"><span class="strong"><i>spacewar</i></span></td>
                  <td>Nothing would be displayed.</td>
                </tr>
                <tr>
                  <td align="right"><span class="strong"><i>telecom</i></span></td>
                  <td>No calls would be billed.</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:developmentAndProductionAspects"></a><b>2. </b>
            What is the difference between development and production aspects?
          </p></div>
          <div class="answer"><p><a name="d0e355"></a><b></b>
            Production aspects are delivered with the finished product,
            while development aspects are used during the development process.
            Often production aspects are also used during development.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:devAspects"></a><b>3. </b>
            What are some common development aspects?
          </p></div>
          <div class="answer"><p><a name="d0e362"></a><b></b>Aspects for logging, tracing, debugging, profiling
            or performance monitoring, or testing.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:prodAspects"></a><b>4. </b>
            What are some common production aspects?
          </p></div>
          <div class="answer"><p><a name="d0e369"></a><b></b>
            Aspects for performance monitoring and diagnostic systems,
            display updating or notifications generally, security,
            context passing, and error handling.
          </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="concepts"></a>4 Basic AOP and AspectJ Concepts</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:crosscutting"></a><b>1. </b>What are scattering, tangling, and
            crosscutting?</p></div>
          <div class="answer"><p><a name="d0e379"></a><b></b>
            "Scattering" is when similar code is distributed throughout many
            program modules. This differs from a component being used by
            many other components since
            it involves the risk of misuse at each point and of inconsistencies
            across all points. Changes to the implementation may require
            finding and editing all affected code.
          </p>
            <p>"Tangling" is when two or more concerns are implemented in
              the same body of code or component, making it more difficult to understand.
              Changes to one implementation may cause unintended changes
              to other tangled concerns.
            </p>
            <p>"Crosscutting" is how to characterize a concern than spans
              multiple units of OO modularity - classes and objects. Crosscutting
              concerns resist modularization using normal OO constructs, but
              aspect-oriented programs can modularize crosscutting concerns.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:joinpoints"></a><b>2. </b>What are join points?</p></div>
          <div class="answer"><p><a name="d0e390"></a><b></b>Join points are well-defined points in the execution of a
            program. Not every execution point is a join point: only those
            points that can be used in a disciplined and principled manner are.
            So, in AspectJ, the execution of a method call is a join point, but
            "the execution of the expression at line 37 in file Foo.java" is
            not.
          </p>
            <p>The rationale for restricting join points is similar to the
              rationale for restricting access to memory (pointers) or
              restricting control flow expressions (<tt>goto</tt>) in
              Java: programs are easier to understand, maintain and extend
              without the full power of the feature.
            </p>
            <p>AspectJ join points include reading or writing a field; calling
              or executing an exception handler, method or constructor.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:pointcut"></a><b>3. </b>
            What is a pointcut?
          </p></div>
          <div class="answer"><p><a name="d0e404"></a><b></b>A pointcut picks out
            <a href="#q:joinpoints">
              join points
            </a>. These join points are described by the pointcut
            declaration. Pointcuts can be defined in classes or in aspects,
            and can be named or be anonymous.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:advice"></a><b>4. </b>What is advice?</p></div>
          <div class="answer"><p><a name="d0e414"></a><b></b>Advice is code that executes at each
            <a href="#q:joinpoints">join point</a> picked out by a
            <a href="#q:pointcut">pointcut</a>. There are three
            kinds of advice: before advice, around advice and after advice. As
            their names suggest, before advice runs before the join point
            executes; around advice executes before and after the join point;
            and after advice executes after the join point. The power of
            advice comes from the advice being able to access values in the
            execution context of a pointcut.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:declarations"></a><b>5. </b>What are inter-type declarations?</p></div>
          <div class="answer"><p><a name="d0e427"></a><b></b>AspectJ enables you to declare members and supertypes of
            another class
            in an aspect, subject to Java's type-safety and access rules. These are
            visible to other classes only if you declare them as accessible.
            You can also declare compile-time errors and warnings based on pointcuts.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:whatisanaspect"></a><b>6. </b>What is an aspect?</p></div>
          <div class="answer"><p><a name="d0e434"></a><b></b>Aspects are a new class-like language element that has been
            added to Java by AspectJ. Aspects are how developers encapsulate
            concerns that cut across classes, the natural unit of modularity in
            Java.
          </p>
            <p>Aspects are similar to classes because...
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e440"></a>aspects have type</p></li>
                <li><p><a name="d0e443"></a>
                  aspects can extend classes and other aspects
                </p></li>
                <li><p><a name="d0e446"></a>
                  aspects can be abstract or concrete
                </p></li>
                <li><p><a name="d0e449"></a>
                  non-abstract aspects can be instantiated
                </p></li>
                <li><p><a name="d0e452"></a>aspects can have static and non-static state and
                  behavior
                </p></li>
                <li><p><a name="d0e455"></a>aspects can have fields, methods, and types
                  as members
                </p></li>
                <li><p><a name="d0e458"></a>the members of non-privileged aspects follow the
                  same accessibility rules as those of classes
                </p></li>
              </ul>
            </div>
            </p><p>Aspects are different than classes because...
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e465"></a>aspects can additionally include as members pointcuts,
                  advice, and inter-type declarations;
                </p></li>
                <li><p><a name="d0e468"></a>aspects can be qualified by specifying the
                  context in which the non-static state is available
                </p></li>
                <li><p><a name="d0e471"></a>aspects can't be used interchangeably with
                  classes
                </p></li>
                <li><p><a name="d0e474"></a>aspects don't have constructors or finalizers,
                  and they cannot be created with the new operator;
                  they are automatically available as needed.
                </p></li>
                <li><p><a name="d0e477"></a>privileged aspects can access private members of
                  other types
                </p></li>
              </ul>
            </div>
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="whyaop"></a>5 Why AOP?</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:ccfromflaws"></a><b>1. </b>Are crosscutting concerns induced by flaws in
            parts of the
            system design, programming language, operating system, etc. Or is
            there something more fundamental going on?
          </p></div>
          <div class="answer"><p><a name="d0e488"></a><b></b>AOP's fundamental assumption is that in any sufficiently
            complex system, there will inherently be some crosscutting
            concerns.
          </p>
            <p>So, while there are some cases where you could re-factor a
              system to make a concern no longer be crosscutting, the AOP idea
              is that there are many cases where that is not possible, or where
              doing so would damage the code in other ways.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:definingaspectspercc"></a><b>2. </b>Does it really make sense to define
            aspects in terms of
            crosscutting?
          </p></div>
          <div class="answer"><p><a name="d0e497"></a><b></b>Yes.</p>
            <p>The short summary is that it is right to define AOP in terms of
              crosscutting, because well-written AOP programs have clear
              crosscutting structure. It would be a mistake to define AOP in
              terms of "cleaning up tangling and scattering", because that isn't
              particular to AOP, and past programming language innovations also
              do that, as will future developments.
            </p>
            <p>(Slides for a long talk on this topic were once available at
              http://www.cs.ubc.ca/~gregor/vinst-2-17-01.zip.)
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:domainspecific"></a><b>3. </b>Is AOP restricted to domain-specific
            applications?
          </p></div>
          <div class="answer"><p><a name="d0e508"></a><b></b>No. Some implementations of AOP are domain-specific, but
            AspectJ was specifically designed to be general-purpose.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:whyaopifinterceptors"></a><b>4. </b>Why do I need AOP if I can use
            interceptors
            (or JVMPI or ref
            lection)?
          </p></div>
          <div class="answer"><p><a name="d0e515"></a><b></b>There are many mechanisms people use now to implement
            some crosscutting concerns. But they don't have a way to express
            the actual structure of the program so you (and your tools)
            can reason about it. Using a language enables you to express the
            crosscutting in first-class constructs. You can not only avoid the
            maintenance problems and structural requirements of some other
            mechanisms, but also combine forms of crosscutting so that all
            the mechanisms for a particular concern are one piece of code.
          </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="related"></a>6 Related Technology</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:comparetonewforms"></a><b>1. </b>
            How does AspectJ compare to other new forms of programming?
          </p></div>
          <div class="answer"><p><a name="d0e525"></a><b></b>There are many recent proposals for programming languages
            that
            provide control over crosscutting concerns. Aspect-oriented
            programming is an overall framework into which many of these
            approaches fit. AspectJ is one particular instance of AOP,
            distinguished by the fact that it was designed from the ground up
            to be compatible with Java.
          </p>
            <p>For more alternatives for aspect-oriented programming, see
              <a href="http://aosd.net" target="_top">http://aosd.net</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:compartoreflection"></a><b>2. </b>How do you compare the features of
            AspectJ with
            reflective systems?
          </p></div>
          <div class="answer"><p><a name="d0e537"></a><b></b>Reflective and aspect-oriented languages have an important
            similarity: both provide programming support for dealing with
            crosscutting concerns. In this sense reflective systems proved
            that independent programming of crosscutting concerns is
            possible.
          </p>
            <p>But the control that reflection provides tends to be low-level
              and extremely powerful. In contrast, AspectJ provides more
              carefully controlled power, drawing on the rules learned from
              object-oriented development to encourage a clean and understandable
              program structure.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:comparetomixin"></a><b>3. </b>How do AspectJ features compare with those
            of mixin-based
            inheritance?
          </p></div>
          <div class="answer"><p><a name="d0e546"></a><b></b>Some features of AspectJ, such as introduction, are related
            to
            <span class="emphasis"><i>mixin-based inheritance</i></span>. But, in order to
            support crosscutting, a core goal for AspectJ, AspectJ goes beyond
            mixin-based inheritance.
          </p>
            <p>Firstly, an aspect imposes behavior on a class, rather than a
              class requesting behavior from an aspect. An aspect can modify a
              class without needing to edit that class. This property is
              sometimes called <span class="emphasis"><i>reverse inheritance</i></span>.
            </p>
            <p>Secondly, a single aspect can affect multiple classes in
              different ways. A single paint aspect can add different paint
              methods to all the classes that know how to paint, unlike mixin
              classes.
            </p>
            <p>
              So mixin-based inheritance doesn't have the reverse inheritance
              property, and mixins affect every class that mixes them in the same.
              If I want to do something like SubjectObserverProtocol, I need two
              mixins, SubjectPartofSubjectObserverProtocol and ObserverPartof...
              In AspectJ, both halves of the protocol can be captured in a single
              aspect.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:dynamicaop"></a><b>4. </b>How does AspectJ compare with more dynamic AOP?
          </p></div>
          <div class="answer"><p><a name="d0e565"></a><b></b>
            Some AOP techniques are presented as "dynamic" because the weaving
            occurs when classes are loaded, because aspects can be configured
            in a separate XML file before launch, or because some advice
            depends on runtime reflection. They are said to be more flexible
            than AspectJ.
          </p>
            <p>
              This is a misconception. First, the AspectJ 1.1 weaver has always
              supported weaving at compile-time or class-load-time. Weaving at
              compile-time reduces application launch and running time, and it helps
              IDE's offer support for tracking down weaving errors and understanding
              the impact of aspects on a system.
              On the other hand, weaving at load-time simplifies build and deployment.
              Before AspectJ 1.2, the user had to write a class loader that used the
              weaver API to weave at load time; since 1.2, AspectJ comes with a
              command-line launcher to support weaving at class-load-time without
              any other changes to a build configuration. In AspectJ 5, we expect
              to get a similar level of support as AspectWerkz, and to exploit
              the class bytecode weaving hook available in Java 5 VM's.
            </p>
            <p>
              Second, AspectJ programs, like Java programs generally, can be
              written to support any level of XML configuration or to depend on
              runtime reflection. There are some benefits to using AspectJ;
              e.g., the proceed() form within around advice simplifies a lot of
              the work that otherwise would go into writing a generalized
              interceptor, without introducing many of the runtime errors that can
              result from interceptors.
              For AspectJ examples of configurable or reflection-dependent programs,
              see the sample code linked off the AspectJ documentation page
              or the examples discussed on the mailing list, e.g.,
              <a href="http://dev.eclipse.org/mhonarc/lists/aspectj-users/msg02151.html" target="_top">
                Incremental and runtime weaving support?</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aopandxp"></a><b>5. </b>What is the relationship between AOP and
            XP (extreme programming AKA agile methods)?
          </p></div>
          <div class="answer"><p><a name="d0e579"></a><b></b>From a question on the user list:
            <pre class="programlisting">
&gt; Anyone know the connections between AOP and Extreme Programming?
&gt; I am really confused. It seems AOP is a programming paradigm, which
&gt; is the next level of abstraction of OOP. Extreme Programming, however,
&gt; this is a lightweight software development process. One of the common
&gt; motivations of AOP and XP is designed to adopt to the requirement
&gt; changes, so that it can save the cost of software development.
            </pre>
            </p><p>
              This is Raymond Lee's answer:
            </p>
            <p>
              You're not really that confused. AOP and XP are orthogonal concepts,
              although AOP can be used to help accomplish XP goals.
              One of the goals of XP is to respond to changing requirements.
              Another is to reduce the overall cost of development. These are
              not necessarily the same thing.
            </p>
            <p>
              One of the principles of XP that contribute to meeting those goals
              is to maintain clean, simple designs. One of the criteria for clean,
              simple designs is to factor out duplication from the code. Benefits
              of removing duplication include the code being easier to understand,
              better modularity of the design, lower costs of code changes, less
              chance of conflicting changes when practicing collective code
              ownership, etc.
            </p>
            <p>
              Different types of duplication lend themselves to being addressed by
              different design paradigms and language features. Duplicate snippets
              of code can be factored out into methods. Duplicate methods can be
              factored out to common classes, or pushed up to base classes.
              Duplicate patterns of methods and their use can be factored out to
              mechanisms of classes and methods (i.e. instantiations of design
              patterns).
            </p>
            <p>
              AOP addresses a type of duplication that is very difficult to handle
              in the other common paradigms, namely cross-cutting concerns. By
              factoring out duplicate cross-cutting code into aspects, the target
              code becomes simpler and cleaner, and the cross-cutting code becomes
              more centralized and modular.
            </p>
            <p>
              So, AOP as a paradigm, and the associated tools, gives an XPer, or
              anyone wanting to remove duplication from the code base, a powerful
              way to remove a form of duplication not easily addressed until now.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aspectjandcsharp"></a><b>6. </b>Will you support C#?</p></div>
          <div class="answer"><p><a name="d0e601"></a><b></b>Not at this time. Although the resemblances between C# and
            Java
            means it would probably be a fairly straightforward matter to take
            the AspectJ language design and produce AspectC#, our current focus
            is only on supporting effective uses of AspectJ.
          </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="adoption"></a>7 Deciding to adopt AspectJ</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:productplans"></a><b>1. </b>
            Is it safe to use AspectJ in my product plans?
          </p></div>
          <div class="answer"><p><a name="d0e611"></a><b></b>You may use AspectJ in your product or project with little
            risk. Several factors play a role in reducing the risk of adopting
            this new technology:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e615"></a>AspectJ is an <span class="emphasis"><i>addition</i></span> to
                  Java, and can be introduced into a project
                  in a way that limits risk.
                  See <a href="#q:startUsingAJ">Q: How should I start using AspectJ?</a> for
                  some suggestions on how to do this.
                </p></li>
                <li><p><a name="d0e623"></a>The AspectJ compiler accepts standard Java as
                  input and produces standard Java bytecode as output.
                  In 1.0, an optional mode produces standard Java source code
                  which may then be compiled with any compliant Java compiler
                  (e.g. Sun's <tt>javac</tt> compiler
                  or IBM's <tt>jikes</tt> compiler).
                  In 1.1, an optional mode accepts standard Java bytecode
                  from any compliant Java compiler
                  and weaves in the aspects to produce new bytecode.
                </p></li>
                <li><p><a name="d0e632"></a>AspectJ is available under a non-proprietary, open source license,
                  either the
                  <a href="http://www.opensource.org/licenses/mozilla1.1" target="_top">
                    Mozilla Public License 1.1</a>
                  for 1.0 or the
                  <a href="http://eclipse.org/legal/cpl-v10.html" target="_top">
                    Common Public License 1.0</a> for 1.1.
                  AspectJ will continue to evolve and be available, regardless
                  of the fate of any particular organization involved with
                  AspectJ.
                </p></li>
                <li><p><a name="d0e641"></a>Removing AspectJ from your program is not
                  difficult, although you will lose the flexibility and
                  economy that AspectJ provided.
                </p></li>
                <li><p><a name="d0e644"></a>A number of significant open-source projects and industry
                  products use AspectJ successfully. One list is kept on
                  <a href="http://www.aosd.net/wiki/index.php?title=FAQ" target="_top">
                    the AOSD FAQ</a>, and more appear on the mailing
                  lists (search for, e.g., "AspectJ in real world", as
                  described in <a href="#q:searchingsite">Q:How can I search the email archives or the web site?</a>).
                </p></li>
              </ul>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:effectonsize"></a><b>2. </b>What is the effect of using AspectJ on the
            source code
            size of programs?
          </p></div>
          <div class="answer"><p><a name="d0e657"></a><b></b>Using aspects reduces, as a side effect, the number of
            source
            lines in a program. However, the major benefit of using aspects
            comes from <span class="emphasis"><i>improving</i></span> the modularity of a
            program, not because the program is smaller. Aspects gather into a
            module concerns that would otherwise be scattered across or
            duplicated in multiple classes.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:effectonperformance"></a><b>3. </b>
            Does AspectJ add any performance overhead?
          </p></div>
          <div class="answer"><p><a name="d0e667"></a><b></b>The issue of performance overhead is an important one. It
            is
            also quite subtle, since knowing what to measure is at least as
            important as knowing how to measure it, and neither is always
            apparent.
          </p>
            <p>We aim for the performance of our implementation of AspectJ to
              be on par with the same functionality hand-coded in Java. Anything
              significantly less should be considered a bug.
            </p>
            <p>There is currently no benchmark suite for AOP languages in
              general or for AspectJ in particular. It is probably too early to
              develop such a suite because AspectJ needs more maturation of the
              language and the coding styles first. Coding styles really drive
              the development of the benchmark suites since they suggest what is
              important to measure.
            </p>
            <p>Though we cannot show it without a benchmark suite, we believe
              that code generated by AspectJ has negligible performance overhead.
              Inter-type member and parent introductions should have very little
              overhead, and advice should only have some indirection which
              could be optimized away by modern VM's.
            </p>
            <p>The <tt>ajc</tt> compiler will use static typing information
              to only insert the advice and dynamic pointcut tests that are absolutely necessary.
              Unless you use 'thisJoinPoint' or 'if', the main dynamic checks will be
              'instanceof' checks which are generally quite fast.
              These checks will only be inserted when they can not be inferred from
              the static type information.
            </p>
            <p>When measuring performance, write AspectJ code
              fragments and compare them to the performance of the
              corresponding code written without AspectJ. For example, don't
              compare a method with before/after advice that grabs a lock to just
              the method. That would be comparing apples and oranges. Also be
              sure to watch out for JIT effects that come from empty method
              bodies and the like. Our experience is that they can be quite
              misleading in understanding what you've measured.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:modularityviolations"></a><b>4. </b>
            I've heard that AspectJ leads to modularity violations. Does it?
          </p></div>
          <div class="answer"><p><a name="d0e687"></a><b></b>
            Well I haven't yet seen a language in which you can't write bad code!
          </p>
            <p>
              But seriously, most AspectJ users find that just like when they learned
              OO, it takes a while to really get the hang of it. They tend to start
              in the usual way, by copying canonical examples and experimenting with
              variations on them.
            </p>
            <p>
              But users also find that rather than being dangerous, AspectJ helps them
              write code that is more clear and has better encapsulation -- once they
              understand the kind of modularity AspectJ supports. There are several
              good papers that talk about this (see below), but here's a basic point
              to keep in mind: when properly used, AspectJ makes it possible program
              in a modular way, something that would otherwise be spread throughout
              the code. Consider the following code, adapted from the AspectJ tutorial:
            </p>
            <pre class="programlisting">
aspect PublicErrorLogging {
    Log log = new Log();

    pointcut publicInterface(Object o):
        call(public * com.xerox.*.*(..)) &amp;&amp; target(o);

    after(Object o) throwing (Error e): publicInterface(o) {
        log.write(o, e);
    }
}
          </pre>
            <p>
              The effect of this code is to ensure that whenever any public method of
              an interface or class in the <tt>com.xerox</tt> package
              throws an error, that error is logged before being thrown to its caller.
            </p>
            <p>
              Of course in the alternative implementation a large number of methods
              have a try/catch around their body.
            </p>
            <p>
              The AspectJ implementation of this crosscutting concern is clearly
              modular, whereas the other implementation is not. As a result, if you
              want to change it, its easier in the AspectJ implementation. For
              example, if you also want to pass the name of the method, or its
              arguments to <tt>log.write</tt>, you only have to edit
              one place in the AspectJ code.
            </p>
            <p>
              This is just a short example, but I hope it shows how what happens
              with AOP and AspectJ is that the usual benefits of modularity are
              achieved for crosscutting concerns, and that leads to better code,
              not more dangerous code.
            </p>
            <p>
              One paper someone else just reminded me of that talks some more
              about this is:
              <a href="http://www.cs.ubc.ca/~kdvolder/Workshops/OOPSLA2001/submissions/12-nordberg.pdf" target="_top">
                http://www.cs.ubc.ca/~kdvolder/Workshops/OOPSLA2001/submissions/12-nordberg.pdf
              </a>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:encapsulation"></a><b>5. </b>
            Why does AspectJ permit aspects to access and add members of another type?
            Isn't that violating OO encapsulation?
          </p></div>
          <div class="answer"><p><a name="d0e719"></a><b></b>In the spirit of Smalltalk, we have decided to give more
            power
            to the language in order to let the user community experiment and
            discover what is right. To date this has proven to be a successful
            strategy because it has permitted the construction of many useful
            aspects that crosscut the internal state of an object, and as such
            need access the its private members. However, we are not
            discounting that some sort of restrictions are useful, rather, we
            are seeking input from the community in order to decide on what
            these restrictions should be.
          </p>
            <p>
              In that light, our position on encapsulation is :
            </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e725"></a>we respect Java's visibility rules</p></li>
                <li><p><a name="d0e728"></a>we also provide open-classes, a mature OO technology</p></li>
                <li><p><a name="d0e731"></a>we provide "privileged" access if you really need it.</p></li>
              </ul>
            </div>
            <p>
              Introducing parents or members to classes is a well-studied OO technique
              known as open classes.
            </p>
            <p>
              Open classes have been used in many languages prior to AspectJ,
              including CLOS, Python, Smalltalk, Objective-C, and others.
              Building from Java, introduction in AspectJ provides better
              name hygiene and access control than prior languages.
              Introduced code obeys all of Java's normal accessibility rules
              for its lexical location in the aspect that it is introduced from.
              Such code can not even see, much less access, private members of
              the class it is introduced into. Further, introductions can be
              declared private to the aspect, so they are not visible to
              other clients of the class.
            </p>
            <p>
              Privileged aspects do permit access to private members of another
              class. They are a response to the very few cases where developers
              genuinely need such access (typically for testing purposes where it
              access is necessary), but it would be more risky to open access by
              putting the aspect in the same package, adding test code, or changing
              access in the target class. We recommend using privileged aspects
              only as necessary, and believe that marking them "privileged" makes
              any potential misuse apparent.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aspectjandj2ee"></a><b>6. </b>Can I use AspectJ with J2EE?</p></div>
          <div class="answer"><p><a name="d0e744"></a><b></b>
            Consider the component types in J2EE:
          </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e748"></a>
                  Servlet: AspectJ works well within servlets
                </p></li>
                <li><p><a name="d0e751"></a>
                  JSP: It is possible to use AspectJ to affect code in JSPs by precompiling
                  them into Java sources and compiling these with ajc. This can be used, e.g., to
                  customize displays by turning on and off custom JSP taglibs. The mapping from a
                  given jsp source to java package and class name is not standardized, which means
                  doing this imposes dependencies on specific container versions.
                </p></li>
                <li><p><a name="d0e754"></a>
                  EJB: AspectJ supports a wide variety of aspects for EJBs. It can be used for
                  logging, tracing, debugging, error handling by layers, correlated method-level
                  interception (e.g., chargebacks), metering, fine-grained transactions, etc.
                  Indeed, it can be used to enforce adherence to coding restrictions within an
                  EJB (e.g., not using java.io, creating a class loader, or listening on
                  sockets) using <tt>declare error</tt>.
                </p></li>
              </ul>
            </div>
            <p>
              The basic limitations are that there is no built-in support for writing J2EE
              analogs for AspectJ extensions to Java, like distributed aspects, distributed
              cflow, or managing state between invocations. These don't prevent one from using
              AspectJ to do useful intra-container implementation, nor need they prevent one
              from building distributed support, state management, and inter-component
              implementations that leverage AspectJ. It just takes some work. In more detail:
            </p>
            <p>
              All AspectJ implementations may define "code the implementation controls".
              The AspectJ 1.0 implementation defines this as the files passed to the compiler
              (AspectJ 1.1 will also support bytecode weaving).
            </p>
            <p>
              Some advice on EJB operations will generate methods that confuse ejb compilers.
              To avoid this problem, you can use the -XaddSafePrefix flag when compiling with ajc.
            </p>
            <p>
              EJB components may be invoked remotely, and containers may passivate and
              pool EJB's. Servlets have similar limitations, and in both cases the
              lifespan of the defining class loader is implementation-dependent
              (though it must span the operation of a particular request).
            </p>
            <p>
              Being limited by lifecycle and namespace, the AspectJ 1.0 implementation
              supports aspects that operate through non-remote invocations during the lifetime
              of the namespace for a particular
              deployment unit compiled in its entirety by the ajc compiler.
              This means AspectJ supports common aspects only within a single local runtime
              namespace (usually implemented as a class loader hierarchy).
            </p>
            <p>
              Further, AspectJ recognizes language-level join points (object initialization,
              method calls, etc.), not their EJB analogs (ejb find or create methods...).
              These lead to the following consequences:
            </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e773"></a>
                  Issingleton aspects (the default) are limited to the lifetime of
                  the defining class loader, which in some implementations may not span
                  multiple invocations of the same application or EJB component.
                </p></li>
                <li><p><a name="d0e776"></a>
                  EJB lifecycles are different from object lifecycles, so perthis
                  and pertarget aspects will make little sense. They do not work
                  in the current implementation, which uses synchronized methods
                  to ensure a correct association in threaded environments
                  (EJB's may not have synchronized methods).
                </p></li>
                <li><p><a name="d0e779"></a>
                  Percflow or percflowbelow aspects are restricted to a chain of
                  non-remote invocations. While EJB 2.0 permits declaring an interface
                  local, this information is not available to the AspectJ compiler today.
                  For same reasons as stated above fore perthis, these will not work even
                  in the EJB container.
                </p></li>
                <li><p><a name="d0e782"></a>
                  Evaluation of cflow or cflowbelow pointcuts will be valid only
                  with respect to a chain of non-remote invocations.
                </p></li>
              </ul>
            </div>
            <p>
              In addition, any AspectJ code should respect EJB operations:
            </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e788"></a>
                  The EJB container accesses EJB component fields directly, i.e.,
                  in code outside the control of the compiler. There is no join point for
                  these accesses, and hence no way to write a pointcut to advise that access.
                </p></li>
                <li><p><a name="d0e791"></a>
                  The EJB container may pool EJB components, so any initialization
                  join points may run once per component constructed, not once per
                  component initialized for purposes of a client call.
                </p></li>
                <li><p><a name="d0e794"></a>
                  The EJB container is permitted to change class loaders, even
                  between invocations of a particular EJB component (by passivating and
                  activating with a new class loader). In this case, instances of singleton
                  aspects will not operate over multiple invocations of the component, or that
                  static initialization join point recur for a given class as it is re-loaded.
                  This behavior depends on the container implementation.
                </p></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aspectjandgj"></a><b>7. </b>Can I use AspectJ with Generic Java?</p></div>
          <div class="answer"><p><a name="d0e801"></a><b></b>We plan to support Generics when Java 1.5 is available.
          </p>
            <p>But at this time, unfortunately not. The two compilers are just not
              at all compatible. In an ideal world, there would be a wonderful
              Open Source extensible compiler framework for Java that both GJ and
              AspectJ would be built on top of, and they would seamlessly
              interoperate along with all other extensions to Java that you might
              be interested in, but that's not the case (yet?).
            </p>
            <p>However, on 09 October 2000, the Java Community Process
              approved a proposal to add generic types to Java that is largely
              based on GJ (JSR 14). A draft specification was submitted for
              public review, which closed on 01 August 2001, and a
              prototype implementation has been released by Sun.
            </p>
            <p>We are committed to moving very rapidly to add support for
              generic types in AspectJ when generic types become part of the Java
              language specification. Everyone on the AspectJ team is looking
              forward to this, because we too would really like to be able to
              write code that includes both aspects and generic types.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aspectjandj2me"></a><b>8. </b>Can I use AspectJ with J2ME?</p></div>
          <div class="answer"><p><a name="d0e814"></a><b></b>The J2ME platform has several different components.
            The diagram below shows how the different profiles
            build on top of the two configurations CDC (Connected Device
            Configuration) and CLDC (Connected Limited Device Configuration):
            <pre class="programlisting">
    --------------
    |  Personal  |
    --------------      --------
    | Foundation |      | MIDP |
  ------------------  ------------------
  |      CDC       |  |      CLDC      |
------------------------------------------
|                 Java                   |
------------------------------------------  
                </pre>
            Which configuration you have dictates the restrictions when
            running AspectJ compiled programs.
            </p><p>
              If you're running with a profile which sits on top of CDC then
              there are not, as far as we are aware, any restrictions when
              running AspectJ compiled code on this flavour of J2ME.
            </p>
            <p>
              If you're running with a profile sitting on top of CLDC 1.1
              you are currently unable to use the <tt>thisJoinPoint,
              thisJoinPointStaticPart</tt> and <tt>
              thisEnclosingJoinPointStaticPart</tt> variables, the
              <tt>cflow</tt> and <tt>cflowbelow</tt>
              pointcuts and the <tt>percflow</tt> and <tt>
              percflowbelow</tt> perClauses.
            </p>
            <p>
              Finally, if you're running with a profile which sits on top
              of CLDC 1.0 you have all the restrictions of CLDC 1.1. There may
              be further restrictions due to the lack of types corresponding
              to the primitive types (e.g. Integer.TYPE), however, at the
              time of writing we have been unable to do any extensive testing
              on this.
            </p>
            <p>
              Note that the aspectj runtime jar is now (as of AspectJ5) quite
              large but only a small subset is required for executing code
              in J2ME environments. We plan to ship a second aspectjrt.jar
              built for the J2ME environment at some point.
            </p>
            <p>
              For more discussion and to raise any issues you have with
              AspectJ and J2ME, refer to
              <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=92933" target="_top">
                bugzilla entry 92933</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aopinjava"></a><b>9. </b> Are you working to put AOP into Java?
            It seems that every AOP toolset currently uses proprietary mechanisms
            to describe point-cuts, etc.
          </p></div>
          <div class="answer"><p><a name="d0e855"></a><b></b>
            We are working on standardization, but it's
            a question of timing/ripeness (imagine going from thousands of users
            to millions). (See <a href="#q:standardization">Q:What are your plans to make AspectJ a general feature of
              Java supported by Sun and the other key-players in the Java Industry?</a>.) We believe
            AspectJ addresses this question in the best way possible now:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e861"></a>
                  It's open-source. Rather than being proprietary or controlled by a
                  vendor, it's available for anybody to use and build upon, forever.
                </p></li>
                <li><p><a name="d0e864"></a>
                  AspectJ is not a set of mechanisms, it's a language. It is currently
                  implemented using certain techniques, but there's nothing that prevents
                  it from being implemented with other techniques. That means users can
                  adopt the language with confidence that implementations will get better.
                </p></li>
                <li><p><a name="d0e867"></a>
                  There is no engineering need to change Java. The AspectJ language uses
                  the join point model already in Java, so there is no need to extend the
                  programming model. Our implementation produces valid Java bytecode, which
                  runs in any compliant J2SE VM and supports standard debuggers for those VM's
                  that support JSR-45 (debugging support for multi-language/multi-file sources).
                  This is a huge benefit to Sun since Sun must be extremely cautious
                  about extensions to the language or VM; before adopting AOP, Sun should
                  demand the kind of actual-proof that AspectJ implementations offer.
                </p></li>
                <li><p><a name="d0e870"></a>
                  On the issue of "proprietary mechanisms to describe pointcuts, etc.": Any AOP
                  has to have some language to describe pointcuts and the like ("pointcuts"
                  of course being the AspectJ term). Users would like to have one language
                  (to avoid having to learn or transform between many languages) and the
                  choice of multiple implementations (tailored for a configuration, subject
                  to competitive pressure, etc.). That's what AspectJ offers.
                </p></li>
                <li><p><a name="d0e873"></a>
                  That said, we believe the AspectJ extensions to Java could form the basis
                  for bringing AOP to Java; when that happens, there will be engineering
                  opportunities to make the implementation and tool support better.
                </p></li>
              </ul>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:support"></a><b>10. </b>What kind of support is available?</p></div>
          <div class="answer"><p><a name="d0e881"></a><b></b>
            The mailing lists provide the primary support for everyone
            in the community
            (See <a href="#q:mailingLists">Q: What mailing lists are there?</a>).
            To request commercial support, tutorials, or presentations,
            use the developer mailing list,
            <tt>aspectj-dev@eclipse.org</tt>.
          </p>
            <p>
              To find out about known issues, see the
              <a href="progguide/implementation.html" target="_top">
                AspectJ Programming Guide Appendix, "Implementation Notes"</a>
              and the AspectJ bugs in the database at
              <a href="http://bugs.eclipse.org/bugs" target="_top">http://bugs.eclipse.org/bugs</a>
              (using the product <tt>AspectJ</tt>). Here are direct links to
              <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=AspectJ&amp;component=Compiler&amp;bug_status=UNCONFIRMED&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED"
                target="_top">
                view open compiler bugs</a>,
              <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=AspectJ" target="_top">
                view all Aspectj bugs (open or closed)</a>, or
              <a href="http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AspectJ" target="_top">
                add new bugs</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:mailingLists"></a><b>11. </b>What mailing lists are there?</p></div>
          <div class="answer"><p><a name="d0e913"></a><b></b>
            The AspectJ users mailing list
            (<tt>aspectj-users@eclipse.org</tt>)
            provides an informal network of AspectJ language users who
            can answer usage questions about AspectJ programs
            and the AspectJ tools.
            This is the place to ask how to code something in AspectJ
            or how to write Ant or shell scripts to invoke the tools.
          </p>
            <p>
              The AspectJ developers mailing list
              (<tt>aspectj-dev@eclipse.org</tt>)
              provides an informal network of AspectJ technology experts who
              aim to understand the technology behind AspectJ.
              The committers to the AspectJ project use this list
              for open technical and planning discussions.
              Developers can answer questions about what's possible and about
              integrating AspectJ technology with other technologies.
            </p>
            <p>
              For both mailing lists, only subscribed members may post messages.
              To subscribe, visit the
              <a href="http://eclipse.org/aspectj" target="_top">AspectJ web site</a>.
            </p>
            <p>
              There you can also subscribe to
              <tt>aspectj-announce@eclipse.org</tt>,
              a low-traffic list containing only announcements
              about significant AspectJ events and product releases.
              To get on a similar list for aspect-oriented software
              development generally, see
              <a href="http://aosd.net" target="_top">http://aosd.net</a>.
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="compiler"></a>8 Using the AspectJ compiler</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:compilerRequired"></a><b>1. </b>
            Do I have to use the AspectJ compiler?
          </p></div>
          <div class="answer"><p><a name="d0e944"></a><b></b> The AspectJ compiler or weaver is required at some point,
            but
            many people can use AspectJ without changing their build or
            deployment process significantly. For aspects that are not
            required to compile, you can use the AspectJ binary weaver, run
            at build-time or class-load-time. You can write aspects using
            the original code style (which must be compiled with the AspectJ
            compiler) or using the annotation style new in AspectJ 5 (which
            may be compiled with Javac or the AspectJ compiler). </p>
            <p>
              For more information, see
              <a href="#q:codeversusannotationstyles">Q:Should I use code- or annotation-style aspects?</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:requiredsources"></a><b>2. </b>
            What files do I need to include when compiling AspectJ programs?
          </p></div>
          <div class="answer"><p><a name="d0e955"></a><b></b>You need to specify to the compiler the files that
            contain your aspects and the files that contain the
            types affected by your aspects.
            See <a href="#q:knowWhenAspectsAffectClasses">Q: How do I know which aspects affect a class when looking at
              that class's source code?</a>.
            The AspectJ compiler will not search the source path for types
            that may be affected (unlike Javac and Jikes).
            In AspectJ 1.0, ajc requires all code to be in source form;
            in AspectJ 1.1, Java and AspectJ code may be in either source
            or binary form.
          </p>
            <p>In some cases you should compile your entire system all at once.
              If this is too slow, then you can try to make reasonable divisions
              between sets of source files whose aspects do not interact to
              achieve a shorter compile cycle (particularly for development
              aspects). If you have aspects that apply to different modules,
              you can try compiling them into a binary form and using them
              to weave each module. However, if you get any problems
              or if you wish to run tests or do a release, you should recompile
              the entire system.
            </p>
            <p>
              For more information, see the
              <a href="devguide/index.html" target="_top">
                Development Environment Guide</a>
              <a href="devguide/ajc-ref.html" target="_top">
                Reference for ajc</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:listingsources"></a><b>3. </b>I have to list many files in the command
            line to
            compile with <tt>ajc</tt>. Is there any other way to
            provide the file names to <tt>ajc</tt>?
          </p></div>
          <div class="answer"><p><a name="d0e980"></a><b></b>
            Yes, use the argfile option to ajc. List source
            files in a line-delimited text file and direct ajc to that
            file using <tt>-argfile</tt> or <tt>@</tt>:
          </p>
            <pre class="programlisting">ajc @sources.lst
ajc -argfile sources.lst
          </pre>
            <p>Another way in AspectJ 1.1 is to use the
              <tt>-sourceroots</tt> options, which reads all
              source files in a given set of directories:
            </p>
            <pre class="programlisting">ajc -sourceroots "src;testsrc"
          </pre>
            <p>
              For more information, see the
              <a href="devguide/index.html" target="_top">
                Development Environment Guide</a>
              <a href="devguide/ajc-ref.html" target="_top">
                Reference for ajc</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:compilerVM"></a><b>4. </b>What Java virtual machine (JVM) do I use to run
            the
            AspectJ compiler?
          </p></div>
          <div class="answer"><p><a name="d0e1010"></a><b></b>Use the latest, greatest, fastest JVM you can get your
            hands on
            for your platform. The compiler's performance is dependent on the
            performance of the JVM it is running on, so the faster a JVM you
            can find to run it on, the shorter your compile times will be. At a
            minimum you need to use a Java 2 or later JVM to run the compiler
            (J2SE 1.3 for AspectJ 1.1).
            We realize that this constraint can be a problem for users who
            don't currently have a Java 2 JVM available. We're sorry for the
            inconvenience, but we had to make the hard decision that the
            advantages of being able to rely on Java 2 were worth the cost of
            losing a number of developers who are working on platforms without
            Java 2 support. Here is a list of starting places where you might
            find support for your system.
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e1014"></a>
                  <a href="http://java.sun.com/j2se/" target="_top">Java 2
                    Platform, Standard Edition
                  </a>
                </p></li>
                <li><p><a name="d0e1020"></a>
                  <a href="http://www-106.ibm.com/developerworks/java/jdk/" target="_top">
                    developerWorks : Java technology : Tools and products - Developer kits
                  </a>
                </p></li>
                <li><p><a name="d0e1026"></a>
                  <a href="http://www-124.ibm.com/developerworks/oss/jikes/" target="_top">
                    developerWorks : Open Source - Jikes Project
                  </a>
                </p></li>
                <li><p><a name="d0e1032"></a>
                  <a href="http://java.sun.com/cgi-bin/java-ports.cgi" target="_top">Java
                    Platform Ports
                  </a>
                </p></li>
              </ul>
            </div>
            </p><p>The requirement of Java 2 support is only for
              <span class="emphasis"><i>running</i></span> the AspectJ compiler. The AspectJ
              compiler can be used to build programs that will run on Java 1.1
              (or probably even on Java 1.0) systems. This means that it can
              build programs that will run on Macintosh, FreeBSD, and applets
              that will run in Internet Explorer and Netscape Navigator that are
              still not yet Java 2 compliant.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:compilingForDifferentVMs"></a><b>5. </b>How can I use <tt>ajc</tt> to
            compile
            programs for a JVM that is different from the one used to run it?
          </p></div>
          <div class="answer"><p><a name="d0e1051"></a><b></b>
            <tt>ajc</tt> can be used to develop programs that are
            targeted at the Java 1.1 platform, even though the
            <tt>ajc</tt> compiler won't run on that platform. Here's
            an example of using <tt>ajc</tt> in this sort of
            cross-compilation mode (assuming a Windows platform with all the
            default installation directories):
          </p>
            <pre class="programlisting">
ajc -target 1.1 -bootclasspath c:\jdk1.1.7\lib\classes.zip \
   -classpath c:\aspectj1.0\lib\aspectjrt.jar -extdirs "" \
   -argfile jdk11system.lst
          </pre>
            <p>This same technique can be used if you want to run
              <tt>ajc</tt> on a JDK 1.3 JVM (highly recommended) but
              need to generate code for JDK 1.2. That would look something
              like:
            </p>
            <pre class="programlisting">
ajc -bootclasspath c:\jdk1.2\jre\lib
t.jar \
   -classpath c:\aspectj1.0\lib\aspectjrt.jar \
    -extdirs c:\jdk1.2\jre\lib\ext
            -argfile jdk12system.lst
          </pre>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:assert"></a><b>6. </b>Does the <tt>ajc</tt> compiler support
            the <tt>assert</tt> keyword in Java 1.4?
          </p></div>
          <div class="answer"><p><a name="d0e1082"></a><b></b>Yes. As with <tt>Javac</tt>,
            use the <tt>-source 1.4</tt> option as described
            in the
            <a href="devguide/index.html" target="_top">
              Development Environment Guide</a>
            <a href="devguide/ajc-ref.html" target="_top">
              Reference for ajc</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:generics"></a><b>7. </b>Does the <tt>ajc</tt> compiler support
            generics and the other new language features of Java 5?
          </p></div>
          <div class="answer"><p><a name="d0e1104"></a><b></b>Yes. As with <tt>Javac</tt>,
            use the <tt>-1.5</tt> option as described
            in the
            <a href="devguide/index.html" target="_top">
              Development Environment Guide</a>
            <a href="devguide/ajc-ref.html" target="_top">
              Reference for ajc</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:versionCompatibility"></a><b>8. </b>Will aspects work with different
            versions of the compiler/weaver and runtime?
          </p></div>
          <div class="answer"><p><a name="d0e1123"></a><b></b>Yes. Both <tt>ajc</tt> and
            <tt>aspectjrt.jar</tt> should work with versions
            of aspect code and libraries back to AspectJ 1.2.1.
            Any aspects should be deployed
            with the same version of <tt>aspectjrt.jar</tt>
            they were compiled with. For more information, see the
            <a href="devguide/index.html" target="_top">
              Development Environment Guide</a>
            <a href="devguide/ajc-ref.html" target="_top">
              Reference for ajc</a>
            and
            <a href="devguide/deployment.html" target="_top">
              Deployment notes</a> section on
            <a href="devguide/versionCompatibility.html" target="_top">
              Version compatibility</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:msjvm"></a><b>9. </b>Are there any issues using AspectJ with the Microsoft
            JVM?
          </p></div>
          <div class="answer"><p><a name="d0e1151"></a><b></b>Since AspectJ requires Java 2 or later, it will not run on
            the
            Microsoft JVM, which does not support Java 2.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:javacbytecode"></a><b>10. </b>Does <tt>ajc</tt> rely
            on <tt>javac</tt> for generating Java bytecode
            (<tt>.class</tt>) files?
          </p></div>
          <div class="answer"><p><a name="d0e1167"></a><b></b> No. Some previous versions of AspectJ had this
            requirement.
            In AspectJ 1.0, <tt>javac</tt> can still be used as
            <tt>ajc</tt> back end by using the
            <tt>-usejavac</tt> flag. You can also run <tt>ajc</tt>
            in preprocessor mode to generate Java source
            (<tt>.java</tt>) files to be compiled using
            <tt>javac</tt> or another java compiler.
            Neither option is supported in AspectJ 1.1.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:parsergenerators"></a><b>11. </b>
            I noticed the AspectJ compiler doesn't use a parser generator. Why is that?
          </p></div>
          <div class="answer"><p><a name="d0e1192"></a><b></b>In AspectJ 1.0,
            the PARSER for ajc is written by hand. This choice was made with full
            awareness of the generator tools out there. (Jim had for example used
            the excellent javacc tool for building the parser for JPython (now Jython)).
            One of the reasons that AspectJ uses a hand-written parser is that using
            javacc taught Jim about the LL-k design for parsers (pioneered by antlr).
            As opposed to the state-machine parsers produced by yacc, these parsers are
            very readable and writable by humans.
          </p>
            <p>
              Antlr and javacc did not really suit the project:
            </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e1198"></a>
                  Antlr's support for unicode in the lexer is still immature and this makes
                  using it with Java challenging. This was an even bigger issue 3 years ago
                  when we started on the Java implementation of ajc.
                </p></li>
                <li><p><a name="d0e1201"></a>
                  While javacc is freely available, it is not Open Source. Depending on a
                  closed-source tool to build an Open Source compiler would reduce some
                  of the transparency and control of open-source.
                </p></li>
              </ul>
            </div>
            <p>
              There were also several things that were easier to implement with
              a hand-written parser than with any of the exiting tools.
            </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e1207"></a>
                  Semi-keywords -- it's important to us that
                  "every legal Java program is also a legal AspectJ program."
                  This wouldn't be true if we made 'before' and 'call' full keywords in
                  AspectJ. It is easier to support these sorts of semi-keywords with a
                  hand-written parser. (Note: ajc-1.0.x handles 'aspect' and 'pointcut'
                  slightly specially which can break a few unusual pure Java programs.
                  This is a compiler limitation that will be fixed in a future release.)
                </p></li>
                <li><p><a name="d0e1210"></a>
                  Deprecated syntax warnings -- the syntax of AspectJ
                  changed many times from version 0.2 to the 1.0 release. It was easier
                  to provide helpful warning messages for these changes with our
                  hand-written parser.
                </p></li>
                <li><p><a name="d0e1213"></a>
                  Grammar modularity -- We like being able to have
                  AspectJParser extend JavaParser.
                </p></li>
                <li><p><a name="d0e1216"></a>
                  Part of the grammar for AspectJ is extremely hard for existing tools to
                  capture. This is the type pattern syntax, i.e. "com.xerox..*.*(..)".
                  The sort of case that gives standard parser generators fits is something
                  like "*1.f(..)" which no one would ever write, but which must be
                  supported for a consistent language.
                </p>
                  <p>
                    In AspectJ 1.1, the parser was written as it is for the underlying
                    Eclipse compiler,
                    with some hand-coding of the sort that avoids adding keywords to
                    the language.
                  </p></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:howIncrementalWorks"></a><b>12. </b>How does incremental mode work?
          </p></div>
          <div class="answer"><p><a name="d0e1225"></a><b></b>In incremental mode, ajc minimizes the files that need
            to be recompiled after another file has changed. In Java,
            only the changed files need to be recompiled, but in AspectJ,
            other files might also need to be recompiled or re-woven.
          </p>
            <p> Depending on what is modified, we may need to re-weave
              code. &nbsp;If you change a pointcut and save it, we currently have
              to check everywhere in case a new match is occurring or an old
              match is no longer correct. &nbsp;However, if you simply change
              the body of an advice in an aspect, there is (usually) no need
              to reweave as the affected classes call the advice and the
              advice (by design) maintains its name in the recompiled
              aspect. </p>
            <p> If you make a change to a class (as opposed to an aspect) and
              save it, we usually can get away with merely having to
              compile that class then weave the existing aspects with it -
              rather than doing a full recompile of the entire system.
            </p>
            <p> There are a lot of possible optimizations to the
              algorithms we use, by performing more complete analysis of
              the change made to a file that will enable us to know more
              accurately whether we need to reweave and if we do then what
              we need to reweave - we just haven't gotten around to
              implementing them yet. </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="devtools"></a>9 Integrating AspectJ into your development
        environment</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:knowWhenAspectsAffectClasses"></a><b>1. </b>How do I know which aspects
            affect a class when looking
            at that class's source code?
          </p></div>
          <div class="answer"><p><a name="d0e1241"></a><b></b>When you are working with the IDE support, you can get an
            understanding of which aspects affect any class.
            This enables AspectJ programmers to get the benefits of
            modularizing crosscutting concerns while still having immediate
            access to what aspects affect a class.
          </p>
            <p>For example, the
              <a href="devguide/index.html" target="_top">
                Development Environment Guide</a>
              <a href="devguide/ajbrowser.html" target="_top">
                ajbrowser section</a>.
              shows that you can list or navigate
              between method and advice affecting that method and between a type
              and declarations in an aspect on that type. (The IDE support may
              have more features than <tt>ajbrowser</tt>, depending
              on the IDE.
              See <a href="#q:integrateWithDevTools">Q: How well does AspectJ integrate with existing Java development
                tools?</a> for more
              information on which Java development environments are
              supported.)
            </p>
            <p>
              When you are looking at documentation for AspectJ 1.0 programs,
              <tt>ajdoc</tt> will provide links from aspects and
              advice to the affected code, but it provides less information
              than the IDE support because it only parses declarations.
            </p>
            <p>
              When you are compiling your program, pointcuts that are
              statically-determinable can be used in declare statements
              to identify the code picked out by the pointcut.
              (A pointcut is statically determinable if it only uses
              the pointcut designators
              <tt>within</tt>,
              <tt>withincode</tt>,
              <tt>execution</tt>,
              <tt>call</tt>,
              <tt>get</tt>,
              <tt>set</tt>,
              <tt>initialiation</tt>, and
              <tt>staticinitialiation</tt>.)
              The compiler will list the static code points which will be
              affected by any advice specifying the same pointcut.
              For example, the following will print a warning
              whereever some code in class Bar gets a field value from Foo:
            <pre class="programlisting">
  declare warning: get(* Foo.*) &amp;&amp; within(Bar) 
     : "reading Foo state from Bar";
             </pre>
            </p><p>
              When you are running your program,
              you can trace advice as it executes. This
              enables you to identify advice on join points picked out
              dynamically, which cannot be reflected precisely by IDE support.
              For a related tracing question,
              see <a href="#q:seeingjoinpoints">Q:I don't understand what join points exist. How can I see them?</a>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:idesupport"></a><b>2. </b>What kind of IDE support is available for
            developing
            AspectJ programs?
          </p></div>
          <div class="answer"><p><a name="d0e1299"></a><b></b>See <a href="#q:integrateWithDevTools">Q: How well does
            AspectJ integrate with existing Java development tools?</a></p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:idesupportplans"></a><b>3. </b>What plans are there to support my IDE?</p>
          </div>
          <div class="answer"><p><a name="d0e1307"></a><b></b>
            The AspectJ team directly provided components for JBuilder, Forte,
            and Emacs and supported the open-source AspectJ plugin project
            at <a href="http://eclipse.org/ajdt" target="_top">http://eclipse.org/ajdt</a>
            which uses the AJDE API support for IDE's.
            Supporting new IDE's is a matter of building on the AJDE API's,
            mostly likely adopting one of the existing open-source IDE
            extensions as a design template.
            Here are the IDE's where we know people have expressed interest,
            so interested developer may want to join with others in their
            developer communities to build the integration.
            <div class="itemizedlist"><p><b></b></p>
              <ul>
                <li><p><a name="d0e1315"></a>IDEA/IntelliJ has an enthusiastic community and
                  the developers are working on an extensibility API
                  - <a href="http://intellij.com" target="_top">http://intellij.com</a>
                </p></li>
                <li><p><a name="d0e1321"></a>jEdit comes from a very active open-source community.</p></li>
                <li><p><a name="d0e1324"></a>
                  Oracle JDeveloper is supported at
                  <a href="https://jdeveloperaop.dev.java.net/" target="_top">
                    https://jdeveloperaop.dev.java.net/</a>.
                </p></li>
                <li><p><a name="d0e1330"></a>Some have suggested Codeguide from Omnicore
                  <a href="http://www.omnicore.com" target="_top">http://www.omnicore.com/</a>
                </p></li>
              </ul>
            </div>
            </p><p>
              For questions on AJDE, join the developer's list
              <tt>aspectj-dev@eclipse.org</tt>.
              For questions on the current IDE integrations, contact those projects.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:portingajde"></a><b>4. </b>Can I port AJDE support to my development
            environment?</p></div>
          <div class="answer"><p><a name="d0e1346"></a><b></b>Yes. The core AJDE API is extensible and the source code
            is
            available for download. Start by studying the sources
            for the existing IDE support linked off the AspectJ site
            <a href="http://eclipse.org/aspectj" target="_top">http://eclipse.org/aspectj</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:hybridbuilds"></a><b>5. </b>I want the aspects for development builds but
            remove them for production builds. How can I set up the build
            system so they are unpluggable? And so I use <tt>javac</tt>
            in my production build?
          </p></div>
          <div class="answer"><p><a name="d0e1359"></a><b></b>
            If you are using development-time-only aspects - aspects that only
            exist when you are developing the code, not when you ship it -
            you can use implement a hybrid build process by listing
            the production source files into a javac-compliant argfile,
            and the development source files in another ajc argfiles:
          </p>
            <pre class="programlisting">
     -- file "production.lst":
     One.java
     two/Three.java
     ...

     -- file "tracing.lst":
     trace/Library.java
     Trace.java

     -- file "development.lst":
     @production.lst
     @tracing.lst
          </pre>
            <p>
              Then your development build can use <tt>ajc</tt>:
            </p>
            <pre class="programlisting">
            ajc @development.lst
          </pre>
            <p>
              And your development build can use
              <tt>ajc</tt> or <tt>javac</tt>
              or <tt>jikes</tt>:
            </p>
            <pre class="programlisting">
            jikes @production.lst
          </pre>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:stepwiseBuilds"></a><b>6. </b>
            We compile module jars and then assemble them. Can we continue this with AspectJ?
          </p></div>
          <div class="answer"><p><a name="d0e1388"></a><b></b>
            Aspects apply to everything in a namespace, as if everything is
            compiled together.
            Sometimes you can break the build down into separate steps without breaking
            this model, but we haven't stated exactly where it could break
            because it depends on the interactions between all types.
            You can try the approaches below, but remember to rebuild
            everything in one go if there are problems.
          </p>
            <p>
              The simplest scenario is when the aspects apply to all modules
              and the modules compile without the aspects. In that case,
              weaving in the aspects is just the final assembly step for
              the build.
            </p>
            <p>
              Next is the case where the aspects make changes to a common
              library that are visible to other clients, which themselves
              are otherwise unaffected by the aspects. In this case, the
              common library can be built using ajc, and used on the
              classpath for the module builds:
            <pre class="programlisting">

   ajc -outjar common.jar -sourceroots "aspectj-src:src" ...
   cd ../otherProject
   javac -classpath "../common/common.jar:%name" {src}

        </pre>
            </p><p>
              Combining these last two,
              there's the case where a common set of aspects should
              affect two or more modules that are in a dependency relationship
              to one another. It should work to reuse the aspects
              in binary form for each compile, in dependency order:

            <pre class="programlisting">

   ajc -outjar common-aspects.jar
       -sourceroots "aspectj-src" ...

   ajc -outjar common.jar
       -sourceroots "src"
       -aspectpath common-aspects.jar ...

   cd ../module1
   ajc -outjar module1.jar
       -sourceroots "src"
       -classpath common.jar
       -aspectpath ../common-aspects.jar ...

   cd ../module2
   ajc -outjar module2.jar
       -sourceroots "src"
       -classpath "common.jar;../module1.jar"
       -aspectpath ../common-aspects.jar ...

        </pre>
            </p><p>
              If two modules are visibly affected by aspects and
              mutually-dependent, the only thing to do is compile
              them together.
            </p>
            <p>
              It's safest to assume that all aspects can affect all
              types in a namespace; using build boundaries to effect
              crosscutting limits causes a dangerous dependency on
              the build process and might cause problems.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:incrementalModuleCompiles"></a><b>7. </b>We use modules and would like to
            use incremental compilation.
            Is that possible?
          </p></div>
          <div class="answer"><p><a name="d0e1411"></a><b></b>
            Just incrementally-compile the whole system.
            Specify to ajc the modules as multiple source roots
            (or input jars if you are weaving libraries).
          </p>
            <p>
              In Eclipse's AJDT, you can create a top-level project with symbolic
              links out to the sources:

            <pre class="programlisting">

   app-assembly/
     {link common/aspects}
     {link common/src}
     {link module1/src}
     ...

            </pre>

            Then everything is part of one huge incremental compile. Also, you
            can close this master project and work the others using the Java
            compiler or AJDT.
            </p><p>
              The links make incremental development possible without affecting
              the modularized Ant builds. (Our practice runs along those lines.)
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="notes"></a>10 Programming notes and tips</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:methodsignatures"></a><b>1. </b>Is it possible to change methods by
            introducing keywords (like
            <tt>synchronized</tt>), adding parameters,
            or changing the "throws" clause?
          </p></div>
          <div class="answer"><p><a name="d0e1431"></a><b></b>AspectJ does not enable you to change the signature of a
            method,
            but you can (by express declaration) work around some
            limits imposed by the signature. You can convert a checked exception to
            unchecked using <tt>declare soft</tt>, privileged aspects
            have access to private methods, and you can use a percflow aspect to
            ferry additional state to a callee without changing intervening
            signatures. For more details, see
            <a href="progguide/index.html" target="_top">The AspectJ Programming Guide</a>.
            In the case of <tt>synchronized</tt>,
            we have what we consider a better solution that uses
            around advice instead of introduction. This solution is described
            in
            <a href="http://aspectj.org/pipermail/users/2000/000534.html" target="_top">
              this thread (no longer available)
            </a> on the AspectJ users list, with some
            <a href="http://aspectj.org/pipermail/users/2000/000536.html" target="_top">
              additional comments (no longer available)
            </a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:seeingjoinpoints"></a><b>2. </b>
            I don't understand what join points exist. How can I see them?
          </p></div>
          <div class="answer"><p><a name="d0e1453"></a><b></b>
            You can trace them using using an aspect.
            For example, you can start logging at a particular method call and
            see what join points occur after the call and before it returns.
          </p>
            <p>
              Here's some code Jim Hugunin wrote to trace join points
              and posted to the users list. To reuse the aspect,
              define a subaspect and implement the pointcuts, for example:
            <pre class="programlisting">

aspect JoinPointSampleAspect extends aj.TraceJoinPoints {
    protected pointcut entry() : 
        execution(static void JoinPointSample.main(String[]));
    protected pointcut exit() : 
        call(static void JoinPointSampleAspect.exit());

    public static void main (String[] args) {
        JoinPointSample.main(args);   
        JoinPointSampleAspect.exit();   
    } 
    public static void exit() {}
}

class JoinPointSample {
    public static void main(String[] args) {}
}
          </pre>
            </p><p>Here's the aspect:
            <pre class="programlisting">

/* TraceJoinPoints.java */

package aj;

import org.aspectj.lang.*;
import org.aspectj.lang.reflect.*;
import java.io.*;

public abstract aspect TraceJoinPoints {
    protected abstract pointcut entry();
    protected pointcut exit(): call(* java..*.*(..));
    // this line is for AspectJ 1.1; for 1.0, use "dominates"
    declare precedence : TraceJoinPoints, *;
    final pointcut start(): entry() &amp;&amp; !cflowbelow(entry());

    final pointcut trace():
        cflow(entry()) &amp;&amp; !cflowbelow(exit()) &amp;&amp; !within(TraceJoinPoints+);

    before(): start() { makeLogStream(); }

    before(): trace() { logEnter(thisJoinPointStaticPart); }
    after(): trace() { logExit(thisJoinPointStaticPart); }

    after(): start() { closeLogStream(); }

    //------------ added
    /**
     * Emit a message in the log, e.g.,
     * &lt;pre&gt;TraceJoinPoints tjp = TraceJoinPoints.aspectOf();
     * if (null != tjp) tjp.message("Hello, World!");&lt;/pre&gt;
     */
    public void message(String s) {
        out.println("&lt;message&gt;" + prepareMessage(s) + "&lt;/message&gt;");
    }
    public void message(String sink, String s) {
        if (null == sink) {
            message(s);
        } else {
            out.println("&lt;message sink=" + quoteXml(sink)
                        + " &gt;" + prepareMessage(s) + "&lt;/message&gt;");
        }
    }
    protected String prepareMessage(String s) { return s; } // XXX implement

    //--------- end of added

    PrintStream out;
    int logs = 0;
    protected void makeLogStream() {
        try {
            out = new PrintStream(new FileOutputStream("log" + logs++ + ".xml"));
        } catch (IOException ioe) {
            out = System.err;
        }
    }

    protected void closeLogStream() {
        out.close();
    }

    int depth = 0;
    boolean terminal = false;
    protected void logEnter(JoinPoint.StaticPart jp) {
        if (terminal) out.println("&gt;");
        indent(depth);
        out.print("&lt;" + jp.getKind());
        writeSig(jp);
        writePos(jp);

        depth += 1;
        terminal = true;
    }

    void writeSig(JoinPoint.StaticPart jp) {
        out.print(" sig=");
        out.print(quoteXml(jp.getSignature().toShortString()));
    }

    void writePos(JoinPoint.StaticPart jp) {
        SourceLocation loc = jp.getSourceLocation();
        if (loc == null) return;

        out.print(" pos=");
        out.print(quoteXml(loc.getFileName() +
                           ":" + loc.getLine() +
                           ":" + loc.getColumn()));
    }

    String quoteXml(String s) {
        return "\"" + s.replace('&lt;', '_').replace('&gt;', '_') + "\"";
    }

    protected void logExit(JoinPoint.StaticPart jp) {
        depth -= 1;
        if (terminal) {
            out.println("/&gt;");
        } else {
            indent(depth);
            out.println("&lt;/" + jp.getKind() + "&gt;");
        }
        terminal = false;
    }

    void indent(int i) {
        while (i-- &gt; 0) out.print("  ");
    }
}

          </pre>
            </p><p>Note that if you are using AspectJ 1.0,
              the line starting with <tt>declare precedence</tt>
              would be removed, and the aspect declaration would look like
              <tt>aspect TraceMyJoinPoints dominates *</tt>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:comparecallandexecution"></a><b>3. </b>
            What is the difference between call and execution join points?
          </p></div>
          <div class="answer"><p><a name="d0e1478"></a><b></b>
            Briefly, there are two interesting times when a constructor or method is
            run. Those times are when it is called, and when it actually
            executes.
          </p>
            <p>
              The main difference is that a call join point happens outside of
              the target object (for non-static methods) or class (for static methods
              and constructors), and that an execution join point happens inside
              the object or class. This means that the <tt>within</tt>
              and <tt>withincode</tt> pointcuts pick them out
              differently: A call join point is picked out within the caller,
              while an execution join point is picked
              out where it is actually defined.
            </p>
            <p>
              A call join point is the ``outermost'' join point for a particular
              call. Once a call join point proceeds, then a number of different
              things happen. For non-static methods, for example, method
              dispatch happens, which will cause one method execution join point
              -- perhaps more, if there are super calls. For constructors, the
              super constructor is called, and fields are initialized, and then
              various constructor execution join points will occur.
            </p>
            <p>
              A call join point matches only the ``external'' calls of a method
              or constructor, based on a signature, and it does not pick out
              calls made with <tt>super</tt>, or
              <tt>this</tt> constructor calls.
            </p>
            <p>Here's more detail:
            </p>
            <p>Consider method execution in Java as (1) the initial call from
              this object to some method on the target object with a
              particular signature; and (2) the execution of the actual code
              in the particular method dispatched in the target object.
              The call join point starts with the initial call and ends
              when control returns to the call (by return or perhaps
              thrown exception). The execution join point starts with
              the method body and ends when the body completes (again
              by return or throwing an exception), so the execution join
              point always happens within the bounds of the corresponding
              call join point. You can see this if you use the
              join-point tracing aspect in see <a href="#q:seeingjoinpoints">Q:I don't understand what join points
                exist. How can I see them?</a>.
            </p>
            <p>As you would expect, the context differs
              in advice on pointcuts picking out execution and call join
              points; for call, <tt>this</tt> refers to the caller, whereas
              for execution <tt>this</tt> refers to the called
              (executing) object.
            </p>
            <p>
              There are some subtle interactions with other AspectJ semantics.
              First, the meaning of the signature in the
              <tt>execution()</tt> and <tt>call()</tt>
              pointcut designators (PCD's) differ: the call type depends upon
              the type of the reference making the call, while the execution
              type depends on the enclosing class.
              Second, you may choose one over another if you cannot bring all
              your sources within the code the compiler controls
              (described in the <a href="progguide/semantics.html" target="_top">appendix</a>
              to the <tt>Programming Guide</tt>).
              For example, to trace calls into a
              method from classes which are outside the code the compiler controls
              at compile time, then using <tt>execution()</tt> will work
              while using <tt>call()</tt>may not. Finally, since
              <tt>super</tt> invocations are not considered method calls,
              to trace <tt>super.foo()</tt> would require using
              <tt>execution</tt>.
            </p>
            <p>
              Because of differences in the way AspectJ 1.0 and 1.1
              are implemented, in 1.0
              you should use the <tt>call()</tt>
              pointcut designator unless you have a good reason to use
              <tt>execution()</tt>; in AspectJ 1.1, the
              reverse is true.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:comparecflowandcflowbelow"></a><b>4. </b>
            What is the difference between cflow and cflowbelow?
          </p></div>
          <div class="answer"><p><a name="d0e1554"></a><b></b>
            Both pick out all the join points in the control flow of
            the specified join points.
            They differ only in that the <tt>cflowbelow()</tt>
            pointcut designator does not pick out the join points
            specified, while <tt>cflow()</tt> does.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:recursiveentrypoints"></a><b>5. </b>How do I say that I want the topmost
            entrypoint in a
            recursive call? How about the most-recent prior entrypoint?
          </p></div>
          <div class="answer"><p><a name="d0e1567"></a><b></b>This is best seen by way of example.
            Given a recursive call to <tt>int factorial(int)</tt>
            you can print the arguments for
            (a) the current and most-recent recursive call
            or (b) the current and original recursive call:
          </p>
            <pre class="programlisting">
aspect LogFactorial {
    pointcut f(int i) : call(int factorial(int)) &amp;&amp; args(i);

    // most-recent
    before(int i, final int j) : f(i) &amp;&amp; cflowbelow(f(j)) { 
        System.err.println(i + "-" + j);
    }

    // original
    before(int i, final int j) : f(i) 
        &amp;&amp; cflowbelow(cflow(f(j)) &amp;&amp; !cflowbelow(f(int))) { 
        System.err.println(i + "@" + j);
    }
}
          </pre>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:initializationjoinpoints"></a><b>6. </b>What is the difference between
            constructor call,
            constructor execution, initialization, and static
            initialization join points?
          </p></div>
          <div class="answer"><p><a name="d0e1579"></a><b></b>Static initialization pertains to initialization of
            a class or interface type. Constructor call and execution
            are akin to method call, and initialization generalizes this and
            picks out the first constructor called.
          </p>
            <p>Their relations are best
              demonstrated by tracing the join points. Below is the class
              Test which implements an interface and extends a class
              along with a trace of the join points below and including
              the constructor call obtained using
              <tt>TraceJointPoints.java</tt>
              from <a href="#q:seeingjoinpoints">Q:I don't understand what join points exist. How can I see them?</a>.
            </p>
            <pre class="programlisting">
            
public class Init {
    public static void main (String[] args) {
        new Test(); 
        end();
    } 
    static void end() {}
}
class Super {}
interface I {}
class Test extends Super implements I {
    Test() {}
}

          </pre>
            <p>For a program compiled with AspectJ 1.0,
              the result is this:</p>
            <pre class="programlisting">
            
  &lt;constructor-call sig="Test()" &gt;
    &lt;staticinitialization sig="Super._init_" /&gt;
    &lt;staticinitialization sig="Test._init_" /&gt;
    &lt;initialization sig="Super()" &gt;
      &lt;instanceinitializer-execution sig="Super._init_" /&gt;
      &lt;constructor-execution sig="Super()" /&gt;
    &lt;/initialization&gt;
    &lt;initialization sig="I()" &gt;
      &lt;instanceinitializer-execution sig="I._init_" /&gt;
      &lt;constructor-execution sig="I()" /&gt;
    &lt;/initialization&gt;
    &lt;initialization sig="Test()" &gt;
      &lt;instanceinitializer-execution sig="Test._init_" /&gt;
      &lt;constructor-execution sig="Test()" /&gt;
    &lt;/initialization&gt;
  &lt;/constructor-call&gt;

          </pre>
            <p>
              Ordinarily, using a <tt>call</tt> pointcut designator
              is best because the call join point surrounds the others, but in
              the case of constructors there is no target object for
              the call (because it has not been constructed yet), so you
              might prefer to use the <tt>initialization</tt>
              pointcut designator.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:adviseconstructors"></a><b>7. </b>How do I work with an object right when
            it is created?
          </p></div>
          <div class="answer"><p><a name="d0e1607"></a><b></b>
            You can advise some form of constructor join point.
            Constructors are tricky in Java, and that's exposed in AspectJ.
            Here are some rules of thumb:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e1611"></a>If you want the join point on the "outside" of object creation,
                  use after returning from call to the constructor:
                </p>
                  <pre class="programlisting">
    after() returning (Foo newlyCreatedObject): call(Foo.new(..)) { ... }
              </pre>
                  <p>
                    You might be tempted to use "this" or "target" to expose the new object, but remember
                    that if you're on the "outside" of object creation, the object itself might not be
                    created yet... it only exists "on the way out", when you return the object.
                  </p></li>
                <li><p><a name="d0e1618"></a>If you want the join point inside a particular constructor, use:
                </p>
                  <pre class="programlisting">
    after(Foo newlyCreatedObject) returning: this(newlyCreatedObject) &amp;&amp; execution(Foo.new(..)) { ... }
              </pre>
                  <p>
                    Remember, though, that if you use "before" advice here, the body of the constructor
                    will not have run, and so the object may be somewhat uninitialized.
                  </p></li>
                <li><p><a name="d0e1625"></a>
                  In the rare case that there are all sorts of constructors for the object that call
                  each other with <tt>this(...)</tt> and you want exactly one join point
                  for each initialization of <tt>Foo</tt>, regardless of the path of
                  constructors it takes, then use:
                </p>
                  <pre class="programlisting">
    after(Foo f) returning: this(f) &amp;&amp; initialization(Foo.new(..)) { ... }
              </pre>
                </li>
              </ul>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:andingpointcuts"></a><b>8. </b>
            I want advice to run at two join points, but it doesn't run at all. What gives?
          </p></div>
          <div class="answer"><p><a name="d0e1641"></a><b></b>
            This usually reflects both a conceptual error and a programming mistake.
            Most likely you want to do something like "run the advice for all
            public and private calls," and the code looks something like this:
          </p>
            <pre class="programlisting">
            within(com.xerox.printing..*) &amp;&amp; call(public * *(..)) &amp;&amp; call(private * *(..))
          </pre>
            <p>
              But a pointcut is evaluated at *each* join point.
              The expression above would never pick out any call join point,
              because no method signature has both public and private access.
              In a pointcut, <tt>pc1() &amp;&amp; pc2()</tt> means both
              must be true at a given join point for advice to run at that join point.
              The correct pointcut would use <tt>||</tt> as follows:
            </p>
            <pre class="programlisting">
            within(com.xerox.printing..*) &amp;&amp; (call(public * *(..)) || call(private * *(..)))
          </pre>
            <p>
              Then the advice will run at the join point.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:staticfieldreferences"></a><b>9. </b>
            How do I refer to a static field when my advice crosscuts multiple classes?
          </p></div>
          <div class="answer"><p><a name="d0e1662"></a><b></b>There is no way in advice to refer to the type of the
            code executing in a static context except by specification.
            This makes it impossible to refer to static members using
            runtime information.
          </p>
            <p>However, AspectJ can determine the class for something
              in the join point context, which you can use as a per-class key.
              Then you can actually declare an instance field to contain
              the per-class value (see the next question). This comes at
              the cost of an extra reference, but the field can be final.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:interfacesastypepatterns"></a><b>10. </b>I would like to reuse a type
            pattern, e.g., to
            write advice that is limited to a certain set of classes.
            Do I have to retype it each time?
          </p></div>
          <div class="answer"><p><a name="d0e1671"></a><b></b>No. You can declare that all the types implement
            an interface you define, and then use the interface type in
            your program. For example:
          </p>
            <pre class="programlisting">
/** 
 * Example of using an interface to represent a type pattern.
 * sub-aspects use declare parents to add to traced types, e.g.,
 *    declare parents: com.mycompany.whatever..* implements Marked;
 */
abstract aspect MarkerExample {
  /** marker interface for types that we want to trace */
  interface Marked {}

  /** calls to an instance of Marked not from an instance of Marked */
  pointcut dynamicCallsIn(): call(* *(..)) &amp;&amp; target(Marked) &amp;&amp; !this(Marked);

  /** calls to methods defined by a subtype of Marked
   *  that don't come from the body of a subtype of Marked
   */
  pointcut staticCallsIn(): call(* Marked+.*(..)) &amp;&amp; !within(Marked+);

  /** print dynamic calls */
  before(): dynamicCallsIn() { System.out.println("before " + thisJoinPoint); }
}

aspect MyMarker extends MarkerExample {
  declare parents: com.mycompany.whatever..* implements Marked;
}
          </pre>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:exampleprograms"></a><b>11. </b>Where do I find example programs and
            how-to's?</p></div>
          <div class="answer"><p><a name="d0e1680"></a><b></b>There are a number of places to find sample code
            and instructions for using AspectJ with other programming tools.
            <div class="orderedlist">
              <ol type="1">
                <li><p><a name="d0e1684"></a>
                  The AspectJ release includes examples in its
                  <tt>doc</tt> directory.
                </p></li>
                <li><p><a name="d0e1690"></a>
                  There is a community repository of sample code and tutorials
                  in the AspectJ CVS tree
                  <tt>docs</tt> module <tt>sandbox</tt> directory.
                  These are extracted and published (online only)
                  <a href="http://dev.eclipse.org/viewcvs/indextech.cgi/~checkout~/aspectj-home/sample-code.html"
                     target="_top">
                    here
                  </a>.
                </p></li>
                <li><p><a name="d0e1702"></a>
                  The <tt>teaching</tt> directory of the
                  <tt>docs</tt> module contains public materials
                  the AspectJ committers use for presentations, some of
                  which include example code. To access CVS, see
                  <a href="#q:buildingsource">Q:How do I get and compile the source code for AspectJ?</a>.
                </p></li>
                <li><p><a name="d0e1713"></a>
                  The archives for the user and developer mailing lists
                  contain many good examples. To search the archives, see
                  <a href="#q:searchingsite">Q:How can I search the email archives or the web site?</a>.
                </p></li>
              </ol>
            </div>
            This code can vary in quality.
            Code that we publish or include with AspectJ is generally
            correct. However, code found in our CVS tree might not have
            been tested thoroughly, and code from the mailing lists might
            be untested or use older versions of the language.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aspectlibraries"></a><b>12. </b>Are aspect libraries available?</p></div>
          <div class="answer"><p><a name="d0e1723"></a><b></b>Some libraries are distributed in the release under the
            examples folder in the distribution.
            These are "libraries" in the sense that they are reusable,
            but they are delivered in source form.
            Similarly, some of the sample code is reusable; for that,
            see <a href="#q:exampleprograms">Q:Where do I find example programs and how-to's?</a>.
            If you develop such a library and want to make it available to
            other users, feel to send it to the users mailing list
            <tt>aspectj-users@eclipse.org</tt>.
          </p>
            <p>In AspectJ 1.1, ajc supports binary aspects, so
              you can distribute aspect libraries without distributing the
              source. For more information, see the
              <tt>-aspectpath</tt>
              option in the
              <a href="devguide/ajc-ref.html" target="_top">
                Reference for ajc</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:serialversionuid"></a><b>13. </b>How does <tt>ajc</tt> interact with the
            <tt>serialVersionUID</tt>?
          </p></div>
          <div class="answer"><p><a name="d0e1749"></a><b></b>The current version of <tt>ajc</tt> can change the
            <tt>serialVersionUID</tt> of generated
            <tt>.class</tt> files as a result of weaving in advice.
            This is an important fact that developers using both aspects and
            serialization should be aware of. It is likely that a future
            version of the compiler will be better behaved regarding the
            <tt>serialVersionUID</tt>.
          </p>
            <p>However, changes to the <tt>serialVersionUID</tt>
              attribute are typically only important when using serialization for
              the long-term persistence of objects. Using standard Java
              serialization for long-term persistence has a number of drawbacks
              and many developers already use alternative solutions. For one
              possibly standard solution, see
              <a href="http://jcp.org/jsr/detail/057.jsp" target="_top">
                Long-Term Persistence for JavaBeans Specification
              </a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:applets"></a><b>14. </b>How can I use AspectJ with applets?</p></div>
          <div class="answer"><p><a name="d0e1776"></a><b></b>
            Just include the aspectjrt.jar as a required archive.
            For example, here is the HTML code for an HTML editor
            applet that contains some debugging aspects:
          </p>
            <pre class="programlisting">
            
&lt;APPLET
   CODE='com.company.swing.applets.EditorApplet'
  WIDTH='700'
 HEIGHT='525'&gt;
    &lt;PARAM NAME="CODE" VALUE="com.company.swing.applets.EditorApplet" &gt;
    &lt;PARAM NAME="ARCHIVE" 
         VALUE ="../company-applets.jar,../aspectjrt.jar,../xmlrpc-applet.jar" &gt;
    &lt;PARAM NAME="type" VALUE="application/x-java-applet;version=1.4"&gt;
    &lt;PARAM NAME="scriptable" VALUE="false"&gt;
&lt;/APPLET&gt;

          </pre>
            <p>
              The above markup has worked reliably with the Java Plugin
              (included in the JRE 1.4.x) in IE 6, Mozilla 1.1 (Win32),
              and Mozilla 1.0.1 (Red Hat Linux 8.0).
              The following link describes how to configure Mozilla/Netscape
              6.x/7.x to use the Java Plugin from a JRE/SDK installation:
              <a href="http://java.sun.com/j2se/1.4.1/manual_install_linux.html" target="_top">
                http://java.sun.com/j2se/1.4.1/manual_install_linux.html</a>.
              (Thanks to Chris Bartling for this answer.)
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:typeoblivious"></a><b>15. </b>How can I specify types for advice that
            captures primitives, void, etc.?</p></div>
          <div class="answer"><p><a name="d0e1790"></a><b></b>
            In some cases, AspectJ allows conversion from values of primitive types to Object,
            so that highly polymorphic advice may be written. This works if an advice parameter
            or the return type for around is typed to Object. So:
          </p>
            <pre class="programlisting">
class Test {
    static int i;
    public static void main(String[] args) {
        i = 37;
    }
}

aspect TraceSet {
    before(Object val): set(* Test.*) &amp;&amp; args(val) {
        System.err.println(val);
        System.err.println(val.class);
    }
}
          </pre>
            <p>
              will print out
            </p>
            <pre class="programlisting">
37
java.lang.Integer
          </pre>
            <p>
              For more information, see the Programming Guide
              <a href="progguide/semantics-pointcuts.html" target="_top">
                semantics section "Context Exposure"
              </a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:versioninfo"></a><b>16. </b>How do I detect which version I am running?
          </p></div>
          <div class="answer"><p><a name="d0e1808"></a><b></b>The <tt>ajc</tt>
            compiler emits the version when passed the
            <tt>-version</tt> flag as an argument.
          </p>
            <p>To programmatically
              detect the version of the AspectJ runtime while running
              under Java 1.4 or later, get the version from the package:
            <pre class="programlisting">
    Package lang = org.aspectj.lang.JoinPoint.class.getPackage();
    String version = lang.getImplementationVersion();
          </pre>
            </p><p>When running under Java 1.3 or earlier, read the manifest
              directly. For example code, see the source for
              <tt>AjBuildManager.checkRtJar(AjBuildConfig)</tt>
              in the <tt>org.aspectj.ajdt.internal.core.builder</tt>
              package of the <tt>org.aspectj.ajdt.core</tt> module,
              available as described in
              <a href="#q:buildingsource">Q:How do I get and compile the source code for AspectJ?</a>.
            </p>
            <p>Note that the version of AspectJ for the tools in
              <tt>aspectjtools.jar</tt> is in
              <tt>org.aspectj.bridge.Version</tt>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:synchronizedAdvice"></a><b>17. </b>How do I write synchronized advice?</p>
          </div>
          <div class="answer"><p><a name="d0e1847"></a><b></b>The only modifier advice can take is <tt>strictfp</tt>.
            However, you can enclose the body of the advice in a synchronized
            clause:
            <pre class="programlisting">
before() : pc() {
  synchronized (this) {
    // advice code here
  }
}
          </pre>
            </p><p>It should not be necessary to synchronize a percflow aspect,
              but you might do this for perthis, pertarget, or issingleton (default)
              aspects. To serialize advice in multiple aspects, synchronize on a
              lock object available (only) to the aspects.
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="problems"></a>11 Common Problems</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:infiniterecursion"></a><b>1. </b>When I run, I get a <tt>StackOverflowError</tt>
            (or a long stack trace or no output whatsoever)
          </p></div>
          <div class="answer"><p><a name="d0e1868"></a><b></b>Most likely this is a case of infinite recursion,
            where advice is advising itself. It presents as a
            <tt>StackOverflowError</tt>
            or silence as the VM exhausts itself in the recursion.
          </p>
            <p>Of course, infinite recursion is possible in Java:</p>
            <pre class="programlisting">
public class Main {
    public static void main(String[] args) {
        try {
           main(args);
        } finally {
           main(args);
        }
    }
}
          </pre>
            <p>If you compile and run this program, and it will fail silently, trying
              to process the finally clause even after throwing the StackOverflowError.
            </p>
            <p>Here's a similar AspectJ program where the recursion is
              not so obvious:
            </p>
            <pre class="programlisting">
aspect A {
    after():  call(* *(..)) { System.out.println("after " + thisJoinPoint); }
}
          </pre>
            <p>This re-invokes itself because it advises any call.
              It invokes itself even after an exception is thrown, since
              <tt>after</tt> advice, like a finally clause, runs even
              after exceptions are thrown. You can fix this by following two practices:
            </p>
            <p>In AspectJ 1.1, the String concatenation operator (+) is
              advised in its StringBuffer form, so if your advise uses
              String + in a way that is picked out by your pointcut,
              you will get infinite recursion.</p>
            <p>
              (1) Use <tt>after returning</tt> to advise normal completions
              or <tt>after throwing</tt> to advise abrupt completions.
              If you use <tt>after</tt> or <tt>after throwing</tt>,
              write the advice with the same care you would a finally clause,
              understanding that it may run after some failure.
            </p>
            <p>(2) Avoid writing advice that advises itself. One simple way to
              do so is to exclude the code within the current aspect:
            </p>
            <pre class="programlisting">
aspect A {
    after() returning:  !within(A) &amp;&amp; call(* *(..)) { 
        System.out.println("after " + thisJoinPoint); 
    }
}
          </pre>
            <p>A better way is often to re-write the pointcut.
              If the advice is advising itself accidentally, that's a sign that
              the pointcut is not saying what you mean.
            </p>
            <pre class="programlisting">
aspect A {
    pointcut withinTargetClasses() : within(A+) || within(B+);
    after() returning:  withinTargetClasses() &amp;&amp; call(* *(..)) { 
        System.out.println("after " + thisJoinPoint); 
    }
}
          </pre>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:typelessdeclarations"></a><b>2. </b>I've declared a field on every class
            in
            my package; how do I use it in advice?
          </p>
            <pre class="programlisting">
aspect A {
    boolean com.xerox..*.dirtyFlag;
    after (Object target) returning 
        : target(target) &amp;&amp; call(* com.xerox..*.set*(..)) {
        target.dirtyFlag = true; // compile fails here
    }
}
          </pre>
          </div>
          <div class="answer"><p><a name="d0e1919"></a><b></b>You need a type to refer to any member, field or method.
            It's generally better to introduce onto an interface and
            declare classes to implement the interface, which permits you
            to use the interface type in advice formals.
          </p>
            <pre class="programlisting">
aspect A {
    interface TrackingSets {}
    boolean TrackingSets.dirtyFlag;
    declare parents : com.xerox..* implements TrackingSets;

    after (TrackingSets target) returning 
        : target(target) &amp;&amp; call(* com.xerox..*.set*(..)) {
        target.dirtyFlag = true; 
    }
}
          </pre>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:ajcoom"></a><b>3. </b>The AspectJ compiler aborts with an OutOfMemoryError
            when
            compiling many classes. How can I fix this?
          </p></div>
          <div class="answer"><p><a name="d0e1928"></a><b></b><tt>ajc</tt> can use more memory than a javac
            compile of the corresponding pure-java sources when aspects
            are added to the mix. You'll need to increase the memory
            available.
          </p>
            <p>The command <tt>ajc</tt> is actually a script that
              launches a Java virtual machine with the correct classpath. You
              should make a copy of this script, rename it, and then edit it.
              Change the -Xmx option, size of memory allocation pool (heap). You
              might try <tt>-Xmx128M</tt> or even
              <tt>-Xmx256M</tt>.
            </p>
            <p>When running under Ant, give Ant more memory or
              use the <tt>fork</tt> option together with
              the <tt>Xmaxmem</tt> option.
            </p>
            <p>When running under an IDE, look to the documentation
              for the IDE to determine how to increase available memory.
            </p>
            <p>In either case, doing incremental compilations can hold on to
              more memory than a one-shot compile process, as the compiler
              trades space for time in recompiles.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:duplicateclass"></a><b>4. </b>
            Why do I get a message that my class is already defined?
          </p></div>
          <div class="answer"><p><a name="d0e1960"></a><b></b>
            Most commonly, a source file was specified twice on the command line
            (e.g., directly and by a *.java entry in a .lst file).
            However, sometimes you have defined a class in two files in the
            same package, and you need to rename the class or change its
            scope. You should get this message from any Java compiler.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:ajcrecompile"></a><b>5. </b>
            <tt>ajc</tt> recompiles all files every time.
            How can I make it recompile only the files that have changed?
          </p></div>
          <div class="answer"><p><a name="d0e1970"></a><b></b>
            <tt>ajc</tt> 1.0 does not support incremental
            compilation, but since 1.1 <tt>ajc</tt> does when passed the
            <tt>-incremental</tt> option. It may still recompile
            files that have not changed, if they could be affected by aspects
            in particular ways, but the files compiled should be fewer
            and result in faster compiles.
            Further, the 1.1 release supports binary weaving, so you
            need not recompile if you already have .class files.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:ajcjvm"></a><b>6. </b>
            <tt>ajc</tt> is using the wrong JVM. How do I
            fix it?
          </p></div>
          <div class="answer"><p><a name="d0e1989"></a><b></b>The easiest way to fix this is to re-install
            <tt>ajc</tt> (using the same <tt>.class</tt> or
            <tt>.exe</tt> file that you originally downloaded) and
            this time make sure to tell it to use the desired JDK (typically
            the JDK versions 1.2 or 1.3 from Sun).
          </p>
            <p>If you are familiar with DOS batch files or shell programming,
              you could also fix this by simply editing the
              <tt>bin\ajc.bat</tt> or <tt>bin/ajc</tt>
              script.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:idebalkingataspects"></a><b>7. </b>My IDE is trying to parse AspectJ files
            which makes my project unusable.
            What can I do?
          </p></div>
          <div class="answer"><p><a name="d0e2013"></a><b></b>
            When working with an unsupported IDE that objects to the syntax of
            AspectJ source files (and, e.g., automatically gathers them
            in a source tree as Java files based on the .java extension),
            you can use the .aj extension for your AspectJ files.
            The ajc compiler accepts both .java and .aj files, and you can
            set up your build scripts to include the correct list of
            source files. (You will have to find another editor for
            editing AspectJ files; you can use the ajbrowser to view
            edit your AspectJ files and navigate the crosscutting structure.)
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:idememory"></a><b>8. </b>I used to be able to compile my program in my
            IDE, but when I
            use AJDE, I run out of memory (or it goes really slow).
          </p></div>
          <div class="answer"><p><a name="d0e2020"></a><b></b>
            The ajc compiler does more analysis than (e.g.,) javac,
            and AJDE may in some IDE's hold a copy of the structure tree until the
            next tree is available from the compile process. Both mean that you may
            need extra memory to compile the same program. However, increasing
            available memory to the point that you are swapping to disk can
            slow the process considerably.
          </p>
            <p>
              If you are having problems and would like to find the optimal memory
              allocation, iteratively decrease the amount of memory available until
              AJDE or ajc signals out-of-memory errors, and then increase that
              amount by 5-10%.
            </p>
            <p>
              To increase memory for the ajc compiler, see <a href="#q:ajcoom">Q:The AspectJ compiler aborts with an
              OutOfMemoryError when compiling many classes. How can I fix this?</a>.
              For your IDE, do something similar or follow the provider's instructions.
              For example, to increase memory in JBuilder, edit the
              <tt>jbuilderX/bin/jbuilder.config</tt>
              file to have an entry like:
            <pre class="programlisting">        
vmparam -Xmx384m
</pre>
            </p><p>
              If it turns out that your project is too big to use with AJDE, your IDE
              may nonetheless support external commands or Ant build processes, which
              run outside the IDE memory space. For a JBuilder Ant plugin, some
              people have directed us to <a href="http://antrunner.sourceforge.net" target="_top">http://antrunner.sourceforge.net</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:noaspectbound"></a><b>9. </b>
            When I run, I get a <tt>NoAspectBoundException</tt> or a
            ClassNotFound message for <tt>NoAspectBoundException</tt>.
          </p></div>
          <div class="answer"><p><a name="d0e2049"></a><b></b>This happens when an aspect is not associated with an
            object
            that is being advised. We have seen this happen two ways:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2053"></a>You get a ClassNotFound message for
                  <tt>NoAspectBoundException</tt> when loading a
                  class affected by aspects if <tt>aspectjrt.jar</tt>
                  classes are not on the runtime classpath.
                  To fix this, put the classes on the classpath.
                </p></li>
                <li><p><a name="d0e2062"></a>
                  You can get a <tt>NoAspectBoundException</tt> when
                  there is a cycle in aspect initialization or static
                  initialization, most commonly when an aspect advises
                  its own initializer. To fix this, first find the class that
                  fails to load by running java in debug mode or looking
                  at the <tt>NoAspectBoundException</tt> trace,
                  and then fix the offending (probably unintended) dependency.
                  Most often, it comes from a pointcut like
                  <tt>staticinitialization(com.company..*)</tt>
                  or <tt>within(com.company..*)</tt>, which
                  can include any aspects in the same subpackages.
                  You can avoid advising most join points associated with
                  the aspect <tt>TheAspect</tt>
                  by adding <tt>&amp;&amp; !within(TheAspect)</tt>
                  to your pointcut.
                </p></li>
              </ul>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:stacktraces"></a><b>10. </b>
            My stack traces don't make sense. What gives?
          </p></div>
          <div class="answer"><p><a name="d0e2088"></a><b></b>In 1.0, unless you are using the <tt>ajdb</tt> debugger,
            stack traces may
            have synthetic methods in the stack, and the line numbers may
            not track your source code. The
            <a href="devguide/index.html" target="_top">
              Development Environment Guide</a>
            discusses how to interpret stack at the end of the
            <a href="devguide/ajc-ref.html" target="_top">
              Reference for ajc</a>.
          </p>
            <p>In 1.1, line numbers should work correctly.
              The only difference from a normal stack might be the addition
              of extra stack frames for call-backs.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:advicenotrunning"></a><b>11. </b>
            My advice is not running (or running twice), and I don't know why.
          </p></div>
          <div class="answer"><p><a name="d0e2106"></a><b></b>
            When advice is not running,
            there is probably a problem in the pointcut.
            Sometimes users specify pointcuts that
            do not mean what they intend -
            most often when they misspell a type name. Run the compiler in
            <tt>-Xlint</tt> mode, which will flag some likely mistakes,
            like the type name.
            If that does not work, and your pointcut is staticly-determinable,
            use a declare statement to identify affected code. (For more
            information, see <a href="#q:knowWhenAspectsAffectClasses">Q: How do I know which aspects affect a class
              when looking at that class's source code?</a>.)
            If that does not work and your pointcut is dynamically determined,
            see if your join points are executing at all by using
            TraceJoinPoints.java from <a href="#q:seeingjoinpoints">Q:I don't understand what join points exist. How can
              I see them?</a>.
          </p>
            <p>When advice is running more than it should, either
              (1) your advice is in an abstract aspect and the pointcut picks
              out the same join point for more than one concrete instantiation
              of the aspect, or
              (2) your pointcut picks out more join points than you intend.
            </p>
            <p>
              In the case of advice in abstract aspects, the advice will run once
              for each concrete instance of the aspect.
              If the pointcut for that advice picks out the same join point for two
              concrete aspects, then the correct behavior is for the advice to run
              the advice twice at that join point.
            </p>
            <p>
              To see if your pointcut picks out the join points you intend, you
              can use IDE support, logging, or declare-warnings.
              If you are using IDE support, you should be able to trace back from
              the pointcut or advice to the join points which can be statically
              determined to be affected.
              Without IDE support, you can write
              declare-warning statements to identify code affected by staticly-
              determinable pointcuts.
              To identify advised dynamic join points,
              you can try using <tt>TraceJoinPoints.java</tt> as above,
              or update the advice to print the source location of the join point.
              Doing any of these should show if the advice applies to code that
              you did not expect.
            </p>
            <p>If you've done this and convinced yourself it's not working,
              it may be a bug. See <a href="#q:bugreports">Q:How do I submit a bug report?</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:adviceOnOveriddenMethods"></a><b>12. </b>
            My advice runs for each overridden method!
          </p></div>
          <div class="answer"><p><a name="d0e2133"></a><b></b>Most likely you are advising the method execution join
            point and specifying the defining signature.
            Since all overriding methods share this signature,
            the advice runs for each method executed.
            (This happens, e.g., when one method invokes the same method
            in the superclass using <tt>super.{method}(..)</tt>).
            This is the correct behavior.
          </p>
            <p>To avoid this, use the <tt>call(..)</tt> pointcut
              designator, or use <tt>!cflow(..)</tt> to pick
              out only the initial method-execution.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:tejpsp"></a><b>13. </b>
            I don't understand when thisEnclosingJoinPointStaticPart is available.
          </p></div>
          <div class="answer"><p><a name="d0e2151"></a><b></b>
            <tt>thisEnclosingJoinPointStaticPart</tt> is a special
            variable available in the context of advice to refer to the
            join point, if any, lexically enclosing the current join point:
            <div class="table"><p><a name="d0e2157"></a><b>Table 1. thisEnclosingJoinPointStaticPart</b></p>
              <table summary="thisEnclosingJoinPointStaticPart" border="1">
                <colgroup>
                  <col>
                  <col>
                </colgroup>
                <tbody>
                <tr>
                  <td>One of these...</td>
                  <td>will be tEJSP for each of these:</td>
                </tr>
                <tr>
                  <td>
                    constructor-execution, method-execution,
                    advice execution, initialization,
                    pre-initialization, static initialization
                  </td>
                  <td>
                    constructor-call, method-call, handler,
                    field-set, field-get
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            Expressions in the body of handlers have the same
            <tt>thisEnclosingJoinPointStaticPart</tt>
            as the handler itself.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:packagedeclares"></a><b>14. </b>
            I declared a member on a class with package access, but other classes in the package cannot see it.
          </p></div>
          <div class="answer"><p><a name="d0e2180"></a><b></b>When declaring parents on other types from an aspect,
            package access only
            applies to code the implementation controls. For AspectJ 1.0, that is the set of files
            passed to the compiler. That means other classes not compiled with the aspect will not
            be able to access the aspect-declared members even if they are in the same package.
            The only way for classes outside the control of the implementation to access aspect-declared
            members is to declare them public.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:interfaceDeclarations"></a><b>15. </b>I declared a member on a interface,
            but javac does not see it.
          </p></div>
          <div class="answer"><p><a name="d0e2187"></a><b></b>
            You have to compile all the top-level implementating
            classes of the interface using <tt>ajc</tt>.
            From an email by Jim Hugunin on the requirements for AspectJ 1.1 to
            implement members declared by an aspect on an interface:
          </p>
            <p>
              If you introduce non-static fields or non-abstract methods on an interface
              from an aspect, then all of the top-most implementors of that interface must
              be woven by that same aspect.
              (A class C is a top-most implementor of an interface I if C implements I
              and the superclass of C does not implement I.)
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:cantfindjavac"></a><b>16. </b>
            <tt>ajc</tt> 1.0 complains that it can't find
            <tt>javac</tt>. What's wrong?
          </p></div>
          <div class="answer"><p><a name="d0e2205"></a><b></b>
            <tt>ajc</tt> 1.0 does not try to locate
            <tt>javac</tt> in your path: it uses the
            <tt>javac</tt> classes directly. In JDK 1.2 and 1.3 these
            classes are found in <tt>tools.jar</tt> (in the
            <tt>lib</tt> directory of the JDK distribution), which
            must be on your classpath to make
            <tt>ajc</tt> work with <tt>javac</tt>.
            Inspect the java command that launches ajc to make sure that
            <tt>tools.jar</tt> is on the classpath for ajc;
            the -classpath option only applies to the sources compiled.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:ajdocneeds13"></a><b>17. </b>
            I'm running under 1.4, but <tt>ajdoc</tt> asks for 1.3
            (or throws IllegalAccessError for HtmlWriter.configuration)
          </p></div>
          <div class="answer"><p><a name="d0e2239"></a><b></b>
            The 1.0 implementation of <tt>ajdoc</tt> uses
            specific javadoc classes in the J2SE 1.3 tools.jar.
            We are working on addressing this limitation, but in the interim
            it is best to run ajdoc under 1.3.
          </p>
            <p>
              When running from the command-line scripts, edit the scripts directly
              to put the 1.3 tools.jar first on the classpath. (The installer does
              not know about this limitation of ajdoc.)
            </p>
            <p>
              When running from Ant, users often have tools.jar in %name
              (to make javac, et al work). That makes it impossible to run the ajdoc
              taskdef (which does not currently support forking), so you'll need to
              run a separate ant process, either from the command-line or via Ant's
              exec task (the Ant task will propagate the classpath).
              If the wrong tools.jar is not on the ant classpath, then it should work
              to put the 1.3 tools.jar in the taskdef classpath.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:compileunits"></a><b>18. </b>I set up different files to my compiles to
            change what
            the aspects see, but now I don't
            understand how the aspects are working.
          </p></div>
          <div class="answer"><p><a name="d0e2253"></a><b></b>It is a bad practice to use the compilation unit
            to control crosscutting. Aspects and pointcuts especially
            should be written to specify crosscutting precisely.
            Aspects will behave the same when you add files if
            you initially included all files affected by your aspects.
            If you use the compilation unit, then your code will behave
            differently in AspectJ implementations that do not limit
            themselves to specified files.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:readingpreprocessedcode"></a><b>19. </b>I'm reading the code generated by
            <tt>ajc</tt> 1.0
            in <tt>-preprocess</tt> mode, and it seems like it would not
            work (or "like it works this way").
          </p></div>
          <div class="answer"><p><a name="d0e2266"></a><b></b>The generated code can be difficult for a human to read
            and
            understand. The compiler uses implementation techniques which might
            not be apparent. To determine if the code is behaving correctly, you
            should write and run a program that attempts to provoke the error you
            suspect. Similarly, you should not rely on invariants you infer from
            the generated code (especially naming conventions for generated members).
            Please rely only on the semantics stated in the appendix of the
            AspectJ <a href="progguide/index.html" target="_top">Programming Guide</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:injection"></a><b>20. </b>I've heard AspectJ can generate or inject code
            into my code.
            Is this true?
          </p></div>
          <div class="answer"><p><a name="d0e2276"></a><b></b>
            This is a misconception spawned from the early implementation.
          </p>
            <p>
              AspectJ does not "inject" or "generate" code. In AspectJ the
              pointcut constructs allow the programmer to identify join points,
              and the advice constructs define additional code to run at those
              join points.
            </p>
            <p>
              So the semantic model of advice is like the semantic model of a
              method -- it says "when any of these things happen, do this".
            </p>
            <p>
              People who worked with earlier versions of AspectJ, in which ajc
              was very explicitly a pre-processor, sometimes thought of AspectJ
              as injecting code. But that was an artifact of the implementation,
              not the underlying language semantics.
            </p>
            <p>
              This distinction is important for two reasons. One is that thinking
              about it this way will make more sense at the implementation continues
              to evolve towards load-time or runtime weaving. The other is that
              it makes it much easier to understand the semantics of advice on
              cflow pointcuts.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:newjoinpoints"></a><b>21. </b>Why can't AspectJ pick out local variables
            (or array elements or ...)?
          </p></div>
          <div class="answer"><p><a name="d0e2291"></a><b></b>Users have sometimes wanted AspectJ to pick out
            many more join points, including
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2295"></a>method-local field access</p></li>
                <li><p><a name="d0e2298"></a>array-element access</p></li>
                <li><p><a name="d0e2301"></a>loop iteration</p></li>
                <li><p><a name="d0e2304"></a>method parameter evaluation</p></li>
              </ul>
            </div>
            Most of these have turned out not to make sense,
            for a variety of reasons:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2309"></a>it is not a commonly-understood unit for Java programmers</p></li>
                <li><p><a name="d0e2312"></a>there are very few use-cases for advice on the join point</p></li>
                <li><p><a name="d0e2315"></a>a seemingly-insignificant change to the underlying program
                  causes a change in the join point</p></li>
                <li><p><a name="d0e2318"></a>pointcuts can't really distinguish the join point in question</p></li>
                <li><p><a name="d0e2321"></a>the join point would differ too much for different
                  implementations of AspectJ, or would only be implementable
                  in one way
                </p></li>
              </ul>
            </div>
            We prefer to be very conservative in the join point model for the language,
            so a new join point would have to be useful, sensible, and implementable.
            The most promising of the new join points proposed are for exception
            throws clauses and for synchronized blocks.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:reflectiveCalls"></a><b>22. </b>Why doesn't AspectJ pick out reflective
            calls?
            The pointcut <tt>call(void run())</tt>
            won't pick out a call using reflection, like
            <tt>((Method)run).invoke(null, args)</tt>.
          </p></div>
          <div class="answer"><p><a name="d0e2335"></a><b></b>The pointcut
            <tt>execution(void run())</tt> will
            work. The call pointcut doesn't work because
            <tt>Method.invoke(..)</tt> is the Java method-call,
            and AspectJ cannot delve into the Java reflection library to
            implement call semantics. To advise a reflective call
            (e.g., because the compiler does not control the code for the
            method execution), test the context for <tt>invoke(..)</tt>.
            Here's a pointcut that tests only if the method name is
            correct:
          </p>
            <pre class="programlisting">
aspect A {
    pointcut runReflectiveCall(Method run) : target(run) &amp;&amp;
         call(Object Method.invoke(..)) &amp;&amp; if("run".equals(run.getName()));       
    before() : runReflectiveCall(Method) { 
        System.out.println("before reflective call " + thisJoinPoint); 
    }
}
          </pre>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:currentbugs"></a><b>23. </b>What are the bugs now most affecting users?
          </p></div>
          <div class="answer"><p><a name="d0e2353"></a><b></b>The bugs affecting the semantics of the language
            are marked with the "info" keyword. Find them with
            the query
            <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=AspectJ&amp;keywords=info" target="_top">
              http://bugs.eclipse.org/bugs/buglist.cgi?product=AspectJ&amp;keywords=info
            </a>
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:runtimeMemory"></a><b>24. </b>What extra memory is required at runtime?
          </p></div>
          <div class="answer"><p><a name="d0e2363"></a><b></b>When running classes produced by the AspectJ weaver or
            compiler,
            there are no significant hidden uses of memory. As would be expected,
            each aspect is instantiated. The per-object aspects (like
            <tt>pertarget</tt> or <tt>perthis</tt>)
            in some implementations
            use a map to link aspects and the associated object. When using
            <tt>cflow</tt>-related pointcuts, a <tt>ThreadLocal</tt>
            is used to track control flow for each affected thread.
          </p>
            <p>Of course, the size and code in an aspect can require memory.
              Aside from normal Java practices, take care with join point references.
              When referencing the static part of a join point (e.g.,
              <tt>thisJoinPointStaticPart</tt>), only one object is
              created. However, if you reference the join point itself
              (e.g., <tt>thisJoinPoint</tt>), then one
              <tt>JoinPoint</tt> object will be created for each
              join point running advice.
            </p>
            <p>Aspect instances will be garbage collected just like regular objects
              after there are no more strong references to them. For the default
              aspect instantiation model, <tt>issingleton</tt>, the aspect
              class retains a reference to the singleton instance, in order to
              implement <tt>static {AspectClass} aspectOf()</tt>, so
              singleton instances will not be garbage collected until the class is.
              For long-running or memory-critical programs, consider using weak
              references in singleton aspects for state that should be garbage collected.
            </p>
            <p>Finally, when using load-time weaving, the weaver can require
              memory in its own right. Because the class loader never can
              know when it is done loading classes, the weaver can hold on
              to the aspects required to weave for some time. There are
              strategies for minimizing this (with different trade-off's),
              so the time and memory required for load-time weaving will
              vary as load-time weaving evolves.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:weavingcglib"></a><b>25. </b>I get a VerifyError when running CGLIB
            generated code that has been woven by
            AspectJ. Why is this?
          </p></div>
          <div class="answer"><p><a name="d0e2403"></a><b></b>When weaving after advice into any piece of code, the
            AspectJ strategy is to make all
            exit points from that code jump to a single exit point that executes the advice
            before returning. There is a verifier rule in the JVM specification that specifies
            that all routes to a jump destination must have the same height stack when they get there,
            regardless of the route taken to get there through the bytecode. The CGLIB generated code has different
            stack heights at the various exit points. This is not a problem with the CGLIB generated code,
            it is perfectly valid - it is just unusual and the AspectJ weaving strategy causes the
            verify error to trigger when it makes all exits jump to a single destination.
          </p>
            <p>AspectJ could cope with this and instead implement after advice by calling the
              advice and returning at each exit point. However, it is unlikely that the user
              actually meant to weave the CGLIB generated code in the first place - and so usually
              the right thing to do is to exclude CGLIB generate code from the weaving process by
              appropriate use of the exclude element in the aop.xml. A typical clause in the aop.xml might
              look as follows:
            </p>
            <pre class="programlisting">
&lt;weaver&gt;
  &lt;exclude within="*CGLIB*" /&gt; 
&lt;/weaver&gt;
          </pre>
          </div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="aj11"></a>12 AspectJ 1.1 and eclipse.org</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:whyeclipse"></a><b>1. </b>Why did the AspectJ project move to eclipse.org?
          </p></div>
          <div class="answer"><p><a name="d0e2417"></a><b></b>From the message sent to users:
          </p>
            <p>
              AspectJ has come a long way -- the language has
              stabilized; there are a rapidly growing number of
              commercial users; the 1.1 release is imminent and will
              include byte-code weaving and incremental compilation;
              and the tool support is now well integrated with several
              major IDEs.
            </p>
            <p>
              This growth of the community and the technology means
              that the original research and prototype development of
              AspectJ is complete. As such it is time for ongoing
              development and support of AspectJ to move outside of
              PARC. This has already started to happen; the Eclipse
              AJDT plug-in and the several books in preparation are
              examples.
            </p>
            <p>
              To encourage the growth of the AspectJ technology and
              community, PARC is transferring AspectJ to an
              openly-developed eclipse.org project. This project will
              include documentation, web site, mailing lists, bug
              database, and sources for the compiler. The
              command-line AspectJ compiler is still the primary tool
              produced by this project, in addition to APIs that support
              integration with a variety of IDEs. The Eclipse plug-in will
              remain at eclipse.org, while the NetBeans, JBuilder and
              Emacs support will move to SourceForge.net projects.
              We look forward to your involvement with and
              contribution to those projects.
            </p>
            <p>
              We see Eclipse as an excellent new home for core
              AspectJ technology development -- it is an active
              community of Open Source development and innovation
              in the Java space. Once development moves to
              Eclipse.org, others will be able to contribute more easily.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:eclipserequired"></a><b>2. </b>Do I have to download Eclipse to use
            AspectJ?
          </p></div>
          <div class="answer"><p><a name="d0e2432"></a><b></b>No. The AspectJ tools download is completely
            self-contained
            and does not require that you work in Eclipse.
            For information on IDE support, see
            <a href="#q:integrateWithDevTools">Q: How well does AspectJ integrate with existing Java development
              tools?</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:eclipseetc"></a><b>3. </b>What are the relationships between AspectJ, JDT,
            Eclipse, AJDT, and IDE support generally?
          </p></div>
          <div class="answer"><p><a name="d0e2441"></a><b></b>Eclipse is a software platform.
          </p>
            <p>JDT is an eclipse project to support Java development.
              JDT has a Java compiler.
            </p>
            <p>AspectJ 1.1 is built on Eclipse/JDT's Java compiler
              but is distributed standalone and can run standalone.
              With the AspectJ distribution, you can compile and run
              AspectJ programs and use the AspectJ structure browser.
            </p>
            <p>AJDT is an eclipse project to integrate AspectJ
              into Eclipse/JDT so you can use Eclipse to develop
              AspectJ programs. AJDT aims to support the full Eclipse
              experience - searching, compiler-error tasks, etc.
              AJDT will use the AspectJ Development Environment (AJDE)
              API's for creating IDE integrations, as well as hooking
              in to the model underlying the Java compiler.
            </p>
            <p>Similarly, Sourceforge has projects integrating
              AspectJ into other development environments
              using the AJDE API's:
              <a href="http://aspectj4emacs.sourceforge.net" target="_top">
                AspectJ for Emacs</a>,
              <a href="http://aspectj4jbuildr.sourceforge.net" target="_top">
                AspectJ for JBuilder</a>, and
              <a href="http://aspectj4netbean.sourceforge.net" target="_top">
                AspectJ for NetBeans</a>.
            </p>
            <p>This is the right level of separation/integration.
              AspectJ is available standalone, leverages an existing open-source
              compliant Java compiler, and supports external projects
              doing IDE integrations in Eclipse, Emacs, JBuilder, and NetBeans
              through a common API, AJDE.
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="AspectJ5"></a>13 AspectJ 5 and Java 5</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aspectj5features"></a><b>1. </b>
            What are the new features of AspectJ 5?
          </p></div>
          <div class="answer"><p><a name="d0e2470"></a><b></b>
            All the new features are documented in the
            <a href="adk15notebook/index.html" target="_top">
              AspectJ 5 Developer's Notebook</a>
            and the
            <a href="devguide/index.html" target="_top">
              AspectJ Development Environment Guide</a>.
            To summarize:
          </p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2480"></a>
                  Java 5 support: as an extension to Java, AspectJ supports
                  all the new language features of Java 5, including generics
                  (parameterized types), autoboxing, covariant return types,
                  enhanced for-loops, enums, varargs, and of course
                  annotations.
                </p></li>
                <li><p><a name="d0e2483"></a>
                  Java 5 extensions: the AspectJ language has been extended
                  to make use of Java 5 language features.
                  <div class="itemizedlist">
                    <ul>
                      <li><p><a name="d0e2487"></a>
                        Generic aspects: an abstract aspect can be declared
                        with a generic type parameter which can be used
                        in pointcuts and when declaring members on the aspect
                        (but not when declaring members on other types).
                      </p></li>
                      <li><p><a name="d0e2490"></a>
                        Annotations: pointcuts can now pick out join points
                        based on the associated annotations, annotation
                        values can be bound in the same way that other
                        context variables are bound at the join point,
                        and annotations may be declared on other types in
                        an aspect.
                      </p></li>
                    </ul>
                  </div>
                  </p></li>
                <li><p><a name="d0e2494"></a>
                  Annotation-style aspects: AspectJ 5 integrates AspectWerkz-style
                  aspects declared in annotations. This permits aspects to
                  be written and compiled in pure-java code and woven using
                  build-time or load-time weaving with the AspectJ weaver.
                  (The original AspectJ language aspects are distinguished
                  as "code-style" aspects.)
                </p></li>
                <li><p><a name="d0e2497"></a>
                  AspectWerkz load-time weaving: Load-time weaving is
                  greatly improved for all versions of Java, and now supports
                  an XML configuration file which can declare concrete aspects.
                  This means developers can deploy binary abstract aspects
                  that deployers configure using only XML.
                </p></li>
                <li><p><a name="d0e2500"></a>
                  pertypewithin instantiation model: aspects may now be instantiated
                  on a per-class basis.
                </p></li>
                <li><p><a name="d0e2503"></a>
                  Reflection and runtime support: AspectJ 5 supports reflection
                  on aspects using the Aspect class, and also support runtime
                  evaluation of pointcuts using a pointcut parser.
                </p></li>
              </ul>
            </div>
            <p>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:codeversusannotationstyles"></a><b>2. </b>
            Should I use code- or annotation-style aspects?
          </p></div>
          <div class="answer"><p><a name="d0e2512"></a><b></b>
            To use AspectJ, you can use the original code-style aspects
            or the annotation-style aspects new in AspectJ 5.
          </p>
            <p>
              The original code-style is a small extension of the Java language
              designed to express crosscutting as clearly as possible
              in ways familiar to most Java programmers.
              To use the original code-style aspects,
              compile them with the AspectJ compiler or weave
              pre-compiled binary aspects using the AspectJ binary (.class)
              weaver, either at build-time or at class-load-time.
              Code-style aspects have excellent IDE support, allowing
              you to navigate to and from affected source code.
            </p>
            <p>
              Annotation-style
              aspects are written (not surprisingly) using annotations.
              They use the subset of the AspectJ language that works
              when aspects are woven after the code is compiled.
              The source files are compiled with Javac, which simply saves the
              annotations in the .class files. The resulting .class files
              must be woven using
              the AspectJ weaver, which reads the annotations from the
              .class file and uses them to define aspects.
              Annotation-style aspects have the benefit of being compilable
              by Javac, but you can't use the full AspectJ language,
              and you don't enjoy the same level of IDE support
              for viewing crosscutting structure.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:aspectj5ltw"></a><b>3. </b>
            What's new about the load-time weaving support in AspectJ 5?
          </p></div>
          <div class="answer"><p><a name="d0e2523"></a><b></b>
            While the AspectJ weaver could be used at load-time in previous
            releases, the AspectJ 5 release supports much better integration
            with the Java 5 VM and the BEA JRocket JVM. It also supports
            an XML file for configuration that allows deployers to declare
            concrete aspects using only XML. This means aspect developers
            can write abstract aspects, and deployers need only configure
            <tt>aop.xml</tt> and run using the AspectJ weaver in Java 5.
            For example, to run Java 5 VM with load-time weaving,
          </p>
            <pre class="programlisting">
            
java -javaagent:aspectjweaver.jar -classpath "aspects.jar:%name" ..

          </pre>
            <p>
              To declare a concrete aspect, add a a
              concrete-aspect XML entity to <tt>META-INF/aop.xml</tt>.
              This example extends a tracing aspect to apply to
              every type in the application:
            </p>
            <pre class="programlisting">
            
&lt;concrete-aspect 
    name="com.company.tracing.ConcreteTracing"
    extends="tracing.AbstractTracing"&gt;
    &lt;pointcut 
        name="tracingScope" 
        expression="within(com.company.app..*)"/&gt;
&lt;/concrete-aspect&gt;                

          </pre>
            <p>
              For more information, see the
              <a href="devguide/index.html" target="_top">
                AspectJ Development Environment Guide</a>.
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="Technology"></a>14 Understanding AspectJ Technology</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:implementation"></a><b>1. </b>Do I need to know how the compiler or weaver
            works?
          </p></div>
          <div class="answer"><p><a name="d0e2550"></a><b></b>Writing AspectJ programs only requires understanding the
            <a href="progguide/index.html" target="_top">Programming Guide</a>.
            However, current implementations do not control everything in
            a system, so AspectJ program semantics may be limited to code
            the implementation controls. For our implementation, these
            limitations are stated in
            <a href="progguide/implementation.html" target="_top">
              Programming Guide Appendix: Implementation Notes</a>.
            Aside from understanding the use and limitations of the
            implementation, there is no need to understand the underlying
            technology when writing AspectJ programs.
          </p>
            <p>
              The technology that implements AspectJ interests
              some academic researchers and some developers
              who want new features or new ways to weave.
              These extensions are not discussed in the documentation.
              Some are being developed already,
              others are on the drawing board (or perhaps were left off
              long ago), and still others haven't been considered.
              If you are interested in a certain extension,
              check the bug database for feature requests
              and the mailing list archives for any past discussions.
              Then email the list to see if it's been considered.
              For more information, see
              <a href="#Developers">AspectJ Project Development</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:whitepapers"></a><b>2. </b>How does the compiler/weaver work? Are there
            any white papers?
          </p></div>
          <div class="answer"><p><a name="d0e2567"></a><b></b>
            There are currently no documents describing this process in detail.
            You can compile programs and inspect the generated source or bytecode,
            or view the source code (see <a href="#Developers">AspectJ Project Development</a>).
            We hope to write papers on the bytecode weaving model used in
            AspectJ-1.1 if we can find the time.
            Erik Hilsdale and Jim Hugunin did draft a paper for AOSD 2004,
            now available on Jim's web site:
            <a href="http://hugunin.net/papers.html" target="_top">
              http://hugunin.net/papers.html</a>
            Jim summarized advice weaving in the AspectJ 1.1 implementation in the
            <a href="http://dev.eclipse.org/mhonarc/lists/aspectj-dev/msg00519.html" target="_top">
              following mailing-list reply</a>:
          </p>
            <p>
              Each piece of advice in an aspect is associated with a pointcut.
              This pointcut is stored in an attribute on the methods
              corresponding to each piece of advice.
              Before weaving, all of these pieces of advice are gathered
              into one large list.
            </p>
            <p>
              Each .class file is woven independently.
              A .class file is woven by the following steps:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2583"></a>
                  Collect all of the joinpoint shadows in the .class file.
                  For every dynamic joinpoint in the AspectJ language model,
                  there is a corresponding static shadow of that joinpoint
                  in the bytecode.
                  For example, every method call joinpoint has an INVOKE
                  bytecode as its static shadow. Some joinpoints
                  (such as initialization) have much more
                  complicated static shadows.
                </p></li>
                <li><p><a name="d0e2586"></a>
                  Each piece of advice is matched to each static shadow.
                  There are three results possible from this match.
                  <div class="itemizedlist">
                    <ul>
                      <li><p><a name="d0e2590"></a>
                        Never matches,
                        in which case nothing is done to the shadow
                      </p></li>
                      <li><p><a name="d0e2593"></a>
                        Always matches,
                        in which case the advice is woven into this joinpoint shadow
                      </p></li>
                      <li><p><a name="d0e2596"></a>
                        Sometimes matches,
                        in which case the advice is woven into the shadow
                        along with the minimal dynamic tests to determine
                        if any particular joinpoint in the actual running
                        program matches the advice.
                        The simplest example of sometimes matches is
                        when the pointcut uses if(test()).
                      </p></li>
                    </ul>
                  </div>
                  </p></li>
                <li><p><a name="d0e2600"></a>
                  If any advice matched any static shadows in the .class file,
                  then the transformed .class file is written out,
                  otherwise it is left unchanged.
                </p></li>
              </ul>
            </div>
            See <tt>BcelClassWeaver</tt> and
            <tt>BcelShadow</tt> in the
            <tt>org.aspectj.weaver.bcel</tt> package
            for the two primary classes involved in this process.

            </p><p>
              Note: This explanation ignores the implementations of inter-type
              declarations completely.
              It also ignores performance optimizations such as fast-match
              or pipelining that speed up the process.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:ltwAppServers"></a><b>3. </b>How do I get load-time weaving to work in my
            chosen application server?
          </p></div>
          <div class="answer"><p><a name="d0e2619"></a><b></b>You have two choices based on how wide you want the
            weaving to take effect: application-server wide and application-specific weaving.
            You choose between the two by loading aspect artifacts--aspects, associated types, and aop.xml--through the
            right classloader.
            The aop.xml must be in the META-INF directory on the classpath for the chosen classloader. In either case,
            you modify the
            startup script to specify the -javaagent:path-to/aspectjweaver.jar option to the Java virtual machine. Note
            that it is not
            essential that all the artifacts be placed in a single jar.
          </p>
            <p>For application-server wide weaving, you make aspect artifacts accessible to the server's classloader.
              Typically, you
              achieve such access by putting these artifacts in the server's lib directory. For example, for Tomcat, you
              will place
              the aspect artifacts in the TOMCAT_HOME/lib directory.</p>
            <p>For application-specific weaving, you make aspect artifacts accessible to application classloader by
              bundling
              them along with application's classes. For example, for a web application, you will place the aspect
              artifacts in
              the MY_APP/WEB-INF/lib and/or MY_APP/WEB-INF/classes directory.</p>
            <p>
              We recommend that you start with application-specific weaving.
              Note that you have an additional option if your application is based on the Spring framework. If you
              deploy in one of
              the supported web servers or application servers, you can avoid modifications to the startup script.
              Please
              see <a href="http://static.springframework.org/spring/docs/2.5.x/reference/aop.html#aop-aj-ltw-spring"
                     target="_top">http://static.springframework.org/spring/docs/2.5.x/reference/aop.html#aop-aj-ltw-spring</a>
              for more details.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:reflection"></a><b>4. </b>Does AspectJ use reflection at runtime?
          </p></div>
          <div class="answer"><p><a name="d0e2635"></a><b></b>
            The only time that reflection is used during run-time is when the special
            thisJoinPoint object is used to discover reflective information about the
            join point. If you don't use thisJoinPoint then no reflection will be used.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:loadtimeWeaving"></a><b>5. </b>What about load-time weaving? Can I weave
            aspects at runtime?
          </p></div>
          <div class="answer"><p><a name="d0e2642"></a><b></b>
            Since the 1.1 release, AspectJ can weave binary aspects
            into classes in bytecode form. Hooked up to a class loader,
            this can weave class bytecodes after they are read in,
            before the
            class is defined by the VM. (This means load-time weaving
            only works were aspects are not required to compile the pure-java
            classes. If the aspects are required, then the Java classes
            have to be compiled with the aspects using the AspectJ compiler.)
            The AspectJ 1.2 release had the
            WeavingURLClassLoader, and the 1.2.1 release introduced
            the aj.bat script for Java 1.4.
            The AspectJ 5 release introduces much better support for
            load-time weaving, including declaring concrete aspects
            in XML files and integrating with Java 5 and BEA JRocket
            JVM's. See <a href="#q:aspectj5ltw">Q:What's new about the load-time weaving support in AspectJ 5?</a>.
          </p>
            <p>Some have asked about only weaving particular classes
              specified at run-time.
              Aspects should work across an entire namespace, and problems
              will likely result from weaving
              some classes but not others. Also, it's confusing to
              specify crosscutting both in the aspect and in the
              list of runtime classes; the crosscutting specification
              should be in the aspect itself,
              where it can be processed by tools.
            </p>
            <p>And just to state the obvious:
              do not use bytecode weaving, at load-time or otherwise,
              to modify .class files protected by license,
              without permission from the licensor.
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="Developers"></a>15 AspectJ Project Development</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:howitworks"></a><b>1. </b>I'm interested in the code implementing AspectJ.
          </p></div>
          <div class="answer"><p><a name="d0e2658"></a><b></b>Most people do not need to see the code for AspectJ;
            they can download the binary distribution for documentation
            and tools for writing AspectJ programs.
          </p>
            <p>For people who want to know how the AspectJ technology works,
              the source code is the best resource, until we write some
              proper white papers
              (see <a href="#q:implementation">Q:Do I need to know how the compiler works?</a>).
              To get and compile the Java source code for the AspectJ
              distribution, see
              <a href="#q:buildingsource">Q:How do I get and compile the source code for AspectJ?</a>.
            </p>
            <p>Bear in mind when looking at the code that there are many
              ways to implement the AspectJ language, and the code inspected
              might be an initial version of a new architecture (e.g., bytecode
              weaving).
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:contributions"></a><b>2. </b>How can I get involved with developing the
            AspectJ project?
          </p></div>
          <div class="answer"><p><a name="d0e2673"></a><b></b>For those who want to contribute to the project,
            here's a general list of ways to do so, in no particular order:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2677"></a>Participate effectively in the mailing lists.
                  The quality of the mailing lists makes a huge difference
                  in the ability of new and experienced AspectJ users
                  to write good code. For guidance on effective
                  participation, see
                  <a href="#q:talktousers">Q:How do I communicate with other AspectJ users?</a> and
                  <a href="#q:writingbugsandemails">Q:How should I write email queries?</a>.
                  Also, the time that experienced users take in answering emails
                  can directly translate to time developers can use (instead)
                  for fixing bugs or adding features.
                </p></li>
                <li><p><a name="d0e2684"></a>Write bugs. Good bugs, especially with test cases,
                  are always appreciated. We especially like proposals for
                  new <tt>XLint</tt> messages, since they are
                  sometimes easy to implement and help users learn
                  AspectJ, and for other implementable features
                  grounded in a compelling use-case.
                </p></li>
                <li><p><a name="d0e2690"></a>Write test cases for compiler bugs without test cases.
                  Compiler bugs without test cases are much less likely to be fixed;
                  until they are rendered in code, they might be user mistakes,
                  and they might duplicate another bug or actually cover many bugs.
                </p>
                  <p>Find them by searching open compiler bugs and picking out
                    any which do not have test case attachments or a comment that
                    a test case has been written.
                    Here is a query for open compiler bugs:

                    <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=AspectJ&amp;component=Compiler&amp;bug_status=UNCONFIRMED&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED"
                      target="_top">
                      http://bugs.eclipse.org/bugs/buglist.cgi?product=AspectJ&amp;component=Compiler&amp;bug_status=UNCONFIRMED&amp;bug_status=NEW&amp;bug_status=ASSIGNED&amp;bug_status=REOPENED
                    </a>
                  </p>
                  <p>For how to write test cases, see
                    <a href="#q:harnesstestcases">Q:How should I submit test cases for bugs?</a>.
                  </p></li>
                <li><p><a name="d0e2704"></a>Write patches to fix bugs.
                  If you particularly need a bug to be fixed, or if you're interested in
                  learning about the system, then get the source code and try to fix the
                  bug. Most likely you'll want to email aspectj-dev@eclipse.org to
                  declare your intentions and the approach you propose (based on having
                  looked at the code).
                  Mailing the list gives those experienced with the code a chance to
                  guide you away from pitfalls. To submit the patch, attach it to
                  the bug. (When creating patches, do so on a per-module basis; that
                  means if fixing the bug involves changes to three modules, submit
                  three patches.)
                </p></li>
                <li><p><a name="d0e2707"></a>Write patches for other reasons.
                  Often documentation needs to be fixed, or there may be a small new
                  feature you'd like to see. You can just do it and then submit it
                  as a patch to a bug you create. As with bugs, in some cases you
                  might want to declare your intentions on the mailing list to avoid
                  wasting time on something that's been fixed but not committed or
                  on an approach that will be fruitless.
                </p></li>
              </ul>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:buildingsource"></a><b>3. </b>How do I get and compile the source code for
            AspectJ?
          </p></div>
          <div class="answer"><p><a name="d0e2715"></a><b></b>AspectJ 1.0 source code is available in an archive
            available
            with the 1.0 downloads. It contains instructions for building
            from sources.
          </p>
            <p>AspectJ 1.1+ source code is available through CVS using the
              CVS Root <tt>dev.eclipse.org:/cvsroot/tools</tt>.
              For more information on accessing the CVS tree at eclipse.org,
              see the documentation from <a href="http://eclipse.org" target="_top">http://eclipse.org</a>. Find
              specific instructions in the AspectJ tree at <a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.aspectj/modules/build/readme-build-and-test-aspectj.html?rev=HEAD&amp;content-type=text/html&amp;cvsroot=Tools_Project"
                target="_top">
                org.aspectj/modules/build/readme-build-and-test-aspectj.html</a>.
              If you would like to use Ant to checkout the sources, build the
              distribution, and test everything, see <a href="http://dev.eclipse.org/viewcvs/index.cgi/~checkout~/org.aspectj/modules/build/release/build.xml?rev=HEAD&amp;content-type=text/xml&amp;cvsroot=Tools_Project"
                target="_top">
                org.aspectj/modules/build/release/build.xml</a>. </p>
            <p>
              To check out the source code in Eclipse go to (<tt>File &gt; new &gt; Other &gt; CVS &gt; Checkout
              Projects from CVS</tt>). You'll need about 125 MB of space for the source and build.
              Host: <tt>dev.eclipse.org</tt>,
              Repository Path: <tt>/cvsroot/tools</tt>,
              user name: <tt>anonymous</tt>,
              password: (your email address),
              connection type: <tt>pserver</tt>,
              default port.
              Then select the individual modules you want to check out (you probably want all of them bar aspectj-attic
              and java5) and click Next and choose to check out the modules you selected as Java projects.
              Once thats done each module you checked out should show up as a project in the package explorer.
              If you have problems after this point you can view the build instructions that come with AspectJ by going
              in the package explorer to: <tt>build &gt; readme-build-and-test-aspectj.html</tt>.
            </p>
            <p>
              To get the modules to build you have to set some classpath variables (<tt>Window &gt; Preferences &gt;
              Java &gt; Build Path &gt; Classpath Variables</tt>):
            </p>
            <p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2760"></a>
                  Name: <tt>JAVA_HOME</tt>, Value: (wherever your Java JDK is installed)
                </p></li>
                <li><p><a name="d0e2766"></a>
                  Name: <tt>JRE14_LIB</tt>, Value: (wherever your Java 4 Runtime is installed)<tt>\jre\lib t.jar</tt>
                </p></li>
                <li><p><a name="d0e2775"></a>
                  Name: <tt>JRE15_LIB</tt>, Value: (wherever your Java 5 Runtime is installed)<tt>\jre\lib t.jar</tt>
                </p></li>
                <li><p><a name="d0e2784"></a>
                  Name: <tt>ASPECTJRT_LIB</tt>, Value: (wherever your workspace
                  is)<tt>\lib\aspectj\lib\aspectjrt.jar</tt>. To find out where your workspace is go to <tt>File &gt;
                    Switch Workspace</tt>.
                </p></li>
              </ul>
            </div>
            </p><p>
              The <tt>org.aspectj.lib</tt> project is an AspectJ project so
              you also have to have AJDT installed. For the latest AJDT release and
              download instructions visit the
              <a href="http://www.eclipse.org/ajdt/downloads/" target="_top">AJDT Downloads</a> page.
            </p>
            <p>
              When you've added the variables click OK to do a full rebuild, then run the tests by going in the Package
              Explorer to:
              <tt>run-all-junit-tests &gt; testsrc &gt; (default package) &gt; RunTheseBeforeYouCommitTests.java</tt>
              and running this as a JUnit test (right click and select <tt>Run As &gt; JUnit Test</tt>).
              Don't worry about any errors that appear in the console output,
              just check that there are no failures in the JUnit view (<tt>Window &gt; Show View &gt; Other &gt; Java
              &gt; JUnit</tt>).
              If that finishes with no Failures and a full green bar you have the AspectJ compiler source and it's
              building and testing properly.
            </p>
            <p>
              Further details:
            </p>
            <p>
              You can check out the entire modules directory and build using the
              Ant build script <tt>modules/build/build.xml</tt>.
              All required libraries are included in <tt>modules/lib/</tt>,
              (including Ant 1.5.1 in <tt>modules/lib/ant</tt>).
              If you are using Eclipse, you can check out any <tt>modules/</tt>
              subdirectory as an eclipse Java project.
              Depending on what you are trying to build, you need not check out
              all modules; as of this writing, here are the modules to get
              for building the specific parts of AspectJ:
            </p>
            <p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2835"></a>For any builds: build, lib
                </p></li>
                <li><p><a name="d0e2838"></a>For the documentation: docs
                </p></li>
                <li><p><a name="d0e2841"></a>For the compiler: bridge, util, testing-util,
                  weaver, asm, org.eclipse.jdt.core, org.aspectj.ajdt.core,
                  and runtime.
                </p></li>
                <li><p><a name="d0e2844"></a>For ajbrowser: the compiler modules, plus
                  ajbrowser, ajdoc, taskdefs, and ajde.
                </p></li>
                <li><p><a name="d0e2847"></a>For the AspectJ distribution, the ajbrowser modules,
                  plus aspectj5rt and org.aspectj.lib.
                </p></li>
                <li><p><a name="d0e2850"></a>For the test harness (or to run the release build
                  scripts and tests): the ajbrowser modules, plus
                  testing, testing-client, and testing-drivers.
                </p></li>
                <li><p><a name="d0e2853"></a>To run the test suite: the test harness modules, plus
                  tests.
                </p></li>
              </ul>
            </div>
            </p><p>
              Note that module interdependencies are recorded only in the eclipse
              <tt>modules/{module}/.classpath
              </tt>
              files and may
              change, so the list above may not be correct when you read it.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:buildingAspectJAndAJDT"></a><b>4. </b>How do I build AspectJ and integrate
            it into AJDT?
          </p></div>
          <div class="answer"><p><a name="d0e2866"></a><b></b>To build AspectJ, first get the source tree as
            described in <a href="#q:buildingsource">Q:How do I get and compile the source code for AspectJ?</a>. Once
            you have
            a development environment set up, copy the
            <tt>build/sample-local.properties</tt> file
            to <tt>build/local.properties</tt> and within this file point the
            <tt>java14.home</tt> and <tt>java15.home</tt>
            to the corresponding places on your machine.
          </p>
            <p>
              To build AspectJ on the command line:
            </p>
            <p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2888"></a>
                  Open a command prompt
                </p></li>
                <li><p><a name="d0e2891"></a>
                  Navigate to the <tt>build</tt> directory within your AspectJ workspace
                  (to find out where your workspace is go to <tt>File &gt;
                    Switch Workspace</tt> within Eclipse).
                </p></li>
                <li><p><a name="d0e2900"></a>
                  Run <tt>ant clean</tt> to remove the files from
                  previously built AspectJ versions.
                </p></li>
                <li><p><a name="d0e2906"></a>
                  Run <tt>ant</tt> to build AspectJ. The built files are created in
                  <tt>your_eclipse_installation_directory/aspectj_development_workspace/aj-build</tt>.
                </p></li>
              </ul>
            </div>
            </p><p>
              To import a locally built AspectJ into AJDT first follow the
              instructions on <a href="http://www.eclipse.org/ajdt/faq.php#q:develop" target="_top">
              How do I setup an AJDT development environment in Eclipse?</a>
              for setting up an AJDT development environment and running the
              correctness tests. Then:
            </p>
            <p>
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e2924"></a>
                  Create a file <tt>aspectjlib.properties</tt> within
                  the <tt>org.aspectj.ajde</tt> project and add the following two lines
                  <pre class="programlisting">
aspectj.lib.dir=C:/eclipse/aspectj-workspace/aj-build/dist/tools/lib
aspectj.doc.dir=C:/eclipse/aspectj-workspace/aj-build/dist/ide/eclipse/org.aspectj.ajde.doc/doc
            </pre>
                  making sure to change the path to correspond to your set up.
                  </p></li>
                <li><p><a name="d0e2936"></a>
                  Run the <tt>build.xml</tt> file in <tt>org.aspectj.ajde</tt>
                  with the <tt>plugin jars</tt> target:
                  <div class="itemizedlist">
                    <ul>
                      <li><p><a name="d0e2949"></a>
                        Right click on the <tt>build.xml</tt> file in the
                        <tt>org.aspectj.ajde</tt> plugin
                      </p></li>
                      <li><p><a name="d0e2958"></a>
                        Select <tt>Run As &gt; Ant build...</tt>
                      </p></li>
                      <li><p><a name="d0e2964"></a>
                        In the resultant dialog navigate to the <tt>Targets</tt> tab
                      </p></li>
                      <li><p><a name="d0e2970"></a>
                        Ensure <tt>plugin jars</tt> is the only selected target
                      </p></li>
                      <li><p><a name="d0e2976"></a>
                        Click <tt>Run</tt>
                      </p></li>
                    </ul>
                  </div>
                  </p></li>
                <li><p><a name="d0e2983"></a>
                  Refresh the <tt>org.aspectj.ajde, org.aspectj.runtime</tt>
                  and <tt>org.aspectj.weaver</tt> plugins.
                </p></li>
              </ul>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:devDocs"></a><b>5. </b>Where do I find developer documentation on building
            and testing AspectJ source code?
          </p></div>
          <div class="answer"><p><a name="d0e2997"></a><b></b>Find the developer documentation in HTML files in the CVS
            tree,
            inside the <tt>build</tt> and <tt>testing</tt> modules
            (i.e., in <tt>org.aspectj/modules/build/...</tt>).
            Most pertinant:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e3010"></a>
                  <tt>../build/readme-build-and-test-aspectj.html</tt>
                  describes how to build the AspectJ distribution in Eclipse
                  and in Ant.
                </p></li>
                <li><p><a name="d0e3016"></a><tt>../build/readme-docs-module.html</tt>
                  describes the AspectJ documentation sources and
                  how to build the documentation using Ant.
                </p></li>
                <li><p><a name="d0e3021"></a><tt>../build/readme-tests-module.html</tt>
                  describes the all the tests
                  in the <tt>tests</tt> module.
                </p></li>
                <li><p><a name="d0e3029"></a><tt>../build/readme-writing-compiler-tests.html</tt>
                  describes how to write compiler tests that can be run by
                  the AspectJ test harness.
                </p></li>
                <li><p><a name="d0e3034"></a><tt>../build/readme-testing-drivers-module.html</tt>
                  describes the test harness used to run the compiler tests
                  in the <tt>tests</tt> module.
                </p></li>
                <li><p><a name="d0e3042"></a><tt>../build/readme-testing-drivers-module.html</tt>
                  describes the test harness used to run the compiler tests
                  in the <tt>testing</tt> module.
                </p></li>
              </ul>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:harnesstestcases"></a><b>6. </b>How should I submit test cases for bugs?
          </p></div>
          <div class="answer"><p><a name="d0e3055"></a><b></b>You can attach files to a bug after it has been created.
            The code of course should replicate the actual behavior
            described in the bug when run on the target version.
            If you have a single source file, you can attach it directly,
            describing in the comments the expected result
            (e.g., error on line 14, or successful compile/run).
            The most helpful form for describing the test scenario
            and the expected results are the test definitions
            described next.
          </p>
            <p>For more complex bugs requiring many files,
              create a zip file of a directory containing all the files
              and an XML test definition file.
              The XML test definition file contains specifications
              for how to compile, recompile, or run the test sources.
              Complete documentation is available in the CVS tree
              at <tt>tests/readme-writing-compiler-tests.html</tt>
              but here is a sample file with some example definitions,
              preceded by comments showing the directory layout
              of the files referred to in the test definitions.
            </p>
            <p>
            <pre class="programlisting">

&lt;!DOCTYPE suite SYSTEM "../tests/ajcTestSuite.dtd"&gt;
&lt;suite&gt;

&lt;!-- Compile and run
     using the following files:

       {testDefinitions}.xml
       one/
         pack1/
           Main.java
         p2/
           BeforeConstructor.java

    Note the bug number goes in the pr attribute.
    ("pr" stands for "problem report")
 --&gt;
&lt;ajc-test dir="one" pr="234" title="before constructor call"&gt;
    &lt;compile files="pack1/Main.java,p2/BeforeConstructor.java"/&gt;
    &lt;run class="pack1.Main"/&gt;
&lt;/ajc-test&gt;

&lt;!-- Check that compiler warning was emitted 
     using the following files:

       {testDefinitions}.xml
       two/
         UsesDeprecated.java
 --&gt;
&lt;ajc-test dir="two" pr="244" title="deprecated, noImportError"&gt;
    &lt;compile options="-warn:deprecated,-noImportError" 
          files="UsesDeprecated.java"&gt;
        &lt;message kind="warning" line="20"/&gt;
    &lt;/compile&gt;
&lt;/ajc-test&gt;

&lt;!-- Cooked example that uses all compiler attributes 
     and the following files:
       {testDefinitions}.xml
       testCaseDir/
         jars/
           injar.jar
           required.jar
           requiredAspects.jar
         pack/
           Main.java
         providedClassesDir/
           ClassInDefaultPackage.class
           org/
             foo/
               AnotherRequired.class
  --&gt;
&lt;ajc-test dir="testCaseDir" title="attributes test"&gt;
    &lt;compile files="pack/Main.java,jars/injar.jar" 
           staging="true"
           options="-Xlint,-g:none"
          argfiles="debug.lst,aspects/test.lst"
        aspectpath="jars/requiredAspects.jar"
         classpath="providedClassesDir,jars/required.jar"/&gt;
    &lt;run class="Main"/&gt;
&lt;/ajc-test&gt;

&lt;!-- Compiler errors, recompile after changing files, and run
     using the following files:

       {testDefinitions}.xml
       three/
         pack/
           IncCompileFix.java
           IncCompileFix.20.java

     Before compiling, IncCompileFix.java is copied to a staging
     directory.  Before recompiling, IncCompileFix.20.java 
     replaces it, so the compiler treats file as updated.
  --&gt;
&lt;ajc-test dir="three" pr="622" title="incremental fix"&gt;
    &lt;compile staging="true" files="pack/IncCompileFix.java"&gt;
        &lt;message kind="error" line="20"/&gt;
        &lt;message kind="error" line="42"/&gt;
    &lt;/compile&gt;
    &lt;inc-compile tag="20"/&gt;
    &lt;run class="pack.IncCompileFix"/&gt;
&lt;/ajc-test&gt;

&lt;/suite&gt;

          </pre>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:testharness"></a><b>7. </b>I'd like to run my test case. How do I get the
            test harness?
          </p></div>
          <div class="answer"><p><a name="d0e3072"></a><b></b>The test harness is not distributed.
            To build it, get the source tree as
            described in <a href="#q:buildingsource">Q:How do I get and compile the source code for AspectJ?</a> and
            then
            build the <tt>build-testing-drivers</tt> target:
            <pre class="programlisting">
  cd build
  ../lib/ant/bin/ant -f build.xml build-testing-drivers
          </pre>
            This produces
            <tt>../aj-build/jars/testing-drivers-all.jar</tt>
            which you can run as described in
            <tt>tests/readme-tests-module.html</tt>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:bcel"></a><b>8. </b>BCEL is used by AspectJ but it's not actively
            developed. Will you change?
          </p></div>
          <div class="answer"><p><a name="d0e3093"></a><b></b>The AspectJ bytecode weaver has used BCEL for bytecode
            manipulation
            since its first release. We have upgraded it extensively, to improve
            performance, support Java 5, etc. The BCEL developers have not
            incorporated our patches, so we continue to maintain our own version.
            Ours has been optimized for the AspectJ weaver and battle-hardened
            over years of development and use. At some point in the future,
            the AspectJ weaver might be restructured to make it easy to see
            whether another bytecode package offers the same stability,
            functionality, and performance, but for now we prefer using something
            that we know works well.
          </p>
            <p>
              In the AspectJ 5 release, the weaver has been restructured to
              use reflection where possible. Otherwise, it
              continues to use BCEL, but does not hold BCEL structures in
              memory after our evaluation completes.
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="help"></a>16 Getting Help</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:moreaboutaj"></a><b>1. </b>
            How do I find out more about AspectJ?
          </p></div>
          <div class="answer"><p><a name="d0e3105"></a><b></b>Visit the AspectJ project web site:
            <a href="http://eclipse.org/aspectj" target="_top">http://eclipse.org/aspectj</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:bugreports"></a><b>2. </b>How do I submit a bug report?</p></div>
          <div class="answer"><p><a name="d0e3115"></a><b></b>You can submit a bug from
            <a href="http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AspectJ" target="_top">
              http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AspectJ
            </a>.
            If it seems to be a bug in the compiler,
            please attach a small test case (source code)
            to reproduce the problem.
            For more information on writing compiler test cases, see
            <a href="#q:ajcbugs">Q:How do I write bugs for the AspectJ compiler?</a>.
            If you are unable to submit a test case, consider submitting traces,
            ajcore files, and/or .class dump files, as described in the
            <a href="pdguide/index.html" target="_top">AspectJ Problem Diagnosis Guide</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:talktousers"></a><b>3. </b>
            How do I communicate with other AspectJ users?
          </p></div>
          <div class="answer"><p><a name="d0e3130"></a><b></b>You can reach other AspectJ users by using the
            aspectj-users mailing list. You can subscribe to the list or view the
            list archives from the AspectJ home page
            <a href="http://eclipse.org/aspectj" target="_top">
              http://eclipse.org/aspectj
            </a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:searchingsite"></a><b>4. </b>
            How can I search the email archives or the web site?
          </p></div>
          <div class="answer"><p><a name="d0e3140"></a><b></b>
            It is very effective to do a google search of the form,
            <a href="http://www.google.com/search?q=site:eclipse.org+cflowbelow" target="_top">
              http://www.google.com/search?q=site:eclipse.org+cflowbelow
            </a>,
            and you can use the eclipse.org search at
            <a href="http://www.eclipse.org/search/search.cgi" target="_top">
              http://www.eclipse.org/search/search.cgi
            </a>.
            You can also check the old archives available for download from
            the AspectJ home page
            <a href="http://eclipse.org/aspectj" target="_top">
              http://eclipse.org/aspectj
            </a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:writingbugsandemails"></a><b>5. </b>
            How should I write email queries?
          </p></div>
          <div class="answer"><p><a name="d0e3156"></a><b></b>Here's the general form of a good email:
          </p>
            <div class="orderedlist">
              <ol type="1">
                <li><p><a name="d0e3160"></a>
                  Describe the big picture of what you are trying to do...
                </p></li>
                <li><p><a name="d0e3163"></a>
                  Describe what you think it takes, in AspectJ terms
                  (concepts, syntax, and semantics) from the
                  <a href="progguide/index.html" target="_top">Programming Guide</a>...
                </p></li>
                <li><p><a name="d0e3169"></a>
                  Show the AspectJ code you are using, what output it
                  produces when run, and what output you expect...
                </p></li>
              </ol>
            </div>
            <p>
              The big picture helps others redirect you to other approaches.
              Using AspectJ terms helps others correct mistakes in thinking
              about the problem (the most common being to confuse join points
              and pointcuts).
              The code is key to clarifying your question and getting a good
              response. On the mail list, someone can reply by fixing your
              code. In bugs, the developers can reproduce the problem immediately
              and start analyzing the fix.
              The code should not be incomplete; it should run (or fail) as-is,
              without additional libraries or source files.
            </p>
            <p>
              For the mail lists, we try to follow the conventions for open-source
              discussions that help avoid "the tragedy of the commons."
              For example conventions, see
              <a href="http://jakarta.apache.org/site/mail.html" target="_top">
                http://jakarta.apache.org/site/mail.html
              </a> and
              <a href="http://www.tuxedo.org/%7Eesr/faqs/smart-questions.html" target="_top">
                http://www.tuxedo.org/%7Eesr/faqs/smart-questions.html
              </a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:idebugs"></a><b>6. </b>
            How do I write bugs for IDE support?
          </p></div>
          <div class="answer"><p><a name="d0e3186"></a><b></b>
            Bugs appearing in the IDE's may apply to the affected IDE
            or to the compiler. Compiler stack traces in IDE message windows
            are prefixed "Internal Compiler Error" and should be written up
            as compiler bugs. If you are unsure, try redoing the compile
            from the command line.
          </p>
            <p>
              Bug report for the IDE extensions go to their respective projects,
              listed in
              <a href="#q:integrateWithDevTools">Q: How well does AspectJ integrate with existing Java development
                tools?</a>
              (including bug reports for the AJDE Eclipse support,
              which you can submit at
              <a href="http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AJDT" target="_top">
                http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AJDT
              </a>).
            </p>
            <p>
              Bug reports on ajbrowser should have version
              information for both Java and AspectJ, and
              (most importantly) clear steps for reproducing the bug.
              You may submit ajbrowser bugs against the IDE component of AspectJ
              via the web form
              <a href="http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AspectJ" target="_top">
                http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AspectJ
              </a>.
            </p>
            <p>
              One of the benefits of open-source is that you can
              find and fix the bug for yourself; when you submit
              the fix back to us, we can validate the fix for you
              and incorporate it into the next release.
              You can submit a patch by attaching it to the bug.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:ajcbugs"></a><b>7. </b>
            How do I write bugs for the AspectJ compiler?
          </p></div>
          <div class="answer"><p><a name="d0e3207"></a><b></b>
            The best compiler bug report is a reproducible test case,
            standalone code that demonstrates the problem.
            Sometimes with aspects, a test case requires several
            files, if not some way to capture the behavior.
            Here's how we recommend submitting test cases:
            <div class="orderedlist">
              <ol type="1">
                <li><p><a name="d0e3211"></a>
                  Write the test case so that when the compiler bug
                  is fixed, the test completes normally without output
                  (e.g., expected compiler errors are issued,
                  or classes produced run correctly). This usually
                  means writing one or more source files.
                </p></li>
                <li><p><a name="d0e3214"></a>
                  In the bug report, briefly summarize the bug.
                  If it is not obvious, be sure to specify
                  the expected output/behavior (e.g., compiler error on line 32)
                  and, if the compile should complete, the main class to run.
                </p></li>
                <li><p><a name="d0e3217"></a>
                  Submit the bugs via the web form
                  <a href="http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AspectJ" target="_top">
                    http://bugs.eclipse.org/bugs/enter_bug.cgi?product=AspectJ
                  </a>.
                </p></li>
                <li><p><a name="d0e3223"></a>Attach the test case to the bug.
                  The test case may be a single file
                  or it may be multiple files in a single zip archive,
                  of the form discussed in
                  <a href="#q:harnesstestcases">Q:How should I submit test cases for bugs?</a>.
                </p></li>
              </ol>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:teachingmaterials"></a><b>8. </b>
            Can you recommend reading or teaching material for AspectJ?
          </p></div>
          <div class="answer"><p><a name="d0e3233"></a><b></b>The documentation available in the distribution is the
            best source for language and usage questions. You can also find
            selected AspectJ papers and presentations on the
            <a href="http://www.parc.com/groups/csl/projects/aspectj/index.html" target="_top">
              PARC AspectJ page</a>.
            For links to Aspect-oriented programming materials in general, see
            <a href="http://aosd.net" target="_top">http://aosd.net</a>.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:consulting"></a><b>9. </b>
            Where can our group get consulting and support?
          </p></div>
          <div class="answer"><p><a name="d0e3246"></a><b></b>The best thing to to is join and email the
            <tt>aspectj-dev@eclipse.org</tt> mailing list.
          </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:faqchanges"></a><b>10. </b>
            What has changed since the last FAQ version?
          </p></div>
          <div class="answer"><p><a name="d0e3256"></a><b></b>
            Entries changed recently:
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e3260"></a><a href="#q:license">Q:How is AspectJ licensed?</a></p></li>
                <li><p><a name="d0e3263"></a><a href="#q:productplans">Q:Is it safe to use AspectJ in my product
                  plans??</a></p></li>
                <li><p><a name="d0e3266"></a><a href="#q:whitepapers">Q:How does the compiler/weaver work? Are there any
                  white papers?</a></p></li>
                <li><p><a name="d0e3269"></a><a href="#q:bugreports">Q:How do I submit a bug report?</a></p></li>
              </ul>
            </div>
            </p></div>
        </div>
      </div>
      <div class="qandadiv"><h3 class="title"><a name="project"></a>17 About the AspectJ Project</h3>
        <div class="qandaentry">
          <div class="question"><p><a name="q:opensource"></a><b>1. </b>What does the fact that AspectJ is an Open
            Source
            Project mean to me?
          </p></div>
          <div class="answer"><p><a name="d0e3280"></a><b></b>Open source protects your interest in a correct,
            long-lived,
            up-to-date, and widely-accepted implementation of AspectJ.
            <div class="itemizedlist">
              <ul>
                <li><p><a name="d0e3284"></a>With the source code, you control your own destiny
                  in perpetuity. You can continue to use the implementation
                  and update it as necessary to fix bugs and add things you need.
                </p></li>
                <li><p><a name="d0e3287"></a>Because the code is available to all, anyone can find
                  and fix bugs. There is no need to hope for it to be fixed
                  in the next product release. Those who encounter the bugs
                  are motivated to fix them, and there are more eyeballs on
                  the code than in closed-source, so the quality tends to be high.
                  This can be particularly true for the AspectJ community,
                  which tends to be highly skilled.
                </p></li>
                <li><p><a name="d0e3290"></a>The same is true of new features or behavior, so the
                  implementation should be up-to-date. This is important as
                  the field of AOP develops, to capture the latest solutions.
                </p></li>
                <li><p><a name="d0e3293"></a>For a programming language which forms the basis of
                  an entire solution stack, open source facilitates the kind
                  of adoption -- tool integrations and significant projects --
                  that develop and prove the technology for wider adoption. This
                  limits delays caused by waiting for the completion of standards
                  process or promulgation by industry leaders, and also provides
                  the proofs necessary for such adoption.
                </p></li>
              </ul>
            </div>
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:standardization"></a><b>2. </b>What are your plans to make AspectJ a
            general feature
            of Java supported by Sun and the other key players in the Java
            Industry?
          </p></div>
          <div class="answer"><p><a name="d0e3301"></a><b></b>Although we are committed to making AspectJ available to a
            wide
            range of users, it is too early to decide on a strategy. Some
            options include continuing AspectJ as a stand-alone product,
            integrating it into IDEs, or possibly incorporating it into
            standard Java with Sun's blessing.
          </p>
            <p>We currently focus on developing for the 1.1 implementation
              which improves AspectJ in key areas: rapid
              incremental compilation, bytecode weaving, and IDE integration.
            </p>
            <p>Through all of this our goal is to make AspectJ integrate as
              seamlessly as possible with the Java programming language. The
              AspectJ language design is becoming more integrated, the compiler
              is becoming faster and more integrated, the IDE extensions are
              becoming more integrated. All of this is designed to help users
              really use AspectJ and give us feedback on it.
            </p>
            <p>As the system is improved and we work more closely
              with users, we will be in good position to explore the best path
              for AspectJ in the long term.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:bytecodeweaving"></a><b>3. </b>When will AspectJ work from class files?
            When will it work at class-loading time?
          </p></div>
          <div class="answer"><p><a name="d0e3314"></a><b></b>Bytecode weaving is in AspectJ 1.1. We believe it
            works as described in an email to the users list by Jim Hugugin:
          </p>
            <p>
              The AspectJ language was designed to support weaving at many different times:
              compile, load, or even run-time in the JVM. Weaving into bytecodes at both
              compile and load-time will definitely be provided in a future release. This
              will allow weaving at compile-time into libraries for which source code is
              not available. It will also support aspect-aware class loaders that can
              perform weaving at load time on arbitrary classes. One advantage of a
              language like AspectJ, rather than an explicit meta-tool like jiapi, is
              that it separates the specification of a crosscutting concern from any
              particular implementation strategy for weaving.
            </p>
            <p>
              ...AspectJ provides a language that can cleanly
              capture crosscutting concerns while preserving the static type checking,
              modularity, and composability of Java.
            </p>
            <p>If you have an application for using aspects and bytecode,
              please let the AspectJ team know of your requirements.
              We expect to have a demonstration classloader available in
              the 1.1 release or soon thereafter.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:differences"></a><b>4. </b>What are the differences between the current
            and
            previously released versions of AspectJ?
          </p></div>
          <div class="answer"><p><a name="d0e3327"></a><b></b>The AspectJ team aims to keep the implementation bug-free
            and
            up-to-date with the Java language,
            to limit AspectJ language changes to those that
            are carefully considered, compelling, and backwards-compatible,
            and to deliver those language changes only in significant releases (1.0, 1.1).
          </p>
            <div class="table"><p><a name="d0e3330"></a><b>Table 2. </b></p>
              <table summary="" border="1">
                <colgroup>
                  <col>
                  <col>
                </colgroup>
                <tbody>
                <tr>
                  <td align="left">Version</td>
                  <td align="left">Description</td>
                </tr>
                <tr>
                  <td>AspectJ 1.5</td>
                  <td>Upgrade to support Java 5 language and much better
                    load-time weaving.
                    See <a href="README-150.html" target="_top">README-150.html</a>
                    for more details.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 1.1</td>
                  <td>A few language changes and clarifications;
                    bytecode weaving and incremental compilation.
                    See <a href="README-11.html" target="_top">README-11.html</a>
                    for more detail.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 1.0</td>
                  <td>Many language changes, fixes, cleanup and
                    clarifications, some significant.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 0.8</td>
                  <td>More cleanup of the syntax and semantics.</td>
                </tr>
                <tr>
                  <td>AspectJ 0.7</td>
                  <td>Clean up of the semantics, 0.7 beta 4 is the first
                    open source release.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 0.6</td>
                  <td>Advice and crosscuts get explicit type signatures
                    which describe the values that are available to advice at a
                    crosscut.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 0.5</td>
                  <td>Improved tool support: better Emacs environment
                    support and <tt>ajdoc</tt> to parallel
                    <tt>javadoc</tt>. around advice is added, and the
                    <tt>aspect</tt> keyword is removed and replaced
                    by the Java keyword class.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 0.4</td>
                  <td>Clear separation of crosscuts and crosscut actions
                    makes it possible to define extensible library
                    aspects.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 0.3</td>
                  <td>First all Java implementation, also includes many
                    small language improvements.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 0.2</td>
                  <td>General-purpose support for crosscutting. Users could
                    program any kind of aspects, not just coordination. This
                    release dropped COOL.
                  </td>
                </tr>
                <tr>
                  <td>AspectJ 0.1</td>
                  <td>A single domain-specific aspect language, called COOL,
                    for programming coordination in multi-threaded
                    programs.
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <p> More details for 1.0 and earlier releases are available in
              <a href="changes.html" target="_top">changes.html</a>.
            </p></div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:schedule"></a><b>5. </b>
            What is the AspectJ development schedule?
          </p></div>
          <div class="answer"><p><a name="d0e3418"></a><b></b>
            Below is a table describing the goals for the major releases.
            For information about specific features, search the bug database
            for <tt>RFE</tt>'s ("requests for enhancement") by
            <a href="http://bugs.eclipse.org/bugs/buglist.cgi?product=AspectJ&amp;bug_severity=enhancement"
               target="_top">
              selecting severity of "enhancement"</a>.

            Like many open-source projects, we don't make or promise
            schedules, but we do follow a pattern of issuing preview releases
            which can give observers an idea of when
            a particular release might be available.
          </p>
            <div class="table"><p><a name="d0e3427"></a><b>Table 3. The AspectJ Development Schedule</b></p>
              <table summary="The AspectJ Development Schedule" border="1">
                <colgroup>
                  <col>
                  <col>
                </colgroup>
                <tbody>
                <tr>
                  <td align="left">Version</td>
                  <td align="left">Description</td>
                </tr>
                <tr>
                  <td align="center" valign="top">1.0</td>
                  <td>Final syntax and semantic changes. Standalone structure
                    browser. Complete documentation.
                  </td>
                </tr>
                <tr>
                  <td align="center" valign="top">1.1</td>
                  <td>Faster incremental compilation, bytecode weaving,
                    and a small number of language changes.
                  </td>
                </tr>
                <tr>
                  <td align="center" valign="top">1.2</td>
                  <td>Faster weaving, -inpath option, better error messages,
                    better handling of binary input and resources
                    during incremental compilation, faster runtime
                  </td>
                </tr>
                <tr>
                  <td align="center" valign="top">1.5 (AspectJ 5)</td>
                  <td>Support for Java 1.5, generic aspects,
                    annotations, etc. Integrates AspectWerkz-style
                    load-time weaving.
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="qandaentry">
          <div class="question"><p><a name="q:java5"></a><b>6. </b>
            Will AspectJ support Java 5?
          </p></div>
          <div class="answer"><p><a name="d0e3461"></a><b></b>
            Yes. Java 5 is supported in AspectJ 5.
          </p></div>
        </div>
      </div>
    </div>
    <p>AspectJ is a registered trademark of Palo Alto Research Center, Incorporated (PARC),
      used with permission.
      Java and all Java-based marks are trademarks or registered trademarks of
      Sun Microsystems, Inc. in the United States and other countries. All other
      trademarks are the property of their respective owners.
    </p>
  </div>

</div>
HTML;

  # Generate the web page
  $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
