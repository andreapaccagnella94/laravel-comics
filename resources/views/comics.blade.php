@extends('layouts.master')

    @php
        $comics = config("comics");
        // dd($comics);
    @endphp

    @section('titolo')
        Laravel Comics Lista
    @endsection


    @section('contenuto')
        <main>
            <div class="jumbotron">

            </div>
            <div class="container text-center">
                <h1>card fumetto componentizzato</h1>
                <div class="row row-cols-sm-1 row-cols-md-3 row-cols-xl-6 g-3">
                    @foreach ($comics as $comic)

                        <div class="col">
                            {{-- <div class="card h-100">
                                <img src={{$comic["thumb"]}} alt="immagine copertina" class="card-img-top img-fluid">
                                <div class="card-body">
                                    <h3>{{$comic["title"]}}</h3>
                                </div>
                            </div> --}}
                            <x-card>
                                <x-slot:link>{{$comic["thumb"]}}</x-slot>
                                <x-slot:titolo>{{$comic["title"]}}</x-slot>
                                <x-slot:serie>{{$comic["series"]}}</x-slot>
                            </x-card>    
                        </div>
                        
                    @endforeach
                </div>
                <a href="{{route ("home")}}">Torna alla home</a>
            </div>
        </main>
    @endsection