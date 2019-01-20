<div class="banner_top">
        <div class="col-md-6 col-sm-4 col-xs-4 logo">
            <h1><a href="/">Artisan<span> </span></a></h1>
        </div>
        <div class="col-md-6 col-sm-10 col-xs-10 w3_menu">
            @if(Auth()->check())
            <div class="col-md-6 col-sm-5 col-xs-5 top-nav-text">
                    <a class="page-scroll b" href="/dashboard"  data-hover="LOGIN">DASHBOARD</a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                        <a class="page-scroll b" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"  data-hover="LOGIN">LOGOUT</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
                    </div>
            @endif

            @guest
            
                <div class="col-md-6 col-sm-5 col-xs-5 top-nav-text">
                        <a class="page-scroll b" href="/login"  data-hover="LOGIN">LOGIN</a>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-4 top-nav-text">
                        <a class="page-scroll b" href="{{url('/register')}}"  data-hover="LOGIN">REGISTER</a>
                    </div>
            @endguest

   @if(\route::current()->getname()=='terms')
   @else
            <div class="mobile-nav-button">
                <div class="mobile-nav-button__line"></div>
                <div class="mobile-nav-button__line"></div>
                <div class="mobile-nav-button__line"></div>
            </div>
    @endif
            
            <nav class="mobile-menu">
                <ul>
                    <li class="active"><a href="/">Home</a></li>

                    @if(\route::current()->getname()=='landing')
                    <li><a href="#menu" class="scroll">Help</a></li>
                    @endif

                    <li><a href="#services" class="scroll">Services</a></li>

                    @if(\route::current()->getname()=='landing')
                    <li><a href="#chefs" class="scroll">Our Users</a></li>
                    @endif
                    
                   <!-- @if(\route::current()->getname()=='serve') @endif-->
                    <li><a href="#gallery" class="scroll">Gallery</a></li><!--imgs added by users-->


                    @if(\route::current()->getname()=='landing')
                    <li><a href="#tesModal" data-toggle="modal" class="scroll">Testimonials</a></li>
                    @endif
                   <li><a href="/terms" class="">Terms</a></li>
                    
                </ul>
            </nav>
        </div>
        <div class="clearfix"> </div>
    </div>