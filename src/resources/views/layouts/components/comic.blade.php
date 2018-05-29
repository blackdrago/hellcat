        <section id="webcomic" class="{{ $baseClass or 'hellcat' }}-webcomic">
            @if (!empty($comicTopNav))
            <nav id="navcomictop" class="{{ $baseClass or 'hellcat' }}-webcomic-navtop">
                @yield('comicnav')
            </nav>
            @endif
            <article id="comic" role="illustration" class="{{ $baseClass or 'hellcat' }}-comic">
                @yield('comic')
            </article>
            @if (!empty($comicBottomNav))
            <nav id="navcomicbottom" class="{{ $baseClass or 'hellcat' }}-webcomic-navbottom">
                @yield('comicnav')
            </nav>
            @endif
        </section><!--end #webcomic -->
