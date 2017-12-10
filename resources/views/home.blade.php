@extends ('layouts.public')

@section ('title', "Home")

@section ('content')
<h2>Welcome &mdash; my name is Derek Hamilton, and I am a web developer.</h2>

<p>
    I've worked professionally as a full-stack developer for the past {!! date('Y') - 2010 !!} years, and as a hobbiest for just as long before that. That means I've both written JavaScript before jQuery and with React, and PHP before proper OOP support and after 7.2 with full unit testing and partial strict typing support.
</p>
<p>
    This site is available on <a href="#">github</a>, so feel free to give it a look over. Some highlights are that it,
</p>
<ul>
    <li>Is built on Laravel 5.5</li>
    <li>Has comprehensive unit tests</li>
    <li>Actually passes HTML validation</li>
</ul>

<p>
    However delightful this little site may be, my usefulness extends beyond the fundamentals. You'll find my toolset also includes,
</p>
<ul>
    <li>Database design from working daily with databases my entire professional career.</li>
    <li>Project management from spec'ing, designing and building projects from the ground up both individually and as a team.</li>
    <li>Client Relations from being the technical point person on several projects, and experience working in a call center.</li>
</ul>

<p>
    Statistically speaking, I probably don't work for you.  That means you're missing out on a developer who,
</p>
<ul>
    <li>Plans a project before starting</li>
    <li>Knows the difference between XSS and XSRF</li>
    <li>Feels unsettled when the tests are missing</li>
    <li>Will actually make your company better</li>
</ul>
@endsection
