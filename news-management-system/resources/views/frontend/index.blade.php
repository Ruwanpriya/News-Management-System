@extends('frontend.layout')
@section('content')
<div class="wrapper">
	@if(count($featured) > 0)
	<div class="row">
		@foreach($featured as $key=>$f)
		@if($key == 0)
		<div class="col-md-6">
			<div class="relative">
				<a href="{{url('article')}}/{{$f->slug}}"><img src="{{asset('posts')}}/{{$f->image}}" width="100%"height="354" />
				  <span class="caption">{{$f->title}}</span>
                </a>
            </div>
    	</div>
		@endif
		@endforeach
    	<div class="col-md-6">
    		<div class="row">
				@foreach($featured as $key=>$f )
				@if($key > 0 && $key < 3)
        		<div class="col-md-6">
				  <div class="relative">
						<a href="{{url('article')}}/{{$f->slug}}"><img src="{{asset('posts')}}/{{$f->image}}" width="100%" height="162" />
						    <span class="caption">{{$f->title}}</span>
						</a>
				  </div>
        	    </div>
				@endif
				@endforeach
            </div>	
        	<div class="row" style="margin-top:30px;">
			    @foreach($featured as $key=>$f )
				@if($key > 3 && $key < 6 )
        		<div class="col-md-6">
				   <div class="relative">
						<a href="{{url('article')}}/{{$f->slug}}"><img src="{{asset('posts')}}/{{$f->image}}" width="100%" height="162" />
						  <span class="caption">{{$f->title}}</span>
						</a>
					</div>
        	    </div>
				@endif
				@endforeach
        	</div>        
    	</div>
	</div>
    @endif
    <div class="row" style="margin-top:30px;">
    	<div class="col-md-8">
        <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px;">
        	<div class="col-md-12">
        		<h3 style="border-bottom:3px solid #FA292A; padding-bottom:5px;">
				<span style="padding:6px 12px; background:#FA292A;">POLITICS</span></h3>
        	</div>
        	<div class="col-md-6">
			    @foreach($news as $key=>$n )
				@if($key == 0)
            	<a href="{{url('article')}}/{{$n->slug}}">
					<img src="{{asset('posts')}}/{{$n->image}}" width="100%" style="margin-bottom:15px;"/>
				</a>
				<h3><a href="{{url('article')}}/{{$n->slug}}">{{$n->title}}</a></h3>
        		<p align="justify">{!! substr($n->description,0,300) !!}</p>
				<a href="{{url('article')}}/{{$n->slug}}"> Read more &raquo; </a> 
				</a>
				@endif
                @endforeach
            </div>
            <div class="col-md-6">
			@foreach($news as $key=>$n)
				@if($key > 0 && $key < 6 )
            	<div class="row" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
						   <a href="{{url('article')}}/{{$n->slug}}">
    	            		 <img src="{{asset('posts')}}/{{$n->image}}" width="100%" />
                           </a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="{{url('article')}}/{{$n->slug}}">{{$n->title}}</a></h4>
                		</div>
                    </div>
                </div>
				@endif
                @endforeach
                
            </div>
        </div>
        
	        <div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
    	    	<h3 style="border-bottom:3px solid #FEB34B; padding-bottom:5px;"><span style="padding:6px 12px; background:#FEB34B;">BUSINESS</span></h3>
        	    <div class="flex">
					@foreach($business->take(5) as $b)
					<div>
					  <a href="{{url('article')}}/{{$b->slug}}">
					     <img src="{{asset('posts')}}/{{$b->image}}"/>
                      </a>
					</div>
					@endforeach
			    </div>
	        </div>
        

        <div class="row">
        	<div class="col-md-6">
            <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
            	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                <h3 style="border-bottom:3px solid #d95757; padding-bottom:5px;">
				
				<span style="padding:6px 12px; background:#d95757;">SPORTS</span></h3>

				@foreach($sports as $key=>$s )
				@if($key == 0)
            	<a href="{{url('article')}}/{{$s->slug}}">
					<img src="{{asset('posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px;"/>
				</a>
				<h3><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h3>
        		<p align="justify">{!! substr($s->description,0,300) !!}</p>
				<a href="{{url('article')}}/{{$s->slug}}"> Read more &raquo; </a> 
				</a>
				@endif
                @endforeach
            	</div>


				@foreach($sports as $key=>$s )
				@if($key > 0 && $key < 5)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row fashion">
						<a href="{{url('article')}}/{{$s->slug}}">
							<img src="{{asset('posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px;"/>
				        </a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="{{url('article')}}/{{$s->slug}}">{{$s->title}}</a></h4>
                		</div>
                    </div>
                </div>
                @endif
				@endforeach
                
            </div></div>
        	<div class="col-md-6">
            <div class="col-md-12" style="border:1px solid #ccc; padding-bottom:30px;">
            	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:20px 10px; margin-bottom:10px;">
                <h3 style="border-bottom:3px solid #b952c8; padding-bottom:5px;"><span style="padding:6px 12px; background:#b952c8;">Technology</span></h3>
            		
				@foreach($technology as $key=>$t )
				@if($key == 0)
            	<a href="{{url('article')}}/{{$t->slug}}">
					<img src="{{asset('posts')}}/{{$t->image}}" width="100%" style="margin-bottom:15px;"/>
				</a>
				<h3><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}</a></h3>
        		<p align="justify">{!! substr($t->description,0,300) !!}</p>
				<a href="{{url('article')}}/{{$t->slug}}"> Read more &raquo; </a> 
				</a>
				@endif
                @endforeach
            	</div>
               
				@foreach($technology as $key=>$t )
				@if($key > 0 && $key < 5)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row fashion">
						<a href="{{url('article')}}/{{$t->slug}}">
							<img src="{{asset('posts')}}/{{$t->image}}" width="100%" style="margin-bottom:15px;"/>
				        </a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="{{url('article')}}/{{$t->slug}}">{{$t->title}}</a></h4>
                		</div>
                    </div>
                </div>
                @endif
				@endforeach
            </div></div>
        
        <div class="col-md-12">
        	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
			<div class="col-md-12">
            <h3 style="border-bottom:3px solid #81d742; padding-bottom:5px;"><span style="padding:6px 12px; background:#81d742;">HEALTH</span></h3>
            </div>
        	<div class="col-md-6">
            	
			@foreach($health as $key=>$h )
				@if($key == 0)
            	<a href="{{url('article')}}/{{$h->slug}}">
					<img src="{{asset('posts')}}/{{$h->image}}" width="100%" style="margin-bottom:15px;"/>
				</a>
				<h3><a href="{{url('article')}}/{{$h->slug}}">{{$h->title}}</a></h3>
        		<p align="justify">{!! substr($h->description,0,300) !!}</p>
				<a href="{{url('article')}}/{{$h->slug}}"> Read more &raquo; </a> 
				</a>
				@endif
                @endforeach

            </div>
            <div class="col-md-6">

			@foreach($health as $key=>$h )
				@if($key > 0 && $key < 6)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row fashion">
						<a href="{{url('article')}}/{{$h->slug}}">
							<img src="{{asset('posts')}}/{{$h->image}}" width="100%" style="margin-bottom:15px;"/>
				        </a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="{{url('article')}}/{{$h->slug}}">{{$h->title}}</a></h4>
                		</div>
                    </div>
                </div>
                @endif
				@endforeach
            	
                  
            </div>
        </div>
		</div>
        
		<div class="col-md-12 image-gallery" style="border:1px solid #ccc; padding:15px 15px 30px 15px; margin-top:30px; margin-bottom:30px;">
    	    	<h3 style="border-bottom:3px solid #C19434; padding-bottom:5px;"><span style="padding:6px 12px; background:#C19434;">TRAVEL</span></h3>
        	    <div class="flex">
					@foreach($travel->take(5) as $t)
					<div>
					  <a href="{{url('article')}}/{{$t->slug}}">
					     <img src="{{asset('posts')}}/{{$t->image}}"/>
                      </a>
					</div>
					@endforeach
			    </div>
	        </div>
        
        
        	<div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 30px 0px; margin-top:30px;">
				<div class="col-md-12">
					<h3 style="border-bottom:3px solid #FE8529; padding-bottom:5px;">
					<span style="padding:6px 12px; background:#FE8529;">ENTERTAINMENT</span>
					</h3>
				</div>
				<div class="col-md-6">
				    @foreach($entertainment as $key=>$e )
					@if($key == 0)
					<a href="{{url('article')}}/{{$e->slug}}">
					  <img src="{{asset('posts')}}/{{$e->image}}" width="100%" style="margin-bottom:15px;"/>
					</a>
					<h3><a href="{{url('article')}}/{{$e->slug}}">{{$e->title}}</a></h3>
					<p align="justify">{!! substr($e->description,0,300) !!}</p>
					<a href="{{url('article')}}/{{$e->slug}}"> Read more &raquo; </a> 
					@endif
					@endforeach

				</div>
            <div class="col-md-6">
			    @foreach($entertainment as $key=>$e )
				@if($key > 0 && $key < 6)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row fashion">
						<a href="{{url('article')}}/{{$e->slug}}">
							<img src="{{asset('posts')}}/{{$e->image}}" width="100%" style="margin-bottom:15px;"/>
				        </a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row">
                			<h4><a href="{{url('article')}}/{{$e->slug}}">{{$e->title}}</a></h4>
                		</div>
                    </div>
                </div>
                @endif
				@endforeach 
            
       
			
        </div>
        </div>
        </div>
        </div>


        <div class="col-md-4">
        <div class="col-md-12" style="border:1px solid #ccc; padding:15px;">
			<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">NEWS</span></h3>
			@foreach($politics ->take(10) as $p)
        	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	           	<div class="col-md-4">
                   	<div class="row">
					   <a href="{{url('article')}}/{{$p->slug}}">
						 <img src="{{asset('posts')}}/{{$p->image}}" width="100%" style="margin-left:-15px;" />
                       </a>
        	       	</div>
                </div>
            	<div class="col-md-8">
                   	<div class="row" style="padding-left:10px;">
                		<h4> <a href="{{url('article')}}/{{$p->slug}}">{{$p->title}}</a></h4>
                	</div>
                </div>
            </div>
			@endforeach   
          </div>

		   @if($sidebartop)
			  <div class="col-sm-12 sidebar-adv"><a href="{{$sidebartop->url}}">
			   <img src="{{asset('advertisments')}}/{{$sidebartop->image}}" width="100%"alt="{{$sidebartop->title}}" />
			 </a></div>
		   @endif

          
          <div class="col-md-12" style="border:1px solid #ccc; padding:15px 15px 60px 15px; margin-top:30px;">
          	<div class="col-md-12" style="border-bottom:1px solid #ccc; padding:0px 10px 20px 10px; margin-bottom:10px;">
           		<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">FASHION</span></h3>
                 @foreach ($style as $key=>$s)
				 @if($key == 0)
				 <a href="{{url('article')}}/{{$s->slug}}">
				<img src="{{asset('posts')}}/{{$s->image}}" width="100%" style="margin-bottom:15px;" /></a>
        		  <p>{!! substr($s->description,0,300) !!}</p>
				 
				 <a href="{{url('article')}}/{{$s->slug}}">Read More &raquo;</a>
				 @endif
				 @endforeach
            	</div>

				@foreach ($style as $key=>$s)
				 @if($key > 0 && $key < 10)
                <div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
	            	<div class="col-md-4">
                    	<div class="row">
							<a href="{{url('article')}}/{{$s->slug}}">
								<img src="{{asset('posts')}}/{{$s->image}}" width="100%" style="margin-left:-15px;" />
							</a>
        	        	</div>
                    </div>
            	    <div class="col-md-8">
                    	<div class="row" style="padding-left:0px;">
                			<h4><a href="{{url('article')}}/{{$s->slug}}"> {{$s->title}}</h4>
                		</div>
                    </div>
                </div>
				@endif
				@endforeach 
            </div>
			@if($sidebarbottom)
			  <div class="col-sm-12 sidebar-adv"><a href="{{$sidebarbottom->url}}">
			   <img src="{{asset('advertisments')}}/{{$sidebarbottom->image}}" width="100%"alt="{{$sidebarbottom->title}}" />
			 </a></div>
		   @endif
			
          
          
          </div> 
          
        </div>
    </div> 
</div>

@stop