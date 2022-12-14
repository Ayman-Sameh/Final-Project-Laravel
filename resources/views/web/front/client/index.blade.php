@extends('web.front.master')

@section('title' , 'Client Page')

@section('content')

<section id="clients" class="clients">

    
        
    <div class="container" data-aos="zoom-out">
     
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
             @foreach ($client as $clients)
          <div class="swiper-slide"><img src="  /uploads/{{$clients->img}}" class="img-fluid" alt=""></div>
           @endforeach
        </div>
      </div>
   
  
 </div>
 </section><!-- End Clients Section -->       
            <div class="container">
              <div class="row">
                <div class="col-12 mt-4">
                    <table class="table table-bordered ">

                      @include('web.front.massage')

                        <thead style="background-color: #008374; color:white;">
                            <tr>
                              <th>#</th>
                              <th>Image</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($client as $clients)
                                
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td> <img src="/uploads/{{$clients->img}}"  width="90"> </td>
                                <td>
                                    <a href="{{url('/admin/clients/'. $clients->id . "/edit")}}" style="background-color: #008374; color:white;" class="btn btn-info">Edit</a>
                                </td>          
                                <td>    
                                        <form action="{{url('/admin/clients/'. $clients->id)}}" method="POST">
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
                  <div> <a href="{{route('clients.create')}}" class="btn col-12 p-2 md-3 mt-3 mb-3" style="background-color: #008374; color:white;">Add Client</a> </div>
             </div>
            </div>
  
         
    
@endsection