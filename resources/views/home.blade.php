@extends('layouts.master')

    @section('titolo')
        Laravel Comics Home
    @endsection


    @section('contenuto')
        <main>
            <div class="container">
                <h1 class="text-center">
                    <a href="{{route ("comics")}}">
                        -> Premi qui per andare a vedere i fumetti <-
                    </a>
                </h1>

            </div>
        </main>
    @endsection