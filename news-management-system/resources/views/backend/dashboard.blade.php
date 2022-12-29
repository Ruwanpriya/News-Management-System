@extends('backend.dblayout')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> DASHBOARD</h1>
		</div>

		<div class="col-sm-12">
			<div class="content">
				<h2>Welcome to Dashboard</h2>
				<p class="welcome-text">We,ve assembled some links for you to get started.</p>
				<div class="row">
					<div class="col-sm-4">
						<h4>Get Started</h4><br>
						<button type="button" class="btn btn-lg btn-primary">Documentation</button>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>View Records</h4>
                        </br>
						<p><a href="{{url('all-post')}}"><i class="fa fa-bookmark-o"></i> View All Posts</a></p>
						<p><a href="{{url('all-pages')}}"><i class="fa fa-file"></i> View All Pages</a></p>
						<p><a href="{{url('messages')}}"><i class="fa fa-envelope"></i> View All Messages</a></p>
						<p><a href="#"><i class="fa fa-users"></i> View All Users</a></p>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>Add Records</h4>
						</br>
						<p><a href="{{url('add-post')}}"><i class="fa fa-bookmark-o"></i> Add Posts</a></p>
						
						<p><a href="{{url('add-page')}}"><i class="fa fa-file"></i> Add Pages</a></p>
						
						<p><a href="#"><i class="fa fa-users"></i> Add Users</a></p>
					</div>
				</div>
			</div>

			<div class="content">
				<div class="col-sm-3">			
					<img src="images/newsweb_logo.png" width="100%">
				</div>
				<div class="col-sm-9">
					<p><b><a href="http://www.InfoTECH.com" target="_blank">WEBNNEWS.com</a></b> | World Wide News Time |</p>
					<div class="row">
						<ul class="nav navbar-nav">
							
						</ul>
					</div>	
					<p>
						<a href="https://www.facebook.com/webnews/" target="_blank" class="btn btn-primary"><i class="fa fa-facebook"></i></a>
						<a href="https://www.youtube.com/channel/webn" target="_blank" class="btn btn-danger"><i class="fa fa-youtube"></i></a>
					 </p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop


