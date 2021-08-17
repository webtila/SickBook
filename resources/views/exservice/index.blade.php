@extends('layouts.app')
@section('content')
    <div>
        <div class="text-center">
            <h3>
               ExService Records
            </h3>
        </div>
    </div>
    @if(session()->has('message'))
        <div>
            <div>
                <p class="text-success text-center ">
                    {{session()->get('message')}}
                </p>
            </div>
        </div>
    @endif

    @if (Auth::check())
        <div class="pt-5 container">
            <a href="/exservice/create" class=" mb-5 rounded-pill btn btn-primary">
                Add Record
            </a>
        </div>
    @endif    
   
        <div class="container-fluid row">
           
             
           <table class="table table-hover table-responsive table-bordered text-center container">
              <thead class="bg-primary text-light">
              <tr>
                    <th>Record No</th>
                    <th>Rank</th>
                    <th>EPatient Name</th>
                    <th>Pension</th>
                    <th>Citizen</th>
                    <th>DOB</th>
                    <th>Mobile No</th>
                    <th>Approved In</th>
                    <th>Book Expiry</th>
                    <th>Actions</th>
                </tr>
              
              </thead>
              
                @foreach($exservicerecords as $exservicerecord)
              <tbody>
              <tr>
                    <th scope="row">{{$exservicerecord->record_no}}</th>
                    <td>{{$exservicerecord->rank}}</td>
                    <td>{{$exservicerecord->pat_name}}</td>
                    <td>{{$exservicerecord->pension}}</td>
                    <td>{{$exservicerecord->ctz_no}}</td>
                    <td>{{$exservicerecord->dob}}</td>
                    <td>{{$exservicerecord->mob_no}}</td>
                    <td>{{$exservicerecord->approved_in}}</td>
                    <td>{{$exservicerecord->book_expiry}}</td>
                    @if(isset(Auth::user()->id)&&Auth::user()->id==$exservicerecord->user_id)
                    <td><a 
                        href="/exservice/{{$exservicerecord->id}}/edit" class="btn btn-warning">
                        EDIT
                        </a>
                        <span>
                            <form action="/exservice/{{$exservicerecord->id}}"
                            method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger"
                            type="submit">
                                Delete
                            </button>
                            </form>
                        </span>
                    </td> 
                    @endif
                </tr>
              
              </tbody>
              @endforeach
           </table>
                  
        </div>
     </div>
        <hr>
               
@endsection


