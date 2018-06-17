
<div id=" {{ $book['id'] }} " class="edit-form-cnt hide">

    <form action=" {{ route('update_info') }} " method="post">
        {{ csrf_field() }}
        <input type="text" name="title_edited" id="" value=" {{ $book['titolo'] }} ">
        <input type="text" name="author_edited" id="" value=" {{ $book['autore'] }} ">
        <input type="text" name="page_edited" id="" value=" {{ $book['numero_pagine'] }} ">
        <button type="submit" name="book_id" value=" {{ $book['id'] }} ">Update</button>
        
    </form>
    <button class="close-edit-form">X</button>
</div>