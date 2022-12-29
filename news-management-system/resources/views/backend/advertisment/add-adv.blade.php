@extends('backend.dblayout')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> Add New Advertistment</h1>
		</div>
		<div class="col-sm-12">
		  @if (Session::has('message'))
			<div class ="alert alert-success alert-dismissable fade in">
				<a href="#"class="close" data-dismiss="alert">&times;</a>
			{{Session('message')}}
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
        </div>

		<div class="col-sm-12">
			<div class="row">
				<form method="post"action="{{url('addadv')}}"enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="hidden"name="tbl"value="{{encrypt('advertisments')}}">
					<div class="col-sm-12">
						<div class="form-group">	
							<input type="text" name="title" class="form-control" placeholder="Enter title here">				
						</div>		
                         <div class="form-group">	
							<input type="url" name="url" class="form-control" placeholder="Enter url here">				
						</div>				
						
						<div class="content featured-image">
							<h4>Adevertistment Image <span class="pull-right"><i class="fa fa-chevron-down"></i></span></h4><hr>	
							<p><img id="output"style=":max-width:100%"></p>
							<p><input type="file"accept="image/*"name="image"id="file"onchange="loadFile(event)"
							style="display:none;"></p>
							<p><label for="file" style="cursor: pointer;">Upload Image</label></p>					
							</div>
                            <div class="form-group">
                                <label>Location</label>
                                <select name="location" class="form-control">
                                    <option>Leaderboard</option>
                                    <option>Sidebar-top</option>
                                    <option>Sidebar-bottom</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label> 
                                <select name="status" class="form-control">  
                                    <option>Display</option>
                                    <option>Hide</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Add advertisment</button>
                            </div>

						</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	var loadFile=function(event){
    var image=document.getElementById('output');
    image.src=URL.createObjectURL(event.target.files[0]);
    };
</script>


@stop