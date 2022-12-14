@extends('web.front.master')

@section('title' , 'Add Team')

@section('content')

<section id="team" class="team">
    <div class="container" data-aos="fade-up">
        <form action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @include('web.front.massage')
    
          <div class="form-group p-2">
            <label for="img">Team Image</label>
            <input type="file" class="form-control" name="img" id="img">
          </div>  
          <div class="form-group p-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Team Name">
          <div class="form-group p-2">
            <label for="position">Position</label>
            <input type="text" class="form-control" name="position" id="position" placeholder="Enter Team position">
          </div>
          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Add Team</button>
        </form>
    </div>
</section>        

@endsection