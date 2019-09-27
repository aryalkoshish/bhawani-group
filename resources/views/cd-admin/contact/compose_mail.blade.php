@extends('cd-admin.home-master')

@section('page-title')  
Home
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
      <section class="content-header col-md-11">
      <h1> Compose Mail</h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
          <li >Booking</li>
          <li class="active">Compose</li>
        </ol>
</section>

  <div class="container">
           <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>

          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
          <!--   <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="mailbox.html"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right"></span></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                
                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right"></span></a>
                </li>
                
              </ul>
            </div> -->
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
          <div class="box box-solid">
            
            <!-- /.box-header -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Compose Reply to : {{$deo->email}}</h3>
            </div>
            <!-- /.box-header -->
            <form action="{{route('storereply')}}" method="post" >
              @csrf
            <div class="box-body">
              <div class="form-group">
                <input class="form-control" placeholder="{{$deo->email}}" name="to" value="{{$deo->email}}" >
                <div>{{$errors->first('to')}}</div>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Subject:" name="subject" >
                <div>{{$errors->first('subject')}}</div>
              </div>
              <div class="form-group" name="message">
                    <textarea class="summernote" class="form-control" style="height: 300px" name="message" >
                      Your text here.
                    </textarea>
                  
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="pull-right">
                
                <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
              </div>
              <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
            </div>
          </form>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
       
     </div>
</div>
<!-- /.content-wrapper -->
@endsection