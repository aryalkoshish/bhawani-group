@extends('cd-admin.home-master')
@section('page-title')  
Testmonials
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container col-md-12">
		<section class="content-header">

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active" >Testmonials</li>
				
			</ol>
		</section>
		<div class="col-md-1" ></div>
		<div class="Content col-md-10" style="margin-top: 35px;"  >
			<div class="box box-info ">
				<div class="box-header with-border">
					<h1 style="text-align: center;"> Add Testmonials</h1>
					<form action="{{route('store.testmonial')}}" method="post" enctype="multipart/form-data" >
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
							<label for="name" >Name</label>
							<input type="text" class="form-control" name="name" id="name" value="{{old('name')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('description')}}</div>
							<label for="description" > Description</label>
							<input type="textarea" class="form-control" name="description" id="description" value="{{old('description')}}" >
						</div>
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('seotitle')}}</div>
							<label for="seotitle" >SEO Title</label>
							<input type="text" class="form-control" name="seotitle" id="seotitle" value="{{old('seotitle')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('keywords')}}</div>
							<label for="keywords" >SEO Keywords</label>
							<input type="textarea" class="form-control" name="keywords" id="keywords" value="{{old('keywords')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('seodescription')}}</div>
							<label for="seodescription" >SEO Description</label>
							<input type="textarea" class="form-control" name="seodescription" id="seodescription" value="{{old('seodescription')}}" >
						</div>

						<div class="form-group" >
							<div class="text text-danger">{{$errors->first('status')}}</div>
							<label for="status">Status</label>
							<input type="radio" name="status" value="active">Active
							<input type="radio" name="status" value="inactive">Inactive
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