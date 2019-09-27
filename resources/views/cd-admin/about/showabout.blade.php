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
		<div>
          <a href="{{route('view.team')}}"><button class="btn btn-default bg-green " >View Teams
          </button></a>
          <a href="{{route('viewclient')}}"><button class="btn btn-default bg-green " >View client
          </button></a>
        </div>
		<div class="Content col-md-10" style="margin-top: 35px;" > 
			<div class="box box-info ">
				<div class="box-header with-border">
					<h1 style="text-align: center;"> Show About</h1>
					<pre>
						<img src="{{asset('public/upload/about/'.$d->image)}}" height="50px;">
						Description : {{$d->description}}
						Summary Title : {{$d->stitle1}}
						Summary Description : {{$d->sdescription1}}
						Summary Title : {{$d->stitle2}}
						Summary Description : {{$d->sdescription2}}
						Summary Title : {{$d->stitle3}}
						Summary Description : {{$d->sdescription}}
					</pre>
					<a href="{{route('showeditabout')}}"><button type="submit" class="btn btn-default bg-green " >Edit</button></a>
				</div>
			</div>
		</div>

	</div>
</div>

@endsection