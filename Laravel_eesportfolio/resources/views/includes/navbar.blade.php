

<nav id="nav" class="navbar navbar-default navbar-fixed-top">
    
    <div class="container">  
          <div class="navbar-header" style="margin-bottom:60px; ">
             <a class="navbar-brand" href="{{url('/')}}"><img class="img-responsive" id="brand" src="{{ URL::asset('img/400dpiLogoCropped_originalSize2.png') }}"></a>
          </div>
           
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        
        <div class="collapse navbar-collapse" style="margin='auto';" id="main-navbar-collapse-1">
            
          <div class="container blue circleBehind">
            <ul  id="main-navbar-collapse-1" class="nav navbar-nav">

                <li class="{{ Request::is('/') ? " active " : ""}}" >
                  <a href="{{url('/')}}"><i class="fa fa-home">
                  </i> Home</a>
                </li>

                <li class="{{ Request::is('about-me') ? " active " : ""}}" ><a href="{{url('/about-me')}}"><i class="fa fa-book"></i>About me</a></li>
                
                <li class="{{ Request::is('sample-projects') ? " active " : ""}}" ><a href="{{url('/sample-projects')}}"><i class="fa fa-flask"></i>Sample Projects</a></li>
                
                
                
                <li class="{{ Request::is('contact-information') ? " active " : ""}}" ><a href="{{url('/contact-information')}}"><i class="fa fa-phone"></i> Contact Information</a></li>

            </ul>
          </div>
      
        </div>
          
          <div class="nav navbar-nav navbar-right">     
            <ul style="margin-left: 30px;" class="social" id='socialMenu'>
              <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
              <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
              <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>  
            </ul>
          </div>

    </div>
</nav>