@extends('cd-admin.home-master')
@section('page-title')  
Edit Client
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container col-md-12">
		<section class="content-header">

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active" > Edit clients</li>
				
			</ol>
		</section>
		<div class="col-md-1" ></div>
		<div class="Content col-md-10" style="margin-top: 35px;"  >
			<div class="box box-info ">
				<div class="box-header with-border">
					<h1 style="text-align: center;"> Add Clients</h1>
					<form action="{{route('editclient',$t->id)}}" method="post" enctype="multipart/form-data" >
						@csrf
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('image')}}</div>
							<label for="Image"> Image</label>
							<input type="file" class="form-control" id="image" name="image" value="{{$t->image}}">
						</div>  

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('altimage')}}</div>
							<label for="Alternative Image Name" > Alternative Image Name</label>
							<input type="textarea" class="form-control" name="altimage" id="altimage" value="{{$t->altimage}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('name')}}</div>
							<label for="Client Name" > Client Name</label>
							<input type="textarea" class="form-control" name="name" id="name" value="{{$t->name}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('info')}}</div>
							<label for="Client Info" >Client Info</label>
							<input type="textarea" class="form-control" name="info" id="info" value="{{$t->info}}" >
						</div>
					
						<button type="submit" class="btn btn-default bg-green " >Submit</button>

					</form>
					<div class="form-group" >
						<a href="{{URL()->previous()}}"> <button type="submit" class="btn btn-default bg-red ">Cancel</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.content-wrapper -->
@endsection