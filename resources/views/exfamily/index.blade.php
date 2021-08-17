@extends('layouts.app')
@section('content')
    <div>
        <div class="text-center">
            <h3>
               Exfamily Records
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
            <a href="/exfamily/create" class=" mb-5 rounded-pill btn btn-primary">
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
                    <th>Citizen No</th>
                    <th>Mobile </th>
                    <th>Approved In</th>
                    <th>Relation</th>
                    <th>Rank</th>
                    <th>Ex Staff Name</th>
                    <th>Pension</th>
                    <th>Book Expiry</th>
                    <th>Actions</th>
                </tr>
              
              </thead>
              
                @foreach($exfamilyrecords as $exfamilyrecord)
              <tbody>
              <tr>
                    <th scope="row">{{$exfamilyrecord->record_no}}</th>
                    <td>{{$exfamilyrecord->pat_name}}</td>
                    <td>{{$exfamilyrecord->dob}}</td>
                    <td>{{$exfamilyrecord->ctz_no}}</td>
                    <td>{{$exfamilyrecord->ctz_no}}</td>
                    <td>{{$exfamilyrecord->mob_no}}</td>
                    <td>{{$exfamilyrecord->approved_in}}</td>
                    <td>{{$exfamilyrecord->rel}}</td>
                    <td>{{$exfamilyrecord->ex_staff_name}}</td>
                    <td>{{$exfamilyrecord->pension}}</td>
                    <td>{{$exfamilyrecord->book_expiry}}</td>
                    @if(isset(Auth::user()->id)&&Auth::user()->id==$exfamilyrecord->user_id)
                    <td><a 
                        href="/exfamily/{{$exfamilyrecord->id}}/edit" class="btn btn-warning">
                        EDIT
                        </a>
                        <span>
                            <form action="/exfamily/{{$exfamilyrecord->id}}"
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


