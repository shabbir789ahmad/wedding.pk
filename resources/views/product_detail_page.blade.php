@extends('master.masterpage')
@section('content')

 <div class="about">
 <h2 class="text-center">The Garden House</h2>
  <p class="text-center">The Provencal gardens invite you to their fragrant world, the perfect place where any event can be ...</p>
 <p class="text-center ">
     
          <span class="fa fa-star checked"></span>
         <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
 </p>
 <p class="text-center ">0 Reviews</p>
 </div>

<div class="container-fluid">
  <div class="row">
   <div class="col-md-6 border">
    <div class="imga">
        <img src="{{asset('images/0 (2).jpg')}}" id="bigimg" width="100%" height="80%">
   </div>
   <div class="imgb mt-5">
  <div class="owl-carousel owl-theme">
    
    <div class="item active border">
     <img src="{{asset('images/0 (4).jpg')}}"  >
    </div>
    <div class="item border ">
     <img src="{{asset('images/0 (4).jpg')}}"  >
    </div>
    <div class="item border">
     <img src="{{asset('images/0 (4).jpg')}}" >
    </div>
</div>
</div>
   </div>
   <div class="col-md-6 detail">
       <h2>DESCRIPTION</h2>
       <p>The Provencal gardens invite you to their fragrant world, the perfect place where any event can be transformed from dream into reality. This unconventional event hall combines the comfort and elegance offered by a ballroom with the charm of a flower garden.
      
      <br>

Created, step by step, with romance in mind, the Maison des Jardins park is specially designed to offer lovers the ideal setting for their event. Just a few minutes from Bucharest, the French gardens are accompanied by a majestic salon, a true homage to flowers.
       </p>

       <h5 class="mt-3">SERVICES OFFERED</h5>
       <p>Restuarent</p>
       <h5 class="mt-3">ADDRESS</h5>
       <p>Main Umt Road, joherTown, Lahore</p>
       <h5 class="mt-3">ESTIMATED PRICES PER HEAD</h5>
       <p class="">Rs:100 - to Rs:120 <span class="text-danger ml-3  ">price can be renegotiated</span></p>

       <ul class="list-unstyled">
           <li class="list-inline-item">
               <a href="">
           <button class="btn btn-primary btn-block btn-lg">Book Now</button>
    </a>
           </li>
           <li class="list-inline-item">
               <a href="">
         <button class="btn btn-danger btn-block btn-lg">Write Review</button>
    </a>
           </li>
       </ul>
    
     
   </div>
  </div>
</div>
 
            
<div class="container-fluid bg-light" >
  <h2 class="font-weight-bold ml-3 mt-5 mb-5">Most Relevent Vendors</h2>
  <div class="owl-carousel owl-theme">
    
    <div class="item active">
      
  
   <div class="a">
      <img src="{{asset('images/0 (2).jpg')}}" class="card-img shadow 2" alt="..." >
   </div>
        <h5 class="card-title"></h5>
        <p class="card-text text"><a href="#">lahore</a>  |  <a href="#" >islamabad</a><br><a href="allvendors">More</a></p>

    </div>
    <div class="item ">
     
     <div class="a">
      <a href="login">
      <img src="{{asset('images/0 (3).jpg')}}" class="card-img shadow 2"id="imgs" alt="..." >
    </a>

     <p class=" text mt-3"><a href="#">Madas wedding photographer</a>   </p>
   </div>
       
       

    </div>
</div>
    
</div>



@endsection