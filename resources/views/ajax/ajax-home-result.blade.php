 @if(count($result)>0)

@foreach($result as $res)
<li class="list-group-item">
	<a href='/profile-info/{{$res->user_id}}'><p>
	Job Title: {{$res->title}} <br>
	Location: {{$res->state}}. {{$res->town}}. {{$res->address}} ...<span class='text-info badge badge'>View Profile</span> </p></a>
	</li>
@endforeach

{{$result->links()}}
					@else
					<div class='text-center alert alert-info'>
		No Result(s) Found, Change search keywords
	</div>

                    @endif
                    



    
    <script>
            //.........paginated result......................
            $(document).one('click','.pagination a', function(e){
            
            e.preventDefault();
    
             var query = $('#word').val();
          
            var page = $(this).attr('href').split('page=')[1];
            
            getproducts(page);
            
            function getproducts(page){
            
            $.ajax({
                url: '/Search-job?Word='+query+'&page='+ page,
                //url: '/site-search?Search='+query+'&page='+ page,
            
                beforeSend:function(){
                   // $('.modal-body').hide('fade');
                      $(".load").addClass("fa fa-refresh fa-spin");
                      $(".loadtxt").html('Fetching Results...');
                        },
            
                         complete:function(){
                        $(".load").removeClass("fa fa-refresh fa-spin");
                        $(".loadtxt").html(' ');
                    //	$('.modal-body').show('fade');
                        },
            
            }).done(function(data){
                $('.content').html(data);
            
                location.hash = page;
            })
            
            }//func end
            });//doc end
            
            //.........paginated result......................
            </script>