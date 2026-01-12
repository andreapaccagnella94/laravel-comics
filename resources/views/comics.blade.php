@extends('layouts.master')

    @php
        $comics = config("comics");
        dd($comics);
    @endphp

    @section('titolo')
        Laravel Comics Lista
    @endsection


    @section('contenuto')
        <main>
            <div class="container text-center">
                <h1>devo ancora aggiungere la lista di fumetti</h1>
                <a href="{{route ("home")}}">Torna alla home</a>
            </div>
        </main>
    @endsection