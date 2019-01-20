
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b47c7ae4af8e57442dc98f0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script src="js/jquery.min.js"> </script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>


<!--busyload-->
<script src="https://cdn.jsdelivr.net/npm/busy-load/dist/app.min.js"></script>

<!--notofire -->
<script src="{{ asset('js/notifier.js') }}"></script>

<!--toastr-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	    <!-- Latest compiled bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
        jQuery(function($) {
            $(".swipebox").swipebox();
        });
</script>

<!--skycons-icons
<script src="js/skycons.js"></script>
skycons-icons-->

<!-- requried-jsfiles-for owl -->

<!-- ...........................................for dash..........................-->
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 3,
			lazyLoad : true,
			autoPlay : true,
			pagination : true,
			nav:true,
		});
	});
</script>
<!-- //requried-jsfiles-for owl -->


	<script>
			$(function () {
				$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
	
				if (!screenfull.enabled) {
					return false;
				}
	
				
	
				$('#toggle').click(function () {
					screenfull.toggle($('#container')[0]);
				});
				
	
				
			});
			</script>
<!-- ...........................................for dash..........................-->





     <!-- edit general profile-->
<script>
        $(document).ready(function (e) {
            $("#form_general").on('submit',(function(e) {
                e.preventDefault();
			
                $.ajax({
                    url: "{{route('general')}}",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    
                    
                     beforeSend:function(){
                         //busy load before  
            $.busyLoadFull("show", { 
                text: "UPDATING ...",
				maxSize: "50px",
				fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
                minSize: "50px",
                background: "rgba(37, 195, 220, 0.56)",
                fontSize: "17px"
            });
                    },
        
                     complete:function(){
                     //busy load after
            $.busyLoadFull("hide", { 
                text: "UPDATING ...",
                maxSize: "50px",
                minSize: "50px",
                background: "rgba(37, 195, 220, 0.56)",
                fontSize: "17px"
            });
                    },
        
                    success: function(data)
                    {
                      //if validation errors occur
                      if ((data.errors)) {
                         
                         //...........emit  validation errors................
                            if (data.errors.First_name) {
                                toastr.info(data.errors.First_Name, 'warning Alert', {timeOut: 5000});
                            }
                            if (data.errors.Last_name) {
                                toastr.info(data.errors.Last_Name, 'warning Alert', {timeOut: 5000});
                            }
                            if (data.errors.Phone) {
                                toastr.info(data.errors.Phone, 'warning Alert', {timeOut: 5000});
                            }
                            if (data.errors.Gender) {
                                toastr.info(data.errors.Gender, 'warning Alert', {timeOut: 5000});
                            }
                            if (data.errors.Age) {
                                toastr.info(data.errors.Age, 'warning Alert', {timeOut: 5000});
							}
							if (data.errors.Profile_Image) {
                                toastr.info(data.errors.Profile_Image, 'warning Alert', {timeOut: 5000});
							}
							if (data.errors.Service) {
                                toastr.info(data.errors.Service, 'warning Alert', {timeOut: 5000});
							}
							if (data.errors.Hrs) {
                                toastr.info(data.errors.Hrs, 'warning Alert', {timeOut: 5000});
                            }
                           
                         //.............................. 
        
                        } else {
							//success
							toastr.success(data); 
                             //empty form
                             $("#form_general")[0].reset();
                           
                        }
                    
                    },
                      
               }); //ajax end
                   
            })); //submit form end
        
        });//doc end
        
        </script>
        
		<!-- edit general profile-->
		











		<!-- edit biz profile-->
<script>
        $(document).ready(function (e) {
            $("#form_biz").on('submit',(function(e) {
                e.preventDefault();
			
                $.ajax({
                    url: "{{route('biz')}}",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    
                    
                     beforeSend:function(){
                         //busy load before  
            $.busyLoadFull("show", { 
                text: "UPDATING ...",
				maxSize: "50px",
				fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
                minSize: "50px",
                background: "rgba(37, 195, 220, 0.56)",
                fontSize: "17px"
            });
                    },
        
                     complete:function(){
                     //busy load after
            $.busyLoadFull("hide", { 
                text: "UPDATING ...",
                maxSize: "50px",
                minSize: "50px",
                background: "rgba(37, 195, 220, 0.56)",
                fontSize: "17px"
            });
                    },
        
                    success: function(data)
                    {
                      //if validation errors occur
                      if ((data.errors)) {
                         
                         //...........emit  validation errors................
                            if (data.errors.Title) {
                                toastr.info(data.errors.Title, 'warning Alert', {timeOut: 5000});
                            }
                            if (data.errors.Category) {
                                toastr.info(data.errors.Category, 'warning Alert', {timeOut: 5000});
                            }
                            if (data.errors.State) {
                                toastr.info(data.errors.State, 'warning Alert', {timeOut: 5000});
                            }
                            if (data.errors.Town) {
                                toastr.info(data.errors.Town, 'warning Alert', {timeOut: 5000});
                            }
                            if (data.errors.Address) {
                                toastr.info(data.errors.Address, 'warning Alert', {timeOut: 5000});
							}
							if (data.errors.Summary) {
                                toastr.info(data.errors.Summary, 'warning Alert', {timeOut: 5000});
							}
							if (data.errors.Job_Summary) {
                                toastr.info(data.errors.Job_Summary, 'warning Alert', {timeOut: 5000});
							}
						
                           
                         //.............................. 
        
                        } else {
							//success
							toastr.success(data); 
                             //empty form
                             $("#form_biz")[0].reset();
                           
                        }
                    
                    },
                      
               }); //ajax end
                   
            })); //submit form end
        
        });//doc end
        
        </script>
        
        <!-- edit biz profile-->



        <!-- update map location -->
        <script>

        $('.mark').click(function(e){
            e.preventDefault();
            
            if($('#lat').val()==''){
                alert('Drag Pointer To Your Location');
            }else{
                //save location
                $.ajax({
                    url: "{{route('mark')}}",
                    type: "POST",
                    data:  {
                        '_token': $('input[name=_token]').val(),
                        'lat': $('#lat').val(),
                        'lng': $('#lng').val(),
                    },
            
                    beforeSend:function(){
                         //busy load before  
            $.busyLoadFull("show", { 
                text: "UPDATING ...",
				maxSize: "50px",
				fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
                minSize: "50px",
                background: "rgba(37, 195, 220, 0.56)",
                fontSize: "17px"
            });
                    },
                    complete:function(){
                     //busy load after
            $.busyLoadFull("hide", { 
                text: "UPDATING ...",
                maxSize: "50px",
                minSize: "50px",
                background: "rgba(37, 195, 220, 0.56)",
                fontSize: "17px"
            });
                    },
        
            
                    success: function(data)
                    {
                     
                      toastr.success(data);
                     
                    }, //success end
                      
                     }); //ajax end
            }//else end
           
          
                    });//btn end
                      </script>
                      
        <!-- update map location -->





        
        <!-- add image -->
        <script>
                $(document).ready(function (e) {
                    $("#image_upload").on('submit',(function(e) {
                        e.preventDefault();
                    
                        $.ajax({
                            url: "{{route('pix')}}",
                            type: "POST",
                            data:  new FormData(this),
                            contentType: false,
                            cache: false,
                            processData:false,
                            
                            
                             beforeSend:function(){
                                 //busy load before  
                    $.busyLoadFull("show", { 
                        text: "UPDATING ...",
                        maxSize: "50px",
                        fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
                        minSize: "50px",
                        background: "rgba(37, 195, 220, 0.56)",
                        fontSize: "17px"
                    });
                            },
                
                             complete:function(){
                             //busy load after
                    $.busyLoadFull("hide", { 
                        text: "UPDATING ...",
                        maxSize: "50px",
                        minSize: "50px",
                        background: "rgba(37, 195, 220, 0.56)",
                        fontSize: "17px"
                    });
                            },
                
                            success: function(data)
                            {
                              //if validation errors occur
                              if ((data.errors)) {
                                 
                                 //...........emit  validation errors................
                                    if (data.errors.Title) {
                                        toastr.info(data.errors.Title, 'warning Alert', {timeOut: 5000});
                                    }
                                    if (data.errors.Picture) {
                                        toastr.info(data.errors.Picture, 'warning Alert', {timeOut: 5000});
                                    }
                                    
                                 //.............................. 
                
                                } else {
                                    //success
                                    toastr.success(data); 
                                     //empty form
                                     $("#image_upload")[0].reset();
                     
////////////reload gal count//////////////
$.ajax({
                  url: "{{route('reload_count')}}",
                  type: "GET",
                  
                  beforeSend:function(){
                  $(".load").addClass("fa fa-refresh fa-spin");
                  },
        
                   complete:function(){
                  $(".load").removeClass("fa fa-refresh fa-spin");
                  },
                  
        
                  success: function(data)
                  {
                      $('.res').html(data);
                  },
                    error: function(e) 
                  {
                      $('.res').html("Error! Refresh");
                  } 	        
             });
///////////////////////
                                }//else end

                            },
                              
                       }); //ajax end
                           
                    })); //submit form end
                
                });//doc end
                
                </script>
                              
                <!-- Add image-->




                 <!-- update social -->
        <script>

        $('.social').click(function(e){
            e.preventDefault();
         
                //save location
                $.ajax({
                    url: "{{route('social')}}",
                    type: "POST",
                    data:  {
                        '_token': $('input[name=_token]').val(),
                        'Facebook': $('#fb').val(),
                        'Twitter': $('#tw').val(),
                        'Website': $('#web').val(),
                    },
            
                    beforeSend:function(){
                         //busy load before  
            $.busyLoadFull("show", { 
                text: "UPDATING ...",
				maxSize: "50px",
				fontawesome:'fa fa-cog fa-spin fa-3x fa-fw',
                minSize: "50px",
                background: "rgba(37, 195, 220, 0.56)",
                fontSize: "17px"
            });
                    },
                    complete:function(){
                     //busy load after
            $.busyLoadFull("hide", { 
                text: "UPDATING ...",
                maxSize: "50px",
                minSize: "50px",
                background: "rgba(37, 195, 220, 0.56)",
                fontSize: "17px"
            });
                    },

                
                    success: function(data)
                    {
                     
                      //if validation errors occur
                      if ((data.errors)) {
                                 
                                 //...........emit  validation errors................
                                    if (data.errors.Facebook) {
                                        toastr.info(data.errors.Facebook, 'warning Alert', {timeOut: 5000});
                                    }
                                    if (data.errors.Twitter) {
                                        toastr.info(data.errors.Twitter, 'warning Alert', {timeOut: 5000});
                                    }
                                    if (data.errors.Website) {
                                        toastr.info(data.errors.Website, 'warning Alert', {timeOut: 5000});
                                    }
                                    
                                 //.............................. 
                
                                } else {
                      toastr.success(data);
                                }
                    }, //success end
                      
                     }); //ajax end
                    });//btn end
                      </script>
                      
        <!-- update social -->


        <!--alert-->
        @if(\route::current()->getname()=='dash')

<script>
        $(document).ready(function(){
            toastr.info('<a href="/profile" >Keep Profile Updated</a>');
              
           });
</script>

@endif


<script>
        //phone number validation
  $('.numval').on('keyup', function(){
  var con = $('.numval').val();
  if($('.numval').val().length > 11){
      $('.numerr').html('Number must be 11 e.g 08012345678');
  }else if($('.numval').val().length < 11){
      $('.numerr').html('Number must be 11 e.g 08012345678');
  }else{
      $('.numerr').html(' ');
  }
  });
  

  //agree to terms

$(".go").hide('fade');

  $(function(){

$("#checkbox1").change(function(){
    if(this.checked){
         $(".go").show('fade');
    }else{
        $(".go").hide('fade');
    }
});
});

  </script>