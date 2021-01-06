<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>

        @foreach($breadcrumbs as $breadcrumb)
            @if(is_array($breadcrumb))
                <li class="breadcrumb-item"><a href="{{route($breadcrumb['route'], (key_exists('parameter', $breadcrumb)) ? $breadcrumb['parameter'] : [])}}">{{$breadcrumb['title']}}</a></li>
            @else
                <li class="breadcrumb-item"><a href="{{route($breadcrumbs['route'])}}">{{$breadcrumbs['title']}}</a></li>
                @break
            @endif
        @endforeach

    </ol>
</nav>
