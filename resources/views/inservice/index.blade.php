@extends('layouts.app')
@section('content')
    <div>
        <div class="text-center">
            <h3>
               Inservie Records
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
            <a href="/inservice/create" class=" mb-5 rounded-pill btn btn-primary">
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
                    <th>Patient Name</th>
                    <th>Computer Code</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                    <th>Unit</th>
                    <th>Approved In</th>
                    <th>Registered At</th>
                    <th>Actions</th>
                </tr>
              
              </thead>
              
                @foreach($inservicerecords as $inservicerecord)
              <tbody>
              <tr>
                    <th scope="row">{{$inservicerecord->record_no}}</th>
                    <td>{{$inservicerecord->rank}}</td>
                    <td>{{$inservicerecord->pat_name}}</td>
                    <td>{{$inservicerecord->comp_code}}</td>
                    <td>{{$inservicerecord->dob}}</td>
                    <td>{{$inservicerecord->address}}</td>
                    <td>{{$inservicerecord->mob_no}}</td>
                    <td>{{$inservicerecord->unit}}</td>
                    <td>{{$inservicerecord->approved_in}}</td>
                    <td>{{$inservicerecord->updated_at}}</td>
                    @if(isset(Auth::user()->id)&&Auth::user()->id==$inservicerecord->user_id)
                    <td><a 
                        href="/inservice/{{$inservicerecord->id}}/edit" class="btn btn-warning">
                        EDIT
                        </a>
                        <span>
                            <form action="/inservice/{{$inservicerecord->id}}"
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


