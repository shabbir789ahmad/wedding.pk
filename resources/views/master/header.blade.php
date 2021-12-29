 
   
         <nav  class="navbar shadow sticky-top navbar-expand-lg  navbar-light " style="background-color:#008CE6" id="navbar">
           
           <button  class="navbar-toggler  btn btn-info " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav text-light ml-auto">
   <li class="nav-item n mt-3 ">
     <a href="/" class="text-decoration-none text-light{{Request()->is('/')? 'active text-dark':''}}"> HOME</a>
               </li>
             
               <li class="nav-item n dropdown   mt-3 ml-5 ">
             <a href="services" class="text-decoration-none text-light{{Request()->is('services')? 'active text-dark':''}}"> Services</a> 
               
             </li>
          
          

           
          
            <li class="nav-item n dropdown   mt-3 ml-5 ">
             <a href="about" class="text-decoration-none text-light{{Request()->is('about')? 'active text-dark':''}}">About Us</a> 
               
             </li>
              
   
             <li class="nav-item n dropdown mr-5  mt-3 ml-5">
             <a href="" class="text-decoration-none text-light font-weight-bold{{Request()->is('vendor')? 'active text-dark':''}}">Become A Vendor</a> 
               
             </li>
                    <li class="nav-item n dropdown   mt-3 ml-3  ">
           <a href="contact" class="text-decoration-none text-light {{Request()->is('contact')? 'active text-dark':''}}">Contact </a> 
               
             </li> 
               
                  @guest
          @if (Route::has('login'))
           <li class="nav-item  list-inline-item ml-5 mt-1  book ml-2">
         <a class="nav-link  border rounded text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            
                        @else
            <li class="nav-item  dropdown mr-5 ml-2 bookname">
         <a id="navbarDropdown" class=" dropdown-toggle  text-light mt-2" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
         <a href="" class="  " > 
    <span class="text-light name  border rounded  px-3">{{ Auth::user()->name['0'] }}</span></a>
                                </a>

 <div class="dropdown-menu dropright" aria-labelledby="navbarDropdown">
  <a class="dropdown-item" href="{{ route('logout') }}"
 onclick="event.preventDefault();
 document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                      </a>

  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-hidden">
     @csrf
   </form>
       </div>
     </li>
   @endguest
               
            
             </ul>
             
           </div>
         </nav>

  
    

