@extends('master.masterpage')
@section('content')

 <div class="about" >
  <div class="row">
    <div class="col-md-1">
      <div class="box">
        
      </div>
      
    </div>
    <div class="col-md-11" >
<h2 class="text-center">Contact Us</h2>
  <p class="text-center">Your experience on the platform is important to us.</p>
 <p class="text-center "><a class="text-dark" href="home">The home</a>/<a class="text-dark" href="about"> About us</a></p>
    </div>
  </div>
 
 </div>

 <div class="About2 mt-5" style="overflow: hidden;">
   <div class="row" style="overflow: hidden;">
   	<div class="col-md-6">
      <div class="text ml-5">
  
<p  class="ml-2">The quality of services is very important to us. Contact us for any difficulties you encounter using the platform and we will get back to you with a solution as soon as possible.</p>

  
     <ul class="list-unstyled">
        <li class="list-inline-item d-flex">
            <i class="fas fa-user-alt ml-3 fa-2x"> </i>
            <p class="ml-3 phone ">00447848006947</p>
        </li>
        <br>
        <li class="list-inline-item d-flex mt-3">
            <i class="far fa-envelope ml-3 fa-2x"></i>
            <p class="ml-3 phone ">abdullah.mazhar@yahoo.com</p>
        </li>
        <li class="list-inline-item d-flex mt-4">
            <i class="fas fa-globe-europe ml-3 fa-2x"></i>
            <p class="ml-3 phone ">testemail345@gmail.com</p>
        </li>
        <li class="list-inline-item d-flex mt-4">
        <img src="{{asset('images/icons8-facebook-64.png')}}" width="10%">
            <p class="ml-1 mt-3 facebook "><a href="">You can also find us on facebook</a></p>
        </li>

     <li class="list-inline-item mt-4 d-flex">
        <img src="{{asset('images/icons8-instagram-48.png')}}" width="10%">
            <p class="ml-1 mt-3 facebook "><a href="">You can also find us on Instagram</a></p>
        </li>
       
     </ul>

    </div>
   	</div>
   	<div class="col-md-5" >
 
   <form>
     <input type="text" name="name"placeholder="  Name" class="input shadow mt-4 py-2 pt-4">

       <input type="text" name="phone " placeholder="  Phone" class="input shadow mt-4 py-2 pt-4">

        <input type="text" name="email" placeholder="  Email" class="input shadow mt-4 py-2 pt-4">
         

         <textarea class="shadow p-2 mt-4 pt-4 textarea" placeholder="    Message">
             
         </textarea>

         <input type="checkbox" class="check mt-4 pt-4" name="">
        <span>
I have read and agree to the<a href="" class="text-dark"> Privacy Policy</a> .</span>
<br>
   <button class="btn btn-primary buttoncontact mt-5 mb-5">Send The Form</button>
   </form>

   	</div>

   </div>

 </div>

@endsection