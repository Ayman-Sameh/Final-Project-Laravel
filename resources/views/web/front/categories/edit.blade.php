@extends('web.front.master')

@section('title' , 'Edit Category')

@section('content')

<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">

        <form action="{{url('/admin/categories/' . $category->id)}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            @include('web.front.massage')

          <div class="form-group p-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}">
          </div>

          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Edit Category</button>
        </form>

    </div>
</section>            

@endsection