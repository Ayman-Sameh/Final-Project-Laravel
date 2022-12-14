@extends('web.front.master')

@section('title' , 'Contact Page')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <table class="table table-bordered ">

              @include('web.front.massage')

                <thead style="background-color: #008374; color:white;">
                    <tr>
                      <th>#</th>
                      <th>Nmae</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>massage</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $contacts)
                        
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$contacts->name}}</td>
                        <td>{{$contacts->email}}</td>
                        <td>{{$contacts->subject}}</td>
                        <td>{{$contacts->massage}}</td>
                        <td>
                            <a href="{{ url('/admin/contact/' . $contacts->id . "/edit") }}" style="background-color: #008374; color:white;" class="btn btn-info">Edit</a>
                        </td>            
                        <td>    
                                <form action="{{url('/admin/contact/'. $contacts->id)}}" method="POST">
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
          

@endsection