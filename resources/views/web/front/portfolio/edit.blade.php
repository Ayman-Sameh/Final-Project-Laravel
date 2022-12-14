@extends('web.front.master')

@section('title' , 'Edit Portfolio')

@section('content')


<section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
        <form action="{{url('/admin/portfolio/' . $portfolio->id)}}" method="POST" enctype="multipart/form-data">
            
            @csrf
            @method('PUT')
            @include('web.front.massage')
    
          <div class="form-group p-2">
            <label for="img">Portfolio Image</label>
            <input type="file" class="form-control" name="img" id="img">
          </div>  
          <div class="form-group p-2">
            <label for="name">Portfolio Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter portfolio Name" value="{{$portfolio->name}}">
          <div class="form-group p-2">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter portfolio Description" rows="5">{{$portfolio->description}}</textarea>
          </div>
          <div class="form-group p-2">
            <label for="category_id">Category Name</label>
            <select class="form-control" name="category_id" id="category_id">
               @foreach($category as $categories)
              <option value="{{$categories->id}}" @if($portfolio->category_id  == $categories->id) selected @endif>{{$categories->name}}</option>
               @endforeach
            </select>
          </div>  
          <button type="submit" class="btn p-2 col-5 mt-2" style="background-color: #008374; color:white; ">Add Portfolio</button>
        </form>
    </div>
</section>        
    
@endsection