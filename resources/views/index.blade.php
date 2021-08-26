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
            <a href="/inservice" 
                class="btn btn-primary  btn-vlg "data-toggle="tooltip" 
                data-placement="top" title="बहालवाला प्रहरी कर्मचारी">Inservice <span class="ml-5 btn text-primary bg-white">{{$ins_count}}</span>  </a>
            
            <a href="/infamily" 
                class="btn btn-secondary  btn-vlg"data-toggle="tooltip"
                data-placement="top"title="बहालवाला प्ररी कर्मचारी परिवार">Infamily <span class="ml-5 btn text-secondary bg-white">{{$inf_count}}</span></a>
            <br><hr>
            <a href="/exservice" 
                class="btn btn-danger  btn-vlg"data-toggle="tooltip" 
                data-placement="top" title="भुतपर्व प्रहरी कर्मचारी">ExService <span class="ml-5 btn text-danger bg-white"> {{$exs_count}}</span></a>
            <a href="/exfamily"
                class="btn btn-warning  btn-vlg"data-toggle="tooltip"
                data-placement="top"title="भुतपुर्व प्रहरी कर्मचारी परिवार">Exfamily <span class="ml-5 btn text-warning bg-dark"> {{$exf_count}}</span></a>
        </div>

 </div>
@endsection