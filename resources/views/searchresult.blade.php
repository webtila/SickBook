@extends('layouts.app')
@section('content')
    <div class="  container-fluid  text-center mx-auto pt-1 col-sm-8">
        <!-- <div class="pt-5">

            <div class="pt-5 block container-fluid m-auto text-center"style="width:600px;">
                <h1 class=" text-primary bg-white"> Nepal Police Hospital</h1>
                <h2 class="pt-2 text-white bg-dark"> Sick Book Record</h2>
                <a href="/blog" class="btn btn-primary">Find More About this department</a>
            </div>

        </div> -->

       <div>
        <div></div>
           <a href="https://www.nepalpolice.gov.np">
              <img src="{{asset('img/policelogo.png')}}" class="" style="height:100px; width:100px;" alt="">   
           </a>
          <span class="text-primary display-4"> Nepal Police Hospital</span>
           <a href="https://www.nph.nepalpolice.gov.np">
              <img src="{{asset('img/nphlogo.jpg')}}" class="" style="height:80px; width:80px;" alt="">
           </a>
               <h3 class="text-dark"> Sick Book Record</h3>      
            
       </div>
        <hr>  
        <div class="col-md-12 ">
          @include('layouts.search')
              
        </div>
        <hr>
        <div>
        @if($records->isEmpty())
                  <p> No Record Found </p>
                  @else
        
          <table border="1">
          @foreach($records as $res)
          <tr>
                  <td>Id</td>
                  <td>Rank</td>
                  @if(!empty($res->comp_code))
                  <td>Comp Code</td>
                  @endif
                 
              </tr>
              <tr>
                 
                  
                  <td>{{$res->id}}</td>
                  <td>{{$res->rank}}</td>
                  @if(!empty($res->comp_code))
                    <td>{{$res->comp_code}}</td> 
                  @endif
                  @endforeach
                  @endif
                  
              </tr>
          </table>
        </div>

 </div>
@endsection