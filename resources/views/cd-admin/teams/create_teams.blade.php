@extends('cd-admin.home-master')
@section('page-title')  
Our Team
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container col-md-12">
		<section class="content-header">

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li >About</li>
				<li class="active">Teams</li>
			</ol>
		</section>
		<div class="col-md-1" ></div>
		<div class="Content col-md-10" style="margin-top: 35px;"  >
			<div class="box box-info ">
				<div class="box-header with-border">
					<h1 style="text-align: center;"> Add Teams</h1>
					<form action="{{route('addteam')}}" method="post" enctype="multipart/form-data" >
						@csrf
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('image')}}</div>
							<label for="Image"> Image</label>
							<input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
						</div>  

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('altimage')}}</div>
							<label for="Alternative Image Name" > Alternative Image Name</label>
							<input type="textarea" class="form-control" name="altimage" id="altimage" value="{{old('altimage')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('name')}}</div>
							<label for="name" >name</label>
							<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('post')}}</div>
							<label for="post" > post</label>
							<input type="textarea" class="form-control" name="post" id="post" value="{{old('post')}}" >
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