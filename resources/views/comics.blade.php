@extends('layouts.master')

    {{-- non passo qua le informazioni dei fumetti ma direttamente sulla rotta
    @php
        $comics = config("comics");
        // dd($comics);
    @endphp 
    --}}

    @section('titolo')
        Laravel Comics Lista
    @endsection


    @section('contenuto')

            @include('partials.jumbotron')

            <div class="container">
                {{-- <h1 class="text-center">card fumetto componentizzato</h1>
                ora migliorato il codice
                --}}
                <h2 class="section-title">Fumetti correnti</h2>
                <div class="row row-cols-sm-1 row-cols-md-3 row-cols-xl-6 g-3">
                    {{-- <div class="card h-100">
                        <img src={{$comic["thumb"]}} alt="immagine copertina" class="card-img-top img-fluid">
                        <div class="card-body">
                            <h3>{{$comic["title"]}}</h3>
                        </div>
                    </div> --}}
                    @foreach ($comics as $comic)
                        {{-- @dd($comic) è un array--}}
                        
                        <x-card :fumetto="$comic"/>
                   
                    @endforeach
                    {{-- se ci passiamo al componente i dati --}}
                    {{-- <x-slot:link>{{$comic["thumb"]}}</x-slot> --}}
                    {{-- <x-slot:titolo>{{$comic["title"]}}</x-slot> --}}
                    {{-- <x-slot:serie>{{$comic["series"]}}</x-slot> --}}
                </div>
                <a href="{{route ("home")}}">Torna alla home</a>
            </div>
        
    @endsection