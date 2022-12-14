@extends('web.front.master')

@section('title' , 'Portfolio Page')

@section('content')

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-header">
                <h2>Portfolio</h2>
                <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
              </div>
              <div> <a href="{{route('categories.index')}}" class="btn col-12 p-2 md-3 mt-3 mb-5" style="background-color: #008374; color:white;">Categories</a> </div>
              <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
      
                <div>
                  <ul class="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    @foreach($category as $categories)
                    <li data-filter="">{{$categories->name}}</li>
                    @endforeach
                  </ul><!-- End Portfolio Filters -->
                </div>
      
                <div class="row gy-4 portfolio-container">

                   @foreach($portfolio as $portfolios)

                  <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                      <a href="/uploads/{{$portfolios->img}}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="/uploads/{{$portfolios->img}}" class="img-fluid" alt=""></a>
                      <div class="portfolio-info">
                        <h4><a href="portfolio-details.html" title="More Details">{{$portfolios->name}}</a></h4>
                        <p>{{$portfolios->description}}</p>
                      </div>
                    </div>
                  </div><!-- End Portfolio Item -->

                  @endforeach
      
                </div><!-- End Portfolio Container -->
      
              </div>
      
            </div>
          </section><!-- End Portfolio Section -->   
          
          <div class="container">
            <div class="row">
              <div class="col-12 mt-4">
                  <table class="table table-bordered ">

                    @include('web.front.massage')

                      <thead style="background-color: #008374; color:white;">
                          <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Portfolio Name</th>
                            <th>Description</th>
                            <th>Category Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($portfolio as $portfolios)
                              
                          <tr>
                              <th>{{$loop->iteration}}</th>
                              <td><img src="/uploads/{{$portfolios->img}}" width="90"></td>
                              <td>{{$portfolios->name}}</td>
                              <td>{{$portfolios->description}}</td>
                              <td>{{$portfolios->category->name}}</td>
                              <td>
                                  <a href="{{url('/admin/portfolio/'. $portfolios->id . "/edit")}}" style="background-color: #008374; color:white;" class="btn btn-info">Edit</a>
                              </td>          
                              <td>    
                                      <form action="{{url('/admin/portfolio/'. $portfolios->id)}}" method="POST">
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
              <div> <a href="{{route('portfolio.create')}}" class="btn col-12 p-2 md-3 mt-3 mb-5" style="background-color: #008374; color:white;">Add Portfolio</a> </div>
           </div>
          </div>
          

     
@endsection      