@extends('web.front.master')

@section('title' , 'Add Client')

@section('content')


<section id="client" class="client sections-bg">
    <div class="container " data-aos="fade-up">
        <form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @include('web.front.massage')

          <div class="form-group p-2">
            <label for="img">About <b>Image</b></label>
            <input type="file" class="form-control" name="img" id="img">
          </div>

          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Add Client</button>
        </form>
    </div>
</section>        
    
@endsection