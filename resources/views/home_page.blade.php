@extends('master.masterpage')
@section('content')

<div class=" slider">
 <div id="carouselid" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @foreach($slider as $slide)
    <div class="carousel-item @if($loop->first ) active @endif" style="height:100%; ">

      <img src="{{asset('images/1.jpg')}}" class="w-100 d-block img-fluid" style="height:100%; opacity: 0.5; object-fit: cover;  filter:opacity(63%);">

      <h2 class="event ">      
        <img src="{{asset('images/Event Market 01.png')}} "  width="40%;" height="90%;" class="navbar-brand ">
      </h2>
     

    </div>

    @endforeach
    <div class="input-group search   ">
      <input type="text" class=" searchbar py-3"  >
      <div class="input-group-append">
        <button class=" px-3  searchbtn" type="button">
          <h3>Search </h3>
        </button>
      </div>
    </div>
    <div class="row slidericon">
      <div class="col-md-2  col-sm-2 col-2">
        <img src="{{asset('images/consult.png')}}" width="34%" class="ml-3">

        <h6 class="mt-3">SERVICES</h6>

      </div>
      <div class="col-md-3 col-sm-3 col-3">
        <img src="{{asset('images/conversation.png')}}" width="20%" class="ml-3" >
        <h6 class=" mt-3 ">QUESTION</h6>
      </div>
    </div>
    <div class="row slidericon2 ">
      <div class="col-md-6 col-sm-6 col-6">
       <img src="{{asset('images/handshake.png')}}" width="30%"  class=" ml-4 text-center">
       <h6 class=" mt-2 d-inline-block">Become a supplier
       </h6>
     </div>
     <div class="col-md-6 col-sm-6 col-6">
      <img src="{{asset('images/exit.png')}}" width="20%" class="mt-2 ml-3">
      <h5 class=" mt-3 ">LOG IN</h5>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="#carouselid" role="button" data-slide="prev">
 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselid" role="button" data-slide="next">
 <span class="carousel-control-next-icon" aria-hidden="true"></span>
 <span class="sr-only">Next</span>
</a>
</div>




</div>

<!-- trusted by million-->
<div class="container-fluid mt-5" style="background-color: white;">
  <h2 class="ml-3 mt-5 work">How does it work?  </h2>
  <p class="ml-3 wc">We efficiently connect demand with supply.</p>
  <div class="row mt-5">
    <div class="col-md-4 col-sm-12 col-12">

     <img src="{{asset('images/ceri-o-oferta.svg')}}" width="75%;" class="ml-5 ml-md-5 mt-3 ">

     <h5 class=" mt-5 text-center">
      ASK FOR AN OFFER
    </h5>
    <p class="text-center c">Fill in and send the form. It reaches the right suppliers and prepares a personalized offer for you.</p>

  </div>
  <div class="col-md-4 col-sm-12 col-12">

   <img src="{{asset('images/compari-furnizorii.svg')}}" width="100%;" class="ml-5  mt-3 ">

   <h5 class=" mt-5 text-center">
     COMPARE SUPPLIERS
   </h5>
   <p class="text-center c">Talk to suppliers directly from your account and compare their offers, reviews and portfolio.
   </p>


 </div>

 <div class="col-md-4 col-sm-12 col-12">

   <img src="{{asset('images/alegi-furnizorul-potrivit.svg')}}" width="74%;" class="ml-5 ml-md-5 mt-3 ">

   <h5 class=" mt-5 text-center">
    CHOOSE THE RIGHT SUPPLIER
  </h5>
  <p class="text-center c">Hire the most suitable provider for your event and<br> get in direct contact with it.</p>


</div>


</div>
</div>







<!-- card slider=-->



<div class="container-fluid   mt-5 mb-5" style="background-color:#F5F5F5;" >.
  <h2 class=" work  ml-3  " style="margin-top:5%;">recommendation</h2>
  <p class="wc ml-3">Get inspired by our recommendations.</p>
  <div class="owl-carousel owl-theme">

    <div class="item active">


     <div class="a" style="width:90%">
      <a href="product">
        <img src="{{asset('images/0 (5).jpg')}}" class="card-img shadow 2" alt="..." >
      </a>
    </div>
    <h5 class="card-title"></h5>
    <p class="card-text  text"> <a href="#" class="text-decoration-none "> wedding photographer</a></p>
    <p >Lahore</p>
    <p class="work2"> The Gift Idea comes to your aid with choosing the perfect testimony. What would it be like to get out of the classic pattern of testimonies and offer ...</p>
    <span class=" text-dark">
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star"></span>
      <span class="fa fa-star"></span>
      <p>2 reviews</p>






    </div>
    <div class="item ">

     <div class="a" style="width:90%">
      <a href="product">
        <img src="{{asset('images/0.jpg')}}" class="card-img shadow 2"id="imgs" alt="..." >
      </a>

      <p class=" text mt-3"><a href="#" class="text-decoration-none "> Catering</a>   </p>
      <p >Karachi</p>
      <p class="work2"> The Gift Idea comes to your aid with choosing the perfect testimony. What would it be like to get out of the classic pattern of testimonies and offer ...</p>
      <span class=" text-dark">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <p class="mb-5">2 reviews</p>
      </div>



    </div>
    <div class="item ">

     <div class="a" style="width:90%">
      <a href="product">
        <img src="{{asset('images/0.jpg')}}" class="card-img shadow 2"id="imgs" alt="..." >
      </a>

      <p class=" text mt-3"><a href="#" class="text-decoration-none "> Catering</a>   </p>
      <p >Karachi</p>
      <p class="work2"> The Gift Idea comes to your aid with choosing the perfect testimony. What would it be like to get out of the classic pattern of testimonies and offer ...</p>
      <span class=" text-dark">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <p class="mb-5">2 reviews</p>
      </div>
    </div>
      <div class="item ">

     <div class="a" style="width:90%">
      <a href="product">
        <img src="{{asset('images/0.jpg')}}" class="card-img shadow 2"id="imgs" alt="..." >
      </a>

      <p class=" text mt-3"><a href="#" class="text-decoration-none "> Catering</a>   </p>
      <p >Karachi</p>
      <p class="work2"> The Gift Idea comes to your aid with choosing the perfect testimony. What would it be like to get out of the classic pattern of testimonies and offer ...</p>
      <span class=" text-dark">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <p class="mb-5">2 reviews</p>
      </div>
    </div>
      <div class="item ">

     <div class="a" style="width:90%">
      <a href="product">
        <img src="{{asset('images/0.jpg')}}" class="card-img shadow 2"id="imgs" alt="..." >
      </a>

      <p class=" text mt-3"><a href="#" class="text-decoration-none "> Catering</a>   </p>
      <p >Karachi</p>
      <p class="work2"> The Gift Idea comes to your aid with choosing the perfect testimony. What would it be like to get out of the classic pattern of testimonies and offer ...</p>
      <span class=" text-dark">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <p class="mb-5">2 reviews</p>
      </div>
    </div>
      <div class="item ">

     <div class="a" style="width:90%">
      <a href="product">
        <img src="{{asset('images/0.jpg')}}" class="card-img shadow 2"id="imgs" alt="..." >
      </a>

      <p class=" text mt-3"><a href="#" class="text-decoration-none "> Catering</a>   </p>
      <p >Karachi</p>
      <p class="work2"> The Gift Idea comes to your aid with choosing the perfect testimony. What would it be like to get out of the classic pattern of testimonies and offer ...</p>
      <span class=" text-dark">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <p class="mb-5">2 reviews</p>
      </div>
    </div>
  </div>

</div>




<div class="container-fluid mt-5">
 <h2 class=" ml-3 mt-5 work">Event Service Providers</h2>
 <p class="wc ml-3">You can find everything you need for your event in one place.</p>
 <div class="row">
  <div class="col-md-3  mt-3">
   <div class="b" style="width:90%">
     <a href="services">
       <img src="{{asset('images/download (1).jpg')}}" class="card-img2 shadow  dark" id="imgs" alt="..." >
     </a>

     <h4 class=" text2 mt-3"><a href="#" class="text-decoration-none ">
     RENTAL SPACES</a>   </h4>
     <i class="fas fa-home fa-5x icon"></i>
   </div>
 </div>

 <div class="col-md-3 mt-3">
   <div class="b" style="width:90%">
     <a href="services">
       <img src="{{asset('images/0 (3).jpg')}}" class="card-img2 shadow 2 " id="imgs" alt="..." >
     </a>

     <h4 class=" text2 mt-3"><a href="#" class="text-decoration-none ">
     ASSOCIATION</a>   </h4>
     <i class="fas fa-map-marker-alt fa-5x icon"></i>
   </div>
 </div>
 <div class="col-md-3 mt-3">
   <div class="b" style="width:90%">
     <a href="services">
       <img src="{{asset('images/download (2).jpg')}}" class="card-img2 shadow 2 dark" id="imgs" alt="..." >
     </a>

     <h4 class=" text2 mt-3"><a href="#" class="text-decoration-none ">
     Catering</a>   </h4>
     <i class="fas fa-hamburger fa-5x icon"></i>

   </div>
 </div>
 <div class="col-md-3 mt-3">
   <div class="b" style="width:90%">
     <a href="services">
       <img src="{{asset('images/images.jpg')}}" class="card-img2 shadow 2 dark" id="imgs" alt="..." >
     </a>

     <h4 class=" text2 mt-3"><a href="#" class="text-decoration-none ">
     Decoration</a>   </h4>
     <i class="fas fa-lightbulb fa-5x icon"></i>
   </div>
 </div>
 <div class="col-md-3 mt-3">
   <div class="b" style="width:90%">
     <a href="services">
       <img src="{{asset('images/download (3).jpg')}}" class="card-img2 shadow 2 dark" id="imgs" alt="..." >
     </a>

     <h4 class=" text2 mt-3"><a href="#" class="text-decoration-none ">
     INFRASTRUCTURE</a>   </h4>
     <i class="fas fa-holly-berry fa-5x icon"></i>
   </div>
 </div>
 <div class="col-md-3 mt-3">
   <div class="b" style="width:90%">
     <a href="services">
       <img src="{{asset('images/download (4).jpg')}}" class="card-img2 shadow 2 dark" id="imgs" alt="..." >
     </a>

     <h4 class=" text2 mt-3"><a href="#" class="text-decoration-none ">
     EVENT PROMOTERS</a>   </h4>
     <i class="fas fa-bullhorn fa-5x icon"></i>
   </div>
 </div>
 <div class="col-md-3 mt-3">
   <div class="b" style="width:90%">
     <a href="services">
       <img src="{{asset('images/0 (4).jpg')}}" class="card-img2 shadow 2 dark" id="imgs" alt="..." >
     </a>

     <h4 class=" text2 mt-3"><a href="#" class="text-decoration-none ">
     PRINTING</a>   </h4>
     <i class="fas fa-print fa-5x icon"></i>
   </div>
 </div>
 <div class="col-md-3 mt-3">
   <div class="b" style="width:90%">
     <a href="services">
       <img src="{{asset('images/download (5).jpg')}}" class="card-img2 shadow 2 dark" id="imgs" alt="..." >
     </a>

     <h4 class=" text2 mt-3"><a href="#" class="text-decoration-none ">
     PHOTOGRAPHER</a>   </h4>
     <i class="fas fa-camera fa-5x icon"></i>
   </div>
 </div>

</div>
<a href="services" class="seemore mt-5">
 <p >See All</p>
</a>
</div>

<div class="parall mt-5">

</div>

<div class="reviews mt-5">
  <h2 class="ml-3">What do customers think?  </h2>
  <p class="ml-3">We are happy when our customers reach their goals.</p>

</div>

<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">


     <div class="row">
       <div class="col-md-6 ">
        <div class="message">
         <h2 class="ml-4 mr-4 mt-3">Nargis Abdul</h2>
         <h6 class="ml-4 mr-4 mt-3">Platform user</h6>
         <p class="ml-4 mr-4 mt-3">We found all the suppliers we needed, we are still thinking about which one to choose.
          We really like the process because we can talk directly with the suppliers and we have them all in the same place, it's much easier.
          Prestige Flowers Design
          Prestige Flowers Design
          Service provider
          The events concluded through Event Market were a real success, based on transparency and effectiveness.
          It is the place where you find inspiration and the most useful options you can have in order to organize any type of event.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="message2">
       <img src="{{asset('images/privacy.svg')}}">

     </div>
   </div>
 </div>


</div>
<div class="swiper-slide">

  <div class="row">
   <div class="col-md-6 ">
    <div class="message">
     <h2 class="ml-4 mr-4 mt-3">Nargis Abdul</h2>
     <h6 class="ml-4 mr-4 mt-3">Platform user</h6>
     <p class="ml-4 mr-4 mt-3">We found all the suppliers we needed, we are still thinking about which one to choose.
      We really like the process because we can talk directly with the suppliers and we have them all in the same place, it's much easier.
      Prestige Flowers Design
      Prestige Flowers Design
      Service provider
      The events concluded through Event Market were a real success, based on transparency and effectiveness.
      It is the place where you find inspiration and the most useful options you can have in order to organize any type of event.
    </p>
  </div>
</div>
<div class="col-md-6">
  <div class="message2">
   <img src="{{asset('images/0 (1).jpg')}}" width="65%"; height="67%">

 </div>
</div>
</div>
</div>
<div class="swiper-slide"> 


  <div class="row">
   <div class="col-md-6 ">
    <div class="message">
     <h2 class="ml-4 mr-4 mt-3">Nargis Abdul</h2>
     <h6 class="ml-4 mr-4 mt-3">Platform user</h6>
     <p class="ml-4 mr-4 mt-3">We found all the suppliers we needed, we are still thinking about which one to choose.
      We really like the process because we can talk directly with the suppliers and we have them all in the same place, it's much easier.
      Prestige Flowers Design
      Prestige Flowers Design
      Service provider
      The events concluded through Event Market were a real success, based on transparency and effectiveness.
      It is the place where you find inspiration and the most useful options you can have in order to organize any type of event.
    </p>
  </div>
</div>
<div class="col-md-6">
  <div class="message2">
   <img src="{{asset('images/0 (2).jpg')}}" width="65%"; height="67%">

 </div>
</div>
</div>
</div>


</div>
<!-- Add Pagination -->
<div class="swiper-pagination"></div>

</div>


@endsection


