<!doctype html>
<html lang="en-US" dir="ltr">
<head>
    <title>@yield ('title') - Derek Hamilton</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
    <meta name="Keywords" content="derek hamilton, web developer, php, mysql, c#, .net, jsp, mssql, css, javascript, jquery"></meta>
    <meta name="Description" content="A web developer through and through"></meta>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=1"></meta>
    @yield ('meta')

    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{!! route('css') !!}/app.css">

    @yield ('styles')
    @yield ('scripts')
</head>

<body>
    <header>
        <h1><a href="{!! route('home') !!}"><span class="derek">Derek</span> <span class="hamilton">Hamilton</span></a></h1>
    </header>
    <nav>
        <ul>
            <li><a href="{!! route('home') !!}">Home</a></li>
            <li><a href="{!! route('resume') !!}">Resume</a></li>
        </ul>
    </nav>
    <main>
        @yield ('content')
    </main>
    <footer>
        <ul>
            <li>&#55;&#56;&#49;&#46;&#56;&#48;&#48;&#46;&#50;&#51;&#56;&#55;</li>
            <li>&bull; &#100;&#101;&#114;&#101;&#107;&#64;&#100;&#104;&#97;&#109;&#105;&#108;&#116;&#111;&#110;&#46;&#99;&#111;&#100;&#101;&#115;</li>
        </ul>
    </footer>
</body>
</html>
