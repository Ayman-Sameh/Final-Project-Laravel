@extends('web.front.master')

@section('title' , 'Team Page')

@section('content')

       <!-- ======= Our Team Section ======= -->
       <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Our Team</h2>
            <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
          </div>
  
          <div class="row gy-4">

            @foreach($team as $teams)
            
            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
              <div class="member">
                <img src="/uploads/{{$teams->img}}" class="img-fluid" alt="">
                <h4>{{$teams->name}}</h4>
                <span>{{$teams->position}}</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div><!-- End Team Member -->

            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Our Team Section -->


      <div class="container">
            <div class="row">
              <div class="col-12 mt-4">
                  <table class="table table-bordered ">

                    @include('web.front.massage')

                      <thead style="background-color: #008374; color:white;">
                          <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>position</th>                            
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($team as $teams)
                
                          <tr>
                              <th>{{$loop->iteration}}</th>
                              <td><img src="/uploads/{{$teams->img}}" width="90"></td>
                              <td>{{$teams->name}}</td>
                              <td>{{$teams->position}}</td>
                              <td>
                                  <a href="{{url('/admin/team/'. $teams->id . "/edit")}}" style="background-color: #008374; color:white;" class="btn btn-info">Edit</a>
                              </td>          
                              <td>    
                                      <form action="{{url('/admin/team/'. $teams->id)}}" method="POST">
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
              <div> <a href="{{route('team.create')}}" class="btn col-12 p-2 md-3 mt-3 mb-5" style="background-color: #008374; color:white;">Add Portfolio</a> </div>
           </div>
          </div>

@endsection