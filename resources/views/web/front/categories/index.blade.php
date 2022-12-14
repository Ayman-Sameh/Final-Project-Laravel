@extends('web.front.master')

@section('title' , 'Categories Page')

@section('content')
      
            <div class="container">
              <div class="row">
                <div class="col-12 mt-4">
                    <table class="table table-bordered ">

                      @include('web.front.massage')

                        <thead style="background-color: #008374; color:white;">
                            <tr>
                              <th>#</th>
                              <th>Category</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $categories)
                                
                            <tr>
                                
                                <th>{{$loop->iteration}}</th>
                                <td>{{$categories->name}}</td>
                                <td>
                                    <a href="{{url('/admin/categories/'. $categories->id . "/edit")}}" style="background-color: #008374; color:white;" class="btn btn-info">Edit</a>
                                </td>          
                                <td>    
                                        <form action="{{url('/admin/categories/'. $categories->id)}}" method="POST">
                                           @csrf
                                           @method('DELETE')
                                           <button class="btn btn-danger">Delete</button>
                                        </form>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                   </div>
                </div>
                <div> <a href="{{route('categories.create')}}" class="btn col-12 p-2 md-3 mt-3 mb-5" style="background-color: #008374; color:white;">Add Categories</a> </div>
             </div>
            </div>
            
  
         
    
@endsection