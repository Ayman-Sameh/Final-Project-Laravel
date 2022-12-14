@extends('web.front.master')

@section('title' , 'About Page')

@section('content')

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
          
          @foreach ($about as $abouts)

            <div class="container" data-aos="fade-up" id="{{$abouts->id}}">

              <div class="section-header">
                <h2>About Us</h2>
                <p>Aperiam dolorum et et wuia molestias qui eveniet numquam nihil porro incidunt dolores placeat sunt id nobis omnis tiledo stran delop</p>
              </div>
      
              <div class="row gy-4">
                <div class="col-lg-6">
                  <h3>{{$abouts->title}}</h3>
                  <img src="/uploads/{{$abouts->img}}" class="img-fluid rounded-4 mb-4" alt="">
                  <p>{{$abouts->description}}</p>
                </div>
                <div class="col-lg-6">
                  <div class="content ps-0 ps-lg-5">
                    <p class="fst-italic">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                      magna aliqua.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                      <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                      <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                    <p>
                      Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                      velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                    </p>
      
                    <div class="position-relative mt-4 ratio ratio-4x3 " >
                      <iframe src="/uploads/{{$abouts->video}}" class="rounded-4" ></iframe>
                    </div> 
                  </div>
                </div>
              </div>

              @endforeach

      
            <div class="container">
              <div class="row">
                <div class="col-12 mt-4">
                    <table class="table table-bordered ">

                      @include('web.front.massage')

                        <thead style="background-color: #008374; color:white;">
                            <tr>
                              <th>#</th>
                              <th>Image</th>
                              <th>Video</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($about as $abouts)
                                
                            <tr>
                                <th>{{$loop->iteration}}</th>
                                <td> <img src="/uploads/{{$abouts->img}}"  width="90"> </td>
                                <td> <video src="/uploads/{{$abouts->video}}" width="90"></video> </td>
                                <td>{{$abouts->title}}</td>
                                <td>{{$abouts->description}}</td>
                                <td>
                                    <a href="{{ url('/admin/about/' . $abouts->id . "/edit") }}" style="background-color: #008374; color:white;" class="btn btn-info">Edit</a>
                                </td>          
                                <td>    
                                        <form action="{{url('/admin/about/'. $abouts->id)}}" method="POST">
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
            <div> <a href="{{route('about.create')}}" class="btn col-12 p-2 md-3 mt-3" style="background-color: #008374; color:white;">Add About</a> </div>
            </div>
          </div>
          

            </div>
          </section><!-- End About Us Section -->
    
@endsection