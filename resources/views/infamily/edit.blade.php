@extends('layouts.app')
@section('content')
    <div>
        <div>
            <a href="/inservice">
                <h1 class="text-center pb-1">Edit Infamily Records</h1>
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
            action="/infamily/{{$infamilyrecord->id}}"
            method="POST"
            enctype="multipart/form-data"
            class="col-sm-12">
        @csrf
        @method('PUT')

        <div class="card">
    
            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Record Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="record_no" class="form-control" value="{{$infamilyrecord->record_no}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Patient Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="pat_name" class="form-control" value="{{$infamilyrecord->pat_name}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date of Birth</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="dob" class="form-control" value="{{$infamilyrecord->dob}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="address" class="form-control" value="{{$infamilyrecord->address}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="mob_no" class="form-control" value="{{$infamilyrecord->mob_no}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Citizenship Number</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="number" name="ctz_no" class="form-control" value="{{$infamilyrecord->ctz_no}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Computer Code</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="number" name="comp_code" class="form-control" value="{{$infamilyrecord->comp_code}}">
                                    </div>
                                </div>  <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Rank</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <!-- <input type="number" name="rank" class="form-control" value="{{$infamilyrecord->rank}}"> -->
                                        <select name="rank">
                                            <option value="{{$infamilyrecord->rank}}">{{$infamilyrecord->rank}}</option>
                                            <option value="IGP">IGP</option>
                                            <option value="AIGP">AIGP</option>
                                            <option value="DIGP">DIGP</option>
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
                                        <h6 class="mb-0">Inservive Staff Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="number" name="ins_staff_name" class="form-control" value="{{$infamilyrecord->ins_staff_name}}">
                                    </div>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                        <!-- <input type="number" name="rank" class="form-control" placeholder="IGP"> -->
                                        <select name="rel" >
                                            <option value="{{$infamilyrecord->rel}}">{{$infamilyrecord->rel}}</option>
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
                                        <h6 class="mb-0">Unit</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="unit" class="form-control" value="{{$infamilyrecord->unit}}">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Approved In</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" name="approved_in" class="form-control" value="{{$infamilyrecord->approved_in}}">
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