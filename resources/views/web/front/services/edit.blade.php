@extends('web.front.master')

@section('title' , 'Edit Service')

@section('content')


<section id="services" class="services sections-bg">
    <div class="container " data-aos="fade-up">
        <form action="{{url('/admin/services/' . $service->id )}}" method="POST" >
            
            @csrf
            @method('PUT')
            @include('web.front.massage')

            <div class="form-group p-2">
            <label for="title">Service Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$service->title}}">
          </div>
          <div class="form-group p-2">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description"  value="{{$service->description}}">
          </div>
          <div class="form-group p-2">
            <label for="img">Service Image</label>
            <input type="file" class="form-control" name="img" id="img" value="">
          </div>
          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Edit Service</button>
        </form>
    </div>
</section>        
    
@endsection