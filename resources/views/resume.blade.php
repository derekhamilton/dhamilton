@extends ('layouts.public')

@section ('title', "Resume")

@section ('styles')
<link rel="stylesheet" href="{!! route('css') !!}/resume.css">
@endsection

@section ('content')
<div>
    <p>I am a full-stack developer in all senses. Back-end development with academic OOP principles in PHP, along with front-end experience with modern tools like ReactJS and SASS. I've worked daily with relational databases like MySQL, and modern persistence technologies in Redis. I am also an avid Linux user and am comfortable with Debian server adminstration, with an affinity for vim. And lastly, I highly value forethought, planning and consideration of speficifications and scope prior to building in order to provide the best results for everyone.</p>
</div>
<div class="resumeSidebar"><h3>Employment</h3></div>
<div class="resumeMain">
    <!-- SNAP21 -->
    <p>
        <span class="work">Snap21</span>, <span class="date">Oct 2016 - Present</span><br />
        <span class="position">Position: Web Developer</span><br />
        <span class="responsibilities">Responsibilities:</span>
    </p>
    <ul class="responsibilities">
        <li>Full-stack development and maintenance.</li>
        <li>Project architecture design and planning.</li>
    </ul>
    <p>
        <span class="accomplishments">Accomplishments:</span>
    </p>
    <ul class="accomplishments">
        <li>Championing reuse of tech through web services and microservices.</li>
        <li>Leading workshops to upgrade developer's skillsets to modern understanding of testing and SOLID principles.</li>
        <li>Taking on responsibility for two separate major products.</li>
        <li>Implementing handling, delivery and monitoring of text messaging across all brands.</li>
        <li>Ground-up rewrite of mobile site in ReactJS integrated with remote API.</li>
    </ul>

    <!-- NETMEDIA SERVICES -->
    <p>
        <span class="work">Netmedia Services Inc.</span>, <span class="date">Sep 2013 - Present</span><br />
        <span class="position">Position: Web Developer</span><br />
        <span class="responsibilities">Responsibilities:</span>
    </p>
    <ul class="responsibilities">
        <li>Web development in a variety of projects and technologies.</li>
        <li>Interface with internal managers to determine needs for projects.</li>
    </ul>
    <p>
        <span class="accomplishments">Accomplishments:</span>
    </p>
    <ul class="accomplishments">
        <li>Replaced incomplete mail system with complete solution.</li>
        <li>Took over primary internal development of the rewrite of a purchased brand.</li>
    </ul>

    <!-- WEB SOLUTIONS -->
    <p>
        <span class="work">Web Solutions</span>, <span class="date">Mar 2010 - Oct 2013</span><br />
        <span class="position">Position: Lead Developer</span><br />
        <span class="responsibilities">Responsibilities:</span>
    </p>
    <ul class="responsibilities">
        <li>Full-stack Web Development including ground-up new projects, as well as maintenance.</li>
        <li>Meeting and working with clients to determine project needs.</li>
        <li>Writing specifications and time quotes for new projects.</li>
        <li>Administration and configuration of Apache and IIS web servers.</li>
        <li>Delegation and organization of duties among a small development team.</li>
    </ul>
    <p>
        <span class="accomplishments">Accomplishments:</span>
    </p>
    <ul class="accomplishments">
        <li>Planned and implemented company-wide use of local development server, source control repositories, and coding standards.</li>
        <li>Secured and implemented server and application password management where previously employees had free access.</li>
        <li>Standardized reuse of open-source e-commerce software for e-commerce clients.</li>
    </ul>

    <!-- UNIVERSITY OF WINDSOR JAVA -->
    <p>
        <span class="work">University of Windsor</span>, <span class="date">July 2012 - June 2013</span><br />
        <span class="position">Position: Java Developer</span><br />
        <span class="responsibilities">Responsibilities:</span>
    </p>
    <ul>
        <li>Workflow and extension development for Nuxeo document management system.</li>
        <li>Interfacing with clients.</li>
    </ul>

    <!-- UNIVERSITY OF WINDSOR IT -->
    <p>
        <span class="work">University of Windsor</span>, <span class="date">Sep 2010 - April 2012</span><br />
        <span class="position">Position: Student IT Consultant</span><br />
        <span class="responsibilities">Responsibilities:</span>
    </p>
    <p>
        Act as preliminary technical support for computer laboratory users. This includes,
    </p>
    <ul>
        <li>Software support.</li>
        <li>Printer/copier maintenance for paper and toner levels.</li>
        <li>Laboratory supervision and enforcement of rules.</li>
    </ul>

    <!-- SPRY AGENCY -->
    <p>
        <span class="work">Spry Agency</span>, <span class="date">June 2011 - April 2012</span><br />
        <span class="position">Position: Web Developer</span><br />
        <span class="responsibilities">Responsibilities:</span>
    </p>
    <ul class="responsibilities">
        <li>Web development for new and existing websites and applications, using PHP and MySQL.</li>
    </ul>

    <!-- NCO -->
    <p>
        <span class="work">NCO</span>, <span class="date">Aug 2008 – Sep 2009</span><br />
        <span class="position">Position: Inbound Customer Service Representative</span><br />
        <span class="responsibilities">Responsibilities:</span>
    </p>
    <ul class="responsibilities">
        <li>Speak with customers to resolve issues with their services, billing and customer service complaints.</li>
        <li>Complete account requests for change in services.</li>
    </ul>
    <p>
        <span class="accomplishments">Accomplishments:</span>
    </p>
    <ul class="accomplishments">
        <li>Twice earned customer satisfaction bonus.</li>
    </ul>
</div>
<div class="resumeSidebar"><h3>Education</h3></div>
<div class="resumeMain">
    <p>
        <span class="school">University of Windsor</span>, <span class="date">Jan 2010 – April 2013</span><br />
        Bachelor of Computer Science, General Degree
    </p>
    <p>
        <span class="school">Lambton College of Applied Arts and Technology</span>, <span class="date">Sep 2005 – April 2008</span><br />
        Internet Application Developer Diploma
    </p>
    <p>
        <span class="school">St. Clair Secondary School</span>, <span class="date">Sep 2001 – June 2005</span><br />
        Ontario Secondary School Diploma
    </p>
</div>


<div class="resumeSidebar"><h3>Examples</h3></div>
<div class="resumeMain">
    <ul class="qual">
        <li><a href="http://dhamilton.codes">http://dhamilton.codes</a></li>
        <li><a href="https://github.com/derekhamilton">https://github.com/derekhamilton</a></li>
    </ul>
</div>
@endsection
