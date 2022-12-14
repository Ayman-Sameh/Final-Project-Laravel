@extends('web.front.master')

@section('title' , 'Add Service')

@section('content')


<section id="services" class="services sections-bg">
    <div class="container " data-aos="fade-up">
        <form action="{{route('services.store')}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @include('web.front.massage')

            <div class="form-group p-2">
            <label for="title">Service Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter Service Title">
          </div>
          <div class="form-group p-2">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter Service Description">
          </div>
          <div class="form-group p-2">
            <label for="img">Service Image</label>
            <input type="file" class="form-control" name="img" id="img">
          </div>
          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Add Service</button>
        </form>
    </div>
</section>        
    
@endsection