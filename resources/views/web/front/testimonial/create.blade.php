@extends('web.front.master')

@section('title' , 'Add Testimonials')

@section('content')


<section id="services" class="services sections-bg">
    <div class="container " data-aos="fade-up">
        <form action="{{route('testimonials.store')}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @include('web.front.massage')
    
          <div class="form-group p-2">
            <label for="img">Testimonial Image</label>
            <input type="file" class="form-control" name="img" id="img">
          </div>  
          <div class="form-group p-2">
            <label for="title">Name</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter testimonial Name">
          </div>
            <div class="form-group p-2">
            <label for="title">Testimonial Position</label>
            <input type="text" class="form-control" name="position" id="position" placeholder="Enter testimonial Title">
          </div>
          <div class="form-group p-2">
            <label for="description">Description</label>
            <textarea ype="text" class="form-control" name="description" id="description" placeholder="Enter testimonial Description" rows="10"></textarea>
          </div>
          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Add Testimonials</button>
        </form>
    </div>
</section>        
    
@endsection