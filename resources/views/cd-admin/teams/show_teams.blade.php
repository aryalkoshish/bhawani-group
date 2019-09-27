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
					<h1 style="text-align: center;"> Show Teams</h1>
					
						<div class="form-group">
							<pre>
						Name:: {{$s->altimage}}
						Post:: {{$s->name}}
						Alternative Image Name:: {{$s->altimage}}
						Image :: <img src="{{asset('public/upload/team/'.$s->image)}}" style="height: 250px; width: 250px" >
					</pre>

					<div class="form-group" >
						<a href="{{URL()->previous()}}"> <button type="submit" class="btn btn-default bg-red ">Back</button></a>
					</div>
					<div class="form-group">
						<form action="{{route('deleteteam',$s->id)}}" method="post" enctype="multipart/form-data" >
                                @csrf
                                <button type="submit" >Delete</button> 
                                </form>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- /.content-wrapper -->
@endsection