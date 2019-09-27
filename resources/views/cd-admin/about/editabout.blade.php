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
					<h1 style="text-align: center;"> edit About</h1>
					<form action="{{route('editabout',$d->id)}}" method="post" enctype="multipart/form-data" >
						@csrf
						<div class="form-group">
							<div class="text text-danger">{{$errors->first('image')}}</div>
							<label for="package name"> Image</label>
							<input type="file" class="form-control" id="image" name="image" value="{{$d->image}}">
						</div>  

						<div class="form-group">
							<div class="text text-danger">{{$errors->first('description')}}</div>
							<label for="description">Description</label>
							<textarea class="summernote" rows="10" cols="80" name="description" >
								{!! $d->description !!}
							</textarea>
						</div>
						<div class="form-group">
							
							<label for="Short Description Title" > Short Description Title</label>
							<input type="text" class="form-control" name="stitle1" id="stitle1" value="{{$d->stitle1}}" >
						</div>

						<div class="form-group">
							
							<label for="Short Description Title" > Short Description</label>
							<textarea class="summernote" rows="10" cols="80" name="description" >
								{!! $d->sdescription1 !!}
							</textarea>
						</div>
						<div class="form-group">
							
							<label for="Short Description Title" > Short Description Title</label>
							<input type="text" class="form-control" name="stitle2" id="stitle2" value="{{ $d->stitle2}}" >
						</div>

						<div class="form-group">
							
							<label for="Short Description Title" > Short Description</label>
							<textarea class="summernote" rows="10" cols="80" name="description" >
								{!! $d->sdescription2 !!}
							</textarea>
						</div>

						<div class="form-group">
							
							<label for="Short Description Title" > Short Description Title</label>
							<input type="text" class="form-control" name="stitle3" id="stitle3" value="{{$d->stitle3}}" >
						</div>

						<div class="form-group">
							
							<label for="Short Description Title" > Short Description</label>
							<textarea class="summernote" rows="10" cols="80" name="description" >
								{!! $d->sdescription !!}
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
@endsection