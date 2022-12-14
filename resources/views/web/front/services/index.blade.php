@extends('web.front.master')

@section('title' , 'Services Page')
    
@section('content')
        
        <!-- ======= Our Services Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
              <div class="section-header">
                <h2>Our Services</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
              </div>
              <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">

              @foreach ($service as $services)
                
                <div class="col-lg-4 col-md-6" id="{{$services->id}}">
                  <div class="service-item  position-relative">
                    <div class="image mb-3">
                      <img src="/uploads/{{$services->img}}"  width="90">
                    </div>
                    <h3>{{$services->title}}</h3>
                    <p>{{$services->description}}</p>
                    <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                  </div>
                </div><!-- End Service Item -->

              @endforeach

                
              </div>



              <div class="container">
                <div class="row">
                    <div class="col-12 mt-4">
                        <table class="table table-bordered ">

                          @include('web.front.massage')

                            <thead style="background-color: #008374; color:white;">
                                <tr>
                                  <th>#</th>
                                  <th>Image</th>
                                  <th>Title</th>
                                  <th>Description</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service as $services)
                                    
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td> <img src="/uploads/{{$services->img}}"  width="90"> </td>
                                    <td>{{$services->title}}</td>
                                    <td>{{$services->description}}</td>
                                    <td>
                                        <a href="{{ url('/admin/services/' . $services->id . "/edit") }}" style="background-color: #008374; color:white;" class="btn btn-info">Edit</a>
                                    </td>            
                                    <td>    
                                            <form action="{{url('/admin/services/'. $services->id)}}" method="POST">
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
              </div>

              <div> <a href="{{route('services.create')}}" class="btn col-12 p-2 md-3" style="background-color: #008374; color:white;">Add Service</a> </div>
      
            </div>
          </section><!-- End Our Services Section -->

@endsection