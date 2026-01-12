@php
    $header_menu = config("headerMenu");
    // dd($header_menu);
@endphp
<header>
    <div class="container">
        <img src={{ Vite::asset('resources/img/dc-logo.png')}} alt="Logo" />
        <nav>
            @foreach ($header_menu as $item)
                <a href={{$item["link"]}} class={{ $item["is_active"] ? 'active' : ''}}>{{$item["text"]}}</a>
            @endforeach
        </nav>
        
    </div>
</header>