@extends('web.front.master')

@section('title' , 'Add Category')

@section('content')

<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @include('web.front.massage')

          <div class="form-group p-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>

          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Add Category</button>
        </form>

    </div>
</section>            

@endsection