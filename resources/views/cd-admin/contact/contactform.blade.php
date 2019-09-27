@extends('cd-admin.home-master')
@section('page-title')  
Contact
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container col-md-12">
		<section class="content-header">

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active" >Article</li>
				
			</ol>
		</section>
		<div class="col-md-1" ></div>
		<div class="Content col-md-10" style="margin-top: 35px;"  >
			<div class="box box-info ">
				<div class="box-header with-border">
					<h1 style="text-align: center;"> Add Contact</h1>
					<form action="{{route('store.contact')}}" method="post" enctype="multipart/form-data" >
						@csrf
					 

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('name')}}</div>
							<label for=" Name" >Full Name</label>
							<input type="textarea" class="form-control" name="name" id="name" value="{{old('name')}}" >
						</div>
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('phone')}}</div>
							<label for="Phone number" >Phone number</label>
							<input type="textarea" class="form-control" name="phone" id="phonenum" value="{{old('phone')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('email')}}</div>
							<label for="email" >email</label>
							<input type="text" class="form-control" name="email" id="email" value="{{old('email')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('message')}}</div>
							<label for="message" > message</label>
							<input type="textarea" class="form-control" name="message" id="message" value="{{old('message')}}" >
						</div>

					<button type="submit" class="btn btn-default bg-green " >Submit</button>

					</form>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.content-wrapper -->
@endsection