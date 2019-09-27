@extends('cd-admin.home-master')

@section('page-title')	
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dashboard
		</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-dashboard"></i> Dashboard</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<!-- /.row -->
		<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$contact}}</h3>

              <p>Contacts</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{route('viewcontact')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$client}}</h3>

              <p>Clients</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('viewclient')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$design}}</h3>

              <p>Designs</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            	<div>
              <h3>{{$article}}</h3>
              <p> Articles</p>
          </div>
          
          
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-7 connectedSortable">
				<!-- Custom tabs (Charts with tabs)-->
				{{-- <div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Booking</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
							</button>
							<!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
						</div>
					</div>
					<div class="box-body">
						<div class="chart">
							<canvas id="areaChart" style="height:250px"></canvas>
						</div>
					</div>
					<!-- /.box-body -->
				</div> --}}
				<!-- /.nav-tabs-custom -->




				<!-- quick email widget -->
				<div class="box box-info">
					@if(Session::has('success'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong> SEND SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
					</div>
					@endif
					<div class="box-header">
						<i class="fa fa-envelope"></i>

						<h3 class="box-title">Quick Email</h3>
						<!-- tools box -->
						
						<!-- /. tools -->
					</div>
					<div class="box-body">
						<form action="{{route('quickreply')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="Email to:" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject" required="">
							</div>
							<div>
								<textarea class="textarea" name="message" required="message" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
							</div>
					
					</div>
					<div class="box-footer clearfix">
						<button type="submit" class="pull-right btn btn-default" id="sendEmail">Send
							<i class="fa fa-arrow-circle-right"></i>
						</button>
					</div>
					</form>
				</div>
			</section>
			<!-- /.Left col -->
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-5 connectedSortable">

				<!-- Map box -->
				{{-- <div class="box box-solid bg-light-blue-gradient">
					<div class="box-header">
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
								<i class="fa fa-calendar"></i>
							</button>
							<button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
								<i class="fa fa-minus"></i>
							</button>
						</div>
						<!-- /. tools -->

						<i class="fa fa-map-marker"></i>

						<h3 class="box-title">
							Visitors
						</h3>
					</div>
					<div class="box-body">
						<div id="world-map" style="height: 250px; width: 100%;"></div>
					</div>
					<!-- /.box-body-->
					<div class="box-footer no-border">
						<div class="row">
							<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								<div id="sparkline-1"></div>
								<div class="knob-label">Visitors</div>
							</div>
							<!-- ./col -->
							<div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
								<div id="sparkline-2"></div>
								<div class="knob-label">Online</div>
							</div>
							<!-- ./col -->
							<div class="col-xs-4 text-center">
								<div id="sparkline-3"></div>
								<div class="knob-label">Exists</div>
							</div>
							<!-- ./col -->
						</div>
						<!-- /.row -->
					</div>
				</div> --}}
				<!-- /.box -->

				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Recent Emails </h3>

						
					</div>
					<!-- /.box-header -->
					
					<table class="table table-hover">
                <tr>
                  <th>Email to</th>
                  <th>Subject</th>
                  <th>Message</th>
                </tr>
                

                  

               
            </table>
					
					<!-- /.box-body -->
					<div class="box-footer text-center">
						<a href="#" class="uppercase">View All Quick mails</a>
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- Calendar -->
				<!-- /.box -->

			</section>
			<!-- right col -->
		</div>
		<!-- /.row (main row) -->

	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection