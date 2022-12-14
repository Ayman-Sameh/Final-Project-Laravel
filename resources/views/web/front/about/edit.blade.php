@extends('web.front.master')

@section('title' , 'Edit About')

@section('content')


<section id="about" class="about sections-bg">
    <div class="container " data-aos="fade-up">
        <form  method="POST" action="{{url('/admin/about/ ' . $about->id )}}">
            
            @csrf
            @method('PUT')
            @include('web.front.massage')

            <div class="form-group p-2">
                <label for="title">About Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{$about->title}}">
              </div>
              <div class="form-group p-2">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" id="description" rows="3">{{$about->description}}</textarea>
              </div>
              <div class="form-group p-2">
                <label for="video"> About <b>video</b></label>
                <input type="file" class="form-control" name="video" id="video" value="{{$about->video}}">
              </div>
              <div class="form-group p-2">
                <label for="img">About <b>Image</b> </label>
                <input type="file" class="form-control" name="img" id="img" value="{{$about->img}}">
              </div>
              <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Edit About</button>
        </form>
    </div>
</section>        
    
@endsection