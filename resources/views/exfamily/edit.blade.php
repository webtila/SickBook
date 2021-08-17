@extends('layouts.app')
@section('content')
    <div>
        <div>
            <a href="/inservice">
                <h1 class="text-center pb-1">Edit Exfamily Records</h1>
            </a>
        </div>
    </div>
    @if($errors->any())
        <div class="mx-auto text-center">
            <ul class="list-inline">
                @foreach(@$errors->all() as $error)
                    <li class="py-4 text-danger list-inline-item">
                        {{$error}}
                    </li>
                 @endforeach   
            </ul>
        </div>
    @endif

    <div class="container text-center ">
        <form 
            action="/exfamily"
            method="POST"
            enctype="multipart/form-data"
            class="col-sm-12">
        @csrf
       
        <div class="card">
    
            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Record Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="record_no" class="form-control" value="{{$exfamilyrecord->record_no}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Patient Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="pat_name" class="form-control" value="{{$exfamilyrecord->pat_name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date of Birth</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="dob" class="form-control" value="{{$exfamilyrecord->dob}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Citizenship Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="number" name="ctz_no" class="form-control" value="{{$exfamilyrecord->ctz_no}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Approved In</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="approved_in" class="form-control" value="{{$exfamilyrecord->approved_in}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="mob_no" class="form-control" value="{{$exfamilyrecord->mob_no}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Relation</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <!-- <input type="number" name="rank" class="form-control" placeholder="IGP"> -->
                                        <select name="rel" >
                                            <option value="{{$exfamilyrecord->rel}}">{{$exfamilyrecord->rel}}</option>
                                            <option value="SELF">SELF</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Father">Father</option>
                                            <option value="Wife">Wife</option>
                                            <option value="Husband">Husband</option>
                                            <option value="Son">Son</option>
                                            <option value="Daughter">Daughter</option>
                                         </select>
                                    </div>
                                </div>
                               
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Rank</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <!-- <input type="number" name="rank" class="form-control" placeholder="IGP"> -->
                                        <select name="rank" >
                                            <option value="{{$exfamilyrecord->rank}}">{{$exfamilyrecord->rank}}</option>
                                            <option value="IGP">IGP</option>
                                            <option value="AIG">AIG</option>
                                            <option value="DIG">DIG</option>
                                            <option value="SSP">SSP</option>
                                            <option value="SP">SP</option>
                                            <option value="DySP">DySP</option>
                                            <option value="Insp">Insp</option>
                                            <option value="SI">SI</option>
                                            <option value="ASI">ASI</option>
                                            <option value="HC">HC</option>
                                            <option value="PC">PC</option>
                                            <option value="Followers">Followers</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Ex Staff Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="ex_staff_name" class="form-control" value="{{$exfamilyrecord->ex_staff_name}}">
                                    </div>
                                </div>
                               
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Pension</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="pension" class="form-control" value="{{$exfamilyrecord->pension}}">
                                    </div>
                                </div>
                               
                                
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Book Expire</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="book_expiry" class="form-control" value="{{$exfamilyrecord->book_expiry}}">
                                    </div>
                                </div>
                                <div class="button-group" role="group">
                                
                                        <button
                                            type="submit"
                                            class="btn btn-success px-4">
                                                Update
                                        </button>
                                
                                                                
                            </div>

                        </div>
                    </div>
              

                    
        </form>
    </div>
@endsection