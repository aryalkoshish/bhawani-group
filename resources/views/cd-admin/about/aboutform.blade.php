@extends('cd-admin.home-master')
@section('page-title')  
About
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container col-md-12">
		<section class="content-header">

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active">About</li>
			</ol>
		</section>
		<div class="col-md-1" ></div>
		<div class="Content col-md-10" style="margin-top: 35px;"  >
			<div class="box box-info ">
				<div class="box-header with-border">
					<h1 style="text-align: center;"> Add About</h1>
					<form action="{{route('storeabout')}}" method="post" enctype="multipart/form-data" >
						@csrf
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('image')}}</div>
							<label for="package name"> Image</label>
							<input type="file" class="form-control" id="image" name="image" value="{{old('image')}}">
						</div>  

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('description')}}</div>
							<label for="description">Description</label>
							<textarea class="summernote" rows="10" cols="80" name="description" >
								This is my textarea to be replaced with CKEditor.
							</textarea>
						</div>
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('stitle1')}}</div>
							<label for="Short Description Title" > Short Description Title</label>
							<input type="text" class="form-control" name="stitle1" id="stitle1" value="{{old('stitle1')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('sdescription1')}}</div>
							<label for="Short Description Title" > Short Description</label>
							<textarea class="summernote" rows="10" cols="80" name="sdescription1" >
								This is my textarea to be replaced with CKEditor.
							</textarea>
						</div>
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('stitle2')}}</div>
							<label for="Short Description Title" > Short Description Title</label>
							<input type="text" class="form-control" name="stitle2" id="stitle2" value="{{old('stitle2')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('sdescription2')}}</div>
							<label for="Short Description Title" > Short Description</label>
							<textarea class="summernote" rows="10" cols="80" name="sdescription2" >
								short description here
							</textarea>
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('stitle3')}}</div>
							<label for="Short Description Title" > Short Description Title</label>
							<input type="text" class="form-control" name="stitle3" id="stitle3" value="{{old('stitle3')}}" >
						</div>

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('sdescription3')}}</div>
							<label for="Short Description Title" > Short Description</label>
							<textarea class="summernote" rows="10" cols="80" name="sdescription" >
								Description here
							</textarea>
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