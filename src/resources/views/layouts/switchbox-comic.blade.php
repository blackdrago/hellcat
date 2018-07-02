<!DOCTYPE html>
<html lang="{{ $language or config('hellcat.defaultLanguage') }}">
<head>
    <title>{{ $title }}</title>
    @include('hellcat::layouts.components.metadata')
    @include('hellcat::layouts.components.stylesheets')
    @include('hellcat::layouts.components.headscripts')
</head>
<body class="{{ $baseClass or 'hellcat' }}-wrapper">
    @include('hellcat::layouts.components.skipaccess-comic')
    <header id="top" class="{{ $baseClass or 'hellcat' }}-header">
        @yield('header')
    </header>
    <nav id="navigation" role="navigation" class="{{ $baseClass or 'hellcat' }}-navbar">
        @yield('navigation')
    </nav>
    <main id="primary" role="main" class="{{ $baseClass or 'hellcat' }}-main">
        <article id="comic" role="illustration" class="{{ $baseClass or 'hellcat' }}-comic">
            @yield('comic')
        </article>
        <section id="switch" class="{{ $baseClass or 'hellcat' }}-switch">
            @include('hellcat::layouts.components.switchbox')
        </section>
        @yield('content')
    </main>
    <footer id="footer" class="{{ $baseClass or 'hellcat' }}-footer">
        @yield('footer')
    </footer>
    @include('hellcat::layouts.components.bodyscripts')
</body>
</html>
