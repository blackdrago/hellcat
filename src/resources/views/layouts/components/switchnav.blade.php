                <ul class="{{ $baseClass or 'hellcat' }}-switchlist">
                    @foreach($switchList as $switchName)
                    <li class="{{ $baseClass or 'hellcat' }}-switchlist-item">
                        <a href="#switch-{$switchName}" class="{{ $baseClass or 'hellcat' }}-switchlist-link">
                            {{ trans("hellcat::layouts.switch_{$switchName}") }}
                        </a>
                    </li>
                    @endforeach
                </ul>
