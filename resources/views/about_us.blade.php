@extends('master.masterpage')
@section('content')


 <div class="about">
  <div class="row">
    <div class="col-md-1">
      <div class="box">
         
      </div>
      
    </div>
    <div class="col-md-11">
<h2 class="text-center">About Us</h2>
  <p class="text-center">Our vision for Tulipr is to become the most useful platform in organizing events.</p>
 <p class="text-center "><a class="text-dark" href="home">The home</a>/<a class="text-dark" href="about"> About us</a></p>
    </div>
  </div>
 
 </div>



 <div class="About2 mt-5" style="overflow: hidden;">
   <div class="row">
   	<div class="col-md-6">
      <div class="text ml-1" style="margin-top: 5%;">
   <h5 class="ml-4"> WE LIKE MEMORABLE AND UNIQUE EVENTS</h5>
<p  class="ml-4">We create a space where Event Managers can find resources and inspiration for cultural events, festivals, concerts, launches or international conferences.</p>
<p  class="ml-4">
We want Event Planners to become our partners. We leave creativity to them, and we make it easier to find the right suppliers.</p>
<p  class="ml-4">
In fact, no matter what experience you have in organizing events, here you can find everything you need, simple and efficient. Tulipr was created to suit any type of event, small or large.</p>

<h5  class="ml-4">WE VALUE RELATIONSHIPS AND QUALITY</h5>
<p  class="ml-4">Support and consulting are integrated aspects of the platform.</p>

<h5  class="ml-4">WE BELIEVE IN THE BENEFITS OF SMART TECHNOLOGY</h5>
<p  class="ml-4">We are constantly developing the platform and we are considering new trends and tools.</p>


    </div>
   	</div>
   	<div class="col-md-6" >
  <img src="{{asset('images/about.jpg')}}" width="100%" height="100%"  class="mt-5">

   	</div>

   </div>

 </div>

@endsection