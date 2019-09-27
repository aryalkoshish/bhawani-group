@extends('cd-admin.home-master')
@section('page-title')  
Show Testmonials
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="container col-md-12">
		<section class="content-header">

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="active" >Show Testmonials</li>
				
			</ol>
		</section>
		<div class="col-md-1" ></div>
		<div class="Content col-md-10" style="margin-top: 35px;"  >
			<div class="box box-info ">
				<div class="box-header with-border">
					<h1 style="text-align: center;"> Testmonials</h1>
						<pre>
							<img src="{{asset('public/upload/testimonial/'.$s->image)}}" height="50px;">
							{{$s->altimage}}
							{{$s->name}}
							{{$s->description}}
							{{$s->seotitle}}
							{{$s->keywords}}
							{{$s->seodescription}}
						</pre>
					<div class="form-group col-md-3" >
						<a href="{{URL()->previous()}}"> <button type="submit" class="btn btn-default bg-yellow ">Back</button></a>
					</div>
					<div class="col-md-3" >
                              <form action="{{route('del.testmonial',$s->id)}}" method="post" enctype="multipart/form-data" >
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