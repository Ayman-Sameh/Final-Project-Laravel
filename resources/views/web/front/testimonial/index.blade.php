@extends('web.front.master')

@section('title' , 'Testimonials Page')
    
@section('content')
        
            <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <h2>Testimonials</h2>
            <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
          </div>
         
                            
         
          <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100"> 
            <div class="swiper-wrapper">

              @foreach ($testimoials as $testimonials)

               <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <div class="d-flex align-items-center">
                      <img src="/uploads/{{$testimonials->img}}" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>{{$testimonials->title}}</h3>
                        <h4>{{$testimonials->position}}</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <p>{{$testimonials->description}}</p>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              
              @endforeach

  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Testimonials Section -->
                

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
                                  <th>Position</th>
                                  <th>Description</th>
                                  <th>Edit</th>
                                  <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimoials as $testimonials)
                                    
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td> <img src="/uploads/{{$testimonials->img}}"  width="90"> </td>
                                    <td>{{$testimonials->title}}</td>
                                    <td>{{$testimonials->position}}</td>
                                    <td>{{$testimonials->description}}</td>
                                    <td>
                                        <a href="{{url('/admin/testimonials/' . $testimonials->id) . "/edit"}}" style="background-color: #008374; color:white;" class="btn btn-info">Edit</a>
                                    </td>            
                                    <td>    
                                            <form action="{{url('/admin/testimonials/' . $testimonials->id) }}" method="POST">
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
                    <div> <a href="{{route('testimonials.create')}}" class="btn col-12 p-2 md-3 mb-3" style="background-color: #008374; color:white;">Add Testimonials</a> </div>
                </div>

              

            </div>
          </section><!-- End Our Services Section -->

@endsection