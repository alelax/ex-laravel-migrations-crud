@extends('layouts.app')

@section('page_content')

    
    <div class="container px-0">
        <div class="row no-gutters d-flex">
            <div class="info-books-cnt d-flex flex-wrap col-12 px-0 justify-content-center">

                @foreach ($books_list as $book)
                    <div class="copertina-cnt col-3 px-0 mx-2 my-4 d-flex justify-content-center">
                        <img src="{{$book['copertina']}}" class="px-0" alt="">
                        <div class="info-cnt col-10 mx-0">
                            <h3 class="titolo">{{ $book['titolo'] }} </h3>
                            <p class="autore">{{ $book['autore'] }} </p>
                            <p class="pagine"> <span class="info-type">Pag:</span> {{ $book['numero_pagine'] }} </p>
                            {{-- <p class="trama"> <span class="info-type">Trama:</span> {{ $book['trama'] }} </p> --}}
                            
                            <div class="btns-container col-12 d-flex justify-content-between">
                                <form action="{{ route('book_details') }}" method="post">
                                    {{ csrf_field() }} 
                                    <button type="submit" name="id_book" value="{{ $book['id'] }}">Details</button>
                                </form>
                                
                                <button class="edit-btn" type="submit">Edit</button>
                                
                                <form action="{{ route('delete_book') }}" method="post">
                                    {{ csrf_field() }} 
                                    <button type="submit" name="id_book" value="{{ $book['id'] }}">Delete</button>
                                </form>
                        
                            </div>

                             @include('partials/_edit-form')
                        </div>

                       
                        
                                 
                        
                    </div>
                   
                

                @endforeach


            </div>
        </div>
    </div>

@endsection


@section('additional_js')
    <script type="text/javascript">
        
        $('.edit-btn').click(function() {
            $(this).parent().siblings('.edit-form-cnt').removeClass('hide');            
        });

        $('.close-edit-form').click(function() {
            $(this).parent().addClass('hide');            
        });
        
    </script>
@endsection