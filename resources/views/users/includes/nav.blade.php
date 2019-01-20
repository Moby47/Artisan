 <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="/">Artisan</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  <section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt"></i></button>	
			</section>
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    	<!-- 	<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-info"></i> <span class="number">5</span></a>
		             <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">
		               
		                	<div class="user-new">
		                	<p>No Image in gallery</p>
		                	<span></span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-user-plus"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                	</a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>Contact details incomplete</p>
		                	<span></span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-heart"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>No location set on map</p>
		                	<span></span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-times"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#" class="view">View all messages</a></li>
		              </ul>
		            </li>-->
					<li class="dropdown">
						<!--profile img check-->
						@if(Auth()->user()->image)

						<!--check name-->
						@if(Auth()->user()->fname)
					  <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{Auth()->user()->fname}}</span><img src="/storage/profile_images/{{Auth()->user()->image}}"></a>
					  @else
					  <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">User</span><img src="/storage/profile_images/{{Auth()->user()->image}}"></a>
					  @endif
					  <!--check name-->

						@else
						<!--check name-->
						@if(Auth()->user()->fname)
						<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">{{Auth()->user()->fname}}</span><img src="/storage/profile_images/noimage.png"></a>
						@else
						<a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">User</span><img src="/storage/profile_images/noimage.png"></a>
						@endif
						<!--check name-->
						@endif
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="/dashboard" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboard</span> </a>
                    </li>
                   
            
					 <li>
                        <a href="/profile" class=" hvr-bounce-to-right"><i class="fa fa-user-plus nav_icon"></i> <span class="nav-label">Profile</span> </a>
                    </li>
                    
                    <li>
                        <a href="/gallery" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
					</li>
					<li>
							<a href="/tasks" class=" hvr-bounce-to-right"><i class="fa fa-bell nav_icon"></i> <span class="nav-label">Pending Task(s)</span> <span class="fa fa-star"></span></a>
						</li>
							<li>
									<a href="/profile-info/{{Auth()->user()->id}}" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span class="nav-label">My Profile</span> </a>
								</li>
								<li>
										<a href="/" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i> <span class="nav-label">Home</span> </a>
									</li>
								<li>
										<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();" class=" "><i class="fa fa-power-off nav_icon"></i> <span class="nav-label">Logout</span> </a>
										
			
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
									</li>
									
                    
                </ul>
            </div>
			</div>