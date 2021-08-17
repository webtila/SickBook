@extends('layouts.app')
@section('content')
    <div>
        <div class="text-center">
            <h3>
               Infamily Records
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
            <a href="/infamily/create" class=" mb-5 rounded-pill btn btn-primary">
                Add Record
            </a>
        </div>
    @endif    
   
        <div class="container-fluid row">
           
             
           <table class="table table-hover table-responsive table-bordered text-center container">
              <thead class="bg-primary text-light">
              <tr>
                    <th>Record No</th>
                    <th>Patient Name</th>
                    <th>DOB</th>
                    <th>Address</th>
                    <th>Mobile Number</th>
                    <th>Citizen Number</th>
                    <th>Computer Code</th>
                    <th>Rank</th>
                    <th>Inservice Staff Name</th>
                    <th>Relation</th>
                    <th>Unit</th>
                    <th>Approved In</th>
                    <th>Registered At</th>
                    <th>Actions</th>
                </tr>
              
              </thead>
              
                @foreach($infamilyrecords as $infamilyrecord)
              <tbody>
              <tr>
                    <th scope="row">{{$infamilyrecord->record_no}}</th>
                    <td>{{$infamilyrecord->pat_name}}</td>
                    <td>{{$infamilyrecord->dob}}</td>
                    <td>{{$infamilyrecord->address}}</td>
                    <td>{{$infamilyrecord->mob_no}}</td>
                    <td>{{$infamilyrecord->ctz_no}}</td>
                    <td>{{$infamilyrecord->comp_code}}</td>
                    <td>{{$infamilyrecord->rank}}</td>
                    <td>{{$infamilyrecord->ins_staff_name}}</td>
                    <td>{{$infamilyrecord->rel}}</td>
                    <td>{{$infamilyrecord->unit}}</td>
                    <td>{{$infamilyrecord->approved_in}}</td>
                    <td>{{$infamilyrecord->updated_at}}</td>
                    @if(isset(Auth::user()->id)&&Auth::user()->id==$infamilyrecord->user_id)
                    <td><a 
                        href="/infamily/{{$infamilyrecord->id}}/edit" class="btn btn-warning">
                        EDIT
                        </a>
                        <span>
                            <form action="/infamily/{{$infamilyrecord->id}}"
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


