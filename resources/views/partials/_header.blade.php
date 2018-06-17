<div class="container px-0">
    <div class="row no-gutters">
        
        <div class="title-cnt col-4">
            <h1 class="title">My Books</h1>
        </div>
        
        <div class="form-cnt col-8 py-4">
            <form class="d-flex align-items-center col-12" action="{{route('add_book')}} " method="POST">
                <div class="left-side col-4 d-flex flex-wrap">
                    {{ csrf_field() }} 
                    <input class="col-12 my-2 px-1" type="text" name="title" placeholder="Book's Title">
                    <input class="col-12 my-2 px-1" type="text" name="author" placeholder="Book's Author">
                    <input class="col-12 my-2 px-1" type="text" name="page_number" placeholder="Book's page number">
                    <input class="col-12 my-2 px-1" type="text" name="image" placeholder="Book's image">
                </div>
                <div class="left-side col-5">
                   <textarea name="trama" id="" cols="30" rows="9" placeholder="Book's trama"></textarea>
                </div>
                <div class="add-btn-cnt col-3">
                    <button type="submit">Add book</button>
                </div>
            </form>
        </div>

    </div>
</div>