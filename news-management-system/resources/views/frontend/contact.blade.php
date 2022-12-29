
@extends('frontend.layout')
@section('title')
<title>Contact Us | WEBN NEWS</title>
@stop
@section('content')

    <div class="wrapper">
		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
					<div class="col-md-12">
						<h1 class="text-uppercase">Contact Us</h1>
					</div>	

                    @if (Session::has('message'))
                    <div class="col-sm-12">
                        <div class ="alert alert-success alert-dismissable fade in">
                            <a href="#"class="close" data-dismiss="alert">&times;</a>
                            {{Session('message')}}
                        </div>
                   </div>
			       @endif

                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissable">
                        <a class="close"data-dismiss="alert">&times;</a>
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li> 
                        @endforeach
                        </ul>  
                    </div>
                    @endif
                    <div class="col-sm-6">
                         <form method="post"action="{{url('sendmessage')}}">
                            {{ csrf_field() }}
                            <input type="hidden"name="tbl"value="{{encrypt('messages')}}">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text"name="name"class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Your Email</label>
                                <input type="email"name="email"class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Your Phone Number</label>
                                <input type="text"name="phone"class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <textarea name="message"class="form-control"rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button class= "btn btn-success">Send</button>
                            </div>
                         </form>
                    </div>
				</div>        
			</div>
			

            <!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;">
					<span style="padding:6px 12px; background:#2b99ca;">LATEST NEWS</span>
				    </h3>
					@foreach($latest->take(10) as $l)
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<div class="col-md-4">
							<div class="row">
								<a href="{{url('article')}}/{{$l->slug}}">
									<img src="{{asset('posts')}}/{{$l->image}}"width="100%" style="margin-left:-15px;" />
								</a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4><a href="{{url('article')}}/{{$l->slug}}">{{$l->title}}</a></h4>
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
				@if($sidebarbottom)
					<div class="col-sm-12 sidebar-adv"><a href="{{$sidebarbottom->url}}">
					<img src="{{asset('advertisments')}}/{{$sidebarbottom->image}}" width="100%"alt="{{$sidebarbottom->title}}" />
					</a></div>
		        @endif

			</div>
		</div> 
	</div>

	@stop
