@extends('layouts.app')

@section('page_content')

    
    <div class="container px-0">
        <div class="row no-gutters d-flex">
            <div class="info-books-cnt d-flex flex-wrap col-12 px-0 justify-content-center">

                <div class="copertina-cnt col-3 px-0 mx-2 my-4 d-flex justify-content-center">
                    <img src="{{$book_details['copertina']}}" class="px-0" alt="">
                                                            
                </div>
                <div class="info-cnt col-8 mx-0">
                    <h3 class="titolo">{{ $book_details['titolo'] }} </h3>
                    <p class="autore">{{ $book_details['autore'] }} </p>
                    <p class="pagine"> <span class="info-type">Pag:</span> {{ $book_details['numero_pagine'] }} </p>
                    <p class="trama"> <span class="info-type"></span> {{ $book_details['trama'] }} </p>                         
                </div>  

            </div>
        </div>
    </div>

@endsection