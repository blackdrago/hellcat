            @if (!empty($switchNavTop))
            <nav id="{{ (!empty($switchNavBottom) ? 'switchnavtop' : 'switchnav') }}" class="{{ $baseClass or 'hellcat' }}-switchnav-top" role="switchcontent">
                @include('layouts.components.switchnav')
            </nav>
            @endif
            <article id="switchbox" role="detail" class="{{ $baseClass or 'hellcat' }}-switchbox">
                @foreach($switchList as $switchName)
                <section id="switch-{{ $switchName }}" class="{{ $baseClass or 'hellcat' }}-switch-{{ $switchName }}">
                    @yield("switch-{$switchName}")
                </section>
                @endforeach
            </article>
            @if (!empty($switchNavBottom))
            <nav id="{{ (!empty($switchNavTop) ? 'switchnavbottom' : 'switchnav') }}" class="{{ $baseClass or 'hellcat' }}-switchnav-bottom" role="switchcontent">
                @include('layouts.components.switchnav')
            </nav>
            @endif
