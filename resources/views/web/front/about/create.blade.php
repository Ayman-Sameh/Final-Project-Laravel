@extends('web.front.master')

@section('title' , 'Add About')

@section('content')


<section id="services" class="services sections-bg">
    <div class="container " data-aos="fade-up">
        <form action="{{route('about.store')}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @include('web.front.massage')

            <div class="form-group p-2">
            <label for="title">About Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter About Title">
          </div>
          <div class="form-group p-2">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" id="description" rows="3" placeholder="Enter About Description"></textarea>
          </div>
          <div class="form-group p-2">
            <label for="video"> About <b>video</b></label>
            <input type="file" class="form-control" name="video" id="video">
          </div>
          <div class="form-group p-2">
            <label for="img">About <b>Image</b></label>
            <input type="file" class="form-control" name="img" id="img">
          </div>
          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Add About</button>
        </form>
    </div>
</section>        
    
@endsection